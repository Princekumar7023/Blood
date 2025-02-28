<?php
include('./connect2.php');
error_reporting(0);
session_start();
$userprofile = $_SESSION['user_name'];

if ($userprofile == true) {
} else {
  header('location:Login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Home.css" />
    <script src="./Registration.js"></script>
    <script src="./Blood_Request.js"></script>
    <script src="./Display.js"></script>
    <title>Document</title>
  </head>
  <body>
    <main class="hero-section" id="home">
      <section class="container">
        <div class="hero-content">
          <nav class="navbar">
            <h1 class="nav-logo">MK</h1>
            <ul class="nav-links">
              <li><a href="./InventoryRoleValidation.php">Inventory</a></li>
              <li><a href="#About"> About Us</a></li>
              <li><a href="./backupInventory.php">Explore</a></li>
              <li><button ><a href="./Logout.php">Log Out</a></button></li>
            </ul>
          </nav>
        </div>
      </section>
      <i id="moveDown" class="fa-chevron-down bounce"><a href="#About"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="40px" height="60px" viewBox="0 0 256 256" xml:space="preserve">

          <defs>
          </defs>
          <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
            <path d="M 58.799 58.33 L 16.466 15.998 c -1.059 -1.059 -2.776 -1.059 -3.835 0 L 0.794 27.834 c -1.059 1.059 -1.059 2.776 0 3.835 l 42.333 42.333 c 1.059 1.059 2.776 1.059 3.835 0 l 11.837 -11.837 C 59.858 61.107 59.858 59.39 58.799 58.33 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #e53935; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
            <path d="M 31.201 58.33 l 42.333 -42.333 c 1.059 -1.059 2.776 -1.059 3.835 0 l 11.837 11.837 c 1.059 1.059 1.059 2.776 0 3.835 L 46.873 74.002 c -1.059 1.059 -2.776 1.059 -3.835 0 L 31.201 62.166 C 30.142 61.107 30.142 59.39 31.201 58.33 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #e53935; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
          </g>
        </svg></a></i>
    </main>
  

    <div class="flip-portion" id="About">
      <div class="flip-card-container" style="--hue: 220">
        <div class="flip-card">
          <div class="card-front">
            <figure>
              <div class="img-bg"></div>
              <img
                src="/main 1.jpg"
                alt="Brohm Lake"
              />
              <figcaption>Blood Donation</figcaption>
            </figure>

            <ul class="flip-card-detail">
              <li>Blood is the most precious gift that anyone can give to another person ~The gift of life.</li>
            </ul>
          </div>

          <div class="card-back">
            <figure>
              <div class="img-bg"></div>
              <img
                src="/main 1.jpg"
                alt="Brohm Lake"
              />
            </figure>

            <button onclick="register()">Donate</button>

            <div class="design-container">
              <span class="design design--1"></span>
              <span class="design design--2"></span>
              <span class="design design--3"></span>
              <span class="design design--4"></span>
              <span class="design design--5"></span>
              <span class="design design--6"></span>
              <span class="design design--7"></span>
              <span class="design design--8"></span>
            </div>
          </div>
        </div>
      </div>
      <!-- /flip-card-container -->

      <!-- flip-card-container -->
      <div class="flip-card-container" style="--hue: 170">
        <div class="flip-card">
          <div class="card-front">
            <figure>
              <div class="img-bg"></div>
              <img
                src="./1.jpg"
                alt="Image 2"
              />
              <figcaption>Need Blood?</figcaption>
            </figure>

            <ul class="flip-card-detail">
              <li>Blood is the most precious gift that anyone can give to another person ~The gift of life.</li>
            </ul>
          </div>

          <div class="card-back">
            <figure>
              <div class="img-bg"></div>
              <img
                src="./1.jpg"
                alt="image-2"
              />
            </figure>

            <button onclick="request()">Request</button>

            <div class="design-container">
              <span class="design design--1"></span>
              <span class="design design--2"></span>
              <span class="design design--3"></span>
              <span class="design design--4"></span>
              <span class="design design--5"></span>
              <span class="design design--6"></span>
              <span class="design design--7"></span>
              <span class="design design--8"></span>
            </div>
          </div>
        </div>
      </div>
      <!-- /flip-card-container -->

      <!-- flip-card-container -->
      <div class="flip-card-container" style="--hue: 350">
        <div class="flip-card">
          <div class="card-front">
            <figure>
              <div class="img-bg"></div>
              <img
                src="./2.jpg"
                alt="Brohm Lake"
              />
              <figcaption>Records</figcaption>
            </figure>

            <ul class="flip-card-detail">
              <li>Blood is the most precious gift that anyone can give to another person ~The gift of life.</li>
            </ul>
          </div>

          <div class="card-back">
            <!-- only if the image is necessary -->
            <figure>
              <div class="img-bg"></div>
              <img
                src="./2.jpg"
                alt="Brohm Lake"
              />
            </figure>

            <button><a href="./RoleValidation.php">Donor</a><br><a href="./RoleValidation2.php">Requester</a></button>
            
            <!-- can add svg here and remove these eight spans -->
            <div class="design-container">
              <span class="design design--1"></span>
              <span class="design design--2"></span>
              <span class="design design--3"></span>
              <span class="design design--4"></span>
              <span class="design design--5"></span>
              <span class="design design--6"></span>
              <span class="design design--7"></span>
              <span class="design design--8"></span>
            </div>
          </div>
        </div>
      </div>
      <!-- /flip-card-container -->
      <i id="moveDown" class="fa-chevron-down2"><a href="#home"><svg class="svg2" width="50px" height="50px" viewBox="-1.92 -1.92 27.84 27.84" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.00024000000000000003" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)">

          <g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)">

            <rect x="-1.92" y="-1.92" width="27.84" height="27.84" rx="13.92" fill="" strokewidth="0" />

          </g>

          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.288" />

          <g id="SVGRepo_iconCarrier">
            <path d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16.06 13.79C15.91 13.94 15.72 14.01 15.53 14.01C15.34 14.01 15.15 13.94 15 13.79L12 10.79L9 13.79C8.71 14.08 8.23 14.08 7.94 13.79C7.65 13.5 7.65 13.02 7.94 12.73L11.47 9.2C11.76 8.91 12.24 8.91 12.53 9.2L16.06 12.73C16.35 13.03 16.35 13.5 16.06 13.79Z" fill="#ffffff" />
          </g>

        </svg>
      </a></i>
    </div>  
  </body>
</html>



