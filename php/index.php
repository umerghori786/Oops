	<?php




	/*
	*
	*selction sort
	*/

	/*
	$array = [10,5,64,3,6,34];

	for ($i=0; $i < count($array) ; $i++) { 
		
		$low = $i;

		for ($j=$i+1; $j < count($array); $j++) { 
			
			if ($array[$j] < $array[$low]) {
				$low = $j;
				//print_r($array[$low]); exit();
			}



		}
		//print_r($array[$low]); exit();

		if ($array[$low] < $array[$i]) {
			$temp = $array[$i];
			$array[$i] = $array[$low];
			$array[$low] = $temp;
		}

	}

	for ($i=0; $i < count($array); $i++) { 
		echo $array[$i]; echo "<br>";
	}

	*/
/*
	$request_type = 'users';
	switch ($request_type){
		case 'users' : $model = 'users'; break ;
		case 'projects' : $model = 'projects'; break;
		default : $model = 'not found ';
	}
	
	echo $model;*/


	/*$clinic_videos = ['suzuki', 'Honai','lemo','kia','honda','toyota'];
	foreach ($clinic_videos as $key => $cv ) {


    $previous = array_key_exists($key - 1, $clinic_videos) ? $clinic_videos[$key - 1] : false;

    if($previous){
      echo $previous; echo "<br>";
    }

    
}*/

/*$data = (new Model)->select(DB::raw('COUNT(id) as countData'))
                ->whereRaw('date("start_date") <= NOW() AND date("end_date") >= NOW()')
                ->get();*/

$request_type = 'users';
switch($request_type){
	case 'users' : $model = 'users' ; break;
	case 'products' : $model='products' ; break;
	default : $model = 'not found';
} 

print_r($model);  

$request_type = 'products';
match ($request_type) {
             	'users' => $model = "<br> users match",
             	'products'=>$model = "<br> products matched ",
             	default => $model = "<br>not founded",
             };     

             print_r($model);        


                
