<?php
if(!isset($_POST['id']) || 
   !isset($_POST['pass']) ||
   $_POST['id'] === "" ||
   $_POST['pass'] === "") {
    echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
    exit;
}
else{
    
}
?>