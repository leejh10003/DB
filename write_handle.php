<?php
    session_start();
    $assignment_amount = $_POST['assignment_amount'];
    $achievement = $_POST['achievement'];
    $learning = $_POST['learning'];
    $test_difficulty = $_POST['test_difficulty'];
    $comment = $_POST['comment'];
    $course_id = $_POST['course_id'];
    $sec_id = $_POST['sec_id'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $member_id = $_SESSION['member_id'];
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
        $insert_query="insert into evaluation values('" . $member_id . "','" . $course_id . "','" . $sec_id . "'," . $year . "," . $semester . "," . $assignment_amount . "," . $achievement . "," . $learning . "," . $test_difficulty . ",'" . $comment . "');";
        $result = pg_query($insert_query)
             or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
        echo "<script>alert('작성에 성공했습니다.');location.href='evaluation_page.php?course_id=" . $course_id . "&sec_id=" . $sec_id . "&year=" . $year . "&semester=" . $semester . "';</script>";
    }
?>