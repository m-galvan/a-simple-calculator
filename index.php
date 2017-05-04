<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple Calculator</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<form action="" method="post">
	<div class="container">
		<h1>Simple Calculator</h1>
		<div class="form-group">
		Enter First Number: <input class="form-control" type="number" name="firstNum" required>
		</div>
		<div class="form-group">
		Enter Second Number: <input class="form-control" type="number" name="secondNum" required>
		</div>
		 <div class="form-group">
      <label class="col-lg-2 control-label">Operations</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="radio" id="optionsRadios1" value="Add">
            Add
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="radio" id="optionsRadios2" value="Subtract">
            Subtract
          </label>
        </div>
         <div class="radio">
          <label>
            <input type="radio" name="radio" id="optionsRadios3" value="Multiply">
            Multiply
          </label>
        </div>
         <div class="radio">
          <label>
            <input type="radio" name="radio" id="optionsRadios4" value="Divide">
            Divide
          </label>
        </div>
         <div class="radio">
          <label>
            <input type="radio" name="radio" id="optionsRadios5" value="Modulo">
            Modulo
          </label>
        </div>
      </div>
    </div>
	    <div class="form-group">
		<button class="col-lg-4 btn btn-primary" type="submit" name="submit">Calculate</button>
	    </div>
	</div>
	</form>
	<?php
	if(isset($_POST['submit'])){
		if(isset($_POST['radio'])){
			$firstNum = $_POST['firstNum'];
			$secondNum = $_POST['secondNum'];
			$op = $_POST['radio'];

				if($op == "Add"){
					echo "<div style='margin-left:270px;margin-top:40px;'>";
					echo "<b>Result:</b>";
					echo "</br>";
					echo $firstNum.' + '.$secondNum.' = '. ($firstNum + $secondNum);
					echo "</div>";
				}elseif($op == "Subtract") {
					echo "<div style='margin-left:270px;margin-top:40px;'>";
					echo "<b>Result:</b>";
					echo "</br>";
					echo $firstNum.' - '.$secondNum.' = '. ($firstNum - $secondNum);
					echo "</div>";
				}elseif($op == "Multiply") {
					echo "<div style='margin-left:270px;margin-top:40px;'>";
					echo "<b>Result:</b>";
					echo "</br>";
					echo $firstNum.' * '.$secondNum.' = '. ($firstNum * $secondNum);
					echo "</div>";
				}elseif($op == "Divide") {
					echo "<div style='margin-left:270px;margin-top:40px;'>";
					echo "<b>Result:</b>";
					echo "</br>";
					echo $firstNum.' / '.$secondNum.' = '. ($firstNum / $secondNum);
					echo "</div>";
				}elseif($op == "Modulo") {
					echo "<div style='margin-left:270px;margin-top:40px;'>";
					echo "<b>Result:</b>";
					echo "</br>";
					echo $firstNum.' % '.$secondNum.' = '. ($firstNum % $secondNum);
					echo "</div>";
		} else {
			echo "Invalid Output";
		}
	}
}
	?>
</body>
</html>