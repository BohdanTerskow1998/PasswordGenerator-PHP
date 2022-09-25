<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:title" content="Password generation">
	<meta property="og:type" content="article">
	<meta property="og:url" content="http://localhost/index">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Password generator</title>
	<link rel="icon" href="https://www.freeiconspng.com/thumbs/lock-icon/lock-icon-11.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<form id="form" method="POST" action="generator.php">
			<label for="numberFrom"><b>From (min: 1):</b></label>
			<input id="numberFrom" type="number" name="numberFrom" value="1"> <br />
			<label for="numberTo"><b>To (max: 20):</b></label>
			<input id="numberTo" type="number" name="numberTo" value="20" placeholder="max: 20"> <br /> <br />

			<label for="checkbox"><b>Symbols:</b></label> <br />
			<input id="letters" type="checkbox" name="letters" value="AaBbCcDdEeFfGgZz"><i>Aa,...Zz</i> <br />
			<input id="numbers" type="checkbox" name="numbers" value="123456790"><i>0, 1, 2 ... 9</i> <br />
			<input id="symbols" type="checkbox" name="symbols" value="$%!?"><i>$%!?</i> <br /> <br />
			<button type="submit" name="btn" class="btn btn-success">GO!</button>
		</form>
	</div>
</body>
</html>