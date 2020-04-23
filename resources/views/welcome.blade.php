<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gullas College of Medicine</title>
  <link rel="icon" href="img/favicon.png" type="image/png">
  
  <link rel="stylesheet" href="{{ asset('vendors/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt="" style="height:auto; width:80%"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item"><a class="nav-link" href="#home">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="#announcements">Announcements</a></li> 
              <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#paymentModal">Payments</a>
              <li class="nav-item"><a class="nav-link" href="#about">About</a>
            </ul>

            <div class="nav-right text-center text-lg-right py-4 py-lg-0">
              <a class="button button-link mr-4" href="http://ehub.gcm.edu.ph"><span class="align-middle"><i class="ti-user"></i></span> For Employees</a>
              <a class="button button-outline button-small" href="http://portal.gcm.edu.ph">Portal</a>
            </div>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->


  <!--================ Banner Section start =================-->
  <section class="hero-banner text-center" id="home">
    <div class="container">
      <p class="text-uppercase">WORLD CLASS EDUCATION WITH INTERNATIONAL STANDARDS</p>
      <h1>GULLAS COLLEGE OF MEDICINE</h1>
      <p class="hero-subtitle">Operating for more than 100 years in Cebu and offering top class infrastructure, quality education with experienced faculty</p>
      <a class="button button-outline" href="#" data-toggle="modal" data-target="#paymentModal"><span class="align-middle">For Tuition and Other Fees Payment</span></a>
    </div>
  </section>
  <!--================ Banner Section end =================-->

  <!-- Modal -->
  <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tuition and Other Fees Payment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <p>Click the link below to redirect you to our verified payment channel.</p>
          <hr>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="WPECR874T96NL">
            <input type="image" src="https://lh3.googleusercontent.com/proxy/NJmAZebgtnYI6rfYYLUL1O_JQ1AUZzcpB2uemBiHH9B_Rz9oMwChXUIT2jIxp2nng4DIZe3wnEIU-EB7zf8"  name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
          </form>
        </div>
      </div>
    </div>
  </div>

  <!--================ Feature section start =================-->
  <section class="section-margin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 id="announcements">Announcements</h2>
          <p>Official and timely announcements provided by the GCM administration.</p>
        </div>
      </div>
      <hr>
      <?php $announcements = App\Announcement::orderBy('created_at', 'desc')->paginate(3); ?>
        @if($announcements->isEmpty())
        <div class="alert alert-success" role="alert">
          There are currently no announcements.
        </div>
        @else
        @foreach ($announcements as $announcement) 
        <div class="row">
          <div class="col-md-12">
            <div class="card-feature">
              <div class="row">
                <div class="col-md-12">
                  <h3>{{ $announcement->title }}</h3>
                  <small><i class="ti-calendar"></i>&nbsp; {{date('F j, Y', strtotime($announcement->created_at))}}</small>
                  <hr>
                  <p>{{ $announcement->content }}</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <div>{{ $announcements->links() }}</div>
        @endif
    </div>
  </section>
  <!--================ Feature section end =================-->

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 single-footer-widget">
					<h4>About Us</h4>
          <p>Gullas College of Medicine, based in Cebu City, was created to provide quality medical curriculum to the students of Visayas and Mindanao. Today, caters to students, not only within Philippines, but also from all across the world. Students from India, Thailand, Nigeria, South Korea, Taiwan, Malaysia, Iran, Nepal, Japan and United States also study on the campus. The In-campus hostel and the 24 hour security features ensure that the students are safe and sound. Facilities such as study halls and libraries allows every student to plan an individual pathway to their degree in medicine.</p>
				</div>
				<div class="col-md-3 single-footer-widget">
					<h4>Contact Info</h4>
					<ul>
						<li><b>Banilad, Mandaue City, Cebu 6000, Philippines</b></li>
						<li><b>+63 926 727 6686</b></li>
						<li><b>info@gcm.edu.ph</b></li>
					</ul>
				</div>
				<div class="col-md-3 single-footer-widget">
					<h4>Links</h4>
					<ul>
						<li><b><a href="http://portal.gcm.edu.ph">Student Portal</a></b></li>
						<li><b><a href="http://ehub.gcm.edu.ph">Employee Hub</a></b></li>
						<li><b><a href="https://web.facebook.com/gcmannouncements">Facebook Page</a></b></li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom row align-items-center text-center text-lg-left">
				<p class="footer-text m-0 col-lg-8 col-md-12">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Gullas College of Medicine</p>
				<div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
					<a href="https://web.facebook.com/gcmannouncements"><i class="ti-facebook"></i></a>
				</div>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->




  <script src="{{ asset('vendors/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('js/mail-script.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>