<?php
    include ("header.php");
?>

<!DOCTYPE html>
<html>
    <head>  
        <link rel="stylesheet" href="styles.css">
        <meta http-equiv="X-UA-Compatible" content="IE=9; text/html; charset=utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Education</title>

        <!-- Favicon code -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

    </head>
    <body>
        <div class="education-container">

            <div class="title-text-container">
                <div class="hairline"></div>
                <p class="title-text">Education</p> 
                <div class="hairline"></div>
            </div>

            
            <p class="table-title">High School</p>
            <div class="hairline" style="width: 96%; margin-left: auto; margin-right: auto; margin-top: -1.5%; margin-bottom: 5%;"></div>

            <table class="education-block-container">
                <tr>
                    <th class="text"><p>lol</p></th>
                    <th class="image"><img class="education-image" src="/images/school.png" alt='Gargždai "Vaivorykštės" Gymnasium'></th>
                </tr>
            </table>

            <div style="padding: 3%;"></div>

            <p class="table-title">University</p>
            <div class="hairline" style="width: 96%; margin-left: auto; margin-right: auto; margin-top: -1.5%; margin-bottom: 5%;"></div>

            <table class="education-block-container">
                <tr>
                    <th class="image"><img class="education-image" src="/images/uni.jpg" alt='Kaunas University of Technology'></th>
                    <th class="text"><p>lol</p></th>
                </tr>
            </table>

            <div style="padding: 3%;"></div>

            <p class="table-title">Music School</p>
            <div class="hairline" style="width: 96%; margin-left: auto; margin-right: auto; margin-top: -1.5%; margin-bottom: 5%;"></div>

            <table class="education-block-container">
                <tr>
                    <th class="text"><p>lol</p></th>
                    <th class="image"><img class="education-image" src="/images/music_school.jpg" alt='Gargždai Music School'></th>
                </tr>
            </table>

            <div style="padding: 3%;"></div>

            <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- The Close Button -->
                <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img01">

                <!-- Modal Caption (Image Text) -->
                <div class="caption" id="caption"></div>
            </div>

            <script>
                // Get the modal
                var modal = document.getElementById('myModal');

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = $('.education-image');
                var modalImg = $("#img01");
                var captionText = document.getElementById("caption");
                $('.education-image').click(function(){
                    modal.style.display = "block";
                    var newSrc = this.src;
                    modalImg.attr('src', newSrc);
                    captionText.innerHTML = this.alt;
                });

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                modal.style.display = "none";
                }
            </script>
            
        </div>
    </body>
</html>