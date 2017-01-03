<?php
  $datetime1            =        new DateTime($date_start);
  $datetime2            =        new DateTime($date_end);

  $interval             =        $datetime1->diff($datetime2);
  $number_of_days       =        $interval->format("%d days ");


  function format_interval(DateInterval $number_of_days) {
    $result = "";
    if ($interval->y) { $result .= $interval->format("%y years "); }
    if ($interval->m) { $result .= $interval->format("%m months "); }
    if ($interval->d) { $result .= $interval->format("%d days "); }
    if ($interval->h) { $result .= $interval->format("%h hours "); }
    if ($interval->i) { $result .= $interval->format("%i minutes "); }
    if ($interval->s) { $result .= $interval->format("%s seconds "); }

    return $result;
}

 $number_of_days=  format_interval($number_of_days);
?>
