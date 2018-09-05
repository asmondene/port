<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <meta name="description" content="">
  <link rel="stylesheet" href="css/jstest.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <title>JS Test</title>
</header>
<body>
  <div class="main-container">
    <div id="squareBox" class="">
      <div class="square color1" onclick="swapClass(this)">
      </div>
      <div class="square color1" onclick="swapClass(this)">
      </div>
      <div class="square color1" onclick="swapClass(this)">
      </div>
      <div class="square color1" onclick="swapClass(this)">
      </div>
    </div>
  </div>
  <div id="backdrop" class="backdrop"></div>
  <button type="button" name="button">open modal</button>
  <div class="modalContainer">
    <div class="modal">
      <button type="button" id="closeModal" name="button">X</button>
      <p>this is the modal</p>
      <span></span>
    </div>
  </div>
  <script src="js/jstest.js" charset="utf-8"></script>
</body>
</html>
