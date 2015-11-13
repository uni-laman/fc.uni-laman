<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<script type="text/javascript" src="/web/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/web/js/jssor.slider.mini.js"></script>
 <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 4,
                $SpacingX: 4,
                $SpacingY: 4,
                $Orientation: 2,
                $Align: 0
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 810);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider arrow navigator skin 02 css */
        /*
        .jssora02l                  (normal)
        .jssora02r                  (normal)
        .jssora02l:hover            (normal mouseover)
        .jssora02r:hover            (normal mouseover)
        .jssora02l.jssora02ldn      (mousedown)
        .jssora02r.jssora02rdn      (mousedown)
        */
        .jssora02l, .jssora02r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('/web/img/a02.png') no-repeat;
            overflow: hidden;
        }
        .jssora02l { background-position: -3px -33px; }
        .jssora02r { background-position: -63px -33px; }
        .jssora02l:hover { background-position: -123px -33px; }
        .jssora02r:hover { background-position: -183px -33px; }
        .jssora02l.jssora02ldn { background-position: -3px -33px; }
        .jssora02r.jssora02rdn { background-position: -63px -33px; }
/* jssor slider thumbnail navigator skin 11 css *//*.jssort11 .p            (normal).jssort11 .p:hover      (normal mouseover).jssort11 .pav          (active).jssort11 .pav:hover    (active mouseover).jssort11 .pdn          (mousedown)*/.jssort11 .p {    position: absolute;    top: 0;    left: 0;    width: 200px;    height: 69px;    background: #181818;}.jssort11 .tp {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort11 .i, .jssort11 .pav:hover .i {    position: absolute;    top: 3px;    left: 3px;    width: 60px;    height: 30px;    border: white 1px dashed;}* html .jssort11 .i {    width /**/: 62px;    height /**/: 32px;}.jssort11 .pav .i {    border: white 1px solid;}.jssort11 .t, .jssort11 .pav:hover .t {    position: absolute;    top: 3px;    left: 68px;    width: 129px;    height: 32px;    line-height: 32px;    text-align: center;    color: #fc9835;    font-size: 13px;    font-weight: 700;}.jssort11 .pav .t, .jssort11 .p:hover .t {    color: #fff;}.jssort11 .c, .jssort11 .pav:hover .c {    position: absolute;    top: 38px;    left: 3px;    width: 197px;    height: 31px;    line-height: 31px;    color: #fff;    font-size: 11px;    font-weight: 400;    overflow: hidden;}.jssort11 .pav .c, .jssort11 .p:hover .c {    color: #fc9835;}.jssort11 .t, .jssort11 .c {    transition: color 2s;    -moz-transition: color 2s;    -webkit-transition: color 2s;    -o-transition: color 2s;}.jssort11 .p:hover .t, .jssort11 .pav:hover .t, .jssort11 .p:hover .c, .jssort11 .pav:hover .c {    transition: none;    -moz-transition: none;    -webkit-transition: none;    -o-transition: none;}.jssort11 .p:hover, .jssort11 .pav:hover {    background: #333;}.jssort11 .pav, .jssort11 .p.pdn {    background: #462300;}
       </style>
<div class="site-index">
    <div class="body-content">
        <div class="row"> 
            <div class="col-lg-12">
                <div class="col-lg-8" style="margin-left:5%">
                    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 810px; height: 300px; overflow: hidden; visibility: hidden; background-color: #000000;">
                    <!-- Loading Screen -->
                        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                        </div>
                        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
                            <div data-p="112.50" style="display: none;">
                                <img data-u="image" src="/web/img/1.jpeg" />
                                <div data-u="thumb">
                                    <img class="i" src="/web/img/1.jpg" />
                                    <div class="t">Banner Rotator</div>
                                    <div class="c">360+ touch swipe slideshow effects</div>
                                </div>
                            </div>
                            <div data-p="112.50" style="display: none;">
                                <img data-u="image" src="/web/img/1.jpeg" />
                                <div data-u="thumb">
                                    <img class="i" src="img/thumb-003.jpg" />
                                    <div class="t">Image Gallery</div>
                                    <div class="c">Image gallery with thumbnail navigation</div>
                                </div>
                            </div>
                            <div data-p="112.50" style="display: none;">
                                <img data-u="image" src="/web/img/1.jpeg" />
                                <div data-u="thumb">
                                    <img class="i" src="img/thumb-004.jpg" />
                                    <div class="t">Carousel</div>
                                    <div class="c">Touch swipe, mobile device optimized</div>
                                </div>
                            </div>
                            <div data-p="112.50" style="display: none;">
                                <img data-u="image" src="/web/img/1.jpeg" />
                                <div data-u="thumb">
                                    <img class="i" src="img/thumb-005.jpg" />
                                    <div class="t">Themes</div>
                                    <div class="c">30+ professional themems + growing</div>
                                </div>
                            </div>
                            <div data-p="112.50" style="display: none;">
                                <img data-u="image" src="/web/img/1.jpeg" />
                                <div data-u="thumb">
                                    <img class="i" src="img/thumb-006.jpg" />
                                    <div class="t">Tab Slider</div>
                                    <div class="c">Tab slider with auto play options</div>
                                </div>
                            </div>
                        </div>       
                        <!-- Thumbnail Navigator -->
                        <div data-u="thumbnavigator" class="jssort11" style="position:absolute;left:605px;top:0px;font-family:Arial, Helvetica, sans-serif;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;right:5px;width:200px;height:300px;" data-autocenter="2">
                            <!-- Thumbnail Item Skin Begin -->
                            <div data-u="slides" style="cursor: default;">
                                <div data-u="prototype" class="p">
                                    <div data-u="thumbnailtemplate" class="tp"></div>
                                </div>
                            </div>
                            <!-- Thumbnail Item Skin End -->
                        </div>
                        <!-- Arrow Navigator -->
                        <span data-u="arrowleft" class="jssora02l" style="top:123px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
                        <span data-u="arrowright" class="jssora02r" style="top:123px;right:218px;width:55px;height:55px;" data-autocenter="2"></span>
                        <a href="http://www.jssor.com" style="display:none">Jssor Slider</a>
        
                    </div> 	
                </div>        
                <div class="col-lg-2 round_ug textindex" style="margin-left: 4%;">

                    <p>Следующий матч</p>
                    <p>Предыдущиий матч</p>
                    <p>матч</p>
                    <p>матч</p>
                    <p>матч</p>
                    <p>матч</p>
                    <p>матч</p>
                    <p>матч</p>
                    <p>матч</p>
                    <p>матч</p>
                </div>
                <div class="col-lg-12">
                <br>
                </div>
            </div>
                                                                            
            <div class="col-lg-12">
                <div class="col-lg-2 round_ug textindex" style="margin-left:7%;">
                    <div class="zaglavie col-lg-12 ">
                        <h5>Статистика игроков</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>

                    <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
                </div>
                <div class="col-lg-6 round_ug textindex" style="margin-left:1%;">
                    <div class="zaglavie col-lg-12">
                        <h4>Новости</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>

                    <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
                
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>

                    <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>

                    <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>

                    <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>

                    <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
                </div>
                <div class="col-lg-2 round_ug textindex" style="margin-left:1%;">
                    <div class="zaglavie col-lg-12">
                        <h5>Турнирная таблица</h5>
                    </div>
                    <p><select class="selectbox" name="catlist[]" id="category">
					<option value="11">Суперлига</option>
					<option value="22">Дубль</option>
					<option value="33">Старшие юноши</option>
					<option value="44">Младшие юноши</option>
				</select></p>

                    <p><a href="turnir.htm"><strong>Полная таблица</strong></a></p>
                </div>
                <div class="col-lg-12">
                    <br>
                </div>
            </div>
        </div>
       
    </div>
</div>
