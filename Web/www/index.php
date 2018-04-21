<?php
include_once("header.php");
?>

<!--- Fill this bit with your HTML -->
<section>
    <!--The section contains modules and titles, so we are able to display difrent types of content like services, news and discount codes.. -->

    <div id="sectionTitle">
        <!-- A section title from the database goes here-->
    </div>

    <div id="popularServices">
        <!--This module show the most Popular services hosted by us-->
        <!--Contains 3 boxes and a title, each box contains a image with the size 500x140..-->

        <div id="serviceLeft">
            <!--We need a picture from the database...-->
        </div>

        <div id="serviceMiddle">
            <!--We need a picture from the database...-->
        </div>

        <div id="serviceRight">
            <!--We need a picture from the database...-->
        </div>

    </div> <!--popularServices ends here...-->

    <div id="showAll">
        <!--This is a button, that hides popularServices and shows all services we offer.-->
    </div>

    <!--More modules can be added down below-->

</section>





<?php
include_once("footer.php");
?>