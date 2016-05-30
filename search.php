<!DOCTYPE html>
<meta charset="utf-8" />
<form method='post' action='seaech_handler.php'>
<table>
<tr>
    <td><input type='checkbox' name='checked' value='title' onClick='changeAbledStatus("title")' checked/></td>
	<td>과목명</td>
	<td><input class='title' type='text' name='title' tabindex='1'/></td>
    <td><input type='submit' value='검색' rowspan=4/></td>
</tr>
<tr>
    <td><input type='checkbox' name='checked' value='course_id' onClick='changeAbledStatus("course_id")'/></td>
	<td>학수번호</td>
	<td><input class='course_id' type='text' name='title' tabindex='1' disabled/></td>
</tr>
<tr>
    <td><input type='checkbox' name='checked' value='credits' onClick='changeAbledStatus("credits")'/></td>
	<td>학점</td>
	<td colspan=2>
        <input class='credits' type='radio' name='credits' value=1 disabled>1</input>
        <input class='credits' type='radio' name='credits' value=2 disabled>2</input>
        <input class='credits' type='radio' name='credits' value=3 disabled>3</input>
    </td>
</tr>
<tr>
    <td><input type='checkbox' name='checked' value='dept_name' onClick='changeAbledStatus("dept_name")'/></td>
	<td>학과명</td>
	<td><input class='dept_name' type='text' name='title' tabindex='1' disabled/></td>
</tr>
</table>
</form>
<script>
    function changeAbledStatus(inputClassName) {
        var inputNodeLists = document.getElementsByClassName(inputClassName);
        for(var i = 0; i < inputNodeLists.length; i++){
            inputNodeLists[i].disabled=!inputNodeLists[i].disabled;
        }
    }
</script>