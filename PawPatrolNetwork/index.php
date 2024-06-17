<!DOCTYPE html>
<html>
<head>
<title>PawPatrolNetwork</title>
<link rel="stylesheet" href="static/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <header>
    <img  class="logo" src="static/images/logo.png" alt="Logo" >
    <nav class="navbar">
      <ul>
        <li><a href="" style="font-weight: bold;color: black;">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="register.html">Register</a></li>
        <li><a href="">Profile</a></li>
      </ul>
    </nav>
  </header>


  <main>
    <div class="column1" style="width:65%;">
    
      <!-- Carousel -->
      <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="static/images/carousel1.png" alt="Pic1" class="d-block">
          </div>
          <div class="carousel-item">
            <img src="static/images/carousel2.png" alt="Pic2" class="d-block">
          </div>
          <div class="carousel-item">
            <img src="static/images/carousel3.png" alt="Pic3" class="d-block">
          </div>
          <div class="carousel-item">
            <img src="static/images/carousel4.png" alt="Pic4" class="d-block">
          </div>
          <div class="carousel-item">
            <img src="static/images/carousel5.png" alt="Pic5" class="d-block">
          </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
    <div class="column2" style="width:35%;">
    <form
      action="upload.html"
      method="POST"
      onsubmit="validateForm(event)"
      enctype="multipart/form-data">
      <div class="container" >
        <p class="title">Saving a life?</p><br><br>
        <div class="form-container" onclick="onDivClick()">
          <img src="static/images/logo.png" class="upload-icon"  id="uploaded-img"  style="filter: blur(1px);" />
          <div class="upload-text">Click here to upload a file</div>
          <input
            name="ppn"
            id="file-ppn"
            type="file"
            hidden="hidden"
            onchange="onFileChange(event)"/>
        </div>
        <br>
        <button type="submit" class="button-submit">UPLOAD</button><br>
      </div>
    </form>
      </div>
  
  </main>
  <div class="footer" style="display:flex;justify-content:center;">
    <div></div>
    <div class="middle-footer">
      ©2024&nbsp<b>Paw Patrol Network</b>&nbsp All rights reserved
      
    </div>
    <div></div>
  </div>



</body>
<script src="static/js/script.js"></script>


</html>



