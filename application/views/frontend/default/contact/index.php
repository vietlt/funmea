    <!-- Bread Crumb -->
    <div id="crumb">
        <h5>Nơi góp ý, liên hệ với Funmea.com !</h5>
    </div>
    <!-- Column 1 -->
    <div class="col1">
        <div class="contact">
                <form class="form" id="form-contact" method="post">
                    <p>
                        <label class="label">Tên người gửi:</label>
                        <input type="text" name="videotitle" id="videotitle" class="form-control" value="" class="required" pattern="" title="">
                    </p>
                    <p>
                        <span class="label">Địa chỉ email:</span>
                        <input type="text" name="videocode" id="videocode" class="form-control" value="" class="required" pattern="" title="">
                    </p>
                    <p>
                        <span class="label">Tiêu đề:</span>
                        <input type="text" name="videocode" id="videocode" class="form-control" value="" class="required" pattern="" title="">
                    </p>
                    <p>
                        <span class="label">Nội dung:</span>
                        <textarea class="textarea" id="videodesc" name="videodesc"></textarea>
                    </p>
                    <p>
                         <button type="submit" id="btn-contact" class="btn">Đăng bài</button>
                    </p>
                </form> 
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <!-- Column 2 -->
    <div class="col2">
        <!-- Map -->
        <div class="map">
            <a href="#"><img src="<?=img_url()?>/map.gif" alt="" /></a>
        </div>
        <div class="clear"></div>
        <!-- Address -->
        <div class="address">
            <ul>
                <li class="phone">
                    <h5>Customer Service</h5>
                    <p>                        
                        1300 924 299
                        Direct: +00-123-4567
                        International: +00-123-4567
                        <a href="mailto:info@website.com">info@website.com</a>
                    </p>
                </li>
                <li class="adrs">
                    <h5>McTeas Showroom Location!</h5>
                    <p>                        
                        McTeas Clothing Pty Ltd
                        123 New Canterbury Road
                        McLaren, NSW 2049
                    </p>
                </li>
                <li class="hours">
                    <h5>Office Hours</h5>
                    <p>Mon-Fri 10:00am to 5:30pm</p>
                </li>
            </ul>
        </div>
    </div>
    <script src="<?=js_url()?>/libs/jquery.validate.js"></script>
    <script type="text/javascript">
        // $(document).on('click','#btn-contact',function(){
        //     $('#form-contact').validate();
        // });

        $(document).ready(function(){
                $("#form-contact").validate();
            });
    </script>