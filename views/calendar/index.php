
<div class="text-center">
<h1>Kalendář</h1>
	<?php 
	if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
	if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");
	$cMonth = $_REQUEST["month"];
	$cYear = $_REQUEST["year"];
	
	$prev_year = $cYear;
	$next_year = $cYear;
	$prev_month = $cMonth-1;
	$next_month = $cMonth+1;
	
	if ($prev_month == 0 ) {
	    $prev_month = 12;
	    $prev_year = $cYear - 1;
	}
	
	if ($next_month == 13 ) {
	    $next_month = 1;
	    $next_year = $cYear + 1;
	}
	
	if(isset($_POST['go'])){
	    $calendar = new Calendr($next_month,2019);
		$calendar->show();
	} elseif(isset($_POST['back'])) {
	    $calendar = new Calendr($prev_month,2019);
		$calendar->show();
	} elseif (isset($_POST['this'])){
		$calendar = new Calendr($cMonth,2019);
		$calendar->show();
	}
	
		?>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<input class="btn btn-primary" name="back" type="submit" value="Minulý měsíc" />
		<input class="btn btn-primary" name="this" type="submit" value="Tenhle měsíc" />
		<input class="btn btn-primary" name="go" type="submit" value="Další měsíc" />
		<a href="<?php echo $_SERVER["PHP_SELF"]  . "?month=". $prev_month . "&year=" . $prev_year; ?>" style="color:black">Previous</a>
		<a href="<?php echo $_SERVER["PHP_SELF"]  . "?month=". $next_month . "&year=" . $next_year; ?>" style="color:black">Next</a>

		</form>
</div>
