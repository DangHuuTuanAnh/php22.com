<?php 

function add($table,$data){
	$query = "INSERT INTO $table (";
	foreach ($data as $key => $value) {
		$query .=$key.",";
	}
	$query = substr_replace($query,")",-1);
	$query .=" VALUES (";
	foreach ($data as $key => $value) {
		$query .="'".$value."'".",";
	}
	$query = substr_replace($query,")",-1);
	return $query;
}

function update($table,$data,$id){
	$query = "UPDATE $table SET ";
	foreach ($data as $key => $value) {
		$query .=$key ." = '" . $value ."', ";
	}
	$query = substr_replace($query, "", -1);
	$query .="WHERE id = $id";
	return $query;
}

// function destroy($table,$id);{

// }


?>