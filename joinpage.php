<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>다모임</title>
	<link href="css/join.css" rel="stylesheet" type="text/css" />
	<link href="css/common.css" rel="stylesheet" type="text/css" />
	<link rel='icon' type='images/png'href='img/logo.png'>
</head>

<script>
	var idck=false;
	var pwck=false;

	function submit(){
		if(idck==true && pwck==true){
			form.action='join.php';
		}
	}
	function checkid(){
		var userid = document.getElementById("userID").value;
		if(userid)
		{
			<?php

				include "db.php";
				$uid = $_GET["userID"];
				$sql = mysqli_query($conn,"select count(*) from user where id='".$uid."'");
		
				if($sql==0)
				{
			?>
				alert("사용 가능한 아이디입니다");
			<?php 
				}else{
			?>
				alert("이미 사용 중인 아이디입니다");
			<?php
				}
			?>
		}else{
			alert("아이디를 입력하세요");
		}
	}
	function tocheckpw(){
		var pw=document.getElementById("pw").value;
		var pwch=document.getElementById("pwch").value;
		if(pw!=pwch){
			alert('비밀번호가 틀렸습니다. 다시 입력해 주세요');
			return false;
		}
		if(pw==pwch){
			alert('비밀번호가 일치합니다.');
			pwck=true;
			return true;
		}
	}

</script>

<body style="overflow: hidden;">
	<div class="container">
		<video muted autoplay loop>
        	<source src="img/background.mp4" type="video/mp4">
     	</video>
     	<div class="background_box"></div>
     	<div class="container2">
			<form method="POST" action="join.php">

				<input required type="text" name="userName" id="userName" placeholder="이름" style="color: #FFFFFF;"><br>
				<input required type="text" name="userID" id="userID" placeholder="아이디" style="color: #FFFFFF; width: 25%;">
				<input required type="button" name="idok" value="중복확인" onclick="checkid();"><br>
				<input required type="password" name="userPass" id="userPass" placeholder="비밀번호" style="color: #FFFFFF;"><br>
				<input required type="password" name="pwok" id="pwok" placeholder="비밀번호 확인" style="color: #FFFFFF;"><br>
				<input required type="email" name="userEmail" id="userEmail" placeholder="email" style="color: #FFFFFF;">
				<br>
				<select required name="userMajor" style="color: #FFFFFF; background-color: #00000000;">
					<option value="none" style="color: #000000;">학과</option>
					<option value="뉴미디어소프트웨어과" style="color: #000000;">뉴미디어소프트웨어과</option>
					<option value="뉴미디어웹솔루션과" style="color: #000000;">뉴미디어웹솔루션과</option>
					<option value="뉴미디어디자인과" style="color: #000000;">뉴미디어디자인과</option>
				</select><br>

				<div class="radio-wrap" style="margin-left:37%;">
					<input type="radio" name="userGrade" id="grade" value="1학년"/>
					<label for="1학년">1학년</label>
				</div>
				<div class="radio-wrap">
					<input type="radio" name="userGrade" id="grade" value="2학년"/>
					<label for="2학년">2학년</label>
				</div>
				<div class="radio-wrap">
					<input type="radio" name="userGrade" id="grade" value="3학년"/>
					<label for="3학년">3학년</label>
				</div>
				<br>

				<button id="join_btn" type="submit">JOIN</button><br><br>
			</form>
     	</div>
		 <div class="menu" style="background-color: #00000000;">
			<a href="main.php"><img id="logo" src="img/logo.png"></a>
			<a href="mypage.php"><h3 id="mypage">마이페이지</h3></a>
			<h3>|</h3>
			<a href="group_lookup.php"><h3 id="lookup">그룹조회</h3></a>
			<h3>|</h3>
			<a href="group_create.php"><h3 id="create">그룹생성</h3></a>
			<h3>|</h3>
			<a href="stop,html"><h3 id="recommand">추천받기</h3></a>
		</div>
	</div>
</body>
</html>