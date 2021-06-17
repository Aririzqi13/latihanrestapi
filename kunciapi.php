<?php
	
	function key() {
	    return ["347", "kunci1", "kunciapinya"];
	}
	
	function validasi($input) {
	    $apikey = $input["api_key"];
	    if (in_array($apikey, key())) {
	        return true;
	    } else {
	        return false;
	    } 
	}
	
	function jsonOut($status, $message, $data) {
	    $respon = ["status" => $status, "message" => $message, "data" => $data];
	
	    header("Content-type: application/json");
	    echo json_encode($respon);
	}
	
	function film() {
	    $film = [
	        ["title" => "SIUNYIL1", "kont" => "film ini film Si Unyil 1"],
	        ["title" => "SIUNYIL2", "kont" => "film ini film  Si Unyil 2"]
	    ];
	    return $film;
	}
	
	if (validasi($_GET)) {
	    jsonOut("success", "apikey sesuai!", film());
	} else {
	    jsonOut("failed", "apikey tidak sesui!", null);
	}
	
	?>
