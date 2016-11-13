@extends('blocks')

@section('content')
 <div class="col-lg-6 col-lg-offset-3">

<form action="" method="POST" role="form">
	<legend>Travel Insurance</legend>

	{{ csrf_field() }}
	<div class="form-group">
		<label for="">Name</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">First Name</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Subject</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Message</label>
		<textarea name="" id="input" class="form-control" rows="3" required="required"></textarea>	
	</div>

	<div class="form-group">
		<label for="">Date of Birth</label>
		<input type="date" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Mobile Number</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Occupation</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Gender</label>
		<select name="" id="input" class="form-control" required="required">
			<option value="">Male</option>
			<option value="">Female</option>
		</select>
	</div>

	<div class="form-group">
		<label for="">Marital Status</label>
		<select name="" id="input" class="form-control" required="required">
			<option value="">Single</option>
			<option value="">Married</option>
		</select>
	</div>

	<div class="form-group">
		<label for="">Purpose of Travel</label>
		<select name="" id="input" class="form-control" required="required">
			<option value="">Vacation</option>
			<option value="">Medical Treatment</option>
			<option value="">Sport</option>
			<option value="">Trainings</option>
		</select>
	</div>

	<div class="form-group">
		<label for="">Travel Group Type</label>
		<select name="" id="input" class="form-control" required="required">
			<option value="">Family</option>
			<option value="">Companion</option>
			<option value="">Team</option>
		</select>
	</div>

	<div class="form-group">
		<label for="">Passport No</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Name Next of Kin</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Address</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Relationship</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Coverage Begins</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Coverage Ends</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Destination</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Do you intend to stay in any country for more than 90 days?</label>
		<select name="" id="input" class="form-control" required="required">
			<option value="">Yes</option>
			<option value="">No</option>
		</select>
	</div>


	<div class="form-group">
		<label for="">Do you have any pre-existing medical condition(s)?</label>
		<input type="radio" name="medic" value="Yes"> Yes
		<input type="radio" name="medic" value="No"> No
		<label for="">If yes, Please indicate</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@stop