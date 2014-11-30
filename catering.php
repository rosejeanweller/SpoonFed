<?php include ('includes/tertiaryHeader.php'); ?>
<body>
	<div id=header>
		<a href="index.php"><img id="logo" src="images/spoonFedlogo.png" alt="Logo"/></a>
        <img id="toggle" src="images/img-toggle-black.png" alt="toggle" width="25" height="25"/>
	</div>

	<?php include ('includes/nav.php'); ?>
    
    
	<div id="banner"><h1>Catering</h1>
     	<div class="flexslider">
			<ul class="slides">
				<li><img alt="tent" src="RFimages/orangeTent.jpg"/></li>
				<li><img alt="tree" src="RFimages/treeSetting.jpg"/></li>
				<li><img alt="cake" src="images/weddingCake.jpg"/></li></ul>
		</div>
     </div>   
        
    <div id="content">
    
    <section class="column">
        <h2>Consultation</h2>
        <a href="#"><img src="RFimages/fryingPan.jpg" alt="fryingPans"></a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. 

Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. </p>
	</section> 

    <section class="column">
    <h2>Sample Menus</h2>
    <a href="#"><img src="RFimages/caprese.jpg" alt="caprese"></a>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. 

Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa.</p>
	</section>
   
   
   	<section class="column">
   	<h2>Venues</h2>
   	<a href="#"><img src="RFimages/outdoorVenue.jpg" alt="outdoors"></a>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. 

Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa.</p>
</section>

</div>
    
    <div id="footer">&copy; 2013, All Rights Reserved RoseJean Weller www.rosejeanweller.com~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> <a href="http://rosejeanweller.com/portal/disclaimer.php">Disclaimer</a>
    </div>
    
<!-- Start FlexSlider Code, place just before closing body tag --> 

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 


<!-- Initialize the slider on the div we named "flexslider" --> 
<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
       // animation: "slide", // set animation to slide
        smoothHeight: false // auto-adjust to fit the height of images
      });
    });
</script>     
</body>
</html>