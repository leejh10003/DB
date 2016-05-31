<?php
    session_start();
    $course_id = $_GET['course_id'];
    $prof_id = $_GET['prof_id'];
    $sec_id = $_GET['sec_id'];
    $year = $_GET['year'];
    $semester = $_GET['semester'];
    $dbconn = pg_connect("host=localhost dbname=joonji user=joonji password=Male8723%")
        or die('db 시스템에 연결할 수 없습니다. 관리자에게 문의하십시오: ' . pg_last_error());
        
    $query = "SELECT * from evaluation natural join section natural join teach natural join prof natural join course where course_id='" . $course_id . "' and prof_id='" . $prof_id . "' and sec_id='" . $sec_id . "' and year=" . $year . " and semester=" . $semester . ";";
    $result = pg_query($query)
        or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
    $column_num = pg_num_fields($result);
    echo "<table>";
        echo "<tr>";
            echo "<th>과제량</th>";
            echo "<th>성취감</th>";
            echo "<th>학습량</th>";
            echo "<th>시험난이도</th>";
            echo "<th>공감</th>";
            echo "<th>의견</th>";
        echo "</tr>";
        while($line = pg_fetch_array($result, null, PGSQL_ASSOC)){
        echo "<tr>";
            echo "<td>" . $line['assignment_amount'] . "</td>";
            echo "<td>" . $line['achievement'] . "</td>";
            echo "<td>" . $line['learning'] . "</td>";
            echo "<td>" . $line['test_difficulty'] . "</td>";
            echo "<td><a href='./weight_add.php'>" . $line['weight'] . "</a></td>";
            echo "<td>" . $line['comment'] . "</td>";
        echo "</tr>";
        }
    echo "</table>\n";
 ?>