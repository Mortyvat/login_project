<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Přidat skupinu</h3>
	</div>
	<div class="panel-body">
		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Název</label>
				<input type="text" name="name" class="form-control" />
			</div>
			<div class="form-group">
				<label>Zkratka (3znaky)</label>
				<input type="text" name="short" class="form-control" />
			</div>
			<div class="form-group">
				<label>Skupina</label>
				<input type="text" name="group" class="form-control" />
			</div>
			<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
		<a class="button" href="<?php echo ROOT_PATH; ?>rozvrh">Cancel</a>
	</form>
</div>
</div>