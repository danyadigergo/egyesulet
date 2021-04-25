<h1>Galéria</h1>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Első webapp</title>
    <link rel=stylesheet type=text/css href=styles.css>
</head>
<body>
    <main style="height:600px;">
        <button><img id="leftarrow" src="http://stayathome-syllabus.greenfox.academy/week03/assets/arrow.svg"/></button>
        <div class="box">    
            <img id="photo"></img>
            <div class="grey-container" style="margin-left:30px;">
                <h1 id="photo-title"></h1>
                <p id="photo-description"></p>
            </div>
        </div>
        <button><img id="rightarrow" src="http://stayathome-syllabus.greenfox.academy/week03/assets/arrow.svg"/></button>
    </main>
    <section class="thumbnails">
        <img class="thumbnail" src="images/lightspeed.jpg"/>
        <img class="thumbnail" src="images/dawn.jpg"/>
        <img class="thumbnail" src="images/lawa.jpg"/>
        <img class="thumbnail" src="images/space.jpg"/>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="javascript.js"></script>
</body>
</html>