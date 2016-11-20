@extends('blocks')

@section('content')

<div class="row">
	<div class="col-lg-6 col-lg-offset-3">
 		<div class="well">
			<form action="" method="POST" role="form">
				<legend>Need a visa to any destination for a holiday, business, medical, honeymoon, group pilgrimage, group cruise, retreats, training etc.?</legend>

				{{ csrf_field() }}
				<div class="row">
				<div class="form-group col-lg-6">
					<label for="">First Name</label>
					<input type="text" class="form-control" id="" placeholder="">
				</div>

				<div class="form-group col-lg-6">
					<label for="">Last Name</label>
					<input type="text" class="form-control" id="" placeholder="">
				</div>
				</div>
				<div class="row">
				<div class="form-group col-lg-6">
					<div class="form-group">
						<label for="">Travelling Date</label>
						<input type="text" class="form-control" id="" placeholder="">
					</div>
				</div>
				<div class="form-group col-lg-6">
					<div class="form-group">
						<label for="">Country of Residence</label>
						<input type="text" class="form-control" id="" placeholder="">
					</div>
				</div>
				</div>
				<div class="row">
				<div class="form-group col-lg-6">
						<label for="">Destination Country</label>
						<input type="text" class="form-control" id="" placeholder="">
				</div>
				<div class="form-group col-lg-6">
						<label for="">Mobile Number</label>
						<input type="text" class="form-control" id="" placeholder="">
				</div>
				</div>
				<div class="row">
					<div class="form-group col-lg-6">
						<label for="">Email</label>
						<input type="text" class="form-control" id="" placeholder="">
					</div>

					<div class="form-group col-lg-6">
						<label for="">Notes</label>
						<textarea name="" id="input" class="form-control" rows="3" required="required"></textarea>	
					</div>
				</div>

				<hr>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

@stop