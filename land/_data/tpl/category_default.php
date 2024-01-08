<?php

	$setting=unserialize(@file_get_contents(DATA_DIR.'/setting/overnotes.dat'));
	ini_set('mbstring.http_input', 'pass');
	parse_str($_SERVER['QUERY_STRING'],$_GET);
	$keyword=isset($_GET['k'])?trim($_GET['k']):'';
	$category=isset($_GET['c'])?trim($_GET['c']):'';
	$page=isset($_GET['p'])?trim($_GET['p']):'';
	$base_title = !empty($setting['title'])? $setting['title'] : 'OverNotes';

?><!Doctype html>
<html lang="ja">

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W3XQCXS9');</script>
<!-- End Google Tag Manager -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=-1" />
	<meta name="format-detection" content="telephone=no" />
 <title><?php echo $current_category_name; ?>｜土地・分譲地情報（一覧）｜三重県で理想の注文住宅を実現｜平安コーポレーション</title>
    <meta name="keywords" content="<?php echo $current_category_name; ?>,土地,分譲地,土地探し" />
    <meta name="description"
        content="<?php echo $current_category_name; ?> | 三重県や奈良県で注文住宅をお届けする、平安コーポレーションは土地探しからお手伝いさせていただきます。当社がご紹介している分譲地・土地情報の一覧です。" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<!-- FAVICON -->
	<link rel="icon" href="../../favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<!-- STYLESHEET -->
	<link rel="stylesheet" media="all" href="../../css/styles.css" />
	<link rel="stylesheet" media="all" href="../../css/responsive.css" />
	<link rel="stylesheet" media="all" href="../../css/under.css" />
	<link rel="stylesheet" media="all" href="../../css/under_responsive.css" />
	<script src="../../js/jquery.js"></script>
	<!-- Google Analytics start -->
			    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@id": "https://www.citylights.estate/",
                    "name": "ホーム"
                }
            }, {
                "@type": "ListItem",
                "position": 2,
                "item": {
                    "@id": "https://www.citylights.estate/land/",
                    "name": "土地・分譲地情報（一覧）"
                }
            },
			{
                    "@type": "ListItem",
                    "position": 3,
                    "item": {
                        "@id": "https://www.citylights.estate/land/<?php echo $current_category_url; ?>",
                        "name": "<?php echo $current_category_name; ?>"
                    }
                }
			]
        }
    </script>
	<!-- Google Analytics end -->
</head>

<body id="" class="under">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3XQCXS9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div id="wrapper">
        <header class="header">
            <h1 class="header__logo"><a href="https://www.citylights.estate/"><img src="../../images/site_logo.svg" alt="三重県の平安コーポレーションの豊富な施工事例を一覧でご紹介します。" width="344" height="35"></a></h1>
            <div class="header__bar">
                <ul class="header__social pc">
                    <li class="header__social-item">
                        <a href="https://www.instagram.com/sacasso_heian/?utm_source=ig_profile_share&igshid=1j3en5kr08agi" target="_blank">
                            <img src="../../images/ins_icon.png" alt="Instagram" width="48" height="48">
                        </a>
                    </li>
                    <li class="header__social-item">
                        <a href="https://page.line.me/weu6068t?openQrModal=true" target="_blank">
                            <img src="../../images/line_icon.png" alt="Line" width="64" height="64">
                        </a>
                    </li>
                </ul>
                <p class="mb0 pc">
                    <a href="tel:0120-265-154" class="header__tel sweetlink">0120-265-154</a>
                </p>
                <p class="mb0 pc">
                    <a href="../../contact/" class="header__contact btn">Contact</a>
                </p>
                <div class="button">
                    <svg width="34px" height="34px" viewBox="0 0 34 34" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                        <line x1="0" y1="13" x2="34" y2="13" stroke-width="2" />
                        <line x1="0" y1="21" x2="34" y2="21" stroke-width="2" />
                        </g>
                        
                        <g>
                        <line x1="0" y1="17" x2="34" y2="17" stroke-width="2" />
                        <line x1="0" y1="17" x2="34" y2="17" stroke-width="2" />
                        </g>
                    </svg>
                </div>
            </div>
            <div class="nav-menu menu">
                <div class="inner">
                    <div class="menu__top">
                        <p class="menu__top-logo mb0">
                            <a href="https://www.citylights.estate/"><img src="../../images/site_logo.svg" alt="Heian Corporation" width="344" height="35"></a>
                        </p>
                        <p class="menu__top-contact mb0">
                            <a href="tel:0120-265-154" class="tel sweetlink">0120-265-154</a>
                            <span class="time">電話受付時間：9:00～18:00　定休日：水曜日</span>
                            <span class="address">三重県名張市鴻之台4番町60</span>
                        </p>
                        <ul class="menu__top-social">
                            <li class="item">
                                <a href="https://page.line.me/weu6068t?openQrModal=true" target="_blank">
                                    <img src="../../images/line_icon.png" alt="Line" width="64" height="64">
                                </a>
                            </li>
                            <li class="item">
                                <a href="https://www.instagram.com/sacasso_heian/?utm_source=ig_profile_share&igshid=1j3en5kr08agi" target="_blank">
                                    <img src="../../images/ins_icon.png" alt="Instagram" width="48" height="48">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="menu__bottom">
                            <ul class="nav nav__top">
                                <li class="nav__item"><a href="https://www.citylights.estate/">Top</a></li>
                                <li class="nav__item has-sub">
                                    <span>家づくりについて</span>
                                    <ul class="nav__sub col-2">
                                        <li class="nav__sub-item"><a href="../../house/index.html">コンセプト</a></li>
                                        <li class="nav__sub-item"><a href="../../house/function.html">機能性</a></li>
                                        <li class="nav__sub-item"><a href="../../house/air.html">全館空調</a></li>
                                        <li class="nav__sub-item"><a href="../../house/design.html">デザイン性</a></li>
                                        <li class="nav__sub-item"><a href="../../house/cost.html">コストパフォーマンス</a></li>
                                        <li class="nav__sub-item"><a href="../../house/after.html">保証とアフターメンテナンス</a></li>
                                    </ul>
                                </li>
                                <li class="nav__item has-sub">
                                    <span>ラインナップ</span>   
                                    <ul class="nav__sub col-2"> 
                                        <li class="nav__sub-item"><a href="../../lineup/index.html">【FREEDIA】</a></li>
                                        <li class="nav__sub-item"><a href="../../lineup/durability.html">【耐久の家】</a></li>
                                        <li class="nav__sub-item"><a href="../../lineup/simple.html">【シンプルな平屋】</a></li>
                                        <li class="nav__sub-item"><a href="../../lineup/garage.html">【ビルトインガレージの家】</a></li>
                                        <li class="nav__sub-item"><a href="../../lineup/insulation.html">【断熱の家】</a></li>
                                        <li class="nav__sub-item"><a href="../../lineup/freedom.html">【自由な箱の家（MY BOX）】</a></li>
                                        <li class="nav__sub-item"><a href="../../lineup/zeh.html">【未来を創るZEHの家】</a></li>
                                        <li class="nav__sub-item"><a href="../../lineup/tbox.html">【T-BOX】</a></li>
                                    </ul>
                                </li>
                                <li class="nav__item has-sub">
                                    <span>施工事例</span>
                                    <ul class="nav__sub col-2">
                                        <li class="nav__sub-item"><a href="../../case/">施工事例</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav nav__bottom">
                                <li class="nav__item has-sub">
                                    <span>分譲地・土地情報</span>
                                    <ul class="nav__sub">
                                        <li class="nav__sub-item"><a href="../../land/">分譲地・土地情報</a></li>
                                    </ul>
                                </li>
                                <li class="nav__item has-sub">
                                    <span>会社案内</span>
                                    <ul class="nav__sub">
                                        <li class="nav__sub-item"><a href="../../company/index.html">会社概要・店舗紹介・スタッフ紹介</a></li>
                                    </ul>
                                </li>
                                <li class="nav__item has-sub">
                                    <span>各種お問い合わせ</span>
                                    <ul class="nav__sub">
                                        <li class="nav__sub-item"><a href="../../document/">資料請求</a></li>
                                        <li class="nav__sub-item"><a href="../../event/">各種イベントへのご参加</a></li>
                                        <li class="nav__sub-item"><a href="../../contact/">無料相談・お問い合わせ</a></li>
                                    </ul>
                                </li>
                                <li class="nav__item has-sub">
                                    <span>各種お知らせ</span>
                                    <ul class="nav__sub">
                                        <li class="nav__sub-item"><a href="../../info/">お知らせ・スタッフブログ・イベント情報</a></li>
                                    </ul>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
        </header>
		<!-- end <header>-->
		<main>
			<div id="top_info" class="land-blog">
                <div class="inner">
                    <div class="udr-box-h2">
                        <h2 class="udr-h2-jp"><?php echo $current_category_name; ?></h2>
                        <p class="udr-h2-en">LAND</p>
                    </div>
                </div>
            </div>
            <!-- #top_info end -->
            <div id="topic_path">
                <div class="inner">
                    <ul>
                        <li><a href="https://www.citylights.estate/">ホーム</a></li>
						    <li><a href="../">土地・分譲地情報（一覧）</a></li>
                        <li><?php echo $current_category_name; ?></li>
                    </ul>
                </div>
            </div>
            <!-- #topic_path end -->
            <div id="content">
                <div class="inner">
				<section class="udr-section-h3">
				<div class="udr-box-h3">
                            <p class="udr-h3-en">LAND</p>
                            <h3 class="udr-h3-jp"><?php echo $current_category_name; ?></h3>
                        </div>
										<p class="txt">三重県や奈良県での注文住宅は、地元密着の「平安コーポレーション」にお任せください。当社ではお客様の土地探しからお手伝いさせていただきます。
	</p>
	<p class="txt">
こちらは、当社がご紹介している分譲地・土地情報の一覧です。土地・分譲地情報は随時更新中。「土地探しからお願いしたい」「この校区の土地を探している」・・・など、土地探してお悩みの方は、お気軽にお問い合わせください。
</p>
				</section>

 <section>
                            <ul class="udr-list-anchor center">
                                <?php
	$category_index=get_category_index();
	foreach($category_index as $rowid=>$id){
		$category_data=unserialize(@file_get_contents(DATA_DIR.'/category/'.$id.'.dat'));
		$category_url=$category_data['id'];
		$category_name=$category_data['name'];
		$category_text=@$category_data['text'];
		$category_id=$id;
		${'category'.$id.'_url'}=$category_data['id'];
		${'category'.$id.'_name'}=$category_data['name'];
		${'category'.$id.'_text'}=@$category_data['text'];
		$selected=(@$_GET['c']==$id?' selected="selected"':'');

?>
                                    <li><a href="../<?php echo $category_url; ?>"><?php echo $category_name; ?></a></li>
                                <?php
	}
?>
                            </ul>
                        </section>
                    <section>
                        <ul class="udr-list-info">
                        <?php $limitNum = 9 ?>
						<?php
	$contribute_index=contribute_search(
		@$current_category_id
		,''
		,''
		,''
		,''
		,''
	);
	$max_record_count=count($contribute_index);

	$current_page=(@$_GET['p'])?(@$_GET['p']):1;
	$contribute_index=array_slice($contribute_index,($current_page-1)*$limitNum,$limitNum);
	$record_count=count($contribute_index)

?>
							<?php
	$local_index=0;
	foreach($contribute_index as $rowid=>$index){
		$contribute=unserialize(@file_get_contents(DATA_DIR.'/contribute/'.$index['id'].'.dat'));
		$title=$contribute['title'];
		$url=$contribute['url'].'/';
		$category_id=$index['category'];
		$category_data=unserialize(@file_get_contents(DATA_DIR.'/category/'.$category_id.'.dat'));
		$category_name=$category_data['name'];
		$category_text=@$category_data['text'];
		$field_id=$index['field'];
		$date=$index['public_begin_datetime'];
		$id=$index['id'];
		$field=get_field($field_id);

		foreach($field as $field_index=>$field_data){
			${$field_data['code'].'_Name'}=$field_data['name'];
			${$field_data['code'].'_Value'}=make_value(
		$field_data['name']
				,@$contribute['data'][$field_id][$field_index]
				,$field_data['type']
				,$id
				,$field_id
				,$field_index
			);
	
			if($field_data['type']=='image'){
				${$field_data['code'].'_Src'}=ROOT_URI.'/_data/contribute/images/'.@$contribute['data'][$field_id][$field_index];
			}
		}
		$local_index++;

?>
								<?php
								$arrImg = ["img01", "img02", "img03", "img04", "img05", "img06", "img07", "img08", "img09", "img010"];
								foreach ($arrImg as $key => $value) {
									$val = $value . "_Value";
									if ($$val != "") {
										$src = $value . "_Src";
										break;
									}
								}
								$urls = explode("/", $$src);
								if (end($urls) == "") {
									$$src = "../../images/udr-dummy.jpg";
								}
								?>
								<li>
									<a href="../<?php echo $url; ?>">
									<p class="img">
										<?php if ($$src != "") : ?>
										<img src="<?php echo $$src; ?>" alt="<?php echo $title; ?>" />
										<?php else : ?>
										<img src="../../images/udr-dummy.jpg" alt="<?php echo $title; ?>">
										<?php endif; ?>
									</p>
                                    <p class="cnt">
									<span class="udr-fx-cate">
									<label class="cate"><?php echo $category_name; ?></label>
                                     <label class="date"><?php echo date("Y.m.d", strtotime($date)); ?></label>
									 </span>
                            <span class="ttl"><?php echo $title; ?></span>
                            </p>
                            </a>
								</li>
							<?php
		foreach($field as $field_index=>$field_data){
			unset(${$field_data['code'].'_Name'});
			unset(${$field_data['code'].'_Value'});
			unset(${$field_data['code'].'_Src'});
		}
	}
?>
						
                        </ul>
                        <!-- *********   PAGINATION   ********* -->
                            <?php
	$page_count=(int)ceil($max_record_count/(float)$limitNum);
?>
                                <?php
	if($max_record_count > $limitNum){
?>
                                    <ul class="pagination">
                                        <?php
	if($current_page <= 1){
?>
                                            <li class="disabled"><a href="#">&laquo;</a></li>
                                            <?php
	}else{
?>
                                                <li class="pg-arrow"><a href="./?p=<?php echo $current_page-1; ?>">&laquo;</a></li>
                                        <?php
	}
?>
                                        <?php
	$page_old=@$page;
	for($page=1;$page<=$page_count;$page++){
?>
                                            <?php
	if($current_page == $page){
?>
                                                <li class="active"><a href="#"><?php echo $page; ?></a></li>
                                                <?php
	}else{
?>
                                                    <li><a href="./?p=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                                            <?php
	}
?>
                                        <?php
	}
$page=$page_old;
?>
                                        <?php
	if($current_page*$limitNum<$max_record_count){
?>
                                            <?php
                                            $lastpage = ceil($max_record_count / $limitNum);
                                            ?>
                                            <li class="pg-arrow"><a href="./?p=<?php echo $current_page+1; ?>">&raquo;</a></li>
                                            <?php
	}else{
?>
                                                <li class="disabled"><a href="#">&raquo;</a></li>
                                        <?php
	}
?>
                                    </ul>
                                <?php
	}
?>
                            
                            <!-- *********    /PAGINATION ********* -->
                    </section>
					<section>
					<ul class="udr-list-anchor udr-list-bnr col01 mb30">
                            <li>
                                <a href="../../house/">三重県で理想の注文住宅や・新築一戸建てを建てるなら<br>
平安コーポレーションにお任せください<br>
私たちの家づくりに対するコンセプトはこちらから
</a>
                            </li>
                        </ul>
						<ul class="udr-list-anchor udr-list-bnr col01">
                            <li>
                                <a href="../../company/">三重県名張市で生まれた平安コーポレーションは<br>
創業45年以上の歴史を誇る住宅会社です<br>
当社の会社概要や店舗紹介、代表・スタッフ紹介はこちらから
</a>
                            </li>
                        </ul>
					</section>
                </div>
			</div>

			<!-- #content end -->
		</main>
		<!-- end <main> -->
		<footer class="footer menu">
            <div class="inner">
                <div class="footer__top menu__top">
                    <p class="footer__top-logo menu__top-logo mb0">
                        <a href="https://www.citylights.estate/"><img src="../../images/site_logo.svg" alt="Heian Corporation" width="344" height="35" loading="lazy"></a>
                    </p>
                    <p class="footer__top-contact menu__top-contact mb0">
                        <a href="tel:0120-265-154" class="tel sweetlink">0120-265-154</a>
                        <span class="time">電話受付時間：9:00～18:00 <br>定休日：水曜日</span>
                        <span class="address">三重県名張市鴻之台4番町60</span>
                    </p>
                    <ul class="footer__top-social menu__top-social pc">
                        <li class="item">
                            <a href="https://page.line.me/weu6068t?openQrModal=true" target="_blank">
                                <img src="../../images/line_icon.png" alt="Line" width="64" height="64" loading="lazy">
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://www.instagram.com/sacasso_heian/?utm_source=ig_profile_share&igshid=1j3en5kr08agi" target="_blank">
                                <img src="../../images/ins_icon.png" alt="Instagram" width="48" height="48" loading="lazy">
                            </a>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="footer__bottom menu__bottom pc">
                        <ul class="nav nav__top">
                            <li class="nav__item"><a href="https://www.citylights.estate/">Top</a></li>
                            <li class="nav__item">
                                <span>家づくりについて</span>
                                <ul class="nav__sub col-2">
                                    <li class="nav__sub-item"><a href="../../house/index.html">コンセプト</a></li>
                                    <li class="nav__sub-item"><a href="../../house/function.html">機能性</a></li>
                                    <li class="nav__sub-item"><a href="../../house/air.html">全館空調</a></li>
                                    <li class="nav__sub-item"><a href="../../house/design.html">デザイン性</a></li>
                                    <li class="nav__sub-item"><a href="../../house/cost.html">コストパフォーマンス</a></li>
                                    <li class="nav__sub-item"><a href="../../house/after.html">保証とアフターメンテナンス</a></li>
                                </ul>
                            </li>
                            <li class="nav__item">
                                <span>ラインナップ</span>   
                                <ul class="nav__sub col-2"> 
                                    <li class="nav__sub-item"><a href="../../lineup/index.html">【FREEDIA】</a></li>
                                    <li class="nav__sub-item"><a href="../../lineup/durability.html">【耐久の家】</a></li>
                                    <li class="nav__sub-item"><a href="../../lineup/simple.html">【シンプルな平屋】</a></li>
                                    <li class="nav__sub-item"><a href="../../lineup/garage.html">【ビルトインガレージの家】</a></li>
                                    <li class="nav__sub-item"><a href="../../lineup/insulation.html">【断熱の家】</a></li>
                                    <li class="nav__sub-item"><a href="../../lineup/freedom.html">【自由な箱の家（MY BOX）】</a></li>
                                    <li class="nav__sub-item"><a href="../../lineup/zeh.html">【未来を創るZEHの家】</a></li>
                                    <li class="nav__sub-item"><a href="../../lineup/tbox.html">【T-BOX】</a></li>
                                </ul>
                            </li>
                            <li class="nav__item">
                                <span>施工事例</span>
                                <ul class="nav__sub col-2">
                                    <li class="nav__sub-item"><a href="../../case/">施工事例</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav__bottom">
                            <li class="nav__item">
                                <span>分譲地・土地情報</span>
                                <ul class="nav__sub">
                                    <li class="nav__sub-item"><a href="../../land/">分譲地・土地情報</a></li>
                                </ul>
                            </li>
                            <li class="nav__item">
                                <span>会社案内</span>
                                <ul class="nav__sub">
                                    <li class="nav__sub-item"><a href="../../company/index.html">会社概要・店舗紹介・スタッフ紹介</a></li>
                                </ul>
                            </li>
                            <li class="nav__item">
                                <span>各種お問い合わせ</span>
                                <ul class="nav__sub">
                                    <li class="nav__sub-item"><a href="../../document/">資料請求</a></li>
                                    <li class="nav__sub-item"><a href="../../event/">各種イベントへのご参加</a></li>
                                    <li class="nav__sub-item"><a href="../../contact/">無料相談・お問い合わせ</a></li>
                                </ul>
                            </li>
                            <li class="nav__item">
                                <span>各種お知らせ</span>
                                <ul class="nav__sub">
                                    <li class="nav__sub-item"><a href="../../info/">お知らせ・スタッフブログ・イベント情報</a></li>
                                </ul>
                            </li>
                        </ul>
                </div>
                <hr class="pc">
                <address>Copyright &copy; Heian Corporation<br> All Rights Reserved</address>
            </div>

            
            <div class="to-top"><a href="#wrapper"></a></div>
            <ul class="btn__fixed">
                <li class="btn__fixed-tel">
                    <a href="tel:0120-265-154" class="sweetlink">0120-265-154</a>
                </li>
                <li class="btn__fixed-item" data-aos="fade-left" data-aos-offset="0" data-aos-duration="400">
                    <a href="../../contact/" class="fixed__mail">
                        <img src="../../images/mail_icon.png" alt="無料相談・お問い合わせ" width="52" height="36">
                        <span>無料相談・<br>お問い合わせ</span>
                    </a>
                </li>
                <li class="btn__fixed-item" data-aos="fade-left" data-aos-offset="0" data-aos-duration="400">
                    <a href="../../event/" class="fixed__event">
                        <img src="../../images/calendar_icon.png" alt="各種イベント" width="70" height="64">
                        <span>各種イベント</span>
                    </a>
                </li>
                <li class="btn__fixed-item" data-aos="fade-left" data-aos-offset="-200" data-aos-duration="400">
                    <a href="../../document/" class="fixed__info">
                        <img src="../../images/info_icon.png" alt="資料請求" width="58" height="76">
                        <span>資料請求</span>
                    </a>
                </li>
            </ul>
        </footer>
		<!-- end <footer> -->
	</div>
	<!-- end #wrapper -->
	<script src="../../js/sweetlink.js"></script>
	<script src="../../js/common.js"></script>
</body>

</html>