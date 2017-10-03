<?php

$obj = new main();

class main {
  
  public function __construct(){
    
    $date =  date('Y-m-d', time());
    echo "The value of \$date: ".$date."<br>";

    $tar = "2017/05/24";
    echo "The value of \$tar: ".$tar."<br>";

    $year = array("2012", "396", "300","2000", "1100", "1089");
    echo "The value of \$year: ";
    print_r($year);

    $text = "<p><b> Question 2 </b></p>";
    printFunction::printText($text);
    DateFunction::dtReplace($date);

    $text = "<p><b> Question 3 </b></p>";
    printFunction::printText($text);
    DateFunction::dtCompare($date,$tar);

    $text = "<h4> Question 4 </h4>";
    printFunction::printText($text);
    DateFunction::dtPosition($date);
    
    $text = "<h4> Question 5 </h4>";
    printFunction::printText($text);
    DateFunction::dtWordCount();

    $text = "<h4> Question 6 </h4>";
    printFunction::printText($text);
    DateFunction::strLength() ;

    $text = "<h4> Question 7 </h4>";
    printFunction::printText($text);
    DateFunction::strAscii();
    
    $text = "<h4> Question 8 </h4>";
    printFunction::printText($text);
    DateFunction::dtLastChar($date);

    $text = "<h4> Question 9 </h4>";
    printFunction::printText($text);
    DateFunction::dtExplode($date) ;

    $text = "<h4> Question 10a </h4>";
    printFunction::printText($text);
    DateFunction::dtLeapForEach($year) ;

    $text = "<h4> Question 10b </h4>";
    printFunction::printText($text);
    DateFunction::dtLeapFor($year);
 }
}

class printFunction{
  static public function printText($text) {
    
     echo "<hr>";
     echo $text;
    
  }
}

//Question2
class DateFunction{
  
  static public function dtReplace($date){
    
    $date_new = str_replace('-','/',$date);
    echo "<br>The new value of \$date: ".$date_new;
  }

//Question3
  static public function dtCompare($date,$tar){
    
    $diff_var = strcmp(strtotime($date),strtotime($tar));
    if ($diff_var > 0){
       echo "<br> The future";
       }
    elseif ($diff_var < 0){
       echo "<br> The past";
       }
    else {
       echo "<br> Oops";
      }
    }
//Question4
  static public function dtPosition($date) {
    
    $date_new = str_replace('-','/',$date);
    //Test case// $date_new = '123/1234/3333/34/';
    
    $date_len = strlen($date_new);
    echo "<br> Length of date string is:".$date_len;
    $loc = 0;
    echo "<br> Char locations are:";
    for ($i=0;$i<=10;$i++){
      if ($loc ==0){
    //echo "<br>If Statement".$loc;
        $loc = (strpos($date_new,'/',$i));
   //$print_loc = $loc +1;
        echo '&nbsp'.$loc;
    }
      elseif ($loc !=0 and $i != 10){
  //echo "<br> Else if statemnt".$loc;
        $index = $loc;
        $loc = (strpos($date_new,'/',$loc+1));
  //$print_loc = $loc +1;
        if ($index > $loc){
          echo '&nbsp';
          echo "End";
           break;
        }
        else {
          echo '&nbsp'.$loc;
        } 
    }
     else {
       echo "End";
    }
  }
}
//Question 5
 static public function dtWordCount() {

    echo "<br>Word Count:  ";
    $strCnt= (str_word_count("Count the number of words in \$date"));
    echo $strCnt;
 }
//Question 6
 static public function strLength() {

   $len = strlen("Hello,this is PHP homework");
   echo "<br> Length of date string is:".$len;
 }

  
 //Question 7
  static public function strAscii() {

    $ascii_val = ord("This is a pleasant day");
    echo "<br> The ASCII value of first char is::  ".$ascii_val;
}
 //Question 8
  static public function dtLastChar($date) {
    
    $last_chars = substr($date,-2);
    echo "<br> The last characters are:   ".$last_chars;
}
 //Question 9
  static public function dtExplode($date) {
    
    $date_new = str_replace('-','/',$date);
    $str_arr = array();
    $str_arr = explode('/',$date_new);
    echo '<br>'.$str_arr[0].'&nbsp'.$str_arr[1].'&nbsp'.$str_arr[2];
}
 //Question 10- 1st Method
  static public function dtLeapForEach($year) {

    foreach ($year as $value) {
  
    $leap_yr4 = $value%4;// Should be zero
    $leap_yr100 = $value%100;//Should not be zero
    $leap_yr400 = $value%400;//Should be zero


    $leap_check = (($leap_yr400 ==0)||(($leap_yr100 != 0)&&($leap_yr4==0)));
    //echo $leap_check;

    switch($leap_check){

      case true:
      echo '<br>'.$value." - True";
      break;

      case false:
      echo  '<br>'.$value." - False";
      break;

      default:
      echo 'Here';
     }
  }
}
  
 //Question 10- 2nd Method
  static public function dtLeapFor($year) {

    for ($i=0;$i< sizeof($year);$i++) {
  

    $leap_yr4 = $year[$i]%4;// Should be zero
    $leap_yr100 = $year[$i]%100;//Should not be zero
    $leap_yr400 = $year[$i]%400;//Should be zero


    $leap_check = (($leap_yr400 ==0)||(($leap_yr100 != 0)&&($leap_yr4==0)));
    //echo $leap_check;

    switch($leap_check){

      case true:
      echo '<br>'.$year[$i]." - True";
      break;

      case false:
      echo  '<br>'.$year[$i]." - False";
      break;

      default:
      echo 'Here';
     }
  }
}
  
  
  
  
  } 

?>
