<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Ejemplo de código embebido en una página XHTML</title>
    <link rel='stylesheet' type='text/css' href='css/style.css' />
  </head>

  <body>
    <h2>Ejemplo de código embebido en una página XHTML</h2>
    <p>Los primeros 10 números primos son:</p>
      <p>
      <?php 
        function isPrime($number) {
          for($j=2; $j<$number; $j++) {
            if ($number%$j == 0) {
              return false;
            }
          }
          return true;
        }
        $n_primos = 0;
        $i = 2;
        while ($n_primos < 10) {
          if (isPrime($i)) {
            echo $i;
      ?>
      <br/>
      </p>
      <?php
            $n_primos++;
          }
          $i++;
        }
      ?>
  </body>
</html>