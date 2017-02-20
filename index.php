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
		<div class="text-entry">
			<label for="enterWord" id="textEntry">Your Word:<br><span class="required">Required</span></label>
			<input type="text" class="form-control" id="enterWord" name="enterWord" placeholder="Enter Your Word Here!"value="<?=sanitize($enterWord)?>" autofocus><br>
		</div>

		<fieldset id='radios'>
			<legend>Bonus Points</legend>
				<label><input type="radio" name="bonus" value='none' <?php if($bonus == "none") echo "CHECKED"?>>None</label>
				<label><input type="radio" name="bonus" value="double" <?php if($bonus == "double") echo "CHECKED"?>>Double word score</label>
				<label><input type="radio" name="bonus" value="triple" <?php if($bonus == "triple") echo "CHECKED"?>>Triple word score</label>
		</fieldset>

		<fieldset id="checkboxes">
			<legend>Include 50 point "bingo?"</legend>
				<label><input type='checkbox' name="extra" value="fifty" <?php if($extra == "box1") echo 'CHECKED'?>> Yes, Fifty Points!</label>
		</fieldset>
		<br>
			<input type="submit" class="btn btn-primary btn-small">
	</form>

	<div class="alert alert-success">
	<p>Your final score is 	<?=$sum?></p>
</div>

</body>

</html>
