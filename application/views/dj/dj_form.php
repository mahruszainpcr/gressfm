<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Dj <?php echo $button ?></h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Dj <?php echo form_error('nama_dj') ?></label>
            <input type="text" class="form-control" name="nama_dj" id="nama_dj" placeholder="Nama Dj" value="<?php echo $nama_dj; ?>" />
        </div>
	    <div class="form-group">
            <label for="quote">Quote <?php echo form_error('quote') ?></label>
            <textarea class="form-control" rows="3" name="quote" id="quote" placeholder="Quote"><?php echo $quote; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Is Active <?php echo form_error('is_active') ?></label>
            <input type="text" class="form-control" name="is_active" id="is_active" placeholder="Is Active" value="<?php echo $is_active; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('dj') ?>" class="btn btn-default">Cancel</a>
	</form><?php $this->load->view('templates/footer');?>