$(document).ready(function(){

	/*
		Dropdown dox user-dropdown in div id=box-user
	*/
	$("#box-user").hover(function(){
		$("#user-dropdown").show(300);
	}, function(){
		$("#user-dropdown").hide(300);
	})

	/*
		Set height for #content
	*/

	var header = $("#header").height();
	var footer = $("#footer").height();
	var content = $("#content").height();
	var height = $(window).height() - header - footer;
	if(content < height){
		$("#content").css('min-height', height+"px");
	}

	/*
		Add class from-control for input search
	*/

	$(".filters td input").addClass('form-control');

})