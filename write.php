<!DOCTYPE html>
<meta charset="utf-8" />
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
            echo
                "<form method='post' id='writeData' action='write_handle.php'>
                    <table>
                        <tr>
                            <td>과제량</td>
                            <td colspan=2>
                                <input type='radio' name='assignment_amount' value=1>1</input>
                                <input type='radio' name='assignment_amount' value=2>2</input>
                                <input type='radio' name='assignment_amount' value=3>3</input>
                                <input type='radio' name='assignment_amount' value=4>4</input>
                                <input type='radio' name='assignment_amount' value=5>5</input>
                            </td>
                        </tr>
                        <tr>
                            <td>성취감</td>
                            <td colspan=2>
                                <input type='radio' name='achievement' value=1>1</input>
                                <input type='radio' name='achievement' value=2>2</input>
                                <input type='radio' name='achievement' value=3>3</input>
                                <input type='radio' name='achievement' value=4>4</input>
                                <input type='radio' name='achievement' value=5>5</input>
                            </td>
                        </tr>
                        <tr>
                            <td>학습량</td>
                            <td colspan=2>
                                <input type='radio' name='learning' value=1>1</input>
                                <input type='radio' name='learning' value=2>2</input>
                                <input type='radio' name='learning' value=3>3</input>
                                <input type='radio' name='learning' value=4>4</input>
                                <input type='radio' name='learning' value=5>5</input>
                            </td>
                        </tr>
                        <tr>
                            <td>시험난이도</td>
                            <td colspan=2>
                                <input type='radio' name='test_difficulty' value=1>1</input>
                                <input type='radio' name='test_difficulty' value=2>2</input>
                                <input type='radio' name='test_difficulty' value=3>3</input>
                                <input type='radio' name='test_difficulty' value=4>4</input>
                                <input type='radio' name='test_difficulty' value=5>5</input>
                            </td>
                        </tr>
                        <tr>
                            <td>의견</td>
                            <td colspan=2>
                                <input type='text' name='comment'/>
                            </td>
                    </table>
                    <input type='button' value='제출' rowspan=4 onClick=\"writeButton()\"/>
                </form>";
        }
    }
?>
<script>
    function writeButton(){
        var nullCount = 0; 
        var arrToConfirm=['assignment_amount', 'achievement', 'learning', 'test_difficulty', 'comment'];
        for (let iterator of arrToConfirm){
            if(document.forms['writeData'][iterator].value == ""){
                nullCount+=1;
            }
        }
        if(nullCount > 0){
            alert("모든 필드를 채워 주세요!");
        }
        else{
            var course_id = document.createElement('input');
            course_id.setAttribute('type', 'hidden')
            course_id.setAttribute('name', 'course_id')
            course_id.setAttribute('value', getParameterByName('course_id'));
            document.getElementById('writeData').appendChild(course_id);
            var sec_id = document.createElement('input');
            sec_id.setAttribute('type', 'hidden')
            sec_id.setAttribute('name', 'sec_id')
            sec_id.setAttribute('value', getParameterByName('sec_id'));
            document.getElementById('writeData').appendChild(sec_id);
            var year = document.createElement('input');
            year.setAttribute('type', 'hidden')
            year.setAttribute('name', 'year')
            year.setAttribute('value', getParameterByName('year'));
            document.getElementById('writeData').appendChild(year);
            var semester = document.createElement('input');
            semester.setAttribute('type', 'hidden')
            semester.setAttribute('name', 'semester')
            semester.setAttribute('value', getParameterByName('semester'));
            document.getElementById('writeData').appendChild(semester);
            document.getElementById('writeData').submit();
        }
    }
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
</script>