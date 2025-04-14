<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Interactive Website</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #4285f4;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 0.5em;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.3s; /* smooth color transition */
        }

        nav a:hover {
            color: #4285f4;
        }

        section {
            padding: 2em;
            text-align: center;
            transition: transform 0.3s;
        }

        section:hover {
            transform: scale(1.05); 
        }

        section h2 {
            color: #4285f4;
            transition: color 0.3s; /* smooth color transition */
			font-size:30px;
			margin-top:15px;
			font-weight:300;
        }

        section:hover h2 {
            color: #3367d6;
        }

        section p {
            opacity: 0.8;
            transition: opacity 0.3s; 
			margin-left:10px;
			
        }

        section:hover p {
            opacity: 1;
        }

        section img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: box-shadow 0.3s; 
        }

        section:hover img {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8); 
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }
		p{
			font-family: 'Montserrat', sans-serif;
			text-align:center;
			
		}
		
		.service{
			width:30%;
			display:inline-block;
			margin:0 2 rem;
			text-align:center;
		}
		.service img{
			width:100%;
			margin-bottom:1 rem;
			border-radius:30px;
			margin-right:1px;
		}
		.ab{
			font-weight:200px;
		}
		#pic{
		background-image:url("bg9.jpg");
		background-size:cover;
		background-repeat:repeat;		
		
		}
		.idm{
			height:300px;
			width:500px;
		}
		
    </style>
</head>

<body>

    <header>
        <h1><u>THE BOOKSHELF CORNER</u></h1>
        <p>ENGAGE WITH OUR CONTENT</p>
    </header>

    <nav>
        <a href="#home">HOME</a>
        <a href="#services">SERVICES</a>
		<a href="#about">ABOUT US</a>
        <a href="#contact">CONTACT</a>
		<a href="index.php">LOGIN</a>
    </nav>
<div id="pic">
    <section id="home">
        <h2><b><u>Welcome Intresty!<b></u></h2>
        <p class="p1"><b>Welcome to our Online Library, where the world of knowledge meets the convenience of your fingertips. Our digital haven is designed to provide you with a seamless and<br>
		enriching reading experience 
		from the comfort of your home.Immerse yourself in a vast collection of e-books, audiobooks, and digital resources covering a myriad of genres and topics.

Discover the joy of reading without constraints, as our online library is accessible 24/7. Whether you're a student seeking academic resources, a professional delving into the latest
 industry insights, or an avid reader exploring the realms of fiction, we've curated a diverse and extensive selection to cater to your literary cravings.
</b><br><br><br><br></p>
        <img src="h2.jpg" alt="Home Image" class="idm">
    </section>

    

    <section id="services">
        <h2><b><u>Our Services</u></b></h2>
       <div class="service">
	   <img src="pic1.jpg" alt="Home Image">
	   <h3 class="ab"><b><u>MAKE AN ACCOUNT</u></b></h3>
	   <p><b>     MAKE AN ACCOUNT AND EXPLORE ALL THE SERVICES</b></p>
	   </div>
	   <pre>   </pre>
	    <div class="service">
	   <img src="pic4.jpg" alt="Home Image">
	   <h3><b><u>VIEW BOOKS</u></b></h3>
	   <p><b>    VIEW AN ASSORTMENT OF BOOKS OF DIFFERENT GENRES</b></p>
	   </div>
	   <br>
	    <div class="service">
	   <img src="pic3.jpg" alt="Home Image">
	   <h3><u> BOOK REQUESTS</u></h3>
	   <p><b>    MAKE A REQUEST FOR YOUR LIST OF FAVOURITE BOOK</b></p>
	   </div>
	   
    </section>
	<section id="about">
        <h2><b><u>About Us</u><b></h2>
        <p><b>We are four enthusiasts who keenly used our time and knowledge to make this usefull and working Library management website!</b></p>
    </section>

    <section id="contact">
        <h2><b><u>Contact Us</u></b></h2>
        <p><b>Siddhant Choudhary:9922103207<br>Vansh Kumar Mittal:  9922103219<br>Animesh Chandra Srivastava:  9922103230<br>Bhavya Chawla:  9922103231</b></p>
    </section>
</div>
    <footer>
        <p><b>&copy; 2023 Your Interactive Website. All rights reserved.</b></p>
    </footer>

</body>

</html>