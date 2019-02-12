<?php
  $_SESSION["Check"] = 0;
?>
<div class="container">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-xl-12">
          <h2 class=""><i class="fas fa-angle-right"></i>&ensp;<span id="qt_text">Enneagram Quiz</span></h2>
        </div>
        <div class="col-xl-2 mb-2" hidden>
          <button class="btn btn-danger btn-block"><i class="fas fa-stopwatch"></i>&ensp;<span id="timer">Waiting</span></button>
        </div>
      </div>
      <div class="card" style="background-color:#efefef!important">
        <div class="card-body">
          <div class="row EndQ">
          <div class="col-xl-6 col-md-6 mb-4 mt-4" style="margin-right:auto;margin-left:auto">
            <h1 align="center"><img src="https://image.flaticon.com/icons/svg/1332/1332044.svg" height="100px" width="100px"></h1><br>
            <h3 align="center">Enneagram ของคุณคือ<br>คนสมบูรณ์แบบ (THE PERFECTIONIST)</h3><br>
            <h4 align="center">บุคลิกคนประเภทนี้ จะเป็นนักปฏิรูป นักต่อสู้เพื่ออุดมคติ ชอบวิพากษ์วิจารณ์ตนเองและผู้อื่น ซื่อสัตย์ มีระเบียบวินัยเคร่งครัด
</h4><br>
            <hr><br>
              <a href="./?p=home"  class="btn btn-block btn-pastel-danger mb-1" >
                <div class="card-body">
                  <h1 class="mt-1 mb-1"><i class="fas fa-angle-right"></i>&ensp;<span>End</span></h1>
                </div>
              </a>
            </div>
          </div>
          <div class="row WaitQ">
            <div class="col-xl-6 col-md-6 mb-4 mt-4" style="margin-right:auto;margin-left:auto">
                <h3 class="text-center mb-3">วิธีในการเล่นเกม</h3>
                <h4 class="text-center mb-5">
                    <p>เลือกช้อยที่ถูกที่สุดภายในเวลาที่กำหนด</p>
                    <p>ถ้าไม่แน่ใจในคำตอบ</p>
                    <p>สามารถถามคำใบ้ผ่านแชทบอทได้</p>
                </h4>
              <button class="btn btn-block btn-pastel-success mb-2"  onclick="setQuestion()">
                <div class="card-body">
                  <h1 class="mt-2 mb-2"><span id='WaitQ'>Start</span></h1>
                </div>
              </button>
            </div>
          </div>
          <div class="row DoQ">
            <div class="col-xl-12 col-md-12 mb-1 mt-1">
              <button class="btn btn-block btn-pastel-1 mb-2 cho_0">
                <div class="card-body">
                  <h3 class="mt-1 mb-1"><span id="cho_0">String</span></h3>
                </div>
              </button>
            </div>
            <div class="col-xl-12 col-md-12 mb-1 mt-1">
              <button class="btn btn-block btn-pastel-2 mb-2 cho_1">
                <div class="card-body">
                  <h3 class="mt-1 mb-1"><span id="cho_1">Integer</span></h3>
                </div>
              </button>
            </div>
            <div class="col-xl-12 col-md-12 mb-1 mt-1">
              <button class="btn btn-block btn-pastel-3 mb-2 cho_2">
                <div class="card-body">
                  <h3 class="mt-1 mb-1"><span id="cho_2">Boolean</span></h3>
                </div>
              </button>
            </div>
            <div class="col-xl-12 col-md-12 mb-1 mt-1">
              <button class="btn btn-block btn-pastel-4 mb-2 cho_3">
                <div class="card-body">
                  <h3 class="mt-1 mb-1"><span id="cho_3">Double</span></h3>
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
      "questions":[
          {
              "text": "ข้อใดคือชีวิตที่คุณปรารถนา",
              "answer_key": "1",
              "choices":{
                  "0": { "text": "มีชีวิตที่ตื่นเต้นและเต็มไปด้วยความบันเทิง" },
                  "1": { "text": "โดดเด่นและได้รับการชื่นชม" },
                  "2": { "text": "ได้รักและถูกรัก" },
                  "3": { "text": "เข้าใจตนเองดีและคนอื่นก็เข้าใจคุณเช่นเดียวกัน" }
              }
          },
          {
              "text": "สำหรับคุณ สิ่งใดสำคัญที่สุด",
              "answer_key": "0",
              "choices":{
                  "0": { "text": "การที่คนอื่นมองว่าฉันนั้นรักเขาและช่วยเหลือเขาได้" },
                  "1": { "text": "การที่ผู้คนปฏิบัติในสิ่งที่ถูกต้องอย่างที่พวกเขาควรจะทำ" },
                  "2": { "text": "การที่คนอื่นมองว่าฉันเป็นคนที่ประสบความสำเร็จ" },
                  "3": { "text": "การมองเห็นสิ่งต่างๆอย่างถูกต้อง ชัดเจน และเป็นไปตามความเป็นจริง" }
              }
          },{
              "text": "หากเหตุการณ์เหล่านี้เกิดขึ้นกับคุณ คุณคิดว่าข้อใดเลวร้ายที่สุด",
              "answer_key": "1",
              "choices":{
                  "0": { "text": "การที่ศีลธรรมตกต่ำลง และการที่ต้องเผชิญกับความผิดพลาด" },
                  "1": { "text": "การที่คุณต้องอยู่ร่วมกับคนที่ไม่เคยรักคุณ ไม่เคยเห็นค่าคุณเลย" },
                  "2": { "text": "การที่คุณทำบางสิ่งบางอย่างผิดพลาดไป และมีคนรู้เข้า" },
                  "3": { "text": "การที่คนอื่นคิดว่าคุณมีความผิดปกติทางอารมณ์" }
              }
          },
          {
              "text": "ข้อใดตรงกับนิสัยของคุณมากที่สุด",
              "answer_key": "3",
              "choices":{
                  "0": { "text": "มนุษยสัมพันธ์ดี สบายๆ เรียบง่าย ใจเย็น" },
                  "1": { "text": "มั่นใจในตัวเองสูง รักการแข่งขัน ทะเยอทะยาน" },
                  "2": { "text": "ช่างคิด เปี่ยมไปด้วยความคิดสร้างสรรค์ มีอารมณ์อ่อนไหว" },
                  "3": { "text": "อบอุ่น ชอบที่จะมอบความรักให้กับผู้อื่น ใจกว้าง" }
              }
          },
          {
              "text": "คุณจะพอใจ และมีความสุข เมื่อคุณ...",
              "answer_key": "3",
              "choices":{
                  "0": { "text": "ซื่อสัตย์กับตัวเอง" },
                  "1": { "text": "ได้เรียนรู้และเชี่ยวชาญในศาสตร์แขนงใดแขนงหนึ่ง" },
                  "2": { "text": "ประสบความสำเร็จ มีผู้คนชื่นชอบคุณ" },
                  "3": { "text": "แข็งแกร่งและเป็นผู้นำ คอยควบคุมผู้อื่น" }
              }
          }
      ]
  }

    var score = 0
    var timerSeconds = new Date().getTime()
    var nextTime = 0
    var qt_id=0
    var max_qt = 3;
    var action = 0

    $().ready(function(){
       data.questions.sort(function(a, b){return 0.5 - Math.random()});
        console.log(data);$(".DoQ").hide();
        $(".EndQ").hide();
        $('[class*="cho_"]').click(function(){
          if(($(this).find('[id*="cho_"]').attr('id').substr(4) == data['questions'][qt_id-1]['answer_key'])&&!action){
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
              timerSeconds = 555;
              $('#timer').text(formatTime())
              if (timerSeconds <= 0 || action) {
                  action = 0 ;
                  $('#timer').text('Time out!')
                  clearInterval(timer);
                  if(max_qt > qt_id-1){
                    setQuestion()
                  }
                  else{
                    $("#qt_text").text("เกมประลองปัญญาด้าน English")
                      $("#score").text(score)
                        $("#maxscore").text(max_qt+1)
                          if(score == 6 || score == 7){
                            $(".Star").append('<br> got +2 <i class="fas fa-star"></i>')
                          }
                          else if(score == 8 || score == 9){
                            $(".Star").append('<br> got +3 <i class="fas fa-star"></i>')
                          }
                          else if(score == 10){
                            $(".Star").append('<br> got +5 <i class="fas fa-star"></i>')
                          }
                          else if(score <= 3){
                            $(".Star").append('<br> got -1 <i class="fas fa-star"></i>')
                          }
                          else{
                            $(".Star").append('<br> got 0 <i class="fas fa-star"></i>')
                          }
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
