<?php
// PHP Backend: Spaceship Operator (<=>) Demo
$res1 = (45 <=> 60); // -1 (45 < 60)
$res2 = (75 <=> 75); //  0 (75 == 75)
$res3 = (90 <=> 80); //  1 (90 > 80)
$combinedResult = "$res1, $res2, $res3";
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>op_spaceship_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #6366f1; }
        h2 { margin-top: 0; color: #818cf8; font-size: 20px; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #4f46e5; color: white; font-size: 13px; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #6366f1; color: #ffffff; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #818cf8; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>ប្រៀបធៀបទិសដៅ (Spaceship Operator)</h2>
    <p><strong>(45 &lt;=&gt; 60)៖</strong> <span class="badge"><?php echo $res1; ?></span></p>
    <p><strong>(75 &lt;=&gt; 75)៖</strong> <span class="badge"><?php echo $res2; ?></span></p>
    <p><strong>(90 &lt;=&gt; 80)៖</strong> <span class="badge"><?php echo $res3; ?></span></p>
    
    <!-- Interactive Button -->
    <button onclick="showSpaceshipInfo()">ពិនិត្យលទ្ធផល (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showSpaceshipInfo() {
        let results = "<?php echo $combinedResult; ?>";
        alert("លទ្ធផលសរុបនៃ Spaceship Operator គឺ៖ " + results);
        console.log("Spaceship operator demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>