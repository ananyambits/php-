
<?php
include 'db.php';

$search_query = $_GET['search_query'];

$sql = "SELECT * FROM employees WHERE name LIKE
'%$search_query%' OR emp_id = '$search_query'";

$result = mysqli_query($conn, $sql);

echo "<h2>Employee Search Results</h2>";

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
    echo "<p>No employee records found matching your search.</p>";
}

echo "<br><a href='index.html'>Go Back</a>";

mysqli_close($conn);
?>
