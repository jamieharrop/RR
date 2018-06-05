<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Robert Ross In Conversation With Show - Robert Ross - British comedy Historian</title>

    <?php include("includes/meta.php"); ?>
  </head>

  <body id="body-shows">

    <div class="container">

      <?php include("includes/header.php"); ?>

      <?php include("includes/navigation.php"); ?>

      <div class="row">
        <div id="inside-page" class="col-md-12">
          <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">
              <h2>Robert Ross In Conversation With...</h2>
            </div>

            <div id="more-news-btn" class="col-md-3 col-sm-3 col-xs-12 text-center">
              <p><a role="button" class="btn btn-danger btn-lg" href="shows.php">&laquo; Back to Shows</a></p>
            </div>
          </div>

          <p><img src="images/shows-requests-pleasure.jpg" class="alignright" width="300" style="margin-bottom: 30px;" />Beginning life at the Museum of Comedy, Bloomsbury, and subsequently moving to the Leicester Square Theatre Lounge, in the West End, these shows see me chat to the greatest names in comedy. In conversation about their own extensive careers, as well as the comedy greats who have entertained and inspired them, these interviews are recorded in front of a live audience for podcast download.</p>

          <h3>Podcasts from Previous Shows</h3>

          <p><strong>Matt Lucas - Olivier stage at the National Theatre, December 2017:</strong> - <a href="https://player.fm/series/nt-talks/little-me-the-a-z-of-matt-lucas">Listen to the Podcast</a></p>

		  <p><strong>Jess Conrad - October 2016:</strong> - <a href="https://www.comedy.co.uk/podcasts/museum_of_comedy/jess_conrad/">Listen to the Podcast</a></p>

		  <p><strong>Peter Egan - April 2016:</strong> - <a href="https://www.comedy.co.uk/podcasts/museum_of_comedy/peter_egan/">Listen to the Podcast</a></p>

          <p><strong>Mark Gatiss - February 2016:</strong> - <a href="https://www.comedy.co.uk/podcasts/museum_of_comedy/mark_gatiss/">Listen to the Podcast</a></p>

          <p><strong>Danny Baker - November 2015:</strong> - <a href="https://www.comedy.co.uk/podcasts/live_from_leicester_square/danny_baker/">Listen to the Podcast</a></p>

          <p><strong>Trevor Neal &amp; Simon Hickson - September 2015:</strong> - <a href="https://www.comedy.co.uk/podcasts/live_from_leicester_square/trevor_and_simon/">Listen to the Podcast</a></p>

          <p><strong>Vera Day - August 2015:</strong> - <a href="https://www.comedy.co.uk/podcasts/live_from_leicester_square/vera_day/">Listen to the Podcast</a></p>

          <p><strong>Barry Cryer - July 2015:</strong> - <a href="https://www.comedy.co.uk/podcasts/live_from_leicester_square/barry_cryer">Listen to the Podcast</a></p>

          <p><strong>Christopher Beeny - June 2015:</strong> - <a href="https://www.comedy.co.uk/podcasts/live_from_leicester_square/christopher_beeny/">Listen to the Podcast</a></p>

          <p><strong>Bernard Cribbins - May 2015:</strong> - <a href="https://www.comedy.co.uk/podcasts/live_from_leicester_square/bernard_cribbins/">Listen to the Podcast</a></p>

          <p><strong>Sally Geeson - April 2015:</strong> - <a href="https://www.comedy.co.uk/podcasts/live_from_leicester_square/sally_geeson/">Listen to the Podcast</a></p>

          <p><strong>Terry Jones and Michael Palin - March 2015:</strong> - <a href="https://www.comedy.co.uk/podcasts/live_from_leicester_square/michael_palin_terry_jones/">Listen to the Podcast</a></p>

          <p><strong>Bill Oddie - December 2014:</strong> - <a href="https://www.comedy.co.uk/podcasts/museum_of_comedy/bill_oddie/">Listen to the Podcast</a></p>

          <h3>Upcoming Dates</h3>

          <p><strong>Robert Ross In Conversation With Liz Fraser:</strong> The Lounge, Leicester Square Theatre, London<br />
          Sunday, <span class="production-date">28 August 2016</span>, 4pm - <a href="https://leicestersquaretheatre.ticketsolve.com/shows/873536081/events">Book Tickets</a></p>

          <p><strong>Robert Ross In Conversation With Fenella Fielding:</strong> The Lounge, Leicester Square Theatre, London<br />
          Sunday, <span class="production-date">25 September 2016</span>, 4pm - <a href="https://leicestersquaretheatre.ticketsolve.com/shows/873536083/events">Book Tickets</a></p>

          <p><strong>Robert Ross In Conversation With Jess Conrad O.B.E.:</strong> The Lounge, Leicester Square Theatre, London<br />
          Sunday, <span class="production-date">23 October 2016</span>, 4pm - <a href="https://leicestersquaretheatre.ticketsolve.com/shows/873536084/events">Book Tickets</a></p>

          <p><strong>Robert Ross In Conversation With:</strong> The Lounge, Leicester Square Theatre, London<br />
          Sunday, <span class="production-date">27 November 2016</span>, 4pm</p>

          <p><strong>Robert Ross In Conversation With:</strong> The Lounge, Leicester Square Theatre, London<br />
          Sunday, <span class="production-date">18 December 2016</span>, 7pm</p>

          <p><a role="button" class="btn btn-danger btn-lg" href="http://www.leicestersquaretheatre.com/whats-on/comedy">Purchase Tickets</a></p>
        </div> <!-- /.Inside-Page -->
      </div> <!-- /.Row -->

      <?php include("includes/footer.php"); ?>

    </div><!-- /.container -->

    <?php include("includes/scripts.php"); ?>

    <script type="text/javascript">
      /* REMOVE DATE IF DATE HAS PASSED */
      $(function(){
          $('.production-date').each(function(key,value){
              var currentDate = new Date();
              currentDate.setHours(0, 0, 0, 0);
              var date = new Date($(value).text());
              if(date < currentDate){
                  $(value).parent().remove();
              }
          });
      });
    </script>
  </body>
</html>
