<?php
include_once("mysql/mysql_dbconnect.php");

	$select  = "Select pd_name from electronics"; #Overall fetch
	$result = $conn->query($select);
	$result = $result->fetchAll();

	if(isset($_POST['search'])){
		$string = $_POST['search'];

		$k=0;
		$resul = array();
		for($i = strlen($string)-1; $i>=0; $i--){
			$array = array();
			for ($j = 0; $j <= $i; $j++){
				$array[$j] = $string[$j]; #put each element into the array
			}
	
			$resul[$k] = implode("",$array); #convert the above items into a string
			$k++;
		}

        $len = count($resul);  # count the number of elements in the array

        for($p = 0; $p < $len; $p++){
			
            $select  = "Select pd_name from electronics where pd_name like '%$resul[$p]%'";
            $result = $conn->query($select);
            $result = $result->fetchAll();

            if($result){
                break;
            }          
        }
		if(!$result){
			$error = "Not found";
		}


       
	}

?>