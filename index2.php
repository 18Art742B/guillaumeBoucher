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

<body>
  <?php

  $letter = $_GET['letter'];
  $number = $_GET['number'];
  $collection = ['a','b','c','d','e','f'];
  $collectionLength = count($collection, COUNT_RECURSIVE); 

  
  for($n = 0 ; $n < $number ; $n ++){
    for($i = 0 ; $i < $collectionLength ; $i++ ){
      if( $letter != $collection[$i]){
        echo "<span style='color:red;'>$collection[$i]</span>";
      }else{
        echo "<span style='color:blue;'>$collection[$i] </span>";
        break;
      };
    };

  };

  ?>


  



    
  </div>


</body>

</html>