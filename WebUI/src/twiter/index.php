<?php
	
	$tPath = dirname(__FILE__);
	$tFileName = 'wctwitter4/part-00000';
	$tPathFile = $tPath . '/../' . $tFileName;
	
	//echo $tPath;
	//echo '<br>';
	//echo $tFileName;
	//echo '<br>';
	//echo $tPathFile;
	//echo '<br>';
	
	$t_content = file_get_contents($tPathFile);
	
	//echo $t_content;
	
	$t_content_array = explode("\n", $t_content);
	
	//print_r($t_content_array);
	//echo '<br>';
	
	$t_content_result = array();
	
	foreach($t_content_array as $t_line){
		
		//$t_line_clean = substr($t_line, 1, strlen($t_line) - 2);
		$t_line_clean = $t_line;
		$t_line_clean = str_replace('(', '', $t_line_clean);
		$t_line_clean = str_replace(')', '', $t_line_clean);
		
		$t_line_array = explode(",", $t_line_clean);
		
		$t_result_line = array();
		$t_result_line["name"] = $t_line_array[0];
		$t_result_line["count"] = intval($t_line_array[1]);
		
		if($t_result_line["count"] > 50)
			$t_content_result[] = $t_result_line;
		
	}
	
	echo json_encode($t_content_result);
?>