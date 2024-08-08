
		<!-- links -->
		<script src="js/jquery.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="https://unpkg.com/multiple-select@1.3.1/dist/multiple-select.min.js"></script>
		<!-- links end -->
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();   
			});
		</script>
		<script>
			$(function() {
				$( "#datepicker" ).datepicker({
					changeMonth: true,
					changeYear: true,
				});
			});
			$(function() {
				$( "#datepicker2, #datepicker3" ).datepicker({
					changeMonth: true,
					changeYear: true,
				});
			});
			$(function() {
				$( "#datepicker_confirm_detials" ).datepicker({
					changeMonth: true,
					changeYear: true,
				});
			});
		</script>
		<script>
			$(function() {
				$('#selectLocation').multipleSelect({
					selectAll: false
				});
				$('#selectPackage').multipleSelect({
					selectAll: false
				});
				$('#selectProvider').multipleSelect({
					selectAll: false
				});
			});
		</script>
		<script>
			$("#confirm_btn").click(function(){
				$(".success_confirmed").addClass('block');
				setTimeout(function(){
					$('.success_confirmed').removeClass('block');
				},5000);
			});
		</script>
		<script>
			$(document).ready(function() {
				var owl = $('.pick-date');
				owl.owlCarousel({
					dots: false,
					nav: true,
					loop: true,
					navText : ["Prev","Next"],
					responsive: {
						0: {
							items: 2
						},
						600: {
							items: 3
						},
						1000: {
							items: 5
						}
					}
				})
			})
		</script>
	</body>
	</html>
