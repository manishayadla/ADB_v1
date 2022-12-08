<?php
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
   case '/':                   // URL (without file name) to a default screen
      require 'index1.php';
      break; 
   case '/createBill.php':     // if you plan to also allow a URL with the file name 
      require 'createBill.php';
      break;              
   case '/createDiagnosis.php':
      require 'createDiagnosis.php';
      break;
   case '/deleteBill.php':
      require 'deleteBill.php';
      break;
   case '/deleteDiagnosis.php':
      require 'deleteDiagnosis.php';
      break;   
   case '/updateBill.php':
      require 'updateBill.php';
      break;
   case '/updateDiagnosis.php':
      require 'updateDiagnosis.php';
      break;  
   case '/viewBill.php':
      require 'viewBill.php';
      break;
   case '/viewDiagnosis.php':
      require 'viewDiagnosis.php';
      break;
   default:
      http_response_code(404);
      exit('Not Found');
}  
?>
