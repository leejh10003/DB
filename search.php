<!DOCTYPE html>
<meta charset="utf-8" />
<form method='post' action='seaech_handler.php'>
<table>
<tr>
    <td><input type='checkbox' name='checked' value='title' onClick='abledAttributes[0]=!abledAttributes[0]; changeAbledStatus("title");' checked/></td>
	<td>과목명</td>
	<td><input class='title' type='text' name='title' tabindex='1'/></td>
    <td><input type='button' value='검색' rowspan=4 onClick='submitToServer()'/></td>
</tr>
<tr>
    <td><input type='checkbox' name='checked' value='course_id' onClick='abledAttributes[1]=!abledAttributes[1];changeAbledStatus("course_id");'/></td>
	<td>학수번호</td>
	<td><input class='course_id' type='text' name='title' tabindex='1' disabled/></td>
</tr>
<tr>
    <td><input type='checkbox' name='checked' value='credits' onClick='abledAttributes[2]=!abledAttributes[2];changeAbledStatus("credits");'/></td>
	<td>학점</td>
	<td colspan=2>
        <input class='credits' type='radio' name='credits' value=1 disabled checked>1</input>
        <input class='credits' type='radio' name='credits' value=2 disabled>2</input>
        <input class='credits' type='radio' name='credits' value=3 disabled>3</input>
    </td>
</tr>
<tr>
    <td><input type='checkbox' name='checked' value='dept_name' onClick='abledAttributes[3]=!abledAttributes[3]; changeAbledStatus("dept_name");'/></td>
	<td>학과명</td>
	<td><input class='dept_name' type='text' name='title' tabindex='1' disabled/></td>
</tr>
</table>
</form>
<script>
    var abledAttributes = [true, false, false, false];
    function changeAbledStatus(inputClassName) {
        var inputNodeLists = document.getElementsByClassName(inputClassName);
        for(var i = 0; i < inputNodeLists.length; i++){
            inputNodeLists[i].disabled=!inputNodeLists[i].disabled;
            console.log(abledAttributes);
        }
    }
    function submitToServer(){
        var x = 0;
        for (var i = 0 ; i < abledAttributes.length; i++) {
            if(abledAttributes[i] === true){
                x += 1;
            }
        }
        console.log(x);
        if (x === 0){
            alert('최소 한 개의 기준을 선택해 주세요!');
        }
    }
</script>