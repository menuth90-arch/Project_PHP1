<?php
// PHP Backend: Control Structure - if...elseif...else Demo
$purchaseAmount = 350; // ទឹកប្រាក់ទិញសរុប ($)

if ($purchaseAmount >= 500) {
    $tier = "VIP Member (បញ្ចុះតម្លៃ ២០%)";
} elseif ($purchaseAmount >= 200) {
    $tier = "Gold Member (បញ្ចុះតម្លៃ ១០%)";
} else {
    $tier = "Standard Member (គ្មានបញ្ចុះតម្លៃ)";
}
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>ctrl_elseif_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #a855f7; }
        h2 { margin-top: 0; color: #c084fc; font-size: 20px; }
        .badge { display: inline-block; padding: 6px 12px; border-radius: 12px; background: #9333ea; color: white; font-size: 13px; font-weight: bold; }
        button { margin-top: 20px; padding: 10px; background: #a855f7; color: #ffffff; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #c084fc; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>កម្រិតសមាជិកភាព (If-Elseif-Else Demo)</h2>
    <p><strong>ទឹកប្រាក់ទិញសរុប៖</strong> <?php echo $purchaseAmount; ?> $</p>
    <p><strong>កម្រិតរបស់អ្នក៖</strong><br><span class="badge"><?php echo $tier; ?></span></p>
    
    <!-- Interactive Button -->
    <button onclick="showTierInfo()">ពិនិត្យកម្រិតសមាជិក (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showTierInfo() {
        let memberTier = "<?php echo $tier; ?>";
        alert("កម្រិតសមាជិកភាពបច្ចុប្បន្នរបស់អ្នកគឺ៖ " + memberTier);
        console.log("If-elseif-else control structure demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>