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
                    <a href="<?=$detail->getLinkFb()?>" class="bold name"><?=$detail->getCreate_by()?></a>
                </div>
                <div class="videodate">Khoảng 1 giờ trước</div>
                <div class="videodate count-comment"><div class="fb-comments-count" data-href="<?=current_url()?>">0</div></div>
                <div class="videodate count-view"><?if($detail->getCount_view()==0):?> 0 <?else:?><?=$detail->getCount_view()?><?endif;?> lượt xem</div>
                <div class="subscribe"><a href="#" style="text-align: right">Tiếp &raquo;</a></div>
                <div class="subscribe"><a href="#">&laquo; Trước</a></div>
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
                <div class="tabcont">
                    <div class="action">
                        <div class="fb-like" data-href="<?=current_url()?>" data-layout="button_count" data-width="10px" data-height="10px" data-action="like" data-show-faces="false" data-share="false"></div>
                        <div class="fb-share-button" data-href="<?=current_url()?>" data-type="button_count"></div>
                    </div>
                    <div class="clear"></div>
                    <!-- Comments -->
                    <div class="fb-comments" data-href="<?=current_url()?>" data-numposts="10" data-width="675"  data-colorscheme="light"></div>
                    <div class="clear"></div>  
                </div>  
            </div>
            
        </div>
    </div>
    <!-- Column 2 -->
    <div class="col2">
        <!-- Tabs -->
        <div class="side-bar">
            <h5>Video ngẫu nhiên</h5>
            <div class="clear"></div>
            <div class="list-random">
                <?foreach($videos_random as $key => $value):?>
                <ul class="videolist">
                    <li>
                        <div class="thumb">
                        <a href="<?=base_url()?>video/<?=$value->getPost_slug()?>"><img src="http://img.youtube.com/vi/<?=$value->getVideo_code()?>/3.jpg" alt="" width="100%" height="100%" /></a>
                        </div>
                        <div class="desc">
                            <h2><a class="colr title" href="<?=base_url()?>video/<?=$value->getPost_slug()?>"><?=$value->getPost_title()?></a></h2>
                            <p class="viewscount"><?=$value->getCount_view()?> lượt xem</p>
                            <div class="fb-comments-count" data-href="<?=base_url()?>video/<?=$value->getPost_slug()?>">0</div>
                        </div>
                    </li>
                </ul> 
                <?endforeach;?>
            </div>
        </div>
        <div class="clear"></div>
        <!-- Top Searches -->
        <div class="topsearches">
            <div class="fb-like-box" data-href="https://www.facebook.com/funmea" data-width="286px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
        </div>
        <!-- Advertisment -->
        <div class="adv">
            <a href="#"><img src="<?=img_url()?>/adv1.gif" alt="" /></a>
        </div>
        <div class="clear"></div>
    </div>