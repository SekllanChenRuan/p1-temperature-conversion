<?php
   // index.php
   // if the request is a POST request, validate the data
   if (isset($_POST['input_value'])) {
		 // get the data from the form
		 $first_selection = $_POST['first_selection'];
    	 $second_selection = $_POST['second_selection'];
       $input_value = filter_input(INPUT_POST, 'input_value', FILTER_VALIDATE_FLOAT);

    // validate entry
        if ( $input_value === FALSE ) {
           $error_message = 'Input value must be a valid number.';
        } else {
            $error_message = '';
        }
   } else {
		$input_value = 0;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Temperature Converter</title>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
	<main>
	<h1>Temperature Converter</h1>
    <?php if (!empty($error_message)) { ?>
       <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
	<form action="results.php" method="post">
	<table>
	<tr>
			<td>
				<p>Value to Convert:</p>
				<input type="text" name="input_value" 
				value = "<?php echo htmlspecialchars($input_value = ''); ?>">
			</td>
		</tr>

		<tr>
			<td>
			<p>From:</p>
				<select name="first_selection">
					<option value="fahrenheit">Fahrenheit</option>
					<option value="celsius">Celsius</option>
					<option value="kelvin"> Kelvin</option>
				</select>

			</td>
		</tr>

		<tr>
			<td>
			<p>To:</p>
				<select name="second_selection">
					<option value="fahrenheit">Fahrenheit</option>
					<option value="celsius">Celsius</option>
					<option value="kelvin">Kelvin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<br>
				<input type="submit" name="button" value="Convert">
			</td>
		</tr>
		<tr>
			<td>
</main>
</body>
</html>