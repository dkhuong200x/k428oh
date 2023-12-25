<?php
session_start();
  ob_start();

$info = DB::queryFirstRow("SELECT * FROM settings WHERE id='1'");
$giabill = trim($info['price']);
$minnap = trim($info['min']);
$key = trim($info['serial_key']);
$title = trim($info['title']);
$shorttitle = trim($info['shorttitle']);
$mota = trim($info['description']);
$stk = trim($info['stk']);
$ctk = trim($info['ctk']);
$bank = trim($info['bank']);
$link = trim($info['link']);
function thongbao($status,$content){
    if($status == 'error'){
        $status = 'danger';
    }
   return '<div class="mt-3 alert alert-'.$status.'" role="alert">
  '.$content.'
</div>';
}
if(isset($_SESSION['username'])){
    $user = DB::queryFirstRow("SELECT * FROM users WHERE username=%s", $_SESSION['username']);
    $sodu = $user['sodu'];
}