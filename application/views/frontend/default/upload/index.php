    <!-- Bread Crumb -->
    <div id="crumb">
        <h1>Đăng video tại đây:</h1>
    </div>
    <!-- Column 1 -->
    <div class="col1">
        <div class="upload">
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Chao xìn !</strong> Bạn có những video hài hước hoặc ý nghĩa? Hãy chia sẻ với mọi người bằng cách đăng lên Funmea.com
                <br/>Và đừng quên đọc Nội quy ở bên phải nhé!
                <br/>Nếu bạn quên cách đăng bài hoặc là thành viên mới vui lòng click vào <b><a id="showguide" href="javascript:void(0)">đây</a></b> để xem hướng dẫn !
            </div>
            
        </div>
        <div class="clear"></div>
        <div class="alert alert-info" id="guide" style="display:none">
            <button type="button" class="close" id="close-guide">&times;</button>
            <p><strong>Hướng dẫn cách post bài (Video & Ảnh gif)</strong> </p>
            <p>
                Lấy link Youtube và up lên diễn đàn

                Bạn có thể lựa chòn clip bất kì hoặc dùng chức năng search để tìm clip mình cần

                <br/>
                <br/>
                <img src="http://img.bongda.24h.com.vn/uploadimage/thumb_files/20120229/bongda_24h_0dbb5b18c335afcba241acdc944dfc581.png.png" alt="">

                <br/>
                <br/>
                Bạn copy phần link (tô màu xanh) sau

                Nằm sau dấu bằng của Youtobe

                Rồi paste lên diễn đàn bằng cách :

                <br/>
                <br/>
                <img src="http://img.bongda.24h.com.vn/uploadimage/thumb_files/20120229/bongda_24h_34d25d8200a42e4c15c383f310ba4e6d2.png.png" alt="">
                <br/>
                <br/>

                Cách Up nhạc từ trang Nhạc Vui 

                Khi vào trang Nhạc vui bạn sẽ có giao diện như hình




                Bạn copy phần Link có dạng "flash../flash"




                Sau đó dán lên phần khung bài viết trên diễn đàn




                Công việc cuối cùng là nhấn nút gửi đề tài mới và ngồi xem thành quả ^_^.
                .

            </p>
        </div>
        <div class="clear"></div>
        <div class="form-upload">
            <!-- Tabs -->
            <div class="tabs">
                <div class="tab_menu_container">
                    <ul id="tab_menu">  
                        <li><a class="current" rel="tab_sidebar_recent">Đăng video</a></li>
                        <li><a class="" rel="tab_sidebar_comments">Đăng ảnh</a></li>
                        <li><a class="" rel="tab_sidebar_tags">Đăng bài thú tội</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                
                <div class="tab_container">
                    <div class="tab_container_in">
                        <!-- Recent --> 
                        <div style="display: none;" id="tab_sidebar_recent" class="tab_sidebar_list">  
                            <div class="clear"></div>                 
                            <form class="form" id="form-post-videos" method="post">
                                <p>
                                    <label class="label">Tiêu đề bài đăng:</label>
                                    <input type="text" name="videotitle" id="videotitle" class="form-control" value="" required="required" pattern="" title="">
                                </p>
                                <p>
                                    <span class="label">Mã video:</span>
                                    <input type="text" name="videocode" id="videocode" class="form-control" value="" required="required" pattern="" title="">
                                </p>
                                <p>
                                    <span class="label">Viết mô tả:</span>
                                    <textarea class="textarea" id="videodesc" name="videodesc"></textarea>
                                </p>
                                <p>
                                     <button type="button" id="btn-post-video" class="btn">Đăng bài</button>
                                </p>
                            </form>      
                        </div> 
                        <!-- END -->
                        <!-- Top Rated -->
                        <div style="display: none;" id="tab_sidebar_comments" class="tab_sidebar_list">  
                            <div class="clear"></div>
                            <form class="form">
                                <p>
                                    <span class="label">Tiêu đề bài đăng:</span>
                                    <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                </p>
                                <p>
                                    <span class="label">Đường dẫn ảnh (định dạng gif):</span>
                                    <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                </p>
                                <p>
                                    <span class="label">Hoặc chọn từ máy tính:</span>
                                    <input type="file" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                </p>
                                <p>
                                     <button type="button" class="btn">Đăng bài</button>
                                </p>
                            </form>     
                        </div> 
                        <!-- END -->
                        <!-- Most Commented -->
                        <div style="display: none;" id="tab_sidebar_tags" class="tab_sidebar_list"> 
                            <div class="clear"></div>
                            <form class="form">
                                <p>
                                    <span class="label">Tiêu đề bài đăng:</span>
                                    <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                </p>
                                <p>
                                    <span class="label">Đường dẫn ảnh (định dạng gif):</span><br/>
                                    <textarea class="textarea" rows="10" class="form-control" value="" required="required" pattern="" title=""></textarea>
                                </p>
                                <p>
                                     <button type="button" class="btn">Đăng bài</button>
                                </p>
                            </form>  
                        </div>
                        <!-- END -->
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- Column 2 -->
    <div class="col2">
        <!-- Categories -->
        <div class="categories">
            <h5>Nội quy đăng bài</h5>
            <ul>
                <li>Không đăng bài đã bị trùng</li>
                <li>Ảnh sưu tầm mà để tự làm có thể bị xóa mà không cần thông báo</li>
                <li>Không đăng ảnh tự sướng, dìm hàng</li>
                <li>Không đăng ảnh chứa thông tin cá nhân của người khác (kể cả tên, avatar, link Facebook), trừ người nổi tiếng</li>
                <li>Nhập các thông tin bằng tiếng Việt có dấu và đúng chính tả</li>
                <li>Hãy đặt tiêu đề và mô tả ảnh một cách sáng tạo. Tránh đặt kiểu như: "hay vãi", "chuẩn", ":))"...Không đặt tiêu đề câu like, vote, xin lên trang chủ hay có nội dung tương tự trong ảnh.</li>
                <li>Hạn chế sử dụng emoticon (mặt cười)</li>
                <li>Không đăng ảnh trái với thuần phong mỹ tục</li>
                <li>Không đăng ảnh liên quan đến các vấn đề chính trị, tôn giáo</li>
                <li>Không spam link ảnh của bạn trong phần bình luận của ảnh khác</li>
                <li>Đăng ảnh phản động, đồi trụy sẽ bị khóa tài khoản ngay lập tức</li>
            </ul>
        </div>
        <div class="clear"></div>
        <!-- Advertisment -->
        <div class="adv">
            <a href="#"><img src="<?php echo img_url() ?>/adv1.gif" alt="" /></a>
        </div>
        <div class="clear"></div>
    </div>

    <script src="<?=js_url()?>/bootstrap/bootstrap.min.js"></script>
    <script src="<?=js_url()?>/script_dialog.js"></script>
    <script src="<?=js_url()?>/form_handle.js"></script>
    <script type="text/javascript">
        function Test()
        {
            new ShowMessage().msg('Are you sure???',1);
        }

        $(document).on('click','#showguide',function(){
            $('#guide').slideDown(800);
        });
        $(document).on('click','#close-guide',function(){
            $('#guide').slideUp(800);
        });
    </script>