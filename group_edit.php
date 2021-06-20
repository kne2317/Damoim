<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>다모임</title>
	<link rel='icon' type='images/png'href='img/logo.png'>
	<link href="css/group_create.css" rel="stylesheet" type="text/css" />
	<link href="css/common.css" rel="stylesheet" type="text/css" />
	<meta content="BlendTrans(Duration=0.2)" http-equiv="Page-Enter">
	<meta content="BlendTrans(Duration=0.2)" http-equiv="Page-exit">
</head>
<body>
	<div class="container">
    <div class="container2">
   		<form>
		  <select name="people" style="color: #000000; background-color: #00000000; float: left; margin-left: 3%;">
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
		  <select name="category" style="color: #000000; background-color: #00000000; margin-left: 5%;">
		    <option value="none" style="color: #000000;">카테고리</option>
		    <option value="employment" style="color: #000000;">취업 준비</option>
		    <option value="major" style="color: #000000;">전공과목 스터디</option>
		    <option value="human" style="color: #000000;">인문과목 스터디</option>
		  </select>
			<div class="layout_group_title_box">
				<input type="text" name="group_name" id="group_name" placeholder="모임명" style="color: #000000;">
				</div>
			<div class="layout_box">
				<span>가입 가능 학년</span>
				<div class="layout">
					<label><input type="checkbox" name="age" value="one"> 1학년</label>
	    		<label><input type="checkbox" name="age" value="two"> 2학년</label>
	    		<label><input type="checkbox" name="age" value="three"> 3학년</label>
      		</div>
     		</div>
    		<div class="layout_box">
					<span>학과</span>
					<div class="layout">
						<label><input type="checkbox" name="hakgwa" value="s"> 소프트웨어</label>
      			<label><input type="checkbox" name="hakgwa" value="w"> 웹솔루션</label>
    				<label><input type="checkbox" name="hakgwa" value="d"> 디자인</label>
    			</div>
	    	</div>
	     	<div class="layout_box">
					<span>모임 방법</span>
					<div class="layout">
						<label><input type="checkbox" name="way" value="online"> 온라인</label>
	     			<label><input type="checkbox" name="way" value="offline"> 오프라인</label>
	     		</div>
	     	</div>
	     	<div class="layout_box">
					<span>모임 형태</span>
					<div class="layout">
						<label><input type="checkbox" name="shape" value="long"> 정기적</label>
	     			<label><input type="checkbox" name="shape" value="short"> 비정기적</label>
	     		</div>
	     	</div>
	     	<div class="layout_box">
					<span>모임 날짜</span>
					<div class="layout">
						<label><input type="checkbox" name="day" value="mon"> 월요일</label>
		     		<label><input type="checkbox" name="day" value="tue"> 화요일</label>
	      		<label><input type="checkbox" name="day" value="wen"> 수요일</label>
	   	  		<label><input type="checkbox" name="day" value="thu"> 목요일</label>
	     			<label><input type="checkbox" name="day" value="fri"> 금요일</label>
	     			<label><input type="checkbox" name="day" value="weekend"> 주말</label>
	     		</div>
	     	</div>
	     	<div class="layout_box">
					<span>모임 시간</span>
					<div class="layout">
						<input type='number' id="start_time" maxlength='2'></input>
						<span style="margin-right: 5%; margin-left: 0%;">시 &nbsp;&nbsp; ~</span>
						<input type='number' id="end_time" maxlength='2'></input>
						<span style="margin-left: 0%;">시</span>
					</div>
				</div>
				<div class="layout_group_about_box">
					<span>모임 설명</span>
					<br>
					<textarea id="about"></textarea>
				</div>
				<div class="layout_group_img">
					<span>그룹 사진</span>
					<input type="file" id="group_img_src" name="study_img"></input>
				</div>
     		<button id="group_create_btn" onclick="location.href='my_group.html'" >모임 수정하기</button>
    			<button id="group_delete_btn" onclick="location.href='my_group.html'" style="margin-bottom: 30%;">모임 삭제하기</button>
    		</form>
		</div>
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
	<script type="text/javascript" src="js/group_create.js"></script>
</body>
</html>