@extends('front-master')

@section('content')
<section class="booking-sec">
	<div class="container description-star-sec">
		<div class="row title-row">
			<div class="col-md-12">
				<p class="title">{{$package->title}}</p>
				<p class="location">{{$package->location}}</p>
				<!-- <p class="rating">*****</p> -->
			</div>
		</div>
		<div class="row booking-row">
			<div class="booking-item">
				<div class=" item-top-row">
					<img src="{{  asset('/img/flash-sale.jpg') }}" class="img-top-listing">
				</div>
				<div class=" item-middle-row">
					<img src="{{  asset('/upload/'.$package->featured_image) }}" class="img-middle-listing">
				</div>
				<div class="item-bottom-row">
					<div class="details-box">
						@php 
							echo $package->information;
						@endphp
						<p class="retail-value">Retail Value <span class="original-price">${{$package->orignal_price}}</span></p>
						<p class="today-value">Today's Sale Price <span class="today-price">${{$package->price}}</span> Per Family </p>
						<button class="booking-button" data-toggle="modal" data-target="#dateModalCenter"><span class="fa fa-calendar-check-o"></span> Get Started</button>
						<div class="today-only-timer">today only sale ends in <span class="today-sale-timer">
							<div class="text-center align-self-end">
                            	<p class="ltxt hr"></p>
                            	<p class="smtxt">HOURS</p>
                        	</div>
                        	<div class="text-center align-self-end">
                            	<p class="ltxt min"></p>
                            	<p class="smtxt">MINUTES</p>
                        	</div>
                        	<div class="text-center align-self-end">
                            	<p class="ltxt sec"></p>
                            	<p class="smtxt">SECONDS</p>
                        	</div>
						</span></div>
						<p class="extra-text"><b>PER ROOM</b> Price For Entire Stay - Not Per Person, Not Per Night</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="date-box-sec">
	<div class="container">
		<div class="row date-box-row">
			<div class="date-box-item">
				<p class="text-date-box">Don't have the dates? don't worry</p>
				<div class="col-md-12 button-date-box">
					<a href="javascript:void(0);" data-toggle="modal" data-target="#lockpriceModalCenter"><p>Click here to get this deal now</p>
						<p>for $99 only.</p>
					</a>					
				</div>
				<p class="">Travel over the next 12 months!</p>
			</div>
		</div>
	</div>
</section>
<section class="icon-box-container">
	<div class="container">
		<div class="col-md-6"><img src=""></div>
		<div class="col-md-6"><img src=""></div>
	</div>
</section>
<section class="video-box">
	<div class="video-container container">
		<!-- <iframe width="420" height="315" src="https://www.youtube.com/embed/YC8MKshn2f8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe> -->
		@php 
        	$embed = html_entity_decode($package->video_embed_code);
        	echo $embed;
        @endphp
	</div>
</section>
<section class="gallery-sec description-section">
	<div class="container">
		<div class="row">
			@php 
        		echo $package->description
        	@endphp
		</div>
	</div>
</section>

<section class="flash-sale-box-sec">
	<div class="container">
		<div class="row flash-sale-box-row">
			<div class="flash-sale-box-item">
				<img src="{{  asset('/img/flash-sale-small.jpg') }}" class="img-top-listing">
				<div class="today-only-timer">SALE ENDS IN: <span class="today-sale-timer">
					<div class="text-center align-self-end">
                    	<p class="ltxt hr"></p>
                    	<p class="smtxt">HOURS</p>
                	</div>
                	<div class="text-center align-self-end">
                    	<p class="ltxt min"></p>
                    	<p class="smtxt">MINUTES</p>
                	</div>
                	<div class="text-center align-self-end">
                    	<p class="ltxt sec"></p>
                    	<p class="smtxt">SECONDS</p>
                	</div>
				</span></div>
				<div class="col-md-12 button-flash-sale-box">
				</div>
				<button class="booking-button flash-sale-btn" data-toggle="modal" data-target="#dateModalCenter"><span class="fa fa-calendar-check-o"></span> Get Started</button>
			</div>
		</div>
	</div>
</section>
<section class="why-stay-sec gallery-sec">
	<div class="container">
		<div class="row why-stay-row">
			@php
				echo $package->hotel_details;
			@endphp
			<div class="reservation-box-fascility">
				<p class="retail-value">Retail Value <span class="original-price">${{$package->orignal_price}}</span></p>
				<p class="today-value">Today's Sale Price <span class="today-price">${{$package->price}}</span> Per Family </p>
				<button class="booking-button flash-sale-btn" data-toggle="modal" data-target="#dateModalCenter"><span class="fa fa-calendar-check-o"></span> Get Started</button>
			</div>
		</div>
	</div>
</section>
<section class="customer-section">
	
</section>


<!-- Modals -->




<div class="modal fade date-select-modal" id="dateModalCenter" tabindex="-1" role="dialog" aria-labelledby="dateModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="col-md-12 date-select-mod">
					<p class="date-select-title">Yes i have travel dates</p>
					<p class="date-select-desc">check availabilty And</p>
					<p class="discount-date-select-mod">save up to {{$package->percent_off}}%</p>
					<a href="{{url('/booking/'.$package->slug)}}" class="button button-date-mod booking-button"><span class="fa fa-calendar-check-o"></span> SELECT DATES</a>
				</div>
				<div class="col-md-12 date-select-mod blue">
					<p class="date-select-title">no i don't have travel dates</p>
					<p class="date-select-desc">buy this package now for only</p>
					<p class="discount-date-select-mod">${{$package->price}}</p>
					<a href="#lockpriceModalCenter" data-toggle="modal" data-target="#lockpriceModalCenter" class="button button-date-mod booking-button">LOCK IN THE<br>LOW PRICE</a>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>

</div>

<div class="modal fade date-select-modal" id="lockpriceModalCenter" tabindex="-1" role="dialog" aria-labelledby="lockpriceModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="col-md-12 date-select-mod">
					<p class="date-select-title">FILL UP THIS FORM TO START YOUR RESERVATION</p>
					<p class="date-select-desc">Primary Traveler</p>
					<form id="lock_in_booking_form" method="post" action="{{url('/')}}">
						<input type="hidden" name="package" value="{{$package->id}}">
						<input type="hidden" name="guest" value="1">
						@csrf
						<div class="form-group">
							<label for="fullname">Full Name</label>
							<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Name">
						</div>
						<div class="form-group">
							<label for="phone">Phone</label>
							<input type="tel" class="form-control" id="phone"  name="phone">
							<small id="emailHelp" class="form-text text-muted">We'll never share your phone with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="agree" name="agree">
							<label class="form-check-label" for="exampleCheck1"> I have read and agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
						</div>
						<button type="submit" class="btn btn-primary booking-submit">Submit</button>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
@php
	$time = $package->sales_end_time;
	$cur_time = date('Y-m-d H:i:s', strtotime('+5 hours'));
if (strtotime($time) > strtotime($cur_time)) { 
@endphp
<script>
    jQuery(document).ready(function ($) {
        var countdown = moment.tz('{{$package->sales_end_time}}', "America/New_York")
        jQuery('.hr').countdown(countdown.toDate(), function(event) {
          jQuery(this).html(event.strftime('%H'));
        });
        jQuery('.min').countdown(countdown.toDate(), function(event) {
          jQuery(this).html(event.strftime('%M'));
        });
        jQuery('.sec').countdown(countdown.toDate(), function(event) {
          jQuery(this).html(event.strftime('%S'));
        });
    });
</script>
@php
}
@endphp

<script>

$(document).ready(function() {

	var input = document.querySelector("#phone");
	window.intlTelInput(input);

	$.validator.addMethod('validatePhone', function(value, element) {
	  //return this.optional(element) || /^((\d+(\\.\d{0,2})?)|((\d*(\.\d{1,2}))))$/.test(value);
	  	if ($("#phone").intlTelInput('isValidNumber')){
	      	return true;
	   	} else{
	       return false;
	   	}
	}, "Please enter a valid phone.");

    $("#lock_in_booking_form").validate({
   		rules: {
	     	 fullname: {
	        	required: true,
	        	maxlength: 255
	      	},
	        email: {
	        	required: true,
	        	email: true,
	        },
	        phone: {
	        		required: true,
	        		/*validatePhone: true,*/
	        },
	        agree: {
	        		required: true,
	        },
    	},
    	submitHandler: function(form) {
      		$('.booking-submit').text('Sending..');
      		$('.booking-submit').addClass('btn-progress');
      		$('.booking-submit').addClass('disabled');
      		var formData = new FormData($("#lock_in_booking_form")[0]);
      		$.ajax({
        		url: '{{ route("save-booking") }}' ,
        		type: "POST",
         		contentType: false,
   	 		processData: false,
        		dataType: "json",
        		data: formData,
        		async: false,
        
        		success: function( response ) {
        			$('.booking-submit').text('Publish');
        			$('.booking-submit').removeClass('btn-progress');
        			$('.booking-submit').removeClass('disabled');
            		if (response.status == true) {
            			window.location.href = '{{url('/checkout')}}';
            		}
        		}
      		});

    	}
  	});
});
</script>
@endsection

