<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400,700|Source+Sans+Pro:700" rel="stylesheet">

    <!-- JS/JQUERY -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="animatescroll.js"></script>
    <script type="text/javascript">
      $(function () {
        $(document).scroll(function () {
          var $nav = $(".navbar");
          var $logoNav = $(".logo-nav");
          $nav.toggleClass('scrolled',$(this).scrollTop() > $nav.height());
          $logoNav.toggleClass('scrolled', $(this).scrollTop()>$nav.height()); 
        });
        $('#thankyou').removeClass("os");
        $('#form1').submit(function(e){
  
            e.preventDefault(); // Prevent Default Submission
          
            $.ajax({
               url: 'insert.php',
               type: 'POST',
               data: $(this).serialize(), // it will serialize the form data
                      dataType: 'html'
                  });
            $('#thankyou').removeClass("thanks");
            $('#thankyou').addClass("os");
            $('#thankyou').addClass("alert");
            $('#thankyou').addClass("alert-success");
            $('#form-1').addClass('f-submit')
          });
        
      });
    </script>

    <title>WealthGain Solution</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md fixed-top">
      <a href="#" class="nav-logo-a" onclick="$('#home-con').animatescroll();" href="#"><img src="img/logo.png" class="logo-nav img-fluid"></a>
       <div class="mobShow">
          <h1 class="he-mob">Wealth Gain Solution</h1>
        </div>
        <a class="navbar-toggler" data-toggle="collapse" data-target="#nav-coll" aria-controls="nav-coll" aria-expanded="false" aria-label="Toggle navigation" onclick="$('.navbar').toggleClass('scrolled');">
             &#9776
          </a>
      <div class="collapse navbar-collapse" id="nav-coll">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" onclick="$('#home-con').animatescroll();$('.navbar-collapse').collapse('hide');" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="$('#about-con').animatescroll();$('.navbar-collapse').collapse('hide');" href="#">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="$('#services-con').animatescroll();$('.navbar-collapse').collapse('hide');" href="#">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="$('#contact-con').animatescroll();$('.navbar-collapse').collapse('hide');" href="#">CONTACT</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid con1 con-bg" id="home-con">
      <div class="row">
        <div class="col-sm-12">
          <center>
            <h1 class="he1">WEALTHGAIN SOLUTION PVT LTD</h1>
            <p class="p1">
              WealthGain Solution is the one stop answer to all your economic concerns. We provide top notch services and consultations to help your money serve you better. Our services do not limit themselves to the domain of investing, we also provide dedicated support for security and construction related concerns.
            </p>
            <button type="button" class="btn btn1" onclick="$('#about-con').animatescroll();" href="#">Learn More</button>
          </center>
        </div>
      </div>
    </div>

    <div class="container-fluid con2 con-bg" id="about-con">
      <div class="row">
        <div class="col-sm-12">
          <center>
            <h1 class="he2">ABOUT US</h1>
          </center>
        </div>
      </div>
      <div class="row row-about-p con-bg">
        <div class="col-sm-12">
          <center>
            <p class="p2">
              WealthGain Solution PVT LTD is a venture to inculcate the values of experience and expertise in order to provide better customer service. Our comprehensive experience along with our powerful team of young minds working with experienced leaders forms a strong yet stable combination which helps is dominate the market in a very short time. Our culture is one of having a passion for excellence, being empowered, having the confidence to take decisions quickly & being accountable for all actions with no regard for the consequences. Our business is driven to achieve results and deliver beyond the expected. 

              <p class="p2-1">
                We are a professional and committed group of individuals open to new ideas, believing in the power of trust to deliver the best possible service to you. Our primary goal is to serve a wide portfolio of economic and financial services in order to explore beyond the boundaries of perspective. We have one of the leading customer satisfaction rates in all of our service domains. Choose WealthGain Solutions PVT LTD for your short term and long term needs to have an empowered future.
               </p>
            </p>
          </center>
        </div>
      </div>
    </div>

    <div class="container-fluid con3 con-bg" id="services-con">
      <div class="row">
        <div class="col-sm-12">
          <center>
            <h1 class="he3">OUR SERVICES</h1>
            <div class="card-deck">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Renting Property</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">
                    We provide renting services for residential, commercial and industrial lands with a wide selection suitable for small scale and large scale needs. 
                  </p>
                  <p>
                    <a href="#" class="a-cards">
                      Learn More
                    </a>
                  </p>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Construction</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">
                    Land is always better with something built on it. Our construction services are tailor made for individual needs with no compromise on quality.
                  </p>
                  <p>
                    <a href="#" class="a-cards">
                      Learn More
                    </a>
                  </p>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Insurance</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">
                    The only thing constant is change. In today's fast moving world, it is better to be insured every step of the way.
                  </p>
                  <p>
                    <a href="#" class="a-cards">
                      Learn More
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="card-deck card-deck-2" >
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Security</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">
                    Protection towards our most prized possesions is always a priority. Live care free with our security solutions.
                  </p>
                  <p>
                    <a href="#" class="a-cards">
                      Learn More
                    </a>
                  </p>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Investment</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">
                    A lending hand is always helpful. Explore a wide variety of short term and long term investment options to kick start your idea financially and logistically.  
                  </p>
                  <p>
                    <a href="#" class="a-cards">
                      Learn More
                    </a>
                  </p>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Loans</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">
                    We provide loans at a very wide scale. From Micro-finance for small start for large Term Loans, we offer complete borrowing solutions.
                  </p>
                  <p>
                    <a href="#" class="a-cards">
                      Learn More
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </center>
        </div>
      </div>
    </div>

    <div class="container-fluid con-bg con4" id="contact-con">
      <div class="row">
        <div class="col-sm-12">
          <center>
            <h1 class="he4">CONTACT US</h1>

            <form class="form1" id="form1" action="" method="post" enctype="text/plain">
              <div class="form-row">

                <div class="form-group col-md-6">

                  <div class="form-row">
                    <div class="form-group col-sm-12">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name*" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-sm-12">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-sm-12" id="input3">
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                    </div>
                  </div>
        
                </div>

                <div class="form-group col-md-6">
                  <textarea class="form-control" id="message" name="message" placeholder="Message*" required></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn2">Submit</button>
            </form>
          </center>
          <center class="mobShow2">
              <div class="thanks os" id="thankyou" role="alert">
                Thank you for your submission.
              </div>
            </center>
        </div>
      </div>
    </div>

    <div class="container-fluid con5">
      <div class="row mx-auto row1">
        <div class="col-md-4 col-sm-12 col-footer">
          <p class="p-footer call">
            Phone
            <span class="p-footer-inside">0120-4114664</span>
          </p>
        </div>
        <div class="col-md-4 col-sm-12 col-footer">
          <p class="p-footer address">
            Address
            <span class="p-footer-inside">B-35 Sector 65 Noida</span>
          </p>
        </div>
        <div class="col-md-4 col-sm-12 col-footer">
          <p class="p-footer email">
            Email
            <span class="p-footer-inside">info@wealthgainsolutions.com</span>
          </p>
        </div>
      </div>
      <div class="row mx-auto row-end">
        <div class="col-sm-12">
          <p class="p-footer-end">All Rights Reserved | Copyright  &#9400; WealthGain Solution PVT LTD</p>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>