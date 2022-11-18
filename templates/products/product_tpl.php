<?php $link_search = $com ?>

<section class="products-page">

    <div class="grid wide">

        <div class="row mt20 mt-m-10 mt-t-10">

            <div class="col l-12 m-12 c-12" style="margin-bottom:0 !important;">

                <div class="title-default t-center mb30 mb-m-10 mb-t-10 p-relative">

                    <h1>

                        <span>
                            <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?>
                        </span>

                    </h1>

                </div>

            </div>

        </div>

        <div class="row mt20 mt-m-10 mt-t-10">

            <div class="col l-12 m-12 c-12">

                <div class="box__change__search">
                    <span class="title_filer">Sắp Xếp: </span>
                    <select name="sortby" class="select_filter" id="sortby">
                        <option value="">
                            Chọn Lọc
                        </option>
                        <option value="giaban-asc">
                            Giá từ thấp tới cao
                        </option>
                        <option value="giaban-desc">
                            Giá từ cao tới thấp
                        </option>
                        <option value="ten_vi-asc">
                            Sắp xếp A-Z
                        </option>
                        <option value="ten_vi-desc">
                            Sắp xếp Z-A
                        </option>
                    </select>
                </div>

            </div>

        </div>

        <?php if($seo->getSeo('subject')!='' && $seo->getSeo('content')!=''){ ?>

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <?php if($seo->getSeo('subject')!=''){ ?>

                <div class="box-description mt20">

                    <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>

                </div>

                <?php }?>

                <?php if($seo->getSeo('content')!=''){ ?>

                <div class="h__box__subject p-relative pb40">

                    <div class="wrapper-toc mt10">

                        <div class="content ul-list-detail">

                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                        </div>

                    </div>

                </div>

                <?php }?>

            </div>

        </div>

        <?php }?>

        <div class='row mt30'>

            <div class="col l-12 m-12 c-12">

                <div class="box-product-detail">

                    <div class="row">

                        <div class="col l-12 m-12 c-12" style="margin-top:0!important;">

                            <div class="box-inPage">

                                <div class="tab-content">

                                    <div class="tab-panel">

                                        <?php if(count($tintuc)>0){?>

                                        <div class="row" id="grid-view">

                                            <div class="col l-12 m-12 c-12">

                                                <div class="wrapper__realestatesale">

                                                    <div class="grid-4">
                                                        <?php foreach($tintuc as $key => $value){
                                                    
                                                            $alias_call = $func->getAlias($value['id_list'],'baiviet_list',$value['type']);

                                                            $alias_l = $func->checkListAlias($alias_call);

                                                            $photos = $db->rawQuery("select id,photo from #_baiviet_photo where type=? and id_baiviet=? order by stt asc, id desc",array($value["type"],$value["id"]));

                                                        ?>



                                                        <div
                                                            class="wrap-productshot__boxbc d-flex flex-column p-relative">
                                                            <div class="wrap-productshot__boxbc-outline"></div>
                                                            <div class="wrap-productshot__boxbc-img p-relative">
                                                                <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>"
                                                                    title="<?=$value["ten_$lang"]?>" rel="dofollow"
                                                                    class="d-block hover-left">
                                                                    <img loading=lazy
                                                                        src="<?=_upload_baiviet_l.$value["photo"]?>"
                                                                        alt="<?=$value["ten_$lang"]?>"
                                                                        <?=$func->errorImg()?>>
                                                                    <?php if($func->percentPrice($value["giacu"],$value["giaban"])>0){ ?>
                                                                    <div class="wrap-productshot__boxbc-img-sale">
                                                                        <span
                                                                            class="wrap-productshot__boxbc-img-sale-label">SALE</span>
                                                                        <span
                                                                            class="wrap-productshot__boxbc-img-sale-content"><?=$func->percentPrice($v["giacu"],$v["giaban"])?></span>
                                                                    </div>
                                                                    <?php }?>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="wrap-productshot__boxbc-content d-flex flex-column">
                                                                <div
                                                                    class="wrap-productshot__boxbc-content-aside-title mb10">
                                                                    <h3
                                                                        class="line-1 wrap-productshot__boxbc-content-titles">
                                                                        <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>"
                                                                            title="<?=$value["ten_$lang"]?>"
                                                                            rel="dofollow"><?=$value["ten_$lang"]?></a>
                                                                    </h3>
                                                                </div>
                                                                <div
                                                                    class="wrap-productshot__boxbc-content-price d-flex flex-wrap mb10">
                                                                    <span
                                                                        class="wrap-productshot__boxbc-content-price-news"><?=($value["giaban"]!=0) ? $func->changeMoney($value["giaban"],$lang):'Liên hệ';?></span>
                                                                    <?php if($value["giacu"] !=0){ ?>
                                                                    <del
                                                                        class="wrap-productshot__boxbc-content-price-old"><?=($value["giacu"]!=0) ?  $func->changeMoney($value["giacu"],$lang):'';?></del>
                                                                    <?php } ?>

                                                                </div>
                                                            </div>
                                                        </div>




                                                        <?php }?>
                                                    </div>
                                                </div>
                                                <div class="wrapper__realestatesale-paging mt95">

                                                    <?php if(!$func->isAjax()){?>

                                                    <div id="pagingPage"><?=$paging?></div>

                                                    <?php }?>

                                                </div>

                                            </div>

                                        </div>



                                    </div>

                                    <?php }?>

                                </div>

                            </div>

                            <?php if($com!='tags-san-pham'){ ?>

                            <input type="hidden" name="keywords" id="keyword" value="<?=$_GET["keywords"]?>" />

                            <input type="hidden" name="href" value="<?=$link_search?>">

                            <?php }else{ ?>

                            <input type="hidden" name="keywords" id="keyword" value="<?=$_GET["keywords"]?>" />

                            <input type="hidden" name="href" value="<?=$link_search?>">

                            <?php } ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    </div>

</section>
<script>
$(function() {
    $('#sortby').change(function() {
        let _this = $(this);
        let a = _this.val();
        let href = $('input[name="href"]').val();
        window.location.href = `${href}?sortby=${a}`;
    });
});
</script>