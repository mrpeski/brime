@extends('blocks')

@section('content')

<div class="col-lg-6 col-lg-offset-3">

<form action="" method="POST" role="form">
	<legend>Visa Assistance</legend>

	{{ csrf_field() }}
	
	<div class="form-group">
		<label for="">First Name</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Last Name</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Travelling Date</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Country of Residence</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Destination Country</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Mobile Number</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Notes</label>
		<textarea name="" id="input" class="form-control" rows="3" required="required"></textarea>	
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

@stop