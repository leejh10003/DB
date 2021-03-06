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
      background:#ffffff;
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
    </style>
  </head>
  <body onload="document.refresh();">
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
    <div id="container-floating">
      <a href='./profAdd.php'>
      <div class="nd5 nds" data-toggle="tooltip" data-placement="left" data-original-title="Reminder">
        <svg style="margin-left:8px;margin-top:8px;width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="#000000" d="M15,14C12.33,14 7,15.33 7,18V20H23V18C23,15.33 17.67,14 15,14M6,10V7H4V10H1V12H4V15H6V12H9V10M15,12A4,4 0 0,0 19,8A4,4 0 0,0 15,4A4,4 0 0,0 11,8A4,4 0 0,0 15,12Z" />
        </svg>
      </div>
      </a>
      <a href='./search.php'>
      <div class="nd3 nds" data-toggle="tooltip" data-placement="left" data-original-title="Reminder">
        <svg style="margin-top:8px;margin-left:8px;width:24px;height:24px" viewBox="0 0 24 24">
          <path fill="#ffffff" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
        </svg>
      </div>
      </a>
      <a href="./courseAdd.php">
      <div class="nd1 nds" data-toggle="tooltip" data-placement="left" data-original-title="Edoardo@live.it"><img class="reminder">
        <svg style="margin-top:8px;margin-left:8px;width:24px;height:24px" viewBox="0 0 24 24">
          <path fill="#ffffff" d="M18,22H6A2,2 0 0,1 4,20V4C4,2.89 4.9,2 6,2H7V9L9.5,7.5L12,9V2H18A2,2 0 0,1 20,4V20A2,2 0 0,1 18,22M14,20H16V18H18V16H16V14H14V16H12V18H14V20Z" />
      </svg>
      </div>
      </a>

      <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
        <p class="plus">+</p>
      </div>
    </div>
  </body>
</html>
