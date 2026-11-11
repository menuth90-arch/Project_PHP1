<?php
// PHP Backend: App Configuration & Constants Demo
define("APP_NAME", "Angkor Student Portal");
const API_VERSION = "v2.5.0";
$serverTime = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>app_config_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 420px; border-top: 5px solid #f59e0b; }
        h2 { margin-top: 0; color: #f59e0b; font-size: 20px; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #d97706; color: white; font-size: 13px; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #f59e0b; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #fbbf24; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>ការកំណត់ប្រព័ន្ធ (App Config)</h2>
    <p><strong>កម្មវិធី៖</strong> <?php echo APP_NAME; ?></p>
    <p><strong>ជំនាន់ API៖</strong> <span class="badge"><?php echo API_VERSION; ?></span></p>
    <p><strong>ពេលម៉ោងសឺវើរ៖</strong> <?php echo $serverTime; ?></p>
    
    <!-- Interactive Button -->
    <button onclick="showConfigInfo()">ពិនិត្យការកំណត់ (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showConfigInfo() {
        let app = "<?php echo APP_NAME; ?>";
        let version = "<?php echo API_VERSION; ?>";
        alert("កម្មវិធី: " + app + " | ជំនាន់: " + version);
        console.log("App configuration checked via JavaScript.");
    }
</script>

</body>
</html>