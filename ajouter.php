

<?php 

require 'db.php';
$message="";

if (isset($_POST['nom']) && isset($_POST['prenom'])) {
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$sql='INSERT INTO personne (nom,prenom) VALUES (:nom, :prenom)';

	$statement=$connection->prepare($sql);
	
	if ($statement->execute([':nom' => $nom, ':prenom' => $prenom])) {
		$message = 'ajoute il exesit';
	}
}

 ?>

<?php require 'headre.php'; ?>

<div class="container">
	
<div class="card mt-5">
	
	<div class="card-header">
		<h2>ajouter un personne :</h2>

	</div>

	<div class="card-body">

         <?php if (!empty($message)): ?>

               <div class="alert alert-success">

               	<?= $message; ?>

               </div>
         <?php endif; ?>

		<form method="post">
			<div class="form-group">
				
				<label for="nom">Nom : </label>
				<input type="text" name="nom" id="nom" class="form-control">
			</div>

			<div class="form-group">
				
				<label for="prenom">Prenom : </label>
				<input type="prenom" name="prenom" id="prenom" class="form-control">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-info">valide</button>
			</div>

		</form>

	</div>
</div>

</div>

<?php require 'footer.php'; ?>