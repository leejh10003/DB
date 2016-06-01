<?php
session_start();
if(!isset($_POST['member_id']) || !isset($_POST['pass'])) exit;
$member_id = $_POST['member_id'];
$pass = $_POST['pass'];
$dbconn = pg_connect("host=localhost dbname=joonji user=joonji password=Male8723%")
    or die('db 시스템에 연결할 수 없습니다. 관리자에게 문의하십시오: ' . pg_last_error());
    
$query = "SELECT * FROM member where member_id='" . $member_id . "' and pass='" . $pass . "'";
$result = pg_query($query)
    or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
$result_fetched = pg_fetch_assoc($result);

if($result_fetched['member_id'] !== $member_id){
    echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
    exit;
}
else{
    session_start();
    $_SESSION['member_id'] = $member_id;
    $_SESSION['level'] = $result_fetched['level'];
}
?>
<meta http-equiv='refresh' content='0;url=main.php'>