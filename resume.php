<!DOCTYPE html>

<?php
	
	$name = $_POST['name'];
	$email = $_POST['e-mail'];
	$contact = $_POST['contact'];
	$id = $_POST['id'];
	$gender = $_POST['gender'];
	$image = "";
	$address = $_POST['address'];
	$qual = $_POST['qual'];
	$job = $_POST['job'];
	$skill_1 = $_POST['skill_1'];
	$skill_2 = $_POST['skill_2'];
	$skill_3 = $_POST['skill_3'];
	$skill_4 = $_POST['skill_4'];
	$project_1 = $_POST['project_1'];
	$project_2 = $_POST['project_2'];
	$ach_1 = $_POST['achievement_1'];
	$ach_2 = $_POST['achievement_2'];
	$add = $_POST['add'];
	$image = $_FILES['image']['name'];
	$temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($temp,"images/$image");
	$con = mysqli_connect('localhost','root','','resume');
	$query = "INSERT INTO `main`(`ID`, `Name`, `E-Mail`, `Contact`, `Address`, `Gender`, `Image`, `Qualification`, `Job`, `Skill1`, `Skill2`, `Skill3`, `Skill4`, `Project1`, `Project2`, `Achievement1`, `Achievement2`, `Additional`) VALUES ('$id','$name','$email','$contact','$address','$gender','$image','$qual','$job','$skill_1','$skill_2','$skill_3','$skill_4','$project_1','$project_2','$ach_1','$ach_2',  '$add')";
	$run = mysqli_query($con,$query);

	$query1 = "SELECT * FROM `main` WHERE `ID` = '$id'";
	$run1 = mysqli_query($con,$query1);
	$data = mysqli_fetch_array($run1);

?>

<html>
<head>
	<title>Resume Builder</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
	background-color: black;
	font-family: Consolas;
}
img{
	width: 220px;
	height: 220px;
}
#rid{
	float: right;
	position: relative;
	right: 40px;
}
#cover{
	width: 800px;
	height: 900px;
	background-color: white;
	border-radius: 20px;
	margin: auto;
	margin-top: 50px;
	border: 4px dashed grey;
}
#header{
	width: 750px;
	height: 250px;
	border-radius: 20px;
	margin: 20px;
	position: relative;
	top: 50px; 
}
#image{
	width: 220px;
	height: 220px;
	background-color: white;
	border-radius: 20px;
	position: relative;
	top: 15px;
	left: 15px;
	float: left;
	overflow: hidden;
	border: 4px solid black;
}
#pd{
	position: relative;
	top: 30px;
	left: 50px;
}
#hr1{
	position: relative;
	top: 40px;
	width: 700px;
	margin: auto;
	size: 1px;
}
#eduhead{
	position: relative;
	top: 60px;
	left: 30px;
}
#hr2{
	width: 350px;
	position: relative;
	top: 40px;
	right: 200px;
}
#edudata{
	position: relative;
	top: 30px;
	left: 40px;
}
#jobhead{
	position: relative;
	top: 50px;
	left: 30px;
}
#hr3{
	width: 350px;
	position: relative;
	top: 30px;
	right: 200px;
}
#jobdata{
	position: relative;
	top: 20px;
	left: 40px;
}
#skillhead{
	position: relative;
	top: 70px;
	left: 30px;
}
#hr4{
	width: 350px;
	position: relative;
	top: 50px;
	right: 200px;
}
#skilldata1{
	position: relative;
	top: 40px;
	left: 40px;
}
#skilldata2{
	position: relative;
	top: 50px;
	left: 40px;
}
#skilldata3{
	position: relative;
	top: 60px;
	left: 40px;
}
#skilldata4{
	position: relative;
	top: 70px;
	left: 40px;
}
#projecthead{
	width: 300px;
	position: relative;
	top: -400px;
	left: 450px;
}
#hr5{
	width: 350px;
	position: relative;
	top: -415px;
	right: -200px;
}
#projectdata1{
	width: 300px;
	position: relative;
	top: -420px;
	left: 450px;
}
#projectdata2{
	width: 300px;
	position: relative;
	top: -420px;
	left: 450px;
}
#achhead{
	width: 300px;
	position: relative;
	top: -400px;
	left: 450px;
}
#hr6{
	width: 350px;
	position: relative;
	top: -415px;
	right: -200px;
}
#achdata1{
	width: 300px;
	position: relative;
	top: -420px;
	left: 450px;
}
#achdata2{
	width: 300px;
	position: relative;
	top: -420px;
	left: 450px;
}
#addhead{
	width: 300px;
	position: relative;
	top: -400px;
	left: 450px;	
}
#h7{
	width: 350px;
	position: relative;
	top: -415px;
	right: -200px;
}
#adddata{
	width: 300px;
	height: 150px;
	position: relative;
	top: -420px;
	left: 450px;
	word-wrap: break-word;
	font-weight: bold;
}
	</style>
</head>
<body>
	<div id="cover">
		<h2 id="rid">UID: <?php echo($data[0]); ?></h2>
		<div id="header">
			<div id="image">
				<img src="images\<?php echo($data[6]); ?>">
			</div>
			<div id="pd">
				<h1><?php echo($data[1]); ?></h1>
				<h2><?php echo($data[2]); ?></h2>
				<h2><?php echo($data[4]); ?></h2>
				<h2><?php echo($data[3]); ?>  (<?php echo($data[5]); ?>)</h2>
			</div>
		</div>
		<hr id="hr1">
		<h2 id="eduhead">Qualification</h2>
		<hr id="hr2">
		<h3 id="edudata"><?php echo($data[7]); ?></h3>
		<h2 id="jobhead">Job</h2>
		<hr id="hr3">
		<h3 id="jobdata"><?php echo($data[8]); ?></h3>
		<h2 id="skillhead">Skills</h2>
		<hr id="hr4">
		<h3 id="skilldata1"><?php echo($data[9]); ?></h3>
		<h3 id="skilldata2"><?php echo($data[10]); ?></h3>
		<h3 id="skilldata3"><?php echo($data[11]); ?></h3>
		<h3 id="skilldata4"><?php echo($data[12]); ?></h3>
		<h2 id="projecthead">Projects</h2>
		<hr id="hr5">
		<h3 id="projectdata1"><?php echo($data[13]); ?></h3>
		<h3 id="projectdata2"><?php echo($data[14]); ?></h3>
		<h2 id="achhead">Achievements</h2>
		<hr id="hr6">
		<h3 id="achdata1"><?php echo($data[15]); ?></h3>
		<h3 id="achdata2"><?php echo($data[16]); ?></h3>
		<h2 id="addhead">Additional Details</h2>
		<hr id="hr6">
		<div id="adddata"><p><?php echo($data[17]); ?></p></div>
	</div>
</body>
</html>
