$(function(){
	$('.nav-tabs a:first').tab('show');
});

$('a.btn-info').tooltip();

$('#artCarousel').carousel({
	interval:5000,
	cycle:true
});

$(function(){
	//mak menu drop automatically
	$('ul.nav.nav-justified li.dropdown.pic').hover(function(){

	$('.dropdown-menu', this).fadeIn();
	},function(){
	$('.dropdown-menu', this).fadeOut('fast');
	});//hover

});//JQuery is loaded



$(function(){

//highlight the current nav
$("#home a:contains('HOME')").parent().addClass('active');
$("#reservation a:contains('RESERVATION')").parent().addClass('active');
$("#contact a:contains('CONTACT')").parent().addClass('active');
$("#facilities a:contains('FACILITIES')").parent().addClass('active');
$("#apertment a:contains('APARTMENT')").parent().addClass('active');
$("#houserule a:contains('HOUSE RULES')").parent().addClass('active');
});

