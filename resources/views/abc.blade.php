@extends('layouts.header')
@section('styles') 
@endsection
@section('content')

<div class="app-title">
	<div class="user-dashboard-welcome">
		<h1>Hello @php echo ucfirst(Auth::user()->name); @endphp</h1>
		<h5 class="mt-10 mb-5px">"Seamless Scheduling: Book Your Appointments with Ease!"</h5>
	</div>
	<div class="user-dashboard-welcome-d-image d-none-sm">
		<!--:: image top head dashboard  -->
		<img class="dashboardtop-image" src="{{ URL::asset('assets/img/dashboard-top.png') }}">
	</div>
</div>
<div class="row justify-content-center">
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="tile-x">
						<div class="tile-body">
							<div class="case-status text-center bg-back-blue">
								<h2>Book Your Appointment</h2>
							</div>
						</div>
						<div class="row p-4">
							<!-- col for calander -->
							<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 br-right">
								<!-- book apt user detail -->
								
								<div class="calendar-container">
									<div class="calendar-header">
										<button id="prevBtn">&lt;</button>
										<h2 id="calendarTitle"></h2>
										<button id="nextBtn">&gt;</button>
									</div>
									<div class="calendar" id="calendar"></div>
								</div>
							</div>
							<!-- col for calander info  -->
							<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
								<!-- new row for col  -->
								<div class="row">
									<!--select date info -->
									<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 mx-2 mb-4 br-bottom">
									    <div class="apt-bookie text-left">
									<div class="organizer">
										<p class="mb-2">
											<strong>Officer mail :</strong>
											<span class="org-mail">hary@logics.com</span>
										</p>
									</div>
								</div>
										<div class="d-select-info  pb-3">
											<div class="s-date ">
												<p class="sel-date mt-0 mb-0 selectedDateforbook" id="selectedDate"></p>
												<!--  <strong>Slot date : </strong>November 9, 2023  -->
												
											</div>
											<!-- 30min radio -->
											<div class="form-check mt-2">
												<label class="form-check-label">
													<input class="form-check-input mt-1 " id="credit-card-yes" type="radio" name="credit-cc" value="Yes"  checked > 30-Minute Time Slot Exclusively Available </label>
											</div>
										</div>
									</div>
									<div class="col-md-12 pl-4 m-pl5">
										<div class="min-info">
											<div class="form-label">
												<h6 class="mb-3">Select your time zone</h6>
											</div>
											
											<div class="form-group">
											<!--<label class="form-head" for="exampleTimeZone">Select time zone</label>-->
											<div class="select-group h-40">
												<select class="form-control" id="exampleTimeZone" name="selectedTimeZone">
												    <option value="">Select</option>
													<option data-time-zone-id="1" data-gmt-adjustment="GMT-12:00" data-use-daylight="0" value="PST">(GMT-12:00) International Date Line West</option>
													<option data-time-zone-id="2" data-gmt-adjustment="GMT-11:00" data-use-daylight="0" value="CST">(GMT-11:00) Midway Island, Samoa</option>
													<option data-time-zone-id="3" data-gmt-adjustment="GMT-10:00" data-use-daylight="0" value="EST">(GMT-10:00) Hawaii</option>
												</select>
											</div>
										</div>
											<!--time zone dropdown end from here-->
											<!--select btn-->
											
										
											<div class="submit-apt-btn float-right mt-3">
            									<button class="button-apt-confirm" id="get_slots_btn"  type="submit">Book an Appointment</button>
            									<!-- data-toggle="modal" data-target="#exampleModalCenter" -->
            								</div>
            							
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		

<!-- :: Modal for appointment book -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-back-blue">
				<h2 class="modal-title" id="exampleModalCenterTitle">Available Time Slots</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<!--model body start from here-->
			<div class="modal-body">
				<div class="row">
				    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				         <!--apt bookie text show-->
					    <div class="apt-bookie text-left">
								<div class="organizer">
									<p class="mb-2">
										<strong>Officer mail :</strong>
										<span class="org-mail">hary@logics.com</span>
									</p>
								</div>
								<div class="s-date ">
								    <p class="sel-date mt-0 mb-0 selectedDateforbook" id="selectedDate"></p>
									<!--<p class="sel-date mt-0 mb-0">-->
									<!--	<strong>Slot date : </strong>November 9, 2023-->
									<!--</p>-->
								</div>
								<div class="form-check mt-2 mb-2">
									<label class="form-check-label">
										<input class="form-check-input mt-1 " id="check-time-slot" type="radio" name="credit-cc" value="Yes" checked> 30-Minute Time Slot Exclusively Available </label>
								</div>
							</div>
					    <!--aptbookie text show-->
					    <hr>
				    </div>
					<div class="col-md-6">
						<div class="date-btn mt-0" style=
						"overflow-y:scroll; height:235px">
							<ul class="time-btn-list" id="dynamicslot">
								<!--<li>-->
								<!--	<button type="button" class="select-time-btn mb-2 text-blue">10 : 00 AM &nbsp; <span class="text-blue">To</span>&nbsp; 10 : 30 AM </button>-->
								<!--</li>-->
								<!--<li>-->
								<!--	<button type="button" class="select-time-btn mb-2 text-blue">10 : 30 AM &nbsp; <span class="text-blue">To</span>&nbsp; 11 : 00 AM </button>-->
								<!--</li>-->
								<!--<li>-->
								<!--	<button type="button" class="select-time-btn mb-2 text-blue">11 : 00 AM &nbsp; <span class="text-blue">To</span>&nbsp; 11 : 30 AM </button>-->
								<!--</li>-->
								<!--<li>-->
								<!--	<button type="button" class="select-time-btn mb-2 text-blue">11 : 30 AM &nbsp; <span class="text-blue">To</span>&nbsp; 12 : 00 AM </button>-->
								<!--</li>-->
								<!--<li>-->
								<!--	<button type="button" class="select-time-btn mb-2 text-blue">12 : 00 AM &nbsp; <span class="text-blue">To</span>&nbsp; 12 : 30 AM </button>-->
								<!--</li>-->
							</ul>
						</div>
						<!--comment box-->
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<!--<h6 class="form-label">Comments :</h6>-->
							<textarea class="form-control p-10" placeholder="Write message" id="exampleTextarea" rows="10"></textarea>
						</div>
					</div>
				</div>
			</div>
      <!--model body end here-->
      <div class="modal-footer">
        <button type="button" class="btn button-apt-confirm ">Book Appointment</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pay-alert" id="apt-success" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered payment-dialog" role="document">
		<div class="modal-content pay-confirmation">
			<div class="modal-body pay-confirm-alert-body">
				<div class="alert-box">
					<div class="pay-alert-image text-center">
						<img class="w-100px" src="{{ URL::asset('assets/img/contact-alert.png') }}">
					</div>
					<div class="pay-alert-content text-center">
						<h2>Congratulations!</h2>
						<p>our appointment has been successfully booked.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--script for select date-->

@endsection
@section('scripts')  

<script>
    let currentDate = new Date();
    let selectedDate;

    function renderCalendar() {
        const calendar = document.getElementById("calendar");
        const calendarTitle = document.getElementById("calendarTitle");
        calendar.innerHTML = "";
        const options = {
            month: "long",
            year: "numeric"
        };
        calendarTitle.textContent = currentDate.toLocaleDateString(undefined, options);

        const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
        daysOfWeek.forEach(day => {
            const cell = document.createElement("div");
            cell.classList.add("calendar-cell", "day-cell");
            cell.textContent = day;
            calendar.appendChild(cell);
        });

        const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
        const lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
        const totalDays = lastDay.getDate();
        const startDay = firstDay.getDay();

        for (let i = 0; i < startDay; i++) {
            const cell = document.createElement("div");
            cell.classList.add("calendar-cell");
            calendar.appendChild(cell);
        }

        for (let i = 1; i <= totalDays; i++) {
            const cell = document.createElement("div");
            cell.classList.add("calendar-cell");
            cell.textContent = i;

            const dayOfWeek = new Date(currentDate.getFullYear(), currentDate.getMonth(), i).getDay();
            if (dayOfWeek === 0 || dayOfWeek === 6) { // Sunday or Saturday
                cell.classList.add("weekend");
            } else {
                cell.addEventListener("click", () => {
                    const prevSelected = document.querySelector('.selected-date');
                    if (prevSelected) {
                        prevSelected.classList.remove('selected-date');
                    }
                    cell.classList.add('selected-date');
                    selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), i);
                    // alert(`You selected: ${selectedDate.getFullYear()}-${selectedDate.getMonth() + 1}-${i}`);
                    // 02/02/2024   mm/dd/yyyy
                    $(".selectedDateforbook").html(`<strong>Slot date:</strong><span id="slotselectedDate"> ${selectedDate.getMonth() + 1}/${i}/${selectedDate.getFullYear()}</span>`);
                });
            }
            calendar.appendChild(cell);
        }
    }

    renderCalendar();

    document.getElementById("prevBtn").addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
    });

    document.getElementById("nextBtn").addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
    });
</script>

<script>
  $(document).ready(function() {
    // Button click event
    $("#get_slots_btn").click(function() {
        
     event.preventDefault();
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
     });
    
      // Get the value from the input field
       var date = $("#slotselectedDate").text();
       var timezone = $("#exampleTimeZone").val();
       
       if(!date){
           alert('Please Select Date first, to get available slots on perticular date.');
           return false;
       }

      // Use AJAX to send the value to the Laravel controller
      $.ajax({
        type: "POST",
        url: '{{ route('getavailable-slots') }}',
        data: {
          date: date,
          timezone: timezone
        },
        success: function(response) { 
         var response = JSON.parse(response);
         if(response['status'] == 'success'){
            $.each(response['slots'], function(index, value) {
              // Assuming you have a container with the id "dataContainer" to append the content
              $("#dynamicslot").append('<li><button type="button" class="select-time-btn mb-2 text-blue">'+ value + '</button></li>');
            });
         }else{
             $("#dynamicslot").append('<p>Try again</p>');
         }
            $('#exampleModalCenter').modal('show');
        //   alert(response);
          // You can handle the response from the server here
        },
        error: function(error) {
          console.error("Error sending value:", error);
        }
      });
    });
  });
</script>


@endsection