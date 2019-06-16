<br>
<br>
	<center><a class="button" href="<?php echo ROOT_PATH; ?>rozvrh/add">Share Something</a>
	<br>
	<?php foreach($viewmodel as $item) : ?>
	<div class='sm6column'>
		<div class='card'>
			<h3><?php echo $item['name'];?></h3>
			<small><?php echo $item['short']; ?></small>
			<p><?php echo $item['group']; ?></p>
			<a class="button" href="<?php echo $item['id']; ?>" target="_blank">Navštívit</a>
		</div>
	</div>

	<?php endforeach; ?>