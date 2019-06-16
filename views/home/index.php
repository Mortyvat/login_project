
<div class="text-center">
	<h1>MCV</h1>
	<p class="lead">Posledni uprava webu 5.6.2019 A jako vůbec nevim doprdele proč se to vystředí až po tom, co napíšu x dementních znaků. </p>

</div>

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
    $calendar = new Calendr($next_month,$next_year);
    $calendar->show();

?>
	
    <a href="<?php echo $_SERVER["PHP_SELF"]  . "?month=". $prev_month . "&year=" . $prev_year; ?>" style="color:black">Previous</a>
    <caption><?php echo $prev_month . " " . $prev_year ?></caption>;
	<a href="<?php echo $_SERVER["PHP_SELF"]  . "?month=". $next_month . "&year=" . $next_year; ?>" style="color:black">Next</a>
	</form>
</div>