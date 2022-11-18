<section class="footer "
    style="background-image: url(<?= _upload_hinhanh_l.$bg_footer['photo']?>) !important; background-size:cover;">

    <div class="futto">

        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-5 item colorwhite width100mobile pt15 pb50 wow fadeInLeft mb-m-20"
                        data-wow-delay="0.2s">
                        <ul>
                            <p>RÈM CỬA THÚY NGA</p><span></span>
                            <li><?= htmlspecialchars_decode($footer['mota'])?></li>
                        </ul>
                    </div>
                    <div class="col-4 item width100mobile  pt15 pb50 colorwhite wow fadeInDown mb-m-20"
                        data-wow-delay="0.2s">
                        <ul>
                            <p>QUY ĐỊNH & CHÍNH SÁCH</p><span></span>
                            <?php foreach($chinhsach as $key => $value){?>
                            <li class="pt15">
                                <a href="<?= $value['type']?>/<?= $value['tenkhongdau'] ?>"
                                    class="colorwhite thongtinFooter">
                                    <img src="assets/images/homedecor/eclip.png" class="pr7" />
                                    <?=htmlspecialchars_decode($value['ten'])?>

                                </a>
                            </li>
                            <?php }?>



                        </ul>
                    </div>
                    <div class="col-3 item width100mobile pt15 pb50 wow fadeInRight mb-m-20" data-wow-delay="0.2s">
                        <ul>
                            <p>MAPS</p>
                        </ul><span></span>
                        <div id="google-map" class="mb10 o-hidden clearfix">

                            <?=htmlspecialchars_decode($row_setting['iframe_map'])?>

                        </div>


                    </div>
                    <div class="col-12 item grid-chinhanh">
                        <?php foreach($chinhanh as $key => $value){?>
                        <div class="chinhanhremcua">
                            <div class="tenchinhanh">
                                <?= $value['ten']?>
                            </div>
                            <div class="vitrichinhanh">
                                <?=htmlspecialchars_decode($value['mota'])?>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>