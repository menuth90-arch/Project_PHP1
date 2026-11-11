<?php
// PHP Backend: Control Structure - while Loop Demo
$i = 1;
$listHtml = "";
while ($i <= 3) {
    $listHtml .= "<span class='badge'>សប្តាហ៍សិក្សាទី " . $i . "</span> ";
    $i++;
}
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>loop_while_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #6366f1; }
        h2 { margin-top: 0; color: #818cf8; font-size: 20px; }
        .badge { display: inline-block; padding: 6px 12px; margin: 4px 2px; border-radius: 12px; background: #4f46e5; color: white; font-size: 13px; font-weight: bold; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #6366f1; color: #ffffff; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #818cf8; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>រង្វិលជុំ While Loop Demo</h2>
    <p><strong>លទ្ធផលរង្វិលជុំ (1 ដល់ 3)៖</strong></p>
    <div style="margin-top: 10px;"><?php echo $listHtml; ?></div>
    
    <!-- Interactive Button -->
    <button onclick="showWhileInfo()">ពិនិត្យរង្វិលជុំ (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showWhileInfo() {
        alert("រង្វិលជុំ While Loop បានដំណើរការបង្កើតធាតុពី ១ ដល់ ៣ រួចរាល់!");
        console.log("While loop control structure demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>