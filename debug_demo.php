<?php
// PHP Backend: Debugging and Inspection Demo (var_dump)
$systemConfig = [
    "platform" => "Angkor LMS",
    "version" => 2.5,
    "maintenance" => false
];

// ចាប់យកទិន្នន័យពី var_dump ទុកសម្រាប់បង្ហាញលើ UI
ob_start();
var_dump($systemConfig);
$debugOutput = ob_get_clean();
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>debug_inspect_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 480px; border-left: 6px solid #8b5cf6; }
        h2 { margin-top: 0; color: #a78bfa; font-size: 20px; }
        pre { background: #0f172a; padding: 12px; border-radius: 8px; font-family: monospace; font-size: 13px; color: #c4b5fd; overflow-x: auto; margin-top: 10px; }
        button { margin-top: 20px; padding: 10px; background: #8b5cf6; color: #ffffff; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #a78bfa; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>ការពិនិត្យទិន្នន័យ (Debug var_dump Demo)</h2>
    <p><strong>លទ្ធផលពិនិត្យโครงสร้าง Array៖</strong></p>
    <pre><?php echo htmlspecialchars($debugOutput); ?></pre>
    
    <!-- Interactive Button -->
    <button onclick="showDebugInfo()">ពិនិត្យព័ត៌មានលម្អិត (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showDebugInfo() {
        let msg = "ប្រព័ន្ធកូដស្ថានភាព Debug ដំណើរការលើទិន្នន័យ Array ចំនួន ៣ ធាតុ!";
        alert(msg);
        console.log("Debug inspect demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>