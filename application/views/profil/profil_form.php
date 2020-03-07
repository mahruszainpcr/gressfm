<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Profil <?php echo $button ?></h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Profil <?php echo form_error('nama_profil') ?></label>
            <input type="text" class="form-control" name="nama_profil" id="nama_profil" placeholder="Nama Profil" value="<?php echo $nama_profil; ?>" />
        </div>
	    <div class="form-group">
            <label for="isi_profil">Isi Profil <?php echo form_error('isi_profil') ?></label>
            <textarea class="form-control" rows="3" name="isi_profil" id="isi_profil" placeholder="Isi Profil"><?php echo $isi_profil; ?></textarea>
        </div>
	    <input type="hidden" name="id_profil" value="<?php echo $id_profil; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('profil') ?>" class="btn btn-default">Cancel</a>
	</form><?php $this->load->view('templates/footer');?>