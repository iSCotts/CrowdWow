<script type="text/javascript">
function valid()
{
	if(document.form1.sname.value=="")
	{
		document.getElementById('names').innerHTML='Please Enter shop name';
		return false
	}
	else
	{
		document.getElementById('names').innerHTML='';
	}
}
</script>

<form name="form1" action="" method="post" enctype="multipart/form-data" onsubmit="return valid();">
	
	<table style="padding-left:30px"> 
<tr>
<td>Shop Name</td>
<td><input type="text" size="30" name="sname"  /></td><td><span id="names" style="color:#FF0000"/></td>
</tr>
<tr>
<td></td><td height="50" style="margin-left:30px"><input name="submit" type="submit" value="Submit"></td>
</tr></table>
</form>