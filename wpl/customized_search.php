<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KU Question Archive</title>
	<link rel="stylesheet" href="main_style.css">
</head>
<body bgcolor="teal">
	<div id="main">
	
		<p id="heading">Welcome to Question Archive</p>
	
		<fieldset id="button_container">
			<button> <a href="question_main.php" style="text-decoration:none">Upload Question</</button><br><br>
			<button><a href="search_question.php" style="text-decoration:none">General Search</a></button><br><br>
			<button>Help</button>
		</fieldset>
	

		<form action="search.php" method="POST">
			<fieldset id="upload_container">
				<label style="display:inline">Select Course:</label>
				<input type="text" name="course"><br><br>
				 <label style="display:inline">From:   Year:  </label>
				<select style="width:80px">
					<option  value="1">1</option>
					<option  value="2">2</option>
					<option  value="3">3</option>
					<option  value="4">4</option>
				</select>
				<label style="display:inline">Term:</label>
				
				<select style="width:80px">
					<option  value="1">1</option>
					<option  value="2">2</option>
				</select><br><br>
				 <label style="display:inline">Upto:  Year:  </label>
				<select style="width:80px">
					<option  value="1">1</option>
					<option  value="2">2</option>
					<option  value="3">3</option>
					<option  value="4">4</option>
				</select>
				<label style="display:inline">Term:</label>
				
				<select style="width:80px">
					<option  value="1">1</option>
					<option  value="2">2</option>
				</select><br><br>
				<label style="display:inline">From: Session:</label>
				<input type="text" name="session"><br><br>
				<label style="display:inline">Upto: Session:</label>
				<input type="text" name="session"><br><br>
				
				<input type="radio" name="term_final" id=""><span>Term Final Question</span>
				<input type="radio" name="ct_question" id="">CT Question <br> <br>
				
				<input type="submit" name="question" id="" value="Search Question"><br><br>
				
				
			</fieldset>
		</form>
	
	</div>
	
</body>
</html>