<?php 

    $bg_tintuc = $func->OneDataPhoto(null,'bg_tintuc','limit 0,1',"object");                                    // Background tin tức

    $bg_banner = $func->OneDataPhoto("mota_$lang as mota,",'bg-slider','limit 0,1',"object");                                    // Background tin tức

    $bg_boloc = $func->OneDataPhoto(null,'bg-boloc','limit 0,1',"object");                                    // Background tin tức

    $bg_motadangky = $func->OneDataPhoto("mota_$lang as mota,",'bg-motadangky','limit 0,1',"object");                                    // Background tin tức

    $bg_dangky = $func->OneDataPhoto(null,'bg-dangky','limit 0,1',"object");                        // Background tin tức và video

    $bg_gioithieumb = $func->OneDataPhoto(null,'bg_gioithieu','limit 0,1',"object");                              // Background giới thiệu

    $ha_gioithieu = $func->OneDataPhoto(null,'ha-gioithieu','limit 0,1',"object");                              // Hình ảnh giới thiệu
   
    $introTop = $func->AllDataPhoto("ten_$lang as ten,number,",'intro-top','limit 0,4','array');                // Lấy toàn bộ thông số giới thiệu

    $imgmap = $func->AllDataPhoto("ten_$lang as ten,number,",'img-map','limit 0,4','array');                // Lấy toàn bộ thông số giới thiệu

    $anhgiaodich = $func->AllData('id,id_list,luotxem,','anh-giao-dich','','','array');              // Lấy toàn bộ dịch vụ
    

?>

<div class="mm-page mm-slideout" id="mm-0">
<section class="pt50 pb75">
    <div class="container">
        <div class="row">
            <div class="col-12 item p-relative">
                <div class="col-12">
                    <div class="grid-why">
                        <?php foreach($visao as $key=>$value){ $seoDB = $seo->getSeoDB($value['id'],'baiviet','man',$value["type"]);?>
                        <div class="why display-flex js-tab" data-target="#why<?=$key?>">
                            <div class="img_why">
                                <span class="d-block ratio-img" img-width="88" img-height="87">
                                    <img class="ratio-img__content spinimg img-scale" src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?=$value["ten"]?>">
                                </span>
                            </div>
                            <div class="title_desc_why">
                                <div class="title_why mb15">
                                    <?=$value["ten"]?>
                                </div>
                                <div class="desc_why">
                                    <?=$seoDB["description_$lang"]?>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cartegory_video">
    <div class="container">
        <div class="row">
            <div class="col-12 carte_video item">
                <div class="list_cartegory pt40 pb40 pr25 pl25"
                    style="background:url('<?= _upload_hinhanh_l.$bg_danhmuc['photo']?>') no-repeat center center/cover;">
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                    <h2 class="mg0">
                        <?php }?>

                        <a href="san-pham" class="listDM">DANH MỤC SẢN PHẨM</a>
                    </h2>

                    <?php if($list_c1){?>

                    <ul class="polime pt40">
                        <?php foreach($list_c1 as $key => $value){
                            $list_c2 = $db->rawQuery("select id , ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($value['id']));                                                           
                        ?>

                        <li class="pt10 pb10 list">
                            <div class="display-flex">
                                <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>"
                                    class="product_category1 fsvw_category col-11">
                                    <div class="icon_category1">
                                        <div class="box_icon">
                                            <img src="<?=_upload_baiviet_l.$value["photo"]?>" class="" alt="">
                                        </div>
                                    </div>
                                    <?= $value['ten']?>
                                </a>

                                <?php if($list_c2) { ?>
                                <span class="drop event-menu p-relative col-1"></span>
                                <?php } ?>
                            </div>
                            <?php if($list_c2){ ?>
                            <ul class="danhmuc2" style="display: none;">
                                <?php foreach($list_c2 as $k => $v){ 
                                    $list_c3 = $db->rawQuery("select id , ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_item where hienthi=1 and id_cat=? order by stt asc,id desc",array($v['id']));
                                ?>
                                <li class="listDM2 dropdown">
                                    <div class="display-flex">
                                        <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>/<?= $v['tenkhongdau']?>"
                                            class="tenDM2 col-10">
                                            <i class="fas fa-angle-double-right"></i> &nbsp;<?= $v['ten']?>
                                        </a>
                                        <?php if($list_c3) { ?>
                                        <span class="drop event-menu p-relative col-2"></span>
                                        <?php } ?>
                                    </div>
                                    <?php if($list_c3){ ?>
                                    <ul class="danhmuc3" style="display: none;">
                                        <?php foreach($list_c3 as $ky => $va){ ?>
                                        <li class="listDM3">
                                            <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>/<?= $va['tenkhongdau']?>"
                                                class="tenDM3"><i
                                                    class="fa-solid fa-circle-arrow-right"></i>&nbsp;<?= $va['ten']?></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                    <?php } ?>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </li>

                        <?php }?>
                    </ul>

                    <?php } ?>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                    <?php }?>
                </div>
                <div class="list_video">
                    <div class="videotop mb20 p-relative">
                        <a href="<?=$videos[0]['links']?>" id="linkchange" data-fancybox="videos" img-width="740" img-height="330" class="d-block ratio-img">
                            <img src="./assets/images/loading_image.svg" data-src="<?= _upload_hinhanh_l.$videos[0]['photo']?>" class="ratio-img__content img-scale">
                            <span class="playvideo"><i class="fa-brands fa-youtube"></i></span>
                        </a>
                    </div>

                    <div class="videoslide">
                        <div class="owl-carousel owl-theme" id="owl-video">
                            <?php foreach($videos as $key => $value){ ?>

                            <?php if ($key != 0) { ?>
                            <a href="<?= $value['links']?>" id="linkchange" data-fancybox="videos" img-width="371" img-height="238" class="p-relative d-block ratio-img">
                                <img src="./assets/images/loading_image.svg" data-src="<?= _upload_hinhanh_l.$value['photo']?>" class="ratio-img__content img-scale">
                                <span class="playvideo"><i class="fa-brands fa-youtube"></i></span>
                            </a>
                            <?php  }  ?>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product mb50 pt80">
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <div class="title_featured_product mb50">
                    <img src="<?= _upload_hinhanh_l.$iconDICHVU['photo']?>" alt="PHỐ NÔNG XANH">
                    <a href="san-pham" class="name_featured">
                        SẢN PHẨM NỔI BẬT
                    </a>
                </div>
                <div class="owl-carousel owl-theme owl-sanpham">
                    <?php foreach ($featuredproducts as $k => $v) {?>
                    <div class="wrap-productshot__boxbc d-flex flex-column p-relative">
                        <div class="wrap-productshot__boxbc-outline"></div>
                        <div class="wrap-productshot__boxbc-img p-relative">
                            <a href="<?=$v["type"]?>/<?=$alias_l.$v["tenkhongdau"]?>" title="<?=$v["ten_$lang"]?>"
                                rel="dofollow" class="d-block hover-left">
                                <img loading=lazy src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten_$lang"]?>"
                                    <?=$func->errorImg()?>>
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
                                <h3 class="line-1 wrap-productshot__boxbc-content-titles">
                                    <a href="<?=$v["type"]?>/<?=$alias_l.$v["tenkhongdau"]?>" title="<?=$v["ten"]?>"
                                        rel="dofollow"><?=$v["ten"]?></a>
                                </h3>
                            </div>
                            <div class="wrap-productshot__boxbc-content-price d-flex flex-wrap mb10">
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
</section>



<section class="service mb50">
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <div class="title_featured_product mb50">
                    <img src="<?= _upload_hinhanh_l.$iconDICHVU['photo']?>" alt="PHỐ NÔNG XANH">
                    <a href="dich-vu" class="name_featured">
                        DỊCH VỤ ƯA THÍCH
                    </a>
                </div>
                <div class="owl-carousel owl-theme owl-sanpham">
                    <?php foreach ($dichvu as $k => $v) {?>
                    <div class="wrap-productshot__boxbc d-flex flex-column p-relative">
                        <div class="wrap-productshot__boxbc-outline"></div>
                        <div class="wrap-productshot__boxbc-img p-relative">
                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" title="<?=$v["ten"]?>" rel="dofollow"
                                class="d-block hover-left">
                                <img loading=lazy src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                    <?=$func->errorImg()?>>
                            </a>
                        </div>
                        <div class="wrap-productshot__boxbc-content d-flex flex-column">
                            <div class="wrap-productshot__boxbc-content-aside-title mt10 mb10">
                                <h3 class="line-1 wrap-service__boxbc-content-titles">
                                    <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" title="<?=$v["ten"]?>"
                                        rel="dofollow"><?=$v["ten"]?></a>
                                </h3>
                            </div>

                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="banner_index mt25">
    <span class="d-block ratio-img" img-width="1440" img-height="460">
        <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
            data-src="<?=_upload_hinhanh_l.$banner["photo"]?>" alt="MÁI NGÓI PHÚC NGUYÊN">
    </span>
</section>

<?php include_once _layouts."danhmucnoibat.php";  ?>

<?php if($deviceType == 'phone'){?>
<section class="wrapper-introduces pt330 wow fadeInRight" data-wow-offset="50" data-wow-duration="3"
    data-wow-delay="0.2s"
    style="background:url('<?=_upload_hinhanh_l.$bg_gioithieumb->photo?>') no-repeat center center/cover;">
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <div class="box_Introduces pd20">
                    <div class="wrapper-introduces__title mb25">
                        <a href="gioi-thieu" rel="dofollow" title="<?=$about["ten"]?>" class="center">
                            <div class="title_Introduces">
                                <?= $row_setting['name_vi']?>
                            </div>
                        </a>
                        <div class="name_Introduces mt25">
                            <?= $about["ten"]?>
                        </div>
                    </div>
                    <div class="wrapper-introduces__title-des"><?= htmlspecialchars_decode($about["mota"])?></div>
                    
                        <div class="owl-carousel owl-theme" id="owl-gioithieu">
                            <?php foreach ($introTop as $k => $v) {?>
                            <div class="col-12 feedbacks_slide">

                                <a href="<?=_upload_hinhanh_l.$v["photo"]?>" data-fancybox="img-<?=$key?>"
                                    rel="dofollow" title="<?=$v["ten"]?>" class="d-block z-index-1 hover-left ratio-img"
                                    img-width="323" img-height="379">
                                    <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_hinhanh_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                        <?=$func->errorImg()?>>
                                </a>

                            </div>
                            <?php }?>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?php }else{?>
<section class="wrapper-introduces pt330 wow fadeInRight" data-wow-offset="50" data-wow-duration="3"
    data-wow-delay="0.2s"
    style="background:url('<?=_upload_hinhanh_l.$ha_gioithieu->photo?>') no-repeat center center/cover;">
    <div class="grid wide">
        <div class="row">
            <div class="col l-12 m-12 mb-m-20">
                <div class="box_Introduces pt35 pb50">
                    <div class="wrapper-introduces__title mb25">
                        <a href="gioi-thieu" rel="dofollow" title="<?=$about["ten"]?>" class="center">
                            <div class="title_Introduces">
                                <?= $row_setting['name_vi']?>
                            </div>
                        </a>
                        <div class="name_Introduces mt25">
                            <?= $about["ten"]?>
                        </div>
                    </div>
                    <div class="wrapper-introduces__title-des"><?= htmlspecialchars_decode($about["mota"])?></div>
                    <div class="wrapper-introduces__parameter containerGT pt20">
                        <div class="row">
                            <?php for($i=0;$i<count($introTop);$i++){ ?>
                            <div class="l-4 m-2-4 c-4 mb20 col-intro__check intro-col<?=$i?> d-flex flex-column">
                                <div class="wrapper-introduces__boxbottom flex-cl-1 d-flex flex-column">
                                    <div class="wrapper-introduces__boxbottom-img">
                                        <span class="d-block ratio-img" img-width="322.78" img-height="379">
                                            <img class="ratio-img__content img-scale"
                                                src="./assets/images/loading_image.svg"
                                                data-src="<?=_upload_hinhanh_l.$introTop[$i]["photo"]?>"
                                                alt="<?=$introTop[$i]["ten"]?>" <?=$func->errorImg()?>>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }?>



<section class="feedback">
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <div class="name_top_feedback mb70">
                    KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI
                </div>
                <div class="owl-carousel owl-theme" id="owl-feedback">
                    <?php foreach ($feedback as $k => $v) { $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);?>
                    <div class="col-12 feedbacks_slide pb90 pt45">

                        <a href="<?=_upload_baiviet_l.$v["photo"]?>" data-fancybox="img-<?=$key?>" rel="dofollow"
                            title="<?=$v["ten"]?>" class="d-block z-index-1 hover-left ratio-img" img-width="222"
                            img-height="118" style="max-width: 222px; margin: 0 auto;">
                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                <?=$func->errorImg()?>>
                        </a>
                        <a class="title_feedback mt30 line-4 center">
                            <?=$v['ten']?>
                        </a>
                        <div class="desc_feedback line-4">
                            <?=$seoDB["description_$lang"]?>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="news_index pt75 pb120">
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <div class="name_top_feedback mb70">
                    <a href="tin-tuc">MẸO LÀM VƯỜN</a>
                </div>
                <?php if($deviceType == 'phone'){?>
                <div class="owl-carousel owl-theme" id="owl-tintuc">
                    <?php foreach ($news as $k => $v) { $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);?>
                    <div class="col-12">

                        <a href="<?=_upload_baiviet_l.$v["photo"]?>" data-fancybox="img-<?=$key?>" rel="dofollow"
                            title="<?=$v["ten"]?>" class="d-block mb25I hover-left ratio-img" img-width="387"
                            img-height="299">
                            <img class="ratio-img__content border_news_img img-scale"
                                src="./assets/images/loading_image.svg" data-src="<?=_upload_baiviet_l.$v["photo"]?>"
                                alt="<?=$v["ten"]?>" <?=$func->errorImg()?>>
                        </a>

                        <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>" class="title_news">
                            <?=$v['ten']?>
                        </a>
                        <div class="desc_news line-3 mt15">
                            <?=$seoDB["description_$lang"]?>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <?php }else{?>
                <div class="grid-new">
                    <?php foreach ($news as $k => $v) { $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);?>
                    <div class="col-12">

                        <a href="<?=_upload_baiviet_l.$v["photo"]?>" data-fancybox="img-<?=$key?>" rel="dofollow"
                            title="<?=$v["ten"]?>" class="d-block mb25I hover-left ratio-img" img-width="387"
                            img-height="299">
                            <img class="ratio-img__content border_news_img img-scale"
                                src="./assets/images/loading_image.svg" data-src="<?=_upload_baiviet_l.$v["photo"]?>"
                                alt="<?=$v["ten"]?>" <?=$func->errorImg()?>>
                        </a>

                        <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>" class="title_news">
                            <?=$v['ten']?>
                        </a>
                        <div class="desc_news line-3 mt15">
                            <?=$seoDB["description_$lang"]?>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>

<section class="map">
    <div id="google-map1" class="mb10 o-hidden clearfix">

        <?=htmlspecialchars_decode($row_setting['iframe_map'])?>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 grid-map mt-175 item">

                <?php foreach ($imgmap as $k => $v) {?>
                <div class="col-12">
                    <span class="d-block ratio-img" img-width="297" img-height="295">
                        <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                            data-src="<?=_upload_hinhanh_l.$v["photo"]?>">
                    </span>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>

<?php if($deviceType == 'phone'){?>

<section class="wrapper-register mb70 mt75 p-relative wow fadeInDown" data-wow-offset="50" data-wow-duration="3"
    data-wow-delay="0.2s"
    style="background:url('<?=_upload_hinhanh_l.$bg_dangkymobile["photo"]?>') no-repeat center center/cover;">



    <div class="grid wide">

        <div class="row">

            <div class="col l-5 m-5 c-12 d-flex flex-column mb-m-20 mt-m-20">

                <div class="wrapper-register__boxleft" style="background-color: var(--html-bg-website) ;">

                    <div class="wrapper-register__title-default mb40">

                        ĐỂ LẠI THÔNG TIN LIÊN HỆ

                    </div>



                    <div class="wrapper-register__boxleft-form-row">

                        <div class="row">

                            <div class="col l-6 m-12 c-12 mb-m-18">

                                <input type="text" name="regis-index-fullname" placeholder="Nhập họ và tên">

                            </div>

                            <div class="col l-6 m-12 c-12">

                                <input type="text" name="regis-index-phone" placeholder="Nhập số điện thoại">
                            </div>

                        </div>

                    </div>

                    <div class="wrapper-register__boxleft-form-row">

                        <div class="row">

                            <div class="col l-12 m-12 c-12">

                                <input type="text" name="regis-index-email" placeholder="Nhập email">


                            </div>

                        </div>

                    </div>

                    <div class="wrapper-register__boxleft-form-row wrapper-register__boxleft-form-row-mb30 mb-m-18">

                        <div class="row">

                            <div class="col l-12 m-12 c-12">

                                <textarea name="regis-index-content" cols="30" rows="5"
                                    placeholder="Nhập nội dung"></textarea>

                            </div>

                        </div>

                    </div>

                    <div class="wrapper-register__boxleft-form-row">
                        <button class="p-relative link_register wrapper-regis-btn">ĐĂNG KÍ</button>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>
<?php }else{?>

<section class="wrapper-register mb70 mt75 p-relative wow fadeInDown" data-wow-offset="50" data-wow-duration="3"
    data-wow-delay="0.2s">



    <div class="grid wide">

        <div class="row">

            <div class="col-12 item">
                <div class="col-12 display-flex" style="background-color: var(--html-bg-website)">
                    <div class="l-5 m-5 c-12 d-flex regis_left flex-column mb-m-20">

                        <div class="wrapper-register__boxleft">

                            <div class="wrapper-register__title-default mb40">

                                ĐỂ LẠI THÔNG TIN LIÊN HỆ

                            </div>
                            <div class="wrapper-register__boxleft-form-row">

                                <div class="row">

                                    <div class="col l-12 m-12 c-12">
                                        <input type="text" name="regis-index-fullname" placeholder="Nhập họ và tên">



                                    </div>

                                </div>

                            </div>
                            <div class="wrapper-register__boxleft-form-row">

                                <div class="row">

                                    <div class="col l-6 m-12 c-12 mb-m-18">
                                        <input type="text" name="regis-index-phone" placeholder="Nhập số điện thoại">


                                    </div>

                                    <div class="col l-6 m-12 c-12">
                                        <input type="text" name="regis-index-email" placeholder="Nhập Email">

                                    </div>

                                </div>

                            </div>



                            <div
                                class="wrapper-register__boxleft-form-row wrapper-register__boxleft-form-row-mb30 mb-m-18">

                                <div class="row">

                                    <div class="col l-12 m-12 c-12">

                                        <textarea name="regis-index-content" cols="30" rows="5"
                                            placeholder="Nhập nội dung"></textarea>

                                    </div>

                                </div>

                            </div>
                            <div class="wrapper-register__boxleft-form-row flex-center">
                                <button class="p-relative link_register wrapper-regis-btn">GỬI</button>

                            </div>



                        </div>

                    </div>
                    <div class="l-7 m-7 c-12 d-flex flex-column mb-m-20"
                        style="background:url('<?= _upload_hinhanh_l.$bg_dangky->photo?>') no-repeat center center/cover;">

                    </div>
                </div>
            </div>

        </div>

    </div>

</section>
<?php }?>
</div>