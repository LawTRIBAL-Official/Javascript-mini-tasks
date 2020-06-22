<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
  <link rel="stylesheet" href="main.css"/>
  <link rel="stylesheet" href="home.css"/>
  <title></title>
</head>
<body>
  <nav>
    <div class="logo">
      <h4 class="color_flipper_nav_title">Color Flipper</h4>
    </div>
    <ul class="nav-links">
      <li>
        <a id="home" href="https://www.lawtribal.com">Home</a>
      </li>
      <li>
        <a id="source" href="#">Raw Code</a>
      </li>
      <li>
        <a id="github" href="#">GitHub</a>
      </li>
    </ul>
    <!--Menu design-->
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>


  <main>
    <div class="wrapper">
      <section class="color_flipper">
        <div class="color_flipper_container">
          <div class="color_flipper_title">
            <h1>Theme color:
            <span class="color" id="color">
              #4495e
            </span>
          </h1>
          <p>You can type any hexcode that is viable here and it'll then flip the colors of the website. </p>
          </div>
          <div class="color_flipper_content">
            <div class="tab" id="color_generate" name="color_generate">Generate</div>

            <!--Random Color Generating button-->
          </div>
        </div>
      </section>
    </div>
  </main>
  <script src="ColorFlipper.js"></script>
  <script src="navSlide.js"></script>
</body>
</html>
