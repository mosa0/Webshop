<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>webshop</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link href="style.css" rel="stylesheet" />
  </head>

  <?php 
  $title = "The North Face Puffer Jackets Line"
  ?>

  <body>
    <div class="logo">
  <img src="./img/twitter_header_photo_2.png" class="img-thumbnail" alt="...">
    </div>
    
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">The North Face</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Yeezy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tommy Hilfiger</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    </nav>
    <div class="cards">
      <div class="tnf-t"><h1><?php echo $title?></h1></div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="./img/tnf1.jpg" class="card-img-top kaart" alt="..." />
            <div class="card-body">
              <h5 class="card-title">The North Face</h5>
              <p class="card-text">
                Black Puffer Jacket
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="./img/tnf2.png" class="card-img-top kaart" alt="..." />
            <div class="card-body">
              <h5 class="card-title">The North Face</h5>
              <p class="card-text">
                Orange Puffer Jacket
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="./img/tnf3.png" class="card-img-top kaart" alt="..." />
            <div class="card-body">
              <h5 class="card-title">The North Face</h5>
              <p class="card-text">
                Yellow Puffer Jacket
              </p>
            </div>
          </div>
        </div>
        <div class="yeezy-t"><h1>The Yeezy Line</h1></div>
        <div class="col">
          <div class="card">
            <img src="./img/yeezy1.jpg" class="card-img-top kaart2" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Yeezy 350 V2</h5>
              <p class="card-text">
                Black Pirate
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="./img/yeezy2.jpg" class="card-img-top kaart2" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Yeezy 350 V2</h5>
              <p class="card-text">
                Ash Pearle
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="./img/yeezy3.jpg" class="card-img-top kaart2" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Yeezy 350 V2</h5>
              <p class="card-text">
                Oreo
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="tommy-t"><h1>The Tommy Hilfiger Line</h1></div>
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="./img/tom1.jpg" class="card-img-top kaart3" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Tommy Hilfiger Crewneck</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="./img/tom2.jpg" class="card-img-top kaart3" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Tommy Hilfiger crewneck</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="./img/tom3.jpg" class="card-img-top kaart4" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Tommy Hilfiger Hoodie</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural
                lead-in to additional content.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="./img/tom4.jpg" class="card-img-top kaart5" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Tommy Hilfiger Hoodie</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="row1">
      <div class="column1">
        <img src="./img/tnf1.jpg" alt="" style="width: 50%" />
      </div>
      <div class="column1">
        <img src="./img/tnf2.png" alt="" style="width: 50%" />
      </div>
      <div class="cor1">
        <div class="column1">
          <img src="./img/tnf3.png" alt="" style="width: 50%" />
        </div>
      </div>
      <div class="column2">
        <img src="./img/yeezy1.jpg" alt="" style="width: 50%" />
      </div>
      <div class="column2">
        <img src="./img/yeezy2.jpg" alt="" style="width: 50%" />
      </div>
      <div class="column2">
        <img src="./img/yeezy3.jpg" alt="" style="width: 50%" />
      </div>
    </div> -->
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"
  ></script>
</html>
