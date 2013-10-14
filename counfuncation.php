<?php 
function countdowen($endtime) 
{
 $date=date('r', strtotime($endtime));
	 $eday=explode(',',$date);
  $eday1=$eday[1];
 $eday3=explode('-',$eday1);
   $eday4=$eday3[0];
 /* echo $sday5=$sday3[1];
 echo $sday2=$sday[0];*/

	
	  $eday11=explode(' ', $eday4);
      $day21=$eday11[1];
		 $month21=$eday11[2];
		 $emont= convertMonth($month21,0);
	 	 $year21=$eday11[3];
	$time1=$eday11[4];
	 $etime=explode(':', $time1);
	   	$ehrs=$etime[0];
	  	$emin=$etime[1];
	   	$esec=$etime[2];
	
   $the_countdown_date=mktime($ehrs,$emin,@$ssec,$emont,$day21,$year21);			//start date made hear



  // make a unix timestamp for the given date
  //countdowen date made hear 

  // get current unix timestamp
  $today = time();

   $difference = $the_countdown_date - $today;
  if ($difference < 0) $difference = 0;
 
  return $difference;
  }
  function convertMonth($month, $format) 
{ 
    # Check for valid parameters # 
    if ($format !== 0 && $format !== 1 && $format !== 2 && $format !== 3 && $format !== 4) 
    { 
        printf('Wrong parameter for $format. This must be 0, 1, 2, 3 or 4.'); 
        exit(); 
    } 
        
    $january = array(1, 'j', 'ja', 'jan', 'january'); 
    $february = array(2, 'f', 'fe', 'feb', 'february'); 
    $march = array(3, 'm', 'ma', 'mar', 'march'); 
    $april = array(4, 'a', 'ap', 'apr', 'april'); 
    $may = array(5, 'm', 'ma', 'may', 'may'); 
    $june = array(6, 'j', 'ju', 'jun', 'june'); 
    $july = array(7, 'j', 'ju', 'jul', 'july'); 
    $august = array(8, 'a', 'ag', 'aug', 'august'); 
    $september = array(9, 's', 'se', 'sep', 'september'); 
    $october = array(10, 'o', 'oc', 'oct', 'october'); 
    $november = array(11, 'n', 'no', 'nov', 'november'); 
    $december = array(12, 'd', 'de', 'dec', 'december'); 
        
    $monthsOfTheYear = array($january, $february, $march, $april, $may, $june, $july, 
                             $august, $september, $october, $november, $december); 
        
    if (!is_array($month)) 
    { 
        $month = array(strtolower($month)); 
    } 
    
    $inputSize = count($month);    
    
    for ($i = 0; $i < 12; $i++) 
    { 
        $match = array_intersect($month, $monthsOfTheYear[$i]); 
            
        if (!empty($match)) 
        { 
            if ($inputSize > 1) 
            { 
                $result[] = ucfirst($monthsOfTheYear[$i][$format]); 
            } 
            else 
            { 
                $result = ucfirst($monthsOfTheYear[$i][$format]); 
                return $result; 
            } 
        } 
        else 
        { 
            if ($i === 11) 
            { 
                printf('Wrong parameter for $month.'); 
                exit(); 
            } 
        } 
    } 
    
    return $result; 
}
?>


<?php 
function countdowen1($endtime) 
{
 $date=date('r', strtotime($endtime));
	 $eday=explode(',',$date);
  $eday1=$eday[1];
 $eday3=explode('-',$eday1);
   $eday4=$eday3[0];
 /* echo $sday5=$sday3[1];
 echo $sday2=$sday[0];*/

	
	  $eday11=explode(' ', $eday4);
      $day21=$eday11[1];
		 $month21=$eday11[2];
		 $emont= convertMonth1($month21,0);
	 	 $year21=$eday11[3];
	$time1=$eday11[4];
	 $etime=explode(':', $time1);
	   	$ehrs=$etime[0];
	  	$emin=$etime[1];
	   	$esec=$etime[2];
	
   $the_countdown_date=mktime($ehrs,$emin,@$ssec,$emont,$day21,$year21);			//start date made hear



  // make a unix timestamp for the given date
  //countdowen date made hear 

  // get current unix timestamp
  $today = time();

   $difference = $the_countdown_date - $today;
  if ($difference < 0) $difference = 0;
 
  return $difference;
  }
  function convertMonth1($month, $format) 
{ 
    # Check for valid parameters # 
    if ($format !== 0 && $format !== 1 && $format !== 2 && $format !== 3 && $format !== 4) 
    { 
        printf('Wrong parameter for $format. This must be 0, 1, 2, 3 or 4.'); 
        exit(); 
    } 
        
    $january = array(1, 'j', 'ja', 'jan', 'january'); 
    $february = array(2, 'f', 'fe', 'feb', 'february'); 
    $march = array(3, 'm', 'ma', 'mar', 'march'); 
    $april = array(4, 'a', 'ap', 'apr', 'april'); 
    $may = array(5, 'm', 'ma', 'may', 'may'); 
    $june = array(6, 'j', 'ju', 'jun', 'june'); 
    $july = array(7, 'j', 'ju', 'jul', 'july'); 
    $august = array(8, 'a', 'ag', 'aug', 'august'); 
    $september = array(9, 's', 'se', 'sep', 'september'); 
    $october = array(10, 'o', 'oc', 'oct', 'october'); 
    $november = array(11, 'n', 'no', 'nov', 'november'); 
    $december = array(12, 'd', 'de', 'dec', 'december'); 
        
    $monthsOfTheYear = array($january, $february, $march, $april, $may, $june, $july, 
                             $august, $september, $october, $november, $december); 
        
    if (!is_array($month)) 
    { 
        $month = array(strtolower($month)); 
    } 
    
    $inputSize = count($month);    
    
    for ($i = 0; $i < 12; $i++) 
    { 
        $match = array_intersect($month, $monthsOfTheYear[$i]); 
            
        if (!empty($match)) 
        { 
            if ($inputSize > 1) 
            { 
                $result[] = ucfirst($monthsOfTheYear[$i][$format]); 
            } 
            else 
            { 
                $result = ucfirst($monthsOfTheYear[$i][$format]); 
                return $result; 
            } 
        } 
        else 
        { 
            if ($i === 11) 
            { 
                printf('Wrong parameter for $month.'); 
                exit(); 
            } 
        } 
    } 
    
    return $result; 
}
?>



<?php 
function countdowen2($endtime) 
{
 $date=date('r', strtotime($endtime));
	 $eday=explode(',',$date);
  $eday1=$eday[1];
 $eday3=explode('-',$eday1);
   $eday4=$eday3[0];
 /* echo $sday5=$sday3[1];
 echo $sday2=$sday[0];*/

	
	  $eday11=explode(' ', $eday4);
      $day21=$eday11[1];
		 $month21=$eday11[2];
		 $emont= convertMonth2($month21,0);
	 	 $year21=$eday11[3];
	$time1=$eday11[4];
	 $etime=explode(':', $time1);
	   	$ehrs=$etime[0];
	  	$emin=$etime[1];
	   	$esec=$etime[2];
	
   $the_countdown_date=mktime($ehrs,$emin,@$ssec,$emont,$day21,$year21);			//start date made hear



  // make a unix timestamp for the given date
  //countdowen date made hear 

  // get current unix timestamp
  $today = time();

   $difference = $the_countdown_date - $today;
  if ($difference < 0) $difference = 0;
 
  return $difference;
  }
  function convertMonth2($month, $format) 
{ 
    # Check for valid parameters # 
    if ($format !== 0 && $format !== 1 && $format !== 2 && $format !== 3 && $format !== 4) 
    { 
        printf('Wrong parameter for $format. This must be 0, 1, 2, 3 or 4.'); 
        exit(); 
    } 
        
    $january = array(1, 'j', 'ja', 'jan', 'january'); 
    $february = array(2, 'f', 'fe', 'feb', 'february'); 
    $march = array(3, 'm', 'ma', 'mar', 'march'); 
    $april = array(4, 'a', 'ap', 'apr', 'april'); 
    $may = array(5, 'm', 'ma', 'may', 'may'); 
    $june = array(6, 'j', 'ju', 'jun', 'june'); 
    $july = array(7, 'j', 'ju', 'jul', 'july'); 
    $august = array(8, 'a', 'ag', 'aug', 'august'); 
    $september = array(9, 's', 'se', 'sep', 'september'); 
    $october = array(10, 'o', 'oc', 'oct', 'october'); 
    $november = array(11, 'n', 'no', 'nov', 'november'); 
    $december = array(12, 'd', 'de', 'dec', 'december'); 
        
    $monthsOfTheYear = array($january, $february, $march, $april, $may, $june, $july, 
                             $august, $september, $october, $november, $december); 
        
    if (!is_array($month)) 
    { 
        $month = array(strtolower($month)); 
    } 
    
    $inputSize = count($month);    
    
    for ($i = 0; $i < 12; $i++) 
    { 
        $match = array_intersect($month, $monthsOfTheYear[$i]); 
            
        if (!empty($match)) 
        { 
            if ($inputSize > 1) 
            { 
                $result[] = ucfirst($monthsOfTheYear[$i][$format]); 
            } 
            else 
            { 
                $result = ucfirst($monthsOfTheYear[$i][$format]); 
                return $result; 
            } 
        } 
        else 
        { 
            if ($i === 11) 
            { 
                printf('Wrong parameter for $month.'); 
                exit(); 
            } 
        } 
    } 
    
    return $result; 
}
?>

