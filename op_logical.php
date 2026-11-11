<?php
// PHP Backend: Logical Operators Demo (&&, ||, !)
$userExperience = 3; // ឆ្នាំបទពិសោធន៍
$hasCertificate = true;

// ពិនិត្យលក្ខខណ្ឌប្រើប្រាស់ Logical AND (&&) និង OR (||)
if ($userExperience >= 2 && $hasCertificate) {
    $eligibilityStatus = "អនុញ្ញាតឱ្យដាក់ពាក្យបម្រើការងារ (Eligible)";
} else {
    $eligibilityStatus = "មិនទាន់គ្រប់លក្ខខណ្ឌ (Not Eligible)";
}
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>op_logical_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #14b8a6; }
        h2 { margin-top: 0; color: #2dd4bf; font-size: 20px; }
        .badge { display: inline-block; padding: 6px 12px; border-radius: 12px; background: #0d9488; color: white; font-size: 13px; font-weight: bold; }
        button { margin-top: 20px; padding: 10px; background: #14b8a6; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #2dd4bf; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>ពិនិត្យលក្ខខណ្ឌតក្កវិជ្ជា (Logical Operator)</h2>
    <p><strong>បទពិសោធន៍៖</strong> <?php echo $userExperience; ?> ឆ្នាំ</p>
    <p><strong>មានវិញ្ញាបនបត្រ៖</strong> <?php echo $hasCertificate ? "មាន (true)" : "គ្មាន (false)"; ?></p>
    <p><strong>លទ្ធផល៖</strong><br><span class="badge"><?php echo $eligibilityStatus; ?></span></p>
    
    <!-- Interactive Button -->
    <button onclick="showLogicalInfo()">ពិនិត្យសិទ្ធិ (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showLogicalInfo() {
        let status = "<?php echo $eligibilityStatus; ?>";
        alert("លទ្ធផលនៃការពិនិត្យសិទ្ធិគឺ៖ " + status);
        console.log("Logical operators demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>