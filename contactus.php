<?php include ('includes/contactHeader.php'); ?>


<body>
	<div id=header>
	       <a href="index.php"><img id="logo" src="images/spoonFedlogo.png" alt="Logo"/></a>
       <img id="toggle" src="images/img-toggle-black.png" alt="toggle" width="25" height="25"/>
	</div>
    
<?php include ('includes/nav.php'); ?>

	<div id="banner"><img src="images/rollinghills.png" alt="hills"/>
    </div>
        

<div id="content">
    
    <div id="article">
        <h2><a href="contactus.php">Contact Us</a></h2>
        <!--contact begins here, thank you MIKE SINKULA sccc.premiumdw.com for the resources-->

	<div id="contact"
    	<?php
    
    if ( isset ($_POST['submit']) ) { // if the submit button is clicked...
    
        $mailMesage = ("{$_POST['name']} {$_POST['email']} wrote: \n\n{$_POST['message']}"); // message of the email
        
        $mailSubject = "{$_POST['subject']}"; // subject of the email
        
        $mailRecipient = "rwelle02@seattlecentral.edu"; // destination email address
        
        $mailSender = "From: {$_POST['email']}"; // the mail sender
        
        mail ($mailRecipient, $mailSubject , $mailMesage, $mailSender); // function to send the email
        
        print ("<p>Thank you for contacting SpoonFed Catering, <strong>{$_POST['name']}</strong>!</p>\n"); // notice that thanks the user
    
    }
    
    ?>
    
    <!-- Begin Contact Form -->
    <form action="contactus.php" method="post" name="contact">
    <label for="name">Name:</label>
    <input name="name" type="text" required>
    <label for="email">Email:</label>
    <input name="email" type="email" required>
    <label for="subject">Subject:</label>
    <select name="subject">
      <option value="General Inquiry" selected="selected">General Inquiry</option>
      <option value="Specific Inquiry">Specific Inquiry</option>
      <option value="Stoopid Inquiry">Stoopid Inquiry</option>
    </select>
    <label for="message">Message:</label>
    <textarea name="message" cols="40" rows="5" required></textarea>
    <input name="submit" type="submit" value="Submit Message">
    </form>
   </div>
   
   </div>
</div> 

    
    <div id="footer">&copy; 2013, All Rights Reserved RoseJean Weller www.rosejeanweller.com~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> <a href="http://rosejeanweller.com/portal/disclaimer.php">Disclaimer</a>
    </div>
    
</body>
</html>