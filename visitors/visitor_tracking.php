<?php
// Track visitor information and check for unique identifier
function trackVisitor() {
    if (!isset($_COOKIE['unique_id'])) {
        // Generate a unique identifier (you can use a more sophisticated method)
        $unique_id = uniqid();

        // Set the unique identifier as a cookie
        setcookie('unique_id', $unique_id, time() + 86400 * 365, '/'); // Cookie expires in one year

        // Store the unique identifier in the database
        $ip_address = $_SERVER['REMOTE_ADDR'];
        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        // Sanitize user_agent to prevent SQL injection (use prepared statements for full security)
        $user_agent = htmlspecialchars($user_agent, ENT_QUOTES, 'UTF-8');

        include "db.inc.php";

        $query = "INSERT INTO `visitors` (`ip_address`, `user_agent`, `unique_id`) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $ip_address, $user_agent, $unique_id);
        $stmt->execute();

        $stmt->close();
        $conn->close();
    }
}

// Call the trackVisitor function to track the visitor on every page load
trackVisitor();
?>
