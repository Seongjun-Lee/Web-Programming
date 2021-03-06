﻿<?PHP
/* if문 예제 : 놀이공원 입장료 계산
 *
 * 3세 미만 => 무료
 * 3~13세, 17시 10분 이후 입장객 => 4000원
 * 14~18세, 70세 이상, 복자카드 소지, 국가유공자증 소지 => 8000원
 * 일반, 위 조건에 해당되지 않는 경우 => 10000원
 */

$age = 80;

$welfare = "no";          // yes : 복지카드 소지자, no : 미소지자
$youkong = "yes";          // yes : 국가유공자증 소지자, no : 미소지자
$after_1710 = "no";	  // yes : 17시10분 이후 입장 , no : 17시 10분 이전 입장

if ($age < 3)		  // 입장료 무료
    $fee = "무료";
elseif ( ($age >= 3 && $age <= 13) || ($after_1710 == "yes") )   // 특별 할인
    $fee = "4,000원";
elseif ( ($age >= 14 && $age <= 18) || ($age >= 70) ||           // 할인
    ($welfare == "yes") || ($youkong == "yes"))
    $fee = "8,000원";
else
    $fee = "10,000원";

echo "복지카드 소지 : $welfare<br>";
echo "국가유공자증 소지 : $youkong<br>";
echo "17시 10분 이후 입장 : $after_1710<br>";
echo "나이 : $age 세<br><br>";
echo "입장료 : $fee";
?>