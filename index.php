<?php
	//echo "Hello php";
	
	if(isset($_POST['submit']))
	{
		//echo "<p>submit button was pressed</p>";
		
		//Check to see title //////////////////////////////////////////////////////////////////////	
		
			$title = $_POST['title'];
			//echo $title;
		
		
		//Check to see if there is a firstname (Required) /////////////////////////////////////////////////////
		if(strlen($_POST['firstname']) > 1)
		{
			//echo "there was a First name";	
			$firstname = $_POST['firstname'];
			//echo $firstname;
		}
		else
		{
			//echo "there was not a First name";
			$errors['firstname'] = "<p>Please enter in a first name</p>";	
			//echo $errors['firstname'];
		}
		
		//Check to see if there is a lastname (Required) ///////////////////////////////////////////////////////
		if(strlen($_POST['lastname']) > 1)
		{
			//echo "there was a last name";	
			$lastname = $_POST['lastname'];
			//echo $lastname;
		}
		else
		{
			//echo "there was not a Last name";
			$errors['lastname'] = "<p>Please enter in a last name</p>";	
		}
		
		//Check to see if there is an email (Required) ////////////////////////////////////////////////////
		if(strlen($_POST['email']) > 1)
		{
			//echo "there was a last name";	
			$email = $_POST['email'];
			
			//Check to see if it is a valid email address
			if(filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$email = $email;	
				//echo $email;
			}
			else
			{
				$errors['email'] = "<p>Please enter in a valid email</p>";
				//echo $errors['email'];
			}
			
		}
		else
		{
			//echo "there was not an email";
			$errors['email'] = "<p>Please enter in an email</p>";	
		}
		
		//Check to see if there is a phone number ///////////////////////////////////////////
		if(strlen($_POST['phone']) > 1)
		{
			//echo "there was a phone";	
			$phone = $_POST['phone'];
			//echo $phone;
		}
		
		//Check to see if there is an address //////////////////////////////////////////////
		if(strlen($_POST['address']) > 1)
		{
			//echo "there was a address";	
			$address = $_POST['address'];
			//echo $address;
		}
		
		//Check to see if there is a city //////////////////////////////////////////////////
		if(strlen($_POST['city']) > 1)
		{
			//echo "there was a city";	
			$city = $_POST['city'];
			//echo $city;
		}
		
		//Check to see if there is a province ///////////////////////////////////////////////////
		
		$chosenPro = $_POST['province'];
		
		switch($_POST['province'])
		{
			case "ab":
				$province = "Alberta";
				//echo $province;
			break;
			
			case "bc":
				$province = "British Columbia";
				//echo $province;
			break;
			
			case "mb":
				$province = "Manitoba";
				//echo $province;
			break;
			
			case "nb":
				$province = "New Brunswick";
				//echo $province;
			break;
			
			case "nf":
				$province = "New Foundland";
				//echo $province;
			break;
			
			case "nwt":
				$province = "North West Territories";
				//echo $province;
			break;
			
			case "ns":
				$province = "Nova Scotia";
				//echo $province;
			break;
			
			case "nvt":
				$province = "Nunavut";
				//echo $province;
			break;
			
			case "on":
				$province = "Ontario";
				//echo $province;
			break;
			
			case "pei":
				$province = "PEI";
				//echo $province;
			break;
			
			case "qc":
				$province = "Quebec";
				//echo $province;
			break;
			
			case "sk":
				$province = "Saskatchewan";
				//echo $province;
			break;
			
			case "yk":
				$province = "Yukon Territories";
				//echo $province;
			break;
			
			default:
				$province = "";
				//echo $province;	
			break;
		}
		
		
		
		//Check to see if there is a postal code //////////////////////////////////////////////////
		if(strlen($_POST['postal']) > 1)
		{
			//echo "there was a city";	
			$postal = $_POST['postal'];
			//echo $postal;
		}
		
		//Check to see if there is a company name //////////////////////////////////////////////////
		if(strlen($_POST['company']) > 1)
		{
			//echo "there was a company";	
			$company = $_POST['company'];
			//echo $company;
		}
		
		//Check to see if there is a company description //////////////////////////////////////////////////
		if(strlen($_POST['nature']) > 1)
		{
			//echo "there was a company description";	
			$nature = $_POST['nature'];
			//echo $nature;
		}
		
		//Check to see if there is a target market //////////////////////////////////////////////////
		if(strlen($_POST['market']) > 1)
		{
			//echo "there was a market";	
			$market = $_POST['market'];
			//echo $market;
		}
		
		//Check to see logo //////////////////////////////////////////////////////////////////////	
			$logo = $_POST['logo'];
			//echo $logo;
			
		//Check to see if there are competitors ///////////////////////////////////////////
		if(strlen($_POST['competitor']) > 1)
		{
			//echo "there was a competitor";	
			$competitor = $_POST['competitor'];
			//echo $competitor;
		}
		
		if(strlen($_POST['comp2']) > 1)
		{
			//echo "there was a competitor";	
			$comp2 = $_POST['comp2'];
			//echo $comp2;
		}
		
		if(strlen($_POST['comp3']) > 1)
		{
			//echo "there was a competitor";	
			$comp3 = $_POST['comp3'];
			//echo $comp3;
		}
		
		if(strlen($_POST['comp4']) > 1)
		{
			//echo "there was a competitor";	
			$comp4 = $_POST['comp4'];
			//echo $comp4;
		}
		
		//Check to see domain //////////////////////////////////////////////////////////////////////	
			$sign = $_POST['sign'];
			//echo $sign;
			
		//Check to see slogan //////////////////////////////////////////////////////////////////////	
			$slogan = $_POST['slogan'];
			//echo $slogan;
			
		//Check to see images //////////////////////////////////////////////////////////////////////	
			$image = $_POST['image'];
			//echo $image;
			
		//Check to see if there is a number of pages ///////////////////////////////////////////////////
		$chosenWeb = $_POST['number'];
		
		switch($_POST['number'])
		{
			case "web1":
				$number = "1";
				//echo $number;
			break;
			
			case "web2":
				$number = "2";
				//echo $number;
			break;
			
			case "web3":
				$number = "3";
				//echo $number;
			break;
			
			case "web4":
				$number = "4";
				//echo $number;
			break;
			
			case "web5":
				$number = "+5";
				//echo $number;
			break;
			
			default:
				$number = "";
				//echo $number;
			break;
			
		}
		
		//Check to see video and audio //////////////////////////////////////////////////////////////////////	
			$domain = $_POST['domain'];
			//echo $domain;
			
		//Check for colors /////////////////////////////////////////////////////////////////////////////////
			if (isset($_POST['red'])) 
			{
				$red = "Red";
				//echo "checked!";
			}
			else
			{
				$red = "";	
			}
			
			if (isset($_POST['blue'])) 
			{
				$blue = "Blue";
				//echo "checked Blue!";
			}
			else
			{
				$blue = "";	
			}
			
			if (isset($_POST['green'])) 
			{
				$green =  "Green";
				//echo "checked Green!";
			}
			else
			{
				$green = "";	
			}
			
			if (isset($_POST['white'])) 
			{	
				$white = "White";
				//echo "checked white!";
			}
			else
			{
				$white = "";	
			}
			
			if (isset($_POST['black'])) 
			{
				$black = "Black";
				//echo "checked Black!";
			}
			else
			{
				$black = "";	
			}
			
			if (isset($_POST['otherColor'])) 
			{
				$otherColor = "Other";
				//echo "checked otherColor!";
			}
			else
			{
				$otherColor = "";	
			}
			
			
		//Check to see completed by //////////////////////////////////////////////////////////////////////	
			
			$complete = str_replace("_", " ", $_POST['complete']);
			
			
			
		//Check to see if there is a budget ///////////////////////////////////////////////////
		$chosenBud = $_POST['budget'];
		
		$budget = str_replace("_", " ", $_POST['budget']);
		
		//Check for Comments //////////////////////////////////////////////////////////////////
		if(strlen($_POST['comments']) > 1)
		{
			//echo "there was a market";	
			$comments = $_POST['comments'];
			//echo $market;
		}
		
		
		if($errors < 1)
		{
				//echo 'Yay no errors';
				include("includes/class.phpmailer.php");
				
				$mail = new PHPMailer;
				
				$mail->setFrom($email, $firstname);
				$mail->addAddress("justiceampofo@gmail.com");     // Add a recipient
				
				
				if (isset($_POST['firefox'])) 
				{
					$mail->addAddress($email);
				}
				
				$mail->addReplyTo($email, $firstname);
				
				$mail->isHTML(true); // Set email format to HTML
				
				$mail->Subject = 'New message from ' . $firstname;
				
				$mail->Body    = "
				
					<h2>Message Details</h2>				
					<p>Name: " . $title . " " . $firstname . " " . $lastname . " </p>
					<p>Email: " . $email .  " </p>
					<p>Phone Number:  {$phone} </p>
					<p>Address:  {$address} </p>
					<p>City:  {$city} </p>
					<p>Province:  {$province} </p>
					<p>Postal Code:  {$postal} </p>
					<p>Company:  {$company} </p>
					<p>The Nature of your company:  {$nature} </p>
					<p>Target market:  {$market} </p>
					<p>Logo:  {$logo} </p>
					<p>Competitor:  {$competitor} </p>
					<p>Competitor 2:  {$comp2} </p>
					<p>Competitor 3:  {$comp3} </p>
					<p>Competitor 4:  {$comp4} </p>
					<p>Domain Name:  {$sign} </p>
					<p>Slogan:  {$slogan} </p>
					<p>Images:  {$image} </p>
					<p>Number of web pages:  {$number} </p>
					<p>Video or Audio:  {$domain} </p>
					<p>Perfered Colors: " . $red . " " . $blue . " " . $green . " " . $white . " " . $black . " " . $otherColor . " </p>
					<p>Deadline for the website:  {$complete} </p>
					<p>Budget:  {$budget} </p>
					<p>Comments:  {$comments} </p>
				
				";
				if(!$mail->send()) {
					echo 'Message could not be sent.';
					echo 'Mailer Error: ' . $mail->ErrorInfo;
				} 
				else
				{
				$success = '<p class="success">Thanks ' . $firstname . '. Your form has been sent successfully. We will be in touch shortly.</p>';
				}
			
		}
		else
		{
			$errorMsg = '<p class="error">Please fill in the areas with the * and red outline.</p>';
		}
	}
	
	
	$page_title = "Form";
	$site_title = "Justice Ampofo";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $page_title; ?> - <?= $site_title; ?></title>

		<!--[if lt IE 9]>
	            <script src="js/html5shiv.js"></script>
	            <script src="js/html5shiv-printshiv.js"></script>
	    <![endif]-->

	    <!-- Adds CSS3 Media Queries to older browsers such as IES+  -->
	    	<script src="js/css3-mediaqueries.js"></script>
	    	<script type="text/javascript" src="js/jquery-2.2.3.js"></script>
			
		
			<!-- My stylesheets -->
	        <link rel="stylesheet" href="css/style.css">

	        <link rel="stylesheet" href="css/media.css">

	        <script src="js/jquery_code.js"></script>
  
	</head>

	<body>


		<?php include("includes/header.inc.php"); ?>


		<div id="wrapper">

			<main>

				<h1>Contact me!</h1>

				<h2>Have an interesting plan or idea?</h2>
				<h2>Fill out the form below!</h2>
                
                <?= $success; ?>
            	<?= $errorMsg; ?>
                
                

				<form id="register" novalidate action="index.php" method="post">

					<fieldset>
						<legend>Personal Information</legend>

						<ul>
							<li class="full_width spread">
								<h3>Title</h3>
								<ul>
									<li>
										<input type="radio" name="title" id="mr." tabindex="10" <?php if (isset($_POST['title']) && $_POST['title']=="Mr.") echo "checked";?> value="Mr.">
										<label for="mr.">Mr.</label>
									</li>

									<li>

										<input type="radio" name="title" id="ms." tabindex="20" <?php if (isset($_POST['title']) && $_POST['title']=="Ms.") echo "checked";?> value="Ms.">
										<label for="ms.">Ms.</label>
									</li>

									<li>

										<input type="radio" name="title" id="mrs." tabindex="30" <?php if (isset($_POST['title']) && $_POST['title']=="Mrs.") echo "checked";?> value="Mrs.">
										<label for="mrs.">Mrs.</label>
									</li>

									<li>
										<input type="radio" name="title" id="dr." tabindex="35" <?php if (isset($_POST['title']) && $_POST['title']=="Dr.") echo "checked";?> value="Dr.">
										<label for="dr.">Dr.</label>
									</li>
								</ul>
							</li>

							<li>
								<label for="firstname"></label>
								<input type="text" name="firstname" id="firstname" tabindex="40" placeholder="First Name" value="<?php echo $firstname; ?>" class="<?php if((isset($_POST['submit']))&&(strlen($_POST['firstname']) < 2)) {echo 'error';} ?>">
							</li>

							<li class="right_side">
								<label for="lastname"></label>
								<input type="text" name="lastname" id="lastname" tabindex="50" placeholder="Last Name" value="<?php echo $lastname; ?>" class="<?php if((isset($_POST['submit']))&&(strlen($_POST['lastname']) < 2)) {echo 'error';} ?>">
							</li>

							<li>
								<label for="email"></label>
								<input type="email" name="email" id="email" tabindex="60" placeholder="Email" value="<?php echo $email; ?>" class="<?php if(((isset($_POST['submit']))&&(strlen($_POST['email']) < 2)) || (isset($_POST['submit'])) && (!filter_var($email, FILTER_VALIDATE_EMAIL)))  {echo 'error';} ?>">
							</li>


							<li class="right_side">
								<label for="phone"></label>
								<input type="tel" name="phone" id="phone" tabindex="70" placeholder="Phone Number" value="<?php echo $phone; ?>">
							</li>

							<li class="full_width extend">
								<label for="address"></label>
								<input type="text" name="address" id="address" tabindex="80" placeholder="Address" value="<?php echo $address; ?>">
							</li>

							<li class="third">
								<label for="city"></label>
								<input type="text" name="city" id="city" tabindex="90" placeholder="City" value="<?php echo $city; ?>">
							</li>

							<li class="third middle">
								<label for="province"></label>
								<select id="province" name="province" tabindex="100">
									<option value=""  selected>Province</option>
									<option value="ab" <?php echo $chosenPro == 'ab' ? 'selected="selected"' : ''; ?>>Alberta</option>
	                                <option value="bc" <?php echo $chosenPro == 'bc' ? 'selected="selected"' : ''; ?>>British Columbia</option>
	                                <option value="mb" <?php echo $chosenPro == 'mb' ? 'selected="selected"' : ''; ?>>Manitoba</option>
	                                <option value="nb" <?php echo $chosenPro == 'nb' ? 'selected="selected"' : ''; ?>>New Brunswick</option>
	                                <option value="nf" <?php echo $chosenPro == 'nf' ? 'selected="selected"' : ''; ?>>New Foundland</option>
	                                <option value="nwt" <?php echo $chosenPro == 'nwt' ? 'selected="selected"' : ''; ?>>North West Territories</option>
	                                <option value="ns" <?php echo $chosenPro == 'ns' ? 'selected="selected"' : ''; ?>>Nova Scotia</option>
	                                <option value="nvt" <?php echo $chosenPro == 'nvt' ? 'selected="selected"' : ''; ?>>Nunavut</option>
	                                <option value="on" <?php echo $chosenPro == 'on' ? 'selected="selected"' : ''; ?>>Ontario</option>
	                                <option value="pei" <?php echo $chosenPro == 'pei' ? 'selected="selected"' : ''; ?>>PEI</option>
	                                <option value="qc" <?php echo $chosenPro == 'qc' ? 'selected="selected"' : ''; ?>>Quebec</option>
	                                <option value="sk" <?php echo $chosenPro == 'sk' ? 'selected="selected"' : ''; ?>>Saskatchewan</option>
	                                <option value="yk" <?php echo $chosenPro == 'yk' ? 'selected="selected"' : ''; ?>>Yukon Territories</option>
								</select>
							</li>

							<li class="third">
								<label for="postal"></label>
								<input type="text" name="postal" id="postal" tabindex="110" placeholder="Postal Code" value="<?php echo $postal; ?>">
							</li>
						</ul>
					</fieldset>

					<fieldset>
						<legend>Bussiness Information</legend>
						<ul>
							<li>
								<label for="company"></label>
								<input type="text" name="company" id="company" tabindex="120" placeholder="Company Name" value="<?php echo $company; ?>">
							</li>

							<li class="full_width textbox">
	                        	<label for="nature">Describe the nature of the company.</label>
	                            <textarea id="nature" name="nature" placeholder="What is your company about?" tabindex="130"><?php echo $nature; ?></textarea>
                        	</li>

                        	<li class="full_width textbox">
	                        	<label for="market">Describe your target market.</label>
	                            <textarea id="market" name="market" placeholder="Target Demographic?" tabindex="140"><?php echo $market; ?></textarea>
                        	</li>

                        	<li class="full_width spread">
								<h3>Do you have a logo?</h3>

								<input type="radio" name="logo" id="yes" tabindex="150" <?php if (isset($_POST['logo']) && $_POST['logo']=="yes") echo "checked";?> value="yes">
								<label for="yes">Yes</label>

								<input type="radio" name="logo" id="no" tabindex="160" <?php if (isset($_POST['logo']) && $_POST['logo']=="no") echo "checked";?> value="no">
								<label for="no">No</label>

							</li>

							<li class="full_width textbox">
								<label for="competitor">Who are your competitors?</label>
								<ul>
									<li>
										<input type="text" name="competitor" id="competitor" tabindex="180" placeholder="Competitor" value="<?php echo $competitor; ?>">
									</li>

									<li class="right_side">
										<input type="text" name="comp2" id="comp2" tabindex="190" placeholder="Competitor" value="<?php echo $comp2; ?>">
									</li>

									<li>
										<input type="text" name="comp3" id="comp3" tabindex="200" placeholder="Competitor" value="<?php echo $comp3; ?>">
									</li>

									<li class="right_side">
										<input type="text" name="comp4" id="comp4" tabindex="210" placeholder="Competitor" value="<?php echo $comp4; ?>">
									</li>
								</ul>
							</li>
						</ul>
					</fieldset>

					<fieldset>
						<legend>Website Information</legend>
						<ul>

							<li class="full_width spread">
								<h3>Do you have a domain name already registered?</h3>

								<input type="radio" name="sign" id="yes1" tabindex="220" <?php if (isset($_POST['sign']) && $_POST['sign']=="yes") echo "checked";?> value="yes" >
								<label for="yes1">Yes</label>

								<input type="radio" name="sign" id="no1" tabindex="230" <?php if (isset($_POST['sign']) && $_POST['sign']=="no") echo "checked";?> value="no">
								<label for="no1">No</label>
							</li>

							<li class="full_width spread">
								<h3>Do you have a slogan or tagline you wish to use?</h3>

								<input type="radio" name="slogan" id="yes2" tabindex="240" <?php if (isset($_POST['slogan']) && $_POST['slogan']=="yes") echo "checked";?> value="yes">
								<label for="yes2">Yes</label>

								<input type="radio" name="slogan" id="no2" tabindex="250" <?php if (isset($_POST['slogan']) && $_POST['slogan']=="no") echo "checked";?> value="no">
								<label for="no2">No</label>

							</li>

							<li class="full_width spread">
								<h3>Do you have any images that you would like to put on the website (and you have the rights/permission to use them)?</h3>

								<input type="radio" name="image" id="yes3" tabindex="270" <?php if (isset($_POST['image']) && $_POST['image']=="yes") echo "checked";?> value="yes">
								<label for="yes3">Yes</label>

								<input type="radio" name="image" id="no3" tabindex="280" <?php if (isset($_POST['image']) && $_POST['image']=="no") echo "checked";?> value="no">
								<label for="no3">No</label>

							</li>

							<li class="full_width textbox">
								<label for="number">How many webpages will the site have?</label>
								<select id="number" name="number" tabindex="300">
									<option value="" selected>Number of webpages?</option>
									<option value="web1" <?php echo $chosenWeb == 'web1' ? 'selected="selected"' : ''; ?>>1</option>
	                                <option value="web2" <?php echo $chosenWeb == 'web2' ? 'selected="selected"' : ''; ?>>2</option>
	                                <option value="web3" <?php echo $chosenWeb == 'web3' ? 'selected="selected"' : ''; ?>>3</option>
	                                <option value="web4" <?php echo $chosenWeb == 'web4' ? 'selected="selected"' : ''; ?>>4</option>
	                                <option value="web5" <?php echo $chosenWeb == 'web5' ? 'selected="selected"' : ''; ?>>+5</option>
								</select>
							</li>

							<li class="full_width spread">
								<h3>Will any videos or audio be a part of the website?</h3>

								<input type="radio" name="domain" id="yes4" tabindex="310" <?php if (isset($_POST['domain']) && $_POST['domain']=="yes") echo "checked";?> value="yes">
								<label for="yes4">Yes</label>

								<input type="radio" name="domain" id="no4" tabindex="320" <?php if (isset($_POST['domain']) && $_POST['domain']=="no") echo "checked";?> value="no">
								<label for="no4">No</label>
							</li>

							<li class="full_width spread">
								<h3>What are your perfered colors?</h3>

								<ul>

									<li>
										<input type="checkbox" id="red" name="red" tabindex="340" <?php echo (isset($_POST['red'])?'checked="checked"':'') ?>>
			                            <label for="red">Red</label>
			                        </li>
			                        
			                        <li>
			                            <input type="checkbox" id="blue" name="blue" tabindex="350" <?php echo (isset($_POST['blue'])?'checked="checked"':'') ?>>
			                            <label for="blue">Blue</label>
			                        </li>

			                        <li>
			                            <input type="checkbox" id="green" name="green" tabindex="360" <?php echo (isset($_POST['green'])?'checked="checked"':'') ?>>
			                            <label for="green">Green</label>
			                        </li>
			                            
			                        <li>
			                            <input type="checkbox" id="white" name="white" tabindex="370" <?php echo (isset($_POST['white'])?'checked="checked"':'') ?>>
			                            <label for="white">White</label>
			                        </li>

			                        <li>
			                            <input type="checkbox" id="black" name="black" tabindex="380" <?php echo (isset($_POST['black'])?'checked="checked"':'') ?>>
			                            <label for="black">Black</label>
			                        </li>

			                        <li>
			                            <input type="checkbox" id="otherColor" name="otherColor" tabindex="390" <?php echo (isset($_POST['otherColor'])?'checked="checked"':'') ?>>
			                            <label for="otherColor">Other</label>
			                        </li>

			                    </ul>
							</li>

							<li class="full_width spread">
								<h3>When do you need the website completed by?</h3>

								<ul>

									<li>
										<input type="radio" name="complete" id="2weeks" tabindex="400" <?php if (isset($_POST['complete']) && $_POST['complete']=="2_weeks_or_less") echo "checked";?> value="2_weeks_or_less">
										<label for="2weeks">2 weeks or less</label>
									</li>

									<li>
										<input type="radio" name="complete" id="3weeks" tabindex="410" <?php if (isset($_POST['complete']) && $_POST['complete']=="3_to_4_weeks") echo "checked";?> value="3_to_4_weeks">
										<label for="3weeks">3 to 4 weeks</label>
									</li>

									<li>
										<input type="radio" name="complete" id="5weeks" tabindex="420" <?php if (isset($_POST['complete']) && $_POST['complete']=="5_to_8_weeks") echo "checked";?> value="5_to_8_weeks">
										<label for="5weeks">5 to 8 weeks</label>
									</li>

									<li>
										<input type="radio" name="complete" id="2months" tabindex="430" <?php if (isset($_POST['complete']) && $_POST['complete']=="2_months_or_more") echo "checked";?> value="2_months_or_more">
										<label for="2months">2 months or more</label>
									</li>

								</ul>
							</li>

							<li class="full_width textbox">
								<label for="budget">What is your budget for the website?</label>
								<select id="budget" name="budget" tabindex="440">
									<option value=""  selected>budget?</option>
									<option value="$250_-_$500" <?php echo $chosenBud == '$250_-_$500' ? 'selected="selected"' : ''; ?> >$250 - $500</option>
	                                <option value="$1000_-_$1500" <?php echo $chosenBud == '$1000_-_$1500' ? 'selected="selected"' : ''; ?>>$1000 - $1500</option>
	                                <option value="$2000_-_$2500" <?php echo $chosenBud == '$2000_-_$2500' ? 'selected="selected"' : ''; ?>>$2000 - $2500</option>
	                                <option value="$3000_-_$3500" <?php echo $chosenBud == '$3000_-_$3500' ? 'selected="selected"' : ''; ?>>$3000 - $3500</option>
								</select>
							</li>
                            
                            <li class="full_width textbox">
	                        	<label for="comments">Additional Comments</label>
	                            <textarea id="comments" name="comments" placeholder="Comments" tabindex="445"><?php echo $comments; ?></textarea>
                        	</li>

						</ul>
					</fieldset>

					<fieldset class="last">
						<ul>

							<li class="full_width center">
                            	<input type="checkbox" id="firefox" name="firefox" tabindex="450" <?php echo (isset($_POST['firefox'])?'checked="checked"':'') ?>>
                            	<label for="firefox">Send a copy to my own email</label>
                        	</li>

							<li class="full_width center">
								<input type="submit" value="Submit" tabindex="1000" id="submit" name="submit">
							</li>
						</ul>
					</fieldset>

				</form>

			</main>
		</div>

		<?php include("includes/footer.inc.php"); ?>

	</body>
</html>