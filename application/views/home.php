<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>BLACKMORES The Chooser 101</title>
    <meta name="description" content="Be A WINNER or LOSER, You can CHOOSE ลุ้นรับ Macbook Air 13' มูลค่า 35,900 บาท เพียงแค่แชร์ผลโหวต `The Chooser` ของคุณ "/>
	<meta name="keywords" content="TheChooser101, ChooseToBeAWellBeing, Blackmores"/>

	<meta property="fb:app_id"             content="834971240013591" />
    <meta property="og:url"                content="<?php echo site_url();?>" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="THE CHOOSER 101" />
    <meta property="og:description"        content="Be A WINNER or LOSER, You can CHOOSE ลุ้นรับ Macbook Air 13' มูลค่า 35,900 บาท เพียงแค่แชร์ผลโหวต `The Chooser` ของคุณ #TheChooser101 #ChooseToBeAWellBeing #Blackmores" />
    <meta property="og:image"              content="<?php echo base_url();?>assets/images/share.jpg" />

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/fullpage/jquery.fullPage.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.scrollbar.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css?v=<?php echo time();?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.1/jquery.fancybox.min.css">


	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/fullpage/vendors/scrolloverflow.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/fullpage/jquery.fullPage.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.scrollbar.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.1/jquery.fancybox.min.js"></script>


	<script type="text/javascript">
		$.ajaxSetup({
	        data: {"<?= $this->security->get_csrf_token_name(); ?>" : "<?= $this->security->get_csrf_hash(); ?>"},
	    });



		$(document).ready(function() {
			$('#fullpage').fullpage({
				verticalCentered: true,
				sectionsColor: ['#fff', '#fff', '#fff'],
				onLeave: function(index, nextIndex, direction) {
					console.log(index, ' - ', nextIndex, ' - ', direction);

					if (index==2 && nextIndex==1 ) {
						$('.center').show();
					} else {
						$('.center').hide();
					}
				}
			});

			$('.scrollbar-inner').scrollbar();

			$('.box-vdo a').hover(function() {
				$(this).children('span').show();
				//console.log($(this).children());
			}, function() {
				//$(this).children().find('span').hide();
				$(this).children('span').hide();
				//console.log($(this).children());
			});


			$(".alogin").fancybox({
				closeBtn: false,
				padding: 0,
				afterShow: function() {
					$("img.fancybox-image").click(function() {
						checkLogin();
					});
				}
			});



		});

	</script>

</head>
<body>

	<nav>
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">
					<img alt="" src="<?php echo base_url();?>assets/images/logo.png">
				</a>
			</div>
			<ul>
				<li> <a href="../getting-started/">หน้าหลัก</a> </li>
				<li> <a href="<?php echo base_url();?>assets/images/login.png" class='alogin'>เลือก "The Chooser</a> </li>
				<li class="active"> <a href="../components/">ประกาศผล</a> </li>
				<li> <a href="../javascript/">ปฏิทินกิจกรรม</a> </li>
				<li> <a href="../customize/" class='last'>เงื่อนไขและกติกา</a> </li>
			</ul>
		</div>
	</nav>

	<div id="fullpage">

		<div class="section" id="home">

			<div id="banner">
				<img src="<?php echo base_url();?>assets/images/home.png" alt="">
			</div>

		</div>
<!--
		<div class="section" id="vdo">

			<div id="vdo-gallery">
				<h2>Video</h2>
				<div class='vdo scrollbar-inner'>
					<div class='box-vdo'>
						<a href="">
							<img src="<?php echo base_url();?>assets/images/vdo1.jpg" alt="">
							<span><img src="assets/images/play.png" alt=""></span>
						</a>
					</div>

					<div class='box-vdo'>
						<a href=""><img src="assets/images/vdo2.jpg" alt="">
							<span><img src="assets/images/play.png" alt=""></span>
						</a>
					</div>

					<div class='box-vdo'>
						<a href=""><img src="assets/images/vdo3.jpg" alt="">
							<span><img src="assets/images/play.png" alt=""></span>
						</a>
					</div>

					<div class='box-vdo'>
						<a href=""><img src="assets/images/vdo4.jpg" alt="">
							<span><img src="assets/images/play.png" alt=""></span>
						</a>
					</div>

					<div class='box-vdo'>
						<a href=""><img src="assets/images/vdo5.jpg" alt="">
							<span><img src="assets/images/play.png" alt=""></span>
						</a>
					</div>

					<div class='box-vdo'>
						<a href=""><img src="assets/images/vdo6.jpg" alt="">
							<span><img src="assets/images/play.png" alt=""></span>
						</a>
					</div>

					<div class='box-vdo'>
						<a href=""><img src="assets/images/vdo1.jpg" alt="">
							<span><img src="assets/images/play.png" alt=""></span>
						</a>
					</div>


				</div>
			</div>

		</div>

		<div class="section" id="gallery">
			<div id="group-gallery" class='container'>
				<h2>Gallery</h2>

				<div class='box-gallery'>
					<img src="assets/images/gallery/img1.png" alt="">
					<div class='box-control'>
						<a href="" class='love'><i class='fa fa-heart'></i></a>
						<a href="https://www.facebook.com/sharer.php?u=<?php echo site_url();?>" target="_blank" class='share'>...</a>
					</div>
				</div>

				<div class='box-gallery'>
					<img src="assets/images/gallery/img2.png" alt="">
					<div class='box-control'>
						<a href="" class='love'><i class='fa fa-heart'></i></a>
						<a href="https://www.facebook.com/sharer.php?u=<?php echo site_url();?>" target="_blank" class='share'>...</a>
					</div>
				</div>

				<div class='box-gallery'>
					<img src="assets/images/gallery/img3.png" alt="">
					<div class='box-control'>
						<a href="" class='love'><i class='fa fa-heart'></i></a>
						<a href="https://www.facebook.com/sharer.php?u=<?php echo site_url();?>" target="_blank" class='share'>...</a>
					</div>
				</div>

				<div class='box-gallery'>
					<img src="assets/images/gallery/img4.png" alt="">
					<div class='box-control'>
						<a href="" class='love'><i class='fa fa-heart'></i></a>
						<a href="https://www.facebook.com/sharer.php?u=<?php echo site_url();?>" target="_blank" class='share'>...</a>
					</div>
				</div>


				<div class='box-gallery'>
					<img src="assets/images/gallery/img5.png" alt="">
					<div class='box-control'>
						<a href="" class='love'><i class='fa fa-heart'></i></a>
						<a href="https://www.facebook.com/sharer.php?u=<?php echo site_url();?>" target="_blank" class='share'>...</a>
					</div>
				</div>

				<div class='box-gallery'>
					<img src="<?php echo base_url();?>assets/images/gallery/img6.png" alt="">
					<div class='box-control'>
						<a href="" class='love'><i class='fa fa-heart'></i></a>
						<a href="https://www.facebook.com/sharer.php?u=<?php echo site_url();?>" target="_blank" class='share'>...</a>
					</div>
				</div>

				<div class='box-gallery'>
					<img src="<?php echo base_url();?>assets/images/gallery/img7.png" alt="">
					<div class='box-control'>
						<a href="" class='love'><i class='fa fa-heart'></i></a>
						<a href="https://www.facebook.com/sharer.php?u=<?php echo site_url();?>" target="_blank" class='share'>...</a>
					</div>
				</div>

			</div>

		</div>
-->
	</div>

	<div id="enter">
		<div class='container'>
			<div class='left'>
				<img src="<?php echo base_url();?>assets/images/mac.png" alt="">
			</div>

			<div class='center'>
				<a href="<?php echo base_url();?>assets/images/login.png" class="alogin"><img src="<?php echo base_url();?>assets/images/enter.png" alt=""></a>
			</div>

			<div class='right'>
				<img src="<?php echo base_url();?>assets/images/footer-logo.png" alt="">
			</div>
		</div>
	</div>

	<?php $this->load->view('fb');?>
	<script>

	;(function($){

	/**
	* jQuery function to prevent default anchor event and take the href * and the title to make a share popup
	*
	* @param  {[object]} e           [Mouse event]
	* @param  {[integer]} intWidth   [Popup width defalut 500]
	* @param  {[integer]} intHeight  [Popup height defalut 400]
	* @param  {[boolean]} blnResize  [Is popup resizeabel default true]
	*/
	$.fn.customerPopup = function (e, intWidth, intHeight, blnResize) {

		// Prevent default anchor event
		e.preventDefault();

		// Set values for window
		intWidth = intWidth || '500';
		intHeight = intHeight || '400';
		strResize = (blnResize ? 'yes' : 'no');

		// Set title and open popup with focus on it
		var strTitle = ((typeof this.attr('title') !== 'undefined') ? this.attr('title') : 'Social Share'),
			strParam = 'width=' + intWidth + ',height=' + intHeight + ',resizable=' + strResize,
			objWindow = window.open(this.attr('href'), strTitle, strParam).focus();
	}

	/* ================================================== */

	$(document).ready(function ($) {
		$('a.share').on("click", function(e) {
			$(this).customerPopup(e);
		});
	});

	}(jQuery));
	</script>


</body>
</html>