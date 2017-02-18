<?php require('scrabbleTiles.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-+ENW/yibaokMnme+vBLnHMphUYxHs34h9lpdbSLuAwGkOKFRl4C34WkjazBtb7eT" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<title>Scrabble Word Score Calculator</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div class="wrapper">
	<h1>Scrabble Word Score Calculator</h1>

	<form method="GET" action="/">
		<fieldset id='textInput'>
			<legend>Your Word:<br><span>Required</span></legend>
				<label><input type="text" id="enterWord" placeholder="Enter Your Word Here!"value="<?=sanitize($filter)?>" autofocus><label><br>
			<label><input type="checkbox" name="caseInsensitive" <?php if($caseInsensitive) echo 'CHECKED' ?>>Case Insensitive</label>
		</fieldset>

		<fieldset id='radios'>
			<legend>Bonus Points</legend>
				<label><input type="radio" name="enterBonus" value="none">None</label>
				<label><input type="radio" name="enterBonus" value="double">Double word score</label>
				<label><input type="radio" name="enterBonus" value="triple">Triple word score</label>
		</fieldset>

		<fieldset id="checkboxes">
			<legend>Include 50 point "bingo?"</legend>
				<label><input type="checkbox" name="enterExtraPoints" value="no">Yes!</label>
		</fieldset>
		<br>
			<input type="submit" class="btn btn-primary btn-small">
	</form>

	<div class="results"></div>
</div>

</body>

</html>
