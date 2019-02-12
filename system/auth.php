<?php
  session_start();
  header('Access-Control-Allow-Origin: *');
  include('connectdb.php');
  error_reporting(~E_NOTICE );
  $response = array();
  if($_SERVER['REQUEST_METHOD'] === 'POST'){

      $User_id = mysqli_real_escape_string($Connect,$_POST['User_id']);
      $User_password = mysqli_real_escape_string($Connect,$_POST['User_password']);
      $ObjResult = mysqli_query($Connect,"SELECT Em_Id,Em_Email FROM Employee WHERE Em_Id='$User_id' AND Em_Password='$User_password'");
      $Result = mysqli_fetch_assoc($ObjResult);
      $num = mysqli_num_rows($ObjResult);
      if($num <= 0){
        $response['status'] = 'error';
        $response['message'] = 'Not User data';
      }else{
        $response['status'] = 'success';
        $response['message'] = 'Login Success';
        $_SESSION['user_id'] = $Result['Em_Id'];
        $_SESSION['user_email'] = $Result['Em_Email'];
      }

  }else{
    $response['status'] = 'error';
    $response['message'] = 'Empty Action';
  }
  echo json_encode($response);
 ?>
