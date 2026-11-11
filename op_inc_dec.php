<?php
// PHP Backend: Increment & Decrement Operators Demo
$counter = 10;

// Post-increment: បង្ហាញតម្លៃមុន សឹមបូកបន្ថែម១ ($counter ក្លាយជា 11)
$postInc = $counter++; 

// Pre-increment: បូកបន្ថែម១ មុន សឹមបង្ហាញតម្លៃ ($counter ក្លាយជា 12)
$preInc = ++$counter; 

$resultSummary = "$postInc និង $preInc";
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>op_inc_dec_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #f97316; }
        h2 { margin-top: 0; color: #fb923c; font-size: 20px; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #ea580c; color: white; font-size: 13px; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #f97316; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #fb923c; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>ប្រតិបត្តិករកើនឡើង (Inc / Dec Operators)</h2>
    <p><strong>Post-increment ($counter++)៖</strong> <span class="badge"><?php echo $postInc; ?></span></p>
    <p><strong>Pre-increment (++$counter)៖</strong> <span class="badge"><?php echo $preInc; ?></span></p>
    
    <!-- Interactive Button -->
    <button onclick="showIncDecInfo()">ពិនិត្យលទ្ធផលរាប់ (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showIncDecInfo() {
        let summary = "<?php echo $resultSummary; ?>";
        alert("លទ្ធផលនៃការកើនឡើងគឺ៖ " + summary);
        console.log("Increment and decrement operators demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>