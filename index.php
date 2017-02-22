<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php require('scrabbleTiles.php'); ?>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-+ENW/yibaokMnme+vBLnHMphUYxHs34h9lpdbSLuAwGkOKFRl4C34WkjazBtb7eT" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/style.css">

	<script type="text/javascript" src="js/a2.js"></script>

	<title>Scrabble Word Score Calculator</title>

</head>

<body>
	<div class="wrapper">
	<h1><span id="scrabble">SCRABBLE</span><br>WORD SCORE CALCULATOR</h1>

	<div class="form-inputs">
	<form method="GET" action="/" name="a2Form">
		<div class="text-entry">
			<label for="enterWord" id="textEntry">YOUR WORD:<br><span>Required (1-7 letters only please!)</span></label>
			<input type="text" class="form-control" id="enterWord" name="enterWord" placeholder="Enter Your Word Here!" required="required" autofocus maxlength="7" value="<?=sanitize($enterWord)?>"><br>
		</div><!--close div text-extry-->

		<fieldset id="radios">
			<legend>BONUS POINTS</legend>
				<label><input type="radio" name="bonus" value='none' <?php if($bonus == 'none') echo 'CHECKED'?>>None</label>
				<label><input type="radio" name="bonus" value="double" <?php if($bonus == 'double') echo 'CHECKED'?>>Double word score</label>
				<label><input type="radio" name="bonus" value="triple" <?php if($bonus == 'triple') echo 'CHECKED'?>>Triple word score</label>
		</fieldset>

		<fieldset id="checkboxes">
			<legend>INCLUDE 50 POINT "BINGO?"<br><span>(A word that uses all 7 letters!)</span></legend>
				<label><input type='checkbox' name="extra" value="fifty" <?php if($extra == 'fifty') echo 'CHECKED'?>>Add 50 points!</label>
		</fieldset>
		<br>
			<input type="submit" id="calculate_btn" name="calculate" value="calculate" class="btn btn-primary btn-small">
			<input type="reset" id="reset-btn" name="reset" value="reset" class="btn btn-primary btn-small">
	</form>
</div> <!--close div form-->

	<div class="alert alert-success">
	<p>Your word score is: <?=$sum?></p>
</div> <!--close div wrapper-->

</body>

</html>
