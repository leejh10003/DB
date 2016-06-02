<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
    <style>
      @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
      body {margin:0;background:#E5E5E5;font-weight:300;color:#404040;font-family: 'Nanum Gothic', serif;letter-spacing:.1px;-webkit-font-smoothing:antialiased;text-rendering:optimizeLegibility;}


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
      height:50px;
      background:#03A9F4;
      box-shadow:0px 2px 6px 3px rgba(0, 0, 0, 0.2);
      padding-top:14px;
      padding-right:100px;
      padding-left: 100px;
    }
    @import url(http://fonts.googleapis.com/css?family=Roboto);
body,
input,
select,
textarea,
body * {
  font-family: 'Roboto', sans-serif;
  box-sizing: border-box;
}
body::after, body::before,
input::after,
input::before,
select::after,
select::before,
textarea::after,
textarea::before,
body *::after,
body *::before {
  box-sizing: border-box;
}

h1 {
  font-size: 2rem;
  text-align: center;
  margin: 0 0 2em;
}

.container {
  max-width: 40rem;
  margin: 5rem auto;
  background: #fff;
  width: 100%;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
  padding: 3rem 5rem 0;
  border-radius: 1px;
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-transition: box-shadow 0.28s ease, -webkit-transform 0.28s ease;
  transition: box-shadow 0.28s ease, -webkit-transform 0.28s ease;
  transition: box-shadow 0.28s ease, transform 0.28s ease;
  transition: box-shadow 0.28s ease, transform 0.28s ease, -webkit-transform 0.28s ease;
}

.button-container {
  text-align: center;
}

fieldset {
  margin: 0 0 3rem;
  padding: 0;
  border: none;
}

.form-radio,
.form-group {
  position: relative;
  margin-top: 2.25rem;
  margin-bottom: 2.25rem;
}

.form-inline > .form-group,
.form-inline > .btn {
  display: inline-block;
  margin-bottom: 0;
}

.form-help {
  margin-top: 0.125rem;
  margin-left: 0.125rem;
  color: #b3b3b3;
  font-size: 0.8rem;
}
.checkbox .form-help, .form-radio .form-help, .form-group .form-help {
  position: absolute;
  width: 100%;
}
.form-radio{
    display:inline;
}
.checkbox .form-help {
  position: relative;
  margin-bottom: 1rem;
}
.form-radio .form-help {
  padding-top: 0.25rem;
  margin-top: -1rem;
}

.form-group input {
  height: 1.9rem;
}
.form-group textarea {
  resize: none;
}
.form-group select {
  width: 100%;
  font-size: 1rem;
  height: 1.6rem;
  padding: 0.125rem 0.125rem 0.0625rem;
  background: none;
  border: none;
  line-height: 1.6;
  box-shadow: none;
}
.form-group .control-label {
  position: absolute;
  top: 0.25rem;
  pointer-events: none;
  padding-left: 0.125rem;
  z-index: 1;
  color: #b3b3b3;
  font-size: 1rem;
  font-weight: normal;
  -webkit-transition: all 0.28s ease;
  transition: all 0.28s ease;
}
.form-group .bar {
  position: relative;
  border-bottom: 0.0625rem solid #999;
  display: block;
}
.form-group .bar::before {
  content: '';
  height: 0.125rem;
  width: 0;
  left: 50%;
  bottom: -0.0625rem;
  position: absolute;
  background: #337ab7;
  -webkit-transition: left 0.28s ease, width 0.28s ease;
  transition: left 0.28s ease, width 0.28s ease;
  z-index: 2;
}
.form-group input,
.form-group textarea {
  display: block;
  background: none;
  padding: 0.125rem 0.125rem 0.0625rem;
  font-size: 1rem;
  border-width: 0;
  border-color: transparent;
  line-height: 1.9;
  width: 100%;
  color: transparent;
  -webkit-transition: all 0.28s ease;
  transition: all 0.28s ease;
  box-shadow: none;
}
.form-group input[type="file"] {
  line-height: 1;
}
.form-group input[type="file"] ~ .bar {
  display: none;
}
.form-group select,
.form-group input:focus,
.form-group input:valid,
.form-group input.form-file,
.form-group input.has-value,
.form-group textarea:focus,
.form-group textarea:valid,
.form-group textarea.form-file,
.form-group textarea.has-value {
  color: #333;
}
.form-group select ~ .control-label,
.form-group input:focus ~ .control-label,
.form-group input:valid ~ .control-label,
.form-group input.form-file ~ .control-label,
.form-group input.has-value ~ .control-label,
.form-group textarea:focus ~ .control-label,
.form-group textarea:valid ~ .control-label,
.form-group textarea.form-file ~ .control-label,
.form-group textarea.has-value ~ .control-label {
  font-size: 0.8rem;
  color: gray;
  top: -1rem;
  left: 0;
}
.form-group select:focus,
.form-group input:focus,
.form-group textarea:focus {
  outline: none;
}
.form-group select:focus ~ .control-label,
.form-group input:focus ~ .control-label,
.form-group textarea:focus ~ .control-label {
  color: #337ab7;
}
.form-group select:focus ~ .bar::before,
.form-group input:focus ~ .bar::before,
.form-group textarea:focus ~ .bar::before {
  width: 100%;
  left: 0;
}

.checkbox label,
.form-radio label {
  position: relative;
  cursor: pointer;
  padding-left: 2rem;
  text-align: left;
  color: #333;
  display: inline;
}
.checkbox input,
.form-radio input {
  width: auto;
  opacity: 0.00000001;
  position: absolute;
  left: 0;
}

.radio {
  margin-bottom: 1rem;
  display: inline;
}
.radio .helper {
  position: absolute;
  top: -0.25rem;
  left: -0.25rem;
  cursor: pointer;
  display: inline;
  font-size: 1rem;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  color: #999;
}
.radio .helper::before, .radio .helper::after {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  margin: 0.25rem;
  width: 1rem;
  height: 1rem;
  -webkit-transition: -webkit-transform 0.28s ease;
  transition: -webkit-transform 0.28s ease;
  transition: transform 0.28s ease;
  transition: transform 0.28s ease, -webkit-transform 0.28s ease;
  border-radius: 50%;
  border: 0.125rem solid currentColor;
}
.radio .helper::after {
  -webkit-transform: scale(0);
          transform: scale(0);
  background-color: #337ab7;
  border-color: #337ab7;
}
.radio label:hover .helper {
  color: #337ab7;
}
.radio input:checked ~ .helper::after {
  -webkit-transform: scale(0.5);
          transform: scale(0.5);
}
.radio input:checked ~ .helper::before {
  color: #337ab7;
}

.checkbox {
  margin-top: 3rem;
  margin-bottom: 1rem;
}
.checkbox .helper {
  color: #999;
  position: absolute;
  top: 0;
  left: 0;
  width: 1rem;
  height: 1rem;
  z-index: 0;
  border: 0.125rem solid currentColor;
  border-radius: 0.0625rem;
  -webkit-transition: border-color 0.28s ease;
  transition: border-color 0.28s ease;
}
.checkbox .helper::before, .checkbox .helper::after {
  position: absolute;
  height: 0;
  width: 0.2rem;
  background-color: #337ab7;
  display: block;
  -webkit-transform-origin: left top;
          transform-origin: left top;
  border-radius: 0.25rem;
  content: '';
  -webkit-transition: opacity 0.28s ease, height 0s linear 0.28s;
  transition: opacity 0.28s ease, height 0s linear 0.28s;
  opacity: 0;
}
.checkbox .helper::before {
  top: 0.65rem;
  left: 0.38rem;
  -webkit-transform: rotate(-135deg);
          transform: rotate(-135deg);
  box-shadow: 0 0 0 0.0625rem #fff;
}
.checkbox .helper::after {
  top: 0.3rem;
  left: 0;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
.checkbox label:hover .helper {
  color: #337ab7;
}
.checkbox input:checked ~ .helper {
  color: #337ab7;
}
.checkbox input:checked ~ .helper::after, .checkbox input:checked ~ .helper::before {
  opacity: 1;
  -webkit-transition: height 0.28s ease;
  transition: height 0.28s ease;
}
.checkbox input:checked ~ .helper::after {
  height: 0.5rem;
}
.checkbox input:checked ~ .helper::before {
  height: 1.2rem;
  -webkit-transition-delay: 0.28s;
          transition-delay: 0.28s;
}

.radio + .radio,
.checkbox + .checkbox {
  margin-top: 1rem;
}

.has-error .legend.legend, .has-error.form-group .control-label.control-label {
  color: #d9534f;
}
.has-error.form-group .form-help,
.has-error.form-group .helper, .has-error.checkbox .form-help,
.has-error.checkbox .helper, .has-error.radio .form-help,
.has-error.radio .helper, .has-error.form-radio .form-help,
.has-error.form-radio .helper {
  color: #d9534f;
}
.has-error .bar::before {
  background: #d9534f;
  left: 0;
  width: 100%;
}

.button {
  position: relative;
  background: currentColor;
  border: 1px solid currentColor;
  font-size: 1.1rem;
  color: #4f93ce;
  margin: 3rem 0;
  padding: 0.75rem 3rem;
  cursor: pointer;
  -webkit-transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
  transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
  overflow: hidden;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}
.button span {
  color: #fff;
  position: relative;
  z-index: 1;
}
.button::before {
  content: '';
  position: absolute;
  background: #071017;
  border: 50vh solid #1d4567;
  width: 30vh;
  height: 30vh;
  border-radius: 50%;
  display: block;
  top: 50%;
  left: 50%;
  z-index: 0;
  opacity: 1;
  -webkit-transform: translate(-50%, -50%) scale(0);
          transform: translate(-50%, -50%) scale(0);
}
.button:hover {
  color: #337ab7;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.2);
}
.button:active::before, .button:focus::before {
  -webkit-transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
  transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
  transition: transform 1.12s ease, opacity 0.28s ease 0.364s;
  transition: transform 1.12s ease, opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
  -webkit-transform: translate(-50%, -50%) scale(1);
          transform: translate(-50%, -50%) scale(1);
  opacity: 0;
}
.button:focus {
  outline: none;
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
    session_start();
    if(isset($_SESSION['member_id'])){
    echo
            "
            <div class='container'>
            <form method='get'  id='addData' action='courseAdd_handle.php'>
                <div class='form-group'>
                    <input type='text' name='title' required='required'/>
                    <label for='input' class='control-label'>과목명</label><i class='bar'></i>
                </div>
                <div class='form-group'>
                    <input type='text' name='course_id' required='required'/>
                    <label for='input' class='control-label'>학수번호</label><i class='bar'></i>
                </div>
                <div class='form-group'>
                    <input type='text' name='dept_name' required='required'/>
                    <label for='input' class='control-label'>학과명</label><i class='bar'></i>
                </div>
                <div class='form-radio'>
                    학점
                    <div class='radio'>
                        <label>
                        <input type='radio' name='credits' checked='checked' value=1 /><i class='helper' value=1 /></i>1
                        </label>
                    </div>
                    <div class='radio'>
                        <label>
                        <input type='radio' name='credits' checked='checked' value=2 /><i class='helper' value=2 /></i>2
                        </label>
                    </div>
                    <div class='radio'>
                        <label>
                        <input type='radio' name='credits' checked='checked' value=3 /><i class='helper' value=3 /></i>3
                        </label>
                    </div>
                </div>
                <div class='button-container'>
                    <button type='button' onClick='searchButton()' class='button'><span>과목 추가</span></button>
                </div>
            </form>
            </div>";
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
            if(document.forms['addData'][iterator].value == ""){
                nullCount+=1;
            }
        }
        console.log(nullCount + ", " + arrToConfirm.length);
        if(nullCount > 0){
            alert("모든 란을 채워주세요!");
        }
        else{
            document.getElementById('addData').submit();
        }
    }
</script>
</html>