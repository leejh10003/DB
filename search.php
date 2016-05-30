<!DOCTYPE html>
<meta charset="utf-8" />
<form method='post' action='login_ok.php'>
<table>
<tr>
    <td><input type='checkbox' name='checked' value='title'></td>
	<td>과목명</td>
	<td><input type='text' name='title' tabindex='1'/></td>
</tr>
<tr>
    <td><input type='checkbox' name='checked' value='course_id'></td>
	<td>학수번호</td>
	<td><input type='text' name='title' tabindex='1'/></td>
</tr>
<tr>
    <td><input type='checkbox' name='checked' value='credits'></td>
	<td>학점</td>
	<td colspan=2>
        <input type='radio' name='credits' value=1>1</input>
        <input type='radio' name='credits' value=2>2</input>
        <input type='radio' name='credits' value=3>3</input>
    </td>
</tr>
<tr>
    <td><input type='checkbox' name='checked' value='dept_name'></td>
	<td>학과명</td>
	<td><input type='text' name='title' tabindex='1'/></td>
</tr>
</table>
</form>