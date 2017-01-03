<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Job Postings Tracker App</title>
</head>
<body>
	<h1>JOB POSTINGS TRACKER APP</h1>
	<form action="server.php" method="POST">
		<label>Job Title: <input type="text" name="title" placeholder="eg. PHP Developer" size="30"></label> <br>
		<label>Job Type: <input type="text" name="type" placeholder="eg. Full-time | Part-time | Internship" size="30"></label> <br>
		<label>Location: <input type="text" name="location" placeholder="eg. New York | Boston etc" size="30"></label> <br>
		<label>Salary: <input type="text" name="salary" placeholder="eg. $60,000" size="30"></label> <br>

		<input type="submit" value="Submit New Job Posting"> <br>
		
	</form>
</body>
</html>


