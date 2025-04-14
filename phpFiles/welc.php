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
            color: black;
            padding: 1em;
            text-align: center;
        }

        nav {
			
            background-color: #333;
            color: #fff;
            padding:20 px 7%;
            text-align: center;
			align-items:center;
        }

        nav a {
			margin-left:50px;
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s; /* smooth color transition */
        }

        nav a:hover {
            color: #4285f4;
        }

        section {
            padding: 2em;
            text-align: center;
            transition: transform 0.3s; /* smooth transform transition */
        }

        section:hover {
            transform: scale(1.05); /* scale up on hover */
        }

        section h2 {
            color: #4285f4;
            transition: color 0.3s; /* smooth color transition */
        }

        section:hover h2 {
            color: #3367d6;
        }

        section p {
            opacity: 0.8;
            transition: opacity 0.3s; /* smooth opacity transition */
        }

        section:hover p {
            opacity: 1;
        }

        section img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: box-shadow 0.3s; /* smooth box-shadow transition */
        }

        section:hover img {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* add box-shadow on hover */
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }
		p{
			font-family: 'Montserrat', sans-serif;
			
		}
		.img1{
			width:100px;
			margin-bottom:1 rem;
			
		}
    </style>
</head>

<body>

    <header>
        <h1>Your Interactive Website</h1>
        <p>Engage with Our Content</p>
    </header>

    <nav>
	
			  
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </nav>

    <section id="home">
        <h2>Welcome to Our Website!</h2>
        <p>Welcome to our Online Library, where the world of knowledge meets the convenience of your fingertips. Our digital haven is designed to provide you with a seamless and<br>
		enriching reading experience 
		from the comfort of your home. Immerse yourself in a vast collection of e-books, audiobooks, and digital resources covering a myriad of genres and topics.<br>

Discover the joy of reading without constraints, as our online library is accessible 24/7. Whether you're a student seeking academic resources, a professional delving into the latest<br>
 industry insights, or an avid reader exploring the realms of fiction, we've curated a diverse and extensive selection to cater to your literary cravings.

With user-friendly interfaces and <br>advanced search functionalities, finding your next literary adventure is just a click away. Our platform is not just a repository of books; it's a dynamic community where readers<br>
 can connect, share recommendations, and engage in discussions.

Embrace the future of reading with our Online Library Services, where pages turn with a swipe, knowledge is boundless,<br> and the joy of reading knows no boundaries. Join us on this digital journey, and let the stories unfold in the virtual world of endless possibilities.</p>
        <img src="d3.jpg" alt="Home Image">
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquam purus vel ligula dictum,
            sit amet sodales turpis convallis.</p>
			 <img src="d3.jpg" alt="Home Image">
			  <img src="d3.jpg" alt="Home Image">
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquam purus vel ligula dictum,
            sit amet sodales turpis convallis.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquam purus vel ligula dictum,
            sit amet sodales turpis convallis.</p>
			<img src="d3.jpg" alt="Home Image">
			  <img src="d3.jpg" alt="Home Image">
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquam purus vel ligula dictum,
            sit amet sodales turpis convallis.</p>
    </section>

    <footer>
        <p>&copy; 2023 Your Interactive Website. All rights reserved.</p>
    </footer>

</body>

</html>