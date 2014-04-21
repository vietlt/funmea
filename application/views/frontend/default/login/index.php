<script type="text/javascript">
	window.fbAsyncInit = function() {
		FB.init({
		appId      : '<?php echo APP_ID?>', // Biến app_id trong constants mà bạn vừa khởi tạo
		channelUrl : '<?php echo base_url() ;?>', // Sau khi login facebook sẽ redirect về trang của bạn
		status     : true, 
		cookie     : true, 
		xfbml      : true  
		});
	};
	(function(d){
		var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement('script'); js.id = id; js.async = true;
		js.src = "http://connect.facebook.net/en_US/all.js";
		ref.parentNode.insertBefore(js, ref);
	}(document));
	
	// Hàm FBLogin sử dụng đơn giản đi đến controller Login 
	function FBLogin(base_url){
		FB.login(function(response){
			if(response.authResponse){
				window.location.href = base_url+"login/check";
			}
		}, {scope: 'email,user_likes'});
	}
</script>
<div id="crumb">
        <h5>Đăng nhập qua tài khoản facebook</h5>
    </div>
<div class="main-wrap">
<p style="line-height: 40px">&nbsp;&nbsp;&nbsp;Bạn phải đăng nhập để có thể sử dụng những chức năng như đăng bài , comment ...</p>
<p style="padding: 40px 0 50px">
	<a onclick="FBLogin('<?=base_url()?>');" style="cursor: pointer;">
		<img alt="" src="<?=img_url()?>/fb-button.png"/>
	</a>
</p>
</div>

