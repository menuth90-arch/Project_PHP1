<?php
// PHP Backend: Control Structure - foreach Loop Demo
$studentProfile = [
    "ឈ្មោះ (Name)" => "រិទ្ធី (Rithy)",
    "ជំនាញ (Major)" => "វិទ្យាសាស្ត្រកុំព្យូទ័រ",
    "ឆ្នាំសិក្សា (Year)" => "ឆ្នាំទី ២"
];

$profileHtml = "";
foreach ($studentProfile as $key => $value) {
    $profileHtml .= "<div class='row'><strong>$key:</strong> <span class='badge'>$value</span></div>";
}
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>loop_foreach_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #14b8a6; }
        h2 { margin-top: 0; color: #2dd4bf; font-size: 20px; }
        .row { margin: 10px 0; padding: 10px; background: #334155; border-radius: 8px; font-size: 14px; display: flex; justify-content: space-between; align-items: center; }
        .badge { display: inline-block; padding: 4px 8px; border-radius: 6px; background: #0d9488; color: white; font-size: 12px; font-weight: bold; }
        button { margin-top: 20px; padding: 10px; background: #14b8a6; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #2dd4bf; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>រង្វិលជុំ Foreach Loop Demo</h2>
    <p><strong>ព័ត៌មាននិស្សិតពី Array៖</strong></p>
    <div style="margin-top: 10px;"><?php echo $profileHtml; ?></div>
    
    <!-- Interactive Button -->
    <button onclick="showForeachInfo()">ពិនិត្យទិន្នន័យ Array (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showForeachInfo() {
        alert("រង្វិលជុំ Foreach Loop បានទាញយកទិន្នន័យពី Array មកបង្ហាញជោគជ័យ!");
        console.log("Foreach loop control structure demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>