<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CDs - Robert Ross - British comedy Historian</title>

    <?php include("includes/meta.php"); ?>
  </head>

  <body id="body-cds">

    <div class="container">

      <?php include("includes/header.php"); ?>

      <?php include("includes/navigation.php"); ?>

      <div class="row">
        <div id="inside-page" class="col-md-12">
          <h2>CDs</h2>



          <div role="tabpanel">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#carryon" aria-controls="carryon" role="tab" data-toggle="tab">Carry On</a></li>
              <li role="presentation"><a href="#doctorwho" aria-controls="doctorwho" role="tab" data-toggle="tab">Doctor Who</a></li>
              <li role="presentation"><a href="#montypython" aria-controls="montypython" role="tab" data-toggle="tab">Monty Python</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="carryon">
                <p>The Carry Ons always seem to have been part of my life. I have watched them since I was a toddler and even as early as my teen years I was interviewed about them. I was involved with the Barbican Centre retrospective when ‘The Carry On Companion’ was first published and subsequently became the person to call on the subject. These CDs were just one fun spin-off from that.</p>

                <a href="cds-carry-on-album.php"><img src="images/cd-carry-on-1.jpg" data-toggle="tooltip" data-placement="bottom" title="The Carry On Album – Music From the Films" /></a>

                <a href="cds-carry-on-kenneth-williams.php"><img src="images/cd-carry-on-2.jpg" data-toggle="tooltip" data-placement="bottom" title="Kenneth Williams – The Collection" /></a></a>

                <a href="cds-carry-on-laughing-stock.php"><img src="images/cd-carry-on-3.jpg" data-toggle="tooltip" data-placement="bottom" title="Laughing Stock – The Best of Classic British Comedy" /></a>

                <a href="cds-carry-on-oh-what.php"><img src="images/cd-carry-on-4.jpg" data-toggle="tooltip" data-placement="bottom" title="Oh! What A Carry On" /></a>

                <a href="cds-carry-on-what-a.php"><img src="images/cd-carry-on-5.jpg" data-toggle="tooltip" data-placement="bottom" title="What A Carry On!" /></a>
              </div>

              <div role="tabpanel" class="tab-pane fade" id="doctorwho">
                <p>I have been a devoted fan of Doctor Who since I was a small boy, my earliest television memories being Tom Baker, Lis Sladen and those pesky Cybermen. Although I'm pretty sure there was no hiding behind the sofa!</p>

                <p>So I was more than a little chuffed to be invited to write for the Doctor for the celebrated Big Finish audio range; especially as my first audio was to star 'Old Sixy' himself, Colin Baker, the beloved Doctor from my early teens, as well as featuring a young actor on the brink of Doctor Who stardom. A certain David Tennant!</p>

                <p>Click on the covers for more information.</p>

                <a href="cds-doctor-who-medicinal-purposes.php"><img src="images/cd-doctor-who-1.jpg" data-toggle="tooltip" data-placement="bottom" title="Doctor Who - Medicinal Purposes" /></a>

                <a href="cds-doctor-who-pier-pressure.php"><img src="images/cd-doctor-who-2.jpg" data-toggle="tooltip" data-placement="bottom" title="Doctor Who - Pier Pressure" /></a></a>

                <a href="cds-doctor-who-assassin-in-the-limelight.php"><img src="images/cd-doctor-who-3.jpg" data-toggle="tooltip" data-placement="bottom" title="Doctor Who - Assassin in the Limelight" /></a>
              </div>

              <div role="tabpanel" class="tab-pane fade" id="montypython">
                <p>‘Monty Python's Flying Circus' had long been an obsession of mine, even though Terry Gilliam's animations terrified me when I first saw the series during a BBC repeat season. When EMI re-issued most of the albums in 2006 my entries from the 'Monty Python Encylopedia' were included in the sleeve notes. That was just the beginning…</p>

                <a href="cds-monty-python-sings-again.php"><img src="images/cd-monty-1.jpg" data-toggle="tooltip" data-placement="bottom" title="Monthy Python Sings (again)" /></a>

                <a href="cds-monty-python-sings-again-deluxe.php"><img src="images/cd-monty-2.jpg" data-toggle="tooltip" data-placement="bottom" title="Monthy Python Sings (again) Deluxe" /></a></a>

                <a href="cds-monty-python-total-rubbish.php"><img src="images/cd-monty-3.jpg" data-toggle="tooltip" data-placement="bottom" title="Monty Python’s Total Rubbish. CD Version" /></a>

                <a href="cds-monty-python-total-rubbish-vinyl.php"><img src="images/cd-monty-4.jpg" data-toggle="tooltip" data-placement="bottom" title="Monty Python’s Total Rubbish. Vinyl Version" /></a>
              </div>
            </div>

          </div>




        </div> <!-- /.Inside-Page -->
      </div> <!-- /.Row -->

      <?php include("includes/footer.php"); ?>

    </div><!-- /.container -->

    <?php include("includes/scripts.php"); ?>

    <script type="text/javascript">

      $(document).ready(function() {
    $("body").tooltip({ selector: '[data-toggle=tooltip]' });
});

      $(function () {
         var activeTab = $('[href=' + location.hash + ']');
         activeTab && activeTab.tab('show');
      });
    </script>
  </body>
</html>
