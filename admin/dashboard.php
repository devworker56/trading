<?php
session_start();

// Redirect to login if not authenticated
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

include '../includes/db_connect.php';
include '../includes/functions.php';

// Get subscription data
$subscriptions = getAllSubscriptions();
$totalSubscriptions = getSubscriptionCount();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Trading Signals</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">Trading Signals Admin</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>
    
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col">
                <h1>Subscription Dashboard</h1>
                <p class="lead">Total subscription attempts: <?php echo $totalSubscriptions; ?></p>
            </div>
        </div>
        
        <?php if ($totalSubscriptions > 0): ?>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Company</th>
                            <th>Phone</th>
                            <th>Subscription Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($subscriptions as $sub): ?>
                            <tr>
                                <td><?php echo $sub['id']; ?></td>
                                <td><?php echo htmlspecialchars($sub['name']); ?></td>
                                <td><?php echo htmlspecialchars($sub['email']); ?></td>
                                <td><?php echo htmlspecialchars($sub['company'] ?? 'N/A'); ?></td>
                                <td><?php echo htmlspecialchars($sub['phone'] ?? 'N/A'); ?></td>
                                <td><?php echo date('M j, Y g:i A', strtotime($sub['subscription_date'])); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="alert alert-info">
                No subscription attempts yet.
            </div>
        <?php endif; ?>
    </div>
</body>
</html>