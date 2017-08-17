<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Greg Miller Vehicle Protection Plan</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
		<style type="text/css">
		
			* {
				margin: 0;
				padding: 0;
			}
				
			body {
				background-image: url("photos/england.jpg");
				background-size: contain;
				background-color: red;
				width: 100%;
				background-repeat: no-repeat;
				background-position: 10% 10%;
			}
			
			
			header {
				display: inline-block;
				width: 100%;
			}
			
			section {
				margin: 20% 3%;
				text-align: center;
				height: 350px;
			}
			
			section.intro {
				padding-bottom: 20%;
				
			}
			
			
			h1 {
				color: #fff;
				font-family: 'Lato' , sans-serif;
				font-size: 260%;
				padding: 1% 0 10%;
			}
			
			p.text {
				color: #fff;
				font-family: 'Roboto' , sans-serif;
				padding: 3% 1%;
			}
			
			.videowrapper {
				position: relative; 
				height: 0;
				overflow: hidden;
				padding-bottom: 56.25%;
			}
			
			.videowrapper iframe {
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
			}
			
			iframe {
				border: 1px;
				margin-top: 5%;
				position: relative;
			}
			
			.box {
				margin-bottom: 5%;
				max-width: 750px;
				margin: 0 20%;
			}
			
			main {
				padding-top: 420px;
				height: auto;
			}
			
			#space {
				padding-left: 15px;
			}
			
			img {
				width: 268.75px;
				height: 55px;
			}
			
			.banner {
				background: #fff;
  				color: #fff;
  				position: relative;
  				z-index: 1;
			}
			
			.banner .angle:after {
  				content: '';
				position: absolute;
				right: 0;
				top: 35%;
				overflow: visible;
				width: 100%;
				height: 100px;
				background: #fff;
				z-index: -1;
				-webkit-transform: skewY(-4deg);
  				-moz-transform: skewY(-4deg);
  				-ms-transform: skewY(-4deg);
 				-o-transform: skewY(-4deg);
  				transform: skewY(-4deg);
  				-webkit-backface-visibility: hidden;
  				backface-visibility: initial;
  				margin-bottom: 30px;
			}
			
			.banner .logo .angle {
				padding: 15px 15px 0 0;
				margin-left: auto;
				margin-right: auto;
			}
			
			
			.main {
				z-index: 1;
				position: relative;
			}
			
			.main .skew:before {
				content: '';
				position: absolute;
				left: 0;
				bottom: -15%;
				overflow: visible;
				width: 100%;
				height: 450px;
				background: #fff;
				z-index: -1;
				-webkit-transform: skewY(4deg);
  				-moz-transform: skewY(4deg);
  				-ms-transform: skewY(4deg);
 				-o-transform: skewY(4deg);
  				transform: skewY(4deg);
  				-webkit-backface-visibility: hidden;
  				backface-visibility: initial;
			}
			
			.main .skew .main-inner {
  				padding: 30px;
  				margin-left: auto;
  				margin-right: auto;
			}
			
			main {
				text-align: center;
			}
			
			p.form {
				font-family: 'Roboto';
				font-size: 13pt;
				padding: 0 15px 4px;
			}
			
			.formbox {
				padding: 0 10%;
			}
			
			input.form-control {
				width: 35%;
				padding: 12px 20px;
				margin: 10px 0 30px;
				box-sizing: border-box;
			}
			
			input.form-control {
				border: 2px solid red;
				border-radius: 4px;
				resize: none;
			}
			
			input[type=radio] {
				margin-bottom: 15px;
			}
			
			label {
				padding-left: 5px;
				padding-right: 20px;
				padding-top: 10px;
				font-family: 'Roboto';
			}
			
			input[type=submit] {
				border: none;
				padding: 10px 16px;
				text-decoration: none;
				margin: 10px 2px;
				cursor: pointer;
				font-size: 15pt;
				background-color: #fff;
				border: 2px solid red;
				border-radius: 4px;
				resize: none;
				color: red;	
			}
			
			
		</style>
		

    </head>
    <body>
        <div class="container">
        
        	 <header class="banner">
        	 	<div class="logo">	
        	 		<div class="angle">
        	 			<a href="" id="space"><img src="photos/gm-logo.png"></a>
        	 		</div>	
        	 	</div>	
        	 	
        	 	
            </header>
            
            
           
            <section>
            	<div class="intro">
            		<h1>VIP Pricing on all Vehicle Protection Plans</h1>
            		<div class="box">
            			<p class="text">
                {FirstName}, if you are a current {DealerName} VIP Member you are entitled to receive 
				{25%} off a Vehicle Protection Plan. If you are currently not a VIP Member                                      simply sign up below to receive this discount as well as other valuable perks.
             			</p>
                                <div class="formbox">
            			<p class="line">Please submit your cell phone number below and press submit to join our VIP Club!</p>
            				<input type="number" name="phone" class="form-control">
            			<p class="line">Would you like to receive information for a Vehicle Protection Plan for your {year} {make} {model}?</p>
            				<input type="radio" name="gender" value="yes"><label>Yes</label>
            				<input type="radio" name="gender" value="no"><label>No</label>
            				<input type="submit" value="Submit">
            			</div>
            			
			</div>
                </div>
            	</div>
            
            
            <main class="main">
            	<div class="skew">
            		<div class="main-inner">
                            <div class="videowrapper">
            				<iframe src="https://www.youtube.com/embed/2lNyfd0VCkc?rel=0&loop=1&                                            amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            			
                            </div>            				
                        </div>
                </div>
            </main>
    </body>
</html>
