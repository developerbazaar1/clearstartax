@extends('layouts.header')
@section('styles') 
@endsection
@section('content')

<div class="app-title">
	<div class="user-dashboard-welcome">
		<h1>Hello  @php echo ucfirst(Auth::user()->name); @endphp</h1>
		<h5 class="mt-10 mb-5px">"Step into Your Payment Hub: Centralized Access to Your Financial Transactions!"</h5>
	</div>
	<div class="user-dashboard-welcome-d-image d-none-sm">
		<!--:: image top head dashboard  -->
		<img class="dashboardtop-image cnt-top" src="{{ URL::asset('assets/img/pay-top.png') }}">
	</div>
</div>
<!-- section one pay detail -->
<div class="row">
	<div class="col-md-6">
		<div class="tile-x h-300 mb-h-fitcontent">
			<div class="tile-body">
				<div class="case-status text-center">
					<h2>Payment:</h2>
				</div>
			</div>
			<!-- contact box -->
			<div class="cnt-form">
				<!-- <form> -->

					<div class="row justify-content-center p-4">
						<!-- :: input 01 -->
						<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
							<div class="d-flex justify-content-between">
								<span class="bill-summary-label">
									<div class="form-check">
										<label class="form-check-label">
											<input type="radio" id="due-balance" class="form-check-input balanceamount" name="balance" value="<?=$data['PastDue']?>" checked> Past due balance: </label>
									</div>
								</span>
								<span class="bill-summary-detail">$@php if(!empty($data['PastDue'])) echo $data['PastDue']; @endphp</span>
							</div>
							<div class="d-flex justify-content-between">
								<span class="bill-summary-label">
									<div class="form-check">
										<label class="form-check-label">
											<input type="radio" class="form-check-input balanceamount" id="remaining-balance" name="balance" value="<?=$data['Balance']?>"> Remaining balance: </label>
									</div>
								</span>
								<span class="bill-summary-detail">$@php if(!empty($data['Balance'])) echo $data['Balance']; @endphp</span>
							</div>
							<div class="d-flex justify-content-between">
								<span class="bill-summary-label">
									<div class="form-check">
										<label class="form-check-label">
											<input type="radio" class="form-check-input balanceamount" id="other" name="balance" value="0"> Other Amount </label>
									</div>
								</span>
								<span class="bill-summary-detail">$<input  id="otheramount" type="text" class="other-option" value="" name="otheramount"></span>
							</div>
						</div>
					</div>
				<!-- </form> -->
			</div>
		</div>
	</div>
	<!-- pay detail col seconf -->
	<div class="col-md-6">
		<div class="tile-x">
			<div class="tile-body">
				<div class="case-status text-center">
					<h2>Billing Summary:</h2>
				</div>
			</div>
			<!-- contact box -->
			<div class="cnt-form">
				<form>
					<div class="row justify-content-center p-4">
						<!-- :: input 01 -->
						
						<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 d-flex flex-column">
							<div class="d-flex justify-content-between">
								<span class="bill-summary-label">Total Balance : </span>
								<span class="bill-summary-detail">$@php if(!empty($billing_summary_TotalFees)) echo $billing_summary_TotalFees; @endphp</span>
							</div>
							<div class="d-flex justify-content-between">
								<span class="bill-summary-label">Paid : </span>
								<span class="bill-summary-detail">$@php if(!empty($billing_summary['data']['PaidAmount'])) echo $billing_summary['data']['PaidAmount']; @endphp</span>
							</div>
							<div class="d-flex justify-content-between">
								<span class="bill-summary-label">% Paid : </span>
								<span class="bill-summary-detail">@php if(!empty($billing_summary['data']['PaidPercentage'])) echo $billing_summary['data']['PaidPercentage']; @endphp</span>
							</div>
							<div class="d-flex justify-content-between">
								<span class="bill-summary-label">Remaining Balance: </span>
								<span class="bill-summary-detail">@php if(!empty($billing_summary_Balance)){ if($billing_summary_Balance != 'Paid In Full'){ echo "$".$billing_summary_Balance; }else{ echo $billing_summary_Balance;} } @endphp</span>
							</div>
							<div class="d-flex justify-content-between">
								<span class="bill-summary-label">Amount Due : </span>
								<span class="bill-summary-detail">@php if(!empty($billing_summary_AmountDue)){ if($billing_summary_AmountDue != 'Paid In Full'){ echo "$".$billing_summary_AmountDue; }else{ echo $billing_summary_AmountDue;} } @endphp</span>
							</div>
							<div class="d-flex justify-content-between">
								<span class="bill-summary-label">Next Due Date :</span>
								<span class="bill-summary-detail">@php if(!empty($billing_summary['data']['DueDate'])) echo $billing_summary['data']['DueDate']; @endphp</span>
							</div>
							<div class="d-flex justify-content-between">
								<span class="bill-summary-label">Past Due : </span>
								<span class="bill-summary-detail text-danger">@php if(!empty($billing_summary_PastDue)){ if($billing_summary_PastDue != 'N/A'){ @endphp <span class="red">$@php echo $billing_summary_PastDue; @endphp </span> @php }else{echo $billing_summary_PastDue;}  } @endphp</span>
							</div>
							<div class="d-flex justify-content-between">
								<span class="bill-summary-label">Pay Schedule : </span>
								<span class="bill-summary-detail">
									<a type="button" href="" class="" data-toggle="modal" data-target="#exampleModalCenter">Click to view</a>
								</span>
							</div>
						</div>
						<!-- :: input 02 -->
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- section second payment int -->
<div class="row">
	<div class="col-md-12">
		<div class="tile-x">
			<div class="tile-body">
				<div class="case-status text-center">
					<h2>Payment Information</h2>
				</div>
			</div>
			<!-- payments detail section  -->
			<div class="pmt-form">
				<div class="tab-container">
					<!-- tabs-btn -->
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Credit Card</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bank Transfer</a>
						</li>
					</ul>
					<!-- tab contents -->
					<!-- tab for credit card -->
					<div class="tab-content">
						<div id="loader"></div>
						<div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<form id="tab" method="post">
								<div class="m-3 error_card"></div>
								<div class="row justify-content-center p-4">
									<!-- :: input 01 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> Name on card : </label>
											<input type="text"  data-ref="cardNumber" autocomplete="off" value="" class="form-control card-input__input" name="name_on_card" id="name_on_card" placeholder="Enter full name"  required>
											
										</div>
									</div>
									<!-- :: input 02 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> Card information : </label>
											<input type="text" value="" name="card_number" id="card_number" pattern="[0-9\s]{13,19}" id="cardNumber" data-ref="cardNumber" autocomplete="off" class="form-control card-input__input" placeholder="Enter card information" required>
										</div>
									</div>
									<!-- :: input 03 -->
									
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="expirationDate">Expiration Date:</label>
											<div class="input-group">
												<input type="number" min="1" max="12" value="" name="expiry_month" id="expiry_month" data-ref="" autocomplete="off" class="form-control card-input__input card-details" placeholder="MM" required>

												<!-- <select class="form-control" id="expirationMonth" required>
													<option value="" disabled selected>MM</option>
													<option value="01">January</option>
													<option value="02">February</option>
													<option value="03">March</option>
													<option value="04">April</option>
													<option value="05">May</option>
													<option value="06">June</option>
													<option value="07">July</option>
													<option value="08">August</option>
													<option value="09">September</option>
													<option value="10">October</option>
													<option value="11">November</option>
													<option value="12">December</option>
												</select> -->
												<input type="number"  min="2023" max="2060" name="expiry_year" id="expiry_year" data-ref="" value="" autocomplete="off" class="form-control card-input__input card-details" placeholder="YYYY" required>
												<!-- <select class="form-control" id="expirationYear" required>
													<option value="" disabled selected>YYYY</option>
													<option value="2023">2023</option>
													<option value="2024">2024</option>
													<option value="2024">2025</option>
													<option value="2024">2026</option>
													<option value="2024">2027</option>
													<option value="2024">2028</option>
													<option value="2024">2029</option>
													<option value="2024">2030</option>
													<option value="2024">2031</option>
													<option value="2030">2032</option>
												</select> -->
											</div>
										</div>
									</div>
									<!-- :: input 04 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> CVV: </label>
											<input type="number" name="cvv" id="cvv"  data-ref="" value="" autocomplete="off" class="form-control card-input__input" placeholder="Enter card CVV no." required>
										</div>
									</div>

									<!-- :: billing address -->
									<div class="col-md-12 col-sm-12">
										<div class="banking-details mb-3 mt-1"> Billing Address : </div>
									</div>
									<!-- :: input 01-->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> Street Address 1 : </label>
											<input type="text"  data-ref="" autocomplete="off" class="form-control card-input__input" id="Address"  name="Address" value="" required>
											
										</div>
									</div>
									<!-- :: input 02 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> Street Address 2(#,Apt,Unit,Suite) : </label>
											<input type="text"  data-ref="" autocomplete="off" class="form-control card-input__input margin-right-5" id="AptNo"  name="AptNo" value="" >
										</div>
									</div>
									<!-- :: input 03 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> City : </label>
											<input type="text"  data-ref="" autocomplete="off" class="form-control card-input__input" id="City"  name="City" value="" required>
											
										</div>
									</div>
									<!-- :: input 05 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> State : </label>
											<select id="State" name="State" class="form-control card-input__input margin-right-5">
                                                <option value="saab">select</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="VI">Virgin Islands</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="GU">Guam</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="PW">Palau</option>
                                            </select>
										</div>
									</div>
									<!-- :: input 05 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> Zip : </label>
											<input type="text"  data-ref="" autocomplete="off" class="form-control card-input__input margin-right-5" id="Zip"  name="Zip" value="" required>
											
										</div>
									</div>
									<!-- :: input 05 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> Email : </label>
											<input type="text"  data-ref="" autocomplete="off" class="form-control card-input__input" id="Email"  name="client_email" value="@php if(!empty($data['Email'])) echo $data['Email']; @endphp" required>
											
										</div>
									</div>
									<!-- :: input 05 -->
									<!-- <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> Email Address : </label>
											<input type="text" value="@php if(!empty($data['Email'])) echo $data['Email']; @endphp" name="client_email" id="Email1" placeholder="Enter email address" data-ref="" autocomplete="off" class="form-control card-input__input" required>
										</div>
									</div> -->
									<input type="hidden" value="" name="card_type" class="card_type">
                                    <!--<input type="hidden" value="{{$data['Email']}}" name="client_email" class="client_email">-->
                                    <input type="hidden" class="balanceamount1" value="<?=$data['Balance']?>" name="amount" class="amount">
                                    <input type="hidden" value="{{$data['CaseID']}}" name="case_id" class="case_id">
									<div class="text-center">
										<button type="submit" class="cnt-pay-btn">Pay</button>
									</div>
								</div>
							</form>
							<div class="payment-info text-center">
								<p>By clicking "Pay", you agree to Clear Start Tax Relief's Payment <a href="#" class="trmandcnd">Terms and Conditions.</a>
								</p>
								<p>If you have questions or need help, please contact us:</p>
								<div class="flex-container justify-content-center mb-3 d-flex">
									<div>
										<svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
											<path d="M8.4375 1.25C8.4375 1.25 9.89625 1.3825 11.7519 3.23875C13.6081 5.095 13.7406 6.55312 13.7406 6.55312M8.87937 3.46C8.87937 3.46 9.49812 3.63625 10.4262 4.56437C11.3544 5.4925 11.5313 6.11125 11.5313 6.11125" stroke="#333333" stroke-linecap="round"></path>
											<path d="M9.7225 9.09186L9.3825 8.76936L9.7225 9.09249V9.09186ZM11.8763 12.6587L11.5356 12.3356L11.8756 12.6587H11.8763ZM11.0475 13.1025L11.0938 13.5681L11.0475 13.1019V13.1025ZM2.345 4.32811C2.34168 4.26664 2.32628 4.20642 2.29968 4.1509C2.27308 4.09537 2.23581 4.04563 2.18999 4.00451C2.14417 3.96339 2.0907 3.9317 2.03263 3.91125C1.97457 3.89079 1.91304 3.88198 1.85156 3.8853C1.79009 3.88862 1.72987 3.90402 1.67435 3.93062C1.61882 3.95722 1.56908 3.99449 1.52796 4.04031C1.48684 4.08613 1.45515 4.1396 1.4347 4.19767C1.41424 4.25573 1.40543 4.31726 1.40875 4.37874L2.345 4.32811ZM2.94875 1.93249C2.86667 2.0232 2.8233 2.14241 2.82791 2.26466C2.83251 2.38691 2.88473 2.50251 2.97341 2.58679C3.0621 2.67106 3.18021 2.71733 3.30254 2.71571C3.42486 2.71409 3.54171 2.66471 3.62812 2.57811L2.94875 1.93249ZM6.665 12.3825C6.71712 12.4161 6.77539 12.439 6.83643 12.4499C6.89748 12.4608 6.96008 12.4595 7.02061 12.4461C7.08114 12.4326 7.1384 12.4073 7.18908 12.3715C7.23976 12.3358 7.28284 12.2904 7.31583 12.2379C7.34882 12.1854 7.37107 12.1268 7.38128 12.0657C7.39149 12.0045 7.38946 11.9419 7.37532 11.8815C7.36117 11.8212 7.33519 11.7642 7.29887 11.7139C7.26256 11.6637 7.21663 11.6211 7.16375 11.5887L6.665 12.3825ZM9.44562 12.5362C9.32387 12.5108 9.197 12.5348 9.09292 12.6029C8.98884 12.671 8.91607 12.7776 8.89062 12.8994C8.86518 13.0211 8.88914 13.148 8.95724 13.2521C9.02534 13.3562 9.132 13.4289 9.25375 13.4544L9.44562 12.5362ZM9.77812 9.71499L10.0625 9.41499L9.3825 8.76936L9.09812 9.06936L9.77812 9.71499ZM10.9994 9.28874L12.1931 9.97624L12.6606 9.16374L11.4669 8.47624L10.9994 9.28874ZM12.4237 11.4012L11.5356 12.3356L12.2156 12.9819L13.1031 12.0469L12.4237 11.4012ZM5.22437 9.97436C2.80187 7.42374 2.39562 5.27186 2.345 4.32811L1.40875 4.37874C1.47125 5.53499 1.96125 7.89999 4.545 10.62L5.22437 9.97436ZM6.08437 5.82624L6.26312 5.63749L5.58375 4.99186L5.40437 5.18061L6.08437 5.82624ZM6.40437 3.28749L5.61625 2.17311L4.85062 2.71436L5.63812 3.82874L6.40437 3.28749ZM5.74375 5.50311C5.63126 5.39471 5.51772 5.28741 5.40312 5.18124L5.40187 5.18249L5.4 5.18436C5.3889 5.19584 5.37847 5.20795 5.36875 5.22061C5.30748 5.30171 5.259 5.39171 5.225 5.48749C5.16375 5.65936 5.13125 5.88686 5.1725 6.17061C5.25375 6.72811 5.61937 7.47749 6.57375 8.48311L7.25375 7.83686C6.36125 6.89749 6.14125 6.31936 6.1 6.03436C6.08 5.89686 6.1 5.82499 6.10812 5.80186L6.11312 5.78999C6.10801 5.79822 6.10215 5.80596 6.09562 5.81311C6.09196 5.81736 6.08821 5.82215 6.08437 5.82624L5.74375 5.50311ZM6.57375 8.48249C7.52562 9.48499 8.24437 9.87874 8.7925 9.96811C9.07437 10.0137 9.3025 9.97686 9.475 9.90874C9.57058 9.87122 9.65944 9.81845 9.73812 9.75249L9.76062 9.73124L9.76937 9.72249C9.77085 9.72126 9.77231 9.72001 9.77375 9.71874L9.77562 9.71686L9.77625 9.71561C9.77625 9.71561 9.7775 9.71499 9.4375 9.39186C9.0975 9.06936 9.09812 9.06874 9.09812 9.06811L9.09937 9.06749L9.10062 9.06561L9.10437 9.06249C9.11382 9.05336 9.12362 9.0446 9.13375 9.03624C9.13937 9.03249 9.13875 9.03374 9.13062 9.03686C9.11812 9.04186 9.06187 9.06186 8.94312 9.04249C8.69187 9.00124 8.14937 8.77999 7.25375 7.83686L6.57375 8.48249ZM5.61625 2.17311C4.9825 1.27686 3.715 1.12499 2.94875 1.93249L3.62812 2.57811C3.955 2.23436 4.53062 2.26124 4.85062 2.71436L5.61625 2.17311ZM11.5356 12.3356C11.3613 12.5194 11.1794 12.6181 11.0019 12.6356L11.0938 13.5681C11.5606 13.5225 11.9388 13.2737 12.2156 12.9819L11.5356 12.3362V12.3356ZM6.26312 5.63749C6.86812 5.00061 6.91062 4.00436 6.40437 3.28749L5.63875 3.82874C5.9025 4.20186 5.86187 4.69936 5.58375 4.99186L6.26312 5.63749ZM12.1931 9.97624C12.7063 10.2719 12.8069 10.9981 12.4237 11.4012L13.1031 12.0469C13.9188 11.1881 13.6806 9.75124 12.6606 9.16374L12.1931 9.97624ZM10.0625 9.41499C10.3031 9.16124 10.6788 9.10436 10.9994 9.28874L11.4669 8.47624C10.78 8.08124 9.92937 8.19436 9.3825 8.76936L10.0625 9.41499ZM7.16375 11.5887C6.54937 11.2025 5.895 10.68 5.22437 9.97436L4.545 10.62C5.26625 11.3794 5.98062 11.9525 6.665 12.3825L7.16375 11.5887ZM11.0012 12.6356C10.4807 12.6813 9.95616 12.6478 9.44562 12.5362L9.25375 13.4544C9.85779 13.5852 10.4782 13.6236 11.0938 13.5681L11.0019 12.6356H11.0012Z" fill="#333333"></path>
										</svg>
										<a href="tel:888-235-0004" class="tel">888-235-0004</a>
									</div>
									<div>
										<svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M2 3.71422V10.5714C2 11.026 2.18061 11.4621 2.5021 11.7836C2.82359 12.105 3.25963 12.2857 3.71429 12.2857H12.2857C12.7404 12.2857 13.1764 12.105 13.4979 11.7836C13.8194 11.4621 14 11.026 14 10.5714V3.71422C14 3.25957 13.8194 2.82353 13.4979 2.50204C13.1764 2.18055 12.7404 1.99994 12.2857 1.99994H3.71429C3.25963 1.99994 2.82359 2.18055 2.5021 2.50204C2.18061 2.82353 2 3.25957 2 3.71422Z" stroke="#333333" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M3.71431 4.57162L8.00002 7.14305L12.2857 4.57162" stroke="#333333" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
										<a href="mailto:info@clearstarttax.com" class="tel">info@clearstarttax.com</a>
									</div>
								</div>
							</div>
						</div>
						<!-- tab for bank transfer -->
						<div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<form id="tab2"  method="post">
								<div class="m-3 error_card1"></div>
								<div class="row justify-content-center p-4">
									<!-- for-bank-details -->
									<!-- :: input 01 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> Bank Name : </label>
											<input type="text"  data-ref="" autocomplete="off" class="form-control card-input__input" id="bank_name"  name="bank_name" value="" placeholder="Enter bank name" required>
											
										</div>
									</div>
									<!-- :: input 02 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> Account Holder Name : </label>
											<input type="text"  data-ref="" autocomplete="off" class="form-control card-input__input" id="account_holder_name"  name="account_holder_name" placeholder="Enter account holder name" value="" required>
										</div>
									</div>
									<!-- :: input 03 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> Routing# </label>
											<input type="number"  data-ref="" autocomplete="off" name="bankrouteingno" id="bankrouteingno" value="" class="form-control card-input__input" required>
											
										</div>
									</div>
									<!-- :: input 04 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> Account# </label>
											<input type="number" data-ref="" autocomplete="off" value="" id="accountno" name="accountno" class="form-control card-input__input" required>
											
										</div>
									</div>
									<!-- :: billing address -->
									<div class="col-md-12 col-sm-12">
										<div class="banking-details mb-3 mt-1"> Billing Address : </div>
									</div>
									<!-- :: input 01-->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> Street Address 1 : </label>
											<input type="text"  data-ref="" autocomplete="off" class="form-control card-input__input" id="Address"  name="Address" value="" required>
											
										</div>
									</div>
									<!-- :: input 02 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> Street Address 2(#,Apt,Unit,Suite) : </label>
											<input type="text"  data-ref="" autocomplete="off" class="form-control card-input__input margin-right-5" id="AptNo"  name="AptNo" value="" >
										</div>
									</div>
									<!-- :: input 03 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> City : </label>
											<input type="text"  data-ref="" autocomplete="off" class="form-control card-input__input" id="City"  name="City" value="" required>
											
										</div>
									</div>
									<!-- :: input 05 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> State : </label>
											<select id="State" name="State" class="form-control card-input__input margin-right-5">
                                                <option value="saab">select</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="VI">Virgin Islands</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="GU">Guam</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="PW">Palau</option>
                                            </select>
										</div>
									</div>
									<!-- :: input 05 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> Zip : </label>
											<input type="text"  data-ref="" autocomplete="off" class="form-control card-input__input margin-right-5" id="Zip"  name="Zip" value="" required>
											
										</div>
									</div>
									<!-- :: input 05 -->
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="form-head" for="exampletext"> Email : </label>
											<input type="text"  data-ref="" autocomplete="off" class="form-control card-input__input" id="Email"  name="client_email" value="@php if(!empty($data['Email'])) echo $data['Email']; @endphp" required>
											
										</div>
									</div>
									<input type="hidden" class="balanceamount1" value="<?=$data['Balance']?>" name="amount" class="amount">
                                    <!--<input type="hidden" value="{{$data['Email']}}" name="client_email" class="client_email">-->
                                    <input type="hidden" value="{{$data['CaseID']}}" name="case_id" class="case_id">
									<div class="text-center">
										<button type="submit" class="cnt-pay-btn">Pay</button>
										<!-- <button type="submit" class="cnt-pay-btn" data-toggle="modal" data-target="#paysuccessalert">Pay</button> -->
									</div>
								</div>
							</form>
							<!-- :: info text -->
							<div class="payment-info text-center">
								<p>By clicking "Pay", you agree to Clear Start Tax Relief's Payment <a href="#" class="trmandcnd">Terms and Conditions.</a>
								</p>
								<p>If you have questions or need help, please contact us:</p>
								<div class="flex-container justify-content-center mb-3 d-flex">
									<div>
										<svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
											<path d="M8.4375 1.25C8.4375 1.25 9.89625 1.3825 11.7519 3.23875C13.6081 5.095 13.7406 6.55312 13.7406 6.55312M8.87937 3.46C8.87937 3.46 9.49812 3.63625 10.4262 4.56437C11.3544 5.4925 11.5313 6.11125 11.5313 6.11125" stroke="#333333" stroke-linecap="round"></path>
											<path d="M9.7225 9.09186L9.3825 8.76936L9.7225 9.09249V9.09186ZM11.8763 12.6587L11.5356 12.3356L11.8756 12.6587H11.8763ZM11.0475 13.1025L11.0938 13.5681L11.0475 13.1019V13.1025ZM2.345 4.32811C2.34168 4.26664 2.32628 4.20642 2.29968 4.1509C2.27308 4.09537 2.23581 4.04563 2.18999 4.00451C2.14417 3.96339 2.0907 3.9317 2.03263 3.91125C1.97457 3.89079 1.91304 3.88198 1.85156 3.8853C1.79009 3.88862 1.72987 3.90402 1.67435 3.93062C1.61882 3.95722 1.56908 3.99449 1.52796 4.04031C1.48684 4.08613 1.45515 4.1396 1.4347 4.19767C1.41424 4.25573 1.40543 4.31726 1.40875 4.37874L2.345 4.32811ZM2.94875 1.93249C2.86667 2.0232 2.8233 2.14241 2.82791 2.26466C2.83251 2.38691 2.88473 2.50251 2.97341 2.58679C3.0621 2.67106 3.18021 2.71733 3.30254 2.71571C3.42486 2.71409 3.54171 2.66471 3.62812 2.57811L2.94875 1.93249ZM6.665 12.3825C6.71712 12.4161 6.77539 12.439 6.83643 12.4499C6.89748 12.4608 6.96008 12.4595 7.02061 12.4461C7.08114 12.4326 7.1384 12.4073 7.18908 12.3715C7.23976 12.3358 7.28284 12.2904 7.31583 12.2379C7.34882 12.1854 7.37107 12.1268 7.38128 12.0657C7.39149 12.0045 7.38946 11.9419 7.37532 11.8815C7.36117 11.8212 7.33519 11.7642 7.29887 11.7139C7.26256 11.6637 7.21663 11.6211 7.16375 11.5887L6.665 12.3825ZM9.44562 12.5362C9.32387 12.5108 9.197 12.5348 9.09292 12.6029C8.98884 12.671 8.91607 12.7776 8.89062 12.8994C8.86518 13.0211 8.88914 13.148 8.95724 13.2521C9.02534 13.3562 9.132 13.4289 9.25375 13.4544L9.44562 12.5362ZM9.77812 9.71499L10.0625 9.41499L9.3825 8.76936L9.09812 9.06936L9.77812 9.71499ZM10.9994 9.28874L12.1931 9.97624L12.6606 9.16374L11.4669 8.47624L10.9994 9.28874ZM12.4237 11.4012L11.5356 12.3356L12.2156 12.9819L13.1031 12.0469L12.4237 11.4012ZM5.22437 9.97436C2.80187 7.42374 2.39562 5.27186 2.345 4.32811L1.40875 4.37874C1.47125 5.53499 1.96125 7.89999 4.545 10.62L5.22437 9.97436ZM6.08437 5.82624L6.26312 5.63749L5.58375 4.99186L5.40437 5.18061L6.08437 5.82624ZM6.40437 3.28749L5.61625 2.17311L4.85062 2.71436L5.63812 3.82874L6.40437 3.28749ZM5.74375 5.50311C5.63126 5.39471 5.51772 5.28741 5.40312 5.18124L5.40187 5.18249L5.4 5.18436C5.3889 5.19584 5.37847 5.20795 5.36875 5.22061C5.30748 5.30171 5.259 5.39171 5.225 5.48749C5.16375 5.65936 5.13125 5.88686 5.1725 6.17061C5.25375 6.72811 5.61937 7.47749 6.57375 8.48311L7.25375 7.83686C6.36125 6.89749 6.14125 6.31936 6.1 6.03436C6.08 5.89686 6.1 5.82499 6.10812 5.80186L6.11312 5.78999C6.10801 5.79822 6.10215 5.80596 6.09562 5.81311C6.09196 5.81736 6.08821 5.82215 6.08437 5.82624L5.74375 5.50311ZM6.57375 8.48249C7.52562 9.48499 8.24437 9.87874 8.7925 9.96811C9.07437 10.0137 9.3025 9.97686 9.475 9.90874C9.57058 9.87122 9.65944 9.81845 9.73812 9.75249L9.76062 9.73124L9.76937 9.72249C9.77085 9.72126 9.77231 9.72001 9.77375 9.71874L9.77562 9.71686L9.77625 9.71561C9.77625 9.71561 9.7775 9.71499 9.4375 9.39186C9.0975 9.06936 9.09812 9.06874 9.09812 9.06811L9.09937 9.06749L9.10062 9.06561L9.10437 9.06249C9.11382 9.05336 9.12362 9.0446 9.13375 9.03624C9.13937 9.03249 9.13875 9.03374 9.13062 9.03686C9.11812 9.04186 9.06187 9.06186 8.94312 9.04249C8.69187 9.00124 8.14937 8.77999 7.25375 7.83686L6.57375 8.48249ZM5.61625 2.17311C4.9825 1.27686 3.715 1.12499 2.94875 1.93249L3.62812 2.57811C3.955 2.23436 4.53062 2.26124 4.85062 2.71436L5.61625 2.17311ZM11.5356 12.3356C11.3613 12.5194 11.1794 12.6181 11.0019 12.6356L11.0938 13.5681C11.5606 13.5225 11.9388 13.2737 12.2156 12.9819L11.5356 12.3362V12.3356ZM6.26312 5.63749C6.86812 5.00061 6.91062 4.00436 6.40437 3.28749L5.63875 3.82874C5.9025 4.20186 5.86187 4.69936 5.58375 4.99186L6.26312 5.63749ZM12.1931 9.97624C12.7063 10.2719 12.8069 10.9981 12.4237 11.4012L13.1031 12.0469C13.9188 11.1881 13.6806 9.75124 12.6606 9.16374L12.1931 9.97624ZM10.0625 9.41499C10.3031 9.16124 10.6788 9.10436 10.9994 9.28874L11.4669 8.47624C10.78 8.08124 9.92937 8.19436 9.3825 8.76936L10.0625 9.41499ZM7.16375 11.5887C6.54937 11.2025 5.895 10.68 5.22437 9.97436L4.545 10.62C5.26625 11.3794 5.98062 11.9525 6.665 12.3825L7.16375 11.5887ZM11.0012 12.6356C10.4807 12.6813 9.95616 12.6478 9.44562 12.5362L9.25375 13.4544C9.85779 13.5852 10.4782 13.6236 11.0938 13.5681L11.0019 12.6356H11.0012Z" fill="#333333"></path>
										</svg>
										<a href="tel:888-235-0004" class="tel">888-235-0004</a>
									</div>
									<div>
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
	</div>
</div>

<!-- :: Modal for payment schedule -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content pay_schedular_modal">
			<div class="modal-header justify-content-center">
				<h2 class="modal-title" id="exampleModalLongTitle">Payment Schedule:</h2>
				<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
			</div>
			<div class="modal-body">
				<table class="table text-center br-none">
					<thead class="br-none">
						<tr>
							<th scope="col">Date</th>
							<th scope="col">Amount</th>
						</tr>
					</thead>
					<tbody class="br-none">
						@foreach($payment_schedular as $p)
                                            
                                @php  
                                  $today = date("m/d/Y");
                                 $dt = new DateTime($p['ScheduledDate']); 
                                  $dateScheduled = $dt->format('m/d/Y'); 

                                  $date1 = new DateTime($today);
                                  $date2 = new DateTime($dateScheduled);
                                @endphp
                                @if($date1 >= $date2)
                                <tr>
									<td>{{$dateScheduled}}</td>
									@php 
                                    $amt = number_format($p['Amount'],2);
                                    @endphp
									<td>${{$amt }}</td>
								</tr>
                                @endif
                            
                        @endforeach
						
					</tbody>
				</table>

				@php 
                $a=array(); 
                @endphp
				<!-- :: pay divider -->
				<div class="modal-section-two text-center mt-5">
					<h2>Upcoming payments</h2>
				</div>
				<table class="table text-center br-none">
					<thead>
						<tr>
							<th scope="col">Date</th>
							<th scope="col">Amount</th>
						</tr>
					</thead>
					<tbody>
						@foreach($payment_schedular as $p)
                            @php $i = 0; @endphp 
                                @php  
                                  $today = date("m/d/Y");
                                 $dt = new DateTime($p['ScheduledDate']); 
                                  $dateScheduled = $dt->format('m/d/Y'); 

                                  $date1 = new DateTime($today);
                                  $date2 = new DateTime($dateScheduled);
                                @endphp
                                @if($date1 < $date2)
                                <tr>
									<td>{{$dateScheduled}}</td>
									@php 
                                    $amt = number_format($p['Amount'],2);
                                    @endphp
									<td>${{$amt}}</td>
								</tr>
                                
                                    @php 
                                        array_push($a,$dateScheduled);    
                                    @endphp
                                @endif
                            
                        @endforeach
						<span id="upcoming_count" class="d-none">@php echo count($a); @endphp</span>
					</tbody>
				</table>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="m-close-btn" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--::alert for succesfull pay -->
<!-- <div class="modal fade pay-alert" id="paysuccessalert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered payment-dialog" role="document">
		<div class="modal-content pay-confirmation">
			<div class="modal-body pay-confirm-alert-body">
				<div class="alert-box">
					<div class="pay-alert-image text-center">
						<img class="w-100px" src="{{ URL::asset('assets/img/pay-alrt.png') }}">
					</div>
					<div class="pay-alert-content text-center">
						<h2>Well done!</h2>
						<p>Thank you for your payment. Your transaction has been successfully processed.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->


@endsection
@section('scripts') 
<script>

$(document).ready(function(){
  $('input[type=radio][name=balance]').change(function(){
    var ba = $("input[name='balance']:checked").val();

    if(ba == 0){ 
        var otherval = $('#otheramount').val(); 
        if(otherval == ''){
            alert('Please enter amount');
             document.getElementById("loader").style.display = "none";
            return false;
           
        }else{
            $('.balanceamount1').val(otherval); 
        }
    }else{
        $('.balanceamount1').val(ba); 
    }
  });
});

$("#otheramount").keyup(function(){
     var otherval = $('#otheramount').val();
     if(otherval == ''){
        $('.balanceamount1').val(''); 
        $('#otheramount').val(''); 
     }else{
        $('.balanceamount1').val(otherval); 
        $('#otheramount').val(otherval); 
     }
      
});


// function cardFormValidate(){
//     var cardValid = 0;

//     //card number validation
//     $('#card_number').validateCreditCard(function(result){
//         if(result.valid){
//             $("#card_number").removeClass('required');
//             cardValid = 1;
//         }else{
//             $("#card_number").addClass('required');
//             cardValid = 0;
//         }
//     });
      
//     //card details validation
//     var cardName = $("#name_on_card").val();
//     var expMonth = $("#expiry_month").val();
//     var expYear = $("#expiry_year").val();
//     var cvv = $("#cvv").val();
//     var regName = /^[a-z ,.'-]+$/i;
//     var regMonth = /^01|02|03|04|05|06|07|08|09|10|11|12$/;
//     var regYear = /^2017|2018|2019|2020|2021|2022|2023|2024|2025|2026|2027|2028|2029|2030|2031$/;
//     var regCVV = /^[0-9]{3,3}$/;
//     if (cardValid == 0) {
//         $("#card_number").addClass('required');
//         $("#card_number").focus();
//         return false;
//     }else if (!regMonth.test(expMonth)) {
//         $("#card_number").removeClass('required');
//         $("#expiry_month").addClass('required');
//         $("#expiry_month").focus();
//         return false;
//     }else if (!regYear.test(expYear)) {
//         $("#card_number").removeClass('required');
//         $("#expiry_month").removeClass('required');
//         $("#expiry_year").addClass('required');
//         $("#expiry_year").focus();
//         return false;
//     }else if (!regCVV.test(cvv)) {
//         $("#card_number").removeClass('required');
//         $("#expiry_month").removeClass('required');
//         $("#expiry_year").removeClass('required');
//         $("#cvv").addClass('required');
//         $("#cvv").focus();
//         return false;
//     }else if (!regName.test(cardName)) {
//         $("#card_number").removeClass('required');
//         $("#expiry_month").removeClass('required');
//         $("#expiry_year").removeClass('required');
//         $("#cvv").removeClass('required');
//         $("#name_on_card").addClass('required');
//         $("#name_on_card").focus();
//         return false;
//     }else{
//         $("#card_number").removeClass('required');
//         $("#expiry_month").removeClass('required');
//         $("#expiry_year").removeClass('required');
//         $("#cvv").removeClass('required');
//         $("#name_on_card").removeClass('required');
//         return true;
//     }
// }
// $(document).ready(function() {
//     //card validation on input fields
//     $('#tab input[type=text]').on('keyup',function(){
//         cardFormValidate();
//     });
// });
$("#card_number").keyup(function(){
    $('#card_number').validateCreditCard(function(result) {
        if(result.card_type == null ){
            $('.error_card').html('Please enter valid credit card');
            $('.error_card').addClass('alert alert-danger');
            return false;
        }else if(result.valid == false){
            $('.error_card').html('Please enter valid credit card');
            $('.error_card').addClass('alert alert-danger');
            return false;
        }else if(result.length_valid == false){
            $('.error_card').html('Please enter valid credit card');
            $('.error_card').addClass('alert alert-danger');
            return false;
        }else if(result.luhn_valid == false){
            $('.error_card').html('Please enter valid credit card');
            $('.error_card').addClass('alert alert-danger');
            return false;
        }else{
            $('.error_card').html('');
            $('.error_card').removeClass('alert alert-danger');
            $('.card_type').val(result.card_type.name); 
            return true;
        }
        
    });
});

$("#expiry_month").keyup(function(){
    var expMonth = $("#expiry_month").val();
      if (expMonth < 1 || expMonth > 13){
        $('.error_card').html('Please enter valid expire month');
        $('.error_card').addClass('alert alert-danger');
        return false;
      }else{
        $('.error_card').html('');
        $('.error_card').removeClass('alert alert-danger');
        return true;
      } 
});

$("#expiry_year").keyup(function(){
    var expYear = $("#expiry_year").val();
      if (expYear < 2023 || expYear > 2060){
        $('.error_card').html('Please enter valid expire year');
        $('.error_card').addClass('alert alert-danger');
        return false;
      }else{
        $('.error_card').html('');
        $('.error_card').removeClass('alert alert-danger');
        return true;
      } 
});

$("#cvv").keyup(function(){
    var cvv = $("#cvv").val();
     var myRe = /^[0-9]{3,4}$/;
     var myArray = myRe.exec(cvv);
     if(cvv!=myArray)
      {
        $('.error_card').html('Please enter valid cvv number');
        $('.error_card').addClass('alert alert-danger');
        return false;
     }else{
        $('.error_card').html('');
        $('.error_card').removeClass('alert alert-danger');
        return true; 
     }
}); 

$("#name_on_card").keyup(function(){
    var name_on_card = $("#name_on_card").val();
     var myRe = /^[a-z ,.'-]+$/i;
     var myArray = myRe.exec(name_on_card);
     if(name_on_card!=myArray)
      {
        $('.error_card').html('Please enter valid name');
        $('.error_card').addClass('alert alert-danger');
        return false;
     }else{
        $('.error_card').html('');
        $('.error_card').removeClass('alert alert-danger');
        return true; 
     }
}); 
// setTimeout(function() {
//     $(".alert-success").addClass('d-none');
// }, 2000);



$("#tab").submit(function(event) { 
     document.getElementById("loader").style.display = "block";
    event.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var ba = $("input[name='balance']:checked").val();

    if(ba == 0){ 
        var otherval = $('#otheramount').val(); 
        if(otherval == ''){
            alert('Please enter amount');
            document.getElementById("loader").style.display = "none";
            return false;
            
        }else{
            $('.balanceamount1').val(otherval); 
        }
    }else{
        $('.balanceamount1').val(ba); 
    }


    // var card_number1 = $("#card_number").val(); 
    // if(card_number1 === ''){ 
    //         $('.error_card').html('Please enter card number');
    //         $('.error_card').addClass('alert alert-danger');
    //          document.getElementById("loader").style.display = "none";
    //         return false;
           
    // }else{ 
    //         $('#card_number').validateCreditCard(function(result) {
    //         if(result.card_type == null ){
    //             $('.error_card').html('Please enter valid credit card');
    //             $('.error_card').addClass('alert alert-danger');
    //              document.getElementById("loader").style.display = "none";
    //              return false;
               
    //         }else if(result.valid == false){
    //             $('.error_card').html('Please enter valid credit card');
    //             $('.error_card').addClass('alert alert-danger');
    //             document.getElementById("loader").style.display = "none";
    //             return false;
                
    //         }else if(result.length_valid == false){
    //             $('.error_card').html('Please enter valid credit card');
    //             $('.error_card').addClass('alert alert-danger');
    //             document.getElementById("loader").style.display = "none";
    //             return false;
                
    //         }else if(result.luhn_valid == false){
    //             $('.error_card').html('Please enter valid credit card');
    //             $('.error_card').addClass('alert alert-danger');
    //             document.getElementById("loader").style.display = "none";
    //             return false;
                
    //         }else{
    //             $('.error_card').html('');
    //             $('.error_card').removeClass('alert alert-danger');
    //             $('.card_type').val(result.card_type.name); 
    //             return true;
    //         }
            
    //     });
    // }

    // var name_on_card1 = $("#name_on_card").val();
    // if(name_on_card1 === ''){
    //         $('.error_card').html('Please enter name');
    //         $('.error_card').addClass('alert alert-danger');
    //         return false;
    // }else{
    //     var myRe = /^[a-z ,.'-]+$/i;
    //      var myArray = myRe.exec(name_on_card1);
    //      if(name_on_card1!=myArray)
    //       {
    //         $('.error_card').html('Please enter valid name');
    //         $('.error_card').addClass('alert alert-danger');
    //         return false;
    //      }else{
    //         $('.error_card').html('');
    //         $('.error_card').removeClass('alert alert-danger');
    //         return true; 
    //      }
    // }
    
    
    // var expMonth1 = $("#expiry_month").val(); 
    // if(expMonth1 === ''){
    //         $('.error_card').html('Please enter expire month');
    //         $('.error_card').addClass('alert alert-danger');
    //         return false;
    // }else{

    //       if (expMonth1 < 1 || expMonth1 > 13){
    //         $('.error_card').html('Please enter valid expire month');
    //         $('.error_card').addClass('alert alert-danger');
    //         return false;
    //       }else{
    //         $('.error_card').html('');
    //         $('.error_card').removeClass('alert alert-danger');
    //         return true;
    //       } 
    // }


    // var expYear1 = $("#expiry_year").val();
    // if(expYear1 === ''){
    //         $('.error_card').html('Please enter expire year');
    //         $('.error_card').addClass('alert alert-danger');
    //         return false;
    // }else{
        
    //           if (expYear1 < 2023 || expYear1 > 2050){
    //             $('.error_card').html('Please enter valid expire year');
    //             $('.error_card').addClass('alert alert-danger');
    //             return false;
    //           }else{
    //             $('.error_card').html('');
    //             $('.error_card').removeClass('alert alert-danger');
    //             return true;
    //           } 
        
    // }


    // var cvv1 = $("#cvv").val();
    // if(cvv1 === ''){
    //         $('.error_card').html('Please enter cvv number');
    //         $('.error_card').addClass('alert alert-danger');
    //         return false;
    // }else{
        
    //      var myRe = /^[0-9]{3,4}$/;
    //      var myArray = myRe.exec(cvv1);
    //      if(cvv1!=myArray)
    //       {
    //         $('.error_card').html('Please enter valid cvv number');
    //         $('.error_card').addClass('alert alert-danger');
    //         return false;
    //      }else{
    //         $('.error_card').html('');
    //         $('.error_card').removeClass('alert alert-danger');
    //         return true; 
    //      }
            
    // }


    formdata = new FormData($(this)[0]);
    var APP_URL = {!! json_encode(url('/')) !!}
    $.ajax({
        url: '{{ route('payment-store') }}',
        contentType: false,
        processData: false,
        data: formdata,
        type: 'POST',

        success: function(response)
        { var response = JSON.parse(response);
        
            document.getElementById("loader").style.display = "none";
            if(response['status'] == 'DECLINED'){
                $("#tab")[0].reset(); 
                $('.error_card').removeClass('alert alert-success');
                // $(".error_card").addClass('alert alert-success');
                // $(".error_card").html('Transaction successfully, Thanks!');

                var amount = response.amount;
                 var tran_id = response.tran_id;
                 var email = response.email;
                window.location = APP_URL+"/success-card-transaction/"+ amount + '/' + tran_id + '/'+ email;
                
            }else{
                $("#tab")[0].reset(); 
                $('.error_card').removeClass('alert alert-danger');
                $(".error_card").addClass('alert alert-danger');
                $(".error_card").html('Transaction ' +response['status'] + ' !Please check card details and try again');
           
                //   var amount = response.amount;
                //  var tran_id = '77';
                //  var email = response.email;
                // window.location = 'https://pragya.dbtechserver.online/paymentSolution/success-card-transaction/' + amount + '/' + tran_id + '/'+ email;
            }
                
        },

    });
    // document.getElementById("loader").style.display = "none";
    // return false;
    
});












var validRoutingNumber = function(routing) {
    if (routing.length !== 9) {
        return false;
    }
    
    // http://en.wikipedia.org/wiki/Routing_transit_number#MICR_Routing_number_format
    var checksumTotal = (7 * (parseInt(routing.charAt(0),10) + parseInt(routing.charAt(3),10) + parseInt(routing.charAt(6),10))) +
                        (3 * (parseInt(routing.charAt(1),10) + parseInt(routing.charAt(4),10) + parseInt(routing.charAt(7),10))) +
                        (9 * (parseInt(routing.charAt(2),10) + parseInt(routing.charAt(5),10) + parseInt(routing.charAt(8),10)));
    
    var checksumMod = checksumTotal % 10;
    if (checksumMod !== 0) {
        return false;
    } else {
        return true;
    }
};

// var testNumbers = '011103093';

$("#bankrouteingno").keyup(function(){
    var testNumbers = $("#bankrouteingno").val();
    if(testNumbers === ""){
        $('.error_card1').html('Please enter valid bank routing number');
        $('.error_card1').addClass('alert alert-danger');
        return false;
    }else{
        var valid = validRoutingNumber(testNumbers); 
        if(valid == false)
        {
            $('.error_card1').html('Please enter valid bank routing number');
            $('.error_card1').addClass('alert alert-danger');
            return false;
         }else{
            $('.error_card1').html('');
            $('.error_card1').removeClass('alert alert-danger');
            return true; 
        }
    }
}); 

$("#accountno").keyup(function(){
    var accountno = $("#accountno").val();
     var myRe = /^[0-9]{9,18}$/;
     var myArray = myRe.exec(accountno);
     if(accountno!=myArray)
      {
        $('.error_card1').html('Please enter valid bank account number');
        $('.error_card1').addClass('alert alert-danger');
        return false;
     }else{
        $('.error_card1').html('');
        $('.error_card1').removeClass('alert alert-danger');
        return true; 
     }
}); 

// $("#phoneNo").keyup(function(){
//     var phoneNo = $("#phoneNo").val();
//      var myRe = /^[0-9]{9,11}$/;
//      var myArray = myRe.exec(phoneNo);
//      if(phoneNo!=myArray)
//       {
//         $('.error_card1').html('Please enter valid phone number');
//         $('.error_card1').addClass('alert alert-danger');
//         return false;
//      }else{
//         $('.error_card1').html('');
//         $('.error_card1').removeClass('alert alert-danger');
//         return true; 
//      }
// }); 

$("#Zip").keyup(function(){
    var Zip = $("#Zip").val();
     var myRe = /^[0-9]{4,9}$/;
     var myArray = myRe.exec(Zip);
     if(Zip!=myArray)
      {
        $('.error_card1').html('Please enter valid zip code');
        $('.error_card1').addClass('alert alert-danger');
        return false;
     }else{
        $('.error_card1').html('');
        $('.error_card1').removeClass('alert alert-danger');
        return true; 
     }
}); 

$("#bank_name").keyup(function(){
    var bank_name = $("#bank_name").val();
     var myRe = /^[a-z ,.'-]+$/i;
     var myArray = myRe.exec(bank_name);
     if(bank_name!=myArray)
      {
        $('.error_card1').html('Please enter valid bank name');
        $('.error_card1').addClass('alert alert-danger');
        return false;
     }else{
        $('.error_card1').html('');
        $('.error_card1').removeClass('alert alert-danger');
        return true; 
     }
}); 

$("#City").keyup(function(){
    var City = $("#City").val();
     var myRe = /^[a-z ,.'-]+$/i;
     var myArray = myRe.exec(City);
     if(City!=myArray)
      {
        $('.error_card1').html('Please enter valid city name');
        $('.error_card1').addClass('alert alert-danger');
        return false;
     }else{
        $('.error_card1').html('');
        $('.error_card1').removeClass('alert alert-danger');
        return true; 
     }
});


$("#account_holder_name").keyup(function(){
    var account_holder_name = $("#account_holder_name").val();
     var myRe = /^[a-z ,.'-]+$/i;
     var myArray = myRe.exec(account_holder_name);
     if(account_holder_name!=myArray)
      {
        $('.error_card1').html('Please enter valid account holder name');
        $('.error_card1').addClass('alert alert-danger');
        return false;
     }else{
        $('.error_card1').html('');
        $('.error_card1').removeClass('alert alert-danger');
        return true; 
     }
}); 



$("#tab2").submit(function(event) { 
     document.getElementById("loader").style.display = "block";
    event.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var ba1 = $("input[name='balance']:checked").val();

    if(ba1 == 0){ 
        var otherval = $('#otheramount').val(); 
        if(otherval == ''){
            alert('Please enter amount');
            document.getElementById("loader").style.display = "none";
            return false;
            
        }else{
            $('.balanceamount1').val(otherval); 
        }
    }else{
        $('.balanceamount1').val(ba1); 
    }
   
    var APP_URL = {!! json_encode(url('/')) !!}
    formdata = new FormData($(this)[0]);

    $.ajax({
        url: '{{ route('payment-ach') }}',
        contentType: false,
        processData: false,
        data: formdata,
        type: 'POST',

        success: function(response) 
        { 
            var response = JSON.parse(response); 
            document.getElementById("loader").style.display = "none"; 
            if(response['status'] == 'success'){
                $("#tab2")[0].reset(); 
                $('.error_card1').removeClass('alert alert-success');
              
                 var amount = response['amount'];
                 // var tran_id = response.tran_id;
                 var email = response['email'];

                window.location = APP_URL+"/success-ach-transaction/"+ amount + '/' + email;
            }else{
                
                $("#tab2")[0].reset(); 
                $('.error_card1').removeClass('alert alert-danger');
                $(".error_card1").addClass('alert alert-danger');
                $(".error_card1").html('Transaction ' +response['status'] + ' !Please check bank details and try again...');
                
            }
                
        },

    });
    
    
});








</script>

<script>
   $(document).ready(function() {
      var tt = $("#upcoming_count").text();
      if(tt > 0){
          $(".heading_upcoming").text('Upcoming Payments');
      }
   });
</script>

@endsection