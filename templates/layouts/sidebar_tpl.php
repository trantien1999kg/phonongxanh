<?php

    $kygui = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet where hienthi=1 and type=? and noibat=1 order by stt asc",array('ky-gui'));

    $news = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type,photo from #_baiviet where hienthi=1 and type=? and noibat=1 order by stt asc",array('tin-tuc'));

?>

<div class="realestate-sale__sidebar">

    <?php if($deviceType=='computer'){ ?>

    
        <div class="realestate-sale__sidebar__top-box realestate-sale__sidebar__top-box--mobile">

            <ul class="realestate-sale__sidebar__top-box-list">

                <?php foreach($nhadatban_c1 as $key => $value){

                    $numbHome = $db->rawQuery('select id from #_baiviet where hienthi=1 and type=? and id_list=?',array('nha-dat-ban',$value["id"]));
                    
                    ?>

                <li class="realestate-sale__sidebar__top-box-items">

                    <div class="mg0 realestate-sale__sidebar__top-box-title line-2">

                        <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" rel="dofollow" title="<?=$value["ten"]?>"><?=$value["ten"]?> <?=count($numbHome)!=0 ? '('.count($numbHome).')':''?></a>

                    </div>

                </li>

                <?php }?>

            </ul>

        </div>

    </div>

    <?php }?>

    <div class="realestate-sale__sidebar__top mb20 mt-m-20">

        <div class="realestate-sale__sidebar__top-title">

            <span>SẢN PHẨM LIÊN QUAN</span>

        </div>

        <div class="realestate-sale__sidebar__top-box realestate-sale__sidebar__top-box--mobile">

          <?php foreach($tintuc as $key => $value){ ?>

          <div class="realestate-sale__sidebar__top-box-aside d-flex flex-wrap mb20">

            <div class="realestate-sale__sidebar__top-box-aside-img">

                <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" title="<?=$value["ten_$lang"]?>" class="d-block hover-left ratio-img" img-width="117" img-height="85">

                    <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg" data-src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?=$value["ten_$lang"]?>" <?=$func->errorImg()?>>

                </a>

            </div>

            <div class="realestate-sale__sidebar__top-box-aside-detail">

               <h5 class="realestate-sale__sidebar__top-box-aside-detail-title line-4 line-4-m mg0">

                    <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" rel="dofollow" title="<?=$value["ten_$lang"]?>"><?=$value["ten_$lang"]?></a>

               </h5>

            </div>

          </div>

          <?php }?>
          
            <div class="realestate-sale__sidebar__top-box-view mt20">

                <a href="san-pham" rel="dofollow" title="Xem tất cả">Xem tất cả</a>

            </div>


        </div>

    </div>

    

</div>