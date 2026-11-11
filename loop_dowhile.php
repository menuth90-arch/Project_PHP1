<?php
// PHP Backend: Control Structure - do...while Loop Demo
$attempts = 5;
$outputMessage = "";

do {
    $outputMessage = "ដំណើរការយ៉ាងហោចណាស់មួយដង! (តម្លៃ: $attempts)";
    $attempts++;
} while ($attempts < 3); // លក្ខខណ្ឌខុស ប៉ុន្តែ do...while ត្រូវរត់យ៉ាងហោចណាស់ ១ ដង
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>loop_dowhile_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #f43f5e; }
        h2 { margin-top: 0; color: #fb7185; font-size: 20px; }
        .badge { display: inline-block; padding: 6px 12px; margin-top: 8px; border-radius: 12px; background: #e11d48; color: white; font-size: 13px; font-weight: bold; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #f43f5e; color: #ffffff; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #fb7185; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>រង្វិលជុំ Do-While Loop Demo</h2>
    <p><strong>លទ្ធផលប្រតិបត្តិការ៖</strong></p>
    <div class="badge"><?php echo $outputMessage; ?></div>
    
    <!-- Interactive Button -->
    <button onclick="showDoWhileInfo()">ពិនិត្យរង្វិលជុំ (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showDoWhileInfo() {
        let msg = "<?php echo $outputMessage; ?>";
        alert("លទ្ធផល Do-While Loop គឺ៖ " + msg);
        console.log("Do-while loop control structure demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>