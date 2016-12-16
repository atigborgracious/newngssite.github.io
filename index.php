<?php
if($_POST['submit']){
     if(!$_POST['name']){
	 $error="<br/>-Please enter your name";
	 }
	 
	 if(!$_POST['email']){
	 $error.="<br/>-Please enter your email";
	 }
	 
	  if(!$_POST['phone']){
	 $error.="<br/>-Please enter your phone number";
	 }
	 
	 if(!$_POST['message']){
	 $error.="-Please enter your message";
	 }
	 
	 if($error){
	  $result='<div class="alert alert-danger" role="alert"><strong>There is an error</strong> please correct the following: '.$error.'</div>';
	 }
	 
else {
    mail("solushing@gmail.com","Contact Message", 
	"Name: ".$_POST['name']."Email: ".$_POST['email']
	."Phone: ".$_POST['phone']."Message: ".$_POST['message']);
	
	{
	$result='<div class="alert alert-success" role="alert">Thank you, We will be in touch with you shortly</div>';
	}
}


}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Xact</title>
 <link rel="icon" type="image/png" href="img/favicon.png">
	
	
    <!-- Bootstrap -->
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/animate.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/cobox.css" rel="stylesheet" type="text/css" media="all"/>

	<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- /fonts -->
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	
	<!--EaseIn-->
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
		
<script src="js/flip.js"></script>	

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<!--FlexSlider-->
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!--End-slider-script-->
<link href='//fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<!--EndOfEase-->
 
  </head>
  <body> <!--Home-->
  <section class="anchor" id="home"></section>
   <div class="bg-image2">
  <div class ="container centered">

<div class= "thumbnail" style=" border:4px; margin:0 auto ; background-color:transparent; ">
<img class="animated wow slideInRight tumb" data-wow-delay=".5s" src="img/welcome.png" style= "margin:0 auto;" /> 
</div>
	 

  
  </div> 
<!--<h5 style="color:white; font-size:150%; text-align:center;">
WILL PLACE A WELCOME TEXT HERE....
</h5>-->
  </div>
 <!--EndOfHome-->
 <div class="lOgo" >
<nav class = "navbar navbar-default" data-spy="affix" data-offset-top="700" style="border-bottom:3px solid #fa7600; ">
   
   <div class = "navbar-header">
      <button type = "button" class = "navbar-toggle" 
         data-toggle = "collapse" data-target = "#example-navbar-collapse">
         <span class = "sr-only">Toggle navigation</span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
      </button>
		
      <a class="navbar-brand"><img src="img/logo.png" /></a>
   </div>
   
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
	
      <ul class = "nav navbar-nav navbar-right" >
         <li class="hm">
	<a href="#home" style="color:#313232;font-size:16px;">HOME</a>
		 </li>
		 <li class="hm" >
		 <a  href="#aboutUs" style="color:#313232;font-size:16px;">ABOUT</a>
		 </li>
		 <li class="hm" style="color:white;">
		 <a href="#ourServices" style="color:#313232; font-size:16px;">SERVICES</a>
		 </li>
		 
		  <li class="hm">
		 <a href="#port" style="color:#313232;font-size:16px;">GALLERY</a>
		 </li>
		 <li class="hm" >
		 <a href="#contactUs" style="color:#313232;font-size:16px;">CONTACT</a>
		 </li>
      </ul>
   </div>
   
</nav>
 
 
    </div><!--EndOfLogoClass-->
<!--About-->
<section class="anchor" id="aboutUs"></section>
<div style=" background-color:#3a79d7 ; margin-top:-20px; padding-top:0; padding-bottom:8%;" >
<div class="container">

<div class="row centered">
<div class= "thumbnail" style="background-color:#3a79d7; border:4px;">
<img class="animated wow slideInRight" data-wow-delay=".5s" src="images/101.png" style="width:120px; height:120px;" /> 
</div>
	  </div>	  
	  


<div class="row centered">
<div class= "thumbnail" style="background-color:#3a79d7; border:4px;">
<img class="animated wow slideInRight" data-wow-delay=".5s" src="images/aboutUs.png" style="" /> 
</div>
	  </div>
	  


<div class="row centered intro-info animated wow zoomIn "  data-wow-delay=".5s">
<p class="intro-info" >
XACT is a company with a passion for evolving beauty in
	  state of the art interior and exterior setups with an
	  objective to provide exquisite comfort as well as fit 
	  customer interests and requirements. So whether it is 
	  an exhibition tent or kiosk, or if it’s an indoor set-up, 
	  XACT is a one-stop company, poised to cater for your 
	  needs with our best wood working machines, Industrial
	  Paint Booth and our well-experienced carpenters.	
</p>
</div>

<div class="row centered">
<h4 class="intro-info" style="color:#dfdfdf; font-size:150%; text-align:center;">Our Commitment</h4>
	  </div>

<div class="row centered intro-info animated wow zoomIn "  data-wow-delay=".5s">
	 <p class="intro-info" >
As service contractors, XACT Technical Services LLC is committed to providing
our customers with complete one-stop turnkey solutions in interior fit-out and
exhibition constructions. We work precisely to budget and to time and produce
quality work which gives us a heads up in fine service delivery, customized
solutions and successful completion to our valuable Client. Sustainability and
quality remains at the heart of everything we do. Imperatively, we embrace
environmental principles and encourage our clients to do the same.
	  	
</p>
</div>

<div class="row centered">
<h4 class="intro-info" style="color:#dfdfdf; font-size:150%; text-align:center;">Present Progress of Venture</h4>
	  </div>	  

	 <div class="row centered intro-info animated wow zoomIn "  data-wow-delay=".5s">
	 <p class="intro-info" >
A strong and progressive company is known by its track record and progress. At
XACT, we have a Factory Unit Of Around 5000 Square. Feet floor Area in Al Quoz
(Industrial Hub of Dubai) and all the Best Wood Working Machines As Per Our Requirement.
We Also Have An Industrial Paint Booth, Well Experienced Carpenters having
Good Craftsmanship in Wooden Joinery Works, Well Experienced Painters,
Having A Good Hand On Interiors and Wooden Paintings and Well Experienced
Electrician Having Technical Knowledge just to mention a few of our landmarks.
	  	
</p>
</div> 

	  
</div>
</div>
<!--EndOfAbout-->
<!--Service-->
<section class="anchor" id="ourServices"></section>
<div style=" background-color:#2f2f2f ; margin-top:-20px; padding-top:0; padding-bottom:8%;" >
<div class="container">

  
<div class="row centered">
<div class= "thumbnail" style="background-color:#2f2f2f; border:4px;">
<img class="animated wow slideInRight" data-wow-delay=".5s" src="images/102.png" style="width:120px; height:120px;" /> 
</div>
	  </div>

<div class="row centered">
<div class= "thumbnail" style="background-color:#2f2f2f; border:4px;">
<img class="animated wow slideInRight" data-wow-delay=".5s" src="images/services.png" style="padding-top:25px;" /> 
</div>
	  </div>	  

<div class="row animated wow slideInRight" data-wow-delay=".6s">
<div class="col-sm-4 intro-info">
<div class="thumbnail centered " style= "background-color:#2f2f2f; border:4px;" >
	   <img src ="images/exhbi.png" style="width:150px;height:150px;"/>
       </div>

 <h4 class="intro-info" style="color:#dfdfdf; font-size:150%; text-align:center;">Exhibition Stand Setup</h4>
 
 <div id="flip">
 <button type=button class ="btn btn-sm btn-success" style="color:white; ">
	 read more..
	 </button>
 </div>
	  <div id="panel">
	  <p>
	  Creatively designed product stand layout to fit its purpose and
	  make your ideas stand out at exhibitions and catch the eyes of
	  your target audience. We put in high regard the need to expressly
	  show off your products in attractive ways that will appeal to 
	  your target audience.
	  </p>
     </div>	  
</div>

<div class="col-sm-4">
<div class="thumbnail" style= "background-color:#2f2f2f; border:4px;" >
	   <img src ="images/events.png" style="width:150px;height:150px;"/>
       </div>

 <h4 class="intro-info" style="color:#dfdfdf; font-size:150%; text-align:center;">Events and Trade Shows</h4>
	  <div id="flip2">
	  <button type=button class ="btn btn-sm btn-success" style="color:white; ">
	 read more..
	 </button>
	  </div>
	  <div id="panel2">
	  <p >
	  Garnish your events and trade shows with the right colors and 
	  architectural makeup that will please your guests and draw the 
	  attention of your potential customers. We make sure your event 
	  or show stand stands out from the rest.
	  </p>
</div>	  
</div>

<div class="col-sm-4">
<div class="thumbnail" style= "background-color:#2f2f2f; border:4px;" >
	   <img src ="images/kio.png" style="width:150px;height:150px;"/>
       </div>

 <h4 class="intro-info" style="color:#dfdfdf; font-size:150%; text-align:center;">Promotional Stands and Kiosk</h4>
	  <div id="flip3">
	  <button type=button class ="btn btn-sm btn-success" style="color:white; ">
	 read more..
	 </button>
	  </div>
	  <div id="panel3">
	  <p >
	   With state of the art materials, we construct your kiosks and
	  promotional stand with precision. We place in mind your preference
	  and it guides us towards providing a comfortable place where you
	  can feel comfortable while you work or attend to your customers.
	  </p>
</div>	  
</div>

</div>	

<div class="row centered animated wow slideInRight" data-wow-delay=".6s">
<div class="col-sm-4">
<div class="thumbnail" style= "background-color:#2f2f2f; border:4px;" >
	   <img src ="images/intre.png" style="width:150px;height:150px;"/>
       </div>

 <h4 class="intro-info" style="color:#dfdfdf; font-size:150%; text-align:center;">Interior Fit-Out Works</h4>
	  <div id="flip4">
	  <button type=button class ="btn btn-sm btn-success" style="color:white; ">
	 read more..
	 </button>
	  </div>
	  <div id="panel4">
	  <p>
	A luxurious interior outfit that speaks class is our expertise. 
	   Experience true convenience and comfort with our well-designed 
	   and structured architecture. We use the perfect materials to 
	   make the necessary furniture’s and infrastructure to build your
	   interior ideas.
	  </p>
</div>	  
</div>

<div class="col-sm-4">
<div class="thumbnail" style= "background-color:#2f2f2f; border:4px;" >
	   <img src ="images/wood.png" style="width:150px;height:150px;"/>
       </div>

 <h4 class="intro-info" style="color:#dfdfdf; font-size:150%; text-align:center;">Wooden Joinery Works</h4>
	  <div id="flip5">
	  <button type=button class ="btn btn-sm btn-success" style="color:white; ">
	 read more..
	 </button>
	  </div>
	  <div id="panel5">
	  <p >
	   We satisfy our customers by bringing their mental pictures into
	   physical outfits with our best wood working machines built to 
	   fit requirements, Rich Industrial Paint Booth and our 
	   well-experienced carpenters who are dedicated and have the 
	   required technical knowhow’s and rank amongst the best.
	  </p>
</div>	  
</div>

<div class="col-sm-4">
<div class="thumbnail" style= "background-color:#2f2f2f; border:4px;" >
	   <img src ="images/graph.png" style="width:150px; height:150px;"/>
       </div>

 <h4 class="intro-info"style="color:#dfdfdf;  text-align:center;">Graphics</h4>
<div id="flip6">
	  <button type=button class ="btn btn-sm btn-success" style="color:white; ">
	 read more..
	 </button>
	  </div>
    <div id="panel6">	  
	 <p >
	  We satisfy your visual requirements with our clean creative 
	   graphical works. We deliver compelling representations of your 
	   company through our distinctive designs. We work with all modern
	   software’s and pay rapt attention to details so be able to convey
	   your ideas and brands in the best of ways.
	  </p>	
	 </div> 
</div>

</div>	    
<br/><br/>
<div class="row centered">
<h4 class="intro-info" style="color:#dfdfdf; font-size:150%; text-align:center;">Additional Services</h4>
	  </div>

<div class="row centered intro-info animated wow zoomIn "  data-wow-delay=".5s">
	 <p class="intro-info" >
XACT, being an eclectic modern revolutionary multimedia company, offers other
wide range of services such as, Graphic design (Logo, Business Card, Brochure,
Banner, Flyer and Poster), Web Design and Development, complete and
creative documentation of your events in Pictures and Videos, Corporate
Presentations, Explainer videos (Product/Services), Motion
Designs/Graphics (infomercial, Logo Animation), 3D Modeling, Texturing and
Architectural visualization.	  	
</p>
</div>


</div>
</div>
<!--EndOfService-->

<!--Gallery-->
<section class="anchor" id="port"></section>
<div style=" background-color:#3a79d7 ;">
<div class="container" >
	<br/>
		  
<div class="row centered">
<div class= "thumbnail" style="background-color:#3a79d7; border:4px;">
<img class="animated wow slideInRight" data-wow-delay=".5s" src="images/103.png" style="width:120px; height:120px;" /> 
</div>
	  </div>	  


	<div class="row centered">
<div class= "thumbnail" style="background-color:#3a79d7; border:4px;">
<img class="animated wow slideInRight" data-wow-delay=".5s" src="images/gallery.png" style="padding-top:25px;" /> 
</div>
	  </div>	  
	  
	  
	<div class="row centered">
	<section class="our-gallery centered" id="gallery" >	
		<a href="img/photo1.jpg" title="Exhibitions"><img src="img/photo1.jpg" alt="example-1" class="img-responsive"></a> 
		<a href="img/photo2.jpg" title="Exhibitions"><img src="img/photo2.jpg" alt="example-2" class="img-responsive"></a> 
		<a href="img/photo3.jpg" title="Exhibitions"><img src="img/photo3.jpg" alt="example-3" class="img-responsive"></a>
		<a href="img/photo4.jpg" title="Exhibitions"><img src="img/photo4.jpg" alt="example-1" class="img-responsive"></a> 
		<a href="img/photo5.jpg" title="Exhibitions"><img src="img/photo5.jpg" alt="example-2" class="img-responsive"></a> 
		<a href="img/photo6.jpg" title="Exhibitions"><img src="img/photo6.jpg" alt="example-3" class="img-responsive"></a>
		<a href="img/photo7.jpg" title="Exhibitions"><img src="img/photo7.jpg" alt="example-1" class="img-responsive"></a> 
		<a href="img/photo8.jpg" title="Exhibitions"><img src="img/photo8.jpg" alt="example-2" class="img-responsive"></a> 
		<a href="img/photo9.jpg" title="Exhibitions"><img src="img/photo9.jpg" alt="example-3" class="img-responsive"></a>
		<a href="img/photo10.jpg" title="Interior"><img src="img/photo10.jpg" alt="example-1" class="img-responsive"></a> 
		<a href="img/photo11.jpg" title="Interior"><img src="img/photo11.jpg" alt="example-2" class="img-responsive"></a> 
		<a href="img/photo12.jpg" title="Interior"><img src="img/photo12.jpg" alt="example-3" class="img-responsive"></a>
        <a href="img/photo13.jpg" title="Interior"><img src="img/photo13.jpg" alt="example-1" class="img-responsive"></a> 
		<a href="img/photo14.jpg" title="Interior"><img src="img/photo14.jpg" alt="example-1" class="img-responsive"></a> 
		<a href="img/photo15.jpg" title="Interior"><img src="img/photo15.jpg" alt="example-1" class="img-responsive"></a>
		<a href="img/photo16.jpg" title="Interior"><img src="img/photo16.jpg" alt="example-1" class="img-responsive"></a> 
		<a href="img/photo17.jpg" title="Interior"><img src="img/photo17.jpg" alt="example-1" class="img-responsive"></a> 
		<a href="img/photo18.jpg" title="Interior"><img src="img/photo18.jpg" alt="example-1" class="img-responsive"></a>
		<a href="img/photo19.jpg" title="Interior"><img src="img/photo19.jpg" alt="example-1" class="img-responsive"></a> 
		<a href="img/photo20.jpg" title="Interior"><img src="img/photo20.jpg" alt="example-2" class="img-responsive"></a> 
		<a href="img/photo21.jpg" title="Interior"><img src="img/photo21.jpg" alt="example-3" class="img-responsive"></a>
		<a href="img/photo22.jpg" title="Interior"><img src="img/photo22.jpg" alt="example-1" class="img-responsive"></a> 
		<a href="img/photo23.jpg" title="Interior"><img src="img/photo23.jpg" alt="example-2" class="img-responsive"></a> 
		<a href="img/photo24.jpg" title="Interior"><img src="img/photo24.jpg" alt="example-3" class="img-responsive"></a>
		<a href="img/photo25.jpg" title="Interior"><img src="img/photo25.jpg" alt="example-3" class="img-responsive"></a>
		<a href="img/photo26.jpg" title="Interior"><img src="img/photo26.jpg" alt="example-1" class="img-responsive"></a> 
		<a href="img/photo27.jpg" title="Events"><img src="img/photo27.jpg" alt="example-2" class="img-responsive"></a> 
		<a href="img/photo28.jpg" title="Events"><img src="img/photo28.jpg" alt="example-3" class="img-responsive"></a>
		<a href="img/photo29.jpg" title="Events"><img src="img/photo29.jpg" alt="example-1" class="img-responsive"></a> 
		<a href="img/photo32.jpg" title="Events"><img src="img/photo32.jpg" alt="example-2" class="img-responsive"></a> 
		<a href="img/photo33.jpg" title="Events"><img src="img/photo33.jpg" alt="example-3" class="img-responsive"></a>
		<a href="img/photo34.jpg" title="Events"><img src="img/photo34.jpg" alt="example-1" class="img-responsive"></a> 
		<a href="img/photo35.jpg" title="Events"><img src="img/photo35.jpg" alt="example-2" class="img-responsive"></a> 

		<a href="img/photo30.jpg" title="Kiosk"><img src="img/photo30.jpg" alt="example-2" class="img-responsive"></a> 
		<a href="img/photo31.jpg" title="Kiosk"><img src="img/photo31.jpg" alt="example-2" class="img-responsive"></a> 
		</div>	
		
</section>
	</div>
</div>	
<!--EndOfGallery-->

<!--OurTeam--> <!--
<section class="anchor" id="ourTeam"></section>
<div style=" background-color:#3a79d7 ; margin-top:-20px; padding-top:0; padding-bottom:8%;" >
<div class="container">
<div class="row centered">
<div class= "thumbnail" style="background-color:#3a79d7; border:4px;">
<img class="animated wow zoomIn" data-wow-delay=".5s" src="img/228.png" style="width:110px; height:110px; margin-top:20px;" /> 
	  </div>
	  </div>
  
  <div class="row centered">
<h3 class= "centered animated wow zoomIn" data-wow-delay=".5s">
Our Team</h3>
	  </div>
	  
<div class="row">
	<div class="col-sm-3 centered animated wow zoomIn" data-wow-delay=".9s">
   <div class="thumbnail" style= "background-color:#3a79d7; border:4px;" >
   <img src="img/30.png" style="width:160px; height:160px;"alt="">
   </div>
   <p class="intro-info">
   Having Studied Design with Expertise in Project Management
	  for Around 6 Years, Looks Into the Site Operations
	   Having Studied Design with Expertise in Project Management
   </p>
	  </div>
    <div class="col-sm-3 animated wow zoomIn" data-wow-delay=".9s">
	<div class="thumbnail" style= "background-color:#3a79d7; border:4px;" >
	<img src="img/30.png" style="width:160px; height:160px;"alt="">
   </div>
   <p class="intro-info">
   Having Studied Design with Expertise in Project Management
	  for Around 6 Years, Looks Into the Site Operations
	   Having Studied Design with Expertise in Project Management
   </p>
	  </div>
    <div class="col-sm-3 animated wow slideInRight" data-wow-delay=".9s">
	<div class="thumbnail" style= "background-color:#3a79d7; border:4px;" >
	<img src="img/30.png" style="width:160px; height:160px;"alt="">
   </div>
   <p class="intro-info">
   Having Studied Design with Expertise in Project Management
	  for Around 6 Years, Looks Into the Site Operations
	   Having Studied Design with Expertise in Project Management
   </p>
	  </div>
   <div class="col-sm-3 animated wow slideInRight" data-wow-delay=".9s">
   <div class="thumbnail" style= "background-color:#3a79d7; border:4px;" >
   <img src="img/30.png" style="width:160px; height:160px;"alt="">
   </div>
   <p class="intro-info">
   Having Studied Design with Expertise in Project Management
	  for Around 6 Years, Looks Into the Site Operations
	   Having Studied Design with Expertise in Project Management
   </p>
	  </div>	  
	</div>		  
	  
</div>
</div> -->
<!--EndOfOurTeam-->	

<!--ContactUs-->

<!--EndOfContact-->

<!--Form2--> 

<section class="anchor" id="contactUs"></section>
<div style=" background-color:#2f2f2f ; margin-top:-20px; padding-top:0; padding-bottom:8%;" >
<div id="footerwrap" class="container">



<div class="row centered">
<div class= "thumbnail" style="background-color:#2f2f2f; border:4px;">
<img class="animated wow slideInRight" data-wow-delay=".5s" src="images/contact.png" style="padding-top:25px;" /> 
</div>
	  </div>
	  
<div class="row centered">
<div class= "thumbnail" style="background-color:#2f2f2f; border:4px;">
<img class="animated wow slideInRight" data-wow-delay=".5s" src="images/104.png" style="width:120px; height:120px;" /> 
</div>
	  </div>	  
	  
<div class="row centered animated wow slideInLeft" data-wow-delay=".5s">	
<div class="col-md-6 contact-info centered" style="margin-top:-50px;">
<form class="intro-info" style="border:none; " name="contactform" method="post" action="send_form_email.php">
 
<table width="100%" style="color:white; border:none;" >
 
<tr style="border:none;">
 <td valign="top" style="border:none;">
 <label for="first_name">First Name *</label>
 </td>
</tr>
 
<tr style="border:none;">
 <td valign="top" style="border:none;">
 <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<br/>
 
<tr>
 <td valign="top" style="border:none;">
 <label for="last_name">Last Name *</label>
 </td>
</tr>
 
<tr>
 <td valign="top" style="border:none;">
 <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<br/>
 
<tr>
 <td valign="top" style="border:none;">
 <label for="email">Email Address *</label>
 </td>
</tr>

<tr> 
 <td valign="top" style="border:none;">
<input  type="text" name="email" maxlength="50" size="30" >
</td>
</tr>
 
<br/> 
<tr>
 <td valign="top" style="border:none;">
 <label for="telephone">Telephone Number</label>
 </td>
</tr>

<tr> 
 <td valign="top" style="border:none;">
 <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>

<br/> 
<tr>
 <td valign="top" style="border:none;">
 <label for="comments">Comments *</label>
 </td>
</tr>

<tr> 
 <td valign="top" style="border:none;">
 <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
 
<tr style="border:none;" class="send">
 <td colspan="2" style="text-align:center;border:none;">
 <input type="submit" value="Submit"> 
 </td>
</tr>
 
</table>
 
</form> 
</div>

<div class="col-md-1">
</div>

<div class="col-md-5 animated wow slideInRight" data-wow-delay=".5s"><!--Address-->
<address><strong><br/>Address</strong></address>
			<address>
				XACT Technical Services L.L.C<br>
				P.O Box: 393302 <br>
				Dubai<br>
				UAE<br>
				<abbr title="Phone"></abbr>+971 4 3383 225
			</address>
			<address>
				<strong>Mail To Us</strong><br>
		
		<a href= "mailto:info@xact.ae">info@xact.ae</a>
			</address>
</div><!--Address-->  


</div>
</div></div>
<!--EndOfForm2-->
<!--NewForm-->
<section id ="contact">
<div class ="container">
<div class ="row">
<h3>Contact Us</h3>
<?php echo $result;?>
<form method="post" role="form">
   <div class="form-group">
    <input type="text" name="name" class ="form-control" placeholder ="please enter your name">
   </div>
   <div class="form-group">
    <input type="email" name="email" class ="form-control" placeholder ="please enter your email">
   </div>
    <div class="form-group">
    <input type="text" name="phone" class ="form-control" placeholder ="please enter your phone number">
   </div>
   <div class="form-group">
    <textarea name="message" maxlength="1000" cols="25" rows="6" class ="form-control" placeholder ="please enter your name"></textarea>
   </div>
   <div align="center">
    <input type="submit" name="submit" class ="btn btn-default" value="send message">
   </div>
   
</form>
</div>
</div>
</section>
<!--EndOfNewForm-->
<div id="copyright">
	<div class="container">
		<p>© 2016 Gerizim All Rights Reserved.</p>
	</div>
</div>




	  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
<!-- js for gallery -->	
<script src="js/cobox.js" type="text/javascript"></script>
<!-- /js for gallery -->	

<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

<script> 
$(document).ready(function(){
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
});
</script>

<script> 
$(document).ready(function(){
    $("#flip3").click(function(){
        $("#panel3").slideToggle("slow");
    });
});
</script>

<script> 
$(document).ready(function(){
    $("#flip4").click(function(){
        $("#panel4").slideToggle("slow");
    });
});
</script>

<script> 
$(document).ready(function(){
    $("#flip5").click(function(){
        $("#panel5").slideToggle("slow");
    });
});
</script>

<script> 
$(document).ready(function(){
    $("#flip6").click(function(){
        $("#panel6").slideToggle("slow");
    });
});
</script>

  </body>
</html>