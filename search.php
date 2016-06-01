<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
    <style>
      @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
      body {margin:0;background:#E5E5E5;font-weight:300;color:#404040;font-family: 'Nanum Gothic', serif;letter-spacing:.1px;-webkit-font-smoothing:antialiased;text-rendering:optimizeLegibility;}
hgroup { 
	text-align:center;
	margin-top: 4em;
}

h1, h3 { font-weight: 300; }

h1 { color: #636363; }

h3 { color: #4a89dc; }

form {
	width: 380px;
	margin: 4em auto;
	padding: 3em 2em 2em 2em;
	background: #fafafa;
	border: 1px solid #ebebeb;
	box-shadow: rgba(0,0,0,0.14902) 0px 1px 1px 0px,rgba(0,0,0,0.09804) 0px 1px 2px 0px;
}

.group { 
	position: relative; 
	margin-bottom: 45px; 
}

input {
	font-size: 18px;
	padding: 10px 10px 10px 5px;
	-webkit-appearance: none;
	display: block;
	background: #fafafa;
	color: #636363;
	width: 100%;
	border: none;
	border-radius: 0;
	border-bottom: 1px solid #757575;
}

input:focus { outline: none; }


/* Label */

label {
	color: #999; 
	font-size: 18px;
	font-weight: normal;
	position: absolute;
	pointer-events: none;
	left: 5px;
	top: 10px;
	transition: all 0.2s ease;
}


/* active */

input:focus ~ label, input.used ~ label {
	top: -20px;
  transform: scale(.75); left: -2px;
	/* font-size: 14px; */
	color: #4a89dc;
}


/* Underline */

.bar {
	position: relative;
	display: block;
	width: 100%;
}

.bar:before, .bar:after {
	content: '';
	height: 2px; 
	width: 0;
	bottom: 1px; 
	position: absolute;
	background: #4a89dc; 
	transition: all 0.2s ease;
}

.bar:before { left: 50%; }

.bar:after { right: 50%; }


/* active */

input:focus ~ .bar:before, input:focus ~ .bar:after { width: 50%; }


/* Highlight */

.highlight {
	position: absolute;
	height: 60%; 
	width: 100px; 
	top: 25%; 
	left: 0;
	pointer-events: none;
	opacity: 0.5;
}


/* active */

input:focus ~ .highlight {
	animation: inputHighlighter 0.3s ease;
}


/* Animations */

@keyframes inputHighlighter {
	from { background: #4a89dc; }
	to 	{ width: 0; background: transparent; }
}


/* Button */

.button {
  position: relative;
  display: inline-block;
  padding: 12px 24px;
  margin: .3em 0 1em 0;
  width: 100%;
  vertical-align: middle;
  color: #636363;
  font-size: 16px;
  line-height: 20px;
  -webkit-font-smoothing: antialiased;
  text-align: center;
  letter-spacing: 1px;
  background: transparent;
  border: 0;
  border-bottom: 2px solid #3160B6;
  cursor: pointer;
  transition: all 0.15s ease;
}
.button:focus { outline: 0; }


/* Button modifiers */

.buttonBlue {
	color:#fff;
  background: #4a89dc;
  text-shadow: 1px 1px 0 rgba(39, 110, 204, .5);
}

.buttonBlue:hover { background: #357bd8; }


/* Ripples container */

.ripples {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background: transparent;
}


/* Ripples circle */

.ripplesCircle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  width: 0;
  height: 0;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.25);
}

.ripples.is-active .ripplesCircle {
  animation: ripples .4s ease-in;
}


/* Ripples animation */

@keyframes ripples {
  0% { opacity: 0; }

  25% { opacity: 1; }

  100% {
    width: 200%;
    padding-bottom: 200%;
    opacity: 0;
  }
}

    #floating-button{
      width: 55px;
      height: 55px;
      border-radius: 50%;
      background: #db4437;
      position: fixed;
      bottom: 30px;
      right: 30px;
      cursor: pointer;
      box-shadow: 0px 2px 5px #666;
    }

    .plus{
      color: white;
      position: absolute;
      top: 0;
      display: block;
      bottom: 0;
      left: 0;
      right: 0;
      text-align: center;
      padding: 0;
      margin: 0;
      line-height: 55px;
      font-size: 38px;
      font-family: 'Roboto';
      font-weight: 300;
      animation: plus-out 0.3s;
      transition: all 0.3s;
    }

    #container-floating{
      position: fixed;
      width: 70px;
      height: 70px;
      bottom: 30px;
      right: 30px;
      z-index: 50px;
    }

    #container-floating:hover{
      height: 400px;
      width: 90px;
      padding: 30px;
    }

    #container-floating:hover .plus{
      animation: plus-in 0.15s linear;
      animation-fill-mode: forwards;
    }

    .edit{
      position: absolute;
      top: 0;
      display: block;
      bottom: 0;
      left: 0;
      display: block;
      right: 0;
      padding: 0;
      opacity: 0;
      margin: auto;
      line-height: 65px;
      transform: rotateZ(-70deg);
      transition: all 0.3s;
      animation: edit-out 0.3s;
    }

    #container-floating:hover .edit{
      animation: edit-in 0.2s;
      animation-delay: 0.1s;
      animation-fill-mode: forwards;
    }

    @keyframes edit-in{
        from {opacity: 0; transform: rotateZ(-70deg);}
        to {opacity: 1; transform: rotateZ(0deg);}
    }

    @keyframes edit-out{
        from {opacity: 1; transform: rotateZ(0deg);}
        to {opacity: 0; transform: rotateZ(-70deg);}
    }

    @keyframes plus-in{
        from {opacity: 1; transform: rotateZ(0deg);}
        to {opacity: 0; transform: rotateZ(180deg);}
    }

    @keyframes plus-out{
        from {opacity: 0; transform: rotateZ(180deg);}
        to {opacity: 1; transform: rotateZ(0deg);}
    }

    .nds{
      width: 40px;
      height: 40px;
      border-radius: 50%;
      position: fixed;
      z-index: 300;
      transform:  scale(0);
      cursor: pointer;
    }

    .nd1{
      background: #d3a411;
      right: 40px;
      bottom: 120px;
      animation-delay: 0.2s;
        animation: bounce-out-nds 0.3s linear;
      animation-fill-mode:  forwards;
    }

    .nd3{
      background: #3c80f6;
      right: 40px;
      bottom: 180px;
      animation-delay: 0.15s;
        animation: bounce-out-nds 0.15s linear;
      animation-fill-mode:  forwards;
    }

    .nd4{
      background: #ba68c8;
      right: 40px;
      bottom: 240px;
      animation-delay: 0.1s;
        animation: bounce-out-nds 0.1s linear;
      animation-fill-mode:  forwards;
    }

    .nd5{
      background-image: url('https://lh3.googleusercontent.com/-X-aQXHatDQY/Uy86XLOyEdI/AAAAAAAAAF0/TBEZvkCnLVE/w140-h140-p/fb3a11ae-1fb4-4c31-b2b9-bf0cfa835c27');
      background-size: 100%;
      right: 40px;
      bottom: 300px;
      animation-delay: 0.08s;
      animation: bounce-out-nds 0.1s linear;
      animation-fill-mode:  forwards;
    }

    @keyframes bounce-nds{
        from {opacity: 0;}
        to {opacity: 1; transform: scale(1);}
    }

    @keyframes bounce-out-nds{
        from {opacity: 1; transform: scale(1);}
        to {opacity: 0; transform: scale(0);}
    }

    #container-floating:hover .nds{
      
      animation: bounce-nds 0.1s linear;
      animation-fill-mode:  forwards;
    }

    #container-floating:hover .nd3{
      animation-delay: 0.08s;
    }
    #container-floating:hover .nd4{
      animation-delay: 0.15s;
    }
    #container-floating:hover .nd5{
      animation-delay: 0.2s;
    }

    .letter{
      font-size: 23px;
      font-family: 'Roboto';
      color: white;
      position: absolute;
      left: 0;
      right: 0;
      margin: 0;
      top: 0;
      bottom: 0;
      text-align: center;
      line-height: 40px;
    }

    .reminder{
      position: absolute;
      left: 0;
      right: 0;
      margin: auto;
      top: 0;
      bottom: 0;
      line-height: 40px;
    }

    .profile{
      border-radius: 50%;
      width: 40px;
      position: absolute;
      top: 0;
      bottom: 0;
      margin: auto;
      right: 20px;
    }
    .toolbar {
      font-weight:bold;
      text-align:right;
      color: white;
      height:36px;
      background:#03A9F4;
      box-shadow:0px 2px 6px 3px rgba(0, 0, 0, 0.2);
      padding-top:14px;
      padding-right:100px;
      padding-left: 100px;
    }
    @-moz-keyframes ripple {
    0%, 100% {
        opacity: 0;
    }
    1% {
        opacity: 1;
    }
    }
    @-webkit-keyframes ripple {
    0%, 100% {
        opacity: 0;
    }
    1% {
        opacity: 1;
    }
    }
    @keyframes ripple {
    0%, 100% {
        opacity: 0;
    }
    1% {
        opacity: 1;
    }
    }
    .radio-input {
    display: none;
    }
    .radio-label {
    position: relative;
    cursor: pointer;
    padding-left: 28px;
    }
    .radio-label:before, .radio-label:after {
    position: absolute;
    content: "";
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    }
    .radio-label:before {
    top: 0;
    left: 0;
    width: 18px;
    height: 18px;
    background-color: #1565C0;
    -moz-box-shadow: inset 0 0 0 13px #E0E0E0;
    -webkit-box-shadow: inset 0 0 0 13px #E0E0E0;
    box-shadow: inset 0 0 0 13px #E0E0E0;
    }
    .radio-label:after {
    top: 49%;
    left: 9px;
    width: 54px;
    height: 54px;
    background-color: rgba(255, 255, 255, 0.3);
    -moz-transform: translate(-50%, -50%) scale(0);
    -ms-transform: translate(-50%, -50%) scale(0);
    -webkit-transform: translate(-50%, -50%) scale(0);
    transform: translate(-50%, -50%) scale(0);
    }
    .radio-input:checked + .radio-label:before {
    -moz-box-shadow: inset 0 0 0 4px #E0E0E0;
    -webkit-box-shadow: inset 0 0 0 4px #E0E0E0;
    box-shadow: inset 0 0 0 4px #E0E0E0;
    }
    .radio-input:checked + .radio-label:after {
    -moz-transform: translate(-50%, -50%) scale(1);
    -ms-transform: translate(-50%, -50%) scale(1);
    -webkit-transform: translate(-50%, -50%) scale(1);
    transform: translate(-50%, -50%) scale(1);
    -moz-animation: ripple 1s forwards;
    -webkit-animation: ripple 1s forwards;
    animation: ripple 1s forwards;
    }

    </style>
  </head>
  <body>
    <nav class="toolbar">
    <?php
      session_start();
      if(!isset($_SESSION['member_id'])) {
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
        exit;
      }
      $member_id = $_SESSION['member_id'];
      echo "<span style='float:left;'>고려대학교 수강평가 시스템</span>";
      echo "<span style='vertical-align:super;'>안녕하세요. " . $member_id . "님</span>";
      echo "
      <svg onclick=\"location.href='logout.php'\"style=\"width:24px;height:24px;cursor:pointer;\" viewBox=\"0 0 24 24\">
          <path fill=\"#ffffff\" d=\"M18,6H16V15C16,16 15.82,16.64 15,16.95L9.5,19V6C9.5,5.3 9.74,4.1 11,4.24L18,5V3.79L9,2.11C8.64,2.04 8.36,2 8,2C6.72,2 6,2.78 6,4V20.37C6,21.95 7.37,22.26 8,22L17,18.32C18,17.91 18,17 18,16V6Z\" />
      </svg>";
    ?>
    </nav>
    <?php
    if(isset($_SESSION['member_id'])){
    echo
    "<form method='get' id='searchData' action='search_handler.php'>
        <div class='group'>
            <input type='text' name='title'/>
            <span class='highlight'></span><span class='bar'></span>
            <label>과목명</label>
        </div>
        <div class='group'>
            <input type='text' name='course_id'/>
            <span class='highlight'></span><span class='bar'></span>
            <label>학수번호</label>
        </div>
        <div class='group'>
            <input type='text' name='dept_name'/>
            <span class='highlight'></span><span class='bar'></span>
            <label>학과명</label>
        </div>
        <div class='group'>
            <input class='radio-input' type='radio' name='credits' value='' id='radio1' checked/>
            <label class='radio-label' for='radio1'>고려하지 않음</label>
            <input class='radio-input' type='radio' name='credits' value=1 id='radio2'/>
            <label class='radio-label' for='radio2'>1</label>
        </div>
            <button type='submit' tabindex='3'class='button buttonBlue'>
                로그인
                <div class='ripples buttonRipples'><span class='ripplesCircle'></span></div>
            </button>
            <button type='button' name='sign_up' class='button'onclick='location.href='sign_up.php'>
                회원가입
                <div class='ripples buttonRipples'><span class='ripplesCircle'></span></div>
            </button>
        </div>
    </form>";
    }
    else{
        echo "<script>alert('먼저 로그인해 주십시오!');history.back();</script>";
    }
    ?>
    <div id="container-floating">
      <div class="nd3 nds" data-toggle="tooltip" data-placement="left" data-original-title="Reminder">
        <svg style="margin-top:8px;margin-left:8px;width:24px;height:24px" viewBox="0 0 24 24">
          <path fill="#ffffff" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
        </svg>
      </div>
      <div class="nd1 nds" data-toggle="tooltip" data-placement="left" data-original-title="Edoardo@live.it"><img class="reminder">
        <svg style="margin-top:8px;margin-left:8px;width:24px;height:24px" viewBox="0 0 24 24">
          <path fill="#ffffff" d="M18,22H6A2,2 0 0,1 4,20V4C4,2.89 4.9,2 6,2H7V9L9.5,7.5L12,9V2H18A2,2 0 0,1 20,4V20A2,2 0 0,1 18,22M14,20H16V18H18V16H16V14H14V16H12V18H14V20Z" />
      </svg>
      </div>

      <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
        <p class="plus">+</p>
      </div>
    </div>
  </body>
    <script>
        function searchButton(){
            var nullCount = 0; 
            var arrToConfirm=['title', 'course_id', 'credits', 'dept_name'];
            for (let iterator of arrToConfirm){
                if(document.forms['searchData'][iterator].value == ""){
                    nullCount+=1;
                }
            }
            if(nullCount === arrToConfirm.length){
                alert("최소한 하나의 값을 입력하세요!");
            }
            else{
                document.getElementById('searchData').submit();
            }
        }
	$(window, document, undefined).ready(function() {

    $('input').blur(function() {
        var $this = $(this);
        if ($this.val())
        $this.addClass('used');
        else
        $this.removeClass('used');
    });

    var $ripples = $('.ripples');

    $ripples.on('click.Ripples', function(e) {

        var $this = $(this);
        var $offset = $this.parent().offset();
        var $circle = $this.find('.ripplesCircle');

        var x = e.pageX - $offset.left;
        var y = e.pageY - $offset.top;

        $circle.css({
        top: y + 'px',
        left: x + 'px'
        });

        $this.addClass('is-active');

    });

    $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
        $(this).removeClass('is-active');
    });

    });
    </script>
</html>