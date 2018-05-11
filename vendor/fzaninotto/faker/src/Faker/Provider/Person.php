<form action="<?php echo e(route('home.store')); ?>" method="post" >
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	Name


	<input type="text" name="Name">




	<button type="submit">Create</button>
</form>