<div id="featured">
    <div class="container">

        <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100">Listen All Music On Radio
            FM - 105.8</div>

        <div class="kand1 animated" data-animation="fadeInUp" data-animation-delay="200"></div>

        <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="300">OUR DJ</div>


    </div>


    <div class="slick-slider-wrapper">
        <div class="container">
            <div class="slick-slider slider center">
            <?php 
		foreach($dj as $u){ 
		?>
                <div>
                    <div class="slick-slider-inner">
                        <figure><img src="<?=base_url('assets/dj/'.$u->foto);?>" alt=""
                                class="img-responsive"></figure>
                        <div class="caption">
                            <div class="txt1"><span><?= $u->nama_dj ?></span></div>
                            <div class="txt2"><span><?= $u->quote ?></span></div>
                            <!-- <div class="txt3"><a href="#" class="btn-default btn1">MORE EPISODES</a></div> -->
                        </div>
                        <div class="slick-slider-overlay"></div>
                    </div>
                </div>
                
                <?php } ?>



            </div>
        </div>
    </div>


</div>

<div id="collection">
    <div class="container">

        <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100">Goes to
        </div>
        <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">Events</div>
        <div class="title4 animated" data-animation="fadeInUp" data-animation-delay="300">
        </div>

        <br><br><br>

        <div class="row">
        <?php 
		foreach($event3 as $u){ 
		?>
            <div class="col-sm-4">
                <div class="artists1 clearfix animated" data-animation="fadeInUp" data-animation-delay="300">
                    <figure><img src="<?=base_url('assets/event/'.$u->foto);?>" alt="" class="img-responsive">
                    </figure>
                    <div class="caption">
                        <div class="txt1">The Muskeeter</div>
                        <div class="txt2"><?= $u->nama_event ?></div>
                        <div class="social2_wrapper">
                            <ul class="social2 clearfix">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>

    </div>
</div>

<div id="collection1">
    <div class="container">

        <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="100">POPULAR SOUNDS</div>

        <div class="title3 animated" data-animation="fadeInUp" data-animation-delay="200">Lagu Mix dari kita buat sobat
            Radio!
        </div>

        <br><br><br>

        <div class="radios animated">
            <div class="radio1 head clearfix">
                <div class="sec1">#</div>
                <div class="sec2">Name</div>
                <div class="sec3">Artist</div>
                <div class="sec4">Genre</div>
                <div class="sec5">URL address</div>
                <div class="sec6">Time</div>
                <div class="sec7">&nbsp;</div>
            </div>
            <div class="radio1 clearfix">
                <div class="sec1">1.</div>
                <div class="sec2">May Way</div>
                <div class="sec3">Jonathan Smith</div>
                <div class="sec4">Jazz - Rock</div>
                <div class="sec5"><a href="#">www.StudioOne.com</a></div>
                <div class="sec6">4:36</div>
                <div class="sec7">
                    <div class="audio2">
                        <audio class="audio" preload="none" style="width: 100%; visibility: hidden;"
                            controls="controls">
                            <source type="audio/mpeg" src="<?=base_url('site/');?>audio/song2.mp3" />
                            <a href="audio/song2.mp3">audio/song2.mp3</a>
                        </audio>
                    </div>
                </div>
            </div>
            <div class="radio1 clearfix">
                <div class="sec1">2.</div>
                <div class="sec2">Lorem ipsum</div>
                <div class="sec3">Juzeppe Nerdi</div>
                <div class="sec4">Classical Music</div>
                <div class="sec5"><a href="#">www.music.com</a></div>
                <div class="sec6">5:34</div>
                <div class="sec7">
                    <div class="audio2">
                        <audio class="audio" preload="none" style="width: 100%; visibility: hidden;"
                            controls="controls">
                            <source type="audio/mpeg" src="<?=base_url('site/');?>audio/song3.mp3" />
                            <a href="audio/song3.mp3">audio/song3.mp3</a>
                        </audio>
                    </div>
                </div>
            </div>
            <div class="radio1 clearfix">
                <div class="sec1">3.</div>
                <div class="sec2">Come Fly With Me</div>
                <div class="sec3">Arturo Toskanini</div>
                <div class="sec4">Rock, JazzRock</div>
                <div class="sec5"><a href="#">www.radio.com</a></div>
                <div class="sec6">3:47</div>
                <div class="sec7">
                    <div class="audio2">
                        <audio class="audio" preload="none" style="width: 100%; visibility: hidden;"
                            controls="controls">
                            <source type="audio/mpeg" src="<?=base_url('site/');?>audio/song4.mp3" />
                            <a href="audio/song4.mp3">audio/song4.mp3</a>
                        </audio>
                    </div>
                </div>
            </div>
            <div class="radio1 clearfix">
                <div class="sec1">4.</div>
                <div class="sec2">Luck Be a Lady</div>
                <div class="sec3">Franko Dzefirelli</div>
                <div class="sec4">Samba, Bossanova</div>
                <div class="sec5"><a href="#">www.radioFM.com</a></div>
                <div class="sec6">6:48</div>
                <div class="sec7">
                    <div class="audio2">
                        <audio class="audio" preload="none" style="width: 100%; visibility: hidden;"
                            controls="controls">
                            <source type="audio/mpeg" src="<?=base_url('site/');?>audio/song1.mp3" />
                            <a href="audio/song1.mp3">audio/song1.mp3</a>
                        </audio>
                    </div>
                </div>
            </div>
            <div class="radio1 clearfix">
                <div class="sec1">5.</div>
                <div class="sec2">Money, Money, Money</div>
                <div class="sec3">ABBA</div>
                <div class="sec4">Popular Music</div>
                <div class="sec5"><a href="#">www.radioOne.com</a></div>
                <div class="sec6">5:09</div>
                <div class="sec7">
                    <div class="audio2">
                        <audio class="audio" preload="none" style="width: 100%; visibility: hidden;"
                            controls="controls">
                            <source type="audio/mpeg" src="<?=base_url('site/');?>audio/song2.mp3" />
                            <a href="audio/song2.mp3">audio/song2.mp3</a>
                        </audio>
                    </div>
                </div>
            </div>
        </div>

        <div class="pager_wrapper animated">
            <ul class="pager clearfix">
                <li class="prev"><a href="#">Previous</a></li>
                <li class="active"><a href="#">1</a></li>
                <li class="li"><a href="#">2</a></li>
                <li class="li"><a href="#">3</a></li>
                <li class="li"><a href="#">4</a></li>
                <li class="next"><a href="#">Next</a></li>
            </ul>
        </div>


    </div>
</div>

<div id="testimonial">
    <div class="container">

        <div class="row">
            <div class="col-sm-6">
                <div class="speaker-wrapper">
                    <img src="<?=base_url('site/');?>images/artist/artist.jpg" alt="" class="img-responsive rounded">
                </div>
            </div>
            <div class="col-sm-6">

                <div id="testim_wrapper">

                    <div class="title1">What You say About us ?</div>
                    <div class="title2">TESTIMONIALS</div>

                    <div id="testim">
                        <div class="carousel-box">
                            <div class="inner">
                                <div class="carousel main">
                                    <ul>
                                        <li>
                                            <div class="testim">
                                                <div class="testim_inner">
                                                    <div class="txt1">“Lagunya selalu up to date. Cocok untuk nemani
                                                        keseharianku”
                                                    </div>
                                                    <div class="txt2">Nando Tri Dono</div>
                                                    <div class="txt3">Siswa SMA</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="testim">
                                                <div class="testim_inner">
                                                    <div class="txt1">“Tidak berisi lagu, DJ nya juga seru banget dalam
                                                        membawakan acaranya.Enak didengar di waktu sendiri.”
                                                    </div>
                                                    <div class="txt2">Amanda Hane</div>
                                                    <div class="txt3">Karyawan Swasta</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="testim">
                                                <div class="testim_inner">
                                                    <div class="txt1">“membuatku terjatuh dan terjatuh lagi, membuatku
                                                        merasakan yang tak terjadi, semua yang terbaik dan terlewati,
                                                        semua yang terhenti tanpa ku akhiri.”
                                                    </div>
                                                    <div class="txt2">Agus Wahyu</div>
                                                    <div class="txt3">Mahasiswa</div>
                                                </div>
                                            </div>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testim_pagination"></div>
                </div>

            </div>
        </div>

    </div>
</div>

<div id="contacts">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-push-6 animated" data-animation="fadeInUp" data-animation-delay="200">
                <img src="<?=base_url('site/');?>images/artist/microphone.png" alt="" class="img-responsive ">
            </div>
            <div class="col-sm-6 col-sm-pull-6 animated">

                <div class="title1">Please send us your comments</div>

                <div class="title2">CONTACT FORM</div>

                <br>
                <p>
                    Jika ingin memberi kami saran atau kritik, sobat bisa langsung memberinya lewat form ini yaa. Boleh
                    juga kalau mau nitip salam ke kekasih looh.
                </p>
                <p>
                    Ayo sobat radio! Terus dengerin musik-musik keren dan kekinian di 105.8 FM. Pantengin terus yaa,
                    jangan sampai ketinggalan dan follow akun MedSos kita yaa! Stay Tune!
                </p>


                <div class="social_wrapper">
                    <ul class="social clearfix">
                        <li class="nav1"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="nav2"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="nav3"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="nav4"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                    </ul>
                </div>

                <div id="note"></div>
                <div id="fields">
                    <form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">

                        <div class="form-group">
                            <label for="inputName">Your Name</label>
                            <input type="text" class="form-control" id="inputName" name="name" value="Full Name"
                                onBlur="if(this.value=='') this.value='Full Name'"
                                onFocus="if(this.value =='Full Name' ) this.value=''">
                        </div>

                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="text" class="form-control" id="inputEmail" name="email" value="E-mail address"
                                onBlur="if(this.value=='') this.value='E-mail address'"
                                onFocus="if(this.value =='E-mail address' ) this.value=''">
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputMessage">Your Message</label>
                                    <textarea class="form-control" rows="5" id="inputMessage" name="content"
                                        onBlur="if(this.value=='') this.value='Message'"
                                        onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-default btn-cf-submit">Send !</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
<div id="news" style="background-color:#1b1b1b;" class="p-t-5">
    <div class="container">
        <div class="title2 animated">GRESS NEWS</div>


        <br><br>

        <div class="row">
        <?php 
		foreach($news2 as $u){ 
		?>
            <div class="col-sm-6">
                <div class="thumb7 animated">
                    <div class="thumbnail clearfix">
                        <figure class="">
                            <img src="<?=base_url('assets/news/'.$u->foto);?>"
                                alt="" class="img-responsive">
                        </figure>
                        <div class="caption">
                            <div class="title"><?= $u->judul ?></div>
                            <p>
                                <?= substr($u->berita,0,250 )?>
                            </p>
                            <a href="<?=base_url('awal/beritaNext/'.$u->id_news)?>" class="btn-default btn5">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <!-- The element that will contain our Google Map. This is used in both the Javascript and CSS above. -->
            <div id="map"></div>

        </div>

    </div>
</div>