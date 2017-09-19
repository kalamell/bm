<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>BLACKMORES The Chooser 101</title>
    <meta name="description" content="Be A WINNER or LOSER, You can CHOOSE ลุ้นรับ Macbook Air 13' มูลค่า 35,900 บาท เพียงแค่แชร์ผลโหวต `The Chooser` ของคุณ "/>
	<meta name="keywords" content="TheChooser101, ChooseToBeAWellBeing, Blackmores"/>

	<meta property="fb:app_id"                content="834971240013591" />
    <meta property="og:url"                content="http://www.poszee.com/blackmore/" />
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

	<?php $this->load->view('header');?>

	<div id="fullpage">


		<div class="section" id="vdo">

            <div id="choose-u" class='container'>
                <h2>เลือกมหาวิทยาลัย</h2>
                <div class='profile'>

                    <span><?php echo $name;?></span>
                    <img src="<?php echo $profile;?>" id="profileImage" alt="">
                </div>

                <?php echo form_open('', array('id' => 'frm-choose'));?>

                    <select name="" id="">
                        <option value="">มหาวิทยาลัยของคุณคือ</option>
                        <?php foreach($universities as $u):?>
                            <option value="<?php echo $u->uid;?>"><?php echo $u->uname;?></option>
                        <?php endforeach;?>

                    </select>

                    <div class='line'></div>

                    <button type='submit' name='save'>submit</button>

                <?php echo form_close();?>
            </div>

		</div>



	</div>

	<div id="enter">
		<div class='container'>
			<div class='left'>
				<img src="<?php echo base_url();?>assets/images/mac.png" alt="">
			</div>



			<div class='right'>
				<img src="<?php echo base_url();?>assets/images/footer-logo.png" alt="">
			</div>
		</div>
	</div>

	<?php $this->load->view('fb');?>



</body>
</html>