<?php
    session_start();
    if(isset($_SESSION['member_id'])){
        $prof_id = $_GET['prof_id'];
        $name = $_GET['name'];
        $dept_name = $_GET['dept_name'];
        $dbconn = pg_connect("host=localhost dbname=joonji user=joonji password=Male8723%")
            or die('db 시스템에 연결할 수 없습니다. 관리자에게 문의하십시오: ' . pg_last_error());
            
        $query = "select * from prof where prof_id='" . $prof_id . "';";
        $result = pg_query($query)
            or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
        $result_fetched = pg_fetch_assoc($result);
        if($result_fetched['prof_id'] === $prof_id){
            echo "<script>alert('" . $result_fetched['course_id'] . "이미 존재하는 교수입니다.');history.back();</script>";
        }
        else{
            if(!is_numeric($prof_id) || strlen($prof_id) < 10){
                echo '<script>alert("입력된 값에 문제가 있습니다.");history.back()</script>';
                exit;
            }
            $course_insert_query = "INSERT INTO prof VALUES ('" .$prof_id. "', '" . $name . "', '" . $dept_name . "');";
            pg_query($dbconn, $course_insert_query)
                or die('<script>alert("입력된 값에 문제가 있습니다.");history.back()</script>');
            echo "<script>alert('과목 등록에 성공했습니다!');history.back();</script>";
        }
    }
    else{
        echo "<script>alert('먼저 로그인해 주십시오!');history.back();</script>";
    }
?>