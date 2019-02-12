<?php
  if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_email'])){
    echo "<meta http-equiv='refresh' content='0 ;url=./?p=login'>";
    exit();
  }
 ?>
<div class="container">
  <div class="card bg-success">
    <div class="card-body text-center">
      <div class="mt-5 mb-5">
        <img src="img/iconfinder_2_3561853.png">
        <h1 class="text-white mt-5"><i class="fas fa-check"></i> ถูกต้อง</h1>
      </div>
    </div>
  </div>
</div>
