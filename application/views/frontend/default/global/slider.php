<!-- Banner -->
<div id="banner">
    <div id="slider2" class="leftsecbanner">
        <?foreach($new_videos as $key => $value):?>
        <div class="contentdiv">
            <object type="application/x-shockwave-flash" style="width:660px; height:348px;" data="http://www.youtube.com/v/<?=$value->video_code?>?fs=1&amp;hl=en_US&amp;rel=0">
                <param name="movie" value="http://www.youtube.com/v/-vqYyt0PPfE?fs=1&amp;hl=en_US&amp;rel=0" />
                <param value="application/x-shockwave-flash" name="type" /> 
                <param value="true" name="allowfullscreen" /> 
                <param value="always" name="allowscriptaccess" /> 
                <param value="opaque" name="wmode" />
            </object>
        </div>
        <?endforeach;?>

        <?foreach($unwatch_videos as $key => $value):?>
        <div class="contentdiv">
            <object type="application/x-shockwave-flash" style="width:660px; height:348px;" data="http://www.youtube.com/v/<?=$value->video_code?>?fs=1&amp;hl=en_US&amp;rel=0">
                <param name="movie" value="http://www.youtube.com/v/-vqYyt0PPfE?fs=1&amp;hl=en_US&amp;rel=0" />
                <param value="application/x-shockwave-flash" name="type" /> 
                <param value="true" name="allowfullscreen" /> 
                <param value="always" name="allowscriptaccess" /> 
                <param value="opaque" name="wmode" />
            </object>
        </div>
        <?endforeach;?>

        <?foreach($seemore_videos as $key => $value):?>
        <div class="contentdiv">
            <object type="application/x-shockwave-flash" style="width:660px; height:348px;" data="http://www.youtube.com/v/<?=$value->video_code?>?fs=1&amp;hl=en_US&amp;rel=0">
                <param name="movie" value="http://www.youtube.com/v/-vqYyt0PPfE?fs=1&amp;hl=en_US&amp;rel=0" />
                <param value="application/x-shockwave-flash" name="type" /> 
                <param value="true" name="allowfullscreen" /> 
                <param value="always" name="allowscriptaccess" /> 
                <param value="opaque" name="wmode" />
            </object>
        </div>
        <?endforeach;?>
        
    </div>
    <div id="paginate-slider2">
        <div class="usual">
            <ul class="idTabs">
              <li><a href="#idTab1" class="selected"><span>Mới</span></a></li>
              <li><a href="#idTab2"><span>Bạn chưa xem</span></a></li>
              <li><a href="#idTab3"><span>Top xem nhiều</span></a></li>
            </ul>
            <div id="idTab1" class="tabssection">
                <div class="css-scrollbar simple">
                    <?foreach($new_videos as $key => $value):?>
                    <a href="#" class="toc">
                        <span class="thumb"><img src="http://img.youtube.com/vi/<?=$value->video_code?>/3.jpg" alt="" /></span>
                        <span class="desc">
                            <span class="title"><?=$value->post_title?></span>
                            <span class="time">03:54</span>
                            <span class="channel">RihannaVEVO</span>
                        </span>
                    </a>
                    <?endforeach;?>
                </div>
            </div>
            <div id="idTab2" class="tabssection">
                <div class="css-scrollbar simple">
                    <?foreach($unwatch_videos as $key => $value):?>
                    <a href="#" class="toc">
                        <span class="thumb"><img src="http://img.youtube.com/vi/<?=$value->video_code?>/3.jpg" alt="" /></span>
                        <span class="desc">
                            <span class="title"><?=$value->post_title?></span>
                            <span class="time">03:54</span>
                            <span class="channel">RihannaVEVO</span>
                        </span>
                    </a>
                    <?endforeach;?>
                </div>
            </div>
            <div id="idTab3" class="tabssection">
                <div class="css-scrollbar simple">
                    <?foreach($seemore_videos as $key => $value):?>
                    <a href="#" class="toc">
                        <span class="thumb"><img src="http://img.youtube.com/vi/<?=$value->video_code?>/3.jpg" alt="" /></span>
                        <span class="desc">
                            <span class="title"><?=$value->post_title?></span>
                            <span class="time">03:54</span>
                            <span class="channel">RihannaVEVO</span>
                        </span>
                    </a>
                    <?endforeach;?>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <script type="text/javascript" src="<?=js_url()?>/libs/banner.js"></script>
</div>
<div class="clear"></div>