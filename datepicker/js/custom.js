var base_url = window.location.origin;

var host = window.location.host;

var pathArray = window.location.pathname.split( '/' )[1];

var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];




/*document.onclick = function(){

console.log('click document');

};*/

/*
var submit     = document.getElementById("submit");
var startdate  = document.getElementById("datetimepicker2").value;
var enddate    = document.getElementById("datetimepicker1").value;*/

/*submit.onclick = function(){
console.log('click submit');
/*console.log(startdate.value);
console.log(enddate.value);*/
//}



//var start = $("#datetimepicker2").val();
//var end = $("#datetimepicker1").val();
//var d = $("#datetimepicker2").datetimepicker().val();
//console.log(start);
//console.log(end);
//console.log(d);

$("#submit").on( 'click', function () {
var startdate  = document.getElementById("datetimepicker2").value;
var enddate    = document.getElementById("datetimepicker1").value;
    $.ajax({
        type: 'post',
        url: 'thanks.php',
        data: {
            source1: startdate,
            source2: enddate
        },
        success: function( data ) {
            console.log( data );
        }
    });
})

$("#book").on( 'click', function () {
var startdate  = document.getElementById("datetimepicker2").value;
var enddate    = document.getElementById("datetimepicker1").value;

    alert('click the book button');
     $('button').prop('disabled', true);
    // alert('startdate'+ startdate);
      //alert('enddate'+ enddate);
       $.ajax({
        type: 'post',
        url: 'thanks.php',
        data: {
            source1: startdate,
            source2: enddate
        },
        success: function( data ) {
            console.log( data );
        }
    });
})



console.log(base_url);
console.log(host);
console.log(pathArray);
console.log(getUrl);
console.log(baseUrl);
console.log('new' + baseUrl +'/new');

function getJson(url) {
 return JSON.parse($.ajax({
     type: 'GET',
     url: url,
     dataType: 'json',
     global: false,
     async:false,
     success: function(data) {
   return data;
     }
 }).responseText);
}
 
var disableddates = getJson('datepicker/Date/date.json');


$('#datetimepicker2').datetimepicker({
	beforeShowDay: DisableSpecificDates,
	formatDate:'Y.n.j',
	lang:'ch',
	timepicker:false,
	format:'Y-n-j',
	formatDate:'Y-n-j'
});

$('#datetimepicker1').datetimepicker({
	beforeShowDay: DisableSpecificDates,
	formatDate:'Y.n.j',
	lang:'ch',
	timepicker:false,
	format:'Y-n-j',
	formatDate:'Y-n-j'
	
});



 /** Days to be disabled as an array */
//var disableddates = ["12-3-2014", "12-11-2014", "12-25-2014", "12-20-2014"];

//var disableddates =	["2015-12-12","2015-12-14","2015-12-12","2015-12-13"];

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

function selectate(){

  console.log('select value');
}