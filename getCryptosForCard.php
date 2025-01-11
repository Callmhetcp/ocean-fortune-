<?php
include 'connection.php';

if (isset($_GET['card_id'])) {
    $cardId = intval($_GET['card_id']);
    
    // Query to get the crypto data
    $sql = "SELECT c.crypto_name, c.symbol, SUM(t.amount) AS wallet_amount
            FROM cryptos c
            LEFT JOIN transactions t ON c.crypto_id = t.crypto_id AND t.status = 'completed' AND t.user_id = ?
            WHERE c.card_id = ?
            GROUP BY c.crypto_id";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ii', $_SESSION['user_id'], $cardId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $cryptos = [];
    while ($row = $result->fetch_assoc()) {
        $cryptos[] = [
            'name' => $row['crypto_name'],
            'symbol' => $row['symbol'],
            'walletAmount' => $row['wallet_amount']
        ];
    }
    
    echo json_encode([
        'success' => true,
        'cryptos' => $cryptos
    ]);
} else {
    echo json_encode(['success' => false, 'message' => 'Card ID not provided.']);
}
?>
