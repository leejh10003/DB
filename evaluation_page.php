<?php
    session_start();
    $course_id = $_GET['course_id'];
    $sec_id = $_GET['sec_id'];
    $year = $_GET['year'];
    $semester = $_GET['semester'];
    $dbconn = pg_connect("host=localhost dbname=joonji user=joonji password=Male8723%")
        or die('db 시스템에 연결할 수 없습니다. 관리자에게 문의하십시오: ' . pg_last_error());
        
    $query_base = "from evaluation natural join section natural join prof natural join course where course_id='" . $course_id . "' and sec_id='" . $sec_id . "' and year=" . $year . " and semester=" . $semester;
    $query = "select * " . $query_base . ";";
    $query_avg_assignment = "select avg(assignment_amount) " . $query_base . ";";
    $query_avg_achievement = "select avg(achievement) " . $query_base . ";";
    $query_avg_learning = "select avg(learning) " . $query_base . ";";
    $query_avg_test_difficulty = "select avg(test_difficulty) " . $query_base . ";";
    $result = pg_query($query)
        or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
    $avg_assignment = number_format(pg_fetch_array(pg_query($query_avg_assignment), null, PGSQL_ASSOC)['avg'],2)
        or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error()); 
    $avg_achievement = number_format(pg_fetch_array(pg_query($query_avg_achievement), null, PGSQL_ASSOC)['avg'],2)
        or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
    $avg_learning = number_format(pg_fetch_array(pg_query($query_avg_learning), null, PGSQL_ASSOC)['avg'],2)
        or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error()); 
    $avg_test_difficulty = number_format(pg_fetch_array(pg_query($query_avg_test_difficulty), null, PGSQL_ASSOC)['avg'],2)
        or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error()); 
    echo $avg_assignment . $avg_achievement . $avg_learning . $avg_test_difficulty; 
    $column_num = pg_num_fields($result);
    echo "<table>";
        echo "<tr>";
            echo "<th>과제량</th>";
            echo "<th>성취감</th>";
            echo "<th>학습량</th>";
            echo "<th>시험난이도</th>";
            echo "<th>의견</th>";
        echo "</tr>";
        while($line = pg_fetch_array($result, null, PGSQL_ASSOC)){
        echo "<tr>";
            echo "<td>" . $line['assignment_amount'] . "</td>";
            echo "<td>" . $line['achievement'] . "</td>";
            echo "<td>" . $line['learning'] . "</td>";
            echo "<td>" . $line['test_difficulty'] . "</td>";
            echo "<td>" . $line['comment'] . "</td>";
            if($_SESSION['level'] > 1){
                echo "<td><a href='deleteEvaluation.php?member_id=" . $line['member_id'] . "&course_id=" . $course_id . "&sec_id=" . $sec_id . "&year=" . $year . "&semester=" . $semester . "'>삭제</a></td>";
            }
        echo "</tr>";
        }
    echo "</table>\n";
    $query_written_eval = "select * from evaluation where member_id='" . $_SESSION['member_id'] . "';";
    $member_existence = pg_query($query_written_eval)
        or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
     if(!pg_fetch_array($member_existence, null, PGSQL_ASSOC)['member_id']){
         echo "<button onClick='location.href=\"write.php?course_id=" . $course_id . "&sec_id=" . $sec_id . "&year=" . $year . "&semester=" . $semester . "\"'>평가...</button>";
     }
     else{
         echo "이미 평가 작성을 진행하셨습니다.";
     }
 ?>