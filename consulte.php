<?php 

require 'db.php';
$id=$_GET['id'];
$sql='SELECT * FROM personne WHERE id=:id';
$statement = $connection->prepare($sql);
$statement ->execute([':id'=>$id]);
$personne=$statement->fetchAll(PDO::FETCH_OBJ);
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
 					
 				</tr>
                  <?php foreach ($personne as $per): ?>
 				<tr>
 					<td><?= $per->id; ?></td>
 					<td><?= $per->nom; ?></td>
 					<td><?= $per->prenom; ?></td>
 				
 				</tr>
                <?php endforeach; ?>
 			</table>
 		</div>
 	</div>
 </div>

<?php require 'footer.php'; ?>