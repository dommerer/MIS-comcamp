<?php 
include_once("Connections/connection.php");
$sql = "SELECT FilesID, FilesName FROM comcamp_slids LIMIT 5";
$resultset = mysqli_query($objCon, $sql) or die("database error:". mysqli_error($objCon));
$image_count = 0;
$button_html = '';		
$slider_html = '';	
$thumb_html = '';
while( $rows = mysqli_fetch_assoc($resultset)){	
	$active_class = "";			
	if(!$image_count) {
		$active_class = 'active';					
		$image_count = 1; 
	}	
	$image_count++;
		
	// slider image html
	$slider_html.= "<div class='carousel-item ".$active_class."'>";
    $slider_html.= "<img src='image/".$rows['FilesName']."' alt='1.jpg' class='img-responsive'>";
    $slider_html.= "<div class='carousel-caption d-none d-md-block'></div></div>";
	
	// Button html
	$button_html.= "<li data-target='#carousel-example-generic' data-slide-to='".$image_count."' class='".$active_class."'></li>";
}
?>