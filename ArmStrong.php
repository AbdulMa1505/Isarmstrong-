<?php
Function ArmstrongNumber($number){
    $digitString=(string)($number);
    $digitLength =strlen($digitString);
    $sum =0;
    for($i=0;$i<=$digitLength;$i++){
        $digit =(int)($digitString[$i]);
        $sum+=pow($digit,$digitLength);
    }
    return $sum===$number;

}
$number =153
if(ArmstrongNumber($number)){
    echo "this is an armstrong";
}
else{
    echo "its not an armstrong";
}
?>