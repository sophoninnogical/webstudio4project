<?php
$nOrder = $_POST["name"];
$telOrder = $_POST["telnumber"];
//$item = $_GET["item"];
$item = $_SERVER['PHP_SELF'];
echo $nOrder.$telOrder;
echo $telOrder;
echo $item;

include 'conn.php';
  $sql = "INSERT INTO c_custo (c_name,c_tel)
          VALUE('".$nOrder."',$telOrder)";
    echo  $sql;
          if ($conn->query($sql)===true) {
              echo "success";
             header("Location: index.php");
          }
          else {
            echo "error".$sql.$conn->error;
          }
 ?>
