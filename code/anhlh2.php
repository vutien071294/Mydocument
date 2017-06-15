<?php  
	echo "<pre>";
	$arr = array(
		1,2,3,4,5,6,7,8,9,10
		);
	print_r($arr);
	$arr_result = array();
	$i = 1;
	$arr_temp = array();
	// foreach ($arr as $value) {
	// 	if($i < 4){
	// 		$arr_temp[] = $value;
	// 		$i++;
	// 	}else{
	// 		$arr_result[] = $arr_temp;
	// 		$arr_temp = array();
	// 		$i = 1;
	// 	}
	// }
	for ($i=0; $i <= count($arr); $i++) { 
		if($i%9 == 0 and $i > 0){
			$arr_result[] = $arr_temp;
			$arr_temp = array();
			$arr_temp[] = $arr[$i];
		}else{
			if($i < count($arr)){
				$arr_temp[] = $arr[$i];
			}
		}
		if($i == count($arr)){
			$arr_result[] = $arr_temp;
		}
	}
	print_r($arr_result);
	// $arr_result = array(
	// 	array(1,2,3),
	// 	array(4,5,6),
	// 	array(7,8,9),
	// 	array(10),
	// 	);
	foreach ($arr_result as $key => $value) {
		sleep(3);
		echo "string";
	}
?>