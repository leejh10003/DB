<?php
    session_start();
    if(!isset($_SESSION['member_id'])){
        echo "<script>alert('먼저 로그인을 해 주세요!');location.href='login.php';</script>";
    }
    else if(!isset($_GET['course_id'])){
        echo "<script>alert('잘못된 접근입니다!');history.back();</script>";
    }
    else{
        echo 
            "<form method='post' id='sectionData' action='sectionAdd_handle.php'>
                <table>
                    <tr>
                        <td>분반</td>
                        <td colspan=2>
                            <input type='text' name='sec_id'/>
                        </td>
                    </tr>
                    <tr>
                        <td>개설년도</td>
                        <td colspan=2>
                            <input type='text' name='year'/>
                        </td>
                    </tr>
                    <tr>
                        <td>학기</td>
                        <td colspan=2>
                            <input type='radio' name='semester' value=1>1</input>
                            <input type='radio' name='semester' value=2>2</input>
                        </td>
                    </tr>
                    <tr>
                        <td>교번</td>
                        <td colspan=2>
                            <input type='text' name='prof_id'/>
                        </td>
                    </tr>
                </table>
                <input type='button' value='제출' rowspan=4 onClick=\"sectionButton()\"/>
            </form>";
    }
?>
<script>
    function sectionButton(){
        var nullCount = 0; 
        var arrToConfirm=['sec_id', 'year', 'semester', 'prof_id'];
        for (let iterator of arrToConfirm){
            if(document.forms['sectionData'][iterator].value == ""){
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
            document.getElementById('sectionData').appendChild(course_id);
            document.getElementById('sectionData').submit();
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