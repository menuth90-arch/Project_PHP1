<?php
$userName = "Sophea Chan";
$userRole = "Software Engineering Student";
$userEmail = "sophea.chan@example.com";
$isActive = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile Card</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f7f6; padding: 30px; }
        .profile-card { background: #ffffff; padding: 25px; border-radius: 8px; max-width: 400px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .profile-card h2 { margin-top: 0; color: #2c3e50; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 4px; font-size: 12px; font-weight: bold; background: #27ae60; color: white; }
    </style>
</head>
<body>

<div class="profile-card">
    <h2><?= $userName ?></h2>
    <p><strong>Role:</strong> <?= $userRole ?></p>
    <p><strong>Email:</strong> <?= $userEmail ?></p>
    <p><strong>Status:</strong> <span class="badge"><?= $isActive ? "Active" : "Inactive" ?></span></p>
</div>

</body>
</html>