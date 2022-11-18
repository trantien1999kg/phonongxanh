<section class="slidersanpham pb70"
    style="background-image: url(<?=_upload_hinhanh_l.$bg_sanphamlist['photo']?>); background-size: cover;">

    <?php foreach ($featuredcategory as $ke => $va) { 
        $products = $db->rawQuery("select ten_$lang as ten, tenkhongdau_$lang as tenkhongdau ,photo , giaban , type from #_baiviet where hienthi=1 and noibat=1 and id_list=? order by stt asc,id desc",array($va['id']));
       ?>
    <?php if($products){ ?>
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <div class="slidedanhmuc pt50">
                    <div class="box_title_top">
                        <div class="title_featured_category mb50">
                            <img src="<?= _upload_baiviet_l.$va['photo']?>" alt="<?=$va["ten"]?>">
                            <div class="name_category">
                                <?=$va["ten"]?>
                            </div>
                        </div>
                        <div class="button_featured_category">
                        <a href="<?=$va["type"]?>/<?=$va["tenkhongdau"]?>" class="link_slider d-none-mobile focus-button button_absollute"
                            rel="nofollow" target="_blank">XEM THÊM</a>
                        </div>
                    </div>

                    <div class="owl-carousel owl-theme owl-sanpham">
                        <?php foreach ($products as $k => $v) {?>
                        <div class="wrap-productshot__boxbc d-flex flex-column p-relative">
                            <div class="wrap-productshot__boxbc-outline"></div>
                            <div class="wrap-productshot__boxbc-img p-relative">
                                <a href="<?=$v["type"]?>/<?=$alias_l.$v["tenkhongdau"]?>" title="<?=$v["ten_$lang"]?>"
                                    rel="dofollow" class="d-block hover-left">
                                    <img loading=lazy src="<?=_upload_baiviet_l.$v["photo"]?>"
                                        alt="<?=$v["ten_$lang"]?>" <?=$func->errorImg()?>>
                                    <?php if($func->percentPrice($v["giacu"],$v["giaban"])>0){ ?>
                                    <div class="wrap-productshot__boxbc-img-sale">
                                        <span class="wrap-productshot__boxbc-img-sale-label">SALE</span>
                                        <span
                                            class="wrap-productshot__boxbc-img-sale-content"><?=$func->percentPrice($v["giacu"],$v["giaban"])?></span>
                                    </div>
                                    <?php }?>
                                </a>
                            </div>
                            <div class="wrap-productshot__boxbc-content d-flex flex-column">
                                <div class="wrap-productshot__boxbc-content-aside-title mb10">
                                    <h3 class="line-1 wrap-productshot__boxbc-content-titles pt5">
                                        <a href="<?=$v["type"]?>/<?=$alias_l.$v["tenkhongdau"]?>" title="<?=$v["ten"]?>"
                                            rel="dofollow"><?=$v["ten"]?></a>
                                    </h3>
                                </div>
                                <div class="wrap-productshot__boxbc-content-price d-flex flex-wrap mb5">
                                    <span
                                        class="wrap-productshot__boxbc-content-price-news"><?=($v["giaban"]!=0) ? $func->changeMoney($v["giaban"],$lang):'Liên hệ';?></span>
                                    <?php if($v["giacu"] !=0){ ?>
                                    <del
                                        class="wrap-productshot__boxbc-content-price-old"><?=($v["giacu"]!=0) ?  $func->changeMoney($v["giacu"],$lang):'';?></del>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php } ?>
</section>