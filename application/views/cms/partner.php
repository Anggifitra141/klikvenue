<style>
	.modal-title {
		margin-top: -10px;
	}
</style>

<section class="section">
	<div class="section-header">
		<h1>Partner</h1>
	</div>

	<div class="section-body">
		<h2 class="section-title">Manage Partner</h2>

		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<a href="#" onclick="add_Partner()" class="btn btn-icon icon-left btn-success"><i class="far fa-plus-square"></i> Add Partner</a>
				</div><br />
				<div class="card">
					<div class="card-body">
						<div class="">
							<table class="table table-striped" id="table">
								<thead>
									<tr>
										<th class="text-center">
											No
										</th>
										<th>Action</th>
										<th>Name</th>
										<th>Phone Number</th>
										<th>Email</th>
										<th>Website</th>
										<th>Province</th>
										<th>City</th>
										<th>Address</th>
										<th width="500px">Description</th>
										<th>Thumbnail</th>
										<th>Logo</th>
										<th width="100px">Maps</th>
									</tr>
								</thead>

							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal -->
<div class="modal fade" role="dialog" id="modal_Partner">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header  bg-success text-white">
				<h5 class="modal-title">Add Partner</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="POST" id="form_Partner">
					<input type="hidden" name="id">
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" name="name">
									<span class="invalid-feedback"></span>
								</div>
								<div class="form-group">
									<label>Phone Number</label>
									<input type="password" class="form-control" name="phone_no">
									<span class="invalid-feedback"></span>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="text" class="form-control" name="email">
									<span class="invalid-feedback"></span>
								</div>
								<div class="form-group">
									<label>Website</label>
									<input type="text" class="form-control" name="website">
									<span class="invalid-feedback"></span>
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea class="form-control" style="height:180px;" name="description"></textarea>
									<span class="invalid-feedback"></span>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label>Province</label>
									<select class="form-control select2" name="province" id="province">
										
									</select>
									<span class="invalid-feedback"></span>
								</div>
								<div class="form-group">
									<label>City</label>
									<select class="form-control select2" name="city" id="city">

									</select>
									<span class="invalid-feedback"></span>
								</div>
								<div class="form-group">
									<label>Address</label>
									<input type="text" class="form-control" name="address">
									<span class="invalid-feedback"></span>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Thumbnail</label>
											<input type="file" class="form-control" name="thumbnail" placeholder=".JPG, .PNG .JPEG">
											<span class="invalid-feedback"></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Logo</label>
											<input type="file" class="form-control" name="logo" placeholder=".JPG, .PNG .JPEG">
											<span class="invalid-feedback"></span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Maps</label>
									<input type="text" class="form-control" name="maps">
									<span class="invalid-feedback"></span>
								</div>
							</div>


						</div>

					</div>
				</form>
			</div>
			<div class="modal-footer bg-whitesmoke br">
				<button type="button" class="btn btn-secondary float-left" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
				<button type="button" onclick="save();" class="btn btn-outline-success float-right"><i class="fas fa-save"></i> Save</button>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>assets/cms/modules/jquery.min.js"></script>
<script>
	$("input").change(function() {
		$(this).removeClass('is-invalid');
		$(this).next().empty();
	});
	$(document).ready(function() {

		var table = $('#table').DataTable({
			"deferRender": true,
			"scrollCollapse": true,
			"scrollX": true,
			"processing": true,
			"serverSide": true,
			"order": [],
			"ajax": {
				url: "<?php echo site_url('cms/partner/ajax_list') ?>", // json datasource
				type: "POST"
			},
			"fixedColumns": true,
			"columnDefs": [{
				"orderable": false,
				"width": "20%",
				"targets": 0
			}],
		});

		$.ajax({
			url: "<?php echo site_url('cms/api/get_province'); ?>",
			dataType: "json",
			type: "GET",
			async: false,
			success: function(data) {
				var options = '<option value="">-- Select Province --</option>';
				data.forEach(function(d) {
					options += "<option value='" + d.name + "' data-id='" + d.id + "'>" + d.name + "</option>";
				});
				$('#province').html(options);
			},
			error(jqXHR, textStatus, errorThrown) {
				alert('Something wrong happened because: ' + errorThrown)
			}
		});

		$(document).on("change", "#province", function() {
			var province_id = $("#province option:selected").attr("data-id");
			$.ajax({
				url: "<?php echo site_url('cms/api/get_city'); ?>",
				dataType: "json",
				type: "POST",
				async: true,
				data: {
					id: province_id
				},
				success: function(data) {
					var options = '<option value="">-- Select City  --</option>';
					data.forEach(function(d) {
						options += "<option value='" + d.name + "' data-id='" + d.id + "'>" + d.name + "</option>";
					});
					$('#city').html(options);
				},
				error(jqXHR, textStatus, errorThrown) {
					alert('Something wrong happened because: ' + errorThrown)
				}
			});
		});


	});

	/* -- Action -- */
	function add_Partner() {
		save_method = 'add';
		$('.form-control').removeClass('is-invalid'); // clear error class
		$('#form_Partner')[0].reset();
		$('#modal_Partner').modal('show'); // show bootstrap modal
		$('.modal-title').text('Add Partner'); // Set Title to Bootstrap modal title
	}

	function get_Partner(id) {
		save_method = 'update';
		$('#form_Partner')[0].reset();
		$.ajax({
			url: "<?php echo site_url('cms/partner/get_Partner') ?>/" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data) {
				$('[name="id"]').val(data.id);
				$('[name="Partnername"]').val(data.Partnername);
				$('[name="fullname"]').val(data.fullname);
				$('[name="Partner_group"]').val(data.Partner_group);
				$('[name="status"]').val(data.status);

				$('#modal_Partner').modal('show');
				$('.modal-title').text('Update Partner');
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('Error get data from ajax');
			}
		});
	}

	function save() {
		var url;
		if (save_method == 'add') {
			url = "<?php echo site_url('Partner/add_partner') ?>";
		} else {
			url = "<?php echo site_url('Partner/update_partner') ?>";
		}
		// ajax adding data to database
		$.ajax({
			url: url,
			type: "POST",
			data: $('#form_Partner').serialize(),
			dataType: "JSON",
			success: function(data, response) {
				if (data.status) //if success close modal and reload ajax table
				{
					$('#btnSave').text('save'); //change button text
					$('#btnSave').attr('disabled', false); //set button enable 
					//if success close modal and reload ajax table
					$('#modal_Partner').modal('hide');
					iziToast.success({
						title: 'Success !',
						message: 'Data saved successfully ',
						position: 'topRight'
					});
					$('#table').DataTable().ajax.reload();
					// location.reload();// for reload a page
				} else {
					for (var i = 0; i < data.inputerror.length; i++) {
						$('[name="' + data.inputerror[i] + '"]').addClass('is-invalid'); //select parent twice to select div form-group class and add has-error class
						$('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]); //select span help-block class set text error string
					}
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				iziToast.danger({
					title: 'Error !',
					message: 'Please try again',
					position: 'topRight'
				});
			}
		});
	}

	function delete_Ppartner(id) {

		if (event.match(/delete/g)) {
			swal({
					title: "Are you sure ?",
					text: "Once deleted, you will not be able to recover this data !",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						$.ajax({
							url: "<?php echo site_url('Partner/delete_partner') ?>/" + id,
							type: "post",
							complete: function() {
								swal("Your data has been deleted!", {
									icon: "success",
								}).then(function() {
									$('#table').DataTable().ajax.reload();
								});
							}
						});

					} else {
						swal("Data failed deleted !");
					}
				});
		} else {
			iziToast.error({
				title: 'Error !',
				message: 'You have no right to this action.',
				position: 'bottomCenter'
			});
		}
	}
</script>
