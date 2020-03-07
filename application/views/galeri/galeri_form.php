<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
    <div class="col-md-4">
        <h2>Galeri <?php echo $button ?></h2>
    </div>
    <div class="col-md-8 text-center">
        <div id="message">
            <?php echo $this->session->userdata('message') != '' ? $this->session->userdata('message') : ''; ?>
        </div>
    </div>
</div>
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="varchar">Judul <?php echo form_error('judul') ?></label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul"
            value="<?php echo $judul; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Foto <?php echo form_error('foto') ?></label>
        <input type="file" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
    </div>
    <div class="form-group">
        <label for="date">Tanggal <?php echo form_error('tanggal') ?></label>
        <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal"
            value="<?php echo $tanggal; ?>" />
    </div>
    <input type="hidden" name="id_galeri" value="<?php echo $id_galeri; ?>" />
    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
    <a href="<?php echo site_url('galeri') ?>" class="btn btn-default">Cancel</a>
</form><?php $this->load->view('templates/footer');?>
