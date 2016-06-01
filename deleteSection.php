<?php
    session_start();
    $level=$_SESSION['level'];
    if($level < 2){
        echo "<script>" .$level. "alert('권한이 부여되지 않았습니다.');history.back();</script>";
    }
    else{
        if(!isset($_GET['course_id']) || !isset($_GET['sec_id']) || !isset($_GET['year']) || !isset($_GET['semester'])){
            echo "<script>alert('잘못된 접근입니다');history.back();</script>";
        }
        else{
            $course_id=$_GET['course_id'];
            $sec_id=$_GET['sec_id'];
            $year=$_GET['year'];
            $semester=$_GET['semester'];
            $dbconn = pg_connect("host=localhost dbname=joonji user=joonji password=Male8723%")
                or die('db 시스템에 연결할 수 없습니다. 관리자에게 문의하십시오: ' . pg_last_error());
            
            $query = "delete from evaluation where course_id='" . $course_id . "' and sec_id='" . $sec_id . "' and year=" . $year . " and semester=" . $semester . ";";
            pg_query($query)
                or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
            $query = "delete from section where course_id='" . $course_id . "' and sec_id='" . $sec_id . "' and year=" . $year . " and semester=" . $semester . ";";
            pg_query($query)
                or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
            echo "<script>alert('섹션 삭제에 성공했습니다!');history.back();</script>";
        }
    }