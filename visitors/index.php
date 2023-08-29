<?php
// Include the visitor tracking code
require_once 'visitor_tracking.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Analysis</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div>
        <canvas id="visitorChart" width="400" height="200"></canvas>
    </div>

    <?php
    // Include the code to fetch visitor data and prepare for charts
    require_once 'visitor_data.php';
    ?>

    <script>
        // JavaScript code to render the chart
        var ctx = document.getElementById('visitorChart').getContext('2d');
        var visitorChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($visitorData['labels']); ?>,
                datasets: [{
                    label: 'Unique Visitors',
                    data: <?php echo json_encode($visitorData['unique_visitors']); ?>,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
