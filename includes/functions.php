<?php
function subscribeUser($name, $email, $company = null, $phone = null) {
    global $pdo;
    
    try {
        $sql = "INSERT INTO subscriptions (name, email, company, phone, subscription_date) 
                VALUES (:name, :email, :company, :phone, NOW())";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':company', $company);
        $stmt->bindParam(':phone', $phone);
        
        return $stmt->execute();
    } catch(PDOException $e) {
        // Log error but don't show to user
        error_log("Subscription error: " . $e->getMessage());
        return false;
    }
}

function sendAdminNotification($name, $email, $company, $phone) {
    $to = ADMIN_EMAIL;
    $subject = "New Subscription Attempt - Trading Signals";
    $message = "A new user has attempted to subscribe:\n\n";
    $message .= "Name: " . $name . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Company: " . ($company ? $company : "Not provided") . "\n";
    $message .= "Phone: " . ($phone ? $phone : "Not provided") . "\n";
    $message .= "Date: " . date('Y-m-d H:i:s') . "\n";
    
    $headers = "From: notifications@tradingsignals.example";
    
    return mail($to, $subject, $message, $headers);
}

function sendUserConfirmation($name, $email) {
    $subject = "Your Trading Signals Subscription";
    $message = "Dear " . $name . ",\n\n";
    $message .= "Thank you for your interest in our AI-powered trading signals service.\n\n";
    $message .= "We're currently putting the finishing touches on our platform to ensure it provides the highest quality predictive signals based on sentiment analysis, time series analysis, and real-time market data.\n\n";
    $message .= "We'll contact you as soon as the service becomes available. At that time, we'll provide payment instructions and access details.\n\n";
    $message .= "Best regards,\nThe Trading Signals Team";
    
    $headers = "From: no-reply@tradingsignals.example";
    
    return mail($email, $subject, $message, $headers);
}

function getSubscriptionCount() {
    global $pdo;
    
    try {
        $sql = "SELECT COUNT(*) as count FROM subscriptions";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'];
    } catch(PDOException $e) {
        error_log("Count error: " . $e->getMessage());
        return 0;
    }
}

function getAllSubscriptions() {
    global $pdo;
    
    try {
        $sql = "SELECT * FROM subscriptions ORDER BY subscription_date DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        error_log("Fetch subscriptions error: " . $e->getMessage());
        return [];
    }
}
?>