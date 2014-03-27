<!-- Content Section -->
<div id="content_sec">
    <!-- Column 1 -->
    <div class="col1">
        <!-- Recent Videos -->
        <div class="recent_videos">
            <div class="recent_head">
                <h3>Danh sách videos</h3>
                <div class="recent_buttons">
                    <ul>
                        <li class="gridbutn"><a href="#" class="switch_thumb">&nbsp;</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
            <ul class="display">
                <?foreach($new_videos as $key => $value):?>
                <?if($value->post_type==1):?>
                    <li>
                        <a href="#" class="thumb"></span><img src="http://img.youtube.com/vi/<?=$value->video_code?>/0.jpg" alt="" /></a>
                        <div class="bigsec">
                            <h5><a href="video/<?=$value->post_slug?>" class="colr"><?=$value->post_title?></a></h5>
                            <div class="clear"></div>
                            <p class="txt">
                                <?=$value->post_description?>
                            </p>
                            <div class="clear"></div>
                            <div class="postedby">
                                <p class="postbytxt">Đăng bởi: <a href="#">Việt Milano</a></p>
                                <p class="views"><span class="left">Lượt xem: </span><a href="#">800</a></p>
                            </div>
                            <div class="right">
                                <p class="time">1:50</p>
                                <p class="date"><span>3 days ago</span></p>
                                <div class="rating">
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="greyscal">&nbsp;</a>
                                </div>
                            </div>
                        </div>
                        <div class="smallsec">
                            <h5><a href="detail.html" class="colr">Lorem ipsum dolor sit amet</a></h5>
                            <div class="clear"></div>
                            <p class="time">1:50</p>
                            <p class="date">3 days ago</p>
                            <div class="clear"></div>
                            <div class="rating">
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="greyscal">&nbsp;</a>
                                <p class="views">800 Views</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
                <?endif;?>
                <?endforeach;?>
            </ul>
        </div>
    </div>
    <!-- Column 2 -->
    <div class="col2">
        <!-- Advertisment -->
        <div class="adv">
            <a href="#"><img src="<?=img_url()?>/adv1.gif" alt="" /></a>
        </div>
        <div class="clear"></div>
        <!-- Tabs -->
        <div class="tabs">
            <div class="tab_menu_container">
                <ul id="tab_menu">  
                    <li><a class="current" rel="tab_sidebar_recent">Tin mới</a></li>
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
                                <a href="#"></span><img src="<?=img_url()?>/video5.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                <a href="#"></span><img src="<?=img_url()?>/video5.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"></span><img src="<?=img_url()?>/video7.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"></span><img src="<?=img_url()?>/video8.gif" alt="" /></a>
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
                                    <a href="#"></span><img src="<?=img_url()?>/video8.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"></span><img src="<?=img_url()?>/video7.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                <a href="#"></span><img src="<?=img_url()?>/video5.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                <a href="#"></span><img src="<?=img_url()?>/video5.gif" alt="" /></a>
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
                                <a href="#"></span><img src="<?=img_url()?>/video5.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                <a href="#"></span><img src="<?=img_url()?>/video5.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"></span><img src="<?=img_url()?>/video7.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>
                                    <p class="viewscount">2,061,785 Views</p>
                                    <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"></span><img src="<?=img_url()?>/video8.gif" alt="" /></a>
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
        <!-- Categories -->
        <div class="categories">
            <h5>Nhanh tay kết nối Funmea.com</h5>
                <ul>
                    <li><a href="#" class="youtube">www.YouTube.com</a></li>
                    <li><a href="#" class="flickr">www.Flickr.com</a></li>
                    <li><a href="#" class="facebook">www.facebook.com</a></li>
                </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>