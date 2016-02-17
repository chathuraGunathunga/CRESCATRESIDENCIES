$(document).ready(function() {

			//var d = new Date('yy/mm/dd');
			var path_folder = window.location.pathname.split( '/' )[1];
			var base_url = window.location.origin;
			var url = base_url+'/'+path_folder+'/';
			console.log(url);
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: currentDate(),
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			events: {
				url: url+'calanderthem/php/get-events.php',
				error: function() {
					$('#script-warning').show();
				}
			},
			loading: function(bool) {
				$('#loading').toggle(bool);
			}
		});
		
	});

	function currentDate(){

		var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();

			if(dd<10) {
    		dd='0'+dd
			} 
			if(mm<10) {
   		 	mm='0'+mm
			} 
		   today = yyyy+'-'+mm+'-'+dd;
			console.log(today);

  		return today;
}

var disableddates =	["2015-12-12","2015-12-14","2015-12-12","2015-12-13"];

function DisableSpecificDates(date) {


 var m = date.getMonth();
 var d = date.getDate();
 var y = date.getFullYear();

 console.log(m);
 
 // First convert the date in to the mm-dd-yyyy format 
 // Take note that we will increment the month count by 1 
// var currentdate = (m + 1) + '-' + d + '-' + y ;
 var currentdate =  y + '-' + (m + 1) + '-' + d ;
  // We will now check if the date belongs to disableddates array 
 for (var i = 0; i < disableddates.length; i++) {
 
 // Now check if the current date is in disabled dates array. 
 if ($.inArray(currentdate, disableddates) != -1 ) {
 return [false];
 }
 }
 
}