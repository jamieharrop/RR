

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Tour Dates - Robert Ross - British comedy Historian</title>

<?php include("includes/meta.php"); ?>

<style type="text/css">
table { width: 100%; }
td { padding: 10px 0 10px 10px; }
th.dates-col-1 { width: 17%; }
th.dates-col-2 { width: 28%; }
th.dates-col-3 { width: 25%; }
th.dates-col-4 { width: 10%; }
th.dates-col-5 { width: 10%; }
th.dates-col-6 { width: 10%; }
th { background-color: #ff9000; color: #fff; font-weight: bold; padding: 10px 0 10px 10px; font-size: 120%; }
tr:nth-child(even) {background: #f1f1f1}
tr:nth-child(odd) {background: #fafafa}
.production-name { width: 15%; }
.production-name img { width: 80%; }
</style>
</head>

<body id="body-tourdates">

<div class="container">

<?php include("includes/header.php"); ?>

<?php include("includes/navigation.php"); ?>

<div class="row">
<div id="inside-page" class="col-md-12">
<h2>Tour Dates</h2>

<div class="row links-row">
<div class="col-md-12">
<table class="tour-dates-table">
<tbody>
<tr>
<th class="dates-col-1">
Show
</th>

<th class="dates-col-2">
Venue
</th>

<th class="dates-col-3">
Date
</th>

<th class="dates-col-4">
Time
</th>

<th class="dates-col-5">
Phone Number
</th>

<th class="dates-col-6">
Website
</th>
</tr>

<tr>
<td class="production-name">
<img src="images/forgotten-heros.png" alt="Forgotten Heroes of Comedy">
</td>

<td>
The Watershed, Bristol
</td>

<td class="tour-date">
Sun January 20, 2019
</td>

<td class="time">
9:30am
</td>

<td>
0117 927 5100
</td>

<td>
<a href="https://www.watershed.co.uk/whatson/9436/lost-heroes-of-slapstick-comedy/">Booking Link</a>
</td>
</tr>

<tr>
<td class="production-name">
<img src="images/tony-slattery-show.png" alt="Tony Slattery: Slattery Will Get You Nowhere">
</td>

<td>
Bristol Old Vic, The Weston Studio
</td>

<td class="tour-date">
Sun January 20, 2019
</td>

<td class="time">
3:30pm
</td>

<td>
0117 987 7877
</td>

<td>
<a href="https://bristololdvic.org.uk/whats-on/mini-series/slapstick-takeover">Booking Link</a>
</td>
</tr>

<tr>
<td class="production-name">
<img src="images/tony-slattery-show.png" alt="Tony Slattery: Slattery Will Get You Nowhere">
</td>

<td>
The Quay, Sudbury
</td>

<td class="tour-date">
Tues February 12, 2019
</td>

<td class="time">
8pm
</td>

<td>
01787 374745
</td>

<td>
<a href="https://quaysudbury.com/event/slattery-will-get-you-nowhere-tue-2019-02-12-2000">Booking Link</a>
</td>
</tr>

<tr>
<td class="production-name">
<img src="images/renown-pictures.png" alt="Renown Pictures Festival of Film">
</td>

<td>
The Alban Arena, St. Albans
</td>

<td class="tour-date">
Sun March 24, 2019
</td>

<td class="time">
10:00am
</td>

<td>
01923 290555
</td>

<td>
<a href="https://www.renownfilms.co.uk/">Booking Link</a>
</td>
</tr>

</tbody></table>
</div>
</div> <!-- /.Row -->

</div> <!-- /.Inside-Page -->
</div> <!-- /.Row -->

<?php include("includes/footer.php"); ?>

</div><!-- /.container -->

<?php include("includes/scripts.php"); ?>

<script type="text/javascript">
/* REMOVE DATE IF DATE HAS PASSED */
$(function(){
    $('.tour-date').each(function(key,value){
        var currentDate = new Date();
        currentDate.setHours(0, 0, 0, 0);
        var date = new Date($(value).text());
        if(date < currentDate){
            var currenttable = $(value).parent().closest('table');
            $(value).parent().remove();
            var count = $(currenttable).find('tr').length;
            if(count<=2) { $(currenttable).remove(); }
        }
    });
});
</script>
</body>
</html>
