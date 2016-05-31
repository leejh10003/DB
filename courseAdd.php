<?php
    session_start();
 ?>
<!DOCTYPE html>
<meta charset="utf-8" />

    <?php
    if(isset($_SESSION['member_id'])){
    echo
    "<form method='get' id='addData' action='courseAdd_handle.php'>
        <table>
            <tr>
                <td>과목명</td>
                <td><input id='titleTextBox' type='text' name='title'/></td>
                <td><input type='button' value='등록' rowspan=4 onClick=\"searchButton()\"/></td>
            </tr>
            <tr>
                <td>학수번호</td>
                <td><input type='text' name='course_id'/></td>
            </tr>
            <tr>
                <td>학점</td>
                <td colspan=2>
                    <input type='radio' name='credits' value=1>1</input>
                    <input type='radio' name='credits' value=2>2</input>
                    <input type='radio' name='credits' value=3>3</input>
                </td>
            </tr>
            <tr>
                <td>학과명</td>
                <td><input type='text' name='dept_name' tabindex='1'/></td>
            </tr>
        </table>
    </form>";
    }
    else{
        echo "<script>alert('먼저 로그인해 주십시오!');history.back();</script>";
    }
    ?>
<script>
    function searchButton(){
        var nullCount = 0; 
        var arrToConfirm=['title', 'course_id', 'credits', 'dept_name'];
        for (let iterator of arrToConfirm){
            if(document.forms['addData'][iterator].value == ""){
                nullCount+=1;
            }
        }
        console.log(nullCount + ", " + arrToConfirm.length);
        if(nullCount > 0){
            alert("모든 란을 채워주세요!");
        }
        else{
            document.getElementById('addData').submit();
        }
    }
</script>