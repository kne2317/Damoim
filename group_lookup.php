<?php
session_start();
include "db.php";
if(!isset($_SESSION['user_name'])) echo("<script>location.href='login.html';</script>"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>다모임</title>
	<link rel='icon' type='images/png'href='img/logo.png'>
	<link href="css/group_lookup.css" rel="stylesheet" type="text/css" />
	<link href="css/common.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="container">
    	<div class="container2">
    		<span>그룹조회</span>
			<form method="POST" action="search.php">
				<div class="category_box">
					<div class="layout_box">
						<span>학과</span>
						<div class="layout" > 
							<label><input type="checkbox" name="major" value="soft"> 소프트웨어과</label>
							<label><input type="checkbox" name="major" value="web"> 웹솔루션과</label>
							<label><input type="checkbox" name="major" value="design"> 디자인과</label>
						</div>
					</div>
				<div class="layout_box">
					<span>학년</span>
					<div class="layout">
						<label><input type="checkbox" name="age" value="one"> 1학년</label>
						<label><input type="checkbox" name="age" value="two"> 2학년</label>
						<label><input type="checkbox" name="age" value="three"> 3학년</label>
					</div>
				</div>
				<div class="layout_box">
					<span>카테고리</span>
					<div class="layout">
						<label><input type="checkbox" name="category" value="employment"> 취업 준비</label>
						<label><input type="checkbox" name="category" value="major"> 전공과목 스터디</label>
						<label><input type="checkbox" name="category" value="human"> 인문과목 스터디</label>
					</div>
				</div>
				<div class="layout_box">
					<button id="submitBTN" type="submit">검색</button>		   
				</div>
			</form>
     		<div class="list">
				<?php
					$sql = "select * from study";
					$result=mysqli_query($conn, $sql);
						
					while($row = mysqli_fetch_array($result)){
				?>
     			<div class="list_box">
     				<figure class="group_about_box">
		          		<img id="moim" src="<?php echo $row['img_path']; ?>">
			        	<figcaption>
							<br><br><br>  
							<h3 id="group_title"><?php echo $row['title']; ?></h3><br>
							<p id="group_about"><?php echo $row['intro']; ?> </p>
		          		</figcaption>
		          		<a href="group.php"></a>
	        		</figure>
     			</div>
				 <?php
					}
				 ?>
			</div>	
     	</div>
     	<!--하단 빈공간-->
		<div class="footer"></div>
			<div class="menu">
				<a href="main.php"><img id="logo" src="img/logo.png"></a>
				<a href="mypage.php"><h3 id="mypage">마이페이지</h3></a>
				<h3>|</h3>
				<a href="group_lookup.php"><h3 id="lookup">그룹조회</h3></a>
				<h3>|</h3>
				<a href="group_create.php"><h3 id="create">그룹생성</h3></a>
				<h3>|</h3>
				<a href="recommand.php"><h3 id="recommand">추천받기</h3></a>
			</div>
		</div>
	</div>


	<script type="text/javascript">
		function handleOnInput(el, maxlength) {
		  if(el.value.length > maxlength)  {
		    el.value 
		      = el.value.substr(0, maxlength);
		  }
		}
	</script>
</body>
</html>