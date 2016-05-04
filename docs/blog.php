<!DOCTYPE html>
<html lang="en">
    
    <head>
        
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta name="description" content="">
                        <meta name="author" content="">
                            
                            <title>Mike Allan - Blog</title>
                            
                            <!-- Bootstrap Core CSS -->
                            <link href="../css/bootstrap.min.css" rel="stylesheet">
                                
                                <!-- Custom CSS -->
                                <link href="../css/landing-page.css" rel="stylesheet">
                                    
                                    <!-- Custom Fonts -->
                                    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                                        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="../text/css">
                                            
                                            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                                            <!--[if lt IE 9]>
                                             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                                             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                                             <![endif]-->
                                            
    </head>
    
    <body>
        
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
            <div class="container topnav">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand topnav" href="../index.html">Home</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="about.html">About Me</a>
                        </li>
                        <li>
                            <a href="resume.html">My Resume</a>
                        </li>
                        <li>
                            <a href="blog.php">Blog</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

<div class="container">
    
    <div class="row">
        <div class="col-lg-12">
            <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h1 class="section-heading">My Thoughts</h2>
                <hr class="intro-divider">
        </div>

<!---------- Third Post ------------>


    <div class="col-blog-1">
        <div class="clearfix"></div>
        <h3 style="margin-left: 15%; margin-right: 15%">Pequeño Viaje</h3>
        <h5 style="margin-left: 15%; margin-right: 15%"><i>June 22nd, 2015</i></h5>
        <br>

        <p>THIRD BLOG POST HERE</p>

        <hr class="intro-divider">
<?php
    
    $name = $_POST["name3"];
    $text = $_POST["mes3"];
    $post = $_POST["post3"];
    
    
    if($post){
        
        #WRITE DOWN COMMENTS#
        
        $write = fopen("com3.txt", "a+");
        fwrite($write, "<u><i> $name </i></u><br>$text<br>");
        fclose($write);
        
        #DISPLAY COMMENTS#
        
        $read = fopen("com3.txt", "r+t");
        echo "<h4><u><b>All comments:</b></u></h4>";
        
        while(!feof($read)){
            echo fread($read, 1024);
            
        }
        fclose($read);
    }
    
    else{
        #DISPLAY COMMENTS#
        
        $read = fopen("com3.txt", "r+t");
        echo "<h4><u>All comments:</u></h4>";
        
        while(!feof($read)){
            echo fread($read, 1024);
        }
        fclose($read);
    }
    ?>

<hr class="intro-divider">

<form action="blog.php" method="post">

<label> Name: <br><input type="text" name="name2"><br>
<label> Message: <br><textarea cols="45" rows="5" name="mes2"></textarea></label><br>

<input type="submit" name="post2" value="Post">

</form>

<hr class="intro-divider">


    </div>


<!---------- Second Post ------------>


    <div class="col-blog-1">
        <div class="clearfix"></div>
        <h3 style="margin-left: 15%; margin-right: 15%">Pequeño Viaje</h3>
        <h5 style="margin-left: 15%; margin-right: 15%"><i>June 22nd, 2015</i></h5>
        <br>

        <p style="margin-left: 15%; margin-right: 15%">The past ten days have been wonderful, with a fair share of surprises.<br><br>

            Surprise #1:
                I went bungee jumping. If you know me well, you’ll know that I have a slight fear of heights. I always think people should go out of their comfort zones, so I went 405 ft straight up out of mine. What an experience that was. The next day, I left for Guayaquil, Ecuador to meet up with a friend from Canada. After two days in Guayaquil, I was planning on continuing my travels to Máncora, Peru.<br><br>

            Surprise #2:
                I was able to get through customs without a hiccup completely in Spanish! Even though I know I am able to have broken conversations with people it was great to actually do something with that knowledge. Every time I speak with anyone from a Spanish speaking country, the minute they find out I speak some Spanish they say “entonces ahora hablamos en español” and from then on our entire conversation is in Spanish.<br><br>

            Surprise #3:
                A friend I have had since I was 5 years old, Ben, messaged me the night before I was planning on leaving saying he was coming to Guayaquil the next day so I stayed and hung out with him for two days! We rented bikes and biked to Isla Santay, which was absolutely gorgeous. His birthday was his second day in Guayaquil, so I wanted to stay and celebrate his birthday with him.<br><br>

            Surprise #4:
                Bars/clubs in Guayaquil are all closed on Sundays, most are closed on Mondays, and the ones that are open on Monday all close at midnight. We walked into the only bar we could find with any people in it – little did we know it was a Karaoke bar. Certainly not how any of us expected his 20th birthday party to turn out.<br><br>

            Surprise #5:
                Ben was travelling with a friend of his, but after meeting up with me he changed his travel plans and came with me to Máncora! We stayed at Loki, a bit of a party hostel. In Máncora there is a girl from Newfoundland living there so the three of us hung out quite a bit and she showed us around town, setting us up with some surfing lessons.<br><br>

            Surprise #6:
                When I went surfing, I was able to stand up and ride the wave on my very first attempt. Surfing is so much fun – I could definitely see myself living in a surfing spot at point in my life. I was sore all over my body afterwards. My ribs hurt from lying on the board, my shoulders from paddling, but feet from rocks, and neck from looking up while paddling.<br><br>

            Surprise #7:
                On Friday, June 19th, I received an email from the Ivey School of Business with an offer for admission for the fall of 2015 to the HBA program! Starting September, I’ll be commencing the business portion of my dual degree.<br><br>

            Surprise #8:
                All of a sudden, I’ve been in South America for 7 weeks. I’m over halfway through my time here. I’m finished all of the intermediate Spanish courses, so I just have advanced remaining and it’s only the subjunctive verbs (which are supposed to be hard, but the book is quite small). After I finish all of the lessons, I may continue with some practical classes, but I may also just try and practice on my own.<br><br>
            I’m quite excited to get back to Cusco, I realized how much I love the city after leaving. As time goes on, I learn more and more about Peru. It’s quite frustrating because I don’t have the time (or money) to do everything I would like to do though. I suppose that just means I’ll have to come back sometime.

            Until next post!</p>

            <div class="col-lg-4">
                <img class="img-responsive" src="../img/blog_img/view_from_the_top.png" alt="" width="450">
                <p style="margin-left: 10%">Looking down from the bungee jump platform</p>
            </div>

            <div class="col-lg-4 col-lg-offset-0 col-lg-4">
                <img class="img-responsive" src="../img/blog_img/view_of_guayaquil.jpg" alt="" width="280">
                <p>The view from a lighthosue in Guayaquil, 440 stairs up</p>
            </div>

            <div class="col-lg-7 col-lg-offset-0 col-lg-4">
                <img class="img-responsive" src="../img/blog_img/mancora_hostel.jpg" alt="" width="160">
                <p>My hostel in Máncora, picture taken in a hammock</p>
            </div>

        <hr class="intro-divider">
<?php
    
    $name = $_POST["name2"];
    $text = $_POST["mes2"];
    $post = $_POST["post2"];
    
    
    if($post){
        
        #WRITE DOWN COMMENTS#
        
        $write = fopen("com2.txt", "a+");
        fwrite($write, "<u><i> $name </i></u><br>$text<br>");
        fclose($write);
        
        #DISPLAY COMMENTS#
        
        $read = fopen("com2.txt", "r+t");
        echo "<h4><u><b>All comments:</b></u></h4>";
        
        while(!feof($read)){
            echo fread($read, 1024);
            
        }
        fclose($read);
    }
    
    else{
        #DISPLAY COMMENTS#
        
        $read = fopen("com2.txt", "r+t");
        echo "<h4><u>All comments:</u></h4>";
        
        while(!feof($read)){
            echo fread($read, 1024);
        }
        fclose($read);
    }
    ?>

<hr class="intro-divider">

<form action="blog.php" method="post">

<label> Name: <br><input type="text" name="name2"><br>
<label> Message: <br><textarea cols="45" rows="5" name="mes2"></textarea></label><br>

<input type="submit" name="post2" value="Post">

</form>

<hr class="intro-divider">


    </div>

<!---------- First Post ------------>


            <div class="col-blog-1">
                <div class="clearfix"></div>
                <h3 style="margin-left: 15%; margin-right: 15%">First thoughts in Peru</h3>
                <h5 style="margin-left: 15%; margin-right: 15%"><i>June 5th, 2015</i></h5>
                <br>
                <p style="margin-left: 15%; margin-right: 15%">I’ve been in Peru for just about one month now, and it’s hard to believe I’m a third of the way through my time here. Apologies for taking so long to get this first post up, but I wanted to create my own website first, but just ended up procrastinating until now.<br><br>
                So what am I doing in Peru? I’m primarily here to learn Spanish and also working as the sports coordinator at an after school program called WaaW. On top of these two things (which keep me busy Monday-Friday from 8:00am-7:00pm) I’m taking one-on-one salsa lessons, attending weekly cooking classes, and playing Ultimate Frisbee each Sunday! Almost everything I am doing is coordinated through a small organization called FairServices. It’s really a great organization, and very focused on fairness and providing opportunities to locals. For more information check out <a href="http://www.fairservices-peru.org/en/" target="_blank">their website</a> or get in touch with me!<br><br>
                My Peruvian family has been amazing to me. My first day here they took me to a relative’s birthday party, which was definitely a great way to start my trip. The family turns out to be quite musical, and whenever there is a party in Peru there is always dancing. Something that I found quite interesting was how seriously Karaoke is taken here. People really, really enjoy it – it’s great. My house is located right next to the airport, but it’s really not that bad. There are no flights at night, thank god.<br><br>
                Luckily, I was able to avoid getting sick from the altitude. I did have one bout of sickness, but I am pretty sure it was from food poisoning. I was quite sick, but only for one night. It makes for a bit of a funny story though – I was on the bus, and a lot of the buses here are basically converted minivans, but there are three seats up front. One is for the driver, then two more for whoever wants to sit there. Before the ride I was feeling a bit queasy so I figured I would sit up front. Someone else got in, so I was sitting right next to the bus driver. A few minutes later, I vomited all over my bookbag and myself. I muttered “necesito bajar” trying to tell the bus driver I needed to get off. He responded (translated) “I know, you can get off at the next stop” and handed me a little bit of toilet paper. I really thought it was so bizarre how nonchalant the driver was, but I got off at the next stop and made my way back to my house. The next day I was fine, and was able to attend my salsa lesson!<br><br>
                Cusco is an extremely poor city, with only 9% upper class, and 12% middle class, but nevertheless Cusco is really gorgeous with tons of history, culture, and pride. The population is a bit greater than half a million, but there are 2.5 million tourists each year (so I’ve been told). The voluntourism industry is in Peru is enormous. On my flight here there was three large groups of volunteers around my age (one was from Western!), and while I’ve been here I constantly run into voluntourists. Just the other night we went out to dinner to celebrate someone’s birthday and there was a table of roughly 12 people about my age (possibly younger) all wearing scrubs and speaking english. I find it absolutely shocking to be quite honest.<br><br>
                The food here has been pretty good too, for the most part. Cuscaneans eat an absurd amount of chicken and rice. I don’t know if there has been a day yet that I haven’t had rice at least once. My homestay mother is a very good cook though, so most of the time the food is perfectly fine. There is quite a bit of Peruvian cuisine that is delicious though. My favourite so far is definitely Picaronnes. They are basically donuts, but they are made out of sweet potato, pumpkin, and drizzled with honey. So they’re really not that bad for you, and are so delicious. I have yet to try many of the staple dishes though, such as cuy (guinea pig). I’m sure that will be interesting.<br><br>
                The culture here is quite different from Canada, obviously. Here’s some examples: when greeting or saying goodbye, it is always a kiss on the cheek with women and a handshake with men. It’s not rude to call someone fat. Everyone loves dancing, and they often will have dancing class in schools. If kids are caught having a cell phone in class, the teacher takes it and keeps it until DECEMBER. Many of the bars are open until 5:00am. Clubs are called Discos or Discotecas. It is mandatory to vote, and when it is the voting period all of the bars and discotecas are closed. These are just a few examples of the cultural differences between here and Canada, many of which I find very interesting.<br><br>
                I am enjoying my time here immensely, while of course missing home. That’s all for now, I’m going to try and post more often from now on, so please check back for more posts in the future!</p>

                <p style="margin-left: 15%; margin-right: 15%">Here's a few pictures from my trip so far.</p>
               <div class="col-lg-5">
                    <img class="img-responsive" src="../img/blog_img/sacsaywaman.jpg" alt="" width="400" style="margin-left: 25%">
                    <p style="margin-left: 25%">A picture from Sacsaywaman. I somehow managed to get in for free!</p>
                </div>
                <div class="col-lg-5 col-lg-offset-1 col-sm-6">
                    <img class="img-responsive" src="../img/blog_img/plane_to_cusco.jpg" alt="" width="225">
                    <p>On the flight from Lima to Cusco &#8212; spectacular scenery</p>
                    </div>

                <div class="col-lg-10 col-offset-3 col-blog-1">
                    <p style="margin-left: 15%"><br>Cheers!</p>
                </div>
                <hr class="intro-divider">
        </div>
    </div>

<?php
    
    $name = $_POST["name"];
    $text = $_POST["mes"];
    $post = $_POST["post"];
    
    
    if($post){
        
        #WRITE DOWN COMMENTS#
        
        $write = fopen("com.txt", "a+");
        fwrite($write, "<u><i> $name </i></u><br>$text<br>");
        fclose($write);
        
        #DISPLAY COMMENTS#
        
        $read = fopen("com.txt", "r+t");
        echo "<h4><u><b>All comments:</b></u></h4>";
        
        while(!feof($read)){
            echo fread($read, 1024);

        }
        fclose($read);
    }
    
    else{
        #DISPLAY COMMENTS#
        
        $read = fopen("com.txt", "r+t");
        echo "<h4><u>All comments:</u></h4>";
        
        while(!feof($read)){
            echo fread($read, 1024);
        }
        fclose($read);
    }
    ?>

    <hr class="intro-divider">

<form action="blog.php" method="post">

<label> Name: <br><input type="text" name="name"><br>
<label> Message: <br><textarea cols="45" rows="5" name="mes"></textarea></label><br>

<input type="submit" name="post" value="Post">

</form>

</div>

</div>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li>
                        <a href="../index.html">Home</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="about.html">About Me</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="resume.html">My Resume</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
                <p class="copyright text-muted small" style="text-align:center">Copyright &copy; Mike Allan 2015</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>
    
</html>

