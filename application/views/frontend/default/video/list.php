
    <!-- Bread Crumb -->
    <div id="crumb">
        <div class="allvideos_heading">
            <h4>Tất cả Videos</h4>
            <p>(Switch to 5000 DVDs)</p>
        </div>
        <div class="clear"></div>
    </div>
    <!-- Column 1 -->
    <div class="col1">
        
        <!-- White Section small -->
        <div class="whitesec_search">
            <p>356,000 Full Quality Downloadable Videos</p>
        </div>
        <!-- Small Banner -->
        <div class="small_banner">
            <a href="#"><img src="<?=img_url()?>/apple_banner.gif" alt="" /></a>
        </div>
        <div class="clear"></div>
        <!-- Recent Videos -->
        <div class="recent_videos">
            <div class="clear"></div>
            <!-- Video Listing -->
            <ul class="display">
                <?foreach($new_videos as $key => $value):?>
                <li>
                    <a href="<?=base_url()?>video/<?=$value->post_slug?>" class="thumb"><img src="http://img.youtube.com/vi/<?=$value->video_code?>/0.jpg" alt="" /></a>
                    <div class="bigsec">
                        <h5><a href="<?=base_url()?>video/<?=$value->post_slug?>" class="colr"><?=$value->getPost_title()?></a></h5>
                        <div class="clear"></div>
                        <div class="yourhere">
                            <p>You are here:</p>
                            <a href="#">Videos</a>
                            <a href="#">Fashion</a>
                            <a href="#" class="last">Kid</a>
                        </div>
                        <div class="clear"></div>
                        <p class="txt">
                            <?=$value->getPost_description()?>
                        </p>
                        <div class="clear"></div>
                        <div class="postedby">
                            <p class="postbytxt">By: <a href="#">RayWilliams</a></p>
                            <p class="views"><span class="left">Views: </span><a href="#">800</a></p>
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
                        <h6><a href="detail.html" class="colr">Lorem ipsum dolor sit amet</a></h6>
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
                <?endforeach;?>
            </ul>
            <div class="clear"></div>
            <!-- Small Banner -->
            <div class="small_banner">
                <a href="#"><img src="<?=img_url()?>/apple_banner.gif" alt="" /></a>
            </div>
            <div class="clear"></div>
            <!-- Pagination -->
            <div class="paginations">
                <h5 class="pagehead">PAGE</h5>
                <ul>
                    <li class="leftpage"><a href="#">&nbsp;</a></li>
                    <li class="pages"><a href="#">1</a></li>
                    <li class="pages"><a href="#">2</a></li>
                    <li class="pages"><a href="#">3</a></li>
                    <li class="pages"><a href="#">4</a></li>
                    <li class="pages"><a href="#" class="selected">5</a></li>
                    <li class="pages"><a href="#">6</a></li>
                    <li class="pages"><a href="#">7</a></li>
                    <li class="pages"><a href="#">8</a></li>
                    <li class="pages"><a href="#">9</a></li>
                    <li class="pages"><a href="#">10</a></li>
                    <li class="dots">...</li>
                    <li class="pages"><a href="#">103</a></li>
                    <li class="pages"><a href="#">104</a></li>
                    <li class="nextpage"><a href="#">&nbsp;</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Column 2 -->
    <div class="col2">
        <!-- Categories -->
        <div class="categories">
            <h5>Theo dõi Funmea.com</h5>
            <ul>
                <li>Làm cái gì đó đó</li>
                <li>Làm cái gì đó đó</li>
                <li>Làm cái gì đó đó</li>
                <li>Làm cái gì đó đó</li>
            </ul>
        </div>
        <div class="clear"></div>
        <!-- Advertisment -->
        <div class="adv">
            <a href="#"><img src="<?=img_url()?>/adv1.gif" alt="" /></a>
        </div>
        <div class="clear"></div>
    </div>