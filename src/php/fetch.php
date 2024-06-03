<?php
// Include database connection
include 'database.php';

// Fetch data from database
$sql = "SELECT fname,email,investname,amount,date,country FROM investments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
       
        echo "<tr class='border-b border-gray-200 hover:bg-gray-100'>";
        echo "<td class='py-3 px-6 text-center'>" . $row["investname"] . "</td>";
        echo "<td class='py-3 px-6 text-center'>" . $row["fname"] . "</td>";
        echo "<td class='py-3 px-6 text-center'>" . $row["email"] . "</td>";
        echo "<td class='py-3 px-6 text-center'>" . $row["date"] . "</td>";
        echo "<td class='py-3 px-6 text-center'>" . $row["country"] . "</td>";
        
        // Conditional styling for amount
        if ($row["amount"] > 5000) {
            echo "<td class='py-3 px-6 text-center'>
                    <span class='bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs'>$" . number_format($row["amount"], 2) . "</span>
                  </td>";
        } else {
            echo "<td class='py-3 px-6 text-center'>
                    <span class='bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs'>$" . number_format($row["amount"], 2) . "</span>
                  </td>";
        }

        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6' class='py-3 px-6 text-center'>No investments found</td></tr>";
}

$conn->close();
?>
