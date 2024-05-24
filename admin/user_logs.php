<?php 
include 'db_connect.php';
?>
<div class="head">
            <h1>USER'S EVENT LOGS</h1>
        </div>

        <div class="container1">
        <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Logged On</th>
            <th>Role</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Fetch records from the event_logs table
        $activity_query = "SELECT * FROM user_logs";
        $activity_result = $conn->query($activity_query);

        // Check if records exist
        if ($activity_result !== false && $activity_result->num_rows > 0) {
            // Loop through each row of the result set
            while ($row = $activity_result->fetch_assoc()) {
                // Output the data in each row
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['user_id'] . "</td>";
                echo "<td>" . $row['event'] . "</td>";
                echo "<td>" . $row['logged_in'] . "</td>";
                echo "</tr>";
            }
        } else {
            // If no records found, display a message
            echo "<tr><td colspan='4'>No records found</td></tr>";
        }

