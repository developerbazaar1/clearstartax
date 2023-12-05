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
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <!--alert for appointment book success-->
                <div class="alert alert-success alert-dismissible fade show hide_errormessage" id="successmessage" role="alert">
                    <bold>Your appointment has been successfully booked.</bold>
                    <a type="button" class="close link-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4233 4.75666C21.5008 4.67918 21.5623 4.5872 21.6042 4.48597C21.6461 4.38473 21.6677 4.27623 21.6677 4.16666C21.6677 4.05709 21.6461 3.94859 21.6042 3.84736C21.5623 3.74612 21.5008 3.65414 21.4233 3.57666C21.3458 3.49918 21.2539 3.43772 21.1526 3.39579C21.0514 3.35386 20.9429 3.33228 20.8333 3.33228C20.7238 3.33228 20.6153 3.35386 20.514 3.39579C20.4128 3.43772 20.3208 3.49918 20.2433 3.57666L12.5 11.3217L4.75666 3.57666C4.67918 3.49918 4.5872 3.43772 4.48597 3.39579C4.38473 3.35386 4.27623 3.33228 4.16666 3.33228C4.05709 3.33228 3.94859 3.35386 3.84736 3.39579C3.74612 3.43772 3.65414 3.49918 3.57666 3.57666C3.49918 3.65414 3.43772 3.74612 3.39579 3.84736C3.35386 3.94859 3.33228 4.05709 3.33228 4.16666C3.33228 4.27623 3.35386 4.38473 3.39579 4.48597C3.43772 4.5872 3.49918 4.67918 3.57666 4.75666L11.3217 12.5L3.57666 20.2433C3.42018 20.3998 3.33228 20.612 3.33228 20.8333C3.33228 21.0546 3.42018 21.2668 3.57666 21.4233C3.73314 21.5798 3.94537 21.6677 4.16666 21.6677C4.38795 21.6677 4.60018 21.5798 4.75666 21.4233L12.5 13.6783L20.2433 21.4233C20.3998 21.5798 20.612 21.6677 20.8333 21.6677C21.0546 21.6677 21.2668 21.5798 21.4233 21.4233C21.5798 21.2668 21.6677 21.0546 21.6677 20.8333C21.6677 20.612 21.5798 20.3998 21.4233 20.2433L13.6783 12.5L21.4233 4.75666Z" fill="#007899"></path>
                            </svg>
                        </span>
                    </a>
                </div>
                    <!--alert for error in appointment-->
                <div class="alert alert-danger alert-dismissible fade show hide_errormessage" id="errormessage" role="alert">
                    <bold>We apologize, but an issue occurred. Please attempt to book again.</bold>
                    <a type="button" class="close link-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4233 4.75666C21.5008 4.67918 21.5623 4.5872 21.6042 4.48597C21.6461 4.38473 21.6677 4.27623 21.6677 4.16666C21.6677 4.05709 21.6461 3.94859 21.6042 3.84736C21.5623 3.74612 21.5008 3.65414 21.4233 3.57666C21.3458 3.49918 21.2539 3.43772 21.1526 3.39579C21.0514 3.35386 20.9429 3.33228 20.8333 3.33228C20.7238 3.33228 20.6153 3.35386 20.514 3.39579C20.4128 3.43772 20.3208 3.49918 20.2433 3.57666L12.5 11.3217L4.75666 3.57666C4.67918 3.49918 4.5872 3.43772 4.48597 3.39579C4.38473 3.35386 4.27623 3.33228 4.16666 3.33228C4.05709 3.33228 3.94859 3.35386 3.84736 3.39579C3.74612 3.43772 3.65414 3.49918 3.57666 3.57666C3.49918 3.65414 3.43772 3.74612 3.39579 3.84736C3.35386 3.94859 3.33228 4.05709 3.33228 4.16666C3.33228 4.27623 3.35386 4.38473 3.39579 4.48597C3.43772 4.5872 3.49918 4.67918 3.57666 4.75666L11.3217 12.5L3.57666 20.2433C3.42018 20.3998 3.33228 20.612 3.33228 20.8333C3.33228 21.0546 3.42018 21.2668 3.57666 21.4233C3.73314 21.5798 3.94537 21.6677 4.16666 21.6677C4.38795 21.6677 4.60018 21.5798 4.75666 21.4233L12.5 13.6783L20.2433 21.4233C20.3998 21.5798 20.612 21.6677 20.8333 21.6677C21.0546 21.6677 21.2668 21.5798 21.4233 21.4233C21.5798 21.2668 21.6677 21.0546 21.6677 20.8333C21.6677 20.612 21.5798 20.3998 21.4233 20.2433L13.6783 12.5L21.4233 4.75666Z" fill="#007899"></path>
                            </svg>
                        </span>
                    </a>
                </div>
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
										<span class="org-mail" id="emailData">{{ $settlement_officer }}</span>
									</p>
								</div>
							</div>
							<div class="d-select-info  pb-3">
								<div class="s-date ">
								    <p class="sel-date mt-0 mb-0 selectedDateforbook" id="selectedDate"></p>
									<!--<p class="sel-date mt-0 mb-0">-->
									<!--	<strong>Slot date : </strong>November 9, 2023-->
									<!--</p>-->
								</div>
								<!-- 30min radio -->
								<div class="form-check mt-2">
									<label class="form-check-label">
										<input class="form-check-input mt-1 " id="check-slot" type="radio" name="cred" value="Yes" checked> 30-Minute Time Slot Exclusively Available </label>
								</div>
							</div>
						</div>
						<div class="col-md-12 pl-4 m-pl5">
							<div class="min-info">
								<div class="form-label">
									<h6 class="mb-3">Select your time zone</h6>
								</div>
								<!--time zone dropdown start from here-->
								<div class="form-group">
									<!--<label class="form-head" for="exampleTimeZone">Select time zone</label>-->
									<div class="select-group h-40">
										<select class="form-control" id="exampleTimeZone" name="selectedTimeZone">
                                             <option data-time-zone-id="1" data-gmt-adjustment="GMT-5:00" data-use-daylight="0" value="EST">(GMT-05:00) Eastern Standard Time (EST)</option>
                                              <option data-time-zone-id="2" data-gmt-adjustment="GMT-6:00" data-use-daylight="0" value="CST">(GMT-06:00) Central Standard Time (CST)</option>
                                              <option data-time-zone-id="3" data-gmt-adjustment="GMT-7:00" data-use-daylight="0" value="MST">(GMT-07:00) Mountain Standard Time (MST)</option>
                                              <option data-time-zone-id="4" data-gmt-adjustment="GMT-8:00" data-use-daylight="0" value="PST">(GMT-08:00) Pacific Standard Time (PST)</option>
                                              <option data-time-zone-id="5" data-gmt-adjustment="GMT-9:00" data-use-daylight="0" value="AKST">(GMT-09:00) Alaska Standard Time (AKST)</option>
                                              <option data-time-zone-id="6" data-gmt-adjustment="GMT-10:00" data-use-daylight="0" value="HAST">(GMT-10:00) Hawaii-Aleutian Standard Time (HAST)</option>
                                              <option data-time-zone-id="7" data-gmt-adjustment="GMT-11:00" data-use-daylight="0" value="SST">(GMT-11:00) Samoa Standard Time (SST)</option>
                                              <option data-time-zone-id="8" data-gmt-adjustment="GMT+10:00" data-use-daylight="0" value="ChST">(GMT+10:00) Chamorro Standard Time (ChST)</option>
                                        </select>
									</div>
								</div>
								<!--time zone dropdown end from here-->
								<!--select btn-->
								<div class="submit-apt-btn float-right mt-3">
									<button class="button-apt-confirm" id="get_slots_btn"  type="submit"> Get Available Slots</button>
								
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
<!--model for available slots-->
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
										<span class="org-mail">{{ $settlement_officer }}</span>
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
								<!--	<label class="radio-button">-->
        <!--                               <input type="radio" id="timeSlot1" name="timeSlot" value="10:00 AM - 10:30 AM">-->
        <!--                                <span>10:00 AM &nbsp; <span class="text-blue">To</span>&nbsp; 10:30 AM</span>-->
        <!--                            </label>-->
								<!--</li>-->
								<!--<li>-->
								<!--	<label class="radio-button">-->
        <!--                               <input type="radio" id="timeSlot2" name="timeSlot" value="10:30 AM - 11:00 AM">-->
        <!--                                <span>10:30 AM &nbsp; <span class="text-blue">To</span>&nbsp; 11:00 AM</span>-->
        <!--                            </label>-->
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
        <button type="button" class="btn button-apt-confirm " id="book_appoitment_btn">Book Appointment</button>
      </div>
    </div>
  </div>
</div>

<!--model end for available slots-->
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



@endsection
@section('scripts') 
<!--script for select date-->
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
                        const today = new Date();
                        const clickedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), i);

                        if (clickedDate >= today || clickedDate.toDateString() === today.toDateString()) {
                            const prevSelected = document.querySelector('.selected-date');
                            if (prevSelected) {
                                prevSelected.classList.remove('selected-date');
                            }
                            cell.classList.add('selected-date');
                            selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), i);
                            // alert(`You selected: ${selectedDate.getFullYear()}-${selectedDate.getMonth() + 1}-${i}`);
                             $(".selectedDateforbook").html(`<strong>Slot date:</strong><span id="slotselectedDate"> ${selectedDate.getMonth() + 1}/${i}/${selectedDate.getFullYear()}</span>`);
               
                        } else {
                          
                            // alert("You cannot select a date before today.");
                        }
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
           var email = $("#emailData").text();
           var timezone = $("#exampleTimeZone :selected").val();
           var comment1 = $("#exampleTextarea").val();
           
           if(comment1){
              var comment = comment1; 
           }else{
               var comment = '';
           }
           
           if(!date){
               alert('Please Select Date first, to get available slots on perticular date.');
               return false;
           }
           
           if(!email){
               alert('There is no settlement officer email with case, please set settlement officer first to book appoitment.');
               return false;
           }
    
          // Use AJAX to send the value to the Laravel controller
          $.ajax({
            type: "POST",
            url: '{{ route('getavailable-slots') }}',
            data: {
              date: date,
              email:email,
              timezone: timezone
            },
            success: function(response) { 
             var response = JSON.parse(response);
             if(response['status'] == 'success'){
                 var j = 1;
                $.each(response['slots'], function(index, value) {
                  // Assuming you have a container with the id "dataContainer" to append the content
                  
                  $("#dynamicslot").append('<li id="timeSlot_all'+j+'"><label class="radio-button"><input type="radio" id="timeSlot'+j+'" name="availslot" value="'+value+'"><span class="text-blue">'+value+'</span></label></li>');
                j++;
                //   <li><button type="button" class="select-time-btn mb-2 text-blue">'+ value + '</button></li>
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
    
     <script>
      $(document).ready(function() {
        // Button click event
        $("#book_appoitment_btn").click(function() {
             
    
         event.preventDefault();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
        
          // Get the value from the input field
          var date = $("#slotselectedDate").text();
          var slot1 = $('input[name="availslot"]:checked').val(); 
             var hyphenIndex = slot1.indexOf('-');
    
             var slot = slot1.substring(0, hyphenIndex);
          var date_slot = date+' '+slot;
          var email = $("#emailData").text();
          var timezone = $("#exampleTimeZone :selected").val();
           
          if(!date_slot){
              alert('Please Select slot first, to book on selected date.');
              return false;
          }
           
          if(!email){
              alert('There is no settlement officer email with case, please set settlement officer first to book appoitment.');
              return false;
          }
    
          // Use AJAX to send the value to the Laravel controller
          $.ajax({
            type: "POST",
            url: '{{ route('book-appointment') }}',
            data: {
              date_slot: date_slot,
              email:email,
              timezone: timezone
            },
            success: function(response) { 
             var response = JSON.parse(response);
             if(response['status'] == 'success'){
                 $('#exampleModalCenter').modal('hide');
                 $("#successmessage").removeClass('hide_errormessage');
                 $("#successmessage").addClass('show_errormessage');
                 $("#successmessage bold").text(response['message']);
             }else{
                 $('#exampleModalCenter').modal('hide');
                 $("#successmessage").removeClass('hide_errormessage');
                 $("#errormessage").addClass('show_errormessage');
                 $("#errormessage bold").text(response['message']);
             }
              
            },
            error: function(error) {
              console.error("Error sending value:", error);
            }
          });
        });
      });
    </script>
    
@endsection