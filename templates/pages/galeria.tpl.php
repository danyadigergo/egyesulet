<h1>Galéria</h1>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet type=text/css href=styles.css>
</head>
<body>
    <main>
        <button><img id="leftarrow" src="images\left_arrow.png"/></button>
        <div class="box">    
            <img id="photo"></img>
            <div class="grey-container" style="margin-left:30px;">
                <h1 id="photo-title"></h1>
                <p id="photo-description"></p>
            </div>
        </div>
        <button><img id="rightarrow" src="images\right_arrow.png"/></button>
    </main>
    <section class="thumbnails">
        <img class="thumbnail" src="images\Szeged_csapat.jpg"/>
        <img class="thumbnail" src="images\szurkolok.jpg"/>
        <img class="thumbnail" src="images\pick-handball-logo.png"/>
    </section>
    <form action="/galeria.tpl.php">
        <label for="img">Válasszon képet:</label>
        <input type="file" id="img" name="img" accept="images\*">
        <input type="submit" class ="feltoltes">
    </form>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
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
</body>
</html>