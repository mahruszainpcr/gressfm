<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
<<<<<<< HEAD
    <div class="col-md-4">
        <h2>News <?php echo $button ?></h2>
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
        <label for="varchar">Berita <?php echo form_error('berita') ?></label>
        <input type="text" class="form-control" name="berita" id="berita" placeholder="Berita"
            value="<?php echo $berita; ?>" />
    </div>
    <div class="form-group">
        <label for="datetime">Tanggal <?php echo form_error('tanggal') ?></label>
        <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal"
            value="<?php echo $tanggal; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Kategori <?php echo form_error('kategori') ?></label>
        <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori"
            value="<?php echo $kategori; ?>" />
    </div>
    <input type="hidden" name="id_news" value="<?php echo $id_news; ?>" />
    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
    <a href="<?php echo site_url('news') ?>" class="btn btn-default">Cancel</a>
</form><?php $this->load->view('templates/footer');?>
=======
            <div class="col-md-4">
                <h2>News <?php echo $button ?></h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Judul <?php echo form_error('judul') ?></label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Berita <?php echo form_error('berita') ?></label>
            <input type="text" class="form-control" name="berita" id="berita" placeholder="Berita" value="<?php echo $berita; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Tanggal <?php echo form_error('tanggal') ?></label>
            <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kategori <?php echo form_error('kategori') ?></label>
            <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori" value="<?php echo $kategori; ?>" />
        </div>
	    <input type="hidden" name="id_news" value="<?php echo $id_news; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('news') ?>" class="btn btn-default">Cancel</a>
	</form><?php $this->load->view('templates/footer');?>
>>>>>>> d04ba2d49e43028dd6155ac08abcc8bcf2a6132c
