<?php defined('InShopNC') or exit('Access Invalid!');?>
<!--  <div class="cms-content">
<?php 
$index_file = BASE_UPLOAD_PATH.DS.ATTACH_CMS.DS.'index_html'.DS.'index.html';
if(is_file($index_file)) {
    require($index_file);
}
?>
</div>-->

<!--banner轮播图开始-->
<div class="swiper-container_lb" id="banner">
   <?php echo $output['web_html']['index_big'];?>
</div>
<!--banner轮播图结束-->

<!--初识太常开始-->
<div class="tc_meet_one">
    <div class="tc_title_img">
        <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/tc_index_title_03.png" alt="">
    </div>
    <div class="meet_one_box">
        <div class="left_meet">
            <ul class="tc_instro_img">
                <li>
                    <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/taichang1.png" alt="">
                </li>
                <li>
                    <p class="left_title">太常简介</p>
                </li>
                <li>
                    <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/taichang2.png" alt="">
                </li>
                <li>
                    <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/taichang3.png" alt="">
                    <a href="tc_introduce_sxy.html">+</a>
                </li>
            </ul>
            <h2>太常生物科技有限公司</h2>
            <p class="text">山西太常生物科技有限公司是一家专业从事风湿骨病康复，并以此为基础综合改善各种慢性病及亚健康症状的健康调理机构，是国内风湿骨病、慢性病调理行业的开创者和领导者。</p>
        </div>
        <div class="right_meet">
            <ul class="news_list">
             <?php foreach($output['commend_article'] as $key=>$article){?>
                <li>
                    <span></span>
                    <div class="news_text">
                        <h3>0<?php echo $key+1;?></h3>
                        <div class="news_cont">
                            <a href=""><?php echo str_cut($article['article_title'],25)?></a>
                            <p><?php echo str_cut($article['article_abstract'],64)?></p>
                        </div>
                    </div>
                </li>
             <?php }?>
            </ul>
            <div class="news_tc">
                <p>太常新闻</p >
                <a href="" class="news_img"><img src="<?php echo UPLOAD_SITE_URL.DS.ATTACH_CMS.DS.'article/'.$output['commend_image_article']['article_image']['path'].'/'.$output['commend_image_article']['article_image']['name'];?>" alt=""></a>
                <a href="<?php echo urlCMS('article','article_list')?>" class="click_more">+</a>
            </div>
        </div>
    </div>
    <div class="cgyjc">
        <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/tc_index_title_07.png" alt="">
    </div>
</div>
<!--初识太常结束-->
<!--企业文化开始-->
<div class="company_culture">
    <div class="tc_title_img">
        <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/tc_index_title_11.png" alt="">
    </div>
    <ul class="culture_box">
        <li>
            <div class="culture_text">
                <h1>示例标题</h1>
                <p>示例文字示例文字示例文字示例文字示例文字示例文</p>
            </div>
            <div class="culture_img">
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/qy1.png" alt="">
            </div>
        </li>
        <li>
            <div class="culture_text">
                <h1>示例标题</h1>
                <p>示例文字示例文字示例文字示例文字示例文字示例文示例文字示例文字示例文字示例文字示例文字示例文示例文字示例文字示例文字示例文字示例文字示例文</p>
            </div>
            <div class="culture_img">
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/index_03.png" alt="">
            </div>
        </li>
        <li>
            <div class="culture_text">
                <h1>示例标题</h1>
                <p>示例文字示例文字示例文字示例文字示例文字示例文</p>
            </div>
            <div class="culture_img">
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/qy4.png" alt="">
            </div>
        </li>
        <li>
            <div class="culture_text">
                <h1>示例标题</h1>
                <p>示例文字示例文字示例文字示例文字示例文字示例文</p>
            </div>
            <div class="culture_img">
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/qy2.png" alt="">
            </div>
        </li>
        <li>
            <div class="culture_text">
                <h1>示例标题</h1>
                <p>示例文字示例文字示例文字示例文字示例文字示例文示例文字示例文字示例文字示例文字示例文字示例文</p>
            </div>
            <div class="culture_img">
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/qy5.png" alt="">
            </div>
        </li>
    </ul>
    <div class="view_more">
        <a href="enterprise_culture_sxy.html"><img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/more_03.png" alt=""></a>
    </div>
    <div class="cgyjc" style="margin-top: 16px">
        <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/tc_index_title_07.png" alt="">
    </div>
</div>
<!--企业文化结束-->
<!--业务体系开始-->
<div class="business_system">
    <div class="tc_title_img">
        <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/tc_index_title_14.png" alt="">
    </div>
    <div class="system_box">
        <div class="system_left">
            <div class="system_text">
                <h1><span>示例-文字</span></h1>
                <p>
                    新零售，就是更高效率的零售。我们要从线上回到线下但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。我们要从线上回到线下，但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。我们要从线上回到线下，但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。</p>
            </div>
            <div class="system_big_img">
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/system_bg_img_03.png" alt="">
            </div>
        </div>
        <div class="system_right">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <ul class="system_list">
                            <li>
                                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/system_list_03.png" alt="" class="system_list_img">
                                <div class="system_mask">
                                    <p class="system_list_title">示例文字</p>
                                    <span></span>
                                </div>
                                <input type="hidden" class="system_list_text" value="111新零售，就是更高效率的零售。我们要从线上回到线下但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。我们要从线上回到线下，但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。">
                            </li>
                            <li>
                                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/system_list_05.png" alt="" class="system_list_img">
                                <div class="system_mask">
                                    <p class="system_list_title">示例文字</p>
                                    <span></span>
                                </div>
                                <input type="hidden" class="system_list_text" value="222新零售，就是更高效率的零售。我们要从线上回到线下但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。我们要从线上回到线下，但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。">
                            </li>
                            <li>
                                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/system_list_09.png" alt="" class="system_list_img">
                                <div class="system_mask">
                                    <p class="system_list_title">示例文字</p>
                                    <span></span>
                                </div>
                                <input type="hidden" class="system_list_text" value="333新零售，就是更高效率的零售。我们要从线上回到线下但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。我们要从线上回到线下，但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。">
                            </li>
                            <li>
                                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/system_list_11.png" alt="" class="system_list_img">
                                <div class="system_mask">
                                    <p class="system_list_title">示例文字</p>
                                    <span></span>
                                </div>
                                <input type="hidden" class="system_list_text" value="444新零售，就是更高效率的零售。我们要从线上回到线下但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。我们要从线上回到线下，但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。">
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul class="system_list">
                            <li>
                                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/system_list_05.png" alt="" class="system_list_img">
                                <div class="system_mask">
                                    <p class="system_list_title">示例文字</p>
                                    <span></span>
                                </div>
                                <input type="hidden" class="system_list_text" value="555新零售，就是更高效率的零售。我们要从线上回到线下但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。我们要从线上回到线下，但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。">
                            </li>
                            <li>
                                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/system_list_11.png" alt="" class="system_list_img">
                                <div class="system_mask">
                                    <p class="system_list_title">示例文字</p>
                                    <span></span>
                                </div>
                                <input type="hidden" class="system_list_text" value="666新零售，就是更高效率的零售。我们要从线上回到线下但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。我们要从线上回到线下，但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。">
                            </li>
                            <li>
                                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/system_list_09.png" alt="" class="system_list_img">
                                <div class="system_mask">
                                    <p class="system_list_title">示例文字</p>
                                    <span></span>
                                </div>
                                <input type="hidden" class="system_list_text" value="777新零售，就是更高效率的零售。我们要从线上回到线下但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。我们要从线上回到线下，但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。">
                            </li>
                            <li>
                                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/system_list_03.png" alt="" class="system_list_img">
                                <div class="system_mask">
                                    <p class="system_list_title">示例文字</p>
                                    <span></span>
                                </div>
                                <input type="hidden" class="system_list_text" value="888新零售，就是更高效率的零售。我们要从线上回到线下但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。我们要从线上回到线下，但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <div class="view_more">
        <a href="business_system_sxy.html"><img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/more_white_03.png" alt=""></a>
    </div>
    <div class="cgyjc" style="margin-top: 16px">
        <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/tc_index_title_07.png" alt="">
    </div>
</div>
<!--业务体系结束-->
<!--待定开始-->
<div class="tc_shuffling">
    <div class="tc_title_img">
        <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/tc_index_title_14.png" alt="">
    </div>
    <div class="shuffling_box">
        <ul class="shuffling_lb">
            <li>
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/shuffling_03.png" alt="">
                <input type="hidden" class="shuffling_text_title" value="示例-文字1">
                <input type="hidden" class="shuffling_text_cont" value="新零售，就是更高效率的零售。我们要从线上回到线下但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。我们要从线上回到线下，但不是原路返回，而是要用互联网...">
                <input type="hidden" class="shuffling_text_url" value="1111">
            <li>
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/shuffling_01.png" alt="">
                <input type="hidden" class="shuffling_text_title" value="示例-文字2">
                <input type="hidden" class="shuffling_text_cont" value="新零售，就是更高效率的零售。我们要从线上回到线下但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。我们要从线上回到线下，但不是原路返回，而是要用互联网...">
                <input type="hidden" class="shuffling_text_url" value="2222">
            </li>
            <li>
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/shuffling_02.png" alt="">
                <input type="hidden" class="shuffling_text_title" value="示例-文字3">
                <input type="hidden" class="shuffling_text_cont" value="新零售，就是更高效率的零售。我们要从线上回到线下但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。我们要从线上回到线下，但不是原路返回，而是要用互联网...">
                <input type="hidden" class="shuffling_text_url" value="3333">
            </li>
            <li>
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/qy2.png" alt="">
                <input type="hidden" class="shuffling_text_title" value="示例-文字4">
                <input type="hidden" class="shuffling_text_cont" value="新零售，就是更高效率的零售。我们要从线上回到线下但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。我们要从线上回到线下，但不是原路返回，而是要用互联网...">
                <input type="hidden" class="shuffling_text_url" value="4444">
            </li>
        </ul>
        <ul class="shuffling_arrow">
            <li class="arrow_left">
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/arrow_lb_03.png" alt="" class="active">
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/arrow_03.png" alt="" class="unactive">
            </li>
            <li class="arrow_right">
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/arrow_lb_04.png" alt="" class="active">
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/arrow_04.png" alt="" class="unactive">
            </li>
        </ul>
        <div class="shuffling_text">
            <h1>示例-文字</h1>
            <i></i>
            <p>新零售，就是更高效率的零售。我们要从线上回到线下但不是原路返回，而是要用互联网的工具和方法，提升传统零售的效率，实现融合。新零售，就是更高效率的零售。我们要从线上回到线下，但不是原路返回，而是要用互联网...</p>
            <a href="javascript:;">查看</a>
        </div>
    </div>
    <div class="view_more">
        <a href=""><img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/more_03.png" alt=""></a>
    </div>
    <div class="cgyjc" style="margin-top: 16px">
        <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/tc_index_title_07.png" alt="">
    </div>
</div>
<!--待定结束-->
<!--健康讲堂开始-->
<div class="health_class">
    <div class="tc_title_img">
        <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/tc_index_title_20.png" alt="">
    </div>
    <ul class="health_class_list">
        <li class="video_play">
            <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/health_list_03.png" alt="" class="health_class_img">
            <div class="health_mask">
                <a href="video_play.html?url=http://www.duyiwang.cn/data/upload/video/第一讲.mp4"><img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/play_button_03.png" alt=""></a>
            </div>
            <input type="hidden" class="health_video_url">
        </li>
        <li class="video_play">
            <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/health_list_07.png" alt="" class="health_class_img">
            <div class="health_mask">
                <a href="video_play.html?url=http://www.duyiwang.cn/data/upload/video/炙骨宁.mp4"><img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/play_button_03.png" alt=""></a>
            </div>
            <input type="hidden" class="health_video_url">
        </li>
        <li>
            <span></span>
            <div class="health_text">
                <h1>示例文字</h1>
                <h2>Sample text</h2>
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/health_arrow_03.png" alt="">
            </div>
            <span></span>
        </li>
        <li>
            <span></span>
            <div class="health_text">
                <h1>示例文字</h1>
                <h2>Sample text</h2>
                <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/health_arrow_07.png" alt="">
            </div>
            <span></span>
        </li>
        <li class="video_play">
            <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/health_list_11.png" alt="" class="health_class_img">
            <div class="health_mask">
                <a href="video_play.html?url=http://www.duyiwang.cn/data/upload/video/第三讲.mp4"><img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/play_button_03.png" alt=""></a>
            </div>
            <input type="hidden" class="health_video_url">
        </li>
        <li class="video_play">
            <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/health_list_10.png" alt="" class="health_class_img">
            <div class="health_mask">
                <a href="video_play.html?url=http://www.duyiwang.cn/data/upload/video/老膏药3分钟.mp4"><img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/play_button_03.png" alt=""></a>
            </div>
            <input type="hidden" class="health_video_url">
        </li>
    </ul>
    <div class="view_more">
        <a href="videolist_sxy.html"><img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/more_03.png" alt=""></a>
    </div>
    <div class="cgyjc" style="margin-top: 16px">
        <img src="<?php echo CMS_TEMPLATES_URL;?>/img/tc_index/tc_index_title_07.png" alt="">
    </div>
</div>
<!--健康讲堂结束-->

<script>
    $(window).scroll(function(){
        if($(window).scrollTop()>=200){
            $('.header_sxy').css('background','#0457b7')
        }else{
            $('.header_sxy').css('background','rgba(0,0,0,0)')
        }
    })
    //banner轮播图
    let swiper_lb = new Swiper('.swiper-container_lb', {
        spaceBetween: 0,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    //设置企业文化 文本高度
    let h = $('.culture_img').height();
    $('.culture_text').height(h);
    //设置企业文化 文本高度    中间
    let hh = $('.culture_box li:nth-child(2) .culture_img').height();
    $('.culture_box li:nth-child(2) .culture_text').height(hh);
    //监测屏幕变化刷新页面，防止企业文化板块不适应
    window.onresize = function () {
        if ($(window).width() > 1200) {
            location.reload();
        }
    }

    //业务体系轮播图
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    //业务体系点击切换文字效果
    $('.system_list li').click(function () {
        let system_list_title=$(this).find('.system_list_title').html();
        let system_list_text=$(this).find('.system_list_text').val();
        let system_list_img=$(this).find('.system_list_img').attr('src');
        $('.system_text h1 span').html(system_list_title);
        $('.system_text p').html(system_list_text);
        $('.system_big_img img').attr('src',system_list_img);
    });
    
    //层叠轮播
    function cascading_lb() {
        function switch_cont() {
            let shuffling_text_title=$('.shuffling_lb li:first-child').find('.shuffling_text_title').val();
            let shuffling_text_cont=$('.shuffling_lb li:first-child').find('.shuffling_text_cont').val();
            let shuffling_text_url=$('.shuffling_lb li:first-child').find('.shuffling_text_url').val();
            $('.shuffling_text h1').html(shuffling_text_title);
            $('.shuffling_text p').html(shuffling_text_cont);
            $('.shuffling_text a').attr('href',shuffling_text_url);
        }
        switch_cont();
        function cascading_r() {
            //第一个元素放到最后
            let box_img=$('.shuffling_lb')[0];
            let first = box_img.firstElementChild;
            box_img.appendChild(first);
            //文字显示切换
            switch_cont();
        }
        function cascading_l(){
            //最后一个元素插到第一个元素之前
            let box_img=$('.shuffling_lb')[0];
            let first = box_img.firstElementChild;
            let last = box_img.lastElementChild;
            box_img.insertBefore(last, first);
            //文字显示切换
            switch_cont();
        }
        $('.arrow_right').click(function () {
            cascading_r();
        });
        $('.arrow_left').click(function () {
            cascading_l();
        });
        setInterval(function () {
            cascading_r();
        },3000);
    }
    cascading_lb();
</script>


