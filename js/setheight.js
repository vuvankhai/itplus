$(document).ready(function(){
	var h_header = $("#header").height();
	var h_footer = $("#footer").height();
	var h_content = $("#content").height();
	var height = $(window).height() - h_header - h_footer;
	if(h_content < height){
		$("#content").css('height', height+"px");
	} else {
		$("#content").css('height', h_content+200+"px");
	}
	

})