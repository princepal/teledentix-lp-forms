<?php include 'header.php'; ?>
<section class="section">
	<div class="container">
		<div class="row gap-y">
			<!-- left sidebar  -->
			<div class="col-lg-4">
				<!-- map box -->
				<div class="box">
					<div class="map_box_view">
						<iframe style="border:1px solid #e5e5e5;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3166.31297718356!2d-122.15377518469091!3d37.476940079814774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbc98a8a7ed9b%3A0xb13cfbd0205e4382!2s1350+Willow+Rd%2C+Menlo+Park%2C+CA+94025%2C+USA!5e0!3m2!1sen!2sin!4v1561717749867!5m2!1sen!2sin" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<p class="left_box_address">Teledentix Building 57, 1350 Willow Rd, Menlo Park CA 94025, USA</p>
					<a class="get-directions-button" href="javascript:void(0);"><img src="../images/directions.svg"> Get Directions</a>
				</div>
				<!-- map box end -->
				<!-- video call -->
				<div class="video_call_btn text-center mt-4">
					<div class="not_available">
						<a href="javascript:void(0);" class="btn btn-primary not_available" data-toggle="modal" data-target="#schedule_vieo_call">
						<span class="if_not_available"><img src="../images/v-s-icon.svg"> SCHEDULE VIDEO CALL</span>
						</a>
						<p class="not_avail">Right now, Dentist is not available for video call</p>
					</div>
					<div class="is_avail d-none">
						<a href="javascript:void(0);" class="btn btn-primary ">
							<span class="if_available"><img src="../images/tiny-video-symbol.svg"> VIDEO CALL</span>
						</a>
						<p class="is_avail">Dentist is available for video call</p>
					</div>
				</div>
				<!-- video call end -->
				<!-- chat box -->
				<div class="card chat_box mt-4">
					<div class="card-header">
						<h4 class="text-center">Chat <span class="chat_counter">2</span></h4>
					</div>
					<div class="chat-head-title">
						<ul class="mb-0">
							<li class="top_details">
								<div class="provider_pro_pic">
									<img src="../images/provider-pic.png">
								</div>
								<h5 class="provider_name text-dark">Scott Hawkings <span class="online_offline_dott offline">Offline</span></h5><!-- add class online if provider is online and change text to online -->
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="chat-panel">
							<p class="chat-date text-center">Wednesday June 19, 2019</p>
							<!-- sender -->
							<div class="chat-sender">
								<span class="msg-time">
									<small>13:01 pm</small>
								</span>
								<div class="caht-inner">
									<div class="msg-text">Hello Dr. Scott Is there any update for me? </div>
								</div>
								<img src="../images/provider-pic.png" class="chat-msg-image">
							</div>
							<!-- sender -->
							<!-- replyer  -->
							<div class="chat-sender chat-replyer">
								<img src="../images/provider-pic.png" class="chat-msg-image">
								<div class="caht-inner">
									<div class="msg-text">Hi John, yes I have some feedback for you. Could we setup a call for tommorrow?</div>
								</div>
								<span class="msg-time">
									<small>13:01 pm</small>
								</span>
							</div>
							<!-- replyer end -->
						</div>
						<div class="chat-input-box">
							<div class="send-box">
								<input type="texgt" name="" class="input" placeholder="Write Message...">
								<div class="input_photo">
									<label for="upload-file" class="mr-1"><img src="../images/link.png"> </label>
									<input type="file" name="photo" id="upload-file" />
									<label for="upload-photo"><img src="../images/photo.png"> </label>
									<input type="file" name="photo" id="upload-photo" />
								</div>
							</div>
							<div class="msg-send-button">
								<button type="button"><img src="../images/send-button.png"></button>
							</div>
						</div>
					</div>
				</div>
				<!-- chat box end -->
			</div>
			<!-- left sidebar -->
			<!-- right content part -->
			<div class="col-lg-8">
				<div class="details_part_section">
					<div class="row gap-y">
						<div class="col-md-9">
							<ul class="mb-0">
								<li class="top_details">
									<div class="provider_pro_pic">
										<img src="../images/provider-pic.png">
									</div>
									<h5 class="provider_name text-dark">Scott Hawkings</h5>
								</li>
								<li>
									<ul class="d-block d-lg-flex">
										<li class="calender_details">
											<div class="date"><img src="../images/calendar2.svg"> 21 June, 2019</div>
											<div class="time"><img src="../images/time.svg"> 10:30 AM</div>
										</li>
										<li class="seprater__">
											<div class="calender_details links_ ml-4">
												<a href="javascript:void(0);" class="text-blue mr-3 click-sidemenu reschedule_appointment">RESCHEDULE</a>
												<a href="javascript:void(0);" class="text-dark open_cancel_appointment_sidebar">CANCEL</a>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="col-md-3">
							<div class="confirm-list calender_confirm_list">
								<label><i class="fa fa-calendar"></i> Add to calendar</label>
								<div class="add_to_calender">
									<a href="javascript:void(0);"><img src="../images/gcalendar.svg"></a>
									<a href="javascript:void(0);"><img src="../images/outlook.svg"></a>
									<a href="javascript:void(0);"><img src="../images/Calendar.svg"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="note-sec">
						<h5><i>i</i>Notes:</h5>
						<p><b>1.</b> Dentist will be available on 2nd floor, Room number 12C.</p>
						<p><b>2.</b> Patients are requested to check - in online to skip the queue in the clinic.</p>
					</div>
					<div class="row gap-y">
						<div class="col-12">
							<!-- tab links -->
							<div class="tabs_plan_details mt-3">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="one-tab" data-toggle="tab" href="#treatment_plan" role="tab" aria-controls="treatment_plan" aria-selected="true">Treatment Plan</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="two-tab" data-toggle="tab" href="#patient_education" role="tab" aria-controls="patient_education" aria-selected="false">Patient Education</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="three-tab" data-toggle="tab" href="#patient_reports" role="tab" aria-controls="patient_reports" aria-selected="false">Reports</a>
									</li>
								</ul>
							</div>
							<!-- tab links end -->
							<!-- tab content start -->
							<div class="tab-content" id="myTabContent">
								<!-- treatment plan tab -->
								<div class="tab-pane fade show active" id="treatment_plan" role="tabpanel" aria-labelledby="one-tab">
									<div class="table-responsive">
										<table class="table" style="font-size: 14px;">
											<tr class="heading_row">
												<th class="w-30 pl-0">Procedure</th>
												<th>Description</th>
												<th class="text-right"><a href="javascript:void(0);" class="btn btn-primary approve" data-toggle="modal" data-target="#approve">Approve</a> <a href="javascript:void(0);" class="btn text-danger deny" data-toggle="modal" data-target="#deny">Deny</a></th>
											</tr>
											<tr>
												<th class="pl-0">Removal of orthodontic fixed appliances</th>
												<td colspan="2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</td>
											</tr>
											<tr>
												<th class="pl-0">Diagnostic restore waxup </th>
												<td colspan="2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has</td>
											</tr>
											<tr>
												<th class="pl-0">Critical Crown Lengthening </th>
												<td colspan="2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has</td>
											</tr>
											<tr>
												<th class="pl-0">Re-evaluation </th>
												<td colspan="2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has</td>
											</tr>
											<tr>
												<th class="pl-0"></th>
												<td colspan="2"><a href="javascript:void(0);" class="btn btn-primary approve" data-toggle="modal" data-target="#approve">Approve</a> <a href="javascript:void(0);" class="btn text-danger" data-toggle="modal" data-target="#deny">Deny</a></td>
											</tr>
										</table>
									</div>           
								</div>
								<!-- treatment plan tab end -->
								<!-- patient education tab -->
								<div class="tab-pane fade" id="patient_education" role="tabpanel" aria-labelledby="two-tab">
									<div class="patient_education_table table-responsive">
										<table class="table table_p_education">
											<tr>
												<th>TITLE</th>
												<th>CATEGORY</th>
												<th>PROVIDER</th>
												<th></th>
											</tr>
											<tr>
												<td>
													<h6>10 Dental Advice</h6>
													<p>Brush at least twice a day. ..<br>Use fluoridated toothpaste..</p>
												</td>
												<td>Articles</td>
												<td>
													<ul class="mb-0">
														<li class="top_details align-items-center">
															<div class="provider_pro_pic">
																<img src="../images/provider-pic.png">
															</div>
															<h5 class="provider_name text-dark">Scott Hawkings</h5>
														</li>
													</ul>
												</td>
												<td>
													<a href="../images/screen.png" target="_blank">View <img src="../images/extlink.svg"></a>
												</td>
											</tr>
											<tr>
												<td>
													<h6>Dental Advancement</h6>
													<p>Brush at least twice a day. ..<br>Use fluoridated toothpaste..</p>
												</td>
												<td>Videos</td>
												<td>
													<ul class="mb-0">
														<li class="top_details align-items-center">
															<div class="provider_pro_pic">
																<img src="../images/provider-pic.png">
															</div>
															<h5 class="provider_name text-dark">Scott Hawkings</h5>
														</li>
													</ul>
												</td>
												<td>
													<a href="../images/screen.png" target="_blank">View <img src="../images/extlink.svg"></a>
												</td>
											</tr>
											<tr>
												<td>
													<h6>Brushing Advice</h6>
													<p>Brush at least twice a day. ..<br>Use fluoridated toothpaste..</p>
												</td>
												<td>Videos</td>
												<td>
													<ul class="mb-0">
														<li class="top_details align-items-center">
															<div class="provider_pro_pic">
																<img src="../images/provider-pic.png">
															</div>
															<h5 class="provider_name text-dark">Scott Hawkings</h5>
														</li>
													</ul>
												</td>
												<td>
													<a href="../images/screen.png" target="_blank">View <img src="../images/extlink.svg"></a>
												</td>
											</tr>
											<tr>
												<td>
													<h6>Molar Teeths</h6>
													<p>Brush at least twice a day. ..<br>Use fluoridated toothpaste..</p>
												</td>
												<td>Articles</td>
												<td>
													<ul class="mb-0">
														<li class="top_details align-items-center">
															<div class="provider_pro_pic">
																<img src="../images/provider-pic.png">
															</div>
															<h5 class="provider_name text-dark">Scott Hawkings</h5>
														</li>
													</ul>
												</td>
												<td>
													<a href="../images/screen.png" target="_blank">View <img src="../images/extlink.svg"></a>
												</td>
											</tr>
											<tr>
												<td>
													<h6>Advantages of Braces</h6>
													<p>Brush at least twice a day. ..<br>Use fluoridated toothpaste..</p>
												</td>
												<td>Videos</td>
												<td>
													<ul class="mb-0">
														<li class="top_details align-items-center">
															<div class="provider_pro_pic">
																<img src="../images/provider-pic.png">
															</div>
															<h5 class="provider_name text-dark">Scott Hawkings</h5>
														</li>
													</ul>
												</td>
												<td>
													<a href="../images/screen.png" target="_blank">View <img src="../images/extlink.svg"></a>
												</td>
											</tr>
											<tr>
												<td>
													<h6>Whitening effects </h6>
													<p>Brush at least twice a day. ..<br>Use fluoridated toothpaste..</p>
												</td>
												<td>Articles</td>
												<td>
													<ul class="mb-0">
														<li class="top_details align-items-center">
															<div class="provider_pro_pic">
																<img src="../images/provider-pic.png">
															</div>
															<h5 class="provider_name text-dark">Scott Hawkings</h5>
														</li>
													</ul>
												</td>
												<td>
													<a href="../images/screen.png" target="_blank">View <img src="../images/extlink.svg"></a>
												</td>
											</tr>
											<tr>
												<td>
													<h6>10 Dental Advice </h6>
													<p>Brush at least twice a day. ..<br>Use fluoridated toothpaste..</p>
												</td>
												<td>Articles</td>
												<td>
													<ul class="mb-0">
														<li class="top_details align-items-center">
															<div class="provider_pro_pic">
																<img src="../images/provider-pic.png">
															</div>
															<h5 class="provider_name text-dark">Scott Hawkings</h5>
														</li>
													</ul>
												</td>
												<td>
													<a href="../images/screen.png" target="_blank">View <img src="../images/extlink.svg"></a>
												</td>
											</tr>
										</table>
									</div>        
								</div>
								<!-- patient education tab end -->
								<!-- reports tab -->
								<div class="tab-pane fade" id="patient_reports" role="tabpanel" aria-labelledby="three-tab">
									<div class="patient_education_table table-responsive">
										<table class="table table_p_education">
											<tr>
												<th>REPORT DATE</th>
												<th>PROVIDER</th>
												<th>ACTION</th>
											</tr>
											<tr>
												<td>
													<p>16-oct-2019</p>
												</td>
												<td>
													<ul class="mb-0">
														<li class="top_details align-items-center">
															<div class="provider_pro_pic">
																<img src="../images/provider-pic.png">
															</div>
															<h5 class="provider_name text-dark">Scott Hawkings</h5>
														</li>
													</ul>
												</td>
												<td>
													<a href="javascript:void(0);">Download PDF </a>
												</td>
											</tr>
											<tr>
												<td>
													<p>10-oct-2019</p>
												</td>
												<td>
													<ul class="mb-0">
														<li class="top_details align-items-center">
															<div class="provider_pro_pic">
																<img src="../images/provider-pic.png">
															</div>
															<h5 class="provider_name text-dark">Scott Hawkings</h5>
														</li>
													</ul>
												</td>
												<td>
													<a href="javascript:void(0);">Download PDF </a>
												</td>
											</tr>
											<tr>
												<td>
													<p>09-oct-2019</p>
												</td>
												<td>
													<ul class="mb-0">
														<li class="top_details align-items-center">
															<div class="provider_pro_pic">
																<img src="../images/provider-pic.png">
															</div>
															<h5 class="provider_name text-dark">Scott Hawkings</h5>
														</li>
													</ul>
												</td>
												<td>
													<a href="javascript:void(0);">Download PDF </a>
												</td>
											</tr>
											<tr>
												<td>
													<p>05-oct-2019</p>
												</td>
												<td>
													<ul class="mb-0">
														<li class="top_details align-items-center">
															<div class="provider_pro_pic">
																<img src="../images/provider-pic.png">
															</div>
															<h5 class="provider_name text-dark">Scott Hawkings</h5>
														</li>
													</ul>
												</td>
												<td>
													<a href="javascript:void(0);">Download PDF </a>
												</td>
											</tr>
											<tr>
												<td>
													<p>16-Sep-2019</p>
												</td>
												<td>
													<ul class="mb-0">
														<li class="top_details align-items-center">
															<div class="provider_pro_pic">
																<img src="../images/provider-pic.png">
															</div>
															<h5 class="provider_name text-dark">Scott Hawkings</h5>
														</li>
													</ul>
												</td>
												<td>
													<a href="javascript:void(0);">Download PDF </a>
												</td>
											</tr>
											<tr>
												<td>
													<p>14-Set-2019</p>
												</td>
												<td>
													<ul class="mb-0">
														<li class="top_details align-items-center">
															<div class="provider_pro_pic">
																<img src="../images/provider-pic.png">
															</div>
															<h5 class="provider_name text-dark">Scott Hawkings</h5>
														</li>
													</ul>
												</td>
												<td>
													<a href="javascript:void(0);">Download PDF </a>
												</td>
											</tr>
											<tr>
												<td>
													<p>11-Set-2019</p>
												</td>
												<td>
													<ul class="mb-0">
														<li class="top_details align-items-center">
															<div class="provider_pro_pic">
																<img src="../images/provider-pic.png">
															</div>
															<h5 class="provider_name text-dark">Scott Hawkings</h5>
														</li>
													</ul>
												</td>
												<td>
													<a href="javascript:void(0);">Download PDF </a>
												</td>
											</tr>
										</table>
									</div>        
								</div>
								<!-- reports tab end -->
							</div>
							<!-- tab content end -->
						</div>
					</div>
				</div>
			</div>
			<!-- right content part end -->
		</div>
	</section>

	<!-- Medical records images Modal -->
	<div id="row1" class="modal fade modal_lightbox" role="dialog">
	  	<div class="modal-dialog modal-dialog-centered">
	  		<img src="../images/image36.png">
	  	</div>
	</div>
	<!-- Medical records images Modal end -->
	<!-- Medical records images Modal -->
	<div id="row2" class="modal fade modal_lightbox" role="dialog">
	  	<div class="modal-dialog modal-dialog-centered">
	  		<img src="../images/image36.png">
	  	</div>
	</div>
	<!-- Medical records images Modal end -->
	<!-- Medical records images Modal -->
	<div id="row3" class="modal fade modal_lightbox" role="dialog">
	  	<div class="modal-dialog modal-dialog-centered">
	  		<img src="../images/image36.png">
	  	</div>
	</div>
	<!-- Medical records images Modal end -->
	<!-- Medical records images Modal -->
	<div id="row4" class="modal fade modal_lightbox" role="dialog">
	  	<div class="modal-dialog modal-dialog-centered">
	  		<img src="../images/image36.png">
	  	</div>
	</div>
	<!-- Medical records images Modal end -->
	<!-- Medical records images Modal -->
	<div id="row5" class="modal fade modal_lightbox" role="dialog">
	  	<div class="modal-dialog modal-dialog-centered">
	  		<img src="../images/image36.png">
	  	</div>
	</div>
	<!-- Medical records images Modal end -->
	<!-- Medical records images Modal -->
	<div id="row6" class="modal fade modal_lightbox" role="dialog">
	  	<div class="modal-dialog modal-dialog-centered">
	  		<img src="../images/image36.png">
	  	</div>
	</div>
	<!-- Medical records images Modal end -->
	<!-- Medical records images Modal -->
	<div id="row7" class="modal fade modal_lightbox" role="dialog">
	  	<div class="modal-dialog modal-dialog-centered">
	  		<img src="../images/image36.png">
	  	</div>
	</div>
	<!-- Medical records images Modal end -->

	<?php include 'footer.php'; ?>