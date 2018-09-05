<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <meta name="description" content="">
  <link rel="stylesheet" href="css/porthome.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <title>Alex Mondene's Portfolio</title>
</header>
<body>
  <nav>
    <ul>
      <li><a href="#about">About</a></li>
      <li><a href="#projects">Projects</a><li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>
  <div id="about" class="about">
    <div>
      <h1>Hi, I'm Alex.</h1>
      <p>I'm a web & graphic designer based in Orange County. Here are some of my recent projects.</p>
    </div>
  </div>
  <div id="projects" class="project-section">
    <h2>Projects</h2>
    <ul id="filterContainer" class="filterBtn">
      <button class="gridBtn active" onclick="filterSelection('all'); changeTab(this);">All</button>
      <button class="gridBtn" onclick="filterSelection('web'); changeTab(this);">Web</button>
      <button class="gridBtn" onclick="filterSelection('print'); changeTab(this);">Print</button>
      <button class="gridBtn" onclick="filterSelection('photography'); changeTab(this);">Photography</button>
    </ul>
    <div class="all">
      <div class="photoBtn photography show">
        <div class="overlay">
        </div>
        <div class="project">
          <img src="images/poker.jpg" alt="poker pic">
        </div>
        <div class="modalOuter" data-lightbox="image-1">
          <div class="modalInner">
            <h1>This is the modal #1</h1>
            <span class="closeModal">X</span>
          </div>
        </div>
      </div>
      <div class="photoBtn photography show">
        <div class="overlay">
        </div>
        <div class="project">
          <img src="images/poker.jpg" alt="poker pic">
        </div>
      </div>
      <div class="photoBtn photography show">
        <div class="overlay">
        </div>
        <div class="project">
          <img src="images/poker.jpg" alt="poker pic">
        </div>
        <div class="modalOuter">
          <div class="modalInner">
            <h1>This is the modal #2</h1>
            <span class="closeModal">X</span>
          </div>
        </div>
      </div>
      <div class="photoBtn print show">
        <div class="overlay">
        </div>
        <div class="project">
          <img src="images/1000 steps.jpg" alt="1000 steps">
        </div>
      </div>
      <div class="photoBtn print show">
        <div class="overlay">
        </div>
        <div class="project">
          <img src="images/1000 steps.jpg" alt="1000 steps">
        </div>
      </div>
      <div class="photoBtn print show">
        <div class="overlay">
        </div>
        <div class="project">
          <img src="images/1000 steps.jpg" alt="1000 steps">
        </div>
      </div>
      <div class="photoBtn web show">
        <div class="overlay">
        </div>
        <div class="project">
          <img src="images/indoor pool.jpg" alt="indoor pool">
        </div>
      </div>
      <div class="photoBtn web show">
        <div class="overlay">
        </div>
        <div class="project">
          <img src="images/indoor pool.jpg" alt="indoor pool">
        </div>
      </div>
      <div class="photoBtn web show">
        <div class="overlay">
        </div>
        <div class="project">
          <img src="images/indoor pool.jpg" alt="indoor pool">
        </div>
      </div>
    </div>
  </div>
  <div id="contact" class="contact">
    <p>Contact me here: amondene@gmail.com</p>
  </div>
  <div id="backdrop" class="backdrop"></div>
  <footer>
    <script src="js/function.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/slick/slick.min.js"></script>
    <script src="js/lightbox.js"></script>
  </footer>
</body>
</html>
