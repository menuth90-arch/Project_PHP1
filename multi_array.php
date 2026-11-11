<?php
// PHP Backend: Multidimensional Array Demo
$devices = [
    ["title" => "ASUS Vivobook Go", "price" => 450],
    ["title" => "Mechanical Keyboard", "price" => 65]
];

$displaySummary = "ទំនិញទី១៖ " . $devices[0]["title"] . " - តម្លៃ៖ " . $devices[0]["price"] . " $";
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>multi_array_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #f59e0b; }
        h2 { margin-top: 0; color: #fbbf24; font-size: 20px; }
        .row-box { margin: 10px 0; padding: 10px; background: #334155; border-radius: 8px; font-size: 14px; display: flex; justify-content: space-between; align-items: center; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #d97706; color: white; font-size: 13px; font-family: monospace; font-weight: bold; }
        button { margin-top: 20px; padding: 10px; background: #f59e0b; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #fbbf24; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>តារាងពហុមាត្រ (Multidimensional Array)</h2>
    
    <div class="row-box">
        <span><?php echo $devices[0]["title"]; ?></span>
        <span class="badge"><?php echo $devices[0]["price"]; ?> $</span>
    </div>
    
    <div class="row-box">
        <span><?php echo $devices[1]["title"]; ?></span>
        <span class="badge"><?php echo $devices[1]["price"]; ?> $</span>
    </div>
    
    <!-- Interactive Button -->
    <button onclick="showMultiArrayInfo()">ពិនិត្យទិន្នន័យ (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showMultiArrayInfo() {
        let text = "<?php echo $displaySummary; ?>";
        alert("ព័ត៌មានទំនិញ៖\n" + text);
        console.log("Multidimensional array demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>