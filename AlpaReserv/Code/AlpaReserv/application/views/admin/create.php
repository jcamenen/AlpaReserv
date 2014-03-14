


<form method="post" action="traitement.php">
	
<h1>Création d'une réservation</h1>
<script>
  $(function() {
    $( "#accordion" ).accordion({
      heightStyle: "content"
    });
  });
</script>

<script>
  $(function() {
    $( document ).tooltip();
  });
</script>


<div id="accordion">
  <h3>Salle</h3>
  <div>
    Salle polyvalente : 
	<select name="salle_polyvalente" >
	   <option value="salle_polyvalente_1">Salle Polyvalente 1</option>
	   <option value="salle_polyvalente_2">Salle Polyvalente 2</option>
	</select>
	<br>
	<input type="checkbox" name="option1" value="Milk" id="rec"> <a href="#" title="500 personnes - 70€ - Sono">Grande salle</a> <br>
	<input type="checkbox" name="option1" value="Milk" id="rec"> <a href="#" title="100 personnes - 20€ ">Petite salle</a> <br>
	<input type="checkbox" name="option1" value="Milk" id="rec"> <a href="#" title="10 personnes - 50€ - Frigo, cuisinière">Cuisine</a> <br>
	<input type="checkbox" name="option1" value="Milk" id="rec"> <a href="#" title="0 personnes - 10€ ">Vestiaire</a> <br>

	<br>
	<br>

	Du 
	<input type="text" id="datepicker">
	<script>
		$(function() {
			$( "#datepicker" ).datepicker();
		});
	</script>
	<input type="time" name="heure_debut">


	au 
	<input type="text" id="datepicker2">
	<script>
		$(function() {
			$( "#datepicker2" ).datepicker();
		});
	</script>
	<input type="time" name="heure_fin">
	
	<br><br>

	Visibilité de la réservation sur l'agenda<br>
	<input type="radio" name="option1" id="public"> Publique
	<input type="radio" name="option1" id="private"> Privée

	<div id="raison"></div>

	<script>
		$( "#public" ).click(function() {
			$( "#raison" ).html("");
			$( "#raison" ).append("	<label>Libéllé</label> <input type=\"text\" name=\"nom`\"> <br> ");
			$( "#raison" ).append("	<label>Description</label> <input type=\"textarea\" name=\"adresse`\"> <br> ");
			
		});

		$( "#private" ).click(function() {
			$( "#raison" ).html("");
		});
	</script>

	<br><br>

	<input type="checkbox" name="option1" value="Milk" id="rec"> Réservation récurrente
	<br>
	<div id="recurrent"></div>
	<script>
		$( "#rec" ).click(function() {
			$( "#recurrent" ).html("");
			$( "#recurrent" ).append("test");
		});

		$( "#private" ).click(function() {
			$( "#raison" ).html("");
		});
	</script>

  </div>
  

  <!-- PARTIE CLIENT -->
  <h3>Client</h3>
  <div>
	<input type="radio" name="option1" value="nouveau" id="new"> Nouveau Client 
	<input type="radio" name="option1" value="existant" id="exist"> Client Existant
	<br><br>
	<div id="client"></div>


	<script>
		$( "#new" ).click(function() {
			$( "#client" ).html("");
			$( "#client" ).append( "Formulaire de création d'un nouveau client <br>" );
			$( "#client" ).append("	<label>Nom</label> <input type=\"text\" name=\"nom`\"> <br> ");
			$( "#client" ).append("	<label>Adresse</label> <input type=\"text\" name=\"adresse`\"> <br> ");
			$( "#client" ).append("	<label>Téléphone</label> <input type=\"text\" name=\"telephone`\"> <br> ");
			$( "#client" ).append("	<input type=\"checkbox\" name=\"option1\" value=\"Milk\"> Association <br> ");
			
		});

		$( "#exist" ).click(function() {
			$( "#client" ).html("");
			$( "#client" ).append( "Formulaire de recherche <br><br>" );
			$( "#client" ).append("	<label>Nom</label> <input type=\"search\" name=\"nom`\"> <br> ");
		});
	</script>
  </div>





  <!-- PARTIE EQUIPEMENT -->
  <h3>Equipement</h3>
  <div>
  	<div class="row">
  		<div class="col-md-8">
  
			
			<table class="table table-bordered">
				<colgroup>
				    <col class="col-xs-1">
				    <col class="col-xs-1">
				    <col class="col-xs-2">
				    <col class="col-xs-2">
		      	</colgroup>
				<th>#</th>
				<th>Choix</th>
				<th>Nom</th>
				<th>Prix unitaire</th>
				<tr>
					<td>1</td>
					<td>Obligatoire</td>
					<td>Sono</td>
					<td>0</td>
				</tr>


				<tr>
					<td>2</td>
					<td><input type="checkbox" name="option1" value="Milk"></td>
					<td>Frigo</td>
					<td>50</td>
				</tr>


				<tr>
					<td>3</td>
					<td><input type="number" name="option1" value="Milk"></td>
					<td>Chaise</td>
					<td>0.50</td>
				</tr>


				<tr>
					<td>4</td>
					<td><input type="number" name="option1" value="Milk"></td>
					<td>Table</td>
					<td>1</td>
				</tr>

			</table>
			</div>
		<div class="col-md-4"></div>
	</div>
  </div>
</div>
<h2 id="prix" >Prix total : 10€</h2>


<button style="text-align: right" type="button" class="btn btn-default btn-lg">Valider</button>
</form>
