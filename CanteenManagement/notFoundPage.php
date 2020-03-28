<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
	text-align: center;
	margin: 0 auto 0 auto;
}


/* skeleton blink */
@keyframes skeletonBlink{
     from {opacity: 0;}
     to {opacity: 1;}
}

body {
	background: #F5F5F5;
}


#container{
	width: 960;
}

#imageG{
    position: relative;
    clear: both;
    margin-top: 150px;
    width:350px;
}


#ghostBody{
    z-index: -1;  
}

#ghostEyes{
    left:160px;
    top:22px;
    position: absolute; 
}


#ghostSkeleton{
    left:130px;
    top:-15px;
    position: absolute;
    animation-name: skeletonBlink;
    animation-duration: .7s;
    animation-iteration-count: infinite;  
}



h3.bold{
	font-family: 'Montserrat', sans-serif;
    font-weight: 400;
    text-align: center;
    text-transform: capitalize;
    font-size: 18px;
    clear: both;
    color: #000000;
    margin-top: 20px;
}

.underline {
    width: 80px;
    height: 2px;
    background: #4A90E2;
    margin: 14px auto;
}

p.body{
	display: block;
    font-family: 'Varela Round', 'Helvetica Neue', Arial, sans-serif;
    text-align: center;
    font-weight: 400;
    font-size: 18px;
    clear: both;
    color: rgba(0,0,0,0.75);
}

.btn {
    border: 1px solid #4A90E2;
    border-radius: 3px;
    background: #ffffff;
    color: #4A90E2;
    font-family: 'Varela Round', 'Helvetica Neue', Arial, sans-serif;
    font-size: 16px;
    display: block;
    padding: 15px 50px 15px 50px;
    margin-top: 50px;
    text-decoration: none;
    display: inline-block;
    text-align: center;
    cursor: pointer;
    text-decoration: none;
    outline: none;
}

@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
body {
	background: black; }
}
	</style>
</head>
<body>
		<div id ="container"> <!-- container starts -->
			

			<h3 class = "bold">Internal Server Error</h3>
			<div class="underline"></div>
			<p class = "body">Sorry! something went wrong at our side.</p>
			<button type="button" class="btn">Take me to home page!</button>
		</div> <!-- container ends -->
</html>