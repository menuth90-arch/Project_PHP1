<?php
// PHP Backend: Function with Void Return Type & With Parameters
function printStaffNotice(string $staffName, string $taskStatus): void {
    echo "<div class='row-box'><strong>បុគ្គលិក៖</strong> $staffName <span class='badge'>$taskStatus</span></div>";
}
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>func_void_withparam_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 460px; border-left: 6px solid #06b6d4; }
        h2 { margin-top: 0; color: #22d3ee; font-size: 20px; }
        .row-box { margin: 10px 0; padding: 10px; background: #334155; border-radius: 8px; font-size: 14px; display: flex; justify-content: space-between; align-items: center; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #0891b2; color: white; font-size: 12px; font-weight: bold; }
        button { margin-top: 20px; padding: 10px; background: #06b6d4; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #22d3ee; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>អនុគមន៍ Void មានប៉ារ៉ាម៉ែត្រ (With Parameters)</h2>
    <p><strong>បញ្ជីការងារបុគ្គលិក៖</strong></p>
    
    <div style="margin-top: 10px;">
        <?php 
            // កោះហៅអនុគមន៍ដោយបញ្ជូន Values ចូលទៅក្នុង Parameters[cite: 16]
            printStaffNotice("រិទ្ធី ពៅ", "បានបញ្ចប់កិច្ចការ (Completed)");
            printStaffNotice("សុខ ជា", "កំពុងរៀបចំរបាយការណ៍ (In Progress)");
        ?>
    </div>
    
    <!-- Interactive Button -->
    <button onclick="showVoidParamInfo()">ពិនិត្យដំណើរការ Function (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showVoidParamInfo() {
        alert("អនុគមន៍ Void មានប៉ារ៉ាម៉ែត្រ ត្រូវបានប្រតិបត្តិបង្ហាញទិន្នន័យបុគ្គលិកទាំងពីរជោគជ័យ!");
        console.log("Void function with parameters demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>