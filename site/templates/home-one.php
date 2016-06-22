<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $page->title()->html() ?></title>

   <style>
   		
body,html {
height: 100%;
margin: 0px;
}

#main {
	

    background-repeat: no-repeat;
    background-position: center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    min-height: 100%;
    box-sizing: border-box;
    padding: 15px;
    background-position: 69% center;
    padding-top: 170px;
    font-family: sans-serif;
    -webkit-text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.53);
    -moz-text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.53);
    -ms-text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.53);
    -o-text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.53);
    text-shadow: 1px 1px 10px rgba(0, 0, 0, 2.103);
    font-size: 1.5em;
}




/* Intro text */
.intro {
	max-width: 500px;

}

#name {
	color: white;
}

h1 {
	margin: 0;
}

p {
	color: white;
}

a {
	color: white;
}

@media screen and (min-width: 768px) { 
	#main {

	    background-position: 65% center;
	    padding: 50px;
	}	
	.intro {
		
		background-color: rgba(0,0,0,0.4);
		padding: 30px;
	}
}


@media screen and (min-width: 1200px) {
	
	#main {
    	background-position: 100% center;

	}	
	.intro {
		max-width: 700px;
	}
}




   </style>
</head>



<body>	

	<div id="main" class="contact" style="background-image: url(data:image/jpeg;base64,<?php echo $page->file($page->hero_image())->base64() ?>)">
		
		<div class="intro">
			<div>
				<h1 id="name">
				    HI, <br>
				    I'M GEORGE AKINIAN.
				</h1>
			</div>
	

			<p>Web-Apps Developer. Need an app or a website as cool as this one?  Email me: <a href="mailto:hello@akinian.com">hello@akinian.com</a>, or call <a href="tel:1-360-609-9987">1-360-609-9987.</a>  </p>
		</div>

	</div>

</body>

</html>
