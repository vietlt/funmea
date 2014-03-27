    <!-- Bread Crumb -->
    <div id="crumb">
        <h5><?=$detail->getPost_title()?></h5>
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
                <div class="videoviews"><p>1,387,378 views</p></div>
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
            <div class="comments">
                <h2 class="heading">477 comments</h2>
                <textarea name="" cols="" rows=""></textarea>
                <p class="characters">500 characters remaining</p>
                <ul class="textareasubmission">
                    <li class="txt"><a href="#">Cancel</a> or</li>
                    <li><a href="#" class="post">Post</a></li>
                    <li class="txt"><a href="#" class="attachment">Attach a video </a></li>
                </ul>
                <ul class="commentslist">
                    <li class="level1">
                        <div class="thumb">
                            <a href="#"><img src="<?=img_url()?>/comments1.gif" alt="" /></a>
                        </div>
                        <div class="desc">
                            <div class="commentlinks">
                                <a href="#" class="reply">Reply</a>
                                <a href="#" class="like">Like</a>
                                <a href="#" class="dislike">Dislike</a>
                            </div>
                            <h5><a href="#" class="colr">By MySebbb:</a></h5>
                            <p class="time">7 months ago</p>
                            <div class="clear"></div>
                            <p class="txt">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien.
                            </p>
                        </div>
                    </li>
                    <li class="level1">
                        <div class="thumb">
                            <a href="#"><img src="<?=img_url()?>/comments2.gif" alt="" /></a>
                        </div>
                        <div class="desc">
                            <div class="commentlinks">
                                <a href="#" class="reply">Reply</a>
                                <a href="#" class="like">Like</a>
                                <a href="#" class="dislike">Dislike</a>
                            </div>
                            <h5><a href="#" class="colr">By MySebbb:</a></h5>
                            <p class="time">7 months ago</p>
                            <div class="clear"></div>
                            <p class="txt">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien.
                            </p>
                        </div>
                    </li>
                    <li class="level1">
                        <div class="thumb">
                            <a href="#"><img src="<?=img_url()?>/comments3.gif" alt="" /></a>
                        </div>
                        <div class="desc">
                            <div class="commentlinks">
                                <a href="#" class="reply">Reply</a>
                                <a href="#" class="like">Like</a>
                                <a href="#" class="dislike">Dislike</a>
                            </div>
                            <h5><a href="#" class="colr">By MySebbb:</a></h5>
                            <p class="time">7 months ago</p>
                            <div class="clear"></div>
                            <p class="txt">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien.
                            </p>
                        </div>
                    </li>
                    <li class="level1">
                        <div class="thumb">
                            <a href="#"><img src="<?=img_url()?>/comments4.gif" alt="" /></a>
                        </div>
                        <div class="desc">
                            <div class="commentlinks">
                                <a href="#" class="reply">Reply</a>
                                <a href="#" class="like">Like</a>
                                <a href="#" class="dislike">Dislike</a>
                            </div>
                            <h5><a href="#" class="colr">By MySebbb:</a></h5>
                            <p class="time">7 months ago</p>
                            <div class="clear"></div>
                            <p class="txt">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien.
                            </p>
                        </div>
                    </li>
                    <li class="level2">
                        <div class="thumb">
                            <a href="#"><img src="<?=img_url()?>/comments5.gif" alt="" /></a>
                        </div>
                        <div class="desc">
                            <div class="commentlinks">
                                <a href="#" class="reply">Reply</a>
                                <a href="#" class="like">Like</a>
                                <a href="#" class="dislike">Dislike</a>
                            </div>
                            <h5><a href="#" class="colr">By MySebbb:</a></h5>
                            <p class="time">7 months ago</p>
                            <div class="clear"></div>
                            <p class="txt">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien.
                            </p>
                        </div>
                    </li>
                    <li class="level2">
                        <div class="thumb">
                            <a href="#"><img src="<?=img_url()?>/comments6.gif" alt="" /></a>
                        </div>
                        <div class="desc">
                            <div class="commentlinks">
                                <a href="#" class="reply">Reply</a>
                                <a href="#" class="like">Like</a>
                                <a href="#" class="dislike">Dislike</a>
                            </div>
                            <h5><a href="#" class="colr">By MySebbb:</a></h5>
                            <p class="time">7 months ago</p>
                            <div class="clear"></div>
                            <p class="txt">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien.
                            </p>
                        </div>
                    </li>
                    <li class="level1">
                        <div class="thumb">
                            <a href="#"><img src="<?=img_url()?>/comments7.gif" alt="" /></a>
                        </div>
                        <div class="desc">
                            <div class="commentlinks">
                                <a href="#" class="reply">Reply</a>
                                <a href="#" class="like">Like</a>
                                <a href="#" class="dislike">Dislike</a>
                            </div>
                            <h5><a href="#" class="colr">By MySebbb:</a></h5>
                            <p class="time">7 months ago</p>
                            <div class="clear"></div>
                            <p class="txt">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien.
                            </p>
                        </div>
                    </li>
                </ul>
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
            <h5>Top Searches</h5>
            <ul>
                <li><a href="#" class="colr">Anne Roumanoff</a></li>
                <li><a href="#" class="colr">Caméra caché</a></li>
                <li><a href="#" class="colr">Cauet</a></li>
                <li><a href="#" class="colr">Eric et Ramzy</a></li>
                <li><a href="#" class="colr">Florence</a></li>
                <li><a href="#" class="colr">Foresti</a></li>
                <li><a href="#" class="colr">Franck Dubosc</a></li>
                <li><a href="#" class="colr">Francois</a></li>
                <li><a href="#" class="colr">Damiens</a></li>
                <li><a href="#" class="colr">Anthony</a></li>
                <li><a href="#" class="colr">Kavanagh</a></li>
                <li><a href="#" class="colr">Jamel</a></li>
                <li><a href="#" class="colr">Debbouze</a></li>
                <li><a href="#" class="colr">Laurent</a></li>
                <li><a href="#" class="colr">Ruquier</a></li>
                <li><a href="#" class="colr">Les Nuls</a></li>
                <li><a href="#" class="colr">Michaël Youn</a></li>
                <li><a href="#" class="colr">Omar et Fred</a></li>
                <li><a href="#" class="colr">Patrick Timsit</a></li>
                <li><a href="#" class="colr">Rémi Gaillard</a></li>
                <li><a href="#" class="colr">Gad ElMaleh</a></li>
                <li><a href="#" class="colr">Stéphane Guillon</a></li>
                <li><a href="#" class="colr">TF1 Replay</a></li>
                <li><a href="#" class="colr">chatroulette</a></li>
            </ul>
            <a href="#" class="buttonone"><span>Most Viewed Videos</span></a>
            <a href="#" class="buttonone"><span>Recent Videos</span></a>
        </div>
        <!-- Advertisment -->
        <div class="adv">
            <a href="#"><img src="<?=img_url()?>/adv1.gif" alt="" /></a>
        </div>
        <div class="clear"></div>
    </div>