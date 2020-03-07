<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
    <div class="col-md-4">
        <h2>Show list <?php echo $button ?></h2>
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
        <input type="file" class="form-control" name="foto" id="foto" placeholder="Foto" />
    </div>
    <div class="form-group">
        <label for="varchar">Jam Mulai <?php echo form_error('jam_mulai') ?></label>
        <input type="text" class="form-control" name="jam_mulai" id="jam_mulai" placeholder="Jam Mulai"
            value="<?php echo $jam_mulai; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Jam Selesai <?php echo form_error('jam_selesai') ?></label>
        <input type="text" class="form-control" name="jam_selesai" id="jam_selesai" placeholder="Jam Selesai"
            value="<?php echo $jam_selesai; ?>" />
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
    <a href="<?php echo site_url('show_list') ?>" class="btn btn-default">Cancel</a>
</form><?php $this->load->view('templates/footer');?>