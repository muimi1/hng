<?php
// Define the GitHub repository URL.
$githubRepoURL = 'https://github.com/muimi1/hng';

// Define the default values for query parameters.
$slackName = isset($_GET['slack1']) ? $_GET['slack1'] : 'No Slack Name Provided';
$track = isset($_GET['backend']) ? $_GET['backend'] : 'No Track Provided';

// Get the current day of the week.
$currentDayOfWeek = date('l');

// Get the current UTC time with a +/-2 minute window.
$currentTimeUTC = gmdate('H:i:s', time() + rand(-120, 120));

// Define the response data as an associative array.
$responseData = [
    'slack1' => $slackName,
    'current_day_of_week' => $currentDayOfWeek,
    'current_utc_time' => $currentTimeUTC,
    'backend' => $track,
    'github_file_url' => $githubRepoURL . '/path/to/your/file.php',
    'github_repo_url' => $githubRepoURL,
    'status_code' => 200,
];

// Set the content type to JSON and send the response.
header('Content-Type: application/json');
echo json_encode($responseData);
?>
