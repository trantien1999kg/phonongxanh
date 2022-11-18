<footer class="footer pb20 fadeInRight wow" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s"
    style="background:url('<?=_upload_hinhanh_l.$bg_footer["photo_".$lang]?>') center center/cover">

    <div class="box-footer">

        <div class="grid wide">

            <div class="row p-relative">


                <div class="col l-4 m-6 c-12 p-relative">
                    <div class="box-mg info_footer">



                        <span><img src="<?= _upload_hinhanh_l.$logo_footer['photo']?>" alt="PHÚC NGUYÊN XUYÊN MỘC"
                                class="logoFOOTER mb15"></span>



                        <div class="desc-footer mt20">

                            <?=htmlspecialchars_decode($footer["mota"])?>

                        </div>



                    </div>

                </div>
                <div class="col l-4 m-6 c-12 p-relative">
                    <span class="border_footer"> </span>
                    <div class="box-mg center_footer">

                        <div class="title-footer p-relative mt15">

                            <span>QUY ĐỊNH & CHÍNH SÁCH</span>

                        </div>

                        <div class="desc-footer mt20">

                            <ul class="ul-list-none">

                                <?php foreach($chinhsach as $key => $value){?>

                                <li>
                                    <a href="<?=$value["type"]?>/<?= $value['tenkhongdau']?>"
                                        title="<?= $value['ten']?>">
                                        <img src="./assets/images/tienIMG/muiten.png" alt="<?= $value['ten']?>"
                                            class="mr5">
                                        <?= $value['ten']?>
                                    </a>
                                </li>
                                <?php }?>
                                <li>
                                    <?php if($deviceType != 'phone'){?>
                                    <span class="d-block ratio-img" img-width="132" img-height="45">

                                        <img class="ratio-img__content img-scale"
                                            src="./assets/images/loading_image.svg"
                                            data-src="./assets/images/tienIMG/bocongan.png">
                                    </span>
                                    <?php }else{ ?>
                                    <div class="bocongthuong">
                                        <span class="d-block ratio-img" img-width="132" img-height="45">

                                            <img class="ratio-img__content img-scale"
                                                src="./assets/images/loading_image.svg"
                                                data-src="./assets/images/tienIMG/bocongan.png">
                                        </span>
                                    </div>
                                    <?php } ?>
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>





                <div class="col l-4 m-6 c-12 p-relative">

                    <span class="border_footer"> </span>
                    <div class="box-mg ml20 box-mg--lastchild">

                        <div class="title-footer title-footer--modifiers mt15">

                            <span>KẾT NỐI VỚI CHÚNG TÔI</span>

                        </div>

                        <div class="mt20">

                            <div class="wrapper-form__footer">



                                <div class="fb-page" data-href="<?=$row_setting['facebook']?>" data-width="259"
                                    data-height="157" data-small-header="false" data-adapt-container-width="true"
                                    data-hide-cover="false" data-show-facepile="true" data-show-posts="true">

                                    <div class="fb-xfbml-parse-ignore">

                                        <blockquote cite="<?=$row_setting['facebook']?>"><a
                                                href="<?=$row_setting['facebook']?>"><?=$row_setting['name_'.$lang]?></a>

                                        </blockquote>

                                    </div>

                                </div>
                                <div class="mt20 mb20">

                                    <?=$func->getSocial($socical)?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</footer>

<div class="menu-bottom d-none">
    <ul class="clearfix">
        <li>
            <a href="" title="HomePage">
                <i class="fal fa-home"></i>
                <span class="sub">Trang chủ</span>
            </a>
        </li>
        <li>
            <a href="tel:<?=str_replace('.','',str_replace(' ','',$row_setting['hotline']))?>" title="clickToCall">
                <i class="fa-light fa-circle-phone-flip"></i>
                <span class="sub">Hotline</span>
            </a>
        </li>
        <li>
            <a href="" class="p-relative d-block" title="Trang chủ">

                <img class="scaleimg" width="70" height="70" src="<?=_upload_hinhanh_l.$logo_mobile["photo"]?>"
                    alt="Trang chủ" onerror="this.src='images/no-image.jpg'" />

            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-target="#options" id="tool-1" title="Tiện ích" class="js-mobi-tool">
                <i class="fas fa-ellipsis-h mobi-tool-act"></i>
                <span class="sub">Tiện ích</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-target="#menuSide" id="tool-2" class="js-mobi-tool">
                <span class="bars-menu mobi-tool-act"></span>
                <span class="sub">Menu</span>
            </a>
        </li>
    </ul>
</div>