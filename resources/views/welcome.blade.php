<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('vendors/bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/themify-icons/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
<style>
body, html {
  height: 100%;
  margin: 0;
}

body{
  /* The image used */
  background-image: url("test.png");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>

 <!--================ Banner Section start =================-->
 <section class="hero-banner text-center" id="home">
  <br><br>
    <div class="container">
      <h1>GULLAS COLLEGE OF MEDICINE</h1>
      <p class="hero-subtitle">Click the link below to open the payment portal.</p>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="WPECR874T96NL">
        <input type="image" src="https://i.ya-webdesign.com/images/credit-card-accepted-png.png"  name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
      </form>
    </div>
    <br><br>
  </section>
  <!--================ Banner Section end =================-->
  
</body>
</html>
