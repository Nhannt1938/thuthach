<?php 
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: POST");
  header("Access-Control-Max-Age: 3600");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

  include('simple_html_dom.php');
  $html = file_get_html('https://ketqua.vn/xsmb/kqxs-ha-noi');
  $arr = array();
  $noidungdb = $html->find('.txt-special-prize',0)->innertext;
  array_push($arr, $noidungdb);
  for($i=0;$i<=25;$i++){
  $noidung = $html->find('.txt-normal-prize',$i)->innertext;
  array_push($arr, $noidung);
  };
  echo json_encode($arr)
 ?>