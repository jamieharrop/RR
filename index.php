<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Robert Ross - British comedy Historian</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Google Handwriting Font for Signature -->
    <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  </head>

  <body id="body-home">

    <div class="container">

      <?php include("includes/header.php"); ?>

      <?php include("includes/navigation.php"); ?>

      <div class="row">
        <div id="hp-left-col" class="col-md-6">

          <div id="hp-slideshow">
            <div id="carousel-hp" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="images/hp-slide-1.jpg" alt="">
                </div>
                <div class="item">
                  <img src="images/hp-slide-2.jpg" alt="">
                </div>
                <div class="item">
                  <img src="images/hp-slide-3.jpg" alt="">
                </div>
                <div class="item">
                  <img src="images/hp-slide-4.jpg" alt="">
                </div>
                <div class="item">
                  <img src="images/hp-slide-5.jpg" alt="">
                </div>
                <div class="item">
                  <img src="images/hp-slide-6.jpg" alt="">
                </div>
              </div> <!-- /.Carousel-Inner -->

              <a class="left carousel-control" href="#carousel-hp" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-hp" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div> <!-- /.Carousel-HP -->
          </div> <!-- /.HP-Slideshow -->

          <div id="hp-main-copy">
            <p><span class="redcolor">Hello and welcome.</span> If you are looking for that omnipresence chap who writes, talks and loves the Carry Ons, the Goodies, Monty Python and 'Doctor Who' then you’ve come to the right place!</p>

            <p id="hp-main-copy-bottom">The site details all my books, DVD audio commentaries, radio plays and much more, from Royal Doulton consultant to being an extra in 'Last of the Summer Wine'.</p>

            <p><img src="images/robert-signature.jpg" alt="Robert" id="hp-signature" /></p>
          </div> <!-- /.HP-Main-Copy -->

          <div id="hp-news-twitter" class="row">
            <div id="hp-news" class="col-md-6">
              <div>
                <?php
                require('news/wp-load.php');
                $args = array(
                // 'cat' => 3, // Only source posts from a specific category
                'posts_per_page' => 1 // Specify how many posts you'd like to display
                );
                $latest_posts = new WP_Query( $args );
                if ( $latest_posts->have_posts() ) {
                while ( $latest_posts->have_posts() ) {
                $latest_posts->the_post(); ?>
                <p><strong>News - <?php the_time('l jS F, Y') ?></strong></p>

                <p><?php
                    ob_start();
                    the_content();
                    $old_content = ob_get_clean();
                    $new_content = strip_tags($old_content);
                    echo $new_content;
                    ?>
                <? }
                } else {
                echo '<p>There are no posts available</p>';
                }
                wp_reset_postdata();
                ?></p>
              </div>

              <p class="rr-btn"><a href="news.php" title="Comtinue Reading this News Item">Continue Reading...</a></p>
            </div> <!-- /.HP-News -->

            <div id="hp-twitter" class="col-md-6">
              <div id="hp-twitter-inside">
                <div id="tweets">
                </div>

                <a href="http://www.twitter.com/RobertWRossEsq" title="Follow Me on Twitter"><img src="images/hp-twitter-btn.gif" alt="Follow Me on Twitter" /></a>
              </div>
            </div> <!-- /.HP-Twitter -->
          </div> <!-- /.HP-News-Twitter Row -->

        </div> <!-- /.HP-Left-Col -->

        <div id="hp-right-col" class="col-md-6">
          <div id="hp-top-boxes" class="row">

            <div id="hp-box-green" class="hp-box col-md-6">
              <a href="books.php" title="View List of My Books">BOOKS</a>
            </div> <!-- /.HP-Books -->

            <div id="hp-box-yellow" class="hp-box col-md-6">
              <a href="dvds.php" title="View List of My DVDs">DVDs</a>
            </div> <!-- /.HP-DVDs -->

          </div> <!-- /.HP-Top-Boxes Row -->

          <div id="hp-bottom-boxes" class="row">

            <div id="hp-box-orange" class="hp-box col-md-6">
              <a href="cds.php" title="View List of My CDs">CDs</a>
            </div> <!-- /.HP-CDs -->

            <div id="hp-box-blue" class="hp-box col-md-6">
              <a href="shows.php" title="View List of My Shows">SHOWS</a>
            </div> <!-- /.HP-Shows -->

          </div> <!-- /.HP-Bottom-Boxes Row -->

          <div id="hp-top-quotes" class="row">

            <div id="hp-quote-one" class="col-md-6">
              <blockquote class="redbg">
                "Robert's knowledge of English comedy is formidable".
                <footer>Phil Collins</footer>
              </blockquote>
            </div> <!-- /.HP-Quote-One Row -->

            <div id="hp-quote-two" class="col-md-6">
              <blockquote class="redbg">
                "Robert is a one-man encyclopedia of the very best of British comedy".
                <footer>Jim Dale</footer>
              </blockquote>
            </div> <!-- /.HP-Quote-Two Row -->

          </div> <!-- /.HP-Top-Quotes Row -->

          <div id="hp-bottom-quote" class="row">

            <div id="hp-quote-three" class="col-md-12">
              <blockquote class="redbg">
                "Robert is a fine writer, an invaluable comedy historian and<br />
                an all round good chap".
                <footer>Bill Oddie</footer>
              </blockquote>
            </div> <!-- /.HP-Quote-Three -->

          </div> <!-- /.HP-Bottom-Quote Row -->
        </div> <!-- /.HP-Right-Col -->
      </div> <!-- /.Row -->

      <div class="row">
        <div class="col-md-12">
          <div id="mailchimp-row" class="clearfix">
            <div class="col-md-4 col-sm-12">
              <p id="mailchimp-heading">Subscribe to my Mailing List</p>
            </div>

            <div class="col-md-8 col-sm-12">
              <div id="mc_embed_signup">
                <form action="https://robertross.us17.list-manage.com/subscribe/post?u=98f9f1b42d80011aa6cede05d&amp;id=09eb528042" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll">
                    <input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="First Name">

                    <input type="text" value="" name="MMERGE2" class="required" id="mce-MMERGE2" placeholder="County">
                  
                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">

                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">

                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_98f9f1b42d80011aa6cede05d_09eb528042" tabindex="-1" value=""></div>

                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                  </div>
                </form>
              </div>

                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            </div>
          </div>
        </div>   
      </div>

      <?php include("includes/footer.php"); ?>

    </div><!-- /.container -->

    <!-- Latest Tweet JavaScript -->
    <script src="js/twitterFetcher_min.js"></script>

    <script type="text/javascript">
        var config1 = {
  "id": '536491830029078528',
  "domId": 'tweets',
  "maxTweets": 1,
  "enableLinks": true,
  "showUser": false,
  "showImages": false,
  "showInteraction": false
};
twitterFetcher.fetch(config1);
    </script>

    <?php include("includes/scripts.php"); ?>
  </body>
</html>
