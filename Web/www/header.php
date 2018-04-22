
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <title>NoobNice Serverhosting</title>
    </head>



    <body>

    <div id="wrapper">
        <header>
            <!--The header is the box, on the very top of the website.-->

            <div id="logo">
                <!--We need a logo from the database...-->
                <!--Test logo below...-->
				<h3>Logo from the db here <h3>
            </div>

            <div id="trustPilot">
                <!--We need to registre at dk.trustpilot.com -->
                <!--Test image below...-->
				<h1> trustpilot </h1>
            </div>

        </header>

        <nav>
            <!--Navigation goes here-->  
            
			<div class="topnav">
				 <a class="active" href="#home">Nyheder</a>
				 <a href="#news">Gaming</a>
				 <a href="#contact">Webhost</a>
			</div>

            <div class="login">
                <!--Login system goes here-->

				<!--Login popup buttton-->
			<a class="button" href="#popup1">Log ind</a>
			    <!--Login popup box-->
		<div id="popup1" class="overlay">
			<div class="popup">
				<h2>Log ind</h2>
				<a class="close" href="#">&times;</a>
				<div class="content">
				<div class="container">
				<label for="uname"><b>Brugernavn</b></label>
				<input type="text" placeholder="Brugernavn" name="uname" required>

				<label for="psw"><b>Adgangskode</b></label>
				<input type="password" placeholder="Adgangskode" name="psw" required>
        
				<button type="submit">Log ind</button>
				<label>
					<input type="checkbox" checked="checked" name="remember"> Husk mig
			    </label>
	    </div> 	 <!--Login popup box ends here-->

				</div>
			</div>
		</div>


    </div>

        </nav> 