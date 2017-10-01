<?php  

/*Format the date
 * 
 */
 
 function formatDate($date) {
 	
	return date('F j, Y,g:i a',strtotime($date));
 }


  ?>