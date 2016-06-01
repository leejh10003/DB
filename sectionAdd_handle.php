<?php
    session_start();
    if(isset($_SESSION['member_id'])){
        $course_id = $_POST['course_id'];
        $sec_id = $_POST['sec_id'];
        $year = $_POST['year'];
        $semester =  $_POST['semester'];
        $prof_id = $_POST['prof_id'];
        $dbconn = pg_connect("host=localhost dbname=joonji user=joonji password=Male8723%")
            or die('db 시스템에 연결할 수 없습니다. 관리자에게 문의하십시오: ' . pg_last_error());
            
        $query = "select * from section where course_id='" . $course_id . "' and sec_id='" . $sec_id . "' and year=" . $year . " and semester=" . $semester . ";";
        $result = pg_query($query)
            or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
        $result_fetched = pg_fetch_assoc($result);
        if($result_fetched['course_id'] === $course_id){
            echo "<script>alert('이미 존재하는 섹션입니다.');history.back();</script>";
        }
        else{
            $course_insert_query = "INSERT INTO section VALUES ('" . $course_id . "', '" . $sec_id . "', " . $year . ", " . $semester . ", '" . $prof_id . "');";
            pg_query($dbconn, $course_insert_query);
            echo "<script>alert('섹션 등록에 성공했습니다!');location.href='search.php';</script>";
        }
    }
    else{
        echo "<script>alert('먼저 로그인해 주십시오!');history.back();</script>";
    }
 ?>