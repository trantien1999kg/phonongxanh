<?php

	$page_index=$deviceType=='phone' ? 20 : 20;

	$viewed = [];

	if(isset($_SESSION['view'])){
		$viewed = $_SESSION['view'];
	}else{
		$_SESSION['view'] = array();
	}
	
	$row_setting= $db->rawQueryOne("select * from #_setting limit 0,1");

	$logo = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo'));

	$logo_mobile=$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo_mobile'));

	$bg_dangkymobile=$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_dangkymobile'));

	$logo_footer =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logofooter'));

	$seoPage =$db->rawQueryOne("select photo_$lang,options from #_bannerqc where hienthi=1 and type=? limit 0,1",array('hinhdaidien'));

	$socical = $db->rawQuery("select id,photo_$lang as photo,ten_$lang as ten,link from #_photo where hienthi=1 and type=?",array('mangxahoi'));

	$bg_footer =$db->rawQueryOne("select photo_$lang from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_footer'));

	$bg_danhmuc =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_danhmuc'));

	
	$iconSPNB =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_sanphamnoibat'));

	$iconDICHVU =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_dichvu'));

	$banner =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('banner'));

	$chinhsach = $db->rawQuery("select type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet where type=? and hienthi=1 order by stt asc,id desc",array('chinh-sach'));

	// index

	$hotline= $db->rawQuery("select ten_$lang as ten,phone from #_map where hienthi=1 and type=? order by stt asc",array('hotline'));

	$footer=$db->rawQueryOne("select mota_$lang as mota from #_company where type=? limit 1",array('footer'));

	$maps = $db->rawQuery("select id,ten_$lang, diachi_$lang, phone, email,website,iframe_map from #_map where hienthi=1 order by stt asc,id desc limit 0,2");
	
	$list_c1 = $db->rawQuery("select id, ten_$lang as ten, photo ,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and type=? order by stt asc",array('san-pham'));
	
	$dichvu=$db->rawQuery("select id , ten_$lang as ten , tenkhongdau_$lang as tenkhongdau , mota_$lang as mota , type , photo from #_baiviet where hienthi=1 and noibat=1 and type=?",array('dich-vu'));

	$projects_c1=$db->rawQuery("select id, ten_$lang as ten, photo ,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and type=? order by stt asc",array('du-an'));

	$videos=$db->rawQuery("select id, ten_$lang as ten, mota_$lang as mota, links,photo from #_video where type=? order by stt asc,id asc",array('video'));

	$danhmucnoibat=$db->rawQueryOne("select id , title_$lang as title , mota_$lang as mota , type , photo from #_seopage where type=? limit 0,1",array('du-an'));

	$visao=$db->rawQuery("select id , ten_$lang as ten , tenkhongdau_$lang as tenkhongdau , type , photo from #_baiviet where type=? limit 0,3",array('vi-sao'));

	$feedback=$db->rawQuery("select id , ten_$lang as ten , tenkhongdau_$lang as tenkhongdau , type , photo from #_baiviet where type=?",array('feedback'));

	$news=$db->rawQuery("select id , ten_$lang as ten , ngaytao ,tenkhongdau_$lang as tenkhongdau , type , photo from #_baiviet where hienthi=1 and noibat=1 and type=?",array('tin-tuc'));

	$featuredcategory= $db->rawQuery("select id , ten_$lang as ten, tenkhongdau_$lang as tenkhongdau , photo ,type from #_baiviet_list where hienthi=1 and noibat=1 and type=? order by stt asc,id desc",array('san-pham'));

	$featuredproducts=$db->rawQuery("select id , ten_$lang as ten , giaban , ngaytao ,tenkhongdau_$lang as tenkhongdau , type , photo from #_baiviet where  hienthi=1 and noibat=1 and type=?",array('san-pham'));

	

	//B??? l???c

?>