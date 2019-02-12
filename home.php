  <?php
    if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_email'])){
      //echo "<meta http-equiv='refresh' content='0 ;url=./?p=login'>";
      //exit();
    }
    if(!isset($_SESSION["English"])){
      $_SESSION["English"] =0;
    }
    if(!isset($_SESSION["Star_English"])){
      $_SESSION["Star_English"] = 0;
    }
    if(!isset($_SESSION["Check"])){
      $_SESSION["Check"] = 1;
    }
   ?>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-xl-8 col-md-8 col-sm-12 mb-2">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <i class="fas fa-user"></i> PROFILE
                  </div>
                  <div class="card-body text-center">
                    <div class="row ">
                      <div class="col-xl-4">
                        <img src="img/iconfinder_3_avatar_2754579 (1).png" alt="..." class="img-thumbnail">
                      </div>
                      <div class="col-xl-8">
                        <h5 class="mt-4"><i class="fas fa-id-card"></i> Name : Saran Keawnang</h5>
                        <h5 class="mt-4"><i class="fas fa-user-tie"></i> Position : Computer Engineer</h5>
                        <h5 class="mt-4"><i class="fas fa-align-justify"></i> Department : Engineer</h5>
                        <h5 class="mt-4"><i class="fas fa-star"></i> Point : 10 Point</h5>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-12 mt-2">
                <div class="card">
                  <div class="card-header">
                    <i class="fas fa-user"></i> ผลการประเมิน
                  </div>
                  <div class="card-body text-center">
                    <div class="row ">
                      <div class="col-xl-8">
                        <canvas id="myChart" width="300" height="300" style='margin-left:auto;margin-right:auto'></canvas>
                        <script>
                        var ctx = document.getElementById("myChart").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'radar',
                            data: {
                                labels: ["English", "PHP", "HTML", "CSS", "SQL"],
                                datasets: [{
                                    label: 'Status of Result',
                                    data: [<?php if(isset($_SESSION["English"])){ echo $_SESSION["English"];} else { echo 0; } ?>, 4, 7, 5, 3],
                                    backgroundColor: [
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                            responsive: false,
                            maintainAspectRatio: true,
                            scale: {
                                ticks: {
                                    beginAtZero: true,
                                    max: 10
                                }
                              }
                            }
                        });
                        </script>
                      </div>
                      <?php
                      if($_SESSION["Check"]){
                          echo '<div class="col-xl-4" style="margin-top:auto;margin-bottom:auto">                        <img src="https://static.thenounproject.com/png/55168-200.png" alt="..." class="img-thumbnail">                        <div>                          <a href="./?p=event">                          Unknown Type <br>(Click Here to Check)                        </a>                        </div>                      </div>';
                      }
                      else{
                        echo '<div class="col-xl-4" style="margin-top:auto;margin-bottom:auto">                      <img src="https://image.flaticon.com/icons/svg/1332/1332044.svg" alt="..." class="img-thumbnail">                      <div>                        Type 1 Perfectionist                      </div>                    </div>';
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-2">
                <div class="card">
                  <div class="card-header">
                    <i class="fas fa-user"></i> เพื่อนร่วมแผนก
                  </div>
                  <div class="card-body text-center">
                    <table class="table table-bordered table-responsive table-striped">
                      <thead>
                        <tr>
                          <th rowspan="2">No.</th>
                          <th rowspan="2">Firstname</th>
                          <th rowspan="2">Lastname</th>
                          <th rowspan="2">Type</th>
                          <th colspan="5">Score</th>
                        </tr>
                        <tr>
                          <td>English</td>
                          <td>PHP</td>
                          <td>HTML</td>
                          <td>CSS</td>
                          <td>MySQL</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Saran </td>
                          <td>Keawnang</td>
                          <td> 1 </td>
                          <td> <?php if(isset($_SESSION["Star_English"])){ echo $_SESSION["Star_English"];} else { echo 0; } ?> <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 11 <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 16 <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 8 <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 3 <i class="fas fa-star" style="font-size:8px"></i></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Supapron </td>
                          <td>Wiroonphan</td>
                          <td> 4 </td>
                          <td> 8 <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 15 <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 27 <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 6 <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 17 <i class="fas fa-star" style="font-size:8px"></i></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Jiranuwat</td>
                          <td>Jaiyen</td>
                          <td> 7 </td>
                          <td> 5 <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 18 <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 3 <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 4 <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 6 <i class="fas fa-star" style="font-size:8px"></i></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Tanaphon </td>
                          <td>Kleaklom</td>
                          <td> 3 </td>
                          <td> 19 <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 4 <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 6 <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 8 <i class="fas fa-star" style="font-size:8px"></i></td>
                          <td> 9 <i class="fas fa-star" style="font-size:8px"></i></td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 col-sm-12">
            <div class="card" style="height:100%">
              <div class="card-header">
                <i class="fas fa-wrench"></i> SKILL
              </div>
              <div class="card-body text-primary">
                <a href="./?p=game" class="btn btn-block btn-outline-secondary mb-2" style="border-color:#dee4ea!important">
                  <div class="card-body">
                    <h3 class=""><img src="img/iconfinder_my_sql_682683.png"> English</h3>
                    <hr />
                    <h3 class="text-right"> <?php if(isset($_SESSION["Star_English"])){ echo $_SESSION["Star_English"];} else { echo 0; } ?> <i class="fas fa-star"></i> </h3>
                  </div>
                </a>
                <a href="./?p=game" class="btn btn-block btn-outline-secondary mb-2" style="border-color:#dee4ea!important">
                  <div class="card-body">
                    <h3><img src="img/iconfinder_php_3069654.png"> PHP</h3>
                    <hr />
                    <h3 class="text-right"> 11 <i class="fas fa-star"></i> </h3>
                  </div>
                </a>
                <a href="./?p=game" class="btn btn-block btn-outline-secondary mb-2" style="border-color:#dee4ea!important">
                  <div class="card-body">
                    <h3 class=""><img src="img/iconfinder_html5_245995.png"> HTML5</h3>
                    <hr />
                    <h3 class="text-right"> 16 <i class="fas fa-star"></i> </h3>
                  </div>
                </a>
                <a href="./?p=game" class="btn btn-block btn-outline-secondary mb-2" style="border-color:#dee4ea!important">
                  <div class="card-body">
                    <h3 class=""><img src="img/iconfinder_badge-css-3_317756.png"> CSS</h3>
                    <hr />
                    <h3 class="text-right"> 8 <i class="fas fa-star"></i> </h3>
                  </div>
                </a>
                <a href="./?p=game" class="btn btn-block btn-outline-secondary mb-2" style="border-color:#dee4ea!important">
                  <div class="card-body">
                    <h3 class=""><img src="img/iconfinder_my_sql_682683.png"> MySQL</h3>
                    <hr />
                    <h3 class="text-right"> 3 <i class="fas fa-star"></i> </h3>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
