<?php
session_start();
include "db.php";
if(!isset($_SESSION['user_name'])) echo("<script>location.href='login.html';</script>"); 
$title=$_GET['title'];

$sql = "SELECT * FROM study WHERE title ='".$title."'";
$result=mysqli_query($conn, $sql)or die(mysqli_error($conn));
$row=mysqli_fetch_array($result);

echo $title;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>다모임</title>
	<link rel='icon' type='images/png'href='img/logo.png'>
	<link href="css/new_group_create.css" rel="stylesheet" type="text/css" />
	<link href="css/all.css" rel="stylesheet" type="text/css" />
	<meta content="BlendTrans(Duration=0.2)" http-equiv="Page-Enter">
	<meta content="BlendTrans(Duration=0.2)" http-equiv="Page-exit">
	<script>
		function getPost(mode) { 
			var theForm = document.edit_form; 
			if(mode == "01") { 
				//theForm.method = "post"; 
				//theForm.target = "_self"; 
				//heForm.action = "group_update.php?title=<?php echo $title;?>"; 
				$("#group_create_btn").attr("action", "group_update.php?title=<?php echo $title;?>");
			} else if(mode == "02") { 
				theForm.method = "get"; 
				theForm.target = "_blank"; 
				theForm.action = "group_delete.php?title=<?php echo $title;?>" 
			} 
			theForm.submit(); }

	</script>
</head>
<body>
	<div class="container">
    <div class="container2">
   		<form method="post" enctype="multipart/form-data" name="edit_form" action="group_update.php?title=<?php echo $title;?>">
		  <select name="people" style="color: #000000; background-color: #00000000; float: left; margin-left: 4.5%;">
		    <option value="none" style="color: #000000;">모임 최대 인원수</option>
			<option value="1" style="color: #000000;">1명</option>
			<option value="2" style="color: #000000;">2명</option>
		    <option value="3" style="color: #000000;">3명</option>
		    <option value="4" style="color: #000000;">4명</option>
		    <option value="5" style="color: #000000;">5명</option>
		    <option value="6" style="color: #000000;">6명</option>
		    <option value="7" style="color: #000000;">7명</option>
		    <option value="8" style="color: #000000;">8명</option>
		    <option value="9" style="color: #000000;">9명</option>
		    <option value="10" style="color: #000000;">10명</option>
		  </select>
		  <h3 id="category" style="color: #000000; background-color: #00000000; margin-left: 5%; float: left;">이게모지<?php echo $row['category'];?></h3>
			<div class="layout_group_title_box"  style="text-align: left;">
			<h4 id="group_name" style="color: #000000; margin-left: 5%; float: left; margin-bottom: 5%;">모임이름<?php echo $row['title'];?></h4>
				</div>
			<div class="layout_box">
				<span>가입 가능 학년</span>
				<div class="layout">
					<label><input type="checkbox" name="grade[]" value="1학년"> 1학년</label>
	    	  		<label><input type="checkbox" name="grade[]" value="2학년"> 2학년</label>
	      			<label><input type="checkbox" name="grade[]" value="3학년"> 3학년</label>
	      		</div>
      		</div>
				 <div class="layout_box">
					<span>학과</span>
					<div class="layout">
						<label><input type="checkbox" name="major[]" value="뉴미디어소프트웨어과"> 소프트웨어</label>
	      		<label><input type="checkbox" name="major[]" value="뉴미디어웹솔루션과"> 웹솔루션</label>
	      		<label><input type="checkbox" name="major[]" value="뉴미디어디자인과"> 디자인</label>
	      	</div>
	    	</div>
	     	<div class="layout_box">
					<span>모임 방법</span>
					<div class="layout">
						<label><input type="checkbox" name="way" value="온라인"> 온라인</label>
	     			<label><input type="checkbox" name="way" value="오프라인"> 오프라인</label>
	     		</div>
	     	</div>
				 <div class="layout_box">
					<span>모임 날짜</span>
					<div class="layout">
						<label><input type="checkbox" name="day[]" value="월요일"> 월요일</label>
	      		<label><input type="checkbox" name="day[]" value="화요일"> 화요일</label>
	      		<label><input type="checkbox" name="day[]" value="수요일"> 수요일</label>
	      		<label><input type="checkbox" name="day[]" value="목요일"> 목요일</label>
	      		<label><input type="checkbox" name="day[]" value="금요일"> 금요일</label>
	      		<label><input type="checkbox" name="day[]" value="주말"> 주말</label>
	      	</div>
	      </div>
	      <div class="layout_box">
					<span>모임 시간</span>
					<div class="layout">
						<input type='number' name="start" id="start_time" maxlength='2' value="<?php echo $row['start_time'];?>"></input>
						<span style="margin-right: 5%; margin-left: 0%;">시 &nbsp;&nbsp; ~</span>
						<input type='number' name="end" id="end_time" maxlength='2' value="<?php echo $row['end_time'];?>"></input>
						<span style="margin-left: 0%;">시</span>
					</div>
				</div>
				<div class="layout_group_about_box">
					<span>모임 설명</span>
					<br>
					<textarea id="about" name="intro"><?php echo $row['intro'];?></textarea>
				</div>
				<div class="layout_group_img">
					<span>그룹 사진</span>
					<input type="file" id="group_img_src" name="study_img"></input>
				</div>
     		<button type="submit"id="group_create_btn">모임 수정하기</button>
    		
    	</form>
		<form>
		<button id="group_delete_btn" style="margin-bottom: 10%;">모임 삭제하기</button>
		</form>
		</div>
		<div class="menu">
			<a href="main.php"><img id="logo" src="img/logo.png"></a>
			<h2>" 미림인이라면 다 모여라! "</h2>
			<a href="mypage.php"><h3 id="mypage">마이페이지</h3></a>
			<h3>|</h3>
			<a href="group_lookup.php"><h3 id="lookup">그룹조회</h3></a>
			<h3>|</h3>
			<a href="group_create.php"><h3 id="create">그룹생성</h3></a>
			<h3>|</h3>
			<a href="stop.html"><h3 id="recommand">추천받기</h3></a>
		</div>
	</div>
	<script type="text/javascript" src="js/group_create.js"></script>
</body>
</html>