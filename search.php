<!DOCTYPE html>
<meta charset="utf-8" />
<form method='get' id='searchData' action='search_handler.php'>
<table>
<tr>
	<td>과목명</td>
	<td><input id='titleTextBox' type='text' name='title'/></td>
    <td><input type='button' value='검색' rowspan=4 onClick="searchButton()"/></td>
</tr>
<tr>
    <td>학수번호</td>
	<td><input type='text' name='course_id'/></td>
</tr>
<tr>
    <td>학점</td>
	<td colspan=2>
        <input type='radio' name='credits' value checked>고려하지 않음</input>
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
</form>
<script>
    function searchButton(){
        var nullCount = 0; 
        var arrToConfirm=['title', 'course_id', 'credits', 'dept_name'];
        for (let iterator of arrToConfirm){
            if(document.forms['searchData'][iterator].value == ""){
                nullCount+=1;
            }
        }
        if(nullCount === 4){
            alert("최소한 하나의 값을 입력하세요!");
        }
        else{
            document.getElementById('searchData').submit();
        }
    }
</script>