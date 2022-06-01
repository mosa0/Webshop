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




<body>

    <div class="logo-1">
      <?php $img_logo = 'img\logo.svg' ;
?>
<div class=shopknop><button  onclick="window.location.href='#north';"type="button" class="btn btn-light">Start shopping now.
  
</button>
</div>
<img src="<?=$img_logo?>" alt="" srcset="">
    </div>
    <div class="logo">
    <?php $img_logo1 = 'img\twitter_header_photo_2.png' ;
?>
  <img src="<?=$img_logo1?>" class="img-thumbnail" alt="...">
    </div>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/webshop">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#north">The North Face</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#ye">Yeezy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tm">Tommy Hilfiger</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    </nav>