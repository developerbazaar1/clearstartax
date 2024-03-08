@extends('layouts.header')
@section('styles') 
@endsection
@section('content')

<div class="app-title">
	<div class="user-dashboard-welcome">
		<h1>Hello @php echo ucfirst(Auth::user()->name); @endphp</h1>
		<h5 class="mt-10 mb-5px">Book Your Appointments with Ease!</h5>
	</div>
	<div class="user-dashboard-welcome-d-image d-none-sm">
		<!--:: image top head dashboard  -->
		<img class="dashboardtop-image" src="{{ URL::asset('assets/img/dashboard-top.png') }}">
	</div>
</div>
<div class="row justify-content-center">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <!--alert for appointment book success-->
                <!--<div class="alert alert-success alert-dismissible fade show hide_errormessage" id="successmessage" role="alert">-->
                <!--    <bold></bold>-->
                <!--    <a type="button" class="close link-text" data-dismiss="alert" aria-label="Close">-->
                <!--        <span aria-hidden="true">-->
                <!--            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25" fill="none">-->
                <!--                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4233 4.75666C21.5008 4.67918 21.5623 4.5872 21.6042 4.48597C21.6461 4.38473 21.6677 4.27623 21.6677 4.16666C21.6677 4.05709 21.6461 3.94859 21.6042 3.84736C21.5623 3.74612 21.5008 3.65414 21.4233 3.57666C21.3458 3.49918 21.2539 3.43772 21.1526 3.39579C21.0514 3.35386 20.9429 3.33228 20.8333 3.33228C20.7238 3.33228 20.6153 3.35386 20.514 3.39579C20.4128 3.43772 20.3208 3.49918 20.2433 3.57666L12.5 11.3217L4.75666 3.57666C4.67918 3.49918 4.5872 3.43772 4.48597 3.39579C4.38473 3.35386 4.27623 3.33228 4.16666 3.33228C4.05709 3.33228 3.94859 3.35386 3.84736 3.39579C3.74612 3.43772 3.65414 3.49918 3.57666 3.57666C3.49918 3.65414 3.43772 3.74612 3.39579 3.84736C3.35386 3.94859 3.33228 4.05709 3.33228 4.16666C3.33228 4.27623 3.35386 4.38473 3.39579 4.48597C3.43772 4.5872 3.49918 4.67918 3.57666 4.75666L11.3217 12.5L3.57666 20.2433C3.42018 20.3998 3.33228 20.612 3.33228 20.8333C3.33228 21.0546 3.42018 21.2668 3.57666 21.4233C3.73314 21.5798 3.94537 21.6677 4.16666 21.6677C4.38795 21.6677 4.60018 21.5798 4.75666 21.4233L12.5 13.6783L20.2433 21.4233C20.3998 21.5798 20.612 21.6677 20.8333 21.6677C21.0546 21.6677 21.2668 21.5798 21.4233 21.4233C21.5798 21.2668 21.6677 21.0546 21.6677 20.8333C21.6677 20.612 21.5798 20.3998 21.4233 20.2433L13.6783 12.5L21.4233 4.75666Z" fill="#007899"></path>-->
                <!--            </svg>-->
                <!--        </span>-->
                <!--    </a>-->
                <!--</div>-->
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
				<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 " >
					<!-- new row for col  -->
					<div class="row">
                      
                      
                      	<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center" id="book_form_error">
                          <!-- head-img -->
                          <div class="img-popup">
                            <img class="app-popup-img" src="{{ URL::asset('assets/img/calendly.png') }}">
                          </div>
                          <!-- sppoi8ntment confirmation details -->
                          <div class="appnt-cnfrm-txt mt-3 mb-3">
                            <p class="" style="color:#6c6c6c;font-size: 1.2rem;"> Your Appointment Confirmation: </p>
                          </div>
                          <!-- apt time and person detail -->
                          <!-- <div class="apt-date-time d-flex justify-content-center"><span class="aptny-cnf-prsn"> 11-01-2024</span><div class="divider"></div><span class="apt-cnf-time">11 : 30 AM</span></div> -->
                          <div class="apnty-cnf-d-list text-left">
                            <div class="apt-detail-parent text-left mx-3 mt-4 mb-4">
                              <!-- <div class="apt-date-time d-flex justify-content-center">
             <span class="aptny-cnf-prsn"> Friday, January 12, 2024</span>
             <div class="divider"></div>
             <span class="apt-cnf-time">11 : 30 AM</span>
            </div> -->
                              <div class="my-custom-mt my-custom-mb">
                                <p>
                                  <iconify-icon class="mx-1" icon="healthicons:ui-user-profile-outline" width="20" height="20"></iconify-icon>
                                  <span>Clear Start Tax</span>
                                </p>
                              </div>
                              <!-- second -->
                              <div class="my-custom-mt my-custom-mb">
                                <p>
                                  <iconify-icon class="mx-1" icon="material-symbols-light:more-time" width="23" height="23"></iconify-icon>
                                  <span id="confirm_slot"><span class="mx-1"> </span></span> <span class="br-cr mx-1"></span> <span id="confirm_date"></span>
                                </p>
                              </div>
                              <!-- third -->
                              <div class="my-custom-mt my-custom-mb">
                                <p>
                                  <iconify-icon class="mx-1" icon="material-symbols-light:more-time" width="23" height="23"></iconify-icon>
                                  <span id="confirm_timezone"></span>
                                </p>
                              </div>
                            </div>
                            <div class="warning-txt mx-3 mt-3 mb-2">
                              <p class="p-note">
                                <span></span>Please be prepared for your settlement officer to call you at the scheduled date and time. They will reach out from a <span class="text-blue">
                                <a href="#" class="">949</a>
                                </span> or <span class="text-blue">
                                <a href="#" class="">888</a>
                                </span> number.
                              </p>
                            </div>
                            <div class="warning-txt mx-3 mt-3 mb-3">
                              <p class="p-note">In the meantime, if you have any questions or concerns, don't hesitate to contact us at <svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                <path d="M8.4375 1.25C8.4375 1.25 9.89625 1.3825 11.7519 3.23875C13.6081 5.095 13.7406 6.55312 13.7406 6.55312M8.87937 3.46C8.87937 3.46 9.49812 3.63625 10.4262 4.56437C11.3544 5.4925 11.5313 6.11125 11.5313 6.11125" stroke="#333333" stroke-linecap="round"></path>
                                <path d="M9.7225 9.09186L9.3825 8.76936L9.7225 9.09249V9.09186ZM11.8763 12.6587L11.5356 12.3356L11.8756 12.6587H11.8763ZM11.0475 13.1025L11.0938 13.5681L11.0475 13.1019V13.1025ZM2.345 4.32811C2.34168 4.26664 2.32628 4.20642 2.29968 4.1509C2.27308 4.09537 2.23581 4.04563 2.18999 4.00451C2.14417 3.96339 2.0907 3.9317 2.03263 3.91125C1.97457 3.89079 1.91304 3.88198 1.85156 3.8853C1.79009 3.88862 1.72987 3.90402 1.67435 3.93062C1.61882 3.95722 1.56908 3.99449 1.52796 4.04031C1.48684 4.08613 1.45515 4.1396 1.4347 4.19767C1.41424 4.25573 1.40543 4.31726 1.40875 4.37874L2.345 4.32811ZM2.94875 1.93249C2.86667 2.0232 2.8233 2.14241 2.82791 2.26466C2.83251 2.38691 2.88473 2.50251 2.97341 2.58679C3.0621 2.67106 3.18021 2.71733 3.30254 2.71571C3.42486 2.71409 3.54171 2.66471 3.62812 2.57811L2.94875 1.93249ZM6.665 12.3825C6.71712 12.4161 6.77539 12.439 6.83643 12.4499C6.89748 12.4608 6.96008 12.4595 7.02061 12.4461C7.08114 12.4326 7.1384 12.4073 7.18908 12.3715C7.23976 12.3358 7.28284 12.2904 7.31583 12.2379C7.34882 12.1854 7.37107 12.1268 7.38128 12.0657C7.39149 12.0045 7.38946 11.9419 7.37532 11.8815C7.36117 11.8212 7.33519 11.7642 7.29887 11.7139C7.26256 11.6637 7.21663 11.6211 7.16375 11.5887L6.665 12.3825ZM9.44562 12.5362C9.32387 12.5108 9.197 12.5348 9.09292 12.6029C8.98884 12.671 8.91607 12.7776 8.89062 12.8994C8.86518 13.0211 8.88914 13.148 8.95724 13.2521C9.02534 13.3562 9.132 13.4289 9.25375 13.4544L9.44562 12.5362ZM9.77812 9.71499L10.0625 9.41499L9.3825 8.76936L9.09812 9.06936L9.77812 9.71499ZM10.9994 9.28874L12.1931 9.97624L12.6606 9.16374L11.4669 8.47624L10.9994 9.28874ZM12.4237 11.4012L11.5356 12.3356L12.2156 12.9819L13.1031 12.0469L12.4237 11.4012ZM5.22437 9.97436C2.80187 7.42374 2.39562 5.27186 2.345 4.32811L1.40875 4.37874C1.47125 5.53499 1.96125 7.89999 4.545 10.62L5.22437 9.97436ZM6.08437 5.82624L6.26312 5.63749L5.58375 4.99186L5.40437 5.18061L6.08437 5.82624ZM6.40437 3.28749L5.61625 2.17311L4.85062 2.71436L5.63812 3.82874L6.40437 3.28749ZM5.74375 5.50311C5.63126 5.39471 5.51772 5.28741 5.40312 5.18124L5.40187 5.18249L5.4 5.18436C5.3889 5.19584 5.37847 5.20795 5.36875 5.22061C5.30748 5.30171 5.259 5.39171 5.225 5.48749C5.16375 5.65936 5.13125 5.88686 5.1725 6.17061C5.25375 6.72811 5.61937 7.47749 6.57375 8.48311L7.25375 7.83686C6.36125 6.89749 6.14125 6.31936 6.1 6.03436C6.08 5.89686 6.1 5.82499 6.10812 5.80186L6.11312 5.78999C6.10801 5.79822 6.10215 5.80596 6.09562 5.81311C6.09196 5.81736 6.08821 5.82215 6.08437 5.82624L5.74375 5.50311ZM6.57375 8.48249C7.52562 9.48499 8.24437 9.87874 8.7925 9.96811C9.07437 10.0137 9.3025 9.97686 9.475 9.90874C9.57058 9.87122 9.65944 9.81845 9.73812 9.75249L9.76062 9.73124L9.76937 9.72249C9.77085 9.72126 9.77231 9.72001 9.77375 9.71874L9.77562 9.71686L9.77625 9.71561C9.77625 9.71561 9.7775 9.71499 9.4375 9.39186C9.0975 9.06936 9.09812 9.06874 9.09812 9.06811L9.09937 9.06749L9.10062 9.06561L9.10437 9.06249C9.11382 9.05336 9.12362 9.0446 9.13375 9.03624C9.13937 9.03249 9.13875 9.03374 9.13062 9.03686C9.11812 9.04186 9.06187 9.06186 8.94312 9.04249C8.69187 9.00124 8.14937 8.77999 7.25375 7.83686L6.57375 8.48249ZM5.61625 2.17311C4.9825 1.27686 3.715 1.12499 2.94875 1.93249L3.62812 2.57811C3.955 2.23436 4.53062 2.26124 4.85062 2.71436L5.61625 2.17311ZM11.5356 12.3356C11.3613 12.5194 11.1794 12.6181 11.0019 12.6356L11.0938 13.5681C11.5606 13.5225 11.9388 13.2737 12.2156 12.9819L11.5356 12.3362V12.3356ZM6.26312 5.63749C6.86812 5.00061 6.91062 4.00436 6.40437 3.28749L5.63875 3.82874C5.9025 4.20186 5.86187 4.69936 5.58375 4.99186L6.26312 5.63749ZM12.1931 9.97624C12.7063 10.2719 12.8069 10.9981 12.4237 11.4012L13.1031 12.0469C13.9188 11.1881 13.6806 9.75124 12.6606 9.16374L12.1931 9.97624ZM10.0625 9.41499C10.3031 9.16124 10.6788 9.10436 10.9994 9.28874L11.4669 8.47624C10.78 8.08124 9.92937 8.19436 9.3825 8.76936L10.0625 9.41499ZM7.16375 11.5887C6.54937 11.2025 5.895 10.68 5.22437 9.97436L4.545 10.62C5.26625 11.3794 5.98062 11.9525 6.665 12.3825L7.16375 11.5887ZM11.0012 12.6356C10.4807 12.6813 9.95616 12.6478 9.44562 12.5362L9.25375 13.4544C9.85779 13.5852 10.4782 13.6236 11.0938 13.5681L11.0019 12.6356H11.0012Z" fill="#333333"></path>
                                </svg>
                                <a href="tel:888-235-0004">888-235-0004</a> and press #3.
                              </p>
                            </div>
                          </div>
                       </div>
                      
                        <div id="book_form" class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
						<!--select date info -->
    						<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 mx-2 mb-4 br-bottom" >
    							<div class="apt-bookie text-left">
    								<div class="organizer">
    									<p class="mb-2">
    										<strong>Officer E-Mail :</strong>
    										<span class="org-mail" id="emailData">{{ $settlement_officer }}</span>
    									</p>
    								</div>
    							</div>
    							<div class="d-select-info  pb-3">
    								<div class="s-date ">
    								    <p class="sel-date mt-0 mb-0 selectedDateforbook d-flex" id="selectedDate"></p>
    									<!--<p class="sel-date mt-0 mb-0">-->
    									<!--	<strong>Slot date : </strong>November 9, 2023-->
    									<!--</p>-->
    								</div>
    								<!-- 30min radio -->
    								<div class="form-check mt-2">
    									<label class="form-check-label">
    										<input class="form-check-input mt-1 " id="check-slot" type="radio" name="cred" value="Yes" checked> 90-Minute Time Slot Exclusively Available </label>
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
                                                  <option data-time-zone-id="8" data-gmt-adjustment="GMT+10:00" data-use-daylight="0" value="CHST">(GMT+10:00) Chamorro Standard Time (CHST)</option>
                                            </select>
    									</div>
    								</div>
    								<!--time zone dropdown end from here-->
    								<!--select btn-->
    								<div class="submit-apt-btn text-center mt-4">
    									<button class="button-apt-confirm" id="get_slots_btn"  type="submit"> Get Available Slots</button>
    								
    								</div>
    							</div>
    						</div>
    					</div>
    					
    					
    					
					</div>
                  <div class="payment-info text-center mt-5">
                          
				<p style="
    font-size: 0.9rem;
">If you have questions or need help, please contact us:</p>
				<div class="flex-container justify-content-center mb-3 d-flex">
					<div style="
    font-size: 0.8rem;
">
						<svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
							<path d="M8.4375 1.25C8.4375 1.25 9.89625 1.3825 11.7519 3.23875C13.6081 5.095 13.7406 6.55312 13.7406 6.55312M8.87937 3.46C8.87937 3.46 9.49812 3.63625 10.4262 4.56437C11.3544 5.4925 11.5313 6.11125 11.5313 6.11125" stroke="#333333" stroke-linecap="round"></path>
							<path d="M9.7225 9.09186L9.3825 8.76936L9.7225 9.09249V9.09186ZM11.8763 12.6587L11.5356 12.3356L11.8756 12.6587H11.8763ZM11.0475 13.1025L11.0938 13.5681L11.0475 13.1019V13.1025ZM2.345 4.32811C2.34168 4.26664 2.32628 4.20642 2.29968 4.1509C2.27308 4.09537 2.23581 4.04563 2.18999 4.00451C2.14417 3.96339 2.0907 3.9317 2.03263 3.91125C1.97457 3.89079 1.91304 3.88198 1.85156 3.8853C1.79009 3.88862 1.72987 3.90402 1.67435 3.93062C1.61882 3.95722 1.56908 3.99449 1.52796 4.04031C1.48684 4.08613 1.45515 4.1396 1.4347 4.19767C1.41424 4.25573 1.40543 4.31726 1.40875 4.37874L2.345 4.32811ZM2.94875 1.93249C2.86667 2.0232 2.8233 2.14241 2.82791 2.26466C2.83251 2.38691 2.88473 2.50251 2.97341 2.58679C3.0621 2.67106 3.18021 2.71733 3.30254 2.71571C3.42486 2.71409 3.54171 2.66471 3.62812 2.57811L2.94875 1.93249ZM6.665 12.3825C6.71712 12.4161 6.77539 12.439 6.83643 12.4499C6.89748 12.4608 6.96008 12.4595 7.02061 12.4461C7.08114 12.4326 7.1384 12.4073 7.18908 12.3715C7.23976 12.3358 7.28284 12.2904 7.31583 12.2379C7.34882 12.1854 7.37107 12.1268 7.38128 12.0657C7.39149 12.0045 7.38946 11.9419 7.37532 11.8815C7.36117 11.8212 7.33519 11.7642 7.29887 11.7139C7.26256 11.6637 7.21663 11.6211 7.16375 11.5887L6.665 12.3825ZM9.44562 12.5362C9.32387 12.5108 9.197 12.5348 9.09292 12.6029C8.98884 12.671 8.91607 12.7776 8.89062 12.8994C8.86518 13.0211 8.88914 13.148 8.95724 13.2521C9.02534 13.3562 9.132 13.4289 9.25375 13.4544L9.44562 12.5362ZM9.77812 9.71499L10.0625 9.41499L9.3825 8.76936L9.09812 9.06936L9.77812 9.71499ZM10.9994 9.28874L12.1931 9.97624L12.6606 9.16374L11.4669 8.47624L10.9994 9.28874ZM12.4237 11.4012L11.5356 12.3356L12.2156 12.9819L13.1031 12.0469L12.4237 11.4012ZM5.22437 9.97436C2.80187 7.42374 2.39562 5.27186 2.345 4.32811L1.40875 4.37874C1.47125 5.53499 1.96125 7.89999 4.545 10.62L5.22437 9.97436ZM6.08437 5.82624L6.26312 5.63749L5.58375 4.99186L5.40437 5.18061L6.08437 5.82624ZM6.40437 3.28749L5.61625 2.17311L4.85062 2.71436L5.63812 3.82874L6.40437 3.28749ZM5.74375 5.50311C5.63126 5.39471 5.51772 5.28741 5.40312 5.18124L5.40187 5.18249L5.4 5.18436C5.3889 5.19584 5.37847 5.20795 5.36875 5.22061C5.30748 5.30171 5.259 5.39171 5.225 5.48749C5.16375 5.65936 5.13125 5.88686 5.1725 6.17061C5.25375 6.72811 5.61937 7.47749 6.57375 8.48311L7.25375 7.83686C6.36125 6.89749 6.14125 6.31936 6.1 6.03436C6.08 5.89686 6.1 5.82499 6.10812 5.80186L6.11312 5.78999C6.10801 5.79822 6.10215 5.80596 6.09562 5.81311C6.09196 5.81736 6.08821 5.82215 6.08437 5.82624L5.74375 5.50311ZM6.57375 8.48249C7.52562 9.48499 8.24437 9.87874 8.7925 9.96811C9.07437 10.0137 9.3025 9.97686 9.475 9.90874C9.57058 9.87122 9.65944 9.81845 9.73812 9.75249L9.76062 9.73124L9.76937 9.72249C9.77085 9.72126 9.77231 9.72001 9.77375 9.71874L9.77562 9.71686L9.77625 9.71561C9.77625 9.71561 9.7775 9.71499 9.4375 9.39186C9.0975 9.06936 9.09812 9.06874 9.09812 9.06811L9.09937 9.06749L9.10062 9.06561L9.10437 9.06249C9.11382 9.05336 9.12362 9.0446 9.13375 9.03624C9.13937 9.03249 9.13875 9.03374 9.13062 9.03686C9.11812 9.04186 9.06187 9.06186 8.94312 9.04249C8.69187 9.00124 8.14937 8.77999 7.25375 7.83686L6.57375 8.48249ZM5.61625 2.17311C4.9825 1.27686 3.715 1.12499 2.94875 1.93249L3.62812 2.57811C3.955 2.23436 4.53062 2.26124 4.85062 2.71436L5.61625 2.17311ZM11.5356 12.3356C11.3613 12.5194 11.1794 12.6181 11.0019 12.6356L11.0938 13.5681C11.5606 13.5225 11.9388 13.2737 12.2156 12.9819L11.5356 12.3362V12.3356ZM6.26312 5.63749C6.86812 5.00061 6.91062 4.00436 6.40437 3.28749L5.63875 3.82874C5.9025 4.20186 5.86187 4.69936 5.58375 4.99186L6.26312 5.63749ZM12.1931 9.97624C12.7063 10.2719 12.8069 10.9981 12.4237 11.4012L13.1031 12.0469C13.9188 11.1881 13.6806 9.75124 12.6606 9.16374L12.1931 9.97624ZM10.0625 9.41499C10.3031 9.16124 10.6788 9.10436 10.9994 9.28874L11.4669 8.47624C10.78 8.08124 9.92937 8.19436 9.3825 8.76936L10.0625 9.41499ZM7.16375 11.5887C6.54937 11.2025 5.895 10.68 5.22437 9.97436L4.545 10.62C5.26625 11.3794 5.98062 11.9525 6.665 12.3825L7.16375 11.5887ZM11.0012 12.6356C10.4807 12.6813 9.95616 12.6478 9.44562 12.5362L9.25375 13.4544C9.85779 13.5852 10.4782 13.6236 11.0938 13.5681L11.0019 12.6356H11.0012Z" fill="#333333"></path>
						</svg>
						<a href="tel:888-235-0004" class="tel">888-235-0004</a>
					</div>
					<div style="
    font-size: 0.8rem;
">
						<svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M2 3.71422V10.5714C2 11.026 2.18061 11.4621 2.5021 11.7836C2.82359 12.105 3.25963 12.2857 3.71429 12.2857H12.2857C12.7404 12.2857 13.1764 12.105 13.4979 11.7836C13.8194 11.4621 14 11.026 14 10.5714V3.71422C14 3.25957 13.8194 2.82353 13.4979 2.50204C13.1764 2.18055 12.7404 1.99994 12.2857 1.99994H3.71429C3.25963 1.99994 2.82359 2.18055 2.5021 2.50204C2.18061 2.82353 2 3.25957 2 3.71422Z" stroke="#333333" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M3.71431 4.57162L8.00002 7.14305L12.2857 4.57162" stroke="#333333" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
						<a href="mailto:info@clearstarttax.com" class="tel">info@clearstarttax.com</a>
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
				<button type="button" class="close cst-close-btn" data-dismiss="modal" aria-label="Close">
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
										<strong>Officer E-Mail :</strong>
										<span class="org-mail">{{ $settlement_officer }}</span>
									</p>
								</div>
								<div class="s-date ">
								    <p class="sel-date mt-0 mb-0 selectedDateforbook d-flex" id="selectedDate"></p>
									<!--<p class="sel-date mt-0 mb-0">-->
									<!--	<strong>Slot date : </strong>November 9, 2023-->
									<!--</p>-->
								</div>
								<div class="form-check mt-2 mb-2">
									<label class="form-check-label">
										<input class="form-check-input mt-1 " id="check-time-slot" type="radio" name="credit-cc" value="Yes" checked> 90-Minute Time Slot Exclusively Available </label>
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
        // let currentDate = new Date();
        // let selectedDate;

        // function renderCalendar() {
        //     const calendar = document.getElementById("calendar");
        //     const calendarTitle = document.getElementById("calendarTitle");
        //     calendar.innerHTML = "";
        //     const options = {
        //         month: "long",
        //         year: "numeric"
        //     };
        //     calendarTitle.textContent = currentDate.toLocaleDateString(undefined, options);

        //     const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
        //     daysOfWeek.forEach(day => {
        //         const cell = document.createElement("div");
        //         cell.classList.add("calendar-cell", "day-cell");
        //         cell.textContent = day;
        //         calendar.appendChild(cell);
        //     });

        //     const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
        //     const lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
        //     const totalDays = lastDay.getDate();
        //     const startDay = firstDay.getDay();

        //     for (let i = 0; i < startDay; i++) {
        //         const cell = document.createElement("div");
        //         cell.classList.add("calendar-cell");
        //         calendar.appendChild(cell);
        //     }

        //     for (let i = 1; i <= totalDays; i++) {
        //         const cell = document.createElement("div");
        //         cell.classList.add("calendar-cell");
        //         cell.textContent = i;

        //         const dayOfWeek = new Date(currentDate.getFullYear(), currentDate.getMonth(), i).getDay();
                
        //         if (dayOfWeek === 0 || dayOfWeek === 6 ) {
        //             // Sunday, Saturday, or past days (excluding the current date)
        //             cell.classList.add("weekend", "disabled");
        //         }else {
        //             cell.addEventListener("click", () => {
        //                 const today = new Date();
        //                 const clickedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), i);

        //                 if (clickedDate >= today || clickedDate.toDateString() === today.toDateString()) {
        //                     const prevSelected = document.querySelector('.selected-date');
        //                     if (prevSelected) {
        //                         prevSelected.classList.remove('selected-date');
        //                     }
        //                     cell.classList.add('selected-date');
        //                     selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), i);
        //                     // alert(`You selected: ${selectedDate.getFullYear()}-${selectedDate.getMonth() + 1}-${i}`);
        //                      $(".selectedDateforbook").html(`<strong>Slot Date:</strong><span id="slotselectedDate"> ${selectedDate.getMonth() + 1}/${i}/${selectedDate.getFullYear()}</span>`);
               
        //                 } else {
                          
        //                     // alert("You cannot select a date before today.");
        //                 }
        //             });
        //         }
                
                
        //         calendar.appendChild(cell);
        //     }
        // }

        // renderCalendar();

        // document.getElementById("prevBtn").addEventListener("click", () => {
        //     currentDate.setMonth(currentDate.getMonth() - 1);
        //     renderCalendar();
        // });

        // document.getElementById("nextBtn").addEventListener("click", () => {
        //     currentDate.setMonth(currentDate.getMonth() + 1);
        //     renderCalendar();
        // });
    </script>
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
            const today = new Date();
            const isPastMonth = currentDate.getMonth() < today.getMonth() && currentDate.getFullYear() <= today.getFullYear();
            const isPastYear = currentDate.getFullYear() < today.getFullYear();
            const isPastDate = isPastYear || (isPastMonth && i < today.getDate());

            if (dayOfWeek === 0 || dayOfWeek === 6 || isPastDate) {
                cell.classList.add("weekend", "disabled");
            } else {
                
                
                const clickedDate1 = new Date(currentDate.getFullYear(), currentDate.getMonth(), i);
                    if (clickedDate1 >= today || clickedDate1.toDateString() === today.toDateString()) {
                        
                    } else {
                       cell.classList.add("weekend", "disabled");
                    }
                    
                cell.addEventListener("click", () => {
                    const clickedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), i);
                    if (clickedDate >= today || clickedDate.toDateString() === today.toDateString()) {
                        const prevSelected = document.querySelector('.selected-date');
                        if (prevSelected) {
                            prevSelected.classList.remove('selected-date');
                        }
                        cell.classList.add('selected-date');
                        selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), i);
                        $(".selectedDateforbook").html(`
                            <p class="" style="font-size:16px"><strong>Slot Date &nbsp;: &nbsp </strong></p>
                            <span id="slotselectedDate"> ${selectedDate.getMonth() + 1}/${i}/${selectedDate.getFullYear()}</span>`);
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
        $("#dynamicslot").html('');
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
                  if(value == 'All slots are booked for this date'){
                     $("#dynamicslot").append('<li><label style="cursor: context-menu; color: red; border: none; background: none;" class="radio-button"><input type="radio" class="flexRadioDisabled" name="availslot" value="'+value+'" disabled><span class="text-blue">'+value+'</span></label></li>');
                  }else{
                      
                    if(value == 'no slots available for today'){
                      $("#dynamicslot").append('<li><label style="cursor: not-allowed" class="radio-button"><input type="radio" class="flexRadioDisabled" name="availslot" value="'+value+'" disabled><span class="text-blue">'+value+'</span></label></li>');
                    }else{
                    //   $("#dynamicslot").append('<li id="timeSlot_all'+j+'"><label class="radio-button"><input type="radio" id="timeSlot'+j+'" name="availslot" value="'+value+'"  ><span class="text-blue">'+value+'</span></label></li>');
                     if(j == 1){
                            $("#dynamicslot").append('<li id="timeSlot_all'+j+'"><label  style="cursor: not-allowed"class="radio-button"><input type="radio" class="flexRadioDisabled pp" id="timeSlot'+j+'" name="availslot" value="'+value+'"  disabled><span class="text-blue">'+value+'</span></label></li>');
                       }else{
                            $("#dynamicslot").append('<li id="timeSlot_all'+j+'"><label class="radio-button"><input type="radio" id="timeSlot'+j+'" name="availslot" value="'+value+'"  ><span class="text-blue">'+value+'</span></label></li>');
                       }
                      
                      j++;
                      
                    }
                      
                  }
                  
                
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
        
        $("#book_form_error").hide();
         // Check if there is a stored timestamp in local storage
        var lastSubmissionTime = localStorage.getItem('lastSubmissionTime');
        
        // Check if there is a stored timestamp in session storage
        var sessionSubmissionTime = sessionStorage.getItem('sessionSubmissionTime');
        
        var currentTime = new Date().getTime();
        
        // Check if 5 minutes have passed since the last submission in local storage
        if (lastSubmissionTime && (currentTime - parseInt(lastSubmissionTime)) < 400000) {
          $("#book_form").hide();
          $("#book_form_error").show();
          
          // Display a message indicating that appointments can be booked after 5 minutes
          $("#message").text("Appointments can be booked after 5 minutes.");
        }
        
        // Check if 5 minutes have passed since the last submission in session storage
        if (sessionSubmissionTime && (currentTime - parseInt(sessionSubmissionTime)) < 400000) {
          $("#book_form").hide();
          $("#book_form_error").show();
          // Display a message indicating that appointments can be booked after 5 minutes
          $("#message").text("Appointments can be booked after 5 minutes.");
        }

        
         var lastTimezone = localStorage.getItem('sessionTimezone');
         var lastSlot = localStorage.getItem('sessionSlot');
         var lastDate = localStorage.getItem('sessionDate');
         $('#confirm_slot').text(lastSlot);
         $('#confirm_date').text(lastDate);
         $('#confirm_timezone').text(lastTimezone);
                 



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
          var timezone_text = $("#exampleTimeZone :selected").text();
          var comment1 = $("#exampleTextarea").val();
           
           if(comment1){
              var comment = comment1; 
           }else{
               var comment = '';
           }
           
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
              timezone: timezone,
              comment:comment
            },
            success: function(response) { 
             var response = JSON.parse(response);
             if(response['status'] == 'success'){
                 
                 
                
                  // Input date string
                  var dateString = date;
                  
                  // Convert the date string to a Date object
                  var dateObject = new Date(dateString);
                  
                  // Days of the week
                  var daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                  
                  // Months of the year
                  var monthsOfYear = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                  
                  // Get day of the week, month, day, and year
                  var dayOfWeek = daysOfWeek[dateObject.getDay()];
                  var month = monthsOfYear[dateObject.getMonth()];
                  var day = dateObject.getDate();
                  var year = dateObject.getFullYear();
                  
                  // Format the output
                  var formattedDate = dayOfWeek + ', ' + month + ' ' + day + ', ' + year;
                  
                 
                 
                 
                 
                   // Store the current timestamp in local storage
            localStorage.setItem('lastSubmissionTime', currentTime);
            
            // Store the current timestamp in session storage
            sessionStorage.setItem('sessionSubmissionTime', currentTime);
            localStorage.setItem('sessionTimezone', timezone_text);
            localStorage.setItem('sessionSlot', slot1+',');
            localStorage.setItem('sessionDate', formattedDate);
            
            
            // Hide the form after successful booking
            $("#book_form").hide();
            $("#book_form_error").show();
            // Show the form again after 5 minutes
            setTimeout(function() {
              $("#book_form").show();
              $("#book_form_error").hide();
              // Remove the message after showing the form
              $("#message").text("");
            }, 400000); // 300,000 milliseconds = 5 minutes

                 
                 
                    
                 $('#confirm_slot').text(slot1+',');
                 $('#confirm_date').text(formattedDate);
                 $('#confirm_timezone').text(timezone_text);
                 $('#exampleModalCenter').modal('hide');
                //  $("#successmessage").removeClass('hide_errormessage');
                //  $("#successmessage").addClass('show_errormessage');
                //  $("#successmessage bold").text(response['message']);
                 
             }else{
                 $('#exampleModalCenter').modal('hide');
                 $("#errormessage").removeClass('hide_errormessage');
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
    <script>
    $(document).ready(function() {
      // Get the user's local timezone offset in minutes
      var userOffsetMinutes = new Date().getTimezoneOffset();

      // Define an object to map timezone offsets to option values
      var timezoneMap = {
        "-300": "EST",  // Eastern Standard Time (EST) GMT-05:00
        "-360": "CST",  // Central Standard Time (CST) GMT-06:00
        "-420": "MST",  // Mountain Standard Time (MST) GMT-07:00
        "-480": "PST",  // Pacific Standard Time (PST) GMT-08:00
        "-540": "AKST", // Alaska Standard Time (AKST) GMT-09:00
        "-600": "HAST", // Hawaii-Aleutian Standard Time (HAST) GMT-10:00
        "-660": "SST",  // Samoa Standard Time (SST) GMT-11:00
        "600": "CHST"   // Chamorro Standard Time (ChST) GMT+10:00
      };

      // Find the corresponding option value based on the user's timezone offset
      var defaultOptionValue = timezoneMap[userOffsetMinutes] || "PST"; // Default to Pacific Standard Time (PST) if no match

      // Set the default selected timezone option
      $("#exampleTimeZone").val(defaultOptionValue);
    });
  </script>
@endsection