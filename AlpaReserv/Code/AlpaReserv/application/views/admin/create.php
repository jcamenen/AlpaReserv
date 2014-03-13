<form method="post" action="traitement.php">
	<label>Salle polyvalente : </label>
	<select name="salle_polyvalente" >
	   <option value="salle_polyvalente_1">Salle Polyvalente 1</option>
	   <option value="salle_polyvalente_2">Salle Polyvalente 2</option>
	</select>
	<br>




	<label>Du </label>
	<input type="text" id="datepicker">
	<script>
		$(function() {
			$( "#datepicker" ).datepicker();
		});
	</script>
	<input type="time" name="heure_debut">


	<label>au </label>
	<input type="text" id="datepicker2">
	<script>
		$(function() {
			$( "#datepicker2" ).datepicker();
		});
	</script>
	<input type="time" name="heure_fin">




</form>