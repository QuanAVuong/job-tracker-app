<?php 
// This script performs an INSERT query to add a record to the jobs table.


// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('db.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// Check for a job title:
	if (empty($_POST['title'])) {
		$errors[] = 'Job Title is a required field.';
	} else {
		$title = mysqli_real_escape_string($dbc, trim($_POST['title'])); 
		/*This function escapes special characters in a string for use in an SQL statement. Both parameters are required: the first specifies the MySQL connection to use, the second is the string to be escaped
		*/
	}
	
	// Check for a job type:
	if (empty($_POST['type'])) {
		$errors[] = 'Job Type is a required field.';
	} else {
		$type = mysqli_real_escape_string($dbc, trim($_POST['type']));
	}
	
	// Check for an location address:
	if (empty($_POST['location'])) {
		$errors[] = 'Location is a required field.';
	} else {
		$location = mysqli_real_escape_string($dbc, trim($_POST['location']));
	}
	
	// Check for an salary:
	if (empty($_POST['salary'])) {
		$errors[] = 'Salary is a required field.';
	} else {
		$salary = mysqli_real_escape_string($dbc, trim($_POST['salary']));
	}
	
	if (empty($errors)) { // If everything's OK.
	
		// Register the user in the database...
		
		// Make the query:
		$query = "INSERT INTO jobs (title, type, location, salary, post_date) VALUES ('$title', '$type', '$location', '$salary', NOW() )";		
		$run = @mysqli_query ($dbc, $query); // Run the query.
		if ($run) { // If it ran OK.
		
			// Print a message:
			echo '<h1 style="background:lightgreen">The following job posting was added to the database susccessfully: </h1>';
			echo "<ul>
						<li> Job Title: $title <li>
						<li> Job Type: $type <li>
						<li> Job Location: $location <li>
						<li> Salary: $salary <li>
				  </ul>";
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">The job post could not be completed due to a system error. We apologize for any inconvenience.</p>'; 
			
			// Debugging message:
			echo '<p style="background:red">' . mysqli_error($dbc) . '<br /><br />Query: ' . $query . '</p>';
						
		} // End of if ($run) IF.
		
		mysqli_close($dbc); // Close the database connection.

		
		exit(); //Terminates the execution of the script
		
	} else { // Report the errors.
	
		echo '<h1 style="background:red">Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';
		
	} // End of if (empty($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.
?>