<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home</title>
  <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" media="screen" />
  <!-- Hover.css -->
  <link rel="stylesheet" href="{{asset('css/hover-min.css')}}" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" media="screen" />
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{asset('css/owl.theme.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/my.css')}}">
  <!-- Addon Style -->
  <link rel="stylesheet" href="{{asset('css/index.style.css')}}" media="screen" />
  <!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>

<body>

  <!-- Preloader -->
  <div id="preloader">
    <div id="loader">
      <img src="{{asset('img/heart_loading.gif')}}" alt="preload spinner">
      <div class="pre-logo">
        <h4>{{config('app.name')}}</h4>
      </div>
    </div>
  </div>
  <!-- End of preloader -->

  <!-- Start wrapper as cross-portfolio -->
  <div id="cross-portfolio" class="cross-portfolio">

    <!-- Hamburger menu on scroll-->
    <nav id="nav-icon">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </nav>
    <!-- end of hamburger -->

    <!-- Overlay menu -->
    <nav id="menu-overlay">
      <ul id="menu" class="menu-click list-unstyled">
        <li><a data-scroll href="#profile" class="smooth-scroll">主页</a></li>
        <li><a data-scroll href="#services" class="smooth-scroll">我所崇尚的</a></li>
        <li><a data-scroll href="#portfolio" class="smooth-scroll">项目</a></li>
        <li><a data-scroll href="#resume" class="smooth-scroll">简历</a></li>
        <li><a data-scroll href="#contact" class="smooth-scroll">联系我</a></li>
      </ul>
    </nav>
    <!-- end of overlay menu -->

    <!-- Start intro / background / big title -->
    <div id="intro">

      <!-- Background -->
      <div class="bg">
        <div class="bg-img">
          <img src="{{asset('img/bg1280x788.jpg')}}" alt="Background Image" />
        </div>
      </div>
      <!-- End of background -->

      <!-- Top logo -->
      <div class="cross-top">
        <a href="{{route('/')}}" class="logo"><span>{{config('app.name')}}</span></a>
      </div>
      <!-- End of top logo -->

      <!-- The middle big title -->
      <div class="big-title">
        <div class="text-center">
          <h1>{{config('app.author')}}</h1>
          <p>I'm <span class="sub-title"></span></p>
        </div>
      </div>
      <!-- End of big title -->

      <!-- Chevron arrow down button -->
      <button class="trigger hvr-hang"><i class="fa fa-chevron-down"></i></button>

    </div>
    <!-- End of intro -->

    <!-- Start of profile -->
    <div id="profile" class="content">
      <div class="containers">
        <div class="row">
          <div class="col-lg-12">

            <!-- Title -->
            <div class="title">
              <h1>{{config('app.author')}}</h1>
              <span class="h4 element"></span>
            </div>
            <!-- End of title -->

            <!-- About me -->
            <div class="space">
              <h3>自我介绍</h3>
              <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis. Nam sem lacus, vulputate ut turpis vel, viverra porta ante. Pellentesque a ornare libero. Aenean sed ipsum a lectus volutpat dictum non non
                neque. Nunc sit amet felis non velit consequat venenatis id eu dui.</p>
              <p class="text-justify">In congue eu dui sit amet euismod. Ut vehicula tellus nec laoreet congue. Mauris id eros ultricies, vulputate metus ac, euismod lorem.</p>
            </div>
            <!-- End of about me -->
          </div>

          <!-- Avatar image -->
          <div class="col-lg-6 col-md-12 col-sm-12 hidden-md animated">
            <img src="{{asset('img/avatar500x680.jpg')}}" class="avatar" alt="Avatar">
          </div>
          <!-- End avatar image -->

          <!-- Start skills / expertise -->
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="space">
              <h3>职业技能</h3>

              <h5>HTML / CSS3</h5>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>

              <h5>Javascript</h5>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success" style="width: 80%"></div>
              </div>

                <h5>Vue.js</h5>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-default" style="width: 85%"></div>
                </div>

                <h5>MySQL / NoSQL</h5>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-success" style="width: 88%"></div>
                </div>


                <h5>PHP</h5>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-warning" style="width: 90%"></div>
              </div>

            <h5>Linux</h5>
            <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-danger" style="width: 90%"></div>
            </div>
            </div>
          </div>
          <!-- End of skills / expertise -->
        </div>
        <!-- end row -->
      </div>
      <!-- end containers -->
    </div>
    <!-- end profile -->

    <!-- Start countTo -->
    <div id="count" class="content">
      <div class="containers">
        <div class="row">
          <div class="col-md-12">

            <!-- CountTo -->
            <div class="animated text-center">
              <div class="col-md-4">
                <p class="h2"><i class="fa fa-child"></i> <span class="count" data-from="0" data-to="3" data-speed="5000" data-refresh-interval="50"></span></p>
                <h5 class="text-weight">公司</h5>
              </div>
              <div class="col-md-4">
                <p class="h2"><i class="fa fa-laptop"></i> <span class="count" data-from="0" data-to="9" data-speed="5000" data-refresh-interval="50"></span></p>
                <h5 class="text-weight">项目</h5>
              </div>
              <div class="col-md-4">
                <p class="h2"><i class="fa fa-code"></i> <span class="count" data-from="0" data-to="15923" data-speed="5000" data-refresh-interval="50"></span></p>
                <h5 class="text-weight">代码</h5>
              </div>
            </div>
            <!-- End countTo -->

          </div>
          <!-- end col-md-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end containers -->
    </div>
    <!-- End of countTo -->

    <!-- Start services / what I can -->
    <div id="services" class="content">
      <div class="containers">
        <div class="row">

          <!-- Title -->
          <div class="col-md-12 headline">
            <h2>我所崇尚的</h2>
            <hr>
          </div>
          <!-- end title -->

          <!-- Start -->
          <div class="col-md-12">
            <div class="row">

              <div class="col-sm-6 animated">
                <div class="panel panel-default hvr-grow-shadow">
                  <div class="panel-body">
                    <div class="icon-item">
                      <i class="fa fa-code"></i>
                      <h5>优雅的代码</h5>
                    </div>
                    <div class="text-justify">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 animated">
                <div class="panel panel-default hvr-grow-shadow">
                  <div class="panel-body">
                    <div class="icon-item">
                      <i class="fa fa-desktop"></i>
                      <h5>响应式 UI</h5>
                    </div>
                    <div class="text-justify">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- .row -->

            <div class="row">
              <div class="col-sm-6 animated">
                <div class="panel panel-default hvr-grow-shadow">
                  <div class="panel-body">
                    <div class="icon-item">
                      <i class="fa fa-cloud"></i>
                      <h5>自动化部署</h5>
                    </div>
                    <div class="text-justify">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 animated">
                <div class="panel panel-default hvr-grow-shadow">
                  <div class="panel-body">
                    <div class="icon-item">
                      <i class="fa fa-rocket"></i>
                      <h5>敏捷开发</h5>
                    </div>
                    <div class="text-justify">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis.</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end services item -->
            </div>
            <!-- row -->
          </div>
          <!-- col-md-12 -->
        </div>
        <!-- row -->
      </div>
      <!-- containers -->
    </div>
    <!-- End of services / what i can -->

    <!-- Start of portfolio -->
    <div id="portfolio" class="content">
      <div class="containers">
        <div class="row">

          <!-- title -->
          <div class="col-md-12 headline">
            <h2>项目</h2>
            <hr>
          </div>
          <!-- end title -->

          <!-- start work profolio image -->
          <div class="col-md-12 space">

            <!-- image 1 -->
            <figure class="cross-image animated">
              <img src="{{asset('img/project_1.jpg')}}" alt="Project 1" />
              <figcaption>
                <h2>Project 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis.</p>
                <a href="#">View More</a>
              </figcaption>
            </figure>

            <!-- image 2 -->
            <figure class="cross-image animated">
              <img src="img/project_2.jpg" alt="Project 2" />
              <figcaption>
                <h2>Project 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis.</p>
                <a href="#">View More</a>
              </figcaption>
            </figure>

            <!-- image 3 -->
            <figure class="cross-image animated">
              <img src="img/project_3.jpg" alt="Project 3" />
              <figcaption>
                <h2>Project 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis.</p>
                <a href="#">View More</a>
              </figcaption>
            </figure>

            <!-- image 4 -->
            <figure class="cross-image animated">
              <img src="img/project_4.jpg" alt="Project 4" />
              <figcaption>
                <h2>Project 4</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis.</p>
                <a href="#">View More</a>
              </figcaption>
            </figure>

          </div>
          <!-- end of work portfolio image -->

          <!-- middle view more button -->
          <div class="col-md-12 text-center animated">
            <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#projectModal"><i class="fa fa-plane"></i> View More</a>
          </div>
          <!-- end button -->
        </div>
        <!-- row -->
      </div>
      <!-- containers -->
    </div>
    <!-- End of portfolio -->
    <div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>

    <!-- Start of resume -->
    <div id="resume" class="content">
      <div class="containers">
        <div class="row">

          <!-- title -->
          <div class="col-md-12 headline">
            <h2>简历</h2>
            <hr>
          </div>
          <!-- end title-->
        </div>
        <!-- .row -->

        <!-- start resume item -->
        <div class="row">

          <div class="col-md-12 animated">
            <h3>教育背景</h3>
          </div>

          <!-- education 1 -->
          <div class="col-sm-8 col-md-8 col-md-push-4 animated">
            <h4>园林</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis. Nam sem lacus, vulputate ut turpis vel, viverra porta ante.</p>
            <hr class="hidden-xs">
          </div>

          <div class="col-sm-4 col-md-4 col-md-pull-8 animated">
            <div class="icon-list">
              <div class="icon-list-icon">
                <i class="fa fa-graduation-cap"></i>
              </div>
              <div class="icon-list-content">
                <div class="icon-list-title">运城学院</div>
                <div class="icon-list-info">
                  <span>2012.09 - 2016.06</span>
                </div>
              </div>
            </div>
            <hr class="visible-xs">
          </div>

          <!-- education 2 -->
          <div class="col-sm-8 col-md-8 col-md-push-4 animated">
            <h4>学员</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis. Nam sem lacus, vulputate ut turpis vel, viverra porta ante.</p>
            <hr class="hidden-xs">
          </div>

          <div class="col-sm-4 col-md-4 col-md-pull-8 animated">
            <div class="icon-list">
              <div class="icon-list-icon">
                <i class="fa fa-graduation-cap"></i>
              </div>
              <div class="icon-list-content">
                <div class="icon-list-title">运城沃德学院</div>
                <div class="icon-list-info">
                  <span>2015.11 - 2016.03</span>
                </div>
              </div>
            </div>
            <hr class="visible-xs">
          </div>

        </div>
        <!-- .row -->

        <div class="row">
          <div class="col-md-12 animated">
            <h3>工作经验</h3>
          </div>

          <!-- experience 1 -->
          <div class="col-sm-8 col-md-8 col-md-push-4 animated">
            <h4>PHP实习生</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis. Nam sem lacus, vulputate ut turpis vel, viverra porta ante.</p>
            <hr class="hidden-xs">
          </div>

          <div class="col-sm-4 col-md-4 col-md-pull-8 animated">
            <div class="icon-list">
              <div class="icon-list-icon">
                <i class="fa fa-briefcase"></i>
              </div>
              <div class="icon-list-content">
                <div class="icon-list-title">北京思想加网络科技有限公司</div>
                <div class="icon-list-info">
                  <span>2016.04 - 2016.06</span>
                </div>
              </div>
            </div>
            <hr class="visible-xs">
          </div>

          <!-- experience 2 -->
          <div class="col-sm-8 col-md-8 col-md-push-4 animated">
            <h4>PHP程序员</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis. Nam sem lacus, vulputate ut turpis vel, viverra porta ante.</p>
            <hr class="hidden-xs">
          </div>

          <div class="col-sm-4 col-md-4 col-md-pull-8 animated">
            <div class="icon-list">
              <div class="icon-list-icon">
                <i class="fa fa-briefcase"></i>
              </div>
              <div class="icon-list-content">
                <div class="icon-list-title">北京思想加网络科技有限公司</div>
                <div class="icon-list-info">
                  <span>2016.06 - 2017.08</span>
                </div>
              </div>
            </div>
            <hr class="visible-xs">
          </div>

            <!-- experience 3 -->
            <div class="col-sm-8 col-md-8 col-md-push-4 animated">
                <h4>PHP开发工程师</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis. Nam sem lacus, vulputate ut turpis vel, viverra porta ante.</p>
                <hr class="hidden-xs">
            </div>

            <div class="col-sm-4 col-md-4 col-md-pull-8 animated">
                <div class="icon-list">
                    <div class="icon-list-icon">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div class="icon-list-content">
                        <div class="icon-list-title">北京微米创想科技有限公司</div>
                        <div class="icon-list-info">
                            <span>2017.08 - 2018.05</span>
                        </div>
                    </div>
                </div>
                <hr class="visible-xs">
            </div>

            <div class="col-sm-8 col-md-8 col-md-push-4 animated">
                <h4>PHP开发工程师</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis. Nam sem lacus, vulputate ut turpis vel, viverra porta ante.</p>
                <hr class="hidden-xs">
            </div>

            <div class="col-sm-4 col-md-4 col-md-pull-8 animated">
                <div class="icon-list">
                    <div class="icon-list-icon">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div class="icon-list-content">
                        <div class="icon-list-title">北京时代华宇科技有限公司</div>
                        <div class="icon-list-info">
                            <span>2018.08 - 2018.12</span>
                        </div>
                    </div>
                </div>
                <hr class="visible-xs">
            </div>

        </div>
        <!-- .row -->

        <!-- download cv button -->
        <div class="row">
          <div class="col-md-12 animated text-center">
            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-cloud-download"></i> 下载简历</a>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- containers -->
    </div>
    <!-- End of portfolio -->

    <!-- Start testimonial -->
    <div id="testimonial" class="content">
      <div class="row">
        <div class="col-md-12">

          <!-- Carousel Slides / Quotes -->
          <div class="carousel-inner animated">

            <!-- Quote 1 -->
            <div class="item">
              <blockquote>
                <div class="row">
                  <div class="col-sm-3 text-center">
                    <img class="img-circle" src="img/mike.png" alt="Mike Avatar">
                  </div>
                  <div class="col-sm-9">
                    <p class="text-item">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                    <small>Mike Tyson</small>
                  </div>
                </div>
              </blockquote>
            </div>

            <!-- Quote 2 -->
            <div class="item">
              <blockquote>
                <div class="row">
                  <div class="col-sm-3 text-center">
                    <img class="img-circle" src="img/adam.jpg" alt="Adam Avatar">
                  </div>
                  <div class="col-sm-9">
                    <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
                    <small>Adam Sandler</small>
                  </div>
                </div>
              </blockquote>
            </div>

            <!-- Quote 3 -->
            <div class="item">
              <blockquote>
                <div class="row">
                  <div class="col-sm-3 text-center">
                    <img class="img-circle" src="img/ben.png" alt="Ben Avatar">
                  </div>
                  <div class="col-sm-9">
                    <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan.</p>
                    <small>Ben Beatles</small>
                  </div>
                </div>
              </blockquote>
            </div>

          </div>
          <!-- End Carousel Slides -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- row -->
    </div>
    <!-- End of testimonial -->

    <!-- Start of contact -->
    <div id="contact" class="content">
      <div class="containers">
        <div class="row space">

          <!-- title -->
          <div class="col-md-12 headline">
            <h2 style="color: #fff;">期待你的邀请</h2>
            <hr>
            <p>I'm available for freelance opportunities.</p>
          </div>
          <!-- End title -->

          <!-- Start google maps / change your address in data-center-->
          <div class="col-md-12 animated">
            <div class="gmap" id="map" data-center="121 S Pinckney St" data-zoom="15">
              <address>
                844540467@qq.com
              </address>
                <div id="wechat">
                    <div class="col-sm-9 col-md-12 col-lg-12 comments" id="new_message">
                        <div class="comments__media"  v-for="message in messages">
                            <div class="media-middle">
                                <i class="media-object" :style="`background-image: url(${message.header})`"></i>
                                {{--<i class="media-object" style="background-image: url('http://gbb.resourse.com/img/content/comment.png')"></i>--}}
                                <div class="comm_info">
                                    <h4 class="media-heading">@{{wechat_name?wechat_name:'访客'}}</h4>
                                    <span class="time">@{{message.created_at}}</span>
                                </div>
                            </div>
                            <p class="media-body">@{{ message.message }}</p>
                        </div>
                    </div>
                    <div class="comments__form">
                        <form action="#" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="wechat_name" placeholder="聊天昵称">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" @keyup.enter="sendMessage()" v-model="template_message" required="required"  placeholder="聊天内容">
                            </div>
                            <button type="button" @click="sendMessage()" class="btn btn-comment">发送</button>
                        </form>
                    </div>
                </div>

            </div>
          </div>
          <!-- End google maps -->
        </div>
        <!-- row -->

        <!-- Email me button -->
        {{--<div class="row">--}}
          {{--<div class="col-md-12 animated text-center">--}}
            {{--<a href="mailto:youremail@gmail.com" class="btn btn-primary btn-lg"><i class="fa fa-envelope"></i> EMAIL ME</a>--}}
          {{--</div>--}}
        {{--</div>--}}
        <!-- row -->
      </div>
      <!-- containers -->
    </div>
    <!-- End of contact -->

    <!-- Start footer -->
    <div id="footer" class="content">
      <div class="containers">
        <div class="row">

          <div class="col-md-12 text-center">
            <a href="{{route('/')}}" class="footer-logo"><span>{{config('app.name')}}</span></a>
            <ul class="social">
              <li class="hvr-grow"><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="hvr-grow"><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li class="hvr-grow"><a href="#"><i class="fa fa-github"></i></a></li>
            </ul>
            <p>Copyright &copy; 2017.Company name All rights <a href="{{config('app.url')}}" target="_blank" title="{{config('app.name')}}">{{config('app.name')}}</a> - Collect from <a href="{{config('app.url')}}" title="SweetSunnyFlower" target="_blank">{{config('app.name')}}</a></p>
          </div>

        </div>
        <!-- row -->
      </div>
      <!-- containers -->
    </div>
    <!-- End of footer -->

  </div>
  <!-- end cross portfolio -->

  <!-- Fullscreen Modal -->
  <div class="modal fade fullscreen" id="projectModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <!-- modal button close -->
					<a href="#" class="close" data-dismiss="modal"><i class="fa fa-times"></i></a>
				</div>

        <div class="modal-body">
          <div class="row">

            <div class="col-md-8 col-md-offset-2">

              <!-- image 1 -->
              <figure class="cross-image">
                <img src="img/project_1.jpg" alt="Project 5" />
                <figcaption>
                  <h2>Project 5</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis.</p>
                  <a href="#">View More</a>
                </figcaption>
              </figure>

              <!-- image 2 -->
              <figure class="cross-image">
                <img src="img/project_2.jpg" alt="Project 6" />
                <figcaption>
                  <h2>Project 6</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis.</p>
                  <a href="#">View More</a>
                </figcaption>
              </figure>

              <!-- image 3 -->
              <figure class="cross-image">
                <img src="img/project_3.jpg" alt="Project 7" />
                <figcaption>
                  <h2>Project 7</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis.</p>
                  <a href="#">View More</a>
                </figcaption>
              </figure>

              <!-- image 4 -->
              <figure class="cross-image">
                <img src="img/project_4.jpg" alt="Project 8" />
                <figcaption>
                  <h2>Project 8</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis.</p>
                  <a href="#">View More</a>
                </figcaption>
              </figure>

              <!-- image 5 -->
              <figure class="cross-image">
                <img src="img/project_1.jpg" alt="Project 9" />
                <figcaption>
                  <h2>Project 9</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis.</p>
                  <a href="#">View More</a>
                </figcaption>
              </figure>

              <!-- image 6 -->
              <figure class="cross-image">
                <img src="img/project_2.jpg" alt="Project 10" />
                <figcaption>
                  <h2>Project 10</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis.</p>
                  <a href="#">View More</a>
                </figcaption>
              </figure>

            </div>
            <!-- col-md-8 -->
          </div>
          <!-- row -->
        </div>
        <!-- modal body -->
      </div>
      <!-- modal-content -->
    </div>
    <!-- modal-dialog -->
  </div>
  <!-- fullscreen -->

  <!--Script -->

  <!-- Jquery v1.12.0 -->
  <script src="js/jquery.min.js"></script>
  <!--Bootstrap Js-->
  <script src="js/bootstrap.min.js"></script>
  <!--Classie js -->
  <script src="js/classie.min.js"></script>
  <!--Typed js -->
  <script src="js/typed.min.js"></script>
  <!-- OwlCarousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Google maps -->
  <!---<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;language=en"></script>--->
  <!-- Mobile map for google -->
  <script src="js/jquery.mobilegmap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- ScrollReveal -->
  <script src="js/scrollreveal.min.js"></script>
  <!-- CountTo -->
  <script src="js/jquery.countTo.min.js"></script>
  <!-- SmoothScroll -->
  <script src="js/smooth-scroll.min.js"></script>
  <!-- Custom js -->
  <script src="js/main.js"></script>

  <!-- vue-->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <!-- sweetalter -->
  <script src="https://cdn.bootcss.com/sweetalert/2.1.2/sweetalert.min.js"></script>
  <!-- end script -->
</body>

</html>
<script>
    $(function(){
        var app = new Vue({
            el: '#wechat',
            data: {
                wechat_name: '访客',
                messages:[

                ],
                template_message:''
            },
            methods:{
                sendMessage(){
                    if(!this.template_message){
                        swal( "Oops" ,  "请输入内容!" ,  "error" );
                        return;
                    }
                    this.messages.push({
                        "header":"/img/comment/comment.png",
                        "name":this.wechat_name?this.wechat_name:"访客",
                        "message":this.template_message,
                        "created_at":new Date()
                    });
                    this.template_message = '';
                    this.scrollToBottom();
                },
                scrollToBottom: function () {
                    this.$nextTick(() => {
                        var container = this.$el.querySelector("#new_message");
                        container.scrollTop = container.scrollHeight;
                    });
                }
            },
            mounted(){
                vm = this;
                ws = new WebSocket("ws://"+document.domain+":2346");
                ws.onopen = function() {
                    console.log("连接成功");
                };
                ws.onmessage = function(e) {
                    var received_info = JSON.parse(e.data);
                    console.log(e);
                    console.log(JSON.parse(e.data));
                    if(received_info.type == 'login'){
                        localStorage.setItem('client_id',received_info.info.client_id);
                        console.log(received_info.info.client_id);
                    }else{
                        console.log(vm.messages);
                        console.log(received_info);
                    }
                };
            }
        });


    });

    // var string = ` <div class="comments__media">
    //                     <div class="media-middle">
    //                         <i class="media-object" style="background-image: url('http://gbb.resourse.com/img/content/comment.png')"></i>
    //                         <div class="comm_info">
    //                             <h4 class="media-heading">SweetSunnyFlower</h4>
    //                             <span class="time">today, 12:30</span>
    //                         </div>
    //                     </div>
    //                     <p class="media-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    //                 </div>`;
    //
    // $(".comments").append(string);



</script>

