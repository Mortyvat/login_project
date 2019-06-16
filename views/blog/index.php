<br>
	<br>
	<center><a class="button" href="<?php echo ROOT_PATH; ?>blog/add">Share Something</a></center>
	<?php foreach($viewmodel as $item) : ?>
			<div class='card'>	
				<h3><?php echo $item['title']; ?></h3>
				<small><?php echo $item['date']; ?></small>
				<hr />
				<p><?php echo $item['body']; ?></p>
				<a class="button" href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
		</div>
	<?php endforeach; ?>
