$(".click-sidemenu").click(function(){
	$("body").addClass("has-offcanvas");
});
$(".close-sidemenu, .offcanvas-overlay, .close_success_two").click(function(){
	$("body").removeClass("has-offcanvas");
});
$('.close-sidemenu, #click_sidemenu_appointment_confirmed, .offcanvas-overlay, .back_provider, .back_confirm').on('click', function() { 
$('.facebook-video').each(function(){
	this.contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*'); 
})
});

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

/*learn_provider*/
$("#learn_provider").click(function(){
	$(".offcanvas-packages-list, offcanvas-packages-detail").css('display', 'none');
	$(".provider_details").css('display', 'block');
	$(".explore_location").css('display', 'none');
});
$(".back_provider").click(function(){
	$(".offcanvas-packages-list, offcanvas-packages-detail").css('display', 'block');
	$(".provider_details").css('display', 'none');
});
/*learn_provider*/

/*explore_location*/
$("#explore_location").click(function(){
	$(".offcanvas-packages-list, offcanvas-packages-detail").css('display', 'none');
	$(".explore_location").css('display', 'block');
	$(".provider_details").css('display', 'none');
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
	$(".offcanvas_confirm").css('display', 'none');
});*/


$("#click_sidemenu_appointment_confirmed").click(function(){
	$(".offcanvasform").hide();
	$(".payment-modal").show();
});

$(".back-to-detail").click(function(){
	$(".offcanvasform").show();
	$(".payment-modal").hide();
});

$("#pay_amount").click(function(){
	$(".payment-modal").hide();
	$(".offcanvas_confirm").show();
});
/*
$(".close_sidemenu_appointment_confirmed, .offcanvas-overlay").click(function(){
	$(".offcanvasform").css('display', 'block');
	$(".offcanvas_confirm").css('display', 'none');
});
*/

$(".promo_video").click(function(){
	$(".offcanvas_confirm").addClass('video__');
});
$(".back_confirm").click(function(){
	$(".offcanvas_confirm").removeClass('video__');
});


/*pachage for mobile*/

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

/*pachage for mobile end*/

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

	/*$(".promo_video_mobile").click(function(){
		$("body").addClass("has-popup");
		$(".explore_location_mobile1").show();
	});
	$(".back_confirm").click(function(){
		$("body").removeClass("has-popup");
		$(".explore_location_mobile1").hide();
	});*/

/*promo video mobile end*/


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
	$(".offcanvasTwoform").hide();
})

$('.aj_priv_box').click(function() {
   $('.aj_priv_box').removeClass('active');
   $(this).addClass('active');
});

$('#proceed_to_check').click(function() {
	$('.payment-method').hide();
	$('.pay-here').show();
})