<?php 
if(isset($_POST['name'])){
  $name = $_POST['name'];

}
?>
<!DOCTYPE html>
  <html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
    <form method='POST'>
    <h2>Please input your name:</h2>
  <input type="text" name="name">
  <input type="submit" value="Submit Name">
  </form>

  <h3> hello <?php echo $name ?? null ?>  </h3>
  </body>
  </html>


  
  