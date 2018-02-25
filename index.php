<?php 
require 'db.php';
$sql='SELECT * FROM personne';
$statement = $connection->prepare($sql);
$statement->execute();
$personne = $statement->fetchAll(PDO::FETCH_OBJ);

 ?>


<?php require 'headre.php'; ?>
 <div class="container">
 	
 	<div class="card mt-5">
 		<div class="card-header">
 			<h2>Tout les personne :</h2>
 		</div>
 		<div class="card-body">
 			<table class="table table-bordered">
 				<tr>
 					<th>ID</th>
 					<th>NOM</th>
 					<th>PRENOM</th>
 					<th>ACTION</th>
 				</tr>
                  <?php foreach ($personne as $per): ?>
 				<tr>
 					<td><?= $per->id; ?></td>
 					<td><?= $per->nom; ?></td>
 					<td><?= $per->prenom; ?></td>
 					<td>
 						<a href="modifier.php?id=<?= $per->id ?>" class="btn btn-info">Modifier</a>

 						<a href="supprimer.php?id=<?= $per->id ?>" onclick="return confirm('CONFIRNER')" class="btn btn-danger">Supprimer</a>
 					</td>
 				</tr>
                <?php endforeach; ?>
 			</table>
 		</div>
 	</div>
 </div>

<?php require 'footer.php'; ?>