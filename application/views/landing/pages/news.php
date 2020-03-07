
    <div id="content">
        <div class="container">
        <?php 
		foreach($newsDetail as $u){ 
		?>
            <h2> <?= $u->judul ?></h2>
        <?php } ?>
            <!-- <div class="details2 clearfix">
                <div class="left">Created <span>|</span> By: Admin <span>|</span> 2020 / Maret / 5</div>
                <div class="right"><a href="#" class="share1"></a></div>
            </div> -->


            <div class="row">
                <div class="col-sm-3">
                    <div class="blog_sidebar">

                     
                        <div class="title5">LATEST NEWS</div>

                        <div class="news2_wrapper">
                        <?php 
		foreach($news2 as $u){ 
		?>
                            <div class="news2" style="margin-bottom:10px!important;">
                                <a href="<?=base_url('awal/beritaNext/'.$u->id_news)?>">
                                    <div class="txt1"><?= $u->judul ?></div>
                                    <div class="txt2">29 / Jan / 2020</div>
                                </a>
                            </div>
        <?php } ?>
                        </div>

                        <div class="title5">CATEGORIES</div>

                        <ul class="cat1">
                            <li><a href="#">Art</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Podcast</a></li>
                            <li><a href="#">Other infomration</a></li>
                        </ul>

                        <div class="title5">TAGS</div>

                        <div class="tags2"><a href="#">Brand</a> <span>\</span> <a href="#">WordPress</a> <span>\</span>
                            <a href="#">Design</a> <span>\</span> <a href="#">Graphic</a> <span>\</span> <a
                                    href="#">PSD</a> <span>\</span> <a href="#">WebSite</a></div>


                    </div>
                </div>
                <div class="col-sm-9">
                <?php 
		foreach($newsDetail as $u){ 
		?>
                    <div class="blog_content">

                        <div class="post post-full">
                            <div class="post-header">
                                <div class="post-image">
                                    <img src="<?=base_url('assets/news/'.$u->foto);?>" alt="" class="img-responsive">
                                </div>
                            </div>
                            <div class="post-story">
                                <div class="post-story-body clearfix">
                                    <p>
                                    <?= $u->berita ?></p>

                                  

                                </div>
                            </div>
                        </div>
        <?php } ?>
                        <div class="num-comments">3 Comments</div>

                        <div class="comment-block clearfix">
                            <figure>
                                <img src="https://via.placeholder.com/110x110" alt="" class="img-responsive">
                            </figure>
                            <div class="caption">
                                <div class="top clearfix">
                                    <div class="left">
                                        <div class="txt1">George Smith</div>
                                        <div class="txt2">2015. May.20</div>
                                    </div>
                                    <div class="right"><a href="#">Reply</a></div>
                                </div>
                                <div class="txt">
                                    The bedding was hardly able to cover it and seemed ready to slide off any moment.
                                    His many legs, pitifully r it and seemed ready to slide off any m
                                </div>
                            </div>
                        </div>

                        <div class="comment-block left1 clearfix">
                            <figure>
                                <img src="https://via.placeholder.com/110x110" alt="" class="img-responsive">
                            </figure>
                            <div class="caption">
                                <div class="top clearfix">
                                    <div class="left">
                                        <div class="txt1">Laura Mountroe</div>
                                        <div class="txt2">2015. May.20</div>
                                    </div>
                                    <div class="right"><a href="#">Reply</a></div>
                                </div>
                                <div class="txt">
                                    The bedding was hardly able to cover it and seemed ready to slide off any moment.
                                    His many legs, pitifully r it and seemed ready to slide off any m
                                </div>
                            </div>
                        </div>

                        <div class="comment-block clearfix">
                            <figure>
                                <img src="https://via.placeholder.com/110x110" alt="" class="img-responsive">
                            </figure>
                            <div class="caption">
                                <div class="top clearfix">
                                    <div class="left">
                                        <div class="txt1">George Smith</div>
                                        <div class="txt2">2015. May.20</div>
                                    </div>
                                    <div class="right"><a href="#">Reply</a></div>
                                </div>
                                <div class="txt">
                                    The bedding was hardly able to cover it and seemed ready to slide off any moment.
                                    His many legs, pitifully r it and seemed ready to slide off any m
                                </div>
                            </div>
                        </div>

                        <div class="live-comment">
                            <div class="live-comment-title">Leave a Comment</div>
                            <div class="live-comment-form">

                                <div id="note3"></div>
                                <div id="fields3">
                                    <form id="ajax-contact-form3" class="form-horizontal" action="javascript:;">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputName">Your Name</label>
                                                    <input type="text" class="form-control" id="inputName" name="name"
                                                           value="Full Name"
                                                           onBlur="if(this.value=='') this.value='Full Name'"
                                                           onFocus="if(this.value =='Full Name' ) this.value=''">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputEmail">Email</label>
                                                    <input type="text" class="form-control" id="inputEmail" name="email"
                                                           value="E-mail address"
                                                           onBlur="if(this.value=='') this.value='E-mail address'"
                                                           onFocus="if(this.value =='E-mail address' ) this.value=''">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="inputMessage">Your Message</label>
                          <textarea class="form-control" rows="9" id="inputMessage" name="content"
                                    onBlur="if(this.value=='') this.value='Message'"
                                    onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn-default btn-cf-submit3">SUBMIT</button>
                                    </form>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
