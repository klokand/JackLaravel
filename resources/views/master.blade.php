<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{$pageInfor->company_name}}</title>
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="css/font.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" media="screen" type="text/css">
<link rel="stylesheet" href="sidr/stylesheets/jquery.sidr.dark.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="sidr/jquery.sidr.min.js"></script>
<script src="js/jquery.scrollmagic.min.js"></script>
</head>

<body>
<div class="header">
  <div class="container">
    <div class="logo-menu">
      <div class="logo">
        <h1><a href="#">{{$pageInfor->company_name}}</a></h1>
      </div>
      <!--<a id="simple-menu" href="#sidr">Toggle menu</a>-->
      <div id="mobile-header"> <a class="responsive-menu-button" href="#"><i class="fa fa-bars"></i></a> </div>
	 
      <div class="menu" id="navigation">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#about">About us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="banner">
  <div class="container">
    <div class="header-text">
      <h2>What we do</h2>
      <p class="small-text"> {{$pageInfor->what_we_do}}</p>
      <div class="button-section"> <a href="#" class="top-button">More Info</a> </div>
    </div>
  </div>
</div>
<div class="about" id="about">
  <div class="container">
    <h3 class="text-head">About us</h3>
    <p class="box-desc">{{$pageInfor->about_us}}</p>
    <div class="about-section">
      <ul>
        <li> <a href="#">
          <div class="story-img"><img src="images/pic1.jpg"/></div>
          <div class="story-box">
            <h4>strength 1</h4>
            <p>{{$pageInfor->strength_1}}</p>
          </div>
          </a> </li>
        <li> <a href="#">
          <div class="story-img"><img src="images/pic2.jpg"/></div>
          <div class="story-box">
            <h4>strength 2</h4>
            <p>{{$pageInfor->strength_2}}</p>
          </div>
          </a> </li>
        <li> <a href="#">
          <div class="story-img"><img src="images/pic3.jpg"/></div>
          <div class="story-box">
            <h4> strength 3</h4>
            <p>{{$pageInfor->strength_3}}</p>
          </div>
          </a> </li>
      </ul>
    </div>
  </div>
</div>
<div class="services" id="services">
  <div class="container">
    <h3 class="text-head">Our services</h3>
    <div class="features-section">
      <ul>
        <li>
          <div class="feature-icon icon1"></div>
          <h4>service one</h4>
          <p>{{$pageInfor->service_1}}</p>
        </li>
        <li>
          <div class="feature-icon icon2"></div>
          <h4>service two</h4>
          <p>{{$pageInfor->service_2}}</p>
        </li>
        <li>
          <div class="feature-icon icon3"></div>
          <h4>services three</h4>
          <p>{{$pageInfor->service_3}}</p>
        </li>
        <li>
          <div class="feature-icon icon4"></div>
          <h4>services four</h4>
          <p>{{$pageInfor->service_4}}</p>
        </li>
        <li>
          <div class="feature-icon icon5"></div>
          <h4>services five</h4>
          <p>{{$pageInfor->service_5}}</p>
        </li>
        <li>
          <div class="feature-icon icon6"></div>
          <h4>services six</h4>
          <p>{{$pageInfor->service_6}}</p>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="contact" id="contact">
  <div class="container">
    <h3 class="text-head">Contact us</h3>
    <div class="box-desc row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">{{$pageInfor->post_address}}</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">{{$pageInfor->email_address}}</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">{{$pageInfor->phone_number}}</div> 
	</div>
    <div class="contact-section">
      <form>
        <input type="text" name="Name" placeholder="Name" />
        <input type="email" name="email" placeholder="Email"/>
        <textarea placeholder="Message" rows="6"></textarea>
        <button type="submit" class="submit">Send Message</button>
      </form>
    </div>
  </div>
</div>
<div class="footer">
  <div class="container">
    <ul class="socialmedia">
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
    </ul>
    <div class="infooter">
      <p class="copyright">Copyright &copy; {{date('Y')}}.{{$pageInfor->company_name}} All rights reserved.<a target="_blank" href="#"></a></p>
    </div>
  </div>
</div>
<script type="text/javascript">		
 $(document).ready(function() {
	$('#simple-menu').sidr({
	side: 'right'
});
});
$('.responsive-menu-button').sidr({
	name: 'sidr-main',
	source: '#navigation',
	side: 'right'

	});

</script>
</body>
</html>