<?php
// PHP Backend: Control Structure - if Statement Demo
$examScore = 78;

if ($examScore >= 50) {
    $resultMessage = "សូមអបអរសាទរ អ្នកបានប្រឡងជាប់! (Passed)";
}
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>ctrl_if_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #3b82f6; }
        h2 { margin-top: 0; color: #60a5fa; font-size: 20px; }
        .badge { display: inline-block; padding: 6px 12px; border-radius: 12px; background: #2563eb; color: white; font-size: 13px; font-weight: bold; }
        button { margin-top: 20px; padding: 10px; background: #3b82f6; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #60a5fa; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>លក្ខខណ្ឌពិនិត្យពិន្ទុ (If Statement)</h2>
    <p><strong>ពិន្ទុរបស់អ្នក៖</strong> <?php echo $examScore; ?></p>
    <p><strong>លទ្ធផល៖</strong><br><span class="badge"><?php echo $resultMessage; ?></span></p>
    
    <!-- Interactive Button -->
    <button onclick="showIfInfo()">ពិនិត្យលទ្ធផល (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showIfInfo() {
        let msg = "<?php echo $resultMessage; ?>";
        alert(msg);
        console.log("If statement control structure demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>