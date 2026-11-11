<?php
// PHP Backend: Arithmetic Operators & Calculations Demo
$num1 = 25;
$num2 = 4;

$sum = $num1 + $num2;
$product = $num1 * $num2;
$division = $num1 / $num2;
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>op_arithmetic_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 420px; border-left: 6px solid #06b6d4; }
        h2 { margin-top: 0; color: #22d3ee; font-size: 20px; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #0891b2; color: white; font-size: 13px; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #06b6d4; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #67e8f9; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>ការគណនាเลขគណិត (Arithmetic)</h2>
    <p><strong>ផលបូក (25 + 4)៖</strong> <span class="badge"><?php echo $sum; ?></span></p>
    <p><strong>ផលគុណ (25 * 4)៖</strong> <span class="badge"><?php echo $product; ?></span></p>
    <p><strong>ផលចែក (25 / 4)៖</strong> <span class="badge"><?php echo $division; ?></span></p>
    
    <!-- Interactive Button -->
    <button onclick="showCalculation()">បង្ហាញលទ្ធផល (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showCalculation() {
        let totalSum = "<?php echo $sum; ?>";
        alert("លទ្ធផលផលបូកសរុបគឺ: " + totalSum);
        console.log("Arithmetic calculation verified successfully via JavaScript.");
    }
</script>

</body>
</html>