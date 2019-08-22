<?php
$con=mysqli_connect("localhost:3308",'root','','student');
if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$gen=$_POST['gen'];
	$birth=$_POST['birth'];
	$occuption=$_POST['occuption'];
	$sec=$_POST['sec'];
	$ans=$_POST['ans'];
	$sql="INSERT INTO  reg_table (name, password, mobile_no, email, gender, city, occuption, dob, ques_id, ans) VALUES ('$name','$pass','$mobile','$email','$city','$gen','$birth','$occuption','$sec','$ans')";
	
	if(mysqli_query($con,$sql))
	{
		echo "DONE";
	}
	echo $sql;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>student page</title>
</head>
<body>
<h1 align="center">REGISTRATION  FORM</h1>
<table align="center">
<form action="r1.php"  method="post" enctype="multipart/form-data"> 
	<tr>
		<td>
			<label for="name">USER NAME:</label>
		</td>
		<td>
			<input type="text" name="name" id="name">
		</td>
	</tr>
	<tr>
		<td>
			<label for="pass">PASSWORD:</label>
		</td>
		<td>
			<input type="password" name="pass" id="pass">
		</td>
	</tr>
	<tr>
		<td>
			<label for="mob">MOBILE NUMBER :</label>
		</td>
		<td>
			<input type="text" name="mobile" id="mob">
		</td>
	</tr>
	<tr>
		<td>
			<label for="email">EMAIL ADDRESS:</label>
		</td>
		<td>
			<input type="email" name="email" id="email">
		</td>
	</tr>
	<tr>
		<td>
			<label for="city">CITY:</label>
		</td>
		<td>
			<input type="text" name="city" id="city">
		</td>
	</tr>
	<tr>
		<td>
			<label for="gen">GENDER:</label>
		</td>
		<td>
			MALE:<input type="radio"  name="gen" value="MALE">

			FEMALE:<input type="radio"  name="gen" value="FEMALE">
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="birth">DATE OF BIRTH:</label>
		</td>
		<td>
			<input type="date" name="birth" id="birth">
		</td>
	</tr>
	<tr>
		<td>
			<label for="occuption"> SELECT OCCUPTION :</label>
		</td>
		<td>
			<select id="occuption" name="occuption">
				<option>---SELECT OCCUPTION---</option>
				<option value="SERVICE">SERVICE</option>
				<option value="BUSINESS">BUSINESS</option>
				<option value="NONE">NONE</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			<label for="sec">SECRET QUESTION:</label>
		</td>
		<td>
			<?php 
				$sql="select * from question_table";
				// echo $sql;
				$res=mysqli_query($con,$sql);
			
				?>
			<select id="sec" name="sec">

				<?php
				while ($row=mysqli_fetch_array($res))
				{
					
				?>
					<option value="<?php echo $row['ques_id']?>"><?php echo $row['question']?></option>
			<?php		
				}


				?>	
				
			</select>
		</td>
	</tr>
	<tr>
		<td>
			<label for="ans">ANSWER:</label>
		</td>
		<td>
			<input type="text" name="ans" id="ans">
		</td>
	</tr>
	<tr>
		<td>
		</td>
		<td>
			<input type="submit" name="sub" id="sub" value="submit">
		</td>
	</tr>	
</form>
	
</table>

</body>
</html>
