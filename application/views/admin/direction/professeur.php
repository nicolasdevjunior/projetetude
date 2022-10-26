<div class="row">	
	<div class="col-sm-4 col-sm-offset-4 text-center">
		<a href="<?php echo site_url("Professeur/ajouter_prof"); ?>" class="btn btn-primary btn-block margin-bottom">Ajouter un nouveau professeur</a>
	</div>
</div>
<?php if(!empty($prof)){ ?>
<div class="row">
    <div class="col-xs-12">
    	<!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title text-center">Liste des professeurs</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Matiere</th>
                  <th>Numero</th>
                  <th>Email</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($prof as $professeur){ ?>
		                <tr>
		                  <td><?php echo $professeur->nom; ?></td>
		                  <td><?php echo $professeur->prenom; ?></td>
		                  <td><?php echo $professeur->matiere; ?></td>
		                  <td><?php echo $professeur->numero; ?></td>
		                  <td><?php echo $professeur->email; ?></td>
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