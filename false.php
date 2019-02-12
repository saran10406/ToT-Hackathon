<?php
  if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_email'])){
    echo "<meta http-equiv='refresh' content='0 ;url=./?p=login'>";
    exit();
  }
 ?>
<div class="container">
  <div class="card bg-danger">
    <div class="card-body text-center">
      <div class="mt-5 mb-5">
        <img src="img/iconfinder_22_3561855.png">
        <h1 class="text-white mt-5"><i class="fas fa-times"></i> ไม่ถูกต้อง</h1>
      </div>
    </div>
  </div>
</div>
