<?php
if(!isset($_POST['id']) || 
   !isset($_POST['pass']) ||
   $_POST['id'] === "" ||
   $_POST['pass'] === "") {
    echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
    exit;
}
else{
    $id = $_POST['id'];
    $pass = $_POST['pass'];
    $dbconn = pg_connect("host=localhost dbname=joonji user=joonji password=Male8723%")
        or die('db 시스템에 연결할 수 없습니다. 관리자에게 문의하십시오: ' . pg_last_error());
        
    $query = "SELECT * FROM member where id='" . $id . "';";
    $result = pg_query($query)
        or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
    $result_fetched = pg_fetch_assoc($result);
    if($result_fetched['id'] === $id){
        echo "<script>alert('이미 가입되어 있는 ID 입니다.');history.back();</script>";
    }
    else{
        $sign_up_query = "INSERT INTO member VALUES ('" .$id. "','" .$pass. "');";
        pg_query($dbconn, $sign_up_query);
        session_start();
        $_SESSION['id'] = $id;
    }
}
?>
<meta http-equiv='refresh' content='0;url=main.php'>