<script type="text/javascript">
    window.fbAsyncInit = function() {
        FB.init({
        appId      : '<?=APP_ID?>',
        channelUrl : '<?=base_url()?>',
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
    function FBLogin(base_url){
        FB.login(function(response){
            if(response.authResponse){
                window.location.href = base_url+"login/check";
            }
        }, {scope: 'email,user_likes'});
    }
</script>
<!-- Top Section -->
<div class="top_sec font-11">
    <!-- Top Section Left Links -->
    <div class="toplinks">
        <ul>
            <li class="first"><a href="<?=base_url()?>">Trang chủ</a></li>
            <li class="dropdown">
                <?if($this->session->userdata('info_fb')):?>
                <span>Xin chào, </span>
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><strong><?=$this->session->userdata('info_fb')['name']?></strong></a>
                <ul class="dropdown-menu" style="margin-left: 55px">
                  <li><a href="<?=base_url('user/my_video')?>">Video của bạn</a></li>
                  <li><a href="<?=base_url('user/profile')?>">Thông tin cá nhân</a></li>
                  <li><a href="<?=base_url('user/change_password')?>">Đổi mật khẩu</a></li>
                </ul>
                    , <a href="<?= base_url() ?>logout">Thoát</a>
                <?else:?> 
                <a href="javascript:void(0)" onclick="FBLogin('<?=base_url()?>')">Đăng nhập</a>
                <?endif;?>
            </li>
        </ul>
    </div>
    <!-- Top Section right Links -->
    <div class="links_icons">
        <ul>
            <li><a href="#" class="browse">Browse</a></li>
            <li><a href="<?=base_url()?>upload" class="upload">Đăng bài</a></li>
            <li class="last"><a class="lang" href="<?=base_url()?>contact">Liên hệ</a></li>
        </ul>
    </div>
</div>
<div class="clear"></div>
<!-- Header -->
<div id="masthead">
    <!-- Logo -->
    <div class="logo">
        <a href="<?=base_url()?>"><img src="<?=img_url()?>/logo.png" alt="" /></a>
    </div>
    <!-- Navigation -->
    <div class="navigation">
        <div id="smoothmenu1" class="ddsmoothmenu">
            <ul>
                <li><a href="<?=base_url()?>videos/xem-nhieu" class="staticlinks">Xem nhiều</a></li>
                <li><a href="<?=base_url()?>videos/comment-nhieu" class="staticlinks">Comment nhiều</a></li>
                <li><a href="<?=base_url()?>videos/cho-duyet" class="staticlinks">Đang chờ duyệt</a></li>
                <li style="background-image: none !important"><a href="#">Tin tức</a>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="listing.html">Listing</a></li>
                        <li><a href="detail.html">Video Detail</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog_post.html">Blog Post</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="static.html">About Us</a></li>
                    </ul>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
    <!-- Search -->
    <div class="search">
        <input type="text" value="Nhập từ khóa tìm kiếm..." id="searchBox" name="s" onblur="if(this.value == '') { this.value = 'Enter keyword to search'; }" onfocus="if(this.value == 'Enter keyword to search') { this.value = ''; }" class="bar" />
        <a href="#" class="go">&nbsp;</a>
    </div>
</div>
<div class="clear"></div>
