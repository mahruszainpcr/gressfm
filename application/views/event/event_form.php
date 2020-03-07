<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
<<<<<<< HEAD
    <div class="col-md-4">
        <h2>Event <?php echo $button ?></h2>
    </div>
    <div class="col-md-8 text-center">
        <div id="message">
            <?php echo $this->session->userdata('message') != '' ? $this->session->userdata('message') : ''; ?>
        </div>
    </div>
</div>
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="varchar">Nama Event <?php echo form_error('nama_event') ?></label>
        <input type="text" class="form-control" name="nama_event" id="nama_event" placeholder="Nama Event"
            value="<?php echo $nama_event; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Foto <?php echo form_error('foto') ?></label>
        <input type="file" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Lokasi <?php echo form_error('lokasi') ?></label>
        <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi"
            value="<?php echo $lokasi; ?>" />
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi <?php echo form_error('deskripsi') ?></label>
        <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi"
            placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
    </div>
    <div class="form-group">
        <label for="date">Waktu Mulai <?php echo form_error('waktu_mulai') ?></label>
        <input type="text" class="form-control" name="waktu_mulai" id="waktu_mulai" placeholder="Waktu Mulai"
            value="<?php echo $waktu_mulai; ?>" />
    </div>
    <div class="form-group">
        <label for="date">Waktu Selesai <?php echo form_error('waktu_selesai') ?></label>
        <input type="text" class="form-control" name="waktu_selesai" id="waktu_selesai" placeholder="Waktu Selesai"
            value="<?php echo $waktu_selesai; ?>" />
    </div>
    <div class="form-group">
        <label for="timestamp">Date Created <?php echo form_error('date_created') ?></label>
        <input type="text" class="form-control" name="date_created" id="date_created" placeholder="Date Created"
            value="<?php echo $date_created; ?>" />
    </div>
    <div class="form-group">
        <label for="int">Is Active <?php echo form_error('is_active') ?></label>
        <input type="text" class="form-control" name="is_active" id="is_active" placeholder="Is Active"
            value="<?php echo $is_active; ?>" />
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
    <a href="<?php echo site_url('event') ?>" class="btn btn-default">Cancel</a>
</form><?php $this->load->view('templates/footer');?>
=======
            <div class="col-md-4">
                <h2>Event <?php echo $button ?></h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Event <?php echo form_error('nama_event') ?></label>
            <input type="text" class="form-control" name="nama_event" id="nama_event" placeholder="Nama Event" value="<?php echo $nama_event; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Lokasi <?php echo form_error('lokasi') ?></label>
            <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi" value="<?php echo $lokasi; ?>" />
        </div>
	    <div class="form-group">
            <label for="deskripsi">Deskripsi <?php echo form_error('deskripsi') ?></label>
            <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="date">Waktu Mulai <?php echo form_error('waktu_mulai') ?></label>
            <input type="text" class="form-control" name="waktu_mulai" id="waktu_mulai" placeholder="Waktu Mulai" value="<?php echo $waktu_mulai; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Waktu Selesai <?php echo form_error('waktu_selesai') ?></label>
            <input type="text" class="form-control" name="waktu_selesai" id="waktu_selesai" placeholder="Waktu Selesai" value="<?php echo $waktu_selesai; ?>" />
        </div>
	    <div class="form-group">
            <label for="timestamp">Date Created <?php echo form_error('date_created') ?></label>
            <input type="text" class="form-control" name="date_created" id="date_created" placeholder="Date Created" value="<?php echo $date_created; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Is Active <?php echo form_error('is_active') ?></label>
            <input type="text" class="form-control" name="is_active" id="is_active" placeholder="Is Active" value="<?php echo $is_active; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('event') ?>" class="btn btn-default">Cancel</a>
	</form><?php $this->load->view('templates/footer');?>
>>>>>>> d04ba2d49e43028dd6155ac08abcc8bcf2a6132c
