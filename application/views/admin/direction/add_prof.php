<div class="ajout">
    <div class="row">
            <div class="col-sm-12">  
                <?php if($this->session->flashdata('success_add')) { ?>
                    <div class="alert alert-success"> <?php echo $this->session->flashdata('success_add') ?> </div>
                <?php } ?>
            </div>
    </div> 
    <form action="<?php echo site_url("Professeur/add_professeur_req"); ?>" method="post" enctype="multipart/form-data" > 
    <!-- <form action="<?php //echo site_url("Professeur/do_upload"); ?>" method="post" enctype="multipart/form-data" >  -->
        <div class="row">
        	<div class="col-sm-6">
        		<div class="form-group">
        		    <label>Nom:</label>
	                <input type="text" class="form-control" value="<?php echo set_value('nom'); ?>"placeholder="nom" name="nom">
	                <p class="text-danger nomError"><?php echo form_error('nom'); ?></p>
	            </div>
        	</div>
        	<div class="col-sm-6">
        		<div class="form-group">
        		    <label>Prenom:</label>
	                <input type="text" class="form-control" placeholder="prenom" name="prenom" value="<?php echo set_value('prenom'); ?>">
	                <p class="text-danger prenomError"><?php echo form_error('prenom'); ?></p>
	            </div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-sm-6">
        		<div class="form-group">
        		    <label>Numero:</label>
	                <input type="text" class="form-control" placeholder="numero" name="numero" value="<?php echo set_value('numero'); ?>">
	                <p class="text-danger numeroError"><?php echo form_error('numero'); ?></p>
	            </div>
        	</div>
        	<div class="col-sm-6">
        		<div class="form-group">
        		    <label>CIN:</label>
	                <input type="text" class="form-control" placeholder="cin" value="<?php echo set_value('cin'); ?>" name="cin">
                    <p class="text-danger cinError"><?php echo form_error('cin'); ?></p>
	            </div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-sm-6">
        	    <div class="form-group">
        		    <label>Adresse:</label>
	                <input type="text" class="form-control" placeholder="adresse" name="adresse" value="<?php echo set_value('adresse'); ?>">
	                <p class="text-danger adresseError"><?php echo form_error('adresse'); ?></p>
	            </div>
        	</div>
        	<div class="col-sm-6">
        		<div class="form-group">
        		    <label>Matière:</label>
	                <input type="text" class="form-control" placeholder="matiere" name="matiere" value="<?php echo set_value('matiere'); ?>">
	                <p class="text-danger matiereError"><?php echo form_error('matiere'); ?></p>
	            </div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-sm-6">
        	    <div class="form-group">
        		    <label>Email:</label>
	                <input type="text" class="form-control" placeholder="email" name="email" value="<?php echo set_value('email'); ?>">
                    <p class="text-danger emailError"><?php echo form_error('email'); ?></p>
	            </div>
        	</div>
        	<div class="col-sm-6">
        		<div class="form-group">
                  <label for="exampleInputFile">Photo du professeur</label>
                  <input type="file" name="photo" value="<?php echo set_value('photo'); ?>">
                  <p class="text-danger photoError"><?php echo form_error('photo'); ?></p>
                </div>
        	</div>
        </div>     
        <div class="row">
                <div class="col-xs-7">
                    <div class="checkbox icheck">
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-5">
                    <button type="submit"  name="authentifier" class="btn btn-primary btn-block btn-flat">Ajouter</button>
                </div>
                <!-- /.col -->
        </div>
    </form>
</div>