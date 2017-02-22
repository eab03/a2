
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-+ENW/yibaokMnme+vBLnHMphUYxHs34h9lpdbSLuAwGkOKFRl4C34WkjazBtb7eT" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/style.css">

	<title>Scrabble Word Score Calculator</title>
	<?php require('scrabbleTiles.php'); ?>
</head>

<body>
	<div class="wrapper">
	<h1><span id="scrabble">SCRABBLE</span><br>WORD SCORE CALCULATOR</h1>

			<form method="GET" action="/" name="a2Form" class="form-horizontal">
				<div class="form-group text-entry">
					<label for="enterWord" class="control-label">YOUR WORD:</label>
						<p class="form-control-static">Required (1-7 letters only please!)</p>
					<input type="text" class="form-control" id="enterWord" name="enterWord" placeholder="Enter Your Word Here!" required="required" autofocus maxlength="7" value="<?=sanitize($enterWord)?>"><br>
				</div><!--close div form-group-->

				<div class="form-group radios">
					<legend>BONUS POINTS</legend>
							<label class="control-label"><input type="radio" class="form-check-input" name="bonus" value='none' <?php if($bonus == 'none') echo 'CHECKED'?>>&nbsp None</label><br>
							<label class="control-label"><input type="radio" class="form-check-input" name="bonus" value="double" <?php if($bonus == 'double') echo 'CHECKED'?>>&nbsp Double word score</label><br>
							<label class="control-label"><input type="radio" class="form-check-input" name="bonus" value="triple" <?php if($bonus == 'triple') echo 'CHECKED'?>>&nbsp Triple word score</label>
				</div><!--close div form-group-->

				<div class="form-group checkbox">
					<legend>INCLUDE 50 POINT "BINGO?"</legend>
						<p class="form-control-static">(A word that uses all 7 letters!)</p>
						<label class="control-label"><input type='checkbox' class="form-check-input" name="extra" value="fifty" <?php if($extra == 'fifty') echo 'CHECKED'?>>&nbsp Add 50 points!</label>
				</div><!--close div form-group-->

				<br>
				<input type="submit" class="btn btn-primary btn-small" id="calculate_btn" name="calculate" value="calculate">
				<input type="reset" class="btn btn-primary btn-small" id="reset-btn" name="reset" value="reset">

			</form><!--close form-->

		<div class="alert alert-success">
			<p>Your word score is: <?=$sum?></p>
		</div> <!--close div alert-->
	</div> <!--close div wrapper-->

</body>
</html>
