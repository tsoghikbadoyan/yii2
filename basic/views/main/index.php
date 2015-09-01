<?php use yii\helpers\Html; ?>

<?php echo Html::a('Create New Post', array('main/create'), array('class' => 'btn btn-primary pull-right')); ?>
<div class="clearfix"></div>
<hr />
<table class="table table-striped table-hover">
    <tr>
        <?php if(Yii::$app->session->hasFlash('PostDeletedError')): ?>
            <div class="alert alert-error">
                There was an error deleting your post!
            </div>
        <?php endif; ?>

        <?php if(Yii::$app->session->hasFlash('PostDeleted')): ?>
            <div class="alert alert-success">
                Your post has successfully been deleted!
            </div>
        <?php endif; ?>
        <td>#</td>
        <td>Title</td>
        <td>Created</td>
        <td>Updated</td>
        <td>Options</td>
    </tr>
    <?php foreach ($data as $post): ?>
        <tr>
            <td>
                <?php echo Html::a($post->id, array('main/read', 'id'=>$post->id)); ?>
            </td>
            <td><?php echo Html::a($post->title, array('main/read', 'id'=>$post->id)); ?></td>
            <td><?php echo $post->created; ?></td>
            <td><?php echo $post->updated; ?></td>
            <td>
                <?php echo Html::a(NULL, array('main/update', 'id'=>$post->id), array('class'=>'icon icon-edit')); ?>
                <?php echo Html::a(NULL, array('main/delete', 'id'=>$post->id), array('class'=>'icon icon-trash')); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<!--    <header class="top-header">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-3 col-xs-5 col-sm-4 header-logo">-->
<!--                    <br>-->
<!--                    <a href="index.html"><h1 class="logo">Avada <span class="logo-head">Plus</span></h1></a>-->
<!--                </div>-->
<!---->
<!--                <div class="col-md-8 col-md-offset-1 col-xs-7">-->
<!--                    <nav class="navbar navbar-default">-->
<!--                        <div class="container-fluid nav-bar">-->
<!--                            <!-- Brand and toggle get grouped for better mobile display -->-->
<!--                            <div class="navbar-header">-->
<!--                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"-->
<!--                                        data-target="#bs-example-navbar-collapse-1">-->
<!--                                    <span class="sr-only">Toggle navigation</span>-->
<!--                                    <span class="icon-bar"></span>-->
<!--                                    <span class="icon-bar"></span>-->
<!--                                    <span class="icon-bar"></span>-->
<!--                                </button>-->
<!--                            </div>-->
<!---->
<!--                            <!-- Collect the nav links, forms, and other content for toggling -->-->
<!--                            <div class="collapse navbar-collapse navbar-def" id="bs-example-navbar-collapse-1">-->
<!---->
<!--                                <ul class="nav navbar-nav navbar-right">-->
<!--                                    <li>-->
<!--                                        <a href="#wrapper"><i class="fa fa-home"></i> Home</a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="#about"><i class="fa fa-bookmark"></i> About</a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="#portfolio"><i class="fa fa-bookmark"></i> Portfolio</a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="#services"><i class="fa fa-tasks"></i> Service</a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="#blog"><i class="fa fa-wordpress"></i> Blog</a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="#testimonials"><i class="fa fa-thumbs-up"></i> Testimonial</a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <!-- /navbar-collapse -->-->
<!--                        </div>-->
<!--                        <!-- / .container-fluid -->-->
<!--                    </nav>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </header>-->
<!--    <div id="wrapper">-->
<!--        <div id="header" class="content-block">-->
<!--            </section>-->
<!--            <section class="center">-->
<!--                <div class="slogan">-->
<!--                    SLIM &amp; STYLISH-->
<!--                </div>-->
<!--                <div class="secondary-slogan">-->
<!--                    The Avada plus Theme By ThemeWagon.-->
<!--                </div>-->
<!--            </section>-->
<!--        </div>-->
<!--        <!-- header -->-->
<!---->
<!--        <!-- About us -->-->
<!--        <div id="about" class="about-us">-->
<!--            <div class="container about-sec">-->
<!--                <header class="block-heading cleafix">-->
<!--                    <div class="title-page">-->
<!--                        <p class="main-header">About us</p>-->
<!---->
<!--                        <p class="sub-header">Make sure you know about us</p>-->
<!--                    </div>-->
<!--                </header>-->
<!--                <div class="divide50"></div>-->
<!--                <div class="row">-->
<!--                    <div class="col-md-4 text-center">-->
<!--                        <div class="aboutus-item">-->
<!--                            <i class="aboutus-icon fa fa-plane"></i>-->
<!--                            <h4 class="aboutus-title">Great Transport</h4>-->
<!---->
<!--                            <p class="aboutus-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni-->
<!--                                voluptatum et, alias vero, reprehenderit doloremque neque dignissimos voluptas.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-4 text-center">-->
<!--                        <div class="aboutus-item">-->
<!--                            <i class="aboutus-icon fa fa-usd"></i>-->
<!--                            <h4 class="aboutus-title">Not Expensive</h4>-->
<!---->
<!--                            <p class="aboutus-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni-->
<!--                                voluptatum et, alias vero, reprehenderit doloremque neque dignissimos voluptas.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-4 text-center">-->
<!--                        <div class="aboutus-item">-->
<!--                            <i class="aboutus-icon fa fa-cutlery"></i>-->
<!--                            <h4 class="aboutus-title">Delicious Food</h4>-->
<!---->
<!--                            <p class="aboutus-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni-->
<!--                                voluptatum et, alias vero, reprehenderit doloremque neque dignissimos voluptas.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <!-- /About us -->-->
<!---->
<!--        <div class="content-block" id="portfolio">-->
<!--            <div class="container portfolio-sec">-->
<!--                <header class="block-heading cleafix">-->
<!--                    <a href="#" class="btn btn-o btn-lg pull-right">View All</a>-->
<!---->
<!--                    <div class="title-page">-->
<!--                        <p class="main-header">Our Latest Works </p>-->
<!---->
<!--                        <p class="sub-header">Take a look at some of our recent products</p>-->
<!--                    </div>-->
<!--                </header>-->
<!--                <section class="block-body">-->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-4">-->
<!--                            <a href="#" class="recent-work"-->
<!--                               style="background-image:url(learn/images/rain_1-320x240.jpg)">-->
<!--                                <span class="btn btn-o-white">Lorem Rocks</span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="col-sm-4">-->
<!--                            <a href="#" class="recent-work"-->
<!--                               style="background-image:url(learn/images/min_icons_thumb1-320x240.jpg)">-->
<!--                                <span class="btn btn-o-white">Lorem Rocks</span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="col-sm-4">-->
<!--                            <a href="#" class="recent-work"-->
<!--                               style="background-image:url(learn/images/flat_icons_thumb.jpg)">-->
<!--                                <span class="btn btn-o-white">Lorem Rocks</span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-4">-->
<!--                            <a href="#" class="recent-work" style="background-image:url( learn/images/wood-320x240.jpg)">-->
<!--                            <span class="btn btn-o-white">Lorem Rocks</span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="col-sm-4">-->
<!--                            <a href="#" class="recent-work"-->
<!--                               style="background-image:url(learn/images/bike-320x240.jpg)">-->
<!--                                <span class="btn btn-o-white">Lorem Rocks</span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="col-sm-4">-->
<!--                            <a href="#" class="recent-work"-->
<!--                               style="background-image:url(learn/images/six_1-320x240.jpg)">-->
<!--                                <span class="btn btn-o-white">Lorem Rocks</span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </section>-->
<!--            </div>-->
<!--        </div>-->
<!--        <!-- #portfolio -->-->
<!---->
<!--        <div class="content-block parallax" id="services">-->
<!--            <div class="container services-sec">-->
<!--                <div class="title-page">-->
<!--                    <p class="main-header">Our Services </p>-->
<!---->
<!--                    <p class="sub-header">A little about what we do</p>-->
<!--                </div>-->
<!--                <section class="block-body">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="service">-->
<!--                                <div class="bar">-->
<!--                                    <i class="fa fa-send-o"></i>-->
<!--                                </div>-->
<!--                                <h2 class="service-head">Illustration</h2>-->
<!---->
<!--                                <p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec,-->
<!--                                    sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in-->
<!--                                    lorem.</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="service">-->
<!--                                <div class="bar">-->
<!--                                    <i class="fa fa-heart-o"></i>-->
<!--                                </div>-->
<!--                                <h2 class="service-head">3D Modeling</h2>-->
<!---->
<!--                                <p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec,-->
<!--                                    sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in-->
<!--                                    lorem.</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="service">-->
<!--                                <div class="bar">-->
<!--                                    <i class="fa fa-camera-retro"></i>-->
<!--                                </div>-->
<!--                                <h2 class="service-head">Photography</h2>-->
<!---->
<!--                                <p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec,-->
<!--                                    sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in-->
<!--                                    lorem.</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </section>-->
<!--            </div>-->
<!--        </div>-->
<!--        <!-- #services -->-->
<!---->
<!---->
<!--        <div class="content-block" id="blog">-->
<!--            <div class="container blog-sec">-->
<!--                <header class="block-heading cleafix">-->
<!--                    <a href="#" class="btn btn-o btn-lg pull-right">View All</a>-->
<!---->
<!--                    <div class="title-page">-->
<!--                        <p class="main-header">From the Blog</p>-->
<!---->
<!--                        <p class="sub-header">Keep up with the latest happenings.</p>-->
<!--                    </div>-->
<!--                </header>-->
<!--                <section class="block-body">-->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-4 blog-post">-->
<!--                            <img src="../learn/images/bike_water1-1000x600.jpg">-->
<!--                            <a href="#"><h2>Design Your Mind</h2></a>-->
<!---->
<!--                            <div class="date">3 Nov, 2014</div>-->
<!--                            <p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec,-->
<!--                                sodales-->
<!--                                nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>-->
<!--                            <a href="">Read More</a>-->
<!--                        </div>-->
<!--                        <div class="col-sm-4 blog-post">-->
<!--                            <img src="../learn/images/mac_glasses1-1000x600.jpg">-->
<!--                            <a href="#"><h2>Winter Is Comming</h2></a>-->
<!---->
<!--                            <div class="date">3 Nov, 2014</div>-->
<!--                            <p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec,-->
<!--                                sodales-->
<!--                                nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>-->
<!--                            <a href="">Read More</a>-->
<!--                        </div>-->
<!--                        <div class="col-sm-4 blog-post">-->
<!--                            <img src="../learn/images/road-1000x600.jpg">-->
<!--                            <a href="#"><h2>The Illustration</h2></a>-->
<!---->
<!--                            <div class="date">3 Nov, 2014</div>-->
<!--                            <p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec,-->
<!--                                sodales-->
<!--                                nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>-->
<!--                            <a href="">Read More</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </section>-->
<!--            </div>-->
<!--        </div>-->
<!--        <!-- #blog -->-->
<!---->
<!---->
<!--        <div class="content-block parallax" id="parallax">-->
<!--            <div class="container">-->
<!--                <h3 class="call-action pull-left">In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis.</h3>-->
<!--                <a href="#" class="pull-right btn btn-o-white btn-lg">Get a free quote</a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <!-- #parallax -->-->
<!---->
<!--        <div class="content-block" id="testimonials">-->
<!--            <div class="container testimonial-sec">-->
<!---->
<!--                <header class="block-heading cleafix">-->
<!--                    <div class="title-page  pull-left">-->
<!--                        <p class="main-header">Testimonial</p>-->
<!---->
<!--                        <p class="sub-header">What our client says</p>-->
<!--                    </div>-->
<!--                </header>-->
<!---->
<!--                <section class="block-body">-->
<!--                    <div class="row">-->
<!--                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">-->
<!--                            <!-- Indicators -->-->
<!--                            <ol class="carousel-indicators">-->
<!--                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
<!--                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
<!--                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
<!--                            </ol>-->
<!---->
<!---->
<!--                            <!-- Wrapper for slides -->-->
<!--                            <div class="carousel-inner" role="listbox">-->
<!--                                <div class="item active">-->
<!--                                    <div class="img-center">-->
<!--                                        <img class="img-circle circular-img" src="../learn/images/01_200x200.png">-->
<!--                                    </div>-->
<!--                                    <h3>Create a website that you are gonna be proud of. Be it Business, Portfolio,-->
<!--                                        Photography, eCommerce & much more.-->
<!--                                    </h3>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="img-center">-->
<!--                                        <img class="img-circle circular-img" src="../learn/images/02_200x200.png">-->
<!--                                    </div>-->
<!--                                    <h3>Create a website that you are gonna be proud of. Be it Business, Portfolio,-->
<!--                                        Photography, eCommerce & much more.-->
<!--                                    </h3>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="img-center">-->
<!--                                        <img class="img-circle circular-img" src="../learn/images/03_200x200.png">-->
<!--                                    </div>-->
<!--                                    <h3>Create a website that you are gonna be proud of. Be it Business, Portfolio,-->
<!--                                        Photography, eCommerce & much more.-->
<!--                                    </h3>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </section>-->
<!--            </div>-->
<!--        </div>-->
<!--        <!-- /#testimonials -->-->
<!---->
