<div>
<br>
<br>
	<center><a class="button" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a></center>
	<br>
	<?php foreach($viewmodel as $item) : ?>
		<div class="card">
			<h3><?php echo $item['title']; ?></h3>
			<small><?php echo $item['create_date']; ?></small>
			<hr />
			<p><?php echo $item['body']; ?></p>
			<br />
			<a class="button" href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
		</div>
		<br />
	<?php endforeach; ?>
</div>