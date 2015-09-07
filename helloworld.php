<?php

	$first_name = "Jonathan";
	$last_name = "Karu";

	//tryki
	echo $first_name." ".$last_name;

?>

<br>

<?php

	$age = 19;
	
	// if( loogikatehe ){true} else {false}
	if($age <= 18){
		echo "alaealine";
	} else {
		echo "t2isealine";
	}

?>

<br>

<?php

	for($i = 0; $i < $age; $i = $i + 1) {
		//see, mida korratakse
		echo "palju".$i.", ";
	}
	
	echo "6nne";

?>