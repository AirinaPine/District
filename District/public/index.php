<?php 
  require __DIR__ . '/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="District Sound is a comprehensive musical duo">
      <meta name="keywords" content="music live duo performing">
    <meta name="viewport" content="width=device-width, initial-scale=1.0", maximum-scale=1.0, user-scalable=no>
    <title>District Sound Music</title>
    <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>

  <body>
    <header>
      <div class="container container-nav">
        <div class="logo-cover">
            <a id="logo">
            <img src="images/logo.png" alt="District Sound">
            </a>
        </div>
<!--          href="javascript:void(0);"-->
        <div           
           class="icon btn-toggle-menu" onclick="openNavigationBar()">
                <i class="fas fa-bars fa-3x"></i>
        </div>

        <nav class="nav-primary" id="menu2">
            <ul id="menu">
              <li><a href="#about" class="btn btn-nav">About us</a></li>
              <li><a href="#music" class="btn btn-nav">Music</a></li>
              <li><a href="#learn" class="btn btn-nav">Learn with us</a></li>
              <li><a href="#contact" class="btn btn-nav">Hire us</a></li>
            </ul>
          </nav>
      </div>
    </header>

    <main>

      <section>
          <div id="parallax">
              <div class="inner-container">
                <h1>District Sound</h1>
                <h6>Acoustic function Duo based in London</h6>
              </div>
          </div>
      </section>

      <hr id="about">

        <article class="container content">
            <h2>About us</h2>
            <div class="content-body">
                  <p>District Sound is a comprehensive musical duo currently based in London, UK featuring singer-songwriter Yvonne Harris-Hercules and guitarist Ovidijus <span lang="lt">Pinevičius</span>.</p>
                  <p>With an emphasis on recreating renowned classics of the yesteryears and today, their setlist features an eclectic range of music across all decades including Motown, Jazz, 60s Soul & R’n’b, 70s & 80s Rock & Alternative right up until music of today.</p>
                  <p>All songs are performed with guitar and vocals creating a distinctive and uniquely genuine quality to their sound and their ability to match dynamic, engaging guitar playing with powerful, absorbing vocals makes them the perfect accompaniment to any kind of event.</p>
            </div>
            <div class="content-img">
                <img src="images/about.JPG" alt="District Sound Duo">
            </div>
      </article>

      <button onclick="topFunction()" id="btn-top" title="Go to top">Top</button>

      <hr class="break" id="music">

      <section>
        <div class="container video-wrap">
            <h2>Music</h2>
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/AN_WbY2HyB8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <iframe src="https://www.youtube.com/embed/yxbb5HsSQVE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <iframe src="https://www.youtube.com/embed/kUDXsZImzEo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
      </section>

      <hr class="break">

      <section id="learn">
        <div class="container media-container">
          <h2>Learn with us</h2>
          <div class="media-wrap">
            <div class="media">
                <img src="images/ovidijus_profile.jpg" alt="Ovidijus - guitar teacher">
                
                <a href="https://www.youtube.com/channel/UCC3fgWd8oF6_h9hWk1M3R7w/videos" target="_blank">
                  <button class="btn btn-primary">Guitar classes</button>
                </a>

                <p>
                  Always wanted to learn to play a guitar? Already know some chords but don't know how to move to the next level? Or maybe wanna master some special techniques? Ovidijus is graudated music teacher and has been playing as a guitarist in various bands and projects since 15.
                </p>
            </div>

            <div class="media">
                <img src="images/yvonne_profile_sm.jpg" alt="Yvonne - vocal coach">
                <a href="https://www.youtube.com/channel/UC_--Ign2dC2lUqA2vJ7DkBw" target="_blank"><button class="btn btn-primary">Voice classes</button></a>
                <p>
                  Can't stop singing in a shower, in a car and even at you work desk? Always had a secret wish to swing on a stage singing confidently for crowds? Yvvone is graduated music teacher and has been performing on stage since childhood.
                </p>
            </div>
          </div>
        </div>
      </section>

      <section id="contact">
        <div class="container contact">
          <h2>Contact us</h2>
          <div class="contact-wrap">
              <div class="contact-item">
                <form id="contact-form" method="post" action="index.php">
                  <p>Name<br>
                  <input type="text" name="name" class="form-control" required></p>
                  <p>Email<br>
                  <input type="email" name="email" class="form-control" required></p>
                  <p>Your message<br>
                  <textarea name="message" class="form-control" required></textarea></p>
                  <button type="submit" name="submit" id="submit" class="btn btn-primary form-control">SEND MESSAGE</button>
                </form>
              </div>
              <address class="contact-item">
                  <ul id="contact-data">
                      <li><a href="mailto:districtsoundmusic@gmail.com"><i class="fas fa-envelope"></i>&nbsp; &nbsp;districtsoundmusic@gmail.com</a></li>
                      <li><a href="tel:+44-7479-867269"><i class="fas fa-phone"></i>&nbsp; &nbsp;+44 7479 867269</a></li>
                      <li><i class="fas fa-map-marker"></i>&nbsp; &nbsp;London, UK</li>
                  </ul>
                  <div class="social-media">
                    <div><a href="https://www.facebook.com/districtsoundmusic/" target="_blank"><i class="fab fa-facebook-square"></i></a></div>
                    <div><a href="https://www.instagram.com/districtsoundmusic/?fbclid=IwAR0SNpR-88rSFJ_bjKBpwUQKSe0UBlvsRTf6qhPhi5oxqqnwUaMywyKpwBw" target="_blank"><i class="fab fa-instagram"></i></a></div>
                    <div><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></div>
                    <div><a href="https://www.youtube.com/channel/UCTPf9tsrpJopCZkfn_KM6hg" target="_blank"><i class="fab fa-youtube"></i></a></div>
                  </div>
              </address>
          </div>
        </div>
    </section>
    </main>

    <footer>
      <div class="container">
        <div class="footer">
          <p>&copy; <?php echo date("Y"); ?> All Rights Reserved. Design by <a href="https://airinapine.com" target="_blank">a Pine <i class="fas fa-air-freshener"></i></a></p>
        </div>
      </div>
    </footer>

    <script src="script/script.js"></script>
  </body>
</html>