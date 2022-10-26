<div class="row">	
	<div class="col-sm-4 col-sm-offset-4 text-center">
		<a href="<?php echo site_url("Etudiant/ajouter_etudiant"); ?>" class="btn btn-primary btn-block margin-bottom">Ajouter un nouveau etudiant(e</a>
	</div>
</div>
<?php if(!empty($etudiant)){ ?>
<div class="row">
    <div class="col-xs-12">
    	<!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title text-center">Liste des etudiants</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Matricule</th>
                  <th>Filiere</th>
                  <th>Niveau</th>
                </tr>
                </thead>
                <tbody>
                   <?php foreach ($etudiant as $etudiants){ ?>
		                <tr>
		                  <td><?php echo $etudiants->nom; ?></td>
		                  <td><?php echo $etudiants->prenom; ?></td>
		                  <td><?php echo $etudiants->matricule; ?></td>
		                  <td><?php echo $etudiants->filiere; ?></td>
		                  <td><?php echo $etudiants->niveau; ?> année</td>
		                </tr>
		            <?php } ?> 
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
</div>
<?php } ?>