<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>News Archives - Robert Ross - British comedy Historian</title>

    <?php include("includes/meta.php"); ?>
  </head>

  <body id="body-news">

    <div class="container">

      <?php include("includes/header.php"); ?>

      <?php include("includes/navigation.php"); ?>

      <div class="row">
        <div id="inside-page" class="col-md-12">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <h2>News Archives</h2>
            </div>

            <div id="more-news-btn" class="col-md-6 col-sm-6 col-xs-12 text-right">
              <p><a role="button" class="btn btn-danger btn-lg" href="news.php">View Recent News &raquo;</a></p>
            </div>
          </div>

          <?php
          require('news/wp-load.php');
          $args = array(
          'cat' => 3, // Only source posts from a specific category
          'posts_per_page' => 100000 // Specify how many posts you'd like to display
          );
          $latest_posts = new WP_Query( $args );
          if ( $latest_posts->have_posts() ) {
          while ( $latest_posts->have_posts() ) {
          $latest_posts->the_post(); ?>
          <?php if ( has_post_thumbnail() ) { ?>
          <span class="post_thumbnail"><?php the_post_thumbnail(); ?></span>
          <?php } ?>
          <h3 class="post_title"><?php the_title(); ?></h3>
          <p><span class="post_time">Posted on <?php the_time('l jS F, Y') ?></span></p>
          <p><div class="clearfix"><?php the_content(); ?></div></p><hr>
          <? }
          } else {
          echo '<p>There are no posts available</p>';
          }
          wp_reset_postdata();
          ?>
        </div> <!-- /.Inside-Page -->
      </div> <!-- /.Row -->

      <?php include("includes/footer.php"); ?>

    </div><!-- /.container -->

    <?php include("includes/scripts.php"); ?>
  </body>
</html>
