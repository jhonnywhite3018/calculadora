<?php
$resultado=null;
for ($i=0;$i<4;$i++)
	$sel[]=null;
if(isset($_GET['op1']) && isset($_GET['op2']))
{
	switch ($_GET['op'])
	{
	case '+':
		$resultado = $_GET['op1'] +  $_GET['op2'];
		$sel[0]= 'selected';
		break;
	case '-':
		$resultado = $_GET['op1'] -  $_GET['op2'];
		$sel[1]= 'selected';
		break;
	case '*':
		$resultado = $_GET['op1'] *  $_GET['op2'];
		$sel[2]= 'selected';
		break;
	case '/':
		$resultado = $_GET['op1'] /  $_GET['op2'];
		$sel[3]= 'selected';
		break;
	}	
}
else{
	$_GET['op1']='';
	$_GET['op']='+';
	$_GET['op2']='';
}


?>

<form>
	<input name = "op1" value = "<?=$_GET['op1'] ?>"/>
	<select name = "op">
		<option <?= $sel[0]?>>+</option>
		<option <?= $sel[1]?>>-</option>
		<option <?= $sel[2]?>>*</option>
		<option <?= $sel[3]?>>/</option>
	</select>
	<input name = "op2" value = "<?=$_GET['op2']?>"/>
	<button>=</button>
	<?=$resultado?>
</form>


