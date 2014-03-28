    <!-- Bread Crumb -->
    <div id="crumb">
        <h1><?=$detail->getPost_title()?></h1>
    </div>
    <!-- Column 1 -->
    <div class="col1">
        <!-- Video Heading -->
        <div class="clear"></div>
        <!-- Video Detail -->
        <div class="videodetail">
            <!-- Short Detail -->
            <div class="shortdetail">
                <div class="videoby">
                    <a href="#" class="videoavatar"><img src="<?=img_url()?>/videoby.gif" alt="" /></a>
                    <p>Đăng bởi</p>
                    <a href="#" class="bold name">Việt Lại</a>
                </div>
                <div class="videodate">Lúc 12h30', ngày 06/09/2014</div>
                <div class="subscribe"><a href="#">Subscribe</a></div>
                <div class="videoviews"><p><?=$detail->getVideo_code()?> views</p></div>
            </div>
            <div class="clear"></div>
            <!-- Big Video -->
            <div class="videobig">
                <object type="application/x-shockwave-flash" style="width:675px; height:438px;" data="http://www.youtube.com/v/<?=$detail->getVideo_code()?>?showinfo=0">
                    <param name="movie" value="http://www.youtube.com/v/http://www.youtube.com/v/<?=$detail->getVideo_code()?>?showinfo=0" />
                    <param value="application/x-shockwave-flash" name="type" /> 
                    <param value="true" name="allowfullscreen" /> 
                    <param value="always" name="allowscriptaccess" /> 
                    <param value="opaque" name="wmode" />
                </object>
            </div>
            <div class="clear"></div>
            <!-- Video tabs -->
            <div class="videotabs">
                <div class="tabbuttons">
                    <ul class="likedilike">
                        <li><a href="#" class="like">Like</a></li>
                        <li><a href="#" class="dislike">Dislike</a></li>
                    </ul>
                    <ul class="tablinksselected">
                        <li><a href="#"><span class="sharebtn">Share</span></a></li>
                    </ul>
                    <ul class="tablinks">
                        <li><a href="#"><span class="embed">Embed</span></a></li>
                    </ul>
                    <ul class="tablinks">
                        <li><a href="#"><span class="addto">Add to</span><span class="downarrow">&nbsp;</span></a></li>
                    </ul>
                </div>
                <div class="clear"></div>
                <div class="tabcont">
                    <input type="text" value="htttp://www.Vidsea.com/watch?v=lpQTeYG6cGM" name="s" class="chain" />
                    <input type="text" value="200" name="s" class="chrome" />
                    <input type="text" value="1001" name="s" class="facebook1" />
                    <input type="text" value="2000" name="s" class="twitter1" />
                    <div class="clear"></div>
                    <div class="shareicons">
                        <a href="#" class="icons"><img src="<?=img_url()?>/icon1.gif" alt="" /></a>
                        <a href="#" class="icons"><img src="<?=img_url()?>/icon2.gif" alt="" /></a>
                        <a href="#" class="icons"><img src="<?=img_url()?>/icon3.gif" alt="" /></a>
                        <a href="#" class="icons"><img src="<?=img_url()?>/icon4.gif" alt="" /></a>
                        <a href="#" class="icons"><img src="<?=img_url()?>/icon5.gif" alt="" /></a>
                        <a href="#" class="icons"><img src="<?=img_url()?>/icon6.gif" alt="" /></a>
                    </div>
                </div>
            </div>
            <!-- Comments -->
            <div id="fb-root"></div>
            <script>
                var appid = <?=APP_ID?>;
                (function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=1479900725559027";
                      fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
            <div class="fb-comments" data-href="<?=current_url()?>" data-numposts="10" data-width="697"  data-colorscheme="light"></div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- Column 2 -->
    <div class="col2">
        <!-- Tabs -->
        <div class="tabs">
            <div class="tab_menu_container">
                <ul id="tab_menu">  
                    <li><a class="current" rel="tab_sidebar_recent">Recent</a></li>
                    <li><a class="" rel="tab_sidebar_comments">Comments</a></li>
                    <li><a class="" rel="tab_sidebar_tags">Tags</a></li>
                </ul>
                <div class="clear"></div>
            </div>
            
            <div class="tab_container">
                <div class="tab_container_in">
                    <!-- Recent --> 
                    <div style="display: none;" id="tab_sidebar_recent" class="tab_sidebar_list">                   
                        <ul class="videolist">
                            <li>
                                <div class="thumb">
                                <a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="<?=img_url()?>/video5.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                <a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="<?=img_url()?>/video5.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="<?=img_url()?>/video7.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="<?=img_url()?>/video8.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                </div>
                            </li>
                        </ul>           
                    </div> 
                    <!-- END -->
                    <!-- Top Rated -->
                    <div style="display: none;" id="tab_sidebar_comments" class="tab_sidebar_list">  
                        <ul class="videolist">
                            <li>
                                <div class="thumb">
                                    <a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="<?=img_url()?>/video8.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="<?=img_url()?>/video7.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                <a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="<?=img_url()?>/video5.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                <a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="<?=img_url()?>/video5.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                </div>
                            </li>
                        </ul>
                    </div> 
                    <!-- END -->
                    <!-- Most Commented -->
                    <div style="display: none;" id="tab_sidebar_tags" class="tab_sidebar_list"> 
                        <ul class="videolist">
                            <li>
                                <div class="thumb">
                                <a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="<?=img_url()?>/video5.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                <a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="<?=img_url()?>/video5.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="<?=img_url()?>/video7.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="<?=img_url()?>/video8.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- END -->
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Top Searches -->
        <div class="topsearches">
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=1479900725559027";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-like-box" data-href="https://www.facebook.com/funmea" data-width="286px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
        </div>
        <!-- Advertisment -->
        <div class="adv">
            <a href="#"><img src="<?=img_url()?>/adv1.gif" alt="" /></a>
        </div>
        <div class="clear"></div>
    </div>