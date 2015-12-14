$(document).ready(function(){

	/*
		Dropdown dox user-dropdown in div id=box-user
	*/
	$("#box-user").click(function(){
		$("#user-dropdown").toggle(300);
	})

	/*
		Set height for #content
	*/

	var header = $("#header").height();
	var footer = $("#footer").height();
	var content = $("#content").height();
	var height = $(window).height() - header - footer;
	if(height < 500)
		height = 500;

	$("#content").css('height', height+"px");
	$("#main-content").css('height', height+"px");
	$(".main-content").css('height', height+"px");

	/*
		Add class from-control for input search
	*/

	$(".filters td input").addClass('form-control');

	/*
		Display submenu
	*/

	$(".list-item li").hover(function(){
		$(this).find(".submenu:first").css({'visibility':'visible', 'display':'none'}).show(300);
	}, function(){
		$(this).find(".submenu:first").css({'visibility':'hidden'}).hide(300);
	})

	/*
		Add class {.btn .btn-default btn-sm} to tag a in .box-btn and add it to tag a in .user-btn
	*/

	$('.box-btn a').addClass('btn btn-default btn-sm');
	$('.user-btn a').addClass('btn btn-default btn-sm');

})