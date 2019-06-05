	<div>
	<br>
	<a href="<?php echo ROOT_PATH; ?>rozvrh/add" class="button">Share Something</a>
	</div>
	</br>
	<?php foreach($viewmodel as $item) : ?>
	<div class="container">
    <div class="col">
      <h3><?php echo $item['name'];?></h3>
			<small><?php echo $item['short']; ?></small>
			<br />
			<p><?php echo $item['group']; ?></p>
			<a class="btn btn-default" href="<?php echo $item['id']; ?>" target="_blank">Navštívit</a>
			<br>
		</div>
</div>
	<?php endforeach; ?>