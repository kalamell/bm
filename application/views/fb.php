<script>
	window.fbAsyncInit = function() {
		FB.init({
		appId      : '834971240013591',
		cookie     : true,
		xfbml      : true,
		version    : 'v2.10'
		});
		FB.AppEvents.logPageView();

        <?php if ($this->uri->segment(2)=='university'):?>
            checkLogin2();
        <?php endif;?>


	};

	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));




	function checkLogin()
	{
		FB.getLoginStatus(function(response) {
			statusChangeCallback(response);
		});
	}

    function checkLogin2()
	{
		FB.getLoginStatus(function(response) {
			if (response.status=='connected') {

            } else {
                top.location.href = '<?php echo site_url();?>';
            }
		});
	}


	function statusChangeCallback(res) {
		if (res.status=='connected') {
            FB.api('/me?fields=id,email,name', function(response) {
                $.post('<?php echo site_url('auth/facebook');?>', {
                    'token': res.authResponse.accessToken,
                    'id': response.id,
                    'email': response.email,
                    'name': response.name,
                }, function(res) {
                    top.location.href = '<?php echo site_url('choose/university');?>';
                });
            });
		} else {
			FB.login(function(response) {
				if (response.status === 'connected') {
					checkLogin();
				}
			}, {scope: 'public_profile,email'});
		}
	}


</script>

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