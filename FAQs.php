<?php
		
		// @NEW Set default values
		$name = '';
		$surname = '';
		$email = '';
		$message = '';
		
		// @NEW set default error messages
		$nameError = '';
		$surnameError = '';
		$emailError = '';
		$messgaeError = '';
		
		// Set default message
		$message = '';
		
		// Set array of errors
		$errors = array();
		
		// Set default that there is no errors
		$noErrors = true;
		
		// haveErrors is the opposite of noErrors
		$haveErrors = !$noErrors;
		
		// use require_once to include the validations/registerformresult.php
		require_once('validations/faqresult.php');
		
		// for successful POST
		if ($noErrors && $userArriveBySubmittingAForm) {
				
				// $newTitle for successful
				$newTitle = 'Submission Successfully!!';
				
				// $h1Title for Thank you for registering with us!
				$h1Title = 'Thank you for your contributions!';
				
				$message = "\t\t" . '<font color="green">Success!</font><br />' . "\n";
				
				$message = $message . "\t\t" . 'Name : ' . $name . ' <br />' . "\n";
				$message = $message . "\t\t" . 'Surname : ' . $surname . ' <br />' . "\n";
				$message = $message . "\t\t" . 'Email : ' . $email . ' <br />' . "\n";
				$message = $message . "\t\t" . 'Message : ' . $message . ' <br />' . "\n";

				$message = $message . "\t\t" . '<ol>' . "\n";
										
				// for error validation
		} elseif ($haveErrors && $userArriveBySubmittingAForm) {
				// $newTitle for Registration fail!
				$newTitle = 'Error! Validation failed!!';
				
				// $h1Title for Registration fail!
				$h1Title = 'Fail!';
			
				$message = "\t\t" . '<font color="red">Fail!</font><br />' . "\n";
				$message = $message . "\t\t" . 'Validation errors : <br />' . "\n";
				
				$message = $message . "\t\t" . '<ol>' . "\n";
				
				
				
				foreach ($errors as $key=>$errorMessage) {
				$message = $message . "\t\t\t" . '<li>' . $errorMessage . '</li>' . "\n";
				
				if ($key == 'name') {
						$nameError = $errorMessage;
				}
				if ($key == 'surname') {
						$surnameError = $errorMessage;
				}
				if ($key == 'email') {
						$emailError = $errorMessage;
				}
				if ($key == 'message') {
						$messageError = $errorMessage;
				}
				
				}
				
				$message = $message . "\t\t" . '</ol>' . "\n";
				
				// for displaying form
		} else if ($userArriveByClickingOrDirectlyTypeURL) { // we put the original form inside the $message variable
				$newTitle = 'Registration';
				
				$h1Title = 'Welcome to Trading with Friends';
				
				$message = '';
		}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Trading with Friends - Learning Platform For You - FAQs</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<div class="page">
		<div class="header">
			<a href="index.html" id="logo"><img src="images/logo1.png" alt="logo"></a>
			<ul class="navigation">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="company.html">Company Analysis</a>
				</li>
				<li>
					<a href="glossary.html">Glossary</a>
				</li>
				<li>
					<a href="https://apps.facebook.com/tradingwithfriends/" target="_blank">Trading With Friends</a>
				</li>
				<li>
					<a href="http://astartalk.forumotion.com/" target="_blank">Forum</a>
				</li>
			    <li class="selected">
					<a href="FAQs.php">FAQs</a>
				</li>
			</ul>
		</div>
		
		
			<div class="search">
            <div>
<form action="search.php" method="get">
<input type="text" name="query" id="query" size="40" value="">
<input type="submit" value="Search">
<input type="hidden" name="search" value="1">
</form>
</div> 
		<div class="body">
			<div class="contact">
				<div>
					<div>
						<h1>Start your learning journey today!</h1>
						<p>
							Lost? or do not know where and how to start to do your research? Fret not! "Trading with Friends" provides you with a friendly coummunity where everyone could share their ideas on Equities and such. Simply <a href="http://www.astartalk.forumotion.com">Click Here</a> to access the Forum. 
						</p>
					</div>
					<div>
						<h1>FAQs</h1>
						<ul class="first">
						    <li>
						        <h2>Website related</h2>
						      
								<h3> Q: Who are the targeted users for the website?</h3>
								<p>
								    The website targets people who are interested in equities. We welcome students, working adiuts and even through professionals who are lookong for somewhere to learn more about equities.
								</p>
								
								<h3> Q: Is it free to learn on the website?</h3>
								<p>
									Yes! With the webs, you can enjoy learning and researching everything about equities. 
								</p>
								
								<h3> Q: Does the website offer mobil services?</h3>
								<p>
									Phone support is not currently available. However, we  have a community forum where you can get help from the Webs community as well as Webs staff members.
								</p>
								
								<h3> Any more questions? Free to edit</h3>
								<p>
									
								</p>
								
							</li>
							<li>
							    <h2>Forum related</h2>
							    
								<h3> Q: Is it free for the forum?</h3>
								<p>
									Yes! You are able to access to the forum with registration and login. 
								</p>
								
								<h3> Q: Where can I access to the forum?</h3>
								<p>
									You can easily access to the forum by the link on the website as well as the application.
								</p>
								
							</li>
					
						</ul>
						<ul class="last">
							<li>
							    <h2>Facebook application related</h2>
							    
								<h3> Q: Is it free for the Facebook application?</h3>
								<p>
									Yes! You need to be a Facebook user before you access to the application.
								</p>
								
								<h3> Q: Which equities tradable on the application?</h3>
								<p>
									There are 20 static stocks with dynamic data for you to practice trading with your friends on the application. Those chosen equities are all highly tradable on the real markets. 
								
								<h3> Q: Does the data alive on the application?</h3>
								<p>
									We provide static stocks with dynamic data, whcih means the data of chosen equities is active, and is auto-refershed every 30 seconds. 
								</p>
								
								<h3> Q: How can I make money using the application?</h3>
								<p>
									You can practice trading equities here and we also offers the stop-loss order for you to make money easily!
								</p>
								
								<h3> Q: Does the application have interaction with Facebook friends?</h3>
								<p>
									You can compete with you Facebook friends who can make more money with trading equities on this app! Enjoy your game!
								</p>
							</li>
						</ul>
					</div>	
				</div>
				<div>
					<h4>Send a message</h4>
					<form action="index.html">
						<div>
							<label for="name">Name</label>
							<input type="text" id="name">
							<label for="surname">Surname</label>
							<input type="text" id="surname">
							<label for="email">Email address</label>
							<input type="text" id="email">
						</div>
						<div>
							<label for="message">Message</label>
							<textarea name="message" id="message" cols="30" rows="10"></textarea>
							<input type="submit" id="submit" value="Send message">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="about">
				<h3>About</h3>
				<div>
					<p>
						This website is strictly for E-learning purposes. Non-commercial. 
					</p>
				</div>
			</div>
			<div class="contact">
				<h3>Contact</h3>
				<ul>
					<li>
						<span>Location :</span
						<p>
							&nbsp;Temasek Polytechnic
						</p>
					</li>
					<li>
						<span>Email :</span>
						<p>
							<a href="http://www.freewebsitetemplates.com/misc/contact">customerservice@tradingwithfriends.com.sg</a>
						</p>
					</li>
					<li>
						<span>Contact us :</span>
						<p>
							+65 8654 5265
						</p>
					</li>
				</ul>
			</div>
			<div class="connect">
				<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a> <a href="https://www.facebook.com/tradingwithfriends/" id="facebook">facebook</a> <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">google+</a>
			</div>
			<p class="footnote">
				&#169; Copyright 2013. All rights reserved
			</p>
		</div>
	</div>
</body>
</html>