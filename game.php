<div class="container">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-xl-10">
          <h2 class=""><i class="fas fa-angle-right"></i>&ensp;<span id="qt_text">เกมประลองปัญญาด้าน PHP</span></h2>
        </div>
        <div class="col-xl-2 mb-2">
          <button class="btn btn-danger btn-block"><i class="fas fa-stopwatch"></i>&ensp;<span id="timer">Waiting</span></button>
        </div>
      </div>
      <div class="card" style="background-color:#efefef!important">
        <div class="card-body">
          <div class="row EndQ">
          <div class="col-xl-6 col-md-6 mb-4 mt-4" style="margin-right:auto;margin-left:auto">
            <h1 align="center"><img src="img/iconfinder_php_3069654.png" height="100px" width="100px"></h1><br>
            <h3 align="center">คะแนนที่คุณได้ 1/2 <i class="fas fa-star"></i><i class="fas fa-star"></i> </h3><br><hr><br>
              <a href="./?p=home" class="btn btn-block btn-success mb-1"  onclick="setQuestion()">
                <div class="card-body">
                  <h1 class="mt-1 mb-1"><i class="fas fa-angle-right"></i>&ensp;<span>End</span></h1>
                </div>
              </a>
            </div>
          </div>
          <div class="row WaitQ">
            <div class="col-xl-6 col-md-6 mb-4 mt-4" style="margin-right:auto;margin-left:auto">
              <button class="btn btn-block btn-success mb-2"  onclick="setQuestion()">
                <div class="card-body">
                  <h1 class="mt-2 mb-2"><i class="fas fa-angle-right"></i>&ensp;<span id='WaitQ'>Start</span></h1>
                </div>
              </button>
            </div>
          </div>
          <div class="row DoQ">
            <div class="col-xl-6 col-md-6 mb-4 mt-4">
              <button class="btn btn-block btn-success mb-2 cho_0">
                <div class="card-body">
                  <h1 class="mt-5 mb-5"><i class="fas fa-circle"></i>&ensp;<span id="cho_0">String</span></h1>
                </div>
              </button>
            </div>
            <div class="col-xl-6 col-md-6 mb-4 mt-4">
              <button class="btn btn-block btn-danger mb-2 cho_1">
                <div class="card-body">
                  <h1 class="mt-5 mb-5"><i class="fas fa-circle"></i>&ensp;<span id="cho_1">Integer</span></h1>
                </div>
              </button>
            </div>
            <div class="col-xl-6 col-md-6 mb-4 mt-4">
              <button class="btn btn-block btn-info mb-2 cho_2">
                <div class="card-body">
                  <h1 class="mt-5 mb-5"><i class="fas fa-circle"></i>&ensp;<span id="cho_2">Boolean</span></h1>
                </div>
              </button>
            </div>
            <div class="col-xl-6 col-md-6 mb-4 mt-4">
              <button class="btn btn-block btn-secondary mb-2 cho_3">
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

<button class="chat-btn col-md-3" id="chat_btn">
    <p class="chat-welcome text-center col-md-12"><span class="text-left">ต้องการคำใบ้ คุยกับเราสิ</span>&ensp;<i class="fa fa-angle-up arrow text-right" aria-hidden="true"></i></p>
</button>
<div class="chat-box col-md-3">
  <iframe
    allow="microphone;"
    width="100%"
    height="100%"
    class="dialog-flow-frame"
    src="https://console.dialogflow.com/api-client/demo/embedded/b561eab2-8ef6-4162-8dde-96e547c87b7c">
  </iframe>
</div>

<!-- jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
  const data = {
      "questions":{
          "0":{
              "text": "1 + 1 = ?",
              "answer_key": "1",
              "type" : {
                "0": 'PHP',
                "1": '1'
              },
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
              "type" : {
                "0": 'PHP',
                "1": '1'
              },
              "choices":{
                  "0": { "text": "3" },
                  "1": { "text": "4" },
                  "2": { "text": "5" },
                  "3": { "text": "6" }
              }
          }
      }
  }

  var score = 0

  var timerSeconds = new Date().getTime()
  var nextTime = 0
  var qt_id=0
  var max_qt = 1
  var action = 0

  $().ready(function(){

      console.log(data);$(".DoQ").hide();
      $(".EndQ").hide();
      $('[class*="cho_"]').click(function(){
        if($(this).find('[id*="cho_"]').attr('id').substr(4) == data['questions'][qt_id-1]['answer_key']){
          console.log(score++)
        }
        action = 1 ;
      })
  })

  function setQuestion(){

      $('#qt_text').text(data['questions'][qt_id]['text'])

      setChoices(data['questions'][qt_id]['choices'])

      nextTime = new Date().getTime() + (16 * 1000);

      startTimer()
  }

  function setChoices(arr_cho){
      for(var i = 0; i < 4; i++){
          $('#cho_'+i).text(arr_cho[i]['text'])
      }
  }

  function startTimer(){
    $(".WaitQ").hide();
    $(".DoQ").fadeOut(200,function(){
      $(".DoQ").fadeIn(500,function(){
        ++qt_id
        let timer = setInterval(function () {
            timerSeconds = Math.ceil((nextTime - new Date().getTime()) / 1000)
            $('#timer').text(formatTime())
            if (timerSeconds <= 0 || action) {
                action = 0 ;
                $('#timer').text('Time out!')
                clearInterval(timer);
                if(max_qt > qt_id-1){
                  setQuestion()
                }
                else{
                  $("#qt_text").text("เกมประลองปัญญาด้าน PHP")
                  $(".DoQ").fadeOut(200,function(){
                    $(".EndQ").fadeIn(500,function(){
                    })
                  })
                }
            }
        }, 100);
      })
    })
  }

  function formatTime(){
      var minutes = Math.floor(timerSeconds / 60);
      var seconds = Math.ceil(timerSeconds % 60);
      return minutes + ':' + (seconds < 10 ? '0' : '') + seconds
  }

  /*
  * sleep
  * sleep the porcess
  * @input milliseconds
  * @output -
  * @author Tanaphon Kleaklom (TL)
  * @create Date 2018-10-09
  */
  const sleep = (milliseconds) => {
    return new Promise(resolve => setTimeout(resolve, milliseconds))
  }

  $('.chat-footer').hide()
  $('.popup-area').hide()

  $('#chat_btn').click(function(){
      if ( !$('.chat-box').hasClass('chat-box-active') ) {
          $('.chat-footer').show()
          $('.popup-area').show()
          $('.chat-box').addClass('chat-box-active')
          $(this).addClass('chat-btn-active')
          sleep(400).then(() => {
              $('.arrow').removeClass('fa-angle-up')
              $('.arrow').addClass('fa-angle-down')
          })
      } else {
          $('.chat-box').removeClass('chat-box-active')
          $(this).removeClass('chat-btn-active')
          sleep(400).then(() => {
              $('.chat-footer').hide()
              $('.popup-area').hide()
              $('.arrow').addClass('fa-angle-up')
              $('.arrow').removeClass('fa-angle-down')
          })
      }
  })
</script>
