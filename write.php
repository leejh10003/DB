<?php
    session_start();
    $course_id = $_GET['course_id'];
    $sec_id = $_GET['sec_id'];
    $year = $_GET['year'];
    $semester = $_GET['semester'];
    $member_id = $_SESSION['member_id'];
    
    if(!isset($course_id) || !isset($sec_id) || !isset($year) || !isset($semester) || !isset($member_id)){
        echo "error";
    }
    else{
        $dbconn = pg_connect("host=localhost dbname=joonji user=joonji password=Male8723%")
            or die('db 시스템에 연결할 수 없습니다. 관리자에게 문의하십시오: ' . pg_last_error());
        $query = "select * from evaluation where course_id='" . $course_id . "' and sec_id='" . $sec_id . "' and year=" . $year . " and semester=" . $semester . " and member_id='" . $member_id . "'";
        $result = pg_query($query)
            or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
        $result_fetched = pg_fetch_assoc($result);
        if($result_fetched['member_id'] === $member_id){
            echo "<script>alert('이미 작성하셨습니다.');history.back();</script>";
        }
        else{
            
        }
    }
?>