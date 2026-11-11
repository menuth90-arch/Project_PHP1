<?php
// PHP Backend: Function with Void Return Type & Without Parameters
function renderSystemGreeting(): void {
    echo "ស្វាគមន៍មកកាន់ប្រព័ន្ធគ្រប់គ្រងសិក្សា (Welcome to LMS Portal)";
}
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>func_void_noparam_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #f97316; }
        h2 { margin-top: 0; color: #fb923c; font-size: 20px; }
        .banner-box { margin: 15px 0; padding: 14px; background: #334155; border-radius: 8px; font-size: 14px; text-align: center; color: #fdba74; font-weight: bold; }
        button { margin-top: 20px; padding: 10px; background: #f97316; color: #ffffff; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #fb923c; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>អនុគមន៍ Void គ្មានប៉ារ៉ាម៉ែត្រ (Void Function)</h2>
    <p><strong>លទ្ធផលកោះហៅអនុគមន៍៖</strong></p>
    
    <div class="banner-box">
        <?php 
            // កោះហៅអនុគមន៍ដើម្បីបង្ហាញសារ
            renderSystemGreeting(); 
        ?>
    </div>
    
    <!-- Interactive Button -->
    <button onclick="showVoidFuncInfo()">ពិនិត្យដំណើរការ Function (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showVoidFuncInfo() {
        alert("អនុគមន៍ប្រភេទ Void គ្មានប៉ារ៉ាម៉ែត្រ ត្រូវបានប្រតិបត្តិបង្ហាញលទ្ធផលជោគជ័យ!");
        console.log("Void function without parameters demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>