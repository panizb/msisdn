<html>
    <head><link type="text/css" rel="stylesheet" href="style.css" /></head>
    <body>
     <div class='header'>
      <div class='headup'>
       <div class='pic'>
        <div class='spic'><img src='pictures/m.png' width='100%' height='100%'></img></div>
        <div class='spic'><img src='pictures/s.png' width='100%' height='100%'></img></div>
        <div class='spic'><img src='pictures/1.png' width='100%' height='100%'></img></div>
        <div class='spic'><img src='pictures/d.png' width='100%' height='100%'></img></div>
        <div class='spic'><img src='pictures/s.png' width='100%' height='100%'></img></div>
        <div class='spic'><img src='pictures/n.png' width='100%' height='100%'></img></div>
      </div>
      <div id='menu'>
        <div class='icon' style='width:100px;'><a>about us</a></div>
        <div class='icon' style='width:150px;'><a>country codes</a></div>
        <div class='icon'><a>gitub</a></div>
        <div class='icon'><a>Home</a></div> 
      </div>
     </div>
     <div class='header1'></div>
    </div>
    <div class='page' style='height:600px;'>
    <div class='line'></div>
     <div id='form' style='width:530px;height:598px;'>
     <div class='type'>Information:</div>
      <div id='input' style='height:545px; width:528px; '>
        <?php
          require 'parse.php';
          require 'vendor/autoload.php';
          $number = $_POST['num'];
          $p = new Parsing\Parse();
          $number = preg_replace('/[^0-9]/', '', $number);
          $result = $p->digest($number);
        ?>
 
      </div>
    </div>
   </div>
<div class='footer'>    <div class='line'></div></div>



  </body>
</html> 