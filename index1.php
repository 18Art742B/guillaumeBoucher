<html>

<head>

  <style>

  .container {
    position: relative;
    width: 100%;
    height: 800px;
    background-color: grey;
  }


  .a {
    color:blue;
    background-color: purple;
  }



/*  When container is b*/
  .b {
    color:blue;
    background-color: blue;
  }

  p {
    color: black;
  }


  </style>

</head>


<?php
  $letter = $_GET['letter']; 

  echo "<body class='$letter'>";
?>



  <form name="form" action="" method="get">
      <input type="text" name="letter" id="subject">
  </form>


  

  </div>
</body>

</html>