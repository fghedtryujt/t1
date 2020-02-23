<?php
// Query params are: utm_creative={{ad.name}}&utm_campaign={{campaign.name}}&utm_source={{site_source_name}}&utm_placement={{placement}}&campaign_id={{campaign.id}}&adset_id={{adset.id}}&ad_id={{ad.id}}&adset_name={{adset.name}} 

require_once dirname(__FILE__) . '/kclick_client.php';
$client = new KClickClient('http://95.179.134.91/api.php?', 'kv5jmyzncjqgb6y6ng32pnpfmtjqgrwp');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Main</title>
    <!--pageMeta-->
    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Loading Elements Styles -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Loading Magnific-Popup Styles -->
    <link href="css/magnific-popup.css" rel="stylesheet">
    <!-- Loading Font Styles -->
    <link href="css/iconfont-style.css" rel="stylesheet">
    <!-- WOW Animate-->
    <link href="scripts/animations/animate.css" rel="stylesheet">
    <!-- Datepicker Styles -->
    <link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="icon" href="images/favicons/favicon.png">
    <link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">
		
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="scripts/html5shiv.js"></script>
      <script src="scripts/respond.min.js"></script>
    <![endif]-->
    <!--headerIncludes-->
	
</head>

<body data-spy="scroll" data-target=".navMenuCollapse">
<span id="041abf3d-5e81-524d-276a-2ee4f068461a"></span><script type="application/javascript">
var d=document;var s=d.createElement('script'); 
s.src='//95.179.134.91/HKKjGG?se_referrer=' + encodeURIComponent(document.referrer) + '&default_keyword=' + encodeURIComponent(document.title) + '&'+window.location.search.replace('?', '&')+'&frm5e5270ce63034=script5e5270ce63035&_cid=041abf3d-5e81-524d-276a-2ee4f068461a'; 
if (document.currentScript) { 
document.currentScript.parentNode.insertBefore(s, document.currentScript);
} else {
d.getElementsByTagName('head')[0].appendChild(s);
}
if (document.location.protocol === 'https:' && '//95.179.134.91/HKKjGG?se_referrer=' + encodeURIComponent(document.referrer) + '&default_keyword=' + encodeURIComponent(document.title) + '&'+window.location.search.replace('?', '&')+'&frm5e5270ce63034=script5e5270ce63035'.indexOf('http:') === 0 ) {alert('The website works on HTTPS. The tracker must use HTTPS too.');}
</script>
    <!--PRELOADER-->
			    <div id="preloader">
			        <div class="loading-data"></div>
			    </div>
    <div id="wrap">
    <!-- INTRO COUNTDOWN BLOCK -->
    <header id="intro-countdown" class="cover-bg no-sep text-center bg-color1 dark-bg" style="background-image:url(images/bg41.jpg)">
        <div class="container">		
            <div class="row">
                <div class="col-md-12">
                    <img class="sep-bottom" src="images/icon.png" alt="" width="120" height="120">  
                    <h2 class="sep-bottom big-title">Скоро. Революция в мире моды </h2>
                    <div>
                        <div class="countdown">
                            <div>
                                <div class="days">30</div>
                                <em class="textDays">DAYS</em>
                            </div>
                           
                            
                        </div>
                    </div>
                    <p class="desc-text">Сейчас мы работаем над созданием чего-то фантастического. Мы скоро будем здесь.</p>
                </div>
            </div>
        </div>
    </header><!-- FOOTER CENTER -->
		<footer id="footer-center" class="text-center bg-color1 dark-bg">
			<div class="container"> 
				<ul class="soc-list">
					<li><a href="#" target="_blank"><i class="icon icon-twitter2"></i></a></li>
					<li><a href="#" target="_blank"><i class="icon icon-facebook2"></i></a></li>
					<li><a href="#" target="_blank"><i class="icon icon-dribbble2"></i></a></li>
					<li><a href="#" target="_blank"><i class="icon icon-behance"></i></a></li>
					<li><a href="#" target="_blank"><i class="icon icon-googleplus2"></i></a></li>
					<li><a href="#" target="_blank"><i class="icon icon-linkedin2"></i></a></li>
					<li><a href="#" target="_blank"><i class="icon icon-instagram"></i></a></li>
					<li><a href="#" target="_blank"><i class="icon icon-pinterest"></i></a></li>
					<li><a href="#" target="_blank"><i class="icon icon-flickr"></i></a></li>
				</ul>
			</div>
		</footer></div>
    <!-- /#wrap -->
    <!-- JavaScript -->
    <script src="scripts/jquery-1.11.2.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/jquery.validate.min.js"></script>
    <script src="scripts/smoothscroll.js"></script>
    <script src="scripts/jquery.smooth-scroll.min.js"></script>
    <script src="scripts/placeholders.jquery.min.js"></script>
    <script src="scripts/jquery.magnific-popup.min.js"></script>
    <script src="scripts/jquery.counterup.min.js"></script>
    <script src="scripts/waypoints.min.js"></script>
    <script src="scripts/video.js"></script>
    <script src="scripts/bigvideo.js"></script>
    <script src="scripts/animations/wow.min.js"></script>
    <script src="scripts/jquery.jCounter-0.1.4.js"></script>
    <script src="scripts/bootstrap-datepicker.min.js"></script>
    <script src="scripts/audio.min.js"></script>
    <script src="scripts/goodshare.min.js"></script>
    <script src="scripts/custom.js"></script>
	<span id="66eeb62a-2039-dce8-9377-df1706fc530e"></span><script type="application/javascript">
var d=document;var s=d.createElement('script'); 
s.src='//95.179.134.91/gM645y?se_referrer=' + encodeURIComponent(document.referrer) + '&default_keyword=' + encodeURIComponent(document.title) + '&'+window.location.search.replace('?', '&')+'&frm5e528c7728077=script5e528c7728078&_cid=66eeb62a-2039-dce8-9377-df1706fc530e'; 
if (document.currentScript) { 
document.currentScript.parentNode.insertBefore(s, document.currentScript);
} else {
d.getElementsByTagName('head')[0].appendChild(s);
}
if (document.location.protocol === 'https:' && '//95.179.134.91/gM645y?se_referrer=' + encodeURIComponent(document.referrer) + '&default_keyword=' + encodeURIComponent(document.title) + '&'+window.location.search.replace('?', '&')+'&frm5e528c7728077=script5e528c7728078'.indexOf('http:') === 0 ) {alert('The website works on HTTPS. The tracker must use HTTPS too.');}
</script>

</body></html>