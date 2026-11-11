<?php
// PHP Backend: Control Structure - if...else Statement Demo
$hasPaidTuition = false;

if ($hasPaidTuition) {
    $paymentStatus = "បានបង់ប្រាក់រួចរាល់ (Paid)";
    $accessPermission = "អនុញ្ញាតឱ្យចូលរៀន និងប្រឡង (Access Granted)";
} else {
    $paymentStatus = "មិនទាន់បានបង់ប្រាក់ (Unpaid)";
    $accessPermission = "សូមទាក់ទងការិយាល័យហិរញ្ញវត្ថុ (Access Denied)";
}
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>ctrl_if_else_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #ef4444; }
        h2 { margin-top: 0; color: #f87171; font-size: 20px; }
        .badge { display: inline-block; padding: 6px 12px; border-radius: 12px; background: #dc2626; color: white; font-size: 13px; font-weight: bold; }
        button { margin-top: 20px; padding: 10px; background: #ef4444; color: #ffffff; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #f87171; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>ពិនិត្យស្ថានភាពបង់ប្រាក់ (If-Else Demo)</h2>
    <p><strong>ស្ថានភាព៖</strong> <span class="badge"><?php echo $paymentStatus; ?></span></p>
    <p><strong>សិទ្ធិប្រើប្រាស់៖</strong><br><?php echo $accessPermission; ?></p>
    
    <!-- Interactive Button -->
    <button onclick="showIfElseInfo()">ពិនិត្យសិទ្ធិ (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showIfElseInfo() {
        let permission = "<?php echo $accessPermission; ?>";
        alert("លទ្ធផលសិទ្ធិរបស់អ្នកគឺ៖ " + permission);
        console.log("If-else control structure demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>