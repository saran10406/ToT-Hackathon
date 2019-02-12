<?php
  if(isset($_SESSION['user_id']) || isset($_SESSION['user_email'])){
    echo "<meta http-equiv='refresh' content='0 ;url=./?p=home'>";
    exit();
  }
  $_SESSION['Check'] = 1;
 ?>
<script src="js/auth.js"></script>
<div class="row justify-content-md-center">
  <div class="col-xl-7 col-md-7">

    <div class="card">
      <div class="card-body">
        <div id="Login_Success" style="display:none">
          <div class="alert alert-success" role="alert">
            <h4 class="text-center"><i class="fas fa-check"></i> Login Success.</h4>
          </div>
        </div>
        <div id="Login_Error" style="display:none">
          <div class="alert alert-danger" role="alert">
            <h4 class="text-center"><i class="fas fa-times"></i> Incorrect Employee ID or Password!</h4>
          </div>
        </div>
        <h1 class="text-center text-dark mb-4 mt-4" style="font-weight: bold;">Skill Challenger</h1>
        <img class="rounded mx-auto d-block" src="img/iconfinder_3_avatar_2754579.png">

        <form class="mb-4 mr-2 ml-2">
          <div class="form-group">
            <h4 class="text-secondary"><i class="fas fa-id-card"></i> Employee ID</h4>
            <input type="text" class="form-control" name="User_id" id="User_id" aria-describedby="emailHelp" placeholder="Enter Employee ID" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your Employee ID with anyone else.</small>
          </div>
          <div class="form-group">
            <h4 class="text-secondary"><i class="fas fa-key"></i> Password</h4>
            <input type="password" class="form-control" name="User_password" id="User_password" placeholder="Enter Password" required>
          </div>
          <button id="Btn_Loading" style="display:none" class="btn btn-primary btn-lg btn-block mt-4" type="button" disabled>
            <span class="spinner-border spinner-border-lg" role="status" aria-hidden="true"></span>
            Loading...
          </button>
          <button id="Btn_Login" type="submit" class="btn btn-primary btn-lg btn-block mt-4"><i class="fas fa-sign-in-alt"></i> Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
