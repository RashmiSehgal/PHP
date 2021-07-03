/*Write a short program that prints each number from 1 to 100 on a new line. 
For each multiple of 3, print "Fizz" instead of the number. 
For each multiple of 5, print "Buzz" instead of the number. 
For numbers which are multiples of both 3 and 5, print "FizzBuzz" instead of the number.*/

<?php
for($i=1;$i<=100;$i++){
    if(($i%3==0)&&($i %5==0))
    echo"FizzBuzz<br>";
    elseif($i%3==0)
    echo"Fizz <br>";
    elseif($i%5==0)
    echo"Buzz <br>";
    else
    echo $i."<br>";
}
?>