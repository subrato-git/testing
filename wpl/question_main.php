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
			<button>Upload Question</button><br><br>
			<button><a href="search_question.php" style="text-decoration:none">Search Question</a></button><br><br>
			<button>Help</button>
		</fieldset>
	

		<form action="upload_question.php" method="POST">
			<fieldset id="upload_container">
				<label style="display:inline">Course No:</label>
				<input type="text" name="course"><br><br>
				<label style="display:inline">Year:  </label>
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
				<label style="display:inline">Session:</label>
				<input type="text" name="session"><br><br>
				<label style="display:inline">Course Teacher:</label>
				<input type="text" name="course_teacher"> <br><br>
				<input type="radio" name="term_final" id=""><span>Term Final Question</span>
				<input type="radio" name="ct_question" id="">CT Question <br> <br>
				<input type="file" name="image" id ="imgInp" onchange="previewFile()">
				<input type="submit" name="question" id="" value="Upload Question"><br><br>
				<img src="" height="200" alt="Question preview...">
				
			</fieldset>
		</form>
	
	</div>
	<script type="text/javascript">
		  function previewFile() {
  var preview = document.querySelector('img');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
  }
}
	</script>
</body>
</html>