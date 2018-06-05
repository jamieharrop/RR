<?php
// OPTIONS - PLEASE CONFIGURE THESE BEFORE USE!

$yourEmail = "robert@robertross.co.uk"; // the email address you wish to receive these mails through
$yourWebsite = "Robert Ross"; // the name of your website
$thanksPage = ''; // URL to 'thanks for sending mail' page; leave empty to keep message on the same page 
$maxPoints = 4; // max points a person can hit before it refuses to submit - recommend 4
$requiredFields = "name,email,comments"; // names of the fields you'd like to be required as a minimum, separate each field with a comma


// DO NOT EDIT BELOW HERE
$error_msg = array();
$result = null;

$requiredFields = explode(",", $requiredFields);

function clean($data) {
  $data = trim(stripslashes(strip_tags($data)));
  return $data;
}
function isBot() {
  $bots = array("Indy", "Blaiz", "Java", "libwww-perl", "Python", "OutfoxBot", "User-Agent", "PycURL", "AlphaServer", "T8Abot", "Syntryx", "WinHttp", "WebBandit", "nicebot", "Teoma", "alexa", "froogle", "inktomi", "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory", "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot", "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz");

  foreach ($bots as $bot)
    if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
      return true;

  if (empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == " ")
    return true;
  
  return false;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isBot() !== false)
    $error_msg[] = "No bots please! UA reported as: ".$_SERVER['HTTP_USER_AGENT'];
    
  // lets check a few things - not enough to trigger an error on their own, but worth assigning a spam score.. 
  // score quickly adds up therefore allowing genuine users with 'accidental' score through but cutting out real spam :)
  $points = (int)0;
  
  $badwords = array("adult", "beastial", "bestial", "blowjob", "clit", "cum", "cunilingus", "cunillingus", "cunnilingus", "cunt", "ejaculate", "fag", "felatio", "fellatio", "fuck", "fuk", "fuks", "gangbang", "gangbanged", "gangbangs", "hotsex", "hardcode", "jism", "jiz", "orgasim", "orgasims", "orgasm", "orgasms", "phonesex", "phuk", "phuq", "pussies", "pussy", "spunk", "xxx", "viagra", "phentermine", "tramadol", "adipex", "advai", "alprazolam", "ambien", "ambian", "amoxicillin", "antivert", "blackjack", "backgammon", "texas", "holdem", "poker", "carisoprodol", "ciara", "ciprofloxacin", "debt", "dating", "porn", "link=", "voyeur", "content-type", "bcc:", "cc:", "document.cookie", "onclick", "onload", "javascript");

  foreach ($badwords as $word)
    if (
      strpos(strtolower($_POST['comments']), $word) !== false || 
      strpos(strtolower($_POST['name']), $word) !== false
    )
      $points += 2;
  
  if (strpos($_POST['comments'], "http://") !== false || strpos($_POST['comments'], "www.") !== false)
    $points += 2;
  if (isset($_POST['nojs']))
    $points += 1;
  if (preg_match("/(<.*>)/i", $_POST['comments']))
    $points += 2;
  if (strlen($_POST['name']) < 3)
    $points += 1;
  if (strlen($_POST['comments']) < 15 || strlen($_POST['comments'] > 1500))
    $points += 2;
  if (preg_match("/[bcdfghjklmnpqrstvwxyz]{7,}/i", $_POST['comments']))
    $points += 1;
  // end score assignments

  foreach($requiredFields as $field) {
    trim($_POST[$field]);
    
    if (!isset($_POST[$field]) || empty($_POST[$field]) && array_pop($error_msg) != "Please fill in all the required fields and submit again.\r\n")
      $error_msg[] = "Please fill in all the required fields and submit again.";
  }

  if (!empty($_POST['name']) && !preg_match("/^[a-zA-Z-'\s]*$/", stripslashes($_POST['name'])))
    $error_msg[] = "The name field must not contain special characters.\r\n";
  if (!empty($_POST['email']) && !preg_match('/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i', strtolower($_POST['email'])))
    $error_msg[] = "That is not a valid e-mail address.\r\n";
  if (!empty($_POST['url']) && !preg_match('/^(http|https):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(:(\d+))?\/?/i', $_POST['url']))
    $error_msg[] = "Invalid website url.\r\n";
  
  if ($error_msg == NULL && $points <= $maxPoints) {
    $subject = "Automatic Form Email";
    
    $message = "You received this e-mail message through your website: \n\n";
    foreach ($_POST as $key => $val) {
      if (is_array($val)) {
        foreach ($val as $subval) {
          $message .= ucwords($key) . ": " . clean($subval) . "\r\n";
        }
      } else {
        $message .= ucwords($key) . ": " . clean($val) . "\r\n";
      }
    }
    $message .= "\r\n";
    $message .= 'IP: '.$_SERVER['REMOTE_ADDR']."\r\n";
    $message .= 'Browser: '.$_SERVER['HTTP_USER_AGENT']."\r\n";
    $message .= 'Points: '.$points;

    if (strstr($_SERVER['SERVER_SOFTWARE'], "Win")) {
      $headers   = "From: $yourEmail\r\n";
    } else {
      $headers   = "From: $yourWebsite <$yourEmail>\r\n"; 
    }
    $headers  .= "Reply-To: {$_POST['email']}\r\n";

    if (mail($yourEmail,$subject,$message,$headers)) {
      if (!empty($thanksPage)) {
        header("Location: $thanksPage");
        exit;
      } else {
        $result = 'Your mail was successfully sent.';
        $disable = true;
      }
    } else {
      $error_msg[] = 'Your mail could not be sent this time. ['.$points.']';
    }
  } else {
    if (empty($error_msg))
      $error_msg[] = 'Your mail looks too much like spam, and could not be sent this time. ['.$points.']';
  }
}
function get_data($var) {
  if (isset($_POST[$var]))
    echo htmlspecialchars($_POST[$var]);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact - Robert Ross - British comedy Historian</title>

    <?php include("includes/meta.php"); ?>

    <style type="text/css">
      p.error, p.success {
        font-weight: bold;
        padding: 10px;
        border: 1px solid;
      }
      p.error {
        background: #ffc0c0;
        color: #900;
      }
      p.success {
        background: #b3ff69;
        color: #4fa000;
      }
    </style>
  </head>

  <body id="body-contact">

    <div class="container">

      <?php include("includes/header.php"); ?>

      <?php include("includes/navigation.php"); ?>

      <div class="row">
        <div id="inside-page" class="col-md-12">
          <h2>Contact</h2>

          <p>If you have any questions, comments or offers of work, please contact me using the form below.</p>

          <?php
            if (!empty($error_msg)) {
              echo '<p class="error">ERROR: '. implode("<br />", $error_msg) . "</p>";
            }
            if ($result != NULL) {
              echo '<p class="success">'. $result . "</p>";
            }
          ?>

          <form action="<?php echo basename(__FILE__); ?>" method="post">
            <noscript>
                <p><input type="hidden" name="nojs" id="nojs" /></p>
            </noscript>
            <p>
              <label for="name">Name: *</label><br />
                <input type="text" name="name" id="name" value="<?php get_data("name"); ?>" />
            </p>
            
            <p>
              <label for="email">E-mail: *</label><br />
                <input type="text" name="email" id="email" value="<?php get_data("email"); ?>" />
            </p>
            
            <p>
              <label for="comments">Comments: *</label><br />
                <textarea name="comments" id="comments" rows="5" cols="30"><?php get_data("comments"); ?></textarea>
            </p>

            <p>
              <input type="submit" name="submit" id="submit" value="Send" <?php if (isset($disable) && $disable === true) echo ' disabled="disabled"'; ?> />
            </p>
          </form>
        </div> <!-- /.Inside-Page -->
      </div> <!-- /.Row -->

      <?php include("includes/footer.php"); ?>

    </div><!-- /.container -->

    <?php include("includes/scripts.php"); ?>
  </body>
</html>
