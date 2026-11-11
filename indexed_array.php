<?php
// PHP Backend: Indexed Array Demo
$techStack = ["C# .NET", "JavaScript", "SQL Database"];
$firstItem = $techStack[0];
$thirdItem = $techStack[2];
$displayResult = "បច្ចេកវិទ្យាទី១៖ " . $firstItem . " | បច្ចេកវិទ្យាទី៣៖ " . $thirdItem;
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>indexed_array_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #3b82f6; }
        h2 { margin-top: 0; color: #60a5fa; font-size: 20px; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #2563eb; color: white; font-size: 13px; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #3b82f6; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #60a5fa; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>តារាងលិបិក្រម (Indexed Array)</h2>
    <p><strong>បច្ចេកវិទ្យាទី១ ($techStack[0])៖</strong> <span class="badge"><?php echo $firstItem; ?></span></p>
    <p><strong>បច្ចេកវិទ្យាទី៣ ($techStack[2])៖</strong> <span class="badge"><?php echo $thirdItem; ?></span></p>
    
    <!-- Interactive Button -->
    <button onclick="showIndexedArrayInfo()">ពិនិត្យទិន្នន័យ Array (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showIndexedArrayInfo() {
        let result = "<?php echo $displayResult; ?>";
        alert("លទ្ធផល Indexed Array គឺ៖ " + result);
        console.log("Indexed array demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>