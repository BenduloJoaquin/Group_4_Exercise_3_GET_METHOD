<?php
echo '<link rel="stylesheet" type="text/css" href="get.css">';

if ($_SERVER["REQUEST_METHOD"] === "GET" && !empty($_GET)) {
    
    $memberName = trim($_GET["member_name"]);
    $memberRole = trim($_GET["member_role"]);
    $memberName = htmlspecialchars($memberName);
    $memberRole = htmlspecialchars($memberRole);

    echo "<div class='result-box'>";
    echo "<strong>REQUEST RESULT</strong><br>";
    echo "Request Received!<br>";
    echo "Member Name: $memberName<br>";
    echo "Role / Position: $memberRole<br>";
    echo "Used GET Method in Request<br>";
    echo "Check your URL address bar above ↑<br>";
    echo "<a href='index.html'>← Go back to the Request form and try again.</a>";
    echo "</div>";

} else {
    echo "<div class='result-box'>";
    echo "No Request Found.<br>";
    echo "Please fill out the form first.<br><br>";
    echo "<a href='index.html'>← Go back to the form and try again.</a>";
    echo "</div>";
}
?>
