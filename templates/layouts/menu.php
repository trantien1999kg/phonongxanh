<nav class="wrapper-nav__menu d-none-m d-none-tablet">



    <div class="col l-12 m-12 c-12">

        <ul class="nav-menu d-flex justify-content-center">

            <li class="<?php if($com=='' || $com=='index') echo ' active';?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2>
                    <?php }?>
                    <a href="" title="Trang chủ" rel="dofollow">TRANG CHỦ</a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>

            <li class="<?php if($com=='gioi-thieu') echo ' active';?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2>
                    <?php }?>
                    <a href="gioi-thieu" title="Giới thiệu" rel="dofollow">GIỚI THIỆU</a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>

            <li class="<?php if($com=='san-pham') echo ' active';?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2>
                    <?php }?>
                    <a href="san-pham" title="SẢN PHẨM" rel="dofollow">SẢN PHẨM</a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
                  <?php if(count($list_c1)>0){?>

                        <ul class="">

                            <?php foreach($list_c1 as $k=>$v){

                                $c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($v['id']));
                                
                                ?>       
                            <li class="p-relative">

                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                                <h3>

                                    <?php }?>

                                    <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>" rel="dofollow" title="<?= $v['ten']?>"><?= $v['ten']?></a>

                                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                                </h3>

                                <?php }?>

                                <?php if(count($c2)>0){?>

                                <ul>

                                <?php

                                    foreach($c2 as $key =>$vc2){

                                        $c3 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_item where hienthi=1 and id_cat=? order by stt asc,id desc",array($vc2['id']));

                                ?>
                                    <li class="p-relative">

                                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                                        <h4>

                                            <?php }?>

                                            <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>/<?= $vc2['tenkhongdau']?>" rel="dofollow" title="<?= $vc2['ten']?>"><?= $vc2['ten']?></a>

                                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                                        </h4>

                                        <?php }?>

                                        <?php if(count($c3)>0){ ?>

                                            <ul>

                                                <?php
                                                    foreach($c3 as $key =>$vc3){
                                                ?>
                                                    <li>

                                                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                                                        <h5>

                                                            <?php }?>

                                                            <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>/<?= $vc3['tenkhongdau']?>" rel="dofollow" title="<?= $vc3['ten']?>"><?= $vc3['ten']?></a>

                                                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                                                        </h5>

                                                        <?php }?>

                                                    </li>

                                                <?php } ?>

                                            </ul>

                                        <?php }?>

                                        </li>

                                    <?php } ?>

                                </ul>

                                <?php } ?>

                            </li>

                            <?php }?>

                        </ul>

                        <?php }?>

            </li>

            
            <!---->


            <!---->

            <li class="<?php if($com=='dich-vu') echo ' active';?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2>
                    <?php }?>
                    <a href="dich-vu" title="DỊCH VỤ" rel="dofollow">DỊCH VỤ</a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>

            <li class="<?php if($com=='tin-tuc') echo ' active';?>">

                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                <h2>

                    <?php }?>

                    <a href="tin-tuc" title="KỸ THUẬT CHĂM SÓC" rel="dofollow">KỸ THUẬT CHĂM SÓC</a>

                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                </h2>

                <?php }?>

                
            </li>
            
            <li class="<?php if($com=='video') echo ' active';?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2>
                    <?php }?>
                    <a href="video" title="VIDEO" rel="dofollow">VIDEO</a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>

            <li class="<?php if($com=='lien-he') echo ' active';?> p-relative">

                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                <h2>

                    <?php }?>

                    <a href="lien-he" title="Liên hệ" rel="dofollow">LIÊN HỆ</a>

                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                </h2>

                <?php }?>

            </li>






        </ul>

    </div>



</nav>