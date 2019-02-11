<?php
  date_default_timezone_set('Asia/Bangkok');
  $today_time = date("Y-m-d h:i:sa");
  //$today_day = date('d-m-Y H:i:s');
  //$today_date = date("H:i:s") + ' ' + date('d-m-Y');

  $ServerName = 'localhost';
  $ServerUsername = 'root';
  $ServerPassword = 'saran1230';
  $ServerDataBase = 'totskill';

  $Connect = mysqli_connect($ServerName,$ServerUsername,$ServerPassword,$ServerDataBase);
  mysqli_query($Connect,"SET NAMES UTF8");
  if(!$Connect){
    echo 'Error';
    exit;
  }
 ?>
