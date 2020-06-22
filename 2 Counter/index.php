<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="nav.css"/>
  <link rel="stylesheet" href="style.css"/>
  <title>Counter</title>
</head>
<body>
  <nav>
    <div class="logo">
      <h4 class="color_flipper_nav_title">Counter</h4>
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
      <div class="counter">
          <h1>Counter</h1>
          <span id="value">0</span>
          <div class="button-container">
            <button class="btn decrease">decrease</button>
            <button class="btn reset">reset</button>
            <button class="btn increase">increase</button>
          </div>
      </div>
    </div>
  </main>
  <!--Javascript-->
  <script src="app.js"></script>
</body>
</html>
