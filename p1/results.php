<?php
//result.php
//fahrenheit to celsius
function fahrenheit_celsius($input_value)
{
	$celsius=5/9*($input_value-32);
	return $celsius;
}
//celsius to fahrenheit
function celsius_fahrenheit($input_value)
{
	$fahrenheit=$input_value*9/5+32;
	return $fahrenheit;
}
//fahrenheit to kelvin
function fahrenheit_kelvin($input_value)
{
	$kelvin=fahrenheit_celsius($input_value) + 273.15;
	return $kelvin;
}
//kelvin to fahrenheit 
function kelvin_fahrenheit($input_value)
{
	$fahrenheit=9/5*($input_value-273.15)+32;
	return $fahrenheit;
}
//celsius to kelvin 
function celsius_kelvin($input_value)
{
	$kelvin=$input_value+273.15;
	return $kelvin;
}
//kelvin to celsius 
function kelvin_celsius($input_value)
{
	$celsius=$input_value-273.15;
	return $celsius;
}
?>

<?php
if(isset($_POST['input_value']))
{
	//get data from form
	$first_selection=$_POST['first_selection'];
    $second_selection=$_POST['second_selection'];
    $input_value = filter_input(INPUT_POST, 'input_value', FILTER_VALIDATE_FLOAT);
	
	//declare result variable
	$result = 0;
    //validate input value
    if ( $input_value === FALSE ) {
        $error_message = 'Input value must be a valid number.';
    } else {
        $error_message = '';          
    }
    //redirect condition if there is an error
    if ($error_message != '') {
        include('index.php');
        exit(); 
    }


    //celsius to fahrenheit and kelvin
    if ($first_selection=='celsius') 
    {
        if ($second_selection=='fahrenheit') 
        {
            $result=celsius_fahrenheit($input_value);
        }  else if ($second_selection=='kelvin') 
        {
            $result=celsius_kelvin($input_value);
            echo "$input_value Celsius   = $kelvin Kelvin";
        }  else 
        {
            $result = $input_value;
        }
	}
	
		//fahrenheit to celsius and kelvin
        if ($first_selection=='fahrenheit') 
    {
        if ($second_selection=='celsius') 
        {
            $result=fahrenheit_celsius($input_value);
        }  else if ($second_selection=='kelvin') 
        {
            $result=fahrenheit_kelvin($input_value);
        }  else 
        {
            $result = $input_value;
        }
	}
    //kelvin to fahrenheit and celsius
    if ($first_selection=='kelvin') 
    {
        if ($second_selection=='fahrenheit') 
        {
            $result=kelvin_fahrenheit($input_value);
        }  else if ($second_selection=='celsius') 
        {
            $result=kelvin_celsius($input_value);
        }  else 
        {
            $result = $input_value;
        }
	}
	//apply formatting 2 decimal place
	$result_f = number_format($result, 2);
}
?>

<html>
<head>
	<title>Temperature Converter</title>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
	<body>
		<main>
		<label>conversion:</label>
        <span><?php echo $result_f; ?></span><br>
		</main>
	</body>
</html>


