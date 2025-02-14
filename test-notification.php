<?php
header('Content-Type: text/html; charset=UTF-8');
mb_internal_encoding('UTF-8');

require_once 'Config/Database.php';
require_once 'Controllers/NotificationController.php';
require_once 'Controllers/MailService.php';

use Controllers\NotificationController;

try {
    // Test with actual user and stage IDs from your database
    $result = NotificationController::Notification(1, 1); // userId=1, stageId=1
    echo $result ? "Test email sent successfully!" : "Failed to send test email.";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
