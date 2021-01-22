<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="jquery.js"></script>
    <script>
      $(function(){
      var time = 3;
      function redirect()
    {
      var id =setTimeout(redirect, 1000);
      $(".timer").html(time);
      if (time == 0) {
        clearTimeout(id)
        window.location.href="logout.php";
      }
      time --;
    }
 redirect();
});
    </script>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <audio autoplay="autoplay" loop="loop"><source src="ct.mp3" type="audio/mpeg"></audio>
    <div id="loading" class="loading">
      <span>LOADING</span>
    </div>
  </body>
</html>
