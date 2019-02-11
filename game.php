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

  $().ready(function(){

      console.log(data);

      setQuestion(qt_id)

  })

  function setQuestion(id){

      $('#qt_text').text(data['questions'][id]['text'])

      setChoices(data['questions'][id]['choices'])

      nextTime = new Date().getTime() + (31 * 1000);

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
