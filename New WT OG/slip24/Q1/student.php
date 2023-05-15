<?php
// Create an array of student information
$students = array(
    array("rollno" => 101, "name" => "John Doe", "address" => "123 Main St, Anytown USA", "college" => "ABC University", "course" => "Computer Science"),
    array("rollno" => 102, "name" => "Jane Smith", "address" => "456 Elm St, Anytown USA", "college" => "XYZ College", "course" => "Electrical Engineering"),
    array("rollno" => 103, "name" => "Bob Johnson", "address" => "789 Maple St, Anytown USA", "college" => "DEF University", "course" => "Business Administration"),
    array("rollno" => 104, "name" => "Alice Lee", "address" => "101 Oak St, Anytown USA", "college" => "GHI College", "course" => "Art History"),
    array("rollno" => 105, "name" => "Mark Davis", "address" => "111 Pine St, Anytown USA", "college" => "JKL University", "course" => "Physics"),
);

// Create a new XML document
$xml = new DOMDocument();
$xml->formatOutput = true;

// Add a root element called "students"
$studentsElement = $xml->createElement("students");
$xml->appendChild($studentsElement);

// Loop through the array of students and add each one as a child element of "students"
foreach ($students as $student) {
    $studentElement = $xml->createElement("student");
    $studentsElement->appendChild($studentElement);

    $rollnoElement = $xml->createElement("rollno", $student["rollno"]);
    $studentElement->appendChild($rollnoElement);

    $nameElement = $xml->createElement("name", $student["name"]);
    $studentElement->appendChild($nameElement);

    $addressElement = $xml->createElement("address", $student["address"]);
    $studentElement->appendChild($addressElement);

    $collegeElement = $xml->createElement("college", $student["college"]);
    $studentElement->appendChild($collegeElement);

    $courseElement = $xml->createElement("course", $student["course"]);
    $studentElement->appendChild($courseElement);
}

// Save the XML document to a file named "students.xml"
$xml->save("students.xml");

// Accept input for the course to display students for
if (isset($_POST["course"])) {
    $course = $_POST["course"];

    // Load the XML document from the file
    $xml = simplexml_load_file("students.xml");

    // Create a table to display the student information
    echo "<h2>Students for $course</h2>";
    echo "<table>";
    echo "<tr><th>Roll No</th><th>Name</th><th>Address</th><th>College</th></tr>";

    // Loop through each student and display their information if their course matches the input course
    foreach ($xml->student as $student) {
        if ((string)$student->course == $course) {
            echo "<tr><td>{$student->rollno}</td><td>{$student->name}</td><td>{$student->address}</td><td>{$student->college}</td></tr>";
        }
    }

    echo "</table>";
}
?>

<!-- Display a form to accept input for the course to display students for -->
