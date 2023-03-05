<?php



//due date

$date2raw = date($row->order_due);



//set time zone

if(!empty($row->order_tz)){

     date_default_timezone_set($row->order_tz);

}
else
{

   date_default_timezone_set("America/New_York");

}

//current date

$dateraw = date("Y-m-d H:i:s");


function format_interval(DateInterval $interval) {
    $result = "";
    if ($interval->y) { $result .= $interval->format("%y years "); }
    if ($interval->m) { $result .= $interval->format("%m months "); }
    if ($interval->d) { $result .= $interval->format("%d days "); }
    if ($interval->h) { $result .= $interval->format("%h hours "); }
    if ($interval->i) { $result .= $interval->format("%i minutes "); }
    if ($interval->s) { $result .= $interval->format("%s seconds "); }

    return $result;
}

$first_date = new DateTime($dateraw); //current time
$second_date = new DateTime($date2raw); //due date

$difference = $first_date->diff($second_date);

if($first_date<$second_date){
   // due  green
   echo  "<span style='color:green'>" .format_interval($difference)."</span>";

}
else{
	// late red
	echo  "<span style='color:red'>" .format_interval($difference)."</span>";
}








