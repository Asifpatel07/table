<?php

	include 'connection.php';
    $bus_name=$_POST['bus_name'];
	$start_from=$_POST['start_from'];
	$end_to=$_POST['end_to'];
	$journeydate=$_POST['journeydate'];
	$start_time=$_POST['start_time'];
	$end_time=$_POST['end_time'];
	$no_of_seats=$_POST['no_of_seats'];
	$price1=$_POST['price1'];
	$booking_close_time=$_POST['booking_close_time'];
	$contact_name=$_POST['contact_name'];
	$contact_number=$_POST['contact_number'];
	$id=$_POST['id'];
    $que = mysqli_query($con,"UPDATE bus SET bus_name='".$bus_name."', start_from='".$start_from."', end_to='".$end_to."', journeydate='".$journeydate."', start_time='".$start_time."', end_time='".$end_time."', no_of_seats='".$no_of_seats."', price='".$price1."', booking_close_time='".$booking_close_time."', contact_name='".$contact_name."', contact_number='".$contact_number."' where id='".$id."' ");
    
	if($que){
		echo "updated";
	}else{
		echo mysqli_error($con);
	}



?>