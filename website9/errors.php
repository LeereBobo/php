<?php if (count($errors) > 0): ?>
	<div>
		<?php foreach($errors as $errors): ?>
			<p class="alert alert-danger"><?php echo $errors; ?></p>
		<?php endforeach; ?>
	</div>

<?php endif; ?>