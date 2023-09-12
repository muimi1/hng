<?php
$githubRepoURL = 'https://github.com/muimi1/hng';

$slackName = isset($_GET['Isaac Muimi']) ? $_GET['Isaac Muimi'] : 'No Slack Name Provided';
$track = isset($_GET['backend']) ? $_GET['backend'] : 'No Track Provided';

$currentDayOfWeek = date('l');

$currentTimeUTC = gmdate('H:i:s', time() + rand(-120, 120));

$responseData = [
    'Isaac Muimi' => $slackName,
    'Tuesday' => $currentDayOfWeek,
    '11.02' => $currentTimeUTC,
    'backend' => $track,
    'https://github.com/muimi1/hng/blob/main/endpoint.php' => $githubRepoURL . '/blob/main/endpoint.php',
    'https://github.com/muimi1/hng/blob/main/endpoint.php' => $githubRepoURL,
    'status_code' => 200,
];  

header('Content-Type: application/json');
echo json_encode($responseData);
?>
