
<html>
    <head>
<<<<<<< HEAD
        <link rel="stylesheet" type="text/css" href="style/style.css">
=======
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../style/style.css">
		
>>>>>>> 7e77db353fc54ea20ac8b3e768ab0435fd60614e
        <title>NoobNice Serverhosting</title>
    </head>

    <body>
<<<<<<< HEAD

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
				<form action="login/login.php" method="POST">
				<label for="uname"><b>Brugernavn</b></label>
				<input type="text" placeholder=	"Brugernavn" name="uname" required>


				<label for="psw"><b>Adgangskode</b></label>
				<input type="password" placeholder="Adgangskode" name="psw" required>		
				<label>
					<input type="checkbox" checked="checked" name="remember"> Husk mig
			    </label>			
				<button type="submit">Log ind</button>

<br> 
				<h1> Opret bruger </h1>


		<details>
			 <summary>Opret bruger</summary>


			   <label for="Fornavn"><b>Fornavn</b></label> 
			   <input type="text" placeholder="Fornavn" name="Fornavn" required> 
			   <br>
			    <label for="Efternavn"><b>Efternavn</b></label> 
			   <input type="text" placeholder="Efternavn" name="Fornavn" required> 
			   <br>
			   <label for="Brugernavn"><b>Brugernavn</b></label> 
			   <input type="text" placeholder="Burgernavn" name="Brugernavn" required> 
			   <br>
			   <label for="email"><b>Email</b></label> 
			   <input type="text" placeholder="Enter Email" name="email" required> 
			   <br>
			   <label for="psw"><b>Password</b></label> 
			   <input type="password" placeholder="Enter Password" name="psw" required> <br> 
			   <label for="psw-repeat"><b>Repeat Password</b></label>
			   <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
			   <br>
			   <button type="submit" class="registerbtn">Register</button>
		</details>
				


			
				</form>
	    </div> 	 <!--Login popup box ends here-->

=======
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
>>>>>>> 7e77db353fc54ea20ac8b3e768ab0435fd60614e
				</div>
				<div class="login">					
					<?php if(isset($_SESSION['userLevel'])) {
						if($_SESSION['userLevel'] > 0) {?>
						<a class="button" href="admin/admin.php"> Admin </a>
					<?php } } ?>
					<!--Login system goes here-->

					<!--Login popup buttton-->
					<?php if(!isset($_SESSION['username'])) { ?>
					
					<a class="button" href="#popup1">Log ind</a>
					<?php } else {
						?>
					<a class="button" href="user/profile.php"> Min Konto </a>
					<a class="button" href="login/logout.php">Log ud</a>					
					<?php } ?>
					<!--Login popup box-->
					<div id="popup1" class="overlay">
						<div class="popup">
							<h2>Log ind</h2>
							<a class="close" href="#">&times;</a>
							<div class="content">
								<div class="container">
									<form action="login/login.php" method="POST">
										<label for="uname"><b>Brugernavn</b></label>
										<input type="text" placeholder=	"Brugernavn" name="uname" required>
										<label for="psw"><b>Adgangskode</b></label>
										<input type="password" placeholder="Adgangskode" name="psw" required>		
										<label>
											<input type="checkbox" checked="checked" name="remember"> Husk mig
										</label>			
										<button type="submit">Log ind</button>
									</form>
									<br> 
									<h1> Opret bruger </h1>


									<details>
										<summary>Opret bruger</summary>

										<form action="login/register.php" method="POST">
											<label for="Fornavn"><b>Fornavn</b></label> 
											<input type="text" placeholder="Fornavn" name="fornavn" required> 
											<br>
											<label for="Efternavn"><b>Efternavn</b></label> 
											<input type="text" placeholder="Efternavn" name="efternavn" required> 
											<br>
											<label for="Brugernavn"><b>Brugernavn</b></label> 
											<input type="text" placeholder="Burgernavn" name="brugernavn" required> 
											<br>
											<label for="email"><b>Email</b></label> 
											<input type="email" placeholder="Enter Email" name="email" required> 
											<br>
											<label for="psw"><b>Password</b></label> 
											<input type="password" placeholder="Enter Password" name="psw" required> <br> 
											<label for="psw-repeat"><b>Repeat Password</b></label>
											<input type="password" placeholder="Repeat Password" name="pswRepeat" required>
											<br>
											<button type="submit" class="registerbtn">Register</button>
										</form>
									</details>
								</div>
							</div>
						</div>
					</div>
				</div><!--Login popup box ends here-->					
			</nav>
		
		 