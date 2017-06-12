 <?php include('header123.php'); ?>
 <?php include('navbar.php'); ?>
 <?php include('slider.php'); ?>
 <?php if(isset($_POST['footer_form']))
 {
    $name=$_POST['name'];

    $msg=$_POST['msg'];

    $wanttogo=$_POST['wanttogo'];

    $email=$_POST['email'];

    $mobile=$_POST['mobile'];

    $to = "info@flightsgogo.com";

    $subject = "Planning your vacation query";

    $header = "From:".$email." \r\n";

    $header .= "MIME-Version: 1.0\r\n";

    $header .= "Content-type: text/html\r\n";

    $message="   Sent from Example.net <br> <br> $name <br> $mobile <br> $wanttogo <br> $msg <br>  $email <br>";

    mail($to,$subject,$message,$header);
 }
 ?>
<style>
.ui-menu .ui-menu-item a{
  color:#000;
}
.ui-menu-item:hover{
background-color: #003b54!important;
}
</style>
<section class="tripfeature tripfeatureagain">
  <div class="container">
    <h1 class="section-title"><span class="light">Book and Explore with</span> We ?</h1>
    <div class="section-intro">
    </div>
    <div class="col-lg-4 col-md-4 margin-btm-mobile">
      <div class="features"> <img src="img-w/themes//assets/images/inexpensive.png" alt="inexpensive" width="" height="">
        <h4>Affordable Deals</h4>
        <p>Affordable and Economical Airfares to save you more</p>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 margin-btm-mobile">
      <div class="features"> <img src="img-w/themes//assets/images/brilliant.png" alt="brilliant" width="" height="">
        <h4>Excellent services</h4>
        <p>Given by our highly experienced and professional team</p>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 margin-btm-mobile">
      <div class="features"> <img src="img-w/themes//assets/images/customer.png" alt="customer" width="" height="">
        <h4>On-demand support</h4>
        <p>We offer outstanding customer support services to our clients</p>
      </div>
    </div>
  </div>
</section>
<section class="best-offer">
  <div class="container">
    <h2><span class="light">Today's Deals On</span> Flight Tickets</h2>
    <div id="offer-carousel" class="carousel slide" data-ride="carousel">
      <a class="left carousel-control" href="#offer-carousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#offer-carousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
      <div class="carousel-inner best-offer-slider" role="listbox">

        <div class="item active">
          <div class="col-lg-4 col-md-4 margin-btm-mobile">
            <div class="offer-slide-thumb"> <img src="img-w/themes//assets/images/offer-2.jpg" alt="Offer-1">

            </div>

            <div class="offer-overview">
              <div class="col-lg-8 overview">
                <h3>New York to Chicago</h3>
                <p>Grab budget-friendly deals and save more on your trip</p>
              </div>
              <div class="col-lg-4 discount"><!--<span>Upto</span><sup>$</sup><span class="dis-value">50</span><span>Discount</span>--><a href="tel:18445221315"><img src="img-w/themes//assets/images/inscall.png" alt="Offer-1"></a></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="col-lg-4 col-md-4 margin-btm-mobile">
            <div class="offer-slide-thumb"> <img src="img-w/themes//assets/images/hydra.jpg" alt="offer-2">
            </div>
            <div class="offer-overview">
              <div class="col-lg-8 overview">
                <h3>San Francisco to Atlanta</h3>
                <p>Grab budget-friendly deals and save more on your trip</p>
              </div>
              <div class="col-lg-4 discount"><!--<span>Upto</span><sup>$</sup><span class="dis-value">50</span><span>Discount</span>--><a href="tel:18445221315"><img src="img-w/themes//assets/images/inscall.png" alt="Offer-1"></a></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="col-lg-4 col-md-4 margin-btm-mobile">
            <div class="offer-slide-thumb"> <img src="img-w/themes//assets/images/offer-1.jpg" alt="offer-3">
            </div>
            <div class="offer-overview">
              <div class="col-lg-8 overview">
                <h3>Washington DC to Seattle</h3>
                <p>Grab budget-friendly deals and save more on your trip</p>
              </div>
              <div class="col-lg-4 discount"><!--<span>Upto</span><sup>$</sup><span class="dis-value">50</span><span>Discount</span>--><a href="tel:18445221315"><img src="img-w/themes//assets/images/inscall.png" alt="Offer-1"></a></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="col-lg-4 col-md-4 margin-btm-mobile">
            <div class="offer-slide-thumb"> <img src="img-w/themes//assets/images/chennait.jpg" alt="offer-2">
            </div>
            <div class="offer-overview">
              <div class="col-lg-8 overview">
                <h3>Chicago to Denver</h3>
                <p>Grab budget-friendly deals and save more on your trip</p>
              </div>
              <div class="col-lg-4 discount"><!--<span>Upto</span><sup>$</sup><span class="dis-value">50</span><span>Discount</span>--><a href="tel:18445221315"><img src="img-w/themes//assets/images/inscall.png" alt="Offer-1"></a></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="col-lg-4 col-md-4 margin-btm-mobile">
            <div class="offer-slide-thumb"> <img src="img-w/themes//assets/images/bangaloret.jpg" alt="offer-3">
            </div>
            <div class="offer-overview">
              <div class="col-lg-8 overview">
                <h3>New York to San Francisco</h3>
                <p>Grab budget-friendly deals and save more on your trip</p>
              </div>
              <div class="col-lg-4 discount"><!--<span>Upto</span><sup>$</sup><span class="dis-value">50</span><span>Discount</span>--><a href="tel:18445221315"><img src="img-w/themes//assets/images/inscall.png" alt="Offer-1"></a></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="col-lg-4 col-md-4 margin-btm-mobile">
            <div class="offer-slide-thumb"> <img src="img-w/themes//assets/images/ahmedabadtt.jpg" alt="offer-2">
            </div>
            <div class="offer-overview">
              <div class="col-lg-8 overview">
                <h3>Boston to Los Angeles</h3>
                <p>Grab budget-friendly deals and save more on your trip</p>
              </div>
              <div class="col-lg-4 discount"><img src="img-w/themes//assets/images/inscall.png" alt="Offer-1"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div >
</section>
<section class="flight-detail holiday_part">
  <div class="container">
    <div class="row">
      <h2><span class="light">Hot deals and in-depth</span>  Travel holiday packages</h2>
      <div class="flights-info">
        <div id="flights-carousel" class="carousel slide" data-ride="carousel">
          <a class="left carousel-control" href="#flights-carousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#flights-carousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
          <div class="carousel-inner best-offer-slider showcase" role="listbox">
            <div class="item active">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 full">
              <div class="hovereffect">
        <img class="img-responsive" src="img-w/themes//assets/images/explore-andaman.jpg" alt="">
            <div class="overlay">
                <h3 style="text-align: center;">Denmark</h3>
        <p style="font-size: 14px;text-align: center;"> 
                Denmark, a country in Europe well known for its royal palaces and remains from medieval era, is a place worth visiting. Plan your enriching Denmark journey with We and get special discounts. 
          </p> 
              <a href="eu/cheap-flights-to-denmark/index.html"> <button class="custom-abhi-btn" id="myBtn" onclick ="abc()">Book Now</button></a>
            </div>
    </div>
    </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 full">
              <div class="hovereffect">
        <img class="img-responsive" src="img-w/themes/assets/images/the-emeralds-andaman.jpg" alt="">
            <div class="overlay">
                <h3 style="text-align: center;">Garden City Bengaluru</h3>
        <p style="font-size: 14px;text-align: center;">  
               Work or fun, whatever be you reason to fly to the IT capital of India, we will get you booked on flights with great deals on Atlanta to Bangalore flights. 
          </p> 
                 <a href="flights-to-bangalore/index.html"><button class="custom-abhi-btn" id="myBtn" onclick ="abc()">Book Now</button>
</a>
            </div>
    </div>
    </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 full">
              <div class="hovereffect">
            <div class="overlay">
                <h3 style="text-align: center;">Land Of Fun</h3>
        <p style="font-size: 14px;text-align: center;"> 
               Palm fringed coastlines, exotic beaches, lovely landscape, peace, tranquility and happening night life, Goa clearly makes for a fun-filled holiday haven. 
          </p> 
                <a href="flights-to-goa/index.html"><button class="custom-abhi-btn" id="myBtn" onclick ="abc()">Book Now</button>
</a>
            </div>
    </div>
    </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 full">
              <div class="hovereffect">
        <img class="img-responsive" src="img-w/themes/assets/images/santana-beach-resort.jpg" alt="">
            <div class="overlay">
                <h3 style="text-align: center;">Istanbul</h3>
        <p style="font-size: 14px;text-align: center;">  
                Grab our exclusive offers on flight ticket bookings. We offers cheap flight tickets to Istanbul, a historic city in turkey that has been ruled by many empires.
          </p> 
                  <a href="/eu/cheap-flights-to-istanbul/index.html"><button class="custom-abhi-btn" id="myBtn" onclick ="abc()">Book Now</button>
</a>
            </div>
    </div>
    </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 full">
              <div class="hovereffect">
        <img class="img-responsive" src="img-w/themes/assets/images/golden-temple.jpg" alt="">
            <div class="overlay">
                <h3 style="text-align: center;">Golden Temple</h3>
        <p style="font-size: 14px;text-align: center;">  
                Greet yourselves with a floral welcome and experience the all-time classic Golden Triangle by paying tribute to Sikhism's holiest shrine Golden temple and spiritualize yourselves. 
          </p> 

                 <a href="flights-to-amritsar/index.html"><button class="custom-abhi-btn" id="myBtn" onclick ="abc()">Book Now</button>
</a>
            </div>
    </div>
    </div>
            </div>
      <div class="item">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 full">
              <div class="hovereffect">
        <img class="img-responsive" src="img-w/themes//assets/images/tiger-tour.jpg" alt="">
            <div class="overlay">
                <h3 style="text-align: center;">Lonely Planet Europe</h3>
        <p style="font-size: 14px;text-align: center;">  
             We is offering exciting travel deals on flights to Europe. Grab this great opportunity to fly to all destinations of Europe at low prices. 
          </p> 
               <a href="http://Example.net/eu"> <button class="custom-abhi-btn" id="myBtn" onclick ="abc()">Book Now</button>
</a>
            </div>
		      </div>
    </div>
            </div>  
            <div class="item">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 full">
              <div class="hovereffect">
        <img class="img-responsive" src="img-w/themes//assets/images/amazing-leh.jpg" alt="">
            <div class="overlay">
                <h3 style="text-align: center;">India's Financial Capital Mumbai</h3>
        <p style="font-size: 14px;text-align: center;">  

                To get affordable flight deals to Mumbai, India book with us. We facilitate easy and quick flight bookings at affordable prices. The process is simple to book Mumbai's flight
          </p> 
                <a href="http://Example.net/flights-to-mumbai/index.html"><button class="custom-abhi-btn" id="myBtn" onclick ="abc()">Book Now</button>
</a>
            </div>
    </div>
    </div>
            </div>
             <div class="item">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 full">
              <div class="hovereffect">
        <img class="img-responsive" src="img-w/themes//assets/images/dreams-of-himachal.jpg" alt="">
            <div class="overlay">
                <h3 style="text-align: center;">Dreams of Amsterdam</h3>
        <p style="font-size: 14px;text-align: center;">  
                Deservedly called a traveler's dream and paradise, wander in the Dreams of Amsterdam and be a part of the India's most favourite travel destination.
          </p> 
                 <a href="http://Example.net/eu/cheap-flights-to-amsterdam/index.html"><button class="custom-abhi-btn" id="myBtn" onclick ="abc()">Book Now</button></a>
            </div>
    </div>
    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div id="myModal" class="modal">
  <div class="modal-content clearfix">
  <div class="modal-header">
        <span class="close">x</span>
        <h4 class="modal-title">Customise your holiday packages</h4>
      </div>
    <div class="modal-body">
   <form id="common" method="post" action="http://www.Example.net/img-w/themes//home_search.php" enctype="multipart/form-data" >
    <div class="form-group clearfix">
    <div class="col-md-6 col-sm-6 col-xs-6">
      <input type="radio" name="searchfor" value="Honeymoon" id="honeymoon" checked> <label for="honeymoon">Honeymoon</label>
      </div>
       <div class="col-md-6 col-sm-6 col-xs-6">
  <input type="radio" name="searchfor" value="Leisure" id="leisure" > <label for="leisure">Leisure</label>
	    </div>
    </div>
    <div class="form-group col-md-12">
    <input type="text" class="auto" name="goingto" placeholder="Going To" />
    </div>
    <div class="form-group col-md-12">
    <input type="text" class="auto" name="goingfrom"  placeholder="Going From" />
    </div>
    <div class="form-group col-md-12">
 <div class='input-group date' id='datetimepicker1'>
                    <input type='text' id="date1" name="travel_date" placeholder="Select Travel Date"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
    </div>
     <div class="form-group clearfix">
     <div class="col-md-4 col-sm-4 col-xs-4">
     <label>Adult</label>
     <select name="adults">
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     </select>
     </div>
     <div class="col-md-4 col-sm-4 col-xs-4">
     <label>Childern</label>
     <select name="child">
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     </select>
     </div>
     <div class="col-md-4 col-sm-4 col-xs-4">
     <label>Hotel</label>
    <select name="hotel">
     <option>5 Star</option>
     <option>4 Star</option>
     <option>3 Star</option>
     <option>2 Star</option>
     </select>
     </div>
     </div>
     <div class="form-group col-md-6">
     <input type="text" name="name"  placeholder="Name" />
    </div>
     <div class="form-group col-md-6">
    <input type="tel" name="contact"  placeholder="Contact" />
    </div>
     <div class="form-group col-md-12">
    <input type="email" name="email"   placeholder="Email" />
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-default submit" name="Search_Holiday">Submit</button>
    </div>
    </form>
    </div>
  </div>
</div>
<section class="packages">
  <div class="container">
    <div class="packages-header">
      <h2 class="section-title" style="color:#fff;"><span class="light" style="color:#fff;"> We Are Happy To </span> Make You Happier</h2>
      <p  style="color:#fff;">The main reason why we're chosen by a large number of people for their travelling ventures to other countries is that we provide unmatched deals and packages. We unique selling point is the affordability of these plans. Our services include:</p>
    </div>
    <div class="packages-info">
      <div class="col-lg-3 col-md-3 margin-btm-mobile">
        <div class="features">
          <div class="packages-thumb"> <img src="img-w/themes//assets/images/air-ticket.png" alt="air-ticket" width="" height=""> </div>
          <h3>Air-Tickets at Rock-Bottom Prices</h3>
          <a href="flights/index.html" title="Read More" class="readmore-btn">Read More</a> </div>
      </div>
      <div class="col-lg-3 col-md-3 margin-btm-mobile">
        <div class="features">
          <div class="packages-thumb"> <img src="img-w/themes//assets/images/additional-discount.png" alt="additional-discount" width="" height=""> </div>
          <h3>Additional Discounts on Group Travels</h3>
          <a href="group-travel/index.html" title="Read More" class="readmore-btn">Read More</a> </div>
      </div>
      <div class="col-lg-3 col-md-3 margin-btm-mobile">
        <div class="features">
          <div class="packages-thumb"> <img src="img-w/themes//assets/images/man-icn.png" alt="man-icn" width="" height=""> </div>
          <h3>Best Services and Hospitality Guaranteed</h3>
          <a href="#" title="Read More" class="readmore-btn">Read More</a> </div>
      </div>
    </div>
  </div>
</section>
<section class="testimonials">
  <div class="container">
    <div class="row"> <span class="inline-center">Testimonials</span>
      <h2><span class="light">what our</span> clients say</h2>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
           <li data-target="#quote-carousel" data-slide-to="3"></li>
            <li data-target="#quote-carousel" data-slide-to="4"></li>
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-sm-12">
                <p>&ldquo;Excellent Services and Support!!! They had sent me an email of their products and plan, and I am definitely going to save and use it saving for future reservations.&rdquo;</p>
                <small><strong>Leroy Miles</strong></small> </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-sm-12">
                <p>&ldquo;I asked the agent to put my booking on hold for a day, as my holiday was not confirmed so far. I called next day and asked them to cancel my tickets, as I'd change of plan and the agent didn't even miss a beat and got what I wanted. Thank You!&rdquo; </p>
                <small><strong>Bruce Combs</strong></small> </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-sm-12">
                <p>&ldquo;Awesome customer services by Lewis. He was very patient and friendly with me and helped me to understand each and everything. I've used a couple of other travel agents and services, but got the lowest fare only with We.&rdquo; </p>
                <small><strong>Ema Watson</strong></small> </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-sm-12">
                <p>&ldquo;I was provided with a choice of flights, flight-route connectivity and fare were quite affordable. Appreciate We's client service.&rdquo; </p>
                <small><strong>John Hadden</strong></small> </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-sm-12">
                <p>&ldquo;I was provided with a choice of flights, flight-route connectivity and fare were quite affordable. Appreciate We's client service.&rdquo;</p>
                <small><strong>Edwin Smith</strong></small> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="call-us call-us2">
  <div class="container">
    <div class="row">
      <div id="planning_vacation" class="col-lg-6 col-md-6 margin-top call-usform">
     <h3>Planning for vacation?</h3>

<?php if(isset($_POST['footer_form'])) { 
  echo "<p> Your Query has been sent. You will be contacted shortly. </p>"; 
}
else{
  echo "<p>Tell us more details to help better</p>"; } ?>
      <form id="form" action="index.php#planning_vacation" method="POST">
      <div class="input-area9">
        <div class="col-lg-6">
          <div class="group9">
              <input type="text" name="wanttogo" placeholder="I want to go to"  class="validate[required] auto" />
                <i class="icon fa fa-map-marker"></i>            </div>
        </div>
        <div class="col-lg-6">
        <div class="group9">
              <input type="text" name="name" placeholder="Enter Your Name Here" class="validate[required]" />
                <i class="icon fa fa-users"></i>            </div>
        </div>
        <div class="col-lg-6">
        <div class="group9">
              <input type="text" name="mobile" placeholder="Enter Your Contact No" class="validate[required]" />
                <i class="icon fa fa-phone-square"></i>            </div>
        </div>
        <div class="col-lg-6">
        <div class="group9">
              <input type="text" name="email" placeholder="Email" class="validate[custom[email],required]" />

                <i class="icon fa fa-envelope"></i>            </div>
        </div>
        <div class="col-lg-12">
        <textarea name="msg" class="callustext validate[required]" placeholder="Enter Your Message Here" ></textarea> 
        </div>
        <div class="col-lg-12 call-usmargin">
         <button type="submit" class="btn btn-default submit" name="footer_form">SUBMIT</button>
        </div>
        </form>
      </div>
        <!--<h3>Call &amp; get Your Special Discount</h3>
        <span class="con-no"><span>1-</span><span>888-</span><span>301-5548</span></span>--> </div>
    </div>
  </div>
</section>
<footer style="padding:10px;background:#fff;">

<div class="container">
 <div class="row">
 <div class="col-md-12">
  <ul class="nav nav-pills center-pills">
    <li class="active"><a data-toggle="pill" href="#home"><b>INTERNATIONAL FLIGHTS</b></a></li>
    <li><a data-toggle="pill" href="#abc"><b>FLIGHTS TO EUROPE</b></a></li>
    <li><a data-toggle="pill" href="#menu2"><b>FLIGHTS TO INDIA</b></a></li>
  </ul>
  <div class="tab-content"><br>
     <br>
  <div id="home" class="tab-pane fade in active">
        <div class="row">
        <div class="col-md-3 ">

	<div class="hsk">

		    <ul class="list-unstyled">

			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-amsterdam/index.html">Cheap Flights To Amsterdam</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-austria/index.html">Cheap Flights To Austria</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-denmark/index.html">Cheap Flights To Denmark</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-finland/index.html">Cheap Flights To Finland</a></li>
			 </ul>
		</div>
		  </div>
		  <div class="col-md-3">

	<div class="hsk">

		     <ul class="list-unstyled">

			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-frankfurt/index.html">Cheap Flights To Frankfurt</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-germany/index.html">Cheap Flights To Germany</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-greece/index.html">Cheap Flights To Greece</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-istanbul/index.html">Cheap Flights To Istanbul</a></li>
			 </ul>
		  </div>
</div>
		  <div class="col-md-3">

	<div class="hsk">

		    <ul class="list-unstyled">

			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-italy/index.html">Cheap Flights To Italy</a></li>

			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-london/index.html">Cheap Flights To London</a></li>

			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-oslo/index.html">Cheap Flights To Oslo</a></li>

			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-portugal/index.html">Cheap Flights To Portugal</a></li>
			 </ul>
		  </div>
</div>
		  <div class="col-md-3">
		     <ul class="list-unstyled">

			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-prague/index.html">Cheap Flights To Prague</a></li>

			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-spain/index.html">Cheap Flights To Spain</a></li>

			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-sweden/index.html">Cheap Flights To Sweden</a></li>

			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cheap-flights-to-switzerland/index.html">Cheap Flights To Switzerland</a></li>

			 </ul>
		  </div>
	   </div>

    </div>
    <div id="abc" class="tab-pane fade">
      <div class="row">
	      <div class="col-md-3">
		  <div class="hsk">
		    <ul class="list-unstyled">
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/chicago-to-europe/index.html">Chicago To Europe</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/cincinnati-to-europe/index.html">Cincinnati To Europe</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/dallas-to-europe/index.html">Dallas To Europe</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/denver-to-europe/index.html">Denver To Europe</a></li>
			 </ul>
			 </div>
		  </div>
		  <div class="col-md-3">
		   <div class="hsk">
		     <ul class="list-unstyled">
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/houston-to-europe/index.html">Houston To Europe</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/los-angeles-to-europe/index.html">Los Angeles To Europe</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/miami-to-europe/index.html">Miami To Europe</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/minneapolis-to-europe/index.html">Minneapolis To Europe</a></li>
			 </ul>
		  </div>
		  </div>
		  <div class="col-md-3">
		  <div class="hsk">
		     <ul class="list-unstyled">
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/new-york-to-europe/index.html">New York To Europe</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/newark-new-jersey-to-europe/index.html">Newark New Jersey To Europe</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/salt-lake-city-to-europe/index.html">Salt Lake City To Europe</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/san-francisco-to-europe/index.html">San Francisco To Europe</a></li>
			 </ul>
		  </div>
		  </div>
		  <div class="col-md-3">
		     <ul class="list-unstyled">
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/seattle-to-europe/index.html">Seattle To Europe</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/eu/washington-dc-to-europe/index.html">Washington Dc To Europe</a></li>
			 </ul>
		  </div>
	   </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <div class="row">
	      <div class="col-md-3"><div class="hsk">
		     <ul class="list-unstyled">
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flights-from-atlanta-to-india/index.html">Flights From Atlanta To India</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flights-from-appleton-to-india/index.html">Flights From Appleton To India</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flights-from-boston-to-india/index.html">Flights From Boston To India</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flights-from-charlotte-to-india/index.html">Flights From Charlotte To India</a></li>
			 </ul>
		  </div>
		  </div>
		  <div class="col-md-3"><div class="hsk">
		     <ul class="list-unstyled">
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flights-from-albany-to-india/index.html">Flights From Albany To India</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flights-from-chicago-to-india/index.html">Flights From Chicago To India</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flights-from-dallas-to-india/index.html">Flights From Dallas To India</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flight-from-tucson-to-india/index.html">Flights From Tucson To India</a></li>
			 </ul>
		  </div>
		  </div>
		  <div class="col-md-3"><div class="hsk">
		     <ul class="list-unstyled">
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flights-from-detroit-to-india/index.html">Flights From Detroit To India</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flights-from-houston-to-india/index.html">Flights From Houston To Iindia</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flight-from-norfolk-to-india/index.html">Flights From Norfolk To India</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flights-from-los-angeles-to-india/index.html">Flights From Los Angeles To India</a></li>
			 </ul>
		  </div>
		  </div>
		  <div class="col-md-3"> 
		     <ul class="list-unstyled">
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flights-from-miami-to-india/index.html">Flights From Miami To India</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flights-from-minneapolis-to-india/index.html">Flights From Minneapolis To India</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flights-from-washington-dc-to-india/index.html">Flights From Washington DC To India</a></li>
			    <li><i class="fa fa-plane" aria-hidden="true"></i> <a href="http://Example.net/flights-from-new-york-to-india/index.html">Flights From New York To India</a></li>
			 </ul>
		  </div>
	   </div>
    </div>
       <br>
     <br>
  </div>
</div>
</div>
</div>
<!-- Linking Tab Container Close here-->
  <div class="container" style="margin-bottom:0px;padding:20px;">
    <div class="row">
      <div class="col-md-4"> <a href="http://www.Example.net"><img src="http://Example.net/img-w/themes//assets/images/logo.png" style="margin-top:6px;width:250px;" alt="logo"></a>
        <p>We promises you reasonable deals on flights & holidays from USA to around the world. We'll beat any comparable airfare quote and that's our guarantee.<br />
          <br /> 
          *Fares are for round trip or as put online, Fares are all inclusive of fuel surcharges, our service fees and other taxes. We suggest you to book 21 days in advance to get the best deal.Fares displayed are based on historical data, can change and cannot be guaranteed at the time of booking. <br />
         <h4 class="comapny">Contact Us</h4>
              <ul class="list-unstyled who margin-bottom-30">
                <li style="list-style:none;"> <i class="fa fa-home"></i> 14400 SW 88th St Ste 225, Miami, FL 33186</li>
                <li style="list-style:none;"> <i class="fa fa-envelope"></i> contact@Example.net</li>
                <li style="list-style:none;"> <i class="fa fa-phone"></i> 1-800-261-1917</li>
              </ul>
         </p>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-5 col-md-offset-1 col-sm-6">
                   <h4>We</h4>
<ul ><li id="menu-item-4408" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4408"><a href="http://Example.net/about-us/index.html">About us</a></li>

<li id="menu-item-4409" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4409"><a href="http://Example.net/affiliates/index.html">Affiliates</a></li>

<li id="menu-item-4410" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4410"><a href="http://Example.net/contact-us/index.html">Contact us</a></li>

<li id="menu-item-4411" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4411"><a href="http://Example.net/disclaimer/index.html">Disclaimer</a></li>

<li id="menu-item-4412" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4412"><a href="http://Example.net/privacy-policy/index.html">Privacy Policy</a></li>

<li id="menu-item-4413" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4413"><a href="http://Example.net/terms-and-conditions/index.html">Terms and Conditions</a></li>

<li id="menu-item-4691" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4691"><a href="http://Example.net/corporate-travel/index.html">Corporate Travel</a></li> 

<li id="menu-item-4532" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4532"><a href="http://Example.net/career/index.html">Careers</a></li>

</ul>             <h4>Travel Extras</h4>

            <ul ><li id="menu-item-4448" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4448"><a href="https://www.traveldocs.com/">Travel Documents</a></li>

      <li id="menu-item-4448" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4448"><a href="http://Example.net/sitemap.html">Sitemap</a></li>
</ul>            </div>
          <div class="col-md-6 col-sm-6">

                 <h4>Customer Resources</h4>

            <ul ><li id="menu-item-4441" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4441"><a href="http://Example.net/form.pdf">Credit Card Authorizations</a></li>

<li id="menu-item-4449" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4449"><a href="http://Example.net/cancellation-policy/index.html">Cancellation Policy</a></li>

<li id="menu-item-4789" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4789"><a href="http://Example.net/faq/index.html">FAQ</a></li>

<li id="menu-item-4833" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-4833"><a href="http://Example.net/refer-and-earn/index.html">Refer &#038; Earn</a></li>

</ul>            <h4>Travel Extras</h4>

            <ul > 

<li id="menu-item-4452" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4452"><a href="https://www.seatguru.com/">Airline Seat Map</a></li>

<li id="menu-item-4453" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4453"><a href="http://www.iflybags.com/">Baggage Fee</a></li>

<li id="menu-item-4785" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4785"><a href="http://www.xe.com/">Currency Exchange</a></li>

<li id="menu-item-4841" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4841"><a href="http://www.tollfreeairline.com/">Airline Toll free Number</a></li>

</ul>   
<h4>We Accept</h4>
            <div class="payment-img"><img src="http://www.Example.net/img-w/themes//assets/images/payment.jpg"> </div>     
      </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<section class="footer_bar">
  <div class="container">
    <div class="row">
      <div class="col-sm-6"> Copyright © 2017 We, LLC | All Rights Reserved
         </div>
      <div class="col-sm-6">
      <a href="https://www.facebook.com/We-1323767114325029/"><i class="fa fa-facebook fottericons_new" style="padding-top: 10px;"></i></a> <a href="https://twitter.com/We"><i class="fa fa-twitter fottericons_new" style="padding-top: 10px;"></i></a> <a href="https://plus.google.com/u/0/111190464607563761764"><i class="fa fa-google-plus fottericons_new" style="padding-top: 10px;"></i></a> <a href="https://www.linkedin.com/company/We"><i class="fa fa-linkedin fottericons_new" style="padding-top: 10px;"></i></a>
      </div>
       <div class="col-sm-12">

        <p  style="width:100%;padding:10px;font-size: 14px;line-height: 20px;text-align: justify;">All content on fight4travel.com is the property of We Inc or its content suppliers and protected under the international and United States copyright laws. Anything duplicated or copied from this website without explicit written approval will be deemed a copyright violation and may be liable to face legal action.</p>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
    function ShowHideDiv() {
        var chkYes = document.getElementById("chkYes");
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = chkYes.checked ? "block" : "none";
    }
</script>
<script>
$(function () {
    $("#depart-date").datepicker({
         minDate: 0,
        changeMonth: true,
        numberOfMonths: 2,
        onClose: function (selectedDate) {
            $("#return-date").datepicker("option", "minDate", selectedDate);
        }
    });
    $("#return-date").datepicker({
        defaultDate: "+1w",
    changeMonth: true,
        numberOfMonths: 2,
        onClose: function () {
                var dt1 = $('#depart_date').datepicker('getDate');
                console.log(dt1);
                var dt2 = $('#return_date').datepicker('getDate');
                if (dt2 <= dt1) {
                    var minDate = $('#return_date').datepicker('option', 'minDate');
                   // $('#return_date').datepicker('setDate', minDate);
                }
            }
    });
});
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="js/custom.js"></script>
<script type='text/javascript' src='img-w/themes//js/skip-link-focus-fixd01e.js?ver=20141010'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var screenReaderText = {"expand":"<span class=\"screen-reader-text\">expand child menu<\/span>","collapse":"<span class=\"screen-reader-text\">collapse child menu<\/span>"};
/* ]]> */
</script>
<script type='text/javascript' src='img-w/themes//js/functionsd7c8.js?ver=20141212'></script>
<script type='text/javascript' src='img-wws/js/wp-embed.min.js?ver=4.6.3'></script>
<script src="img-w/themes//assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="img-w/themes//bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="img-w/themes//assets/js/functions.js" type="text/javascript"></script>
<script type="text/javascript" src="img-w/themes/We/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript">$(function() {$(".auto").autocomplete({source: "http://www.We.net/img-w/themes/We/ajax.php",minLength: 1});});</script>
<script type="text/javascript" src="img-w/themes/We/js/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="img-w/themes/We/js/jquery.validationEngine.js"></script>
<link type="text/css" href="img-w/themes/We/css/validationEngine.jquery.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="img-w/themes/We/css/jquery.datetimepicker.css"/>
<script src="img-w/themes/We/js/jquery.datetimepicker.js"></script>
</body>
</html><script type="text/javascript" src="img-w/themes/We/js/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="img-w/themes/We/js/jquery.validationEngine.js"></script>
<link type="text/css" href="img-w/themes/We/css/validationEngine.jquery.css" rel="stylesheet" />
