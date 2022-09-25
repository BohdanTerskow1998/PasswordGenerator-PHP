<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:title" content="Password generation">
	<meta property="og:type" content="article">
	<meta property="og:url" content="http://localhost/index">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Password generator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://www.freeiconspng.com/thumbs/lock-icon/lock-icon-11.png" type="image/x-icon">
</head>
<body>
	<?php 

		/*
		**
		*/
		class GeneratorClass 
		{
			public function generator()
			{
				if(isset($_POST['btn']))
				{
					$str = "";
					$numberFrom = $_POST['numberFrom'];
					$numberTo = $_POST['numberTo'];
					@$letters = $_POST['letters'];
					@$numbers = $_POST['numbers'];
					@$symbols = $_POST['symbols'];

					@$str .= $letters;
					@$str .= $numbers;
					@$str .= $symbols;

					if($str)
					{
						return substr(str_shuffle($str), $numberFrom, $numberTo);
					} else {
						return "Error!";
					}
				}
			}
		}

	?>
	<div type="text" id="result" /><?php $generator = new GeneratorClass(); echo $generator->generator(); ?></div>
	<script type="text/javascript">
		function copyEvent(id)
	    {
	        var str = document.getElementById(id);
	        window.getSelection().selectAllChildren(str);
	        document.execCommand("Copy")
	    }
	</script>

	<br /><br />
	<div id="buttons">
		<button onclick="copyEvent('result')">Copy text</button>
		<form action="index.php"><button type="submit">Back</button></form>
	</div>
</body>
</html>
