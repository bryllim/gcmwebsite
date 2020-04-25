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

  <!--================ Banner Section start =================-->
  <section class="hero-banner text-center" id="home">
    <div class="container">
      <h1>GULLAS COLLEGE OF MEDICINE</h1>
      <p class="hero-subtitle">Click the link below to open the payment portal.</p>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="WPECR874T96NL">
        <input type="image" src="https://lh3.googleusercontent.com/proxy/NJmAZebgtnYI6rfYYLUL1O_JQ1AUZzcpB2uemBiHH9B_Rz9oMwChXUIT2jIxp2nng4DIZe3wnEIU-EB7zf8"  name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
      </form>
    </div>
  </section>
  <!--================ Banner Section end =================-->

  <script src="{{ asset('vendors/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('js/mail-script.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
