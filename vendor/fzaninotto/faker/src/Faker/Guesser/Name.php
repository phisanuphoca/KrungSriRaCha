<form action="{{ route('home.update', $U->UserID) }}" method="post" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="_method" value="put">
	
	Name


	<input type="text" name="Name" value="{{ $U->Name }}">




	<button type="submit">Update</button>
</form>