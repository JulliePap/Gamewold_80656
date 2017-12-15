<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 

if(!isset($_SESSION['shoppinglist'])) {
	$_SESSION['shoppinglist'] = array();
}

/************* CONNECT TO DATABASE ***********/
function ConnectDatabase(){
	$conn = new mysqli('Localhost', 'root', '', 'gameworld');
	return $conn;
}

/************* GET TOTAL GAMES FOR PLATFORM ***********/
function GetTotalGamesPlatform($catid){
	$conn = ConnectDatabase();

	if($catid == 0) {
		$sql = "SELECT * FROM games";		
	} 
	else {
		$sql = "SELECT * FROM games WHERE platform_id = '$catid'";	
	}
	$result = mysqli_query($conn, $sql);

	$numrows = mysqli_num_rows($result);

	return $numrows;
}

/************* TODO GET GAME INFO ***********/
function GetGameInfo($gameid, $asked){
	$conn = ConnectDatabase();
	if($asked == 'platform'){
		$query = "SELECT p.name AS platform FROM platform AS p
		INNER JOIN games AS g ON p.id = g.platform_id WHERE g.id = $gameid";
	}
	else {
		$query = "SELECT * FROM games WHERE id = $gameid";
	}
	
	if ($result = $conn->query($query)) {
		while ($row = $result->fetch_assoc()) {
			$info = $row[$asked];
		}
		$result->free();
	}
	else {
		$info = 'No Data found';
	}
	
	return $info;
}

/************* GET ALL GAME INFO FOR PLATFORM ***********/
function GetAllGameInfoPlatform($catid, $asked, $number){
	$conn = ConnectDatabase();
	if($catid == 0){
		$query = "SELECT g.name AS game_name, p.name AS platform_name, g.price AS price, g.image AS image, g.description AS description, g.id AS game_id FROM games AS g
		INNER JOIN platform AS p ON p.id = g.platform_id ORDER BY game_name DESC LIMIT $number,1";
	} 
	else {
		$query = "SELECT g.name AS game_name, p.name AS platform_name, g.price AS price, g.image AS image, g.description AS description, g.id AS game_id FROM games AS g
		INNER JOIN platform AS p ON p.id = g.platform_id WHERE g.platform_id = $catid ORDER BY game_name DESC LIMIT $number,1";
	}

	if ($result = $conn->query($query)) {
	    while ($row = $result->fetch_assoc()) {
	        $info = $row[$asked];
	    }
	    $result->free();
	} 
	else {
		$info = 'No Data found';
	}

    return $info;
}

function RemoveFromCart($gameid){
	$list = $_SESSION['shoppinglist'];

	for ($i=0; $i < sizeof($list); $i++) { 
		if($list[$i] == $gameid){
			unset($list[$i]);
			break; // breaks out of the loop so it only removes the first game it finds.
		}
	}

	$_SESSION['shoppinglist'] = array_values($list);
}
?>
