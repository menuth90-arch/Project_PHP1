<?php
// PHP Backend: Null Coalescing Operator (??) Demo
// ប្រសិនបើ $_GET['role'] គ្មានតម្លៃ ឬ null នោះវានจะកំណត់យកតម្លៃ "Student" ជំនួសវិញ
$userRole = $_GET['role'] ?? "Student";
$welcomeMsg = "សូមស្វាគមន៍, " . $userRole;
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>op_null_coalescing_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #84cc16; }
        h2 { margin-top: 0; color: #bef264; font-size: 20px; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #65a30d; color: white; font-size: 13px; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #84cc16; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #bef264; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>Null Coalescing Operator (??)</h2>
    <p><strong>តួនាទីអ្នកប្រើប្រាស់ (Role)៖</strong> <span class="badge"><?php echo $userRole; ?></span></p>
    <p><strong>សារស្វាគមន៍៖</strong><br><?php echo $welcomeMsg; ?></p>
    
    <!-- Interactive Button -->
    <button onclick="showNullInfo()">ពិនិត្យទិន្នន័យ (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showNullInfo() {
        let role = "<?php echo $userRole; ?>";
        alert("តួនាទីបច្ចុប្បន្នរបស់អ្នកគឺ៖ " + role);
        console.log("Null coalescing operator demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>