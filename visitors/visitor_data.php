<?php
// PHP code to retrieve visitor data and prepare for charts
function getVisitorData() {
    include "db.inc.php";

    // Query to fetch visitor data
    $query = "SELECT DATE(`timestamp`) AS visit_date, COUNT(DISTINCT `unique_id`) AS unique_visitors FROM `visitors` GROUP BY DATE(`timestamp`) ORDER BY DATE(`timestamp`) ASC";
    $result = $conn->query($query);

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data['labels'][] = $row['visit_date'];
        $data['unique_visitors'][] = $row['unique_visitors'];
    }

    $result->close();
    $conn->close();

    return $data;
}

$visitorData = getVisitorData();
?>
