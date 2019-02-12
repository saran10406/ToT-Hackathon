<?php
if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_email'])){
  echo "<meta http-equiv='refresh' content='0 ;url=./?p=login'>";
  exit();
}
 ?>
<div class="container">
<div class="row">
    <div class="card col-md-9">
        <div class="card-body">
        <div class="row">
            <div class="col-xl-10">
            <h2 class=""><i class="fas fa-angle-right"></i>&ensp;<span id="qt_text">Tournament</span></h2>
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
                <h3 align="center" class="Star">Your Score is <span id='score'></span>/<span id='maxscore'></span>  </h3><br><hr><br>
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
                <div class="col-xl-6 col-md-6 mb-4 mt-4">
                <button class="btn btn-block btn-pastel-1 mb-2 cho_0">
                    <div class="card-body">
                    <h1 class="mt-5 mb-5"><span id="cho_0">String</span></h1>
                    </div>
                </button>
                </div>
                <div class="col-xl-6 col-md-6 mb-4 mt-4">
                <button class="btn btn-block btn-pastel-2 mb-2 cho_1">
                    <div class="card-body">
                    <h1 class="mt-5 mb-5"><span id="cho_1">Integer</span></h1>
                    </div>
                </button>
                </div>
                <div class="col-xl-6 col-md-6 mb-4 mt-4">
                <button class="btn btn-block btn-pastel-3 mb-2 cho_2">
                    <div class="card-body">
                    <h1 class="mt-5 mb-5"><span id="cho_2">Boolean</span></h1>
                    </div>
                </button>
                </div>
                <div class="col-xl-6 col-md-6 mb-4 mt-4">
                <button class="btn btn-block btn-pastel-4 mb-2 cho_3">
                    <div class="card-body">
                    <h1 class="mt-5 mb-5"><span id="cho_3">Double</span></h1>
                    </div>
                </button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="card col-md-3">
     <div class="card-heading p-2"><h4>คู่แข่งของคุณ</h4></div>
        <div class="card-body">
            <div class="row">
                <div class="card col-md-12 mb-2">
                    แผนกบัชญี
                    <div class="text-right">8 คน</div>
                </div>
                <div class="card col-md-12 mb-2">
                    แผนกช่างซ่อมบำรุง
                    <div class="text-right">7 คน</div>
                </div>
                <div class="card col-md-12 mb-2">
                    แผนกไอที
                    <div class="text-right">10 คน</div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
  const data = {
      "questions":[
          {
              "text": "We’re off to……John. We want to see the new film at the Indra.",
              "answer_key": "1",
              "choices":{
                  "0": { "text": "pick over … come over" },
                  "1": { "text": "pick up … come along" },
                  "2": { "text": "pick on … come by" },
                  "3": { "text": "pick out … come in" }
              }
          },
          {
              "text": "My youngest sister could…..a faucet to get a drink, but she was never able to…..the water all over the floor. ",
              "answer_key": "0",
              "choices":{
                  "0": { "text": "turn on … clean up" },
                  "1": { "text": "turn to … pick up" },
                  "2": { "text": "turn out … put away" },
                  "3": { "text": "turn off … sweep away" }
              }
          },{
              "text": "In ordinary conversation I concentrate my gaze….both eyes of the person addressing me.",
              "answer_key": "1",
              "choices":{
                  "0": { "text": "in" },
                  "1": { "text": "on" },
                  "2": { "text": "at" },
                  "3": { "text": "to" }
              }
          },
          {
              "text": "There were many inconveniences that you have to put……… when you go camping. ",
              "answer_key": "3",
              "choices":{
                  "0": { "text": "off to" },
                  "1": { "text": "away from" },
                  "2": { "text": "cut from" },
                  "3": { "text": "up with" }
              }
          },
          {
              "text": "I think you’d better sort    …..the things you want to keep and the things you want to throw…..before we leave.",
              "answer_key": "0",
              "choices":{
                  "0": { "text": "out, away" },
                  "1": { "text": "with, out" },
                  "2": { "text": "away, out" },
                  "3": { "text": "of, away" }
              }
          },
          {
              "text": '"It has been raining since nine o’clock in the morning; the field is wet. I think we should call….the match this evening."',
              "answer_key": "3",
              "choices":{
                  "0": { "text": "on" },
                  "1": { "text": "at" },
                  "2": { "text": "out" },
                  "3": { "text": "off" }
              }
          },
          {
              "text": '“what did they do during their long holidays together ?” Well, they concentrated …..rest, good eating, and relaxedconversation.”',
              "answer_key": "2",
              "choices":{
                  "0": { "text": "at" },
                  "1": { "text": "in" },
                  "2": { "text": "on" },
                  "3": { "text": "to" }
              }
          },
          {
              "text": '“May I……the lights ?” “Of course. But don’t forget to……the lights when you leave.”',
              "answer_key": "2",
              "choices":{
                  "0": { "text": "turn on … turn down" },
                  "1": { "text": "turn up … turn in" },
                  "2": { "text": "turn on … turn out" },
                  "3": { "text": "turn off … turn up" }
              }
          },
          {
              "text": '"Why don’t you look…..that word in the dictionary if you don’t know its meaning ?"',
              "answer_key": "1",
              "choices":{
                  "0": { "text": "at" },
                  "1": { "text": "up" },
                  "2": { "text": "out" },
                  "3": { "text": "to" }
              }
          },
          {
              "text": "The boy depends…..his sister to take care him",
              "answer_key": "2",
              "choices":{
                  "0": { "text": "to … with" },
                  "1": { "text": "on … about" },
                  "2": { "text": "on … of" },
                  "3": { "text": "to … to" }
              }
          },
          {
              "text": "Your son broke…..our house last night.” ?",
              "answer_key": "2",
              "choices":{
                  "0": { "text": "up" },
                  "1": { "text": "down" },
                  "2": { "text": "into" },
                  "3": { "text": "cut" }
              }
          },
          {
              "text": '“Again, he won’t get a promotion this year.” “Not if he keeps putting…..urgent matters.”',
              "answer_key": "1",
              "choices":{
                  "0": { "text": "down" },
                  "1": { "text": "off" },
                  "2": { "text": "away" },
                  "3": { "text": "across" }
              }
          },
          {
              "text": '"We’ll keep it…..two months’ have passed. “Then what ?”',
              "answer_key": "0",
              "choices":{
                  "0": { "text": "until" },
                  "1": { "text": "during" },
                  "2": { "text": "while" },
                  "3": { "text": "before" }
              }
          },
          {
              "text": "If a spark should reach the petrol, the whole place would go…. in flames.",
              "answer_key": "3",
              "choices":{
                  "0": { "text": "up" },
                  "1": { "text": "on" },
                  "2": { "text": "over" },
                  "3": { "text": "off" }
              }
          },
          {
              "text": '“you want me to go shopping with you ?” Yes, I want you to help me pick…..some shoes.',
              "answer_key": "0",
              "choices":{
                  "0": { "text": "out" },
                  "1": { "text": "at" },
                  "2": { "text": "in" },
                  "3": { "text": "on" }
              }
          },
          {
              "text": '“We haven’t seen Pomtip for ages.” “Oh, yesterday I ran……..her at Siam Square.” ',
              "answer_key": "0",
              "choices":{
                  "0": { "text": "into" },
                  "1": { "text": "to" },
                  "2": { "text": "for" },
                  "3": { "text": "upon" }
              }
          },
          {
              "text": "The fire which broke…..at Sam Yeak caused great damage.",
              "answer_key": "1",
              "choices":{
                  "0": { "text": "out" },
                  "1": { "text": "in" },
                  "2": { "text": "off" },
                  "3": { "text": "down" }
              }
          }
      ]
  }

  var score = 0
  var timerSeconds = new Date().getTime()
  var nextTime = 0
  var qt_id=0
  var max_qt = 9;
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

      $('#qt_text').text(data['questions'][qt_id]['text'] +" "+(parseInt(data['questions'][qt_id]['answer_key'])+1))

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
