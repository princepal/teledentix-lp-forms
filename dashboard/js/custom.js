$(".click-sidemenu").click(function(){
	$("body").addClass("has-offcanvas");
});
$(".close-sidemenu, .offcanvas-overlay").click(function(){
	$("body").removeClass("has-offcanvas");
});

/*for video pouse*/
$('.close-sidemenu, #click_sidemenu_appointment_confirmed, .offcanvas-overlay, .back_provider, .back_confirm, .video-pause').on('click', function() { 
$('.facebook-video').each(function(){
	this.contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*'); 
})
});
/*for video pouse*/

/*show hide package*/
$(".show-pack-detail1").click(function(){
	$(".offcanvas-packages-list").addClass("hide-pack-list");
	$(".offcanvas-packages-detail1").addClass("show-packdetail");
});
$(".show-pack-detail2").click(function(){
	$(".offcanvas-packages-list").addClass("hide-pack-list");
	$(".offcanvas-packages-detail2").addClass("show-packdetail");
});
$(".show-pack-detail3").click(function(){
	$(".offcanvas-packages-list").addClass("hide-pack-list");
	$(".offcanvas-packages-detail3").addClass("show-packdetail");
});
$(".back-pack-detail, #learn_provider, #explore_location").click(function(){
	$(".offcanvas-packages-list").removeClass("hide-pack-list");
	$(".offcanvas-packages-detail").removeClass("show-packdetail");
});

$(".show-pack-detail").click(function(){
	$(this).toggleClass("active");
});
/*show hide package*/

$(".popupcl1").click(function(){
	$("body").addClass("has-popup");
	$(".popup-main1").show();
});
$(".popupcl2").click(function(){
	$("body").addClass("has-popup");
	$(".popup-main2").show();
});
$(".popupcl3").click(function(){
	$("body").addClass("has-popup");
	$(".popup-main3").show();
});
$(".close-popup1").click(function(){
	$("body").removeClass("has-popup");
	$(".popup-main1").hide();
});
$(".close-popup2").click(function(){
	$("body").removeClass("has-popup");
	$(".popup-main2").hide();
});
$(".close-popup3").click(function(){
	$("body").removeClass("has-popup");
	$(".popup-main3").hide();
});

/*slider loging end*/

/*login animation*/
$( "#right" ).click(function() {
$('.login_animate').hide();
$('.background-img').animate({'opacity': '0'}, 600);

  var w = $( window ).width();
  	if (w<992) {
  		$(".login_form" ).animate({ "left": "345px" }, 600);
	}else{
  	 	$(".login_form" ).animate({"left": "490px" }, 600);
  	}
   setTimeout(function(){ 
   	$('.register_animate').show(); 
   	$('.background-img').animate({'opacity': '1'}, 600);
   	$('.background-img').css('opacity', 0);
   	$('.background-img').attr('src', '../images/signupbg.png');
   	$('.background-img').css('opacity', 1);
   }, 600);

   
});
 
$( "#left" ).click(function(){
	$('.register_animate').hide();
	$('.background-img').animate({'opacity': '0'}, 600);
  $( ".login_form" ).animate({ "left": "20px" }, 600 );
  setTimeout(function(){ 
  	$('.login_animate').show();
  	$('.background-img').animate({'opacity': '1'}, 600);
  	$('.background-img').css('opacity', 0);
  	$('.background-img').attr('src', '../images/loginbg.png');
  	$('.background-img').css('opacity', 1);
  }, 600);
  
});
/*login animation end*/
/*forgot password*/
$(".forgot_psw").click(function(){
	$(".forgot_password_form").css("display", "block");
	$(".login_form_show").css("display", "none");
});
$(".forgot_btn").click(function(){
	$(".forgot_password_form").css("display", "none");
	$(".login_form_show").css("display", "block");
});
/*forgot password end*/


/*learn_provider*/
$("#learn_provider").click(function(){
	$(".offcanvas-packages-list, offcanvas-packages-detail").css('display', 'none');
	$(".provider_detail").css('display', 'block');
	$(".explore_location").css('display', 'none');
});
$(".back_provider").click(function(){
	$(".offcanvas-packages-list, offcanvas-packages-detail").css('display', 'block');
	$(".provider_detail").css('display', 'none');
});
/*learn_provider*/

/*explore_location*/
$("#explore_location").click(function(){
	$(".offcanvas-packages-list, offcanvas-packages-detail").css('display', 'none');
	$(".explore_location").css('display', 'block');
	$(".provider_detail").css('display', 'none');
});
$(".back_provider").click(function(){
	$(".offcanvas-packages-list, offcanvas-packages-detail").css('display', 'block');
	$(".explore_location").css('display', 'none');
});
/*explore_location*/

$(".success_confirmed").click(function(){
	$(".offcanvasform").css('display', 'block');
	$(".confirm_details_slide").css('display', 'none');
});
/*$(".close_sidemenu_appointment_confirmed, .offcanvas-overlay").click(function(){
	$(".offcanvasform").css('display', 'block');
	$(".offcanvas_confirm_sidebar").css('display', 'none');
});*/


$("#click_sidemenu_appointment_confirmed").click(function(){
	$(".offcanvasform").css('display', 'none');
	$(".offcanvas_confirm_sidebar").css('display', 'block');
});

$(".close_sidemenu_appointment_confirmed, .offcanvas-overlay").click(function(){
	$(".offcanvasform").css('display', 'block');
	$(".offcanvas_confirm_sidebar").css('display', 'none');
});

$("#click_reschedule_appointment_confirmed").click(function(){
	$(".reschedule_appointment_sidebar").css('display', 'none');
	$(".offcanvas_confirm_reschedule_sidebar").css('display', 'block');
});

$(".close_confirm_reschedule_sidebar, .offcanvas-overlay").click(function(){
	$(".offcanvas_confirm_reschedule_sidebar").css('display', 'none');
	$(".reschedule_appointment_sidebar").css('display', 'block');
});


$(".promo_video").click(function(){
	$(".offcanvas_confirm_sidebar").addClass('video__');
});
$(".back_confirm").click(function(){
	$(".offcanvas_confirm_sidebar").removeClass('video__');
});

$(".promo_video").click(function(){
	$(".offcanvas_confirm_reschedule_sidebar").addClass('video_reschedule');
});
$(".back_confirm").click(function(){
	$(".offcanvas_confirm_reschedule_sidebar").removeClass('video_reschedule');
});


/*reschedule appointment*/
$(".reschedule_appointment").click(function(){
	$(".book_appointment_dash").css('display', 'none');
	$(".reschedule_appointment_sidebar").css('display', 'block');
	$(".offcanvasTwoform").css('display', 'none');
});
/*reschedule appointment end*/

/*book_an_appointment*/
$(".book_an_appointment").click(function(){
	$(".reschedule_appointment_sidebar").css('display', 'none');
	$(".book_appointment_dash").css('display', 'block');
	$(".offcanvasTwoform").css('display', 'none');
});
/*book_an_appointment end*/

/*video call sechedule sidebar*/
$(".open_schedule_video_call_sidebar").click(function(){
	$(".schedule_video_call_sidebar").addClass('open-slide');
	$(".offcanvas-overlay").addClass('active');
	$("body").css('overflow', 'hidden');
});
$(".close-sidemenu, .offcanvas-overlay").click(function(){
	$(".schedule_video_call_sidebar").removeClass('open-slide');
	$(".offcanvas-overlay").removeClass('active');
	$("body").css('overflow', 'auto');
});
/*video call sechedule sidebar*/

/*cancel appointment sidebar*/
$(".open_cancel_appointment_sidebar").click(function(){
	$(".cancel_appointment_sidebar").addClass('open-slide');
	$(".offcanvas-overlay").addClass('active');
	$("body").css('overflow', 'hidden');
});
$(".close-sidemenu, .offcanvas-overlay, .cancel_payment_btn").click(function(){
	$(".cancel_appointment_sidebar").removeClass('open-slide');
	$(".offcanvas-overlay").removeClass('active');
	$("body").css('overflow', 'auto');
});
/*cancel appointment sidebar*/

/*cancel appointment sidebar*/
$(".cancel_payment_btn").click(function(){
	$(".paymentcancel_appointment_sidebar").addClass('open-slide');
	$(".offcanvas-overlay").addClass('active');
	$("body").css('overflow', 'hidden');
});
$(".close-sidemenu, .offcanvas-overlay, .back-pack-detail, .book_an_appointment").click(function(){
	$(".paymentcancel_appointment_sidebar").removeClass('open-slide');
	$(".offcanvas-overlay").removeClass('active');
	$("body").css('overflow', 'auto');
});
/*cancel appointment sidebar*/

$('.aj_priv_box').click(function() {
   $('.aj_priv_box').removeClass('active');
   $(this).addClass('active');
});

/*provider details mobile*/

	$("#learn_provider_mobile").click(function(){
		$("body").addClass("has-popup");
		$(".provider_details_mobile").show();
	});
	$(".back_provider").click(function(){
		$("body").removeClass("has-popup");
		$(".provider_details_mobile").hide();
	});

/*provider details mobile end*/
/*explore location mobile*/

	$("#explore_location_mobile").click(function(){
		$("body").addClass("has-popup");
		$(".explore_location_mobile").show();
	});
	$(".back_provider").click(function(){
		$("body").removeClass("has-popup");
		$(".explore_location_mobile").hide();
	});

/*explore location mobile end*/

/*promo video mobile*/

	$(".promo_video_mobile").click(function(){
		$("body").addClass("has-popup");
		$(".explore_location_mobile1").show();
	});
	$(".back_confirm").click(function(){
		$("body").removeClass("has-popup");
		$(".explore_location_mobile1").hide();
	});

/*promo video mobile end*/
/*dashboard book now*/

	$("#dashboard_book_bow").click(function(){
		$(".book_appointment_dash").css('max-width', '680px');
		$(".book_appointment_dash").css('display', 'none');
		$(".offcanvas_confirm_sidebar").css('display', 'block');
		$(".book_appointment_dash .offcanvas-left, .book_appointment_dash .appointment_for").css('display', 'none');
	});
	$(".close-sidemenu, .offcanvas-overlay").click(function(){
		$(".book_appointment_dash").css('display', 'block');
		$(".book_appointment_dash .offcanvas-left").css('display', 'block');
		$(".offcanvas_confirm_sidebar").css('display', 'none');
		$(" .book_appointment_dash .appointment_for").css('display', 'block');
		$(".book_appointment_dash").css('max-width', '1015px');
	});

/*dashboard book now end */
/*dashboard book now*/

	$("#click_reschedule_appointment_confirmed").click(function(){
		$(".offcanvas_confirm_reschedule_sidebar").css('display', 'block');
		$(".reschedule_appointment_sidebar").css('display', 'none');
	});
	$(".close_sidemenu_appointment_confirmed").click(function(){
		$(".offcanvas_confirm_reschedule_sidebar").css('display', 'none');
		$(".reschedule_appointment_sidebar").css('display', 'block');
	});


	$(".aj_priv_box").click(function(){
		$(".paymen_method_btn .payment-method").css('display', 'none');
		$(".paymen_method_btn .pay-here").css('display', 'block');
	});
	$(".pay-sidemenu").click(function(){
		$(".paymen_method_btn .pay-here").css('display', 'none');
		$(".cencelled_confirmed").css('display', 'block');
		$(".payment_method_title").css('display', 'none');
		$(".paymentcancel_appointment_sidebar .offcanvas-left").css('display', 'none');
		$(".paymentcancel_appointment_sidebar .offcanvas-right").css('width', '100%');
		$(".paymentcancel_appointment_sidebar").css('max-width', '598px');
	});
	$(".cancel_done").click(function(){
		$(".paymen_method_btn .payment-method").css('display', 'block');
		$(".cencelled_confirmed").css('display', 'none');
		$(".payment_method_title").css('display', 'block');
		$(".paymentcancel_appointment_sidebar .offcanvas-left").css('display', 'block');
		$(".paymentcancel_appointment_sidebar .offcanvas-right").css('width', 'calc(100% - 400px)');
		$(".paymentcancel_appointment_sidebar").css('max-width', '1015px');
	});

/*dashboard book now end *//*dashboard book now*/

	$("#click_reschedule_videocall").click(function(){
		$(".sechudle_video_call.confirm_").css('display', 'block');
		$(".sechudle_video_call.show_").css('display', 'none');
	});
	$(".close-sidemenu").click(function(){
		$(".sechudle_video_call.confirm_").css('display', 'none');
		$(".sechudle_video_call.show_").css('display', 'block');
	});

/*dashboard book now end */


$("#next-form2").click(function(){
	$(".form-one-btn").removeClass("current");
	$(".form-one-btn").addClass("active");
	$(".form-two-btn").addClass("current");
	$(".form-one-new").hide();
	$(".form-two-new").show();

})
$("#next-form3").click(function(){
	$(".form-two-btn").removeClass("current");
	$(".form-two-btn").addClass("active");
	$(".form-three-btn").addClass("current");
	$(".form-two-new").hide();
	$(".form-three-new").show();
})
$("#submit-two-forms").click(function(){
	$(".form-three-btn").addClass("active");
	$(".form-three-btn").removeClass("current");
})
$("#back-form2").click(function(){
	$(".form-two-btn").addClass("current");
	$(".form-two-btn").removeClass("active");
	$(".form-three-btn").removeClass("active");
	$(".form-three-btn").removeClass("current");
	$(".form-two-new").show();
	$(".form-three-new").hide();
})
$("#back-form1").click(function(){
	$(".form-one-btn").addClass("current");
	$(".form-one-btn").removeClass("active");
	$(".form-two-btn").removeClass("active");
	$(".form-two-btn").removeClass("current");
	$(".form-one-new").show();
	$(".form-two-new").hide();

})
$("#back-form").click(function(){
	$(".offcanvas_confirm ").show();
	$(".offcanvasTwoform").hide();
	$(".form-one-btn").addClass("current");
	$(".form-one-btn").removeClass("active");
})

$(".form-one-btn").click(function(){
	$(".form-two-new").hide();
	$(".form-one-new").show();
	$(".form-three-new").hide();
	$(".form-two-btn").removeClass("active");
	$(".form-one-btn").addClass("active");
	$(".form-three-btn").removeClass("active");

})
$(".form-two-btn").click(function(){
	$(".form-two-new").show();
	$(".form-one-new").hide();
	$(".form-three-new").hide();
	$(".form-one-btn").removeClass("active");
	$(".form-three-btn").removeClass("active");
	$(".form-two-btn").addClass("active");

})
$(".form-three-btn").click(function(){
	$(".form-two-new").hide();
	$(".form-one-new").hide();
	$(".form-three-new").show();
	$(".form-one-btn").removeClass("active");
	$(".form-three-btn").addClass("active");
	$(".form-two-btn").removeClass("active");

})
$("#check-in-online").click(function(){
	$(".offcanvasTwoform").show();
	$(".offcanvas_confirm").hide();
})
$("#submit-two-forms").click(function(){
	$(".twoform-success").show();
	$(".form-three-new").hide();
	$(".offcanvasTwoform").hide();
})
$(".close-sidemenu, .offcanvas-overlay").click(function(){
	$(".twoform-success").hide();
	$(".offcanvasTwoform").hide();
})

$(".sidemenu-form-one").click(function(){
	$(".reschedule_appointment_sidebar").hide();
	$(".book_appointment_dash").hide();
	$(".offcanvasTwoform").show();
	$(".form-one-new").show();
});