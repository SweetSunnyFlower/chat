<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--========== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ==========-->
<title>Chivalric</title>

<!--==========Dependency============-->
<link rel="stylesheet" href="/blog/css/bootstrap.min.css">
<link rel="stylesheet" href="/blog/css/font-awesome.min.css">
<link rel="stylesheet" href="/blog/vendors/owl-carousel/assets/owl.carousel.css">
<link rel="stylesheet" href="/blog/vendors/magnific-popup/magnific-popup.css">
<link rel="stylesheet" href="/blog/vendors/flexslider/flexslider.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:500">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:600,700italic">
<link href='https://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,800,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700italic,700,900,900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>

<!--==========Theme Styles==========-->
<link href="/blog/css/style.css" rel="stylesheet">
<link href="/blog/css/theme/green.css" rel="stylesheet">

<!--========== HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries ==========-->
<!--========== WARNING: Respond.js doesn't work if you view the page via file:// ==========-->
<!--==========[if lt IE 9]>
    <script src="/blog/js/html5shiv.min.js"></script>
    <script src="/blog/js/respond.min.js"></script>
<![endif]==========-->
</head>
<body class="home">

<header class="row transparent white" data-spy="affix" data-offset-top="300" id="header">
    <div class="container">
        <div class="row top-header">
            <div class="col-sm-4 search-form-col">
                <form action="#" method="get" class="search-form">
                    <div class="input-group">
                        <span class="input-group-addon"><img src="/blog/images/search-icon-dark.png" alt=""></span>
                        <input type="search" class="form-control" placeholder="search">
                    </div>
                </form>
            </div>
            <div class="col-sm-4 logo-col text-center">
                <a href="{{route('/')}}">
                    <h4 style="color: #000;">SweetSunnyFlower</h4>
                </a>
            </div>
            <div class="col-sm-4 menu-trigger-col">
                <button class="menu-trigger black pull-right">
                    <span class="active-page">Blog Details</span>
                    <img src="/blog/images/menu-align-dark.png" alt="" class="icon-burger">
                    <img src="/blog/images/menu-close-dark.png" alt="" class="icon-cross">
                </button>
            </div>
        </div>        
    </div>
    <div class="row menu-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 menu-col">
                    <div class="row">
                        <ul class="nav column-menu white-bg">
                            <li class="active dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Home Option 1</a></li>
                                    <li><a href="index2.html">Home Option 2</a></li>
                                    <li><a href="index3.html">Home Option 3</a></li>
                                    <li><a href="index4.html">Home Option 4</a></li>
                                    <li><a href="index5.html">Home Option 5</a></li>
                                    <li><a href="index6.html">Home Option 6</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="single.html">Blog Single 1</a></li>
                            <li><a href="single2.html">Blog Single 2</a></li>
                        </ul>
                        <ul class="nav column-menu white-bg">
                            <li><a href="single3.html">Blog Single 3</a></li>
                            
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 subscribe-col">
                    <h5 class="widget-title">subscribe to our newsletter.</h5>
                    <form action="#" method="post" class="form-inline subscribe-form">                    
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm"><span>send</span></button>
                    </form>
                    <ul class="nav social-nav white">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="row content-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-8 single-post-contents">
                <article class="single-post-content row m0 post">
                    <header class="row">                        
                        <h5 class="post-meta">
                            <a href="#" class="date">{{$article->created_at->diffForHumans()}}</a>
                            <span class="post-author"><i>by</i><a href="#">{{$article->user->name}}</a></span>
                        </h5>
                        <h2 class="post-title">{{$article->title}}</h2>
                        <div class="row">
                            <h5 class="taxonomy pull-left"><i>type of</i> <a href="#">{{$article->type}}</a></h5>
                            <div class="response-count pull-right"><img src="/blog/images/comment-icon-gray.png" alt="">{{$article->comments}}</div>
                        </div>
                    </header>
                    <div class="featured-content row m0">
                        <a href="#"><img src="{{$article->cover_big}}" alt=""></a>
                    </div>
                    <div class="post-content row">
                        {{$article->contents}}
                        <br>
                        <!-- Place somewhere in the <body> of your page -->
                        <div class="thumbCarousel row m0">
                            <div id="slider" class="flexslider">
                                <ul class="slides">
                                    @foreach($recommends as $recommend)
                                        <li><a href="{{route('article.show',['id'=>$recommend->id])}}"><img src="{{$recommend->cover_big}}" alt=""></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="carousel" class="flexslider">
                                <ul class="slides">
                                    @foreach($recommends as $recommend)
                                        <li><img src="{{$recommend->cover_big}}" alt=""></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="row m0 tags">
                        @foreach($article->labelsInfo as $label)
                        <a href="#" class="tag">{{$label->label_title}}</a>
                        @endforeach
                    </div>
                    
                    <ul class="pager">
                        <li>
                            <h4>Previous Articles</h4>
                            <h2 class="post-title"><a href="single2.html">Nature, in the broadest sense, is the natural...</a></h2>
                            <h5 class="taxonomy pull-left"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>
                        </li>
                        <li>
                            <h4>Next Articles</h4>
                            <h2 class="post-title"><a href="single2.html">Nature, in the broadest sense, is the natural...</a></h2>
                            <h5 class="taxonomy pull-left"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>
                        </li>
                    </ul>
                    
                    <div class="row m0 comments">
                        <h5 class="response-count">5 comments<a href="#comment-form" class="btn btn-primary pull-right"><span>add comment</span></a></h5>
                        <!--Comments-->
                        <div class="media comment">
                            <div class="media-left">
                                <a href="#"><img src="/blog/images/posts/c1.jpg" alt="" class="img-circle"></a>
                            </div>
                            <div class="media-body">
                                <h4><a href="#">Mark Sanders</a></h4>
                                <h5><a href="#" class="date">feb 17, 2016 at 3:30pm</a> | <a href="#" class="reply-link">reply</a></h5>
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                
                                <!--Comments-->
                                <div class="media comment reply">
                                    <div class="media-left">
                                        <a href="#"><img src="/blog/images/posts/c2.jpg" alt="" class="img-circle"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4><a href="#">Mark Sanders</a></h4>
                                        <h5><a href="#" class="date">feb 17, 2016 at 3:30pm</a> | <a href="#" class="reply-link">reply</a></h5>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                        <!--Comments-->
                                        <div class="media comment reply">
                                            <div class="media-left">
                                                <a href="#"><img src="/blog/images/posts/c1.jpg" alt="" class="img-circle"></a>
                                            </div>
                                            <div class="media-body">
                                                <h4><a href="#">Mark Sanders</a></h4>
                                                <h5><a href="#" class="date">feb 17, 2016 at 3:30pm</a> | <a href="#" class="reply-link">reply</a></h5>
                                                <p>Remaining essentially unchanged.</p>
                                                <!--Comments-->
                                                <div class="media comment reply">
                                                    <div class="media-left">
                                                        <a href="#"><img src="/blog/images/posts/c2.jpg" alt="" class="img-circle"></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4><a href="#">Mark Sanders</a></h4>
                                                        <h5><a href="#" class="date">feb 17, 2016 at 3:30pm</a> | <a href="#" class="reply-link">reply</a></h5>
                                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                
                        <!--Comments-->
                        <div class="media comment">
                            <div class="media-left">
                                <a href="#"><img src="/blog/images/posts/c1.jpg" alt="" class="img-circle"></a>
                            </div>
                            <div class="media-body">
                                <h4><a href="#">Mark Sanders</a></h4>
                                <h5><a href="#" class="date">feb 17, 2016 at 3:30pm</a> | <a href="#" class="reply-link">reply</a></h5>
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <form action="#" method="post" class="comment-form row" id="comment-form">
                        <h5 class="form-title">leave a reply</h5>
                        <div class="form-group col-sm-6">
                            <label for="name">full name*</label>
                            <input type="text" id="name" class="form-control" placeholder="Your name" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email">full name*</label>
                            <input type="email" id="email" class="form-control" placeholder="Your email address here" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="website">website</label>
                            <input type="url" id="website" class="form-control" placeholder="Your website url" >
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="subject">subject</label>
                            <input type="text" id="subject" class="form-control" placeholder="Write subject here" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="message">message</label>
                            <textarea name="message" id="message" class="form-control" placeholder="Write message here"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn-primary"><span>send</span></button>
                            <h5 class="pull-right">*required fields</h5>
                        </div>
                    </form>
                </article>
            </div>
            <div class="col-md-4 sidebar">               
                <!--Author Widget-->
                <aside class="row m0 widget-author widget">
                    <div class="widget-author-inner row">
                        <div class="author-avatar row"><a href="#"><img src="/blog/images/author.png" alt="" class="img-circle"></a></div>
                        <a href="#"><h2 class="author-name">Mark Sanders</h2></a>
                        <h5 class="author-title">small title</h5>
                        <p>The word nature is derived from the Latin word natura, or "essential qualities, innate disposition", and in ancient times, literally meant "birth".</p>
                        <a href="#" class="know-more">know more</a>
                    </div>
                    <ul class="nav social-nav">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </aside>
                <!--Twitter Widget-->
                <aside class="row m0 widget widget-twitter">
                    <div class="widget-twitter-inner">
                        <h5 class="widget-meta"><i class="fa fa-twitter"></i>Twitter feed <a href="http://twitter.com/chivalricblog">@chivalricblog</a></h5>
                        <div class="row tweet-texts">
                            <p>Check out new post on my blog <a href="http://twitter.com/#natureshot">#natureshot</a> <a href="http://bit.ly/blog">http://bit.ly/blog</a></p>
                        </div>
                        <div class="row timepast">1 day ago</div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<!--Footer-->
<footer class="row" id="footer">
    <div class="container">
        <div class="row top-footer">
            <div class="widget col-sm-3 widget-about">
                <div class="row m0"><a href="index.html"><img src="/blog/images/logo-black-green.png" alt=""></a></div>
            </div>
            <div class="widget col-sm-5 widget-menu">
                <div class="row">
                    <ul class="nav column-menu white-bg">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="single.html">Blog Single 1</a></li>
                        <li><a href="single2.html">Blog Single 2</a></li>
                    </ul>
                    <ul class="nav column-menu white-bg">
                        <li><a href="single3.html">Blog Single 3</a></li>
                        
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="widget col-sm-4 widget-subscribe">
                <h5 class="widget-title">subscribe to our newsletter.</h5>
                <form action="#" method="post" class="form-inline subscribe-form">                    
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm"><span>send</span></button>
                </form>
            </div>
        </div>
        <h5 class="copyright">Copyright &copy; 2017.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></h5>
    </div>
</footer>

<!--========== jQuery (necessary for Bootstrap's JavaScript plugins) ==========-->
<script src="/blog/js/jquery-2.2.0.min.js"></script>
<script src="/blog/js/bootstrap.min.js"></script>
<script src="/blog/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="/blog/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/blog/vendors/imagesLoaded/imagesloaded.pkgd.min.js"></script>
<script src="/blog/vendors/isotope/isotope.pkgd.min.js"></script>
<script src="/blog/vendors/flexslider/jquery.flexslider-min.js"></script>
<script src="/blog/js/theme.js"></script>
</body>
</html>
