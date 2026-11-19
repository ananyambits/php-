
<?php
include 'db.php';

$sql = "SELECT * FROM employees";
$result = mysqli_query($conn, $sql);

echo "<h2>All Employee Records</h2>";

if (mysqli_num_rows($result) > 0) {

    echo "<table border='1' cellpadding='10'>
    <tr>
    <th>Employee ID</th>
    <th>Name</th>
    <th>Department</th>
    <th>Designation</th>
    <th>Salary</th>
    </tr>";

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>
        <td>" . $row['emp_id'] . "</td>
        <td>" . $row['name'] . "</td>
        <td>" . $row['department'] . "</td>
        <td>" . $row['designation'] . "</td>
        <td>" . $row['salary'] . "</td>
        </tr>";
    }

    echo "</table>";

} else {
    echo "<p>No employee records available.</p>";
}

echo "<br><a href='index.html'>Go Back</a>";

mysqli_close($conn);
?>
