<!DOCTYPE html>
<!-- saved from url=(0063)file:///D:/Project/Shortcode/Parallax%20using%20stellar.js.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <title>Page Title</title>
    <!-- Bootstrap CSS -->
    <link href="./Parallax using stellar_files/bootstrap.min.css" rel="stylesheet">
    <link href="./Parallax using stellar_files/font-awesome.min.css" rel="stylesheet">
    <link href="./Parallax using stellar_files/all.css" rel="stylesheet">
    <link href="./Parallax using stellar_files/icon-font.min.css" rel="stylesheet">
<style type="text/css">
    .photo {
        background-attachment: fixed;
        background-position: 50% 0;
        background-repeat: no-repeat;
        height: 450px;
        position: relative;
    }

    .photo span {
        color: white;
        display: block;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        font-size: 38px;
        padding: 10px;
        position: absolute;
        text-shadow: 0 2px 0 black, 0 0 10px black;
    }

    .summer {
        background-image: url('https://source.unsplash.com/1920x1080/?summer');
    }

    .autumn {
        background-image: url('https://source.unsplash.com/1920x1080/?autumn');
    }

    .winter {
        background-image: url('https://source.unsplash.com/1920x1080/?winter');
    }

    .spring {
        background-image: url('https://source.unsplash.com/1920x1080/?spring');
    }
    </style></head>
    


<body style="zoom: 1;">
    <div class="photo summer" data-stellar-background-ratio="0.5" style="background-position: 50% -20px;"><span>Summer</span></div>
    <div class="photo autumn" data-stellar-background-ratio="0.5" style="background-position: 50% 205px;"><span>Autumn</span></div>
    <div class="photo winter" data-stellar-background-ratio="0.5" style="background-position: 50% 430px;"><span>Winter</span></div>
    <div class="photo spring" data-stellar-background-ratio="0.5" style="background-position: 50% 655px;"><span>Spring</span></div>
    <div class="photo summer" data-stellar-background-ratio="0.5" style="background-position: 50% 880px;"><span>Summer</span></div>
    <div class="photo autumn" data-stellar-background-ratio="0.5" style="background-position: 50% 1105px;"><span>Autumn</span></div>
    <div class="photo winter" data-stellar-background-ratio="0.5" style="background-position: 50% 1330px;"><span>Winter</span></div>
    <div class="photo spring" data-stellar-background-ratio="0.5" style="background-position: 50% 1555px;"><span>Spring</span></div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./Parallax using stellar_files/jquery-3.0.0.min.js.download"></script>
    <script src="./Parallax using stellar_files/bootstrap.min.js.download"></script>
    <script src="./Parallax using stellar_files/jquery.min.js.download"></script>
    <script src="./Parallax using stellar_files/jquery.stellar.min.js.download"></script>
    <script>
    $(function() {
        $.stellar({
            horizontalScrolling: false,
            verticalOffset: 40
        });
    });
    </script>


</body></html>