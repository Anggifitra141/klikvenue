<?php defined("BASEPATH") or die("ACCESS DENIED !");

class M_rajaongkir extends CI_Model {
  function __construct(){
    parent::__construct();
  }

  private function get_rajaongkir_key(){
    return "key: f788002cca6e5153724a26a003139441";
  }

  // pakai rajaongkir sistem
  private function get_curl($url, $header, $req="GET", $data="", $timeout=10){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => $timeout,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => $req,
      CURLOPT_POSTFIELDS => $data,
      CURLOPT_HTTPHEADER => $header
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    return ["response"=>$response, "err"=>$err];
  }

  public function get_provinsi(){
    $output = [];
    $cek = $this->db->get_where("rajaongkirs",["type"=>"province"]);
    if($cek->num_rows() > 0){
      $output = $cek->result();
    }else{
      $curl = $this->get_curl("https://pro.rajaongkir.com/api/province", [$this->get_rajaongkir_key()]);
      if(!$curl["err"]){
        try{
          $response = json_decode($curl["response"]);
          $resp = $response->rajaongkir->results;
          foreach($resp as $r){
            $output[] = ["id"=>$r->province_id, "name"=>$r->province];
            $cek2 = $this->db->get_where("rajaongkirs",["id"=>$r->province_id, "type"=>"province"]);
            if($cek2->num_rows() == 0){
              // insert new
              $this->db->insert("rajaongkirs", ["id"=>$r->province_id, "type"=>"province", "name"=>$r->province]);
            }
          }
        }
        catch(Exception $e){
          // nothing todo man
        }
      }
    }
    return $output;
  }

  public function get_kota($id){
    $output = [];
    $cek = $this->db->get_where("rajaongkirs",["type"=>"city", "parent_id"=>$id]);
    if($cek->num_rows() > 0){
      $output = $cek->result();
    }else{
      $curl = $this->get_curl("https://pro.rajaongkir.com/api/city?province=$id", [$this->get_rajaongkir_key()]);
      if(!$curl["err"]){
        try{
          $response = json_decode($curl["response"]);
          $resp = $response->rajaongkir->results;
          foreach($resp as $r){
            $output[] = ["id"=>$r->city_id, "name"=>$r->type." ".$r->city_name];
            $cek2 = $this->db->get_where("rajaongkirs",["id"=>$r->city_id, "type"=>"city"]);
            if($cek2->num_rows() == 0){
              // insert new
              $this->db->insert("rajaongkirs", ["id"=>$r->city_id, "type"=>"city", "name"=>$r->type." ".$r->city_name, "parent_id"=>$id]);
            }
          }
        }
        catch(Exception $e){
          // nothing todo man
        }
      }
    }
    return $output;
  }

  public function get_kecamatan($id){
    $output = [];
    $cek = $this->db->get_where("rajaongkirs",["type"=>"subdistrict", "parent_id"=>$id]);
    if($cek->num_rows() > 0){
      $output = $cek->result();
    }else{
      $curl = $this->get_curl("https://pro.rajaongkir.com/api/subdistrict?city=$id", [$this->get_rajaongkir_key()]);
      if(!$curl["err"]){
        try{
          $response = json_decode($curl["response"]);
          $resp = $response->rajaongkir->results;
          foreach($resp as $r){
            $output[] = ["id"=>$r->subdistrict_id, "name"=>$r->subdistrict_name];
            $cek2 = $this->db->get_where("rajaongkirs",["id"=>$r->subdistrict_id, "type"=>"subdistrict"]);
            if($cek2->num_rows() == 0){
              // insert new
              $this->db->insert("rajaongkirs", ["id"=>$r->subdistrict_id, "type"=>"subdistrict", "name"=>$r->subdistrict_name, "parent_id"=>$id]);
            }
          }
        }
        catch(Exception $e){
          // nothing todo man
        }
      }
    }
    return $output;
  }

  public function cek_ongkir(){
    $output = [];
    $origin = "";
    $origin_id="";
    $origin_type="";
    $destination="";
    $destination_id="";
    $destination_type="";
    if($this->input->post("kota_sender")){
      $origin = $this->input->post("kota_sender",TRUE);
      $origin_type = "city";
    }
    if($this->input->post("kecamatan_sender")){
      $origin = $this->input->post("kecamatan_sender",TRUE);
      $origin_type = "subdistrict";
    }
    if($this->input->post("kota_receiver")){
      $destination = $this->input->post("kota_receiver",TRUE);
      $destination_type = "city";
    }
    if($this->input->post("kecamatan_receiver")){
      $destination = $this->input->post("kecamatan_receiver",TRUE);
      $destination_type = "subdistrict";
    }
    $berat = "1000";
    if($this->input->post("berat")){
      $berat = $this->input->post("berat");
    }
    if($berat > 50000)
    {
      $output = ["error"=>1, "message"=>"Berat maksimum adalah 50KG !"];
    }
    else
    {
      if(!empty($origin)){
        $odb = $this->db->get_where("rajaongkirs",["name"=>$origin]);
        $o = $odb->row();
        $origin_id = $o->id;
        $odb = $this->db->get_where("rajaongkirs",["name"=>$destination]);
        $o = $odb->row();
        $destination_id = $o->id;
        $kurir = "jne";
        if($this->input->post("site_id")){
          $site_id = $this->input->post("site_id",TRUE);
          $sites = $this->db->get_where("sites",["site_id"=>$site_id]);
          $s = $sites->row();
          $kurir = strtolower(str_replace(",",":",$s->kurir));
        }
        else
        {
          $kurir = 'jne:pos:tiki:wahana:sicepat:jnt:jet:indah';
        }
        $q = "origin=$origin_id&originType=$origin_type&destination=$destination_id&destinationType=$destination_type&";
        $q .= "weight=$berat&courier=$kurir";
        $curl = $this->get_curl("https://pro.rajaongkir.com/api/cost", [$this->get_rajaongkir_key(), "content-type: application/x-www-form-urlencoded"], "POST", $q);
        //$output["url"] = $q;
        if(!$curl["err"]){
          try
          {
            $response = json_decode($curl["response"]);
            $resp = $response->rajaongkir->results;
            $output = $resp;
          }
          catch(Exception $e){
            // nothing todo man
          }

        }
      }
      else
      {
        $output = ["error"=>1, "message"=>"Informasi alamat pengirim belum ditentukan."];
      }
    }

    return $output;
  }

  public function track_order($waybill = "", $kurir = ""){
    $output = [];
    if($this->input->post("no_resi")){
      $waybill = $this->input->post("no_resi",TRUE);
    }
    if($this->input->post("kurir")){
      $kurir = strtolower($this->input->post("kurir",TRUE));
    }

    $q = "waybill=$waybill&courier=$kurir";
    $curl = $this->get_curl("https://pro.rajaongkir.com/api/waybill", [$this->get_rajaongkir_key(), "content-type: application/x-www-form-urlencoded"], "POST", $q, 30);
    //$output["url"] = $q;
    if(!$curl["err"]){
      try
      {
        $resi = $waybill;
        $response = json_decode($curl["response"]);
        $resp = $response->rajaongkir;

        if($resp && $resp->status && $resp->status->code == 200 && $resp->result->delivered){
          // jika sudah terkirim maka update status di database
          $orders = $this->db->get_where("orders",["no_resi"=>$resi,"status"=>"SHIPPING"]);
          $batch = [];
          $this->load->model("notification");
          foreach($orders->result() as $o){
            if($o->status !== "DONE")
            {
              $batch[] = ["status"=>"DONE","order_id"=>$o->order_id,"waktu"=>time()];
              $this->notification->insert_site($o->site_id, "Order di dengan <br />Invoice : <b>".$o->invoice. "</b>.<br /> Status : <b>DONE</b>. ","icon-cart5");
            }
          }
          if(count($batch) > 0){
            $this->db->insert_batch("order_status",$batch);
            $this->db->update("orders",["status"=>"DONE"], ["no_resi"=>$resi,"status"=>"SHIPPING"]);
          }

        }
        $output = $resp;
      }
      catch(Exception $e){
        // nothing todo man
      }
    }
    else{

    }
    return $output;
  }

  public function get_kelurahan($id){
    //$p = $this->db->get_where("villages",["district_id"=>$id]);
    //return $p->result();
    return [];
  }
}
