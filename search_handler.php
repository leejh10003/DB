<?php
    session_start();
    if(isset($_SESSION['member_id'])){
        $level=$_SESSION['level'];
        $title = $_GET['title'];
        $course_id = $_GET['course_id'];
        $credits = $_GET['credits'];
        $dept_name = $_GET['dept_name'];
        $dbconn = pg_connect("host=localhost dbname=joonji user=joonji password=Male8723%")
            or die('db 시스템에 연결할 수 없습니다. 관리자에게 문의하십시오: ' . pg_last_error());
        
        $query = "select * from course where";
        $concat = "";
        if(strlen($title . $course_id . $credits . $dept_name) === 0){
            echo "<script>alert('잘못된 입력입니다.');history.back();</script>";
        }
        if($title != ""){
            $concat = $concat . "and title like '%" . $title . "%' ";
        }
        if($course_id != ""){
            $concat = $concat . "and course_id like '%" . $course_id . "%' ";
        }
        if($credits != ""){
            $concat = $concat . "and credits=" . $credits . " ";
        }
        if($dept_name != ""){
            $concat = $concat . "and dept_name like '%" . $dept_name . "%' ";
        }
        $query .= substr($concat, 3);
        $query = substr($query, 0, strlen($query) - 1) . ';';
        $result = pg_query($query)
            or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
        $column_num = pg_num_fields($result);

        echo "<table>\n<tr>\n";
        for($i = 0 ; $i < $column_num; $i++){
            echo "<th>". pg_field_name($result, $i) ."</th>";
        }
        echo "</tr>";
        while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            echo "\t<tr>\n";
            foreach ($line as $col_value) {
                echo "\t\t<td>$col_value</td>\n";
            }
            echo "<td><a href='./sectionAdd.php?course_id=" . $line['course_id'] . "'>섹션 추가...</a></td>";
            if($_SESSION['level'] > 1){
                echo "<td><a href='deleteCourse.php?course_id=" . $line['course_id'] . "'>삭제</a></td>";
            }
            echo "\t</tr>\n";
        }
        echo "</table>\n";
        
        
        
        
            
        $query = "select * from section natural join prof natural join course where ";
        $concat = "";
        if(strlen($title . $course_id . $credits . $dept_name) === 0){
            echo "<script>alert('잘못된 입력입니다.');history.back();</script>";
        }
        if($title != ""){
            $concat = $concat . "and title like '%" . $title . "%' ";
        }
        if($course_id != ""){
            $concat = $concat . "and course_id like '%" . $course_id . "%' ";
        }
        if($credits != ""){
            $concat = $concat . "and credits=" . $credits . " ";
        }
        if($dept_name != ""){
            $concat = $concat . "and dept_name like '%" . $dept_name . "%' ";
        }
        $query .= substr($concat, 3);
        $query = substr($query, 0, strlen($query) - 1) . ';';
        $result = pg_query($query)
            or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
        $column_num = pg_num_fields($result);

        echo "<table>\n<tr>\n";
        for($i = 0 ; $i < $column_num; $i++){
            echo "<th>". pg_field_name($result, $i) ."</th>";
        }
        echo "</tr>";
        while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            echo "\t<tr>\n";
            foreach ($line as $col_value) {
                echo "\t\t<td>$col_value</td>\n";
            }
            echo "<td><a href='./evaluation_page.php?course_id=" . $line['course_id'] . "&sec_id=" . $line['sec_id'] . "&year=" . $line['year'] . "&semester=" . $line['semester'] . "'>" .$line['year']. "</td>";
            if($_SESSION['level'] > 1){
                echo "<td><a href='deleteSection.php?course_id=" . $line['course_id'] . "&sec_id=" . $line['sec_id'] . "&year=" . $line['year'] . "&semester=" . $line['semester'] . "'>삭제</a></td>";
            }
            echo "\t</tr>\n";
        }
        echo "</table>\n";
    }
    else{
        echo "<script>alert('먼저 로그인해 주십시오!');history.back();</script>";
    }
?>