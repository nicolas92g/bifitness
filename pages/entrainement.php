<?php
include ("../source/siteStructure.php");

$content = "
    <script src='https://www.paypal.com/sdk/js?client-id=AfimPJThlnFU1gw1uLBHJCiBg6mwOIZHyR70SiRqNlGzfED0uK8jrF1RYmSv_CqhOdEp3zVGZxHtYEBO&currency=USD'></script>
    
    <section class='pageContainer'>
        <div id='paypalContainer'></div>
    </section>
    
    <script src='../js/paypal.js'></script>
";

echo genSiteContent("..", $content);