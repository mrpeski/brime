@extends('blocks')

@section('content')
<div class="row">
	<div class="col-lg-6 col-lg-offset-3">
 		<div class="well">
		<div id="map"></div>
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
	</div>
</div>

<script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 6.442962, lng: 3.426196},
          // 6.442962, 3.426196
          scrollwheel: false,
          zoom: 8
        });
      }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkc4H0yMKg052aK7gurXYPQlnZnoyw0mw&callback=initMap"></script>

@stop
