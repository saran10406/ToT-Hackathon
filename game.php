<div class="container">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-xl-10">
          <h2 class=""><i class="fas fa-angle-right"></i>&ensp;<span id="qt_text">$sum = 20 + 5; เก็บข้อมูลแบบใด ?</span></h2>
        </div>
        <div class="col-xl-2 mb-2">
          <button class="btn btn-danger btn-block"><i class="fas fa-stopwatch"></i>&ensp;<span id="timer">0.10 วินาที</span></button>
        </div>
      </div>
      <div class="card" style="background-color:#efefef!important">
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6 col-md-6 mb-4 mt-4">
              <button class="btn btn-block btn-success mb-2">
                <div class="card-body">
                  <h1 class="mt-5 mb-5"><i class="fas fa-circle"></i>&ensp;<span id="cho_0">String</span></h1>
                </div>
              </button>
            </div>
            <div class="col-xl-6 col-md-6 mb-4 mt-4">
              <button class="btn btn-block btn-danger mb-2">
                <div class="card-body">
                  <h1 class="mt-5 mb-5"><i class="fas fa-circle"></i>&ensp;<span id="cho_1">Integer</span></h1>
                </div>
              </button>
            </div>
            <div class="col-xl-6 col-md-6 mb-4 mt-4">
              <button class="btn btn-block btn-info mb-2">
                <div class="card-body">
                  <h1 class="mt-5 mb-5"><i class="fas fa-circle"></i>&ensp;<span id="cho_2">Boolean</span></h1>
                </div>
              </button>
            </div>
            <div class="col-xl-6 col-md-6 mb-4 mt-4">
              <button class="btn btn-block btn-secondary mb-2">
                <div class="card-body">
                  <h1 class="mt-5 mb-5"><i class="fas fa-circle"></i>&ensp;<span id="cho_3">Double</span></h1>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const data = {
      "questions":{
          "0":{
              "text": "1 + 1 = ?",
              "answer_key": "1",
              "choices":{
                  "0": { "text": "1" },
                  "1": { "text": "2" },
                  "2": { "text": "3" },
                  "3": { "text": "4" }
              }
          },
          "1":{
              "text": "2 + 2 = ?",
              "answer_key": "1",
              "choices":{
                  "0": { "text": "3" },
                  "1": { "text": "4" },
                  "2": { "text": "5" },
                  "3": { "text": "6" }
              }
          }
      }
  }

  var timerSeconds = new Date().getTime()
  var nextTime = 0
  var qt_id=0
  var max_qt = 1
  
  $().ready(function(){

      console.log(data);

      setQuestion(qt_id)

  })

  function setQuestion(id){

      $('#qt_text').text(data['questions'][id]['text'])

      setChoices(data['questions'][id]['choices'])

      nextTime = new Date().getTime() + (11 * 1000);

      startTimer()
  }

  function setChoices(arr_cho){
      for(var i = 0; i < 4; i++){
          $('#cho_'+i).text(arr_cho[i]['text'])
      }
  }

  function startTimer(){
      let timer = setInterval(function () {
          timerSeconds = Math.ceil((nextTime - new Date().getTime()) / 1000)
          $('#timer').text(formatTime())
          
          if (timerSeconds <= 0) {
              $('#timer').text('Time out!')
              clearInterval(timer);
              if(qt_id < max_qt)
                  setQuestion(++qt_id);
              else{
                  $('#timer').text('End!')
                  return
              }
              
          }

      }, 1000);
  }

  function formatTime(){
      var minutes = Math.floor(timerSeconds / 60);
      var seconds = Math.ceil(timerSeconds % 60);
      return minutes + ':' + (seconds < 10 ? '0' : '') + seconds
  }
</script>
