
</div>
<div class="bot1_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">

                <div class="logo2_wrapper">
                <h2 class="font-weight-bold">Gress FM</h2>
                </div>

                <p>
                  Radionya anak Pekanbaru! More than just Music!
                </p>

                <div class="location1">Jl. Punai No.8, Kp. Melayu, Kec. Sukajadi,<br/> Kota Pekanbaru, Riau 28124</div>

                <div class="phone1">(0761) 27333</div>

                <div class="mail1"><a href="#">gress@radio.com</a></div>

            </div>
            <div class="col-sm-3">

                <div class="bot1_title">POPULAR TAGS</div>

                <ul class="tags1 clearfix">
                    <li><a href="#">Music</a></li>
                    <li><a href="#">Sheila On 7</a></li>
                    <li><a href="#">Kahitna</a></li>
                    <li><a href="#">Clean</a></li>
                    <li><a href="#">Radio</a></li>
                    <li><a href="#">SEO</a></li>
                </ul>

                <div class="bot1_title">MAILING LIST</div>

                <div class="newsletter_block">
                    <div class="txt1">Ayo dapatkan info menarik langsung dari kami ke emailmu</div>
                    <div class="newsletter-wrapper clearfix">
                        <form class="newsletter" action="javascript:void(0);">
                            <input type="text" name="s" value='Email Address'
                                   onBlur="if(this.value=='') this.value='Email Address'"
                                   onFocus="if(this.value =='Email Address' ) this.value=''">
                            <a href="javascript:void(0);"></a>
                        </form>
                    </div>
                    <div class="txt2">We respect your privacy</div>
                </div>

            </div>
            <div class="col-sm-4 col-sm-offset-1">

                <div class="bot1_title">LATEST NEWS</div>
                <?php 
		foreach($news2 as $u){ 
		?>
                <div class="latest1">
                    <a href="<?=base_url('awal/beritaNext/'.$u->id_news)?>" class="clearfix">
                        <figure><img src="<?=base_url('assets/news/'.$u->foto);?>" style="height:59px;width:59px;" alt=""></figure>
                        <div class="caption">
                            <div class="txt1"><?= $u->judul ?>
                            </div>
                            <div class="txt2">January 29 - 2020</div>
                        </div>
                    </a>
                </div>
                <?php } ?>

                

                <a href="<?=base_url('awal')?>#news" class="btn-default btn3">READ MORE</a>

            </div>
        </div>
    </div>
</div>

<div class="bot2_wrapper">
    <div class="container">
        Copyright © 2017 Designed by: <a href="#" target="_blank"><b>MECOVACHE</b></a>
    </div>
</div>


</div>

<script src="<?= base_url('site/'); ?>js/jquery.js"></script>
<script src="<?= base_url('site/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('site/'); ?>js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?= base_url('site/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?= base_url('site/'); ?>js/superfish.js"></script>

<script src="<?= base_url('site/'); ?>js/camera.js"></script>

<script src="<?= base_url('site/'); ?>js/mediaelement-and-player.js"></script>
<script src="<?= base_url('site/'); ?>js/mep-feature-playlist.js"></script>


<script src="<?= base_url('site/'); ?>js/slick.min.js"></script>

<script src="<?= base_url('site/'); ?>js/jquery.jrumble.1.3.min.js"></script>

<script src="<?= base_url('site/'); ?>js/jquery.sticky.js"></script>

<script src="<?= base_url('site/'); ?>js/jquery.queryloader2.js"></script>

<script src="<?= base_url('site/'); ?>js/jquery.appear.js"></script>

<script src="<?= base_url('site/'); ?>js/jquery.ui.totop.js"></script>
<script src="<?= base_url('site/'); ?>js/jquery.equalheights.js"></script>

<script src="<?= base_url('site/'); ?>js/jquery.caroufredsel.js"></script>
<script src="<?= base_url('site/'); ?>js/jquery.touchSwipe.min.js"></script>

<script src="<?= base_url('site/'); ?>js/SmoothScroll.js"></script>

<script src="<?= base_url('site/'); ?>js/cform.js"></script>


<script src="<?= base_url('site/'); ?>js/scripts.js"></script>
</body>
</html>