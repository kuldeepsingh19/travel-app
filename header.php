<!DOCTYPE html>
<?php 
if(isset($fs3)){ ?>
<html ng-app="myApp" id="filghtCtrlId" ng-controller="filghtCtrl">
<?php }else{ ?>
<html>
<?php } ?>
<head>

<style>
  .center-pills {
    display: flex;
    justify-content: center;
}
</style>
<link rel="stylesheet" href="img-w/themes/bookflyticket/bootstrap/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="img-w/themes/bookflyticket/assets/css/style.css" type="text/css">
<link rel="stylesheet" href="img-w/themes/bookflyticket/assets/css/internal.css" type="text/css">
<link rel="stylesheet" href="img-w/themes/bookflyticket/assets/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="img-w/themes/bookflyticket/assets/images/favicon.png">





<link rel="stylesheet" id="genericons-css" href="img-w/themes/bookflyticket/genericons/genericons.css?ver=3.2" type="text/css" media="all">
<link rel="stylesheet" id="twentyfifteen-style-css" href="img-w/themes/bookflyticket/style.css?ver=4.7.4" type="text/css" media="all">




















<style>

@media only screen and (max-device-width:480px){

.wrapper {
    /* Size and position */
    font-size: 25px; /* 1em */
    width: auto;    
    position: fixed;
    left: 0% !important;
    top: 40%;    
    color: #444;
    text-align: center;
    text-transform: uppercase;
    line-height: 2em;
    background-color: #FFF;
}


 .popup{
    
width: 100%;
display: none;
position: fixed;
z-index: 999;

background-color: rgba(0, 0, 0, 1);

top: -22px;

}

.hapabitoll{ font-size:22px !important;
}   

 .tb-cell h2 {
    font-size: 22px !important;}
.cnt223 {
    width: 100% ;
    margin: 146px auto;
}
.label1 {
    display: inline;
    padding: 1.2em 1.6em;
    font-size: 15px;
    line-height: 1;
    color: #000;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25em;
    background: #ffcc01;
    font-weight: 700;
    width: 100%;
    height: auto;
}
.header .logo {
    position: relative;
    z-index: 999999;
    width: 100%;
    text-align: center;
}

    }

.nav-desktop .tb {
    width: 100%;
}
.side-bar__title.icon {
    text-align: left;
    padding: 6% 10%;
}
.is--banner > .side-bar__title {
    border-bottom: 1px #cccccc solid;
    font-size: 18px;
    line-height: 1.2em;
    margin: 0;
    padding: 6% 7.5%;
}
.side-bar__block {
    background: #ffffff;
    border: 1px solid #cccccc;
    width: 100%;
    padding: 0;
    margin-bottom: 30px;
    position: relative;
    display: inline-block;
}
.why-book.is--ssl {
    padding-top: 0;
}
.why-book {
    font-size: 13px;
    line-height: 1.4em;
    text-align: left;
    
}
.why-book.is--ssl li > a, .why-book.is--ssl li > span {
    display: block;
    margin: auto;
    margin-top: 15px;
}
.why-book.is--ssl li {
    border-top: 1px solid #cccccc;
    text-align: center;
    padding-bottom: 15px;
}
.why-book.is--ssl ul {
    list-style: none;
}
ul.why-book.is--coa {
    list-style: none;
    text-align: center;
    padding: 0 4px;
}
footer.side-bar__bbbBanner.clickable {
    padding-bottom: 0;
}
.why-book.is--ssl ul {
    padding: 0 4px;
}
.fdbckverify {
    background: url(payment-sprite.png) 2px -80px no-repeat;
    width: 81px;
    height: 39px;
    display: inline-block;
}
.cardverify {
    background: url(payment-sprite.png) 2px 5px no-repeat;
    width: 341px;
    height: 39px;
    display: inline-block;
}
.newcard {
    margin-top: 27px;
}

</style>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Cheap Air Tickets, Best On Call Deals, Bookflyticket.net</title>
    
    <!--<link href='https://fonts.googleapis.com/css?family=Lato:300,400%7COpen+Sans:300,400,600' rel='stylesheet' type='text/css'>-->
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Josefin+Slab" />
    <link rel="stylesheet" href="img-w/themes/bookflyticket/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ana-api.css">  
    <link rel="stylesheet" href="img-w/themes/bookflyticket/assets/css/internal.css"> 
    <link rel="stylesheet" href="img-w/themes/bookflyticket/assets/css/style.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
     <!--   <link rel="stylesheet" href="//flightsgogo.com/css/library/owl.carousel.css">
    <link rel="stylesheet" href="//flightsgogo.com/css/library/jquery.mb.YTPlayer.min.css">
       <link rel="stylesheet" href="//flightsgogo.com/css/library/jquery.mb.YTPlayer.min.css">-->
    
   
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<?php if(!isset($impayment)){   ?>    
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <?php  } ?>
	
	
<script>
    $(function() {
      function log(message) {
        $("<div>").text(message).prependTo("#log");
        $("#log").scrollTop(0);
      }
      $("#flight-from,#flight-to").autocomplete({
        source: function(request, response) {
          $.ajax({
            url: "http://api.sandbox.amadeus.com/v1.2/airports/autocomplete",
            dataType: "json",
            data: {
              apikey: "1xTOK9xsWeDTPptm8HGIoTjGrG5ckSVY",
              term: request.term
            },
            success: function(data) {
              // alert(JSON.stringify(data));
              response(data);
            }
          });
        },
        minLength: 3,
        select: function(event, ui) {
        log(ui.item ?
            "Selected: " + ui.item.label :
            "Nothing selected, input was " + this.value);
       
        var classname=$(this).attr('id');
        var str=this.value;
        var matches = [];

        var pattern = /\[(.*?)\]/g;
        var match;
        while ((match = pattern.exec(str)) != null)
        {
          matches.push(match[1]);
        }

       

        document.getElementsByClassName(classname)[0].value=matches;
       


        },
        focus: function(event, ui) {                    
        
            $(this).val(ui.item.label);
            var classname=$(this).attr('id');
            var str=this.value;
            var matches = [];

            var pattern = /\[(.*?)\]/g;
            var match;
            while ((match = pattern.exec(str)) != null)
            {
              matches.push(match[1]);
            }

           

            document.getElementsByClassName(classname)[0].value=matches;
        },
        change: function(event, ui){
          $(this).val(ui.item.label);
        var classname=$(this).attr('id');
        var str=this.value;
        var matches = [];

        var pattern = /\[(.*?)\]/g;
        var match;
        while ((match = pattern.exec(str)) != null)
        {
          matches.push(match[1]);
        }

        

        document.getElementsByClassName(classname)[0].value=matches;
        },
       
        open: function() {
          $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
        },
        close: function() {
          $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
        }
      });
    });
  </script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91752156-1', 'auto');
  ga('send', 'pageview');

</script>

</head>
<?php if(isset($fs3)){ ?>
<body>
<?php }else{ ?>
<body>
<?php } ?>

    
    <!--<div id="preloader">
        <div class="tb-cell">
            <div id="page-loading">
                <div></div>
                <p>Loading</p>
            </div>
        </div>
    </div>-->
   
    <div id="wrap">
       
        <header id="header" class="header" style="background-color: #fff;width: 100%;position:relative !important;top: 0;z-index: 999;border-bottom: 2px solid #0275b8;">
        <div class="container-fluid-abhi">
          <div class="abhi-header-top" style="background-color: #515b5c;    width: 100%;    color: #fff;    font-size: 14px;    text-align: center;    font-family: sans-serif;    font-weight: 700;">Bookflyticket offers best Air Fares, Call Us Now, Get Guaranteed Best Air Fares, Toll-Free: 1-800-261-1917</div>
        </div>
            <div class="container">
               
                <div class="logo float-left">
                    <a href="http://Bookflyticket.net" title=""><img src="http://bookflyticket.net/img-w/themes/bookflyticket/assets/images/logo.png" alt="" style="width:250px;padding-top: 10px;"></a>
                </div>                
                <div style="float:right;" class="nav-c" id="navigation" data-menu-type="1200">
                    <div class="nav-inner">
                        <div class="tb">
                            <div class="tb-cell">
                               <h2 style="color: #003b94;margin-top: 10px;">TOLL FREE : <a class="hapabitoll" href="tel:1-800-261-1917" style="color:#e92929;text-decoration: none;font-size: 33px; ">1-800-261-1917</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </header>
