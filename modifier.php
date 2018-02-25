

<?php 

require 'db.php';


$id=$_GET['id'];
$sql='SELECT * FROM personne where id=:id';
$statement=$connection->prepare($sql);
$statement->execute([':id'=>$id]);
$per=$statement->fetch(PDO::FETCH_OBJ);


if (isset($_POST['nom']) && isset($_POST['prenom'])) {
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$sql='UPDATE personne SET nom=:nom , prenom=:prenom WHERE id=:id';

	$statement=$connection->prepare($sql);
	
	if ($statement->execute([':nom' => $nom, ':prenom' => $prenom, ':id'=>$id])) {
		header("Location: index.php");
	}
}

 ?>

<?php require 'headre.php'; ?>

<div class="container">
	
<div class="card mt-5">
	
	<div class="card-header">
		<h2>modifier un personne :</h2>

	</div>

	<div class="card-body">

         <?php if (!empty($message)): ?>

               <div class="alert alert success">

               	<?= $message; ?>

               </div>
         <?php endif; ?>

		<form method="post">
			<div class="form-group">
				
				<label for="nom">Nom : </label>
				<input type="text" value="<?= $per->nom ?>" name="nom" id="nom" class="form-control">
			</div>

			<div class="form-group">
				
				<label for="prenom">Prenom : </label>
				<input type="prenom" value="<?= $per->prenom ?>" name="prenom" id="prenom" class="form-control">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-info">modifier</button>
			</div>

		</form>

	</div>
</div>

</div>

<?php require 'footer.php'; ?>