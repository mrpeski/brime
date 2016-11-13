@extends('blocks')

@section('content')
<div class="col-lg-6 col-lg-offset-3">
<form action="" method="POST" role="form">
	<legend>Contact</legend>

	{{ csrf_field() }}
	<div class="form-group">
		<label for="">First Name</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>	

	<div class="form-group">
		<label for="">Surname</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>	

	<div class="form-group">
		<label for="">Phone(Home)</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>

	<div class="form-group">
		<label for="">Country</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>

	<div class="form-group">
		<label for="">Enquiry</label>
		<textarea name="enquiry" id="inputEnquiry" class="form-control" rows="3" required="required"></textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>
</div>
@stop