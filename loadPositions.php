<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
 
 include_once 'service/PositionService.php';
  showPositions();
}
function showPositions() {
 $cs = new PositionService();
 header('Content-type: application/json');
 echo json_encode(array("positions" => $cs->findAll()));
}
