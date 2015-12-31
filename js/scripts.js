$(document).ready(function(){

	/*
		Dropdown dox user-dropdown in div id=box-user
	*/
	$("#box-user").click(function(){
		$("#user-dropdown").toggle(300);
	})


	/*
		Display submenu
	*/

	$(".list-item li").hover(function(){
		$(this).find(".submenu:first").css({'visibility':'visible', 'display':'none'}).show(300);
	}, function(){
		$(this).find(".submenu:first").css({'visibility':'hidden'}).hide(300);
	})


	//$('.box-btn a').addClass('btn btn-default btn-sm');
	$('.user-btn a').addClass('btn btn-default btn-sm');

	/*
		Set scrollbar for .menu
	*/

//	$(window).load(function(){
//        $(".menu").mCustomScrollbar({
//			scrollButtons:{enable:true},
//			theme:"light",
//        });
//    });
//
//	/*
//		Set scrollbar for .main-content
//	*/
//
//	$(window).load(function(){
//        $(".main-content").mCustomScrollbar({
//        	theme:'dark',
//        });
//    });
//
//	/*
//		Set scrollbar for #sidebar
//	*/
//
//	$(window).load(function(){
//        $("#sidebar").mCustomScrollbar({
//        	theme:'dark',
//        });
//    });
//
//	/*
//		Set scrollbar for #main-content
//	*/
//
//	$(window).load(function(){
//        $("#main-content").mCustomScrollbar({
//        	theme:'dark',
//        });
//    });

})