<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit-icons.min.js"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&display=swap" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/stisla-custom.css')}}">

    <title>Template</title>
    <link rel="shortcut icon" href="assets/img/logo/nav-logo.png">

    

</head>
<body style="position: relative">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>    
<br>
<br>
<br> 
<br>
<br>

    @yield('content')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        // Open the Modal
        function openModal() {
          document.getElementById("myModal").style.display = "block";
        }

        // Close the Modal
        function closeModal() {
          document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
    @yield('js')
</body>
</html>
