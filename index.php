<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title></title>
</head>
  <body>
    
        
        
        
        <nav id="navbar" class="navbar navbar-expand-lg navbar-light ">
          <div class="container-fluid navbar-body ">
            <div class="navbar-logo">
              <img id="navbar-logo" src="asset/images/Group 4.png" alt="">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ms-auto">
                <li class="navbar-link navbar-link-link Home-link" ><a id="navbar-active" href="">Home</a></li>
              <li class="navbar-link navbar-link-link Aboutus-link"><a id="navbar-inactive-0" href="">About Us</a></li>
              <li class="navbar-link navbar-link-link Services-link"><a id="navbar-inactive-1" href="">Services</a></li>
              <li class="navbar-link navbar-link-link Blog-link"><a id="navbar-inactive-2" href="">Blog</a></li>
              <li class="navbar-link Contactus-link "><a id="navbar-inactive-3 " href="">Contact Us</a></li>
              <div class="navbar-menu">
                <div class="form-group has-search ">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input type="text" class="form-control form-control-search" placeholder="Search">
                </div>
              </ul>
            </div>
          </div>
        </nav>
        <!-- homepage -->
        <?php include 'aboutus.php' ?>
        <!-- service -->
        <?php include 'blog.php' ?>
        <?php include 'contactus.php' ?>
        <!-- footer -->
      
    
    <script>
      // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
      window.onscroll = function() {scrollFunction()};
      
      function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
          document.getElementById("navbar").style.backgroundColor = "white";
          document.getElementById("navbar-active").style.color = "#106CB2";
          document.getElementById("navbar-inactive-0").style.color = "#106CB2";
          document.getElementById("navbar-inactive-1").style.color = "#106CB2";
          document.getElementById("navbar-inactive-2").style.color = "#106CB2";
          document.getElementById("navbar-inactive-3").style.color = "#106CB2";
          document.getElementById("navbar-logo").src = "asset/images/Logo.jpg";
        } else {
          document.getElementById("navbar").style.backgroundColor = "#106CB2";
          document.getElementById("navbar-active").style.color = "white";
          document.getElementById("navbar-inactive-0").style.color = "white";
          document.getElementById("navbar-inactive-1").style.color = "white";
          document.getElementById("navbar-inactive-2").style.color = "white";
          document.getElementById("navbar-inactive-3").style.color = "white";
          document.getElementById("navbar-logo").src = "asset/images/Group 4.png";
        }
      }
      $("#navbar-active").click(function() {
    $('html, body').animate({
        scrollTop: $(".contact-us").offset().top
    }, 2000);
});
      </script>
  </body>
</html>