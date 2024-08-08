<?php include 'header.php'; ?>
	<section class="section">
		<div class="container">
			<div class="container_box bg-white">
				<div class="row gap-y">
					<div class="col-lg-4 col-md-12">
						<div class="left_box">
							<div class="map_box">
								<iframe style="border:1px solid #e5e5e5;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3166.31297718356!2d-122.15377518469091!3d37.476940079814774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbc98a8a7ed9b%3A0xb13cfbd0205e4382!2s1350+Willow+Rd%2C+Menlo+Park%2C+CA+94025%2C+USA!5e0!3m2!1sen!2sin!4v1561717749867!5m2!1sen!2sin" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<p class="left_box_address">Teledentix Building 57, 1350 Willow Rd, Menlo Park CA 94025, USA</p>
							<a class="get-directions-button" href="javascript:void(0);"><img src="../images/directions.svg"> Get Directions</a>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-8">
						<div class="provider_details mt-4 mt-md-0">
							<ul class="mb-0">
								<li class="top_details">
									<div class="provider_pro_pic">
										<img src="../images/provider-pic.png">
									</div>
									<h5 class="provider_name">Scott Hawkings</h5>
									<div class="action_buttons d-none d-md-block">
										<a href="" data-toggle="tooltip" title="Video Call" class="mr-1 mr-sm-3 disabled"><img src="../images/videocall.svg"></a>
										<a href="javascript:void(0);" data-toggle="tooltip" title="Massage" class="message_icon mr-1">
											<img src="../images/conversation-speech-bubbles-.svg">
											<span class="massege_counter">2</span>
										</a>
									</div>
								</li>
								<li class="d-block d-md-none mt-4 mb-3">
									<div class="action_buttons text-left">
										<a href="" data-toggle="tooltip" title="Video Call" class="mr-3 mr-sm-3 disabled"><img src="../images/videocall.svg"></a>
										<a href="javascript:void(0);" data-toggle="tooltip" title="Massage" class="message_icon mr-1">
											<img src="../images/conversation-speech-bubbles-.svg">
											<span class="massege_counter">2</span>
										</a>
									</div>
								</li>
								<li class="calender_details">
									<div class="date"><img src="../images/calendar2.svg"> 21 June, 2019</div>
									<div class="time"><img src="../images/time.svg"> 10:30 AM</div>
								</li>
								<li class="d-block d-md-none mt-4">
									<div class="confirm-list calender_confirm_list mt-0 mt-md-0">
										<label><i class="fa fa-calendar"></i> Add to calendar</label>
										<div class="add_to_calender">
											<a href="javascript:void(0);" target="_blank"><img src="../images/gcalendar.svg"></a>
											<a href="javascript:void(0);" target="_blank"><img src="../images/outlook.svg"></a>
											<a href="javascript:void(0);" target="_blank"><img src="../images/Calendar.svg"></a>
										</div>
									</div>
								</li>
								<li class="treatment_plan">
									<h5>Treatment Plan</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer  <a href="view-details.php" class="text-blue read-more">Read more</a></p>
								</li>
								<li class="details_button">
									<a href="view-details.php" class="btn btn-details">VIEW DETAILS</a>
									<a href="javascript:void(0);" class="btn btn-reschedule click-sidemenu reschedule_appointment">Reschedule</a>
									<a href="javascript:void(0);" class="btn btn-cancle open_cancel_appointment_sidebar">CANCEL</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2  col-md-4">
						<div class="confirm-list calender_confirm_list mt-0 mt-md-0 d-none d-md-block">
							<label><i class="fa fa-calendar"></i> Add to calendar</label>
							<div class="add_to_calender">
								<a href="javascript:void(0);" target="_blank"><img src="../images/gcalendar.svg"></a>
								<a href="javascript:void(0);" target="_blank"><img src="../images/outlook.svg"></a>
								<a href="javascript:void(0);" target="_blank"><img src="../images/Calendar.svg"></a>
							</div>
						</div>
						<!-- <div class="confirm-list calender_confirm_list mt-0 mt-md-4">
							<label>Records</label>
							<div class="medical_records_list">
								<img src="../images/pic1.png">
								<img src="../images/pic2.png">
								<img src="../images/pic3.png">
								<a class="text-blue" href="booking-complete.php">+2 more</a>
							</div>
						</div> -->
					</div>
				</div>
				<div class="top-border note-sec">
					<h5><i>i</i>Notes:</h5>
					<p><b>1.</b> Dentist will be available on 2nd floor, Room number 12C.</p>
					<p><b>2.</b> Patients are requested to check - in online to skip the queue in the clinic.</p>
				</div>
			</div>
			<div class="container_box bg-white">
				<div class="row gap-y">
					<div class="col-12">
						<h2 class="table_title">Appointment History</h2>
						<div class="details_table table-responsive">
							<table class="table">
								<tr>
									<th class="w-8">Sr No.</th>
									<th class="w-25">LOCATION</th>
									<th class="w-25">DATE</th>
									<th class="w-20">PROVIDER</th>
									<th class="w-20"></th>
								</tr>
								<!-- collapse row -->
								<tr>
									<td>1</td>
									<td><p class="left_box_address mt-0">Teledentix Building 57, 1350 Willow Rd, Menlo Park CA 94025, USA</p></td>
									<td>
										<p>Wednesday </p>
										<p>04 June , 2019 </p>
										<p>12:00 PM</p>
										<span class="badge badge-success">Completed</span>
									</td>
									<td><ul class="mb-0">
											<li class="top_details">
												<div class="table_provider_pro_pic">
													<img src="../images/provider-pic.png">
												</div>
												<p class="table_provider_name">Scott Hawkings</p>
											</li>
										</ul>
									<td class="text-right">
										<a class="text-blue" href="booking-complete.php">View Details</a>
										<!-- <div class="confirm-list calender_confirm_list mt-3">
											<div class="medical_records_list">
												<img src="../images/pic1.png">
												<img src="../images/pic2.png">
												<img src="../images/pic3.png">
												<a class="text-blue" href="booking-complete.php">+2 more</a>
											</div>
										</div> -->
									</td>
								</tr>
								<!-- <tr class="collapse" id="row1" valign="middle" style="border-top: 0">
								    <td></td>
								    <td>
								    	<ul class="mb-0 table_pic_details">
								    		<img src="../images/provider-pic.png">
											<li class="table_location">
												<p class="table_provider_name">Scott Hawkings</p>
												<p>21 June, 2019</p>
												<p>10:30 AM</p>
											</li>
											<li><a href="javascript:void(0);">Cleaning & Checkup</a></li>
										</ul>
									</td>
								    <td>
								    	<ul class="mb-0">
											<li class="top_details">
												<div class="map_pic">
													<img src="../images/map.png">
													<a href="javascript:void(0);" class="underline">Get Directions</a>
												</div>
												<p class="table_provider_name">Teledentix Building 57 1350 Willow Rd, Menlo Park, CA 94025
													<br><a href="tel:(001)-222-3333" class="text-blue">(001)-222-3333</a>
												</p>
											</li>
										</ul>
									</td>
								    <td colspan="2" class="text-right" style="vertical-align: middle;">
								    	<a href="javascript:void(0);" class="btn btn-primary" style="width: 60%;">Book again</a>
								    </td>
								</tr> -->
								<!-- collapse row end -->
								<!-- collapse row -->
								<tr>
									<td>2</td>
									<td><p class="left_box_address mt-0">Teledentix Building 57, 1350 Willow Rd, Menlo Park CA 94025, USA</p></td>
									<td>
										<p>Wednesday </p>
										<p>25 May , 2019 </p>
										<p>12:00 PM</p>
										<span class="badge badge-danger">Cancelled</span>
									</td>
									<td><ul class="mb-0">
											<li class="top_details">
												<div class="table_provider_pro_pic">
													<img src="../images/pro2.png">
												</div>
												<p class="table_provider_name">Dr. Steve J.</p>
											</li>
										</ul>
									<td class="text-right">
										<a class="text-blue" href="booking-cancelled.php">View Details</a>
										<!-- <div class="confirm-list calender_confirm_list mt-3">
											<div class="medical_records_list">
												<img src="../images/pic1.png">
												<img src="../images/pic2.png">
												<img src="../images/pic3.png">
												<a class="text-blue" href="booking-cancelled.php">+2 more</a>
											</div>
										</div> -->
									</td>
								</tr>
								<!-- <tr class="collapse" id="row2" valign="middle" style="border-top: 0">
								    <td></td>
								    <td>
								    	<ul class="mb-0 table_pic_details">
								    		<img src="../images/pro2.png">
											<li class="table_location">
												<p class="table_provider_name">Dr. Steve J.</p>
												<p>21 June, 2019</p>
												<p>10:30 AM</p>
											</li>
											<li><a href="javascript:void(0);">Cleaning & Checkup</a></li>
										</ul>
									</td>
								    <td>
								    	<ul class="mb-0">
											<li class="top_details">
												<div class="map_pic">
													<img src="../images/map.png">
													<a href="javascript:void(0);" class="underline">Get Directions</a>
												</div>
												<p class="table_provider_name">Teledentix Building 57 1350 Willow Rd, Menlo Park, CA 94025
													<br><a href="tel:(001)-222-3333" class="text-blue">(001)-222-3333</a>
												</p>
											</li>
										</ul>
									</td>
								    <td colspan="2" class="text-right" style="vertical-align: middle;">
								    	<a href="javascript:void(0);" class="btn btn-primary" style="width: 60%;">Book again</a>
								    </td>
								</tr> -->
								<!-- collapse row end -->
								<!-- collapse row -->
								<tr>
									<td>3</td>
									<td><p class="left_box_address mt-0">Teledentix Building 57, 1350 Willow Rd, Menlo Park CA 94025, USA</p></td>
									<td>
										<p>Wednesday </p>
										<p>04 June , 2019 </p>
										<p>12:00 PM</p>
										<span class="badge badge-success">Completed</span>
									</td>
									<td><ul class="mb-0">
											<li class="top_details">
												<div class="table_provider_pro_pic">
													<img src="../images/pro3.png">
												</div>
												<p class="table_provider_name">Dr. Ivaho A.</p>
											</li>
										</ul>
									<td class="text-right">
										<a class="text-blue" href="booking-complete.php">View Details</a>
										<!-- <div class="confirm-list calender_confirm_list mt-3">
											<div class="medical_records_list">
												<img src="../images/pic1.png">
												<img src="../images/pic2.png">
												<img src="../images/pic3.png">
												<a class="text-blue" href="booking-complete.php">+2 more</a>
											</div>
										</div> -->
									</td>
								</tr>
								<!-- <tr class="collapse" id="row3" valign="middle" style="border-top: 0">
								    <td></td>
								    <td>
								    	<ul class="mb-0 table_pic_details">
								    		<img src="../images/pro3.png">
											<li class="table_location">
												<p class="table_provider_name">Dr. Ivaho A.</p>
												<p>21 June, 2019</p>
												<p>10:30 AM</p>
											</li>
											<li><a href="javascript:void(0);">Cleaning & Checkup</a></li>
										</ul>
									</td>
								    <td>
								    	<ul class="mb-0">
											<li class="top_details">
												<div class="map_pic">
													<img src="../images/map.png">
													<a href="javascript:void(0);" class="underline">Get Directions</a>
												</div>
												<p class="table_provider_name">Teledentix Building 57 1350 Willow Rd, Menlo Park, CA 94025
													<br><a href="tel:(001)-222-3333" class="text-blue">(001)-222-3333</a>
												</p>
											</li>
										</ul>
									</td>
								    <td colspan="2" class="text-right" style="vertical-align: middle;">
								    	<a href="javascript:void(0);" class="btn btn-primary" style="width: 60%;">Book again</a>
								    </td>
								</tr> -->
								<!-- collapse row end -->
								<!-- collapse row -->
								<tr>
									<td>4</td>
									<td><p class="left_box_address mt-0">Teledentix Building 57, 1350 Willow Rd, Menlo Park CA 94025, USA</p></td>
									<td>
										<p>Wednesday </p>
										<p>04 June , 2019 </p>
										<p>12:00 PM</p>
										<span class="badge badge-success">Completed</span>
									</td>
									<td><ul class="mb-0">
											<li class="top_details">
												<div class="table_provider_pro_pic">
													<img src="../images/provider-pic.png">
												</div>
												<p class="table_provider_name">Scott Hawkings</p>
											</li>
										</ul>
									<td class="text-right">
										<a class="text-blue" href="booking-complete.php">View Details</a>
										<!-- <div class="confirm-list calender_confirm_list mt-3">
											<div class="medical_records_list">
												<img src="../images/pic1.png">
												<img src="../images/pic2.png">
												<img src="../images/pic3.png">
												<a class="text-blue" href="booking-complete.php">+2 more</a>
											</div>
										</div> -->
									</td>
								</tr>
								<!-- <tr class="collapse" id="row4" valign="middle" style="border-top: 0">
								    <td></td>
								    <td>
								    	<ul class="mb-0 table_pic_details">
								    		<img src="../images/provider-pic.png">
											<li class="table_location">
												<p class="table_provider_name">Scott Hawkings</p>
												<p>21 June, 2019</p>
												<p>10:30 AM</p>
											</li>
											<li><a href="javascript:void(0);">Cleaning & Checkup</a></li>
										</ul>
									</td>
								    <td>
								    	<ul class="mb-0">
											<li class="top_details">
												<div class="map_pic">
													<img src="../images/map.png">
													<a href="javascript:void(0);" class="underline">Get Directions</a>
												</div>
												<p class="table_provider_name">Teledentix Building 57 1350 Willow Rd, Menlo Park, CA 94025
													<br><a href="tel:(001)-222-3333" class="text-blue">(001)-222-3333</a>
												</p>
											</li>
										</ul>
									</td>
								    <td colspan="2" class="text-right" style="vertical-align: middle;">
								    	<a href="javascript:void(0);" class="btn btn-primary" style="width: 60%;">Book again</a>
								    </td>
								</tr> -->
								<!-- collapse row end -->
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include 'footer.php'; ?>
