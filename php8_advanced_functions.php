<?php
// PHP Backend: PHP 8 Advanced Functions & Arrow Functions
declare(strict_types=1);

// 1. Function with Default Parameter Value & Type Declarations
function calcScoreWithBonus(float $baseScore, float $bonusRate = 0.05): float {
    return $baseScore + ($baseScore * $bonusRate);
}

// 2. Modern PHP 8 Arrow Function
$multiplier = 3;
$tripleFn = fn(int $score): int => $score * $multiplier;

$finalExamScore = calcScoreWithBonus(80.0); // ពិន្ទុដើម 80 បូកបន្ថែម Bonus 5%
$arrowResult = $tripleFn(15);

$displaySummary = "ពិន្ទុបូកស្វ័យប្រវត្តិ៖ " . $finalExamScore . " | លទ្ធផល Arrow Fn៖ " . $arrowResult;
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>php8_advanced_functions_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 460px; border-left: 6px solid #6366f1; }
        h2 { margin-top: 0; color: #818cf8; font-size: 20px; }
        .row-box { margin: 10px 0; padding: 10px; background: #334155; border-radius: 8px; font-size: 14px; display: flex; justify-content: space-between; align-items: center; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #4f46e5; color: white; font-size: 13px; font-family: monospace; font-weight: bold; }
        button { margin-top: 20px; padding: 10px; background: #6366f1; color: #ffffff; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #818cf8; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>មុខងារកម្រិតខ្ពស់ PHP 8 (Advanced Functions)</h2>
    
    <div class="row-box">
        <span>ពិន្ទុ + Default Bonus៖</span>
        <span class="badge"><?php echo $finalExamScore; ?></span>
    </div>
    
    <div class="row-box">
        <span>លទ្ធផល Arrow Function៖</span>
        <span class="badge"><?php echo $arrowResult; ?></span>
    </div>
    
    <!-- Interactive Button -->
    <button onclick="showPhp8Info()">ពិនិត្យលទ្ធផល PHP 8 (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showPhp8Info() {
        let text = "<?php echo $displaySummary; ?>";
        alert("ព័ត៌មាន PHP 8 Advanced Functions៖\n" + text);
        console.log("PHP 8 advanced functions demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>