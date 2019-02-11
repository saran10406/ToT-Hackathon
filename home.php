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
                      <canvas id="myChart" width="250" height="250"></canvas>
                      <script>
                      var ctx = document.getElementById("myChart").getContext('2d');
                      var myChart = new Chart(ctx, {
                          type: 'radar',
                          data: {
                              labels: ["English", "PHP", "HTML", "CSS", "SQL"],
                              datasets: [{
                                  label: 'Status of Result',
                                  data: [8, 4, 7, 5, 2],
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
                              scales: {
                                  yAxes: [{
                                      ticks: {
                                          beginAtZero:true
                                      }
                                  }]
                              }
                          }
                      });
                      </script>
                    </div>
                    <div class="col-xl-4" style="margin-top:auto">
                      <img src="img/iconfinder_3_avatar_2754579 (1).png" alt="..." class="img-thumbnail">
                    </div>
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
                        <th>English</th>
                        <th>PHP</th>
                        <th>HTML</th>
                        <th>css</th>
                        <th>MySQL</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Jiranuwat</td>
                        <td>Jaiyen</td>
                        <td> 1 </td>
                        <td><i class="fas fa-star" style="font-size:12px"></i><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Supapron </td>
                        <td>Wiroonphan</td>
                        <td> 1 </td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Saran </td>
                        <td>Keawnang</td>
                        <td> 1 </td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Tanaphon </td>
                        <td>Kleaklom</td>
                        <td> 1 </td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i><i class="fas fa-star" style="font-size:12px"></i></td>
                        <td><i class="fas fa-star" style="font-size:12px"></i></td>
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
                  <h3 class="text-right"><i class="fas fa-star"></i> 20 %</h3>
                </div>
              </a>
              <a href="./?p=game" class="btn btn-block btn-outline-secondary mb-2" style="border-color:#dee4ea!important">
                <div class="card-body">
                  <h3><img src="img/iconfinder_php_3069654.png"> PHP</h3>
                  <hr />
                  <h3 class="text-right"><i class="fas fa-star"></i> 20 %</h3>
                </div>
              </a>
              <a href="./?p=game" class="btn btn-block btn-outline-secondary mb-2" style="border-color:#dee4ea!important">
                <div class="card-body">
                  <h3 class=""><img src="img/iconfinder_html5_245995.png"> HTML5</h3>
                  <hr />
                  <h3 class="text-right"><i class="fas fa-star"></i> 20 %</h3>
                </div>
              </a>
              <a href="./?p=game" class="btn btn-block btn-outline-secondary mb-2" style="border-color:#dee4ea!important">
                <div class="card-body">
                  <h3 class=""><img src="img/iconfinder_badge-css-3_317756.png"> CSS</h3>
                  <hr />
                  <h3 class="text-right"><i class="fas fa-star"></i> 20 %</h3>
                </div>
              </a>
              <a href="./?p=game" class="btn btn-block btn-outline-secondary mb-2" style="border-color:#dee4ea!important">
                <div class="card-body">
                  <h3 class=""><img src="img/iconfinder_my_sql_682683.png"> MySQL</h3>
                  <hr />
                  <h3 class="text-right"><i class="fas fa-star"></i> 20 %</h3>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
