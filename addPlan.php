<?php
include 'connection.php';
header('Content-Type: application/json'); // Set the response type to JSON

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $crypto_id = $_POST['crypto_id'];
    $name = $_POST['name'];
    $roi = $_POST['roi'];
    $roi_max = $_POST['roi_max'];
    $minimum = $_POST['minimum'];
    $maximum = $_POST['maximum'];
    $earning_duration = $_POST['earning_duration'];
    $duration_timeframe = $_POST['duration_timeframe'];
    $duration = $_POST['duration'];
    $commission = $_POST['commission'];
    $benefit = $_POST['benefit'];

    $query = "INSERT INTO investment_plan (crypto_id, name, roi, roi_max, minimum, maximum, earning_duration, duration_timeframe, duration, commission, benefit)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("issssssssss", $crypto_id, $name, $roi, $roi_max, $minimum, $maximum, $earning_duration, $duration_timeframe, $duration, $commission, $benefit);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Investment plan added successfully!']);
        } else {
            echo json_encode(['success' => false, 'message' => $stmt->error]);
        }
        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => $conn->error]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
