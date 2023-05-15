<?php
// Create a new XML document
$xml = new DOMDocument();
$xml->formatOutput = true;

// Add a root element called "CricketTeam"
$cricketTeamElement = $xml->createElement("CricketTeam");
$xml->appendChild($cricketTeamElement);

// Add a child element called "Team" with country="Australia"
$teamElement = $xml->createElement("Team");
$teamElement->setAttribute("country", "Australia");
$cricketTeamElement->appendChild($teamElement);

// Add child elements for player, runs, and wicket
$playerElement = $xml->createElement("player", "John Smith");
$teamElement->appendChild($playerElement);

$runsElement = $xml->createElement("runs", "100");
$teamElement->appendChild($runsElement);

$wicketElement = $xml->createElement("wicket", "5");
$teamElement->appendChild($wicketElement);

// Add a child element called "Team" with country="India" and add child elements for player, runs, and wicket
$teamElement = $xml->createElement("Team");
$teamElement->setAttribute("country", "India");
$cricketTeamElement->appendChild($teamElement);

$playerElement = $xml->createElement("player", "Rohit Sharma");
$teamElement->appendChild($playerElement);

$runsElement = $xml->createElement("runs", "150");
$teamElement->appendChild($runsElement);

$wicketElement = $xml->createElement("wicket", "0");
$teamElement->appendChild($wicketElement);

// Add another team from India
$teamElement = $xml->createElement("Team");
$teamElement->setAttribute("country", "India");
$cricketTeamElement->appendChild($teamElement);

$playerElement = $xml->createElement("player", "Virat Kohli");
$teamElement->appendChild($playerElement);

$runsElement = $xml->createElement("runs", "50");
$teamElement->appendChild($runsElement);

$wicketElement = $xml->createElement("wicket", "0");
$teamElement->appendChild($wicketElement);

// Save the XML document to a file named "cricket.xml"
$xml->save("cricket.xml");
?>
