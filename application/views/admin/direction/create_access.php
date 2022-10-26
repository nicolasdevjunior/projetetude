<div class="ajout">
	<div class="row">
	            <div class="col-sm-12">  
	                <?php if($this->session->flashdata('success_add')) { ?>
	                    <div class="alert alert-success"> <?php echo $this->session->flashdata('success_add') ?> </div>
	                <?php } ?>
	            </div>
	</div> 
	<form action="<?php echo site_url("Admin/pointaccess_req"); ?>" method="post" enctype="multipart/form-data" > 
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
	        		    <label>Fonction:</label>
		                <input type="text" class="form-control" placeholder="Fonction" name="fonction" value="<?php echo set_value('fonction'); ?>">
		                <p class="text-danger"><?php echo form_error('fonction'); ?></p>
		            </div>
	        	</div>
	        	<div class="col-sm-6">
	        		<div class="form-group">
	        		    <label>Login:</label>
		                <input type="text" class="form-control" placeholder="Login" name="login" value="<?php echo set_value('login'); ?>">
		                <p class="text-danger"><?php echo form_error('login'); ?></p>
		            </div>
	        	</div>
	        </div>
	        <div class="row">
	        	<div class="col-sm-6">
	        		<div class="form-group">
	        		    <label>Mot de passe:</label>
		                <input type="password" class="form-control" placeholder="password"  name="password">
	                    <p class="text-danger"><?php echo form_error('password'); ?></p>
		            </div>
	        	</div>
	        	<div class="col-sm-6">
	        		<div class="form-group">
	        		    <label>Confirmer le mot de passe:</label>
		                <input type="password" class="form-control" placeholder="confirmer  password"  name="passwordconfirm">
	                    <p class="text-danger"><?php echo form_error('passwordconfirm'); ?></p>
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
