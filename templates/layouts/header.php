<header
    class="wrapper-header scroll-fixed d-none-m d-none-tablet d-none-tl <?php if($source!='index'){echo 'box-shadown-tpl';} ?>">
    <div class="grid wide">
        <div class="row align-items-center">
            <div class="col-12 item display-flex  pt10 pb15">

                <div class="col-4">
                    <div class="wrapper-header__logo">
                        <a href="" class="p-relative ratio-img" img-width="308" img-height="73">
                            <img src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_hinhanh_l.$logo["photo"]?>" alt="Logo trang chủ"
                                class="ratio-img__content img-scale">
                        </a>
                    </div>
                </div>

                <div class="col-5">
                    <div class="nav-menu__formsearchheader d-flex align-items-center">

                        <input role="search-input" type="text" name="keywords" id="keywordspc" placeholder="Tìm kiếm">
                        <span class="border-right">

                        </span>
                        <button class="nav-menu__formsearchheader-button" data-btn-search-pc="" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>

                    </div>
                </div>

                <div class="col-3">
                    <div class="box1_hotline">
                        <div class="box_hotline">
                            <img src="./assets/images/tienIMG/telephone.png" alt="Hotline" class="mr20">
                            <div class="hotline">
                                <div class="text_hotline">
                                    Hotline
                                </div>
                                <div class="hotline_number">
                                    <?= $row_setting['hotline']?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="navigation_menu" style="background-color: var(--html-bg-website);">
        <div class="grid wide">
            <div class="row">
                <div class="col-12 item">

                    <?php include_once _layouts."menu.php";  ?>

                </div>
            </div>
        </div>
    </section>

</header>