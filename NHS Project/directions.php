<?php
ini_set('display_errors', 1);
require('include/conn.inc.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name ="viewport" content="width-device-width, initial-scale=1">
	<link rel = "stylesheet" type="text/css" href="css/custom.css">
	<title> NHS WayFinder </title>
</head>

<body>
	<svg version="1.1" id="cantor3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="0 0 500 700" style="enable-background:new 0 0 500 700;" xml:space="preserve" >
	<style type="text/css">
		.border{fill:none;stroke:#000000;stroke-width:3;}
		.doorway{fill:#800080;stroke:#000000;stroke-width:3;}
		.toilet{fill:#FFFF00;stroke:#000000;stroke-width:3;}
		.room{fill:#0000FF;stroke:#000000;stroke-width:3;}
		.stairs{fill:#FF0000;stroke:#000000;stroke-width:3;}
		.elevator{fill:#008000;stroke:#000000;stroke-width:3;}
		.blocked{fill:#808080;stroke:#000000;stroke-width:3;}
		.linedefault{fill:none;stroke:#FF0000;stroke-width:5;stroke-opacity:0;}
		.linevisable{fill:none;stroke:#FF0000;stroke-width:5;stroke-opacity:1;}
	</style>
	<polyline class="border" points="90,30 210,30 210,120 420,120 420,180 180,180 180,210 150,210 150,270 180,270 180,330 90,330 90,30
		"/>
	<polyline class="border" points="90,285 30,285 30,360 90,360 90,630 150,630 150,570 330,570 330,510 150,510 150,330 90,330 90,285
		"/>
	<rect id="Door_3-4" x="95" y="325" class="doorway" width="50" height="10"/>
	<rect id="Door_3-5" x="415" y="125" class="doorway" width="10" height="50"/>
	<rect id="Door_3-7" x="325" y="515" class="doorway" width="10" height="50"/>
	<rect id="Toilet_Disabled_3-2" x="155" y="205" class="toilet" width="20" height="10"/>
	<rect id="Toilet_Women_3-2" x="175" y="185" class="toilet" width="10" height="20"/>
	<rect id="Room_3-9314" x="175" y="285" class="room" width="10" height="20"/>
	<rect id="Room_3-9315" x="85" y="250" class="room" width="10" height="20"/>
	<rect id="Room_3-9316" x="145" y="230" class="room" width="10" height="20"/>
	<rect id="Room_3-9318" x="115" y="25" class="room" width="20" height="10"/>
	<rect id="Room_3-9319" x="230" y="115" class="room" width="20" height="10"/>
	<rect id="Room_3-9320" x="270" y="175" class="room" width="20" height="10"/>
	<rect id="Room_3-9321" x="300" y="115" class="room" width="20" height="10"/>
	<rect id="Room_3-9322" x="330" y="175" class="room" width="20" height="10"/>
	<rect id="Room_3-9322_1_" x="370" y="175" class="room" width="20" height="10"/>
	<rect id="Toilet_Men_3-2" x="290" y="565" class="toilet" width="20" height="10"/>
	<rect id="Room_3-9309" x="110" y="625" class="room" width="20" height="10"/>
	<rect id="Room_3-9309_1_" x="85" y="550" class="room" width="10" height="20"/>
	<rect id="Room_3-9309_2_" x="85" y="470" class="stairs" width="10" height="50"/>
	<rect id="Room_3-9309_3_" x="85" y="400" class="elevator" width="10" height="50"/>
	<rect x="85" y="70" class="blocked" width="10" height="20"/>
	<rect id="Room_3-3908" x="145" y="595" class="blocked" width="10" height="20"/>
	<line id="Door_3-5_TO_Node_3-9314" class="linedefault" x1="120" y1="335" x2="120" y2="295"/>
	<line id="Node_3-9314_TO_Room_3-9314" class="linedefault" x1="120" y1="295" x2="170" y2="295"/>
	<line id="Node_3-9314_TO_Node_3-9315" class="linedefault" x1="120" y1="295" x2="120" y2="260"/>
	<line id="Node_3-9315_TO_Room_3-9315" class="linedefault" x1="120" y1="260" x2="100" y2="260"/>
	<line id="Node_3-9315_TO_Node_3-9316" class="linedefault" x1="120" y1="260" x2="120" y2="240"/>
	<line id="Node_3-9316_TO_Room_3-9316" class="linedefault" x1="120" y1="240" x2="140" y2="240"/>
	<line id="Node_3-9316_TO_Intersection_3-1" class="linedefault" x1="120" y1="240" x2="120" y2="145"/>
	<line id="Intersection_3-1_TO_Node_3-9318" class="linedefault" x1="120" y1="145" x2="125" y2="40"/>
	<line id="Intersection_3-1_TO_Toilet_Women_3-2" class="linedefault" x1="120" y1="145" x2="165" y2="195"/>
	<line id="Toilet_Women_3-2_TO_Toilet_Disabled_3-2" class="linedefault" x1="165" y1="195" x2="165" y2="200"/>
	<line id="Intersection_3-1_TO_Node_3-9319" class="linedefault" x1="120" y1="145" x2="240" y2="150"/>
	<line id="Node_3-9319_TO_Room_3-9319" class="linedefault" x1="240" y1="150" x2="240" y2="130"/>
	<line id="Intersection_3-1_TO_Toilet_Women_3-2_1_" class="linedefault" x1="240" y1="150" x2="240" y2="130"/>
	<line id="Node_3-9319_TO_Node_3-9320" class="linedefault" x1="240" y1="150" x2="280" y2="150"/>
	<line id="Node_3-9320_TO_Room_3-9320" class="linedefault" x1="280" y1="150" x2="280" y2="170"/>
	<line id="Node_3-9320_TO_Node_3-9321" class="linedefault" x1="280" y1="150" x2="310" y2="150"/>
	<line id="Node_3-9321_TO_Room_3-9321" class="linedefault" x1="310" y1="150" x2="310" y2="130"/>
	<line id="Node_3-9321_TO_Node_3-9322" class="linedefault" x1="310" y1="150" x2="340" y2="150"/>
	<line id="Node_3-9322_TO_Room_3-9322" class="linedefault" x1="340" y1="150" x2="340" y2="170"/>
	<line id="Node_3-9322_TO_Node_3-9324" class="linedefault" x1="340" y1="150" x2="380" y2="150"/>
	<line id="Node_3-9324_TO_Room_3-9324" class="linedefault" x1="380" y1="150" x2="380" y2="170"/>
	<line id="Node_3-9324_TO_Door_3-4" class="linedefault" x1="380" y1="150" x2="410" y2="150"/>
	<line id="Door_3-4_TO_Node_Elevator_3-3" class="linedefault" x1="120" y1="335" x2="120" y2="425"/>
	<line id="Node_Elevator_3-3_TO_Elevator_3-3" class="linedefault" x1="120" y1="425" x2="100" y2="425"/>
	<line id="Node_Elevator_3-3_TO_Node_Stairs_3-3" class="linedefault" x1="120" y1="425" x2="120" y2="495"/>
	<line id="Node_Stairs_3-3_TO_Stairs_3-3" class="linedefault" x1="120" y1="495" x2="70" y2="495"/>
	<line id="Node_Stairs_3-3_TO_Intersection_3-2" class="linedefault" x1="120" y1="495" x2="120" y2="540"/>
	<line id="Intersection_3-2_TO_Node_3-9310" class="linedefault" x1="120" y1="540" x2="120" y2="560"/>
	<line id="Node_3-9310_TO_Room_3-9310" class="linedefault" x1="120" y1="560" x2="100" y2="560"/>
	<line id="Node_3-9310_TO_Node_3-9308" class="linedefault" x1="120" y1="560" x2="120" y2="605"/>
	<line id="Node_3-9308_TO_Node_3-9309" class="linedefault" x1="120" y1="605" x2="120" y2="620"/>
	<line id="Intersection_3-2_TO_Node_Toilet_Men_3-2" class="linedefault" x1="120" y1="540" x2="300" y2="540"/>
	<line id="Node_Toilet_Men_3-2_TO_Toilet_Men_3-2" class="linedefault" x1="300" y1="540" x2="300" y2="560"/>
	<line id="Node_Toilet_Men_3-2_TO_Door_3-6" class="linedefault" x1="300" y1="540" x2="320" y2="540"/>
	</svg>


<?php
// $numberOfNodes = "SELECT * FROM Cantor_Nodes_ThirdFloor";
// $stmt = $pdo->query($numberOfNodes);
// while($row = $stmt->fetch(PDO::FETCH_ASSOC))
// {
// $nodes = array(
// 	'NodeID'=>$row['NodeID'],
// 	'NodeType' =>$row ['NodeType'],
// 	'Floor'=>$row ['Floor']);
// }
?>


<?php
$nodes = array();
$multinodes = array();

$numberOfNodes = "SELECT NodeID FROM Cantor_Nodes_ThirdFloor";
$stmt = $pdo->query($numberOfNodes);

	while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
	$nodestest = array('NodeID'=>$row['NodeID']);
	array_push($nodes, $nodestest);
	}
	array_push($multinodes, $nodes);
	$nodes = array();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
	$nodestest = array('NodeType'=>$row['NodeType']);
	array_push($nodes, $nodestest);
	}
	array_push($multinodes, $nodes);
	$nodes = array();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
	$nodestest = array('Floor'=>$row['Floor']);
	array_push($nodes, $nodestest);
	}
	array_push($multinodes, $nodes);
	$nodes = array();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
	$nodestest = array('Disabled'=>$row['Disabled']);
	array_push($nodes, $nodestest);
	}
	array_push($multinodes, $nodes);
	$nodes = array();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
	$nodestest = array('Facing'=>$row['Facing']);
	array_push($nodes, $nodestest);
	}
	array_push($multinodes, $nodes);
	$nodes = array();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
	$nodestest = array('ConnectionID'=>$row['ConnectionID']);
	array_push($nodes, $nodestest);
	}
	array_push($multinodes, $nodes);
	$nodes = array();

?>

<?php

$nodes_json = json_encode($nodes);
echo $nodes_json;
$multinodes_json = json_encode($multinodes);
//echo $multinodes_json;

?>

<script type="text/javascript">

var nodes = JSON.parse('<?php echo $multinodes_json; ?>');
//alert("Output" + obj.NodeID);
console.log(nodes);
</script>
			<script src="DirectionsScript.js"></script>
</body>
</html>
