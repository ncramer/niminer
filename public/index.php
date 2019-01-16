<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="responsiveHexagon/hexagons.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <ul id="hexGrid">

<?php for($i=0; $i<281; $i++) {
echo
'
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="#">
            <h1>Y</h1>
            <p>X</p>
            <img src="" alt="" />
            <h1>'.$i.'</h1>
            <p>nim</p>
          </a>
        </div>
      </li>
';
}
?>
    </ul>
  </body>
</html>
