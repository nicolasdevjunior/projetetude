<div class="ajout">
    <div class="row">
            <div class="col-sm-12">  
                <?php if($this->session->flashdata('success_add')) { ?>
                    <div class="alert alert-success"> <?php echo $this->session->flashdata('success_add') ?> </div>
                <?php } ?>
            </div>
    </div> 
    <form action="<?php echo site_url("Etudiant/add_etudiant_req"); ?>" method="post" enctype="multipart/form-data" > 
    <!-- <form action="<?php //echo site_url("Professeur/do_upload"); ?>" method="post" enctype="multipart/form-data" >  -->
        <div class="row">
        	<div class="col-sm-6">
        		<div class="form-group">
        		    <label>Nom:</label>
	                <input type="text" class="form-control" value="<?php echo set_value('nom'); ?>" placeholder="nom" name="nom">
	                <p class="text-danger"><?php echo form_error('nom'); ?></p>
	            </div>
        	</div>
        	<div class="col-sm-6">
        		<div class="form-group">
        		    <label>Prenom:</label>
	                <input type="text" class="form-control" placeholder="prenom" name="prenom" value="<?php echo set_value('prenom'); ?>">
	                <p class="text-dangerr"><?php echo form_error('prenom'); ?></p>
	            </div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-sm-6">
        		<div class="form-group">
        		    <label>Numero:</label>
	                <input type="text" class="form-control" placeholder="numero" name="numero" value="<?php echo set_value('numero'); ?>">
	                <p class="text-dangerr"><?php echo form_error('numero'); ?></p>
	            </div>
        	</div>
        	<div class="col-sm-6">
        		<div class="form-group">
        		    <label>Matricule:</label>
	                <input type="text" class="form-control" placeholder="matricule" value="<?php echo set_value('matricule'); ?>" name="matricule">
                    <p class="text-danger"><?php echo form_error('matricule'); ?></p>
	            </div>
        	</div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                      <div class="form-group">
                        <label>Filiere</label>
                        <select class="form-control select2" style="width: 100%;" name="filiere">
                          <option selected="selected" value="premier">Informatique</option>
                          <option value="droit">Droit</option>
                          <option value="gestion">Gestion</option>
                          <option value="commerce/marketing">Commerce et marketing</option>
                          <option value="btp">BTP</option>
                          <option value="tourisme/hotellerie/restauration">Tourisme/hotellerie/restauration</option>
                        </select>
                      </div>
                  <p class="text-danger"><?php echo form_error('filiere'); ?></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                      <div class="form-group">
                        <label>Niveau</label>
                        <select class="form-control select2" style="width: 100%;" name="niveau">
                          <option selected="selected" value="premier">1er Année</option>
                          <option value="deuxieme">2ème Année</option>
                          <option value="troisieme">3ème Année</option>
                          <option value="quatrième">4ème Année</option>
                          <option value="cinquième">5ème Année</option>
                        </select>
                      </div>
                  <p class="text-danger"><?php echo form_error('niveau'); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Date de naissance:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="date_naissance" class="form-control pull-right" id="datepicker" placeholder="date de naissance" value="<?php echo set_value('date_naissance'); ?>">
                      <p class="text-danger"><?php echo form_error('date_naissance'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Lieu de naissance</label>
                    <input type="text" class="form-control" name="lieu_naissance" value="<?php echo set_value('lieu_naissance'); ?>" placeholder="lieu de naissance">
                    <p class="text-danger"><?php echo form_error('lieu_naissance'); ?></p>
                </div>
            </div>
        </div>    
        <div class="row">
        	<div class="col-sm-6">
        	    <div class="form-group">
        		    <label>Adresse:</label>
	                <input type="text" class="form-control" placeholder="adresse" name="adresse" value="<?php echo set_value('adresse'); ?>">
	                <p class="text-dangeror"><?php echo form_error('adresse'); ?></p>
	            </div>
        	</div>
        	<div class="col-sm-6">
        		<div class="form-group">
        		    <label>Photo etudiant:</label>
	                <input type="file" placeholder="photo" name="photo" value="<?php echo set_value('photo'); ?>">
	                <p class="text-dangeror"><?php echo form_error('photo'); ?></p>
	            </div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-sm-6">
        	    <div class="form-group">
        		    <label>Nom du père:</label>
	                <input type="text" class="form-control" placeholder="nom du pere" name="pere" value="<?php echo set_value('pere'); ?>">
                    <p class="text-danger"><?php echo form_error('pere'); ?></p>
	            </div>
        	</div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Numero du père:</label>
                    <input type="text" class="form-control" placeholder="numero du pere" name="numero_pere" value="<?php echo set_value('numero_pere'); ?>">
                    <p class="text-danger"><?php echo form_error('numero_pere'); ?></p>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Nom de la mère:</label>
                    <input type="text" class="form-control" placeholder="nom de la mère" name="mere" value="<?php echo set_value('pere'); ?>">
                    <p class="text-danger"><?php echo form_error('mere'); ?></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Numero de la mère:</label>
                    <input type="text" class="form-control" placeholder="numero de la mère" name="numero_mere" value="<?php echo set_value('numero_mere'); ?>">
                    <p class="text-danger"><?php echo form_error('numero_mere'); ?></p>
                </div>
            </div>
        </div>     
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Nom tuteur:</label>
                    <input type="text" class="form-control" placeholder="tuteur" name="tuteur" value="<?php echo set_value('tuteur'); ?>">
                    <p class="text-danger"><?php echo form_error('tuteur'); ?></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Numero du tuteur:</label>
                    <input type="text" class="form-control" placeholder="numero tuteur" name="numero_tuteur" value="<?php echo set_value('numero_tuteur'); ?>">
                    <p class="text-danger"><?php echo form_error('numero_tuteur'); ?></p>
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