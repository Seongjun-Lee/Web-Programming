﻿<?PHP
/* while문 예제 : 1~n의 합계
 * 자연수 합 예제
 * 자연수 합 공식 -> 연산량 관점
 */

$a=1;
$sum=0;
$n = 11;

// O(n)
while($a<=$n)
{
   $sum=$sum+$a;
   $a++;
}

// O(1)
//$sum = $n*(1+$n) / 2;

echo("1에서 {$n}까지 자연수의 합은 $sum 입니다.<br>");
?>

