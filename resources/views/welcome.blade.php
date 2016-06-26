<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
    <title>NESMTI - NORTH-EAST STOCK MARKET TRAINING INSTITUTE</title>
    <meta name="description" content="NESMTI is a stock market institute in Assam. To spread awareness and knowledge of less known insudtry of finance and stock market">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="screen">
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}" type="text/css" media="screen">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    
    <script type="text/javascript" language="javascript" src="{{ asset('js/jquery.caroufredsel-6.2.0-packed.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('jquery.touchswipe.min.js') }}"></script>
    
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/js.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.src.js"></script>
    <![endif]-->
    <!-- Designed at WebGreeds.com -->
    
    
    <script type="text/javascript">
        $(document).ready(function(){

            //  Scrolled by user interaction
            $('#carousel_fred').carouFredSel({
                auto: false,
                prev: '#prev2',
                next: '#next2',
                pagination: "#pager2",
                mousewheel: true,
                swipe: {
                    onMouse: true,
                    onTouch: true
                }
            });
        });
    </script>
    
</head>

<body>

<div class="menu">  
    <div class="container clearfix">

        <div id="logo" class="fleft">
            <a href="javascript:void(0);"><img src="{{ asset('images/NESMTI_logo.png') }}" /></a>
        </div>
        
        <div id="nav" class="fright">
            <ul class="navigation">
                <li data-slide="1">Home</li>
                <li data-slide="2">About</li>
                <li data-slide="6">Services</li>
                <li data-slide="4">Courses</li>
                <li data-slide="8">Contact</li>
                <div class="clear"></div>
            </ul>
        </div>
    
    </div>
</div>


<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
    <div class="padding_slide1">
        <div class="container clearfix">

            <div id="content" class="grid_12">
                <div class="filtr_bg">
                    <span>Lorem ipsum dolor sit</span>
                    <span>Vivamus pulvinar</span>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
    
    <div class="container clearfix">
        
        <div id="content" class="grid_12">
            <br><br>
            <h1><span>About</span></h1>
        </div>
        
        <div id="content" class="grid_12">
            <div class="list_carousel">
                <ul id="carousel_fred">
                    <li>
                        <div class="about_block1">
                            <div class="grid_12">
                                <img src="http://www.template-guide.com/preview/5275/images/about_img1.jpg" alt="" />
                                <h4>MISSION</h4>
                                <p>To spread awareness and knowledge of less known insudtry of finance and stock market.</p>
                                <h4>VISION</h4>
                                <p>To be the best training institute in entire North East by giving maximum placements to its students.</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <!-- <li>
                        <div class="about_block2">
                            <div class="grid_12 ">
                                <h4>Meet The Team</h4>
                                <div class="grid_4 team_block">
                                    <a href="javascript:void(0);"><img src="http://www.template-guide.com/preview/5275/images/team1.jpg" alt="" /></a>
                                    <h4>Peter Wenger</h4>
                                    <p>CEO</p>
                                    Integer aliquet arcu sit amet sem porta facilisis. Curabitur sapien sapien, blandit in molestie et, sagittis id lorem. Nulla malesuada maurises id turpis scelerisque rhoncus.
                                    <ul class="team_soc">
                                        <li><a href="javascript:void(0);" class="soc1"></a></li>
                                        <li><a href="javascript:void(0);" class="soc2"></a></li>
                                        <li><a href="javascript:void(0);" class="soc3"></a></li>
                                        <li><a href="javascript:void(0);" class="soc4"></a></li>
                                    </ul>
                                </div>
                                <div class="grid_4 team_block">
                                    <a href="javascript:void(0);"><img src="http://www.template-guide.com/preview/5275/images/team2.jpg" alt="" /></a>
                                    <h4>John Smith</h4>
                                    <p>Graphic & UI Designer</p>
                                    Integer aliquet arcu sit amet sem porta facilisis. Curabitur sapien sapien, blandit in molestie et, sagittis id lorem. Nulla malesuada maurises id turpis scelerisque rhoncus.
                                    <ul class="team_soc">
                                        <li><a href="javascript:void(0);" class="soc1"></a></li>
                                        <li><a href="javascript:void(0);" class="soc2"></a></li>
                                        <li><a href="javascript:void(0);" class="soc3"></a></li>
                                        <li><a href="javascript:void(0);" class="soc4"></a></li>
                                    </ul>
                                </div>
                                <div class="grid_4 team_block omega">
                                    <a href="javascript:void(0);"><img src="http://www.template-guide.com/preview/5275/images/team3.jpg" alt="" /></a>
                                    <h4>Peter Doe</h4>
                                    <p>Web Designer</p>
                                    Integer aliquet arcu sit amet sem porta facilisis. Curabitur sapien sapien, blandit in molestie et, sagittis id lorem. Nulla malesuada maurises id turpis scelerisque rhoncus.
                                    <ul class="team_soc">
                                        <li><a href="javascript:void(0);" class="soc1"></a></li>
                                        <li><a href="javascript:void(0);" class="soc2"></a></li>
                                        <li><a href="javascript:void(0);" class="soc3"></a></li>
                                        <li><a href="javascript:void(0);" class="soc4"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <li>
                        <div class="about_block3">
                            <div class="grid_7">
                                <h4>Why Choose Us</h4>
                                <div class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#1" data-toggle="tab">Fresh Start</a></li>
                                        <li><a href="#2" data-toggle="tab">Resoults</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="1">
                                            <img src="http://www.template-guide.com/preview/5275/images/tab_img1.jpg" alt="" />
                                            <p>Morbi rutrum, elit ac fermentum egestas, tortor ante vestibulum est, eget scelerisque nisl velit eget tellus. Fusce porta facilisis luctus. Integer neque dolor, rhoncus nec euismod eget, pharetra et tortor. Nulla id pulvinar nunc. Vestibulum auctor nisl vel lectus ullamcorper sed pellentesque dolor eleifend. Praesent lobortis magna vel diam mattis sagittis. Mauris porta odio eu risus scelerisque id facilisis ipsum dictum. Donec fringilla pharetra sapien eget imperdiet. Vivamus iaculis ultricies mauris id posuere. Praesent mollis tincidunt diam, in sagittis odio tincidunt congue. Aliquam laoreet neque sit amet tortor pretium ut volutpat nunc iaculis.  Sed vitae quam vel quam scelerisque tincidunt et et ante. Nam augue lacus, dictum sit amet facilisis ac, venenatis a odio. Quisque velit nunc, interdum eget convallis in, rhoncus at est. Cras vestibulum</p>
                                        </div>
                                        <div class="tab-pane" id="2">
                                            <img src="http://www.template-guide.com/preview/5275/images/tab_img2.jpg" alt="" />
                                            <p>Morbi rutrum, elit ac fermentum egestas, tortor ante vestibulum est, eget scelerisque nisl velit eget tellus. Fusce porta facilisis luctus. Integer neque dolor, rhoncus nec euismod eget, pharetra et tortor. Nulla id pulvinar nunc. Vestibulum auctor nisl vel lectus ullamcorper sed pellentesque dolor eleifend. Praesent lobortis magna vel diam mattis sagittis. Mauris porta odio eu risus scelerisque id facilisis ipsum dictum. Donec fringilla pharetra sapien eget imperdiet. Vivamus iaculis ultricies mauris id posuere. Praesent mollis tincidunt diam, in sagittis odio tincidunt congue. Aliquam laoreet neque sit amet tortor pretium ut volutpat nunc iaculis.  Sed vitae quam vel quam scelerisque tincidunt et et ante. Nam augue lacus, dictum sit amet facilisis ac, venenatis a odio. Quisque velit nunc, interdum eget convallis in, rhoncus at est. Cras vestibulum</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid_5 omega">
                                <h4>Our Skills</h4>
                                <p>Morbi rutrum, elit ac fermentum egestas, tortor ante vestibulum est, eget scelerisque nisl velit eget tellus.</p>
                                <ul id="skills_block">
                                    <p>Proin sit amet neque dolor <b>60%</b></p>
                                    <li><span class="skill1"></span></li>
                                    <p>Nam vitae volutpat libero <b>80%</b></p>
                                    <li><span class="skill2"></span></li>
                                    <p>Sed ac nisi quis justo <b>45%</b></p>
                                    <li><span class="skill3"></span></li>
                                    <p>Sed ac nisi quis justo <b>90%</b></p>
                                    <li><span class="skill4"></span></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li> -->                   
                </ul>
                <div class="clear"></div>
                <div id="pager2" class="pager"></div>
            </div>
        </div>      
        
        <div class="about_links">
            <div id="ab_link1" class=""></div>
            <div id="ab_link2" class=""></div>
            <div id="ab_link3" class=""></div>
        </div>
        
    </div>
</div>

<div class="slide" id="slide6" data-slide="6" data-stellar-background-ratio="0.5">
    <div class="container clearfix">

        <div id="content" class="grid_12">
            <br><br>
            <h1><span>Services</span></h1>
        </div>
        <div class="clear"></div>
        
        <div id="content">
            <div class="grid_5">
                <a class="serv_block" href="javascript:void(0);" alt="" >
                    <img class="iconimg" src="http://www.template-guide.com/preview/5275/images/icon1.png" />
                    <img class="iconimg_h" src="http://www.template-guide.com/preview/5275/images/icon1_h.png" />
                    <p>Training</p>
                    <!-- Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus tempor ipsum vel -->
                </a>
            </div>
            <div class="grid_6">
                <a class="serv_block" href="javascript:void(0);" alt="" >
                    <img class="iconimg" src="http://www.template-guide.com/preview/5275/images/icon2.png" />
                    <img class="iconimg_h" src="http://www.template-guide.com/preview/5275/images/icon2_h.png" />
                    <p>Placement</p>
                    <!-- Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus tempor ipsum vel -->
                </a>
            </div>

            <div class="grid_5">
                <a class="serv_block" href="javascript:void(0);" alt="" >
                    <img class="iconimg" src="http://www.template-guide.com/preview/5275/images/icon4.png" />
                    <img class="iconimg_h" src="http://www.template-guide.com/preview/5275/images/icon4_h.png" />
                    <p>Advisory services</p>
                    <!-- estibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus tempor ipsum vel -->
                </a>
            </div>

            <div class="grid_6 omega">
                <a class="serv_block" href="javascript:void(0);" alt="" >
                    <img class="iconimg" src="http://www.template-guide.com/preview/5275/images/icon3.png" />
                    <img class="iconimg_h" src="http://www.template-guide.com/preview/5275/images/icon3_h.png" />
                    <p>Practical Training  in Live Market  </p>
                    <!-- Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus tempor ipsum vel -->
                </a>
            </div>
            
            
        </div>
    
    </div>
</div>
<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
    <div class="container clearfix">
        
        <div id="content" class="grid_12">
            <br><br>
            <h1><span>Courses</span></h1>
        </div>
        <div class="clear"></div>
        
        <div id="contenet">
            <div class="gallery-list">
                <!-- portfolio_block -->
                <div>       
                    <div class="grid_5 project_block">
                        <!-- <div class="hover_img">
                            <img src="http://www.template-guide.com/preview/5275/images/portfolio/4.jpg" alt="" />
                            <span class="portfolio_zoom"><a href="http://www.template-guide.com/preview/5275/images/portfolio/full/4.jpg" rel="prettyPhoto[portfolio1]"></a></span>
                            <span class="portfolio_link"><a href="javascript:void(0);">View item</a></span>
                        </div> -->
                        <div class="item_description">
                            <p>BASIC SHARE MARKET</p>
                            INTRODUCTION INDIAN SECURITIES MARKET, MARKET REGULATORS,MARKET SEGMENT,  MARKET PARTICIPANTS, Online Trading, Derivative Strategies (f&amp;o),  INTODUCTION OF CURRENCY MARKET, How to make decision for entry &amp; exit, &amp; many more
                        </div>
                    </div>
                    <div class="grid_6 project_block">
                        <!-- <div class="hover_img">
                            <img src="http://www.template-guide.com/preview/5275/images/portfolio/5.jpg" alt="" />
                            <span class="portfolio_zoom"><a href="http://www.template-guide.com/preview/5275/images/portfolio/full/5.jpg" rel="prettyPhoto[portfolio1]"></a></span>
                            <span class="portfolio_link"><a href="javascript:void(0);">View item</a></span>
                        </div> -->
                        <div class="item_description">
                            <p>CERTIFICATION COURSE ON EQUITY  DERIVATIVES  MARKET</p>
                            Introduction of equity market and its functions, introduction of derivatives market, futures & forward, Basics of Options , option strategies, Primary & SECONDARY MARKET, live trading in equity market, clearing and settlement
                        </div>
                    </div>
                    <div class="grid_6 project_block omega">&nbsp;</div>
                    <div class="grid_6 project_block omega">
                        <!-- <div class="hover_img">
                            <img src="http://www.template-guide.com/preview/5275/images/portfolio/6.jpg" alt="" />
                            <span class="portfolio_zoom"><a href="http://www.template-guide.com/preview/5275/images/portfolio/full/6.jpg" rel="prettyPhoto[portfolio1]"></a></span>
                            <span class="portfolio_link"><a href="javascript:void(0);">View item</a></span>
                        </div> -->
                        <div class="item_description">
                            <p>Technical Analysist</p>
                            Basics of Technical Analysist, tradings, support &amp; Resistences, Intrduction to indicator &amp; Oscilators ect
                        </div>
                    </div>

                    
                    
                    <div class="clear"></div>
                </div>   
                <!-- //portfolio_block -->   
            </div>
        </div>
        
    </div>
</div>


<div class="slide" id="slide8" data-slide="8" data-stellar-background-ratio="0.5">
    <div class="container clearfix">
        
        <div id="content" class="grid_12">
            <br><br>
            <h1><span>Contact</span></h1>
        </div>
        <div class="clear"></div>
        
        

        <div class="grid_8">
            <h4>Contact Form</h4>
            <div class="contact_form">  
                <div id="note"></div>
                <div id="fields">
                    <div class="error"> 
                    {!! $errors->first('name', '<p class="help-inline">:message</p>') !!}
                    {!! $errors->first('email', '<p class="help-inline">:message</p>') !!}
                    {!! $errors->first('message', '<p class="help-inline">:message</p>') !!}
                    </div>
                    <form id="ajax-contact-form" action="#">
                        <input type="text" id="name" name="name" value="" placeholder="Name" />
                        <!-- <input type="text" name="subject" value="" placeholder="Phone" /> --><div class="clear"></div>
                        <input type="text" id="email" name="email" value="" placeholder="Email" /><div class="clear"></div>
                        <textarea name="message" id="message" placeholder="Message"></textarea>
                        <div class="clear"></div>
                        
                        <input type="button" onclick="send_mail(); return false;" class="contact_btn send_btn" value="Send" />
                        <div class="clear"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="grid_4 contact_det_block omega">
            <h4>Contact Details</h4>

            <div>OUR TRAINING CENTRES ARE AT</div>
            <div><strong>Guwahati,Dibrugarh, Moran</strong></div>
            <br>
            <ul class="foot_block_intouch">
                <li><strong>Guwahati</strong><p> Asian Infotech Education</p>
                    <p>Zoo Road Tiniali, Apurba Sinha Path</p>
                    <p>Rajgarh Link Road, Near Disneyland School</p>
                    <p>Guwahati - 781003 </p>
                </li>

                <li><strong>Dibrugarh</strong><p> Asian Infotech Education</p>
                    <p>opposite Jay Bee Auto, Amulapatti</p>
                    <p>Dibrugarh - 786001 </p>
                </li>
                <!-- <li class="touch_phone"><p>(+1) 245 5462 252</p></li>
                <li class="touch_clock"><p>Mon - Sat 9:00am - 6:00 pm</p></li>
                <li class="touch_mail"><a href="mailto:support@lorem.com">support@lorem.com</a></li> -->
                <!-- <li class="touch_site"><a href="javascript:void(0);">www.lorem.com</a></li> -->
            </ul>
        </div>
        <div class="clear"></div>

    </div>
    <br><br>
    <!-- <div id="map_block"><iframe width="100%" height="722" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=los+angeles&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=53.080379,114.169922&amp;ie=UTF8&amp;hq=&amp;hnear=Los+Angeles,+California&amp;ll=34.052234,-118.243685&amp;spn=0.003427,0.006968&amp;t=m&amp;z=14&amp;output=embed"></iframe></div> -->
    
</div>




<div id="footer">
    <div class="container clearfix">
        <div class="copyright">NESMTI &copy; 2016</div>
        <div id="back_top"><a class="button" title="" data-slide="1">back to top</a></div>
    </div>
</div>

<script type="text/javascript">
        function send_mail() {
            $.blockUI();
            var name    = '';
            var email   = '';
            var message = '';

            name    = $('#name').val();
            email   = $('#email').val();
            message = $('#message').val();

            var data = '';
            data += '&name='+name+'&email='+email+'&message='+message;

            var url = '';
            url = '{{ route("send.mail") }}';

            $.ajax({
                data : data,
                url  : url,
                type : 'GET',
                error : function(resp) {
                    $.unblockUI();
                    sweetAlert("Oops...", "Something went wrong!", "error");    
                    console.log(resp);
                },

                success : function(resp) {
                    $.unblockUI();
                    swal("Your message have sent", "!", "success")
                }
            });
        } 
    </script>
</body>
</html>
