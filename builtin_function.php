<?php
// PHP Backend: Built-in Functions Demo
$courses = ["C# Programming", "Database System"];
array_push($courses, "Web Development"); // បន្ថែម "Web Development" ទៅខាងចុង Array[cite: 16]

$systemTitle = "angkor university portal";
$upperTitle = strtoupper($systemTitle); // បម្លែងអក្សរទៅជាអក្សរធំទាំងអស់ (Uppercase)[cite: 16]

$totalCourses = count($courses); // រាប់ចំនួនធាតុសរុបក្នុង Array[cite: 16]
$displaySummary = "ចំនួនធាតុ៖ " . $totalCourses . " | ឈ្មោះធំ៖ " . $upperTitle;
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>builtin_functions_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 450px; border-left: 6px solid #ec4899; }
        h2 { margin-top: 0; color: #f472b6; font-size: 20px; }
        .info-box { margin: 10px 0; padding: 12px; background: #334155; border-radius: 8px; font-size: 14px; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #db2777; color: white; font-size: 13px; font-family: monospace; font-weight: bold; }
        ul { margin: 5px 0 0 20px; padding: 0; color: #cbd5e1; font-size: 13px; }
        button { margin-top: 20px; padding: 10px; background: #ec4899; color: #ffffff; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #f472b6; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>អនុគមន៍ស្រាប់ (Built-in Functions)</h2>
    
    <div class="info-box">
        <strong>ឈ្មោះប្រព័ន្ធ (strtoupper)៖</strong><br>
        <span class="badge" style="margin-top: 6px;"><?php echo $upperTitle; ?></span>
    </div>
    
    <div class="info-box">
        <strong>បញ្ជីមុខវិជ្ជាសរុប (count: <?php echo $totalCourses; ?>)៖</strong>
        <ul>
            <?php foreach($courses as $course): ?>
                <li><?php echo $course; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    
    <!-- Interactive Button -->
    <button onclick="showBuiltinInfo()">ពិនិត្យលទ្ធផល Built-in Functions (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showBuiltinInfo() {
        let text = "<?php echo $displaySummary; ?>";
        alert("លទ្ធផលអនុគមន៍ស្រាប់៖\n" + text);
        console.log("Built-in functions demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>