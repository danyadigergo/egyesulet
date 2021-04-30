<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images\Szeged_csapat.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images\szurkolok.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images\pick-handball-logo.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<form>
    <?php if (isset($_SESSION['login'])) { ?><div class="form-group">
        <label for="exampleFormControlFile1">Kép feltöltése</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <button type="submit" href="images\uploaded_images">Feltöltés</button>
    <?php }?>
</form>

<script>
$("carousel-inner").append("szöveg");
</script>