<form action="<?php echo e(route('home.update', $U->UserID)); ?>" method="post" >
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<input type="hidden" name="_method" value="put">
	
	Name


	<input type="text" name="Name" value="<?php echo e($U->Name); ?>">




	<button type="submit">Update</button>
</form>