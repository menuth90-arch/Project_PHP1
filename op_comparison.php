<?php
// PHP Backend: Comparison Operators Demo (== vs ===)
$userScoreStr = "95";  // ប្រភេទ String
$targetScoreInt = 95;  // ប្រភេទ Integer

$looseCheck = ($userScoreStr == $targetScoreInt);   // true (ស្មើតែតម្លៃ)
$strictCheck = ($userScoreStr === $targetScoreInt);  // false (ខុសប្រភេទិនន័យ)

$looseText = $looseCheck ? "bool(true) - ស្មើតម្លៃ" : "bool(false)";
$strictText = $strictCheck ? "bool(true)" : "bool(false) - ខុសប្រភេទិនន័យ (Type Mismatch)";
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>op_comparison_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #eab308; }
        h2 { margin-top: 0; color: #facc15; font-size: 20px; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #ca8a04; color: white; font-size: 13px; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #eab308; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #facc15; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>ប្រតិបត្តិករប្រៀបធៀប (Comparison)</h2>
    <p><strong>Loose Comparison ($val1 == $val2)៖</strong><br><span class="badge"><?php echo $looseText; ?></span></p>
    <p><strong>Strict Comparison ($val1 === $val2)៖</strong><br><span class="badge"><?php echo $strictText; ?></span></p>
    
    <!-- Interactive Button -->
    <button onclick="showComparisonInfo()">ពិនិត្យការប្រៀបធៀប (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showComparisonInfo() {
        let strictResult = "<?php echo $strictCheck ? 'true' : 'false'; ?>";
        alert("លទ្ធផល Strict Comparison (===) គឺ៖ " + strictResult);
        console.log("Comparison operators demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>