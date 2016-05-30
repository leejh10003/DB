<!DOCTYPE html>
<meta charset="utf-8" />
<form method='post' action='login_ok.php'>
<table>
<tr>
	<td>아이디</td>
	<td><input type='text' name='member_id' tabindex='1'/></td>
	<td><input type='submit' tabindex='3' value='로그인' /></td>
</tr>
<tr>
	<td>비밀번호</td>
	<td><input type='password' name='pass' tabindex='2'/></td>
	<td><input type='button' name='sign_up' value='회원가입' onclick='location.href="sign_up.php"'></td>
</tr>
</table>
</form>