<style>

.gallery-title
{
    font-size: 36px;
    color: #1b1b1b;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #E8C40D;
    border-radius: 5px;
    text-align: center;
    color: #E8C40D;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #1b1b1b;
    border-radius: 5px;
    text-align: center;
    color: #1b1b1b;
    background-color: #E8C40D;

}
.btn-default:active .filter-button:active
{
    background-color: #E8C40D;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}
</style>
<!-- ukuran 365x365 -->
<div id="content">
<div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3 class="animated" data-animation="fadeInUp" data-animation-delay="100">GALLERY</h3>
            
        </div>

        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <?php 
		foreach($galeri_judul as $u){ 
		?>
            <button class="btn btn-default filter-button" data-filter="<?= $u->judul ?>"><?= $u->judul ?></button>
        <?php } ?>
         
        </div>
        <br/>

        <?php 
		foreach($galeri as $u){ 
		?>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter <?= $u->judul ?>">
                <img src="<?=base_url('assets/galeri/'.$u->foto);?>" style="height:365px; width:365px;" class="img-responsive">
            </div>

        <?php } ?>
        </div>
    </div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
    $(document).ready(function(){

$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
        //$('.filter').removeClass('hidden');
        $('.filter').show('1000');
    }
    else
    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
        
    }
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});</script>
