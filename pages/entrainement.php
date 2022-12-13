<?php
include ("../source/siteStructure.php");

$content = "
    <script src='https://www.paypal.com/sdk/js?client-id=Aa4PmO2vaaDYoc5KjNNuVopIhcLRPbVKih3Q0M2gx3_N6ddo975uGng8Woj9R_Yfax0odDdt6oQlVRlb&currency=EUR'></script>
    
    <section class='pageContainer'>
        <div id='paypal-button-container'></div>
    </section>
    
    <script src='../js/paypal.js'></script>
    
    
";

echo genSiteContent("..", $content);