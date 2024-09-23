<?php
/*
    개발자
    개발날짜: 2023.05.16
    개요: 각 구간에 따른 통행료를 계산하는 함수 생성
 */
/**
* 운행거리와 고속도로 통행료 계산
* @param string $start (출발지점; 'A'~'J')
* @param string $finish (도착지점; 'A'~'J')
* @param string $cartype (default=‘중’)
* @return array [총운행거리{Integer}, 통행료{Integer}]
*/
function calc_fee($start, $finish, $cartype="중"){
    // 거리 배열 참조
    require "http://ait.kyonggi.ac.kr/~jhkim/distance.inc";
    //$start, $finish를 대문자로 변환
    $start = strtoupper($start);
    $finish = strtoupper($finish);
    // 코스 배열 변수 지정
    $course = [];
    for($i='A';$i<='J';$i++){
        $course[] = $i;
    }
    //총 거리와 통행료를 저장할 변수 생성
    $sum_km = 0;
    $toatal_fee = 0;
    //$start, $finish를 숫자로 변환 
    foreach($course as $a => $b){
        if($start == $b){
            $start_index = $a;
        }elseif($finish == $b){
            $finish_index = $a;
        }
    }
    // 지금부터 $start, $finish가 숫자가 아니면 각각 알파벳이 a~j가 아니므로 범위에서 오류다. 따라서 이를 판별하는 조건문 생성
    if(isset($start_index) && isset($finish_index)){
    //$start < $finish 이면, [$start+1] => [$finish] (+)
    if($start_index < $finish_index){
        $start_index +=1;
        for($i=$start_index;$i<=$finish_index;$i++){
            $sum_km += $distance[$i];
        }
    }
    //$start > $finish 이면, [$start] => [$finish+1](-)
    elseif($start_index > $finish_index){
        $finish_index +=1;
        for($i=$start_index;$i>=$finish_index;$i--){
            $sum_km += $distance[$i];
        }
    }
    // 소형차의 경우, 전체 거리 x 100
    $toatal_fee = $sum_km * 100;
    if($cartype == '소'){
    return array($sum_km, $toatal_fee);
    }
    
    // 중형차: 소형차 x 1.2
    elseif($cartype == '중'){
        $toatal_fee *= 1.2;
        return array($sum_km, $toatal_fee);
    }
    // 대형차: 소형차 x 1.5
    elseif($cartype == '대'){
        $toatal_fee *= 1.5;
        return array($sum_km, $toatal_fee);
    }else{
        return false;
    }
    }
    // 위에 조건문에 해당이 안되면 시작점과 도착점을 알 수 없기에 false를 반환
    else{
        return false;
    }
}
?>
