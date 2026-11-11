<?php
// PHP Backend: Control Structure - for Loop Demo
$itemListHtml = "";

for ($i = 1; $i <= 3; $i++) {
    $itemListHtml .= "<div class='item-row'><span class='badge'>កិច្ចការទី #$i</span> ដំណើរការដោយជោគជ័យ</div>";
}
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>loop_for_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #eab308; }
        h2 { margin-top: 0; color: #facc15; font-size: 20px; }
        .item-row { margin: 8px 0; padding: 8px; background: #334155; border-radius: 8px; font-size: 14px; display: flex; justify-content: space-between; align-items: center; }
        .badge { display: inline-block; padding: 4px 8px; border-radius: 6px; background: #ca8a04; color: white; font-size: 12px; font-weight: bold; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #eab308; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #facc15; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>រង្វិលជុំ For Loop Demo</h2>
    <p><strong>បញ្ជីរង្វិលជុំ (1 ដល់ 3)៖</strong></p>
    <div style="margin-top: 10px;"><?php echo $itemListHtml; ?></div>
    
    <!-- Interactive Button -->
    <button onclick="showForLoopInfo()">ពិនិត្យរង្វិលជុំ For (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showForLoopInfo() {
        alert("រង្វិលជុំ For Loop បានបង្កើតបញ្ជីចំនួន ៣ ដោយជោគជ័យ!");
        console.log("For loop control structure demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>