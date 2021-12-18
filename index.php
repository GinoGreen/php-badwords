<?php 

   $paragraph = "Non c'è una lunghezza 'perfetta' per un paragrafo.<br/>Nella narrativa, talvolta, un paragrafo può essere di una sola frase, quindi breve. Nella saggistica, invece, spesso i paragrafi sono più lunghi. Di solito si dice che 3-5 frasi sono la lunghezza migliore.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bad words PHP</title>
</head>
<style>
   body {
      font-family: monospace;
      font-size: 1.7em;
      background: linear-gradient();
   }
   h1 {
      color: #24559D;
   }
   #lenght {
      color: #BE503C;
   }
</style>
<body>

   <h1>Bad words</h1>

   <p><?php echo str_replace($_GET['badword'], '***', $paragraph); ?></p>

   <h4>Il paragrafo sopra citato ha una lunghezza di <span id="lenght"><?php echo strlen($paragraph) ?></span> caratteri</h4>
   
</body>
</html>