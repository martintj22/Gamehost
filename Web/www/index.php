<?php
include_once("header.php");
?>

<!--- Fill this bit with your HTML -->
<section>
    <!--The section contains modules and titles, so we are able to display difrent types of content like services, news and discount codes.. -->

    <div id="sectionTitle">
        <!-- A section title from the database goes here-->
		<h1> A title form the database goes here </h1>
    </div>

    <div id="popularServices">
        <!--This module show the most Popular services hosted by us-->
        <!--Contains 3 boxes and a title, each box contains a image with the size 500x140..-->

     

        <div class="service">
            <!--We need a picture from the database...-->
		<img src="https://www.techtalk.gfi.com/wp-content/uploads/2010/05/mail-servers.jpg" alt="Smiley face" width="100%" height="250px">

      </div>

		<div class="service">
            <!--We need a picture from the database...-->
			<img src="https://www.techtalk.gfi.com/wp-content/uploads/2010/05/mail-servers.jpg" alt="Smiley face" width="100%" height="250px">

        </div>

		<div class="service">
            <!--We need a picture from the database...-->
			<img src="https://www.techtalk.gfi.com/wp-content/uploads/2010/05/mail-servers.jpg" alt="Smiley face" width="100%" height="250px">

        </div>


    </div> <!--popularServices ends here...-->

		<div id="allService">
            <!--We need a picture from the database...-->
		
		<div class="service">
            <!--We need a picture from the database...-->
			<img src="https://www.techtalk.gfi.com/wp-content/uploads/2010/05/mail-servers.jpg" alt="arma" width="100%" height="250px">

        </div>


		<div class="service">
            <!--We need a picture from the database...-->
			<img src="https://www.techtalk.gfi.com/wp-content/uploads/2010/05/mail-servers.jpg" alt="csgo" width="100%" height="250px">

        </div>

		<div class="service">
            <!--We need a picture from the database...-->
			<img src="https://www.techtalk.gfi.com/wp-content/uploads/2010/05/mail-servers.jpg" alt="gta" width="100%" height="250px">

        </div>
        </div>

	
 <!---
    <div id="showAll">
		<button onclick="showAll()">Se flere</button>
    </div>
	<div id="showDetail">
		<button onclick="showDetail()">Se mest Popul�r</button>
    </div>
  -->

	<div id="detailFunc">

	<div class="detail">
	<h1> Why us </h1>
	</div>

	<div class="detail">
		<h1> Why us </h1>

	</div>

	<div class="detail">
		<h1> Why us </h1>

	</div>
</div>
    <!--More modules can be added down below-->

</section>




<?php
include_once("footer.php");
?>