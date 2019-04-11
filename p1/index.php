<?php
//index.php


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



<html>
<head>
	<title>Temperature Converter</title>
	<link rel="stylesheet" type="text/css" href="css/temperature.css"/>
</head>
<body>
	<main>
	<h1>Temperature Converter</h1>
	<form action="" method="post">
	<table>
	<tr>
			<td>
				<p>Value to Convert:</p>
				<input type="text" name="input_value">
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

<?php
if(isset($_POST['button']))
{
    
	
	$first_selection=$_POST['first_selection'];
    $second_selection=$_POST['second_selection'];
	$input_value=$_POST['input_value'];


	
    //celsius to fahrenheit and kelvin
    if ($first_selection=='celsius') 
    {
        if ($second_selection=='fahrenheit') 
        {
            $fahrenheit=celsius_fahrenheit($input_value);
	        echo "$input_value Celsius  = $fahrenheit Fahrenheit";
        }  elseif ($second_selection=='kelvin') 
        {
            $kelvin=celsius_kelvin($input_value);
            echo "$input_value Celsius   = $kelvin Kelvin";
        }  else 
        {
            echo "$input_value Celsius";
        }
	}
	
		//fahrenheit to celsius and kelvin

        if ($first_selection=='fahrenheit') 
    {
        if ($second_selection=='celsius') 
        {
            $celsius=fahrenheit_celsius($input_value);
            echo "$input_value Fahrenheit = $celsius Celsius";
        }  elseif ($second_selection=='kelvin') 
        {
            $kelvin=fahrenheit_kelvin($input_value);
            echo "$input_value Fahrenheit = $kelvin Kelvin";
        }  else 
        {
            echo "$input_value Fahrenheit";
        }
	}

    //kelvin to fahrenheit and celsius
    if ($first_selection=='kelvin') 
    {
        if ($second_selection=='fahrenheit') 
        {
            $fahrenheit=kelvin_fahrenheit($input_value);
            echo "$input_value Kelvin  = $fahrenheit Fahrenheit";
        }  elseif ($second_selection=='celsius') 
        {
            $celsius=kelvin_celsius($input_value);
            echo "$input_value Kelvin  = $celsius Celsius";
        }  else 
        {
            echo "$input_value Kelvin";
        }
    } 
}
				?>
			</td>
		</tr>
	</table>
	</form>
</main>
</body>
</html>