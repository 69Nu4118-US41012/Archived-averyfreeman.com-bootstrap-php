<?php
    $page_title = "Web Development";
    $section = "websites";

    include ('includes/header.php');
?>
<div class="container">
    <div class="jumbotron">
        <img class="img-circle img-responsive center-block" src="images/bootstrap-devices.png" />
        <p>
            <h2 class="text-center text-uppercase">
                Imagine One Site for All Devices
            </h2>
        </p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading">Avery Freeman - Web Developer</div>
                <div class="panel-body">
                    Hi, my name's Avery and I'm a web developer in Olympia, WA
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Responsive Web Design</div>
                <div class="panel-body">
                    I create and design web pages using that automatically fit any screen using Bootstrap
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-info">
                <div class="panel-heading">What is Bootstrap?</div>
                <div class="panel-body">
                    It's a framework that encorporates the power of CSS3, HTML5, and JQuery languages
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-3">
            <div class="panel panel-success">
                <div class="panel-heading">How can I learn more?</div>
                <div class="panel-body">
                    Just take a look at the elements in this web page to see what what it's capable of...
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-warning">
                <div class="panel-heading">Try it out for yourself</div>
                <div class="panel-body">
                    If you're in a browser on a computer, try resizing the window to see how the page responds to different sizes
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-danger">
                <div class="panel-heading">Use a different device</div>
                <div class="panel-body">
                    If you're on a phone or tablet, trying opening the page on another sized device and see how it looks different
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">If you want to see another example of my work, please see <a href="http://averyfreeman.com/pingendo" target="new">This Bootstrap framework-designed example</a></div><br><br><br>
</div>

<nav class="navbar navbar-default navbar-fixed-bottom hidden-print" role="navigation">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <p class="text-center">
                <ul class="nav navbar-nav">
                    <li class="active visible-lg">Your Screen Size is: Large (Greater than 1200px wide)</li>
                    <li class="active visible-md">Your Screen Size is: Medium (Between 992px and 1199px wide)</li>
                    <li class="active visible-sm">Your Screen Size is: Small (Between 768px and 991px wide)</li>
                    <li class="active visible-xs">Your Screen Size is: X-Small</li>
                </ul>
            </p>
        </div>
</nav>
<?php include "includes/footer.php" ?>
