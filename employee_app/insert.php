
<?php
include 'db.php';

$emp_id = $_POST['emp_id'];
$name = $_POST['name'];
$department = $_POST['department'];
$designation = $_POST['designation'];
$salary = $_POST['salary'];

$sql = "INSERT INTO employees (emp_id, name, department, designation, salary)
VALUES ('$emp_id', '$name', '$department', '$designation', '$salary')";

if (mysqli_query($conn, $sql)) {
    echo "<h3>Employee record added successfully!</h3>";
} else {
    echo "Error: " . mysqli_error($conn);
}

echo "<br><a href='index.html'>Go Back</a>";

mysqli_close($conn);
?>
