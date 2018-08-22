<!DOCTYPE html>

<html>
<head>
	<title>Resume Builder</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap.min.css">
	<style type="text/css">
		body{
			background: linear-gradient(black,blue,grey);
		}
		h1{
			font-size: 50px;
			text-align: center;
			font-family: Lucida Fax;
			margin-bottom: 40px;
			margin-top: 30px;
			color: white;
			text-shadow: 2px 2px 8px cyan;
		}
		input{
			border-radius: 5px;
			padding-left: 5px;
		}
		#personal{
			background-color: #ADD8E6;
			width: 600px;
			height: 525px;
			margin-left: 45px;
			float: left;
			padding: 20px;
			border-radius: 20px;
			margin-bottom: 10px;
		}
		#educational{
			background-color: #ADD8E6;
			width: 600px;
			height: 525px;
			margin-right: 45px;
			float: right;
			padding: 20px;
			border-radius: 20px;
			margin-bottom: 10px;
		}
		#name_l{
			position: relative;
			left: 40px;
			top: 30px;
			font-size: 20px;
		}
		#name_i{
			position: relative;
			left: 100px;
			top: 30px;
			width: 350px;
		}
		#email_l{
			position: relative;
			left: 40px;
			top: 60px;
			font-size: 20px;
		}
		#email_i{
			position: relative;
			left: 98px;
			top: 60px;
			width: 350px;
		}
		#contact_l{
			position: relative;
			left: 40px;
			top: 90px;
			font-size: 20px;	
		}
		#contact_i{
			position: relative;
			left: 80px;
			top: 90px;
			width: 350px;	
		}
		#id_l{
			position: relative;
			left: 40px;
			top: 130px;
			font-size: 20px;	
		}
		#id_i{
			position: relative;
			left: 80px;
			top: 130px;
			width: 350px;	
		}
		#address_l{
			position: relative;
			left: 40px;
			top: 180px;
			font-size: 20px;	
		}
		#address_i{
			position: relative;
			left: 75px;
			top: 180px;
			width: 350px;	
		}
		#gender_l{
			position: relative;
			left: 40px;
			top: 215px;
			font-size: 20px;	
		}
		#gender_i, #g1, #g2, #g3{
			position: relative;
			left: 90px;
			top: 215px;
			margin-right: 30px;	
		}
		#g1, #g2, #g3{
			position: relative;
			left: 70px;
			font-size: 19px;
		}
		#image_l{
			position: relative;
			left: 40px;
			top: 250px;
			font-size: 20px;	
		}
		#image_i1{
			position: relative;
			left: 180px;
			top: 220px;
			font-size: 16px;
			width: 250px;	
		}
		/*#image_i2{
			position: relative;
			left: 420px;
			top: 200px;	
		}*/
		#qual_l{
			position: relative;
			left: 30px;
			top: 20px;
			font-size: 20px;	
		}
		#qual_i{
			position: relative;
			left: 50px;
			top: 20px;
			width: 350px;	
		}
		#job_l{
			position: relative;
			left: 30px;
			top: 30px;
			font-size: 20px;	
		}
		#job_i{
			position: relative;
			left: 135px;
			top: 30px;
			width: 350px;	
		}
		#skill_l{
			position: relative;
			left: 30px;
			top: 40px;
			font-size: 20px;	
		}
		#skill_i1{
			position: relative;
			left: 120px;
			top: 40px;
			width: 170px;	
		}
		#skill_i2{
			position: relative;
			left: 120px;
			top: 40px;
			width: 170px;	
		}#skill_i3{
			position: relative;
			left: 188px;
			top: 40px;
			width: 170px;	
		}
		#skill_i4{
			position: relative;
			left: 187px;
			top: 40px;
			width: 170px;	
		}
		#project_l{
			position: relative;
			left: 30px;
			top: 60px;
			font-size: 20px;	
		}
		#project_i1{
			position: relative;
			left: 45px;
			top: 60px;
			width: 350px;	
		}
		#project_i2{
			position: relative;
			left: 187px;
			top: 60px;
			width: 350px;	
		}
		#ach_l{
			position: relative;
			left: 30px;
			top: 80px;
			font-size: 20px;	
		}
		#ach_i1{
			position: relative;
			left: 35px;
			top: 80px;
			width: 350px;	
		}
		#ach_i2{
			position: relative;
			left: 187px;
			top: 80px;
			width: 350px;	
		}
		#add_l{
			position: relative;
			left: 30px;
			top: 90px;
			font-size: 20px;	
		}
		#add_i{
			position: relative;
			left: 40px;
			top: 90px;
			width: 310px;
			padding-bottom: 60px;	
		}
		
		#build{
			position: relative;
			top: 120px;
			left: 390px;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<h1>Resume Builder</h1>
	<form action="resume.php" method="post" enctype="multipart/form-data">
		<div id="personal">
			<label id="name_l">Name : </label>
			<input id="name_i" type="text" name="name" placeholder="your name" autofocus required>
			<br>
			<label id="email_l">E-Mail : </label>
			<input id="email_i" type="text" name="e-mail" placeholder="your valid e-mail" required>
			<br>
			<label id="contact_l">Contact : </label>
			<input id="contact_i" type="text" name="contact" placeholder="phone number" required>
			<br>
			<label id="id_l">Roll No. : </label>
			<input id="id_i" type="text" name="id" placeholder="University Roll No." required>
			<br>
			<label id="address_l">Address : </label>
			<input id="address_i" type="text" name="address" placeholder="address" required>
			<br>
			<label id="gender_l">Gender : </label>
			<input id="gender_i" type="radio" name="gender" value="M"><span id="g1">Male</span>
			<input id="gender_i" type="radio" name="gender" value="F"><span id="g2">Female</span>
			<input id="gender_i" type="radio" name="gender" value="O"><span id="g3">Others</span>
			<br>
			<label id="image_l">Image : </label>
			<input id="image_i1" type="file" name="image">
		</div>
		<div id="educational">
			<label id="qual_l">Qualification : </label>
			<input id="qual_i" type="text" name="qual" placeholder="eg.- B.tech (CSE)" required>
			<br>
			<label id="job_l">Job : </label>
			<input id="job_i" type="text" name="job" placeholder="type Student if fresher" required>
			<br>
			<label id="skill_l">Skills : </label>
			<input id="skill_i1" type="text" name="skill_1" placeholder="Skill 1" required>
			<input id="skill_i2" type="text" name="skill_2" placeholder="Skill 2" required>
			<br>
			<input id="skill_i3" type="text" name="skill_3" placeholder="Skill 3" required>
			<input id="skill_i4" type="text" name="skill_4" placeholder="Skill 4" required>
			<br>
			<label id="project_l">Project Links : </label>
			<input id="project_i1" type="text" name="project_1" placeholder="Name (link)" required>
			<br>
			<input id="project_i2" type="text" name="project_2" placeholder="Name (link)" required>
			<br>
			<label id="ach_l">Achievements : </label>
			<input id="ach_i1" type="text" name="achievement_1" placeholder="eg. patent" required>
			<br>
			<input id="ach_i2" type="text" name="achievement_2" placeholder="eg. competition score" required>
			<br>
			<label id="add_l">Additional Details : </label>
			<input id="add_i" type="text" name="add" placeholder="eg. social link, club membership" required>
			<input id="build" class="btn-danger" type="submit" name="Build_Resume" value="Build Resume" required>
		</div>
	</form>
	<script src="jquery-1.11.3.min.js"></script>
	<script src="bootstrap.min.js"></script>
</body>
</html>
