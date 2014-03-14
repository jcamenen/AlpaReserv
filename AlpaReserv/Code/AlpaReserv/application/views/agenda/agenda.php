<?=$calendarEvents?>
<script>

$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
    	header:
    	{
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
		},
	    height:400,
	    events: listOfEvents,
	    firstDay :1,
	    firstHour : 7,
	    axisFormat: 'HH:mm',
		timeFormat: 'HH:mm',
		columnFormat :
		{
		    month: 'ddd',
		    week: 'ddd d/M',
		    day: 'dddd d/M'
		},
		titleFormat :
		{
		    month: 'MMMM yyyy',                             // September 2009
		    week: "d[ yyyy]{ '&#8212;'[ MMM] d MMM yyyy}", // Sep 7 - 13 2009
		    day: 'dddd d MMM yyyy'                  // Tuesday, Sep 8, 2009
		},
		monthNames: ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre" ], 
		monthNamesShort: ["Jan","Fev","Mar","Avr","Mai","Juin","Juil", "Aou", "Sep", "Oct", "Nov", "Dec" ],
		dayNames: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
		dayNamesShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
		buttonText:
		{
			today: "Aujourd'hui",
			month: 'Mois',
			week: 'Semaine',
			day: 'Jour'
		},
		allDayDefault :false,
		allDaySlot :false,
		eventClick: function(calEvent)
		{
			if(calEvent.description == undefined)
			{
	        	alert('Evenement prive');
			}
			else
			{
				alert('Description : ' +calEvent.description);
			}
    	}
	});

});
</script>
<div id="calendar">
</div>