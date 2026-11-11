<?php
// PHP Backend: Associative Array Demo
$student = [
    "id"   => "AU-CS-002",
    "name" => "រិទ្ធី ពៅ",
    "gpa"  => 3.90
];

$summaryInfo = "អត្តលេខ: {$student['id']} | ឈ្មោះ: {$student['name']} | GPA: {$student['gpa']}";
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>assoc_array_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #06b6d4; }
        h2 { margin-top: 0; color: #22d3ee; font-size: 20px; }
        .info-row { margin: 10px 0; padding: 10px; background: #334155; border-radius: 8px; font-size: 14px; display: flex; justify-content: space-between; align-items: center; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #0891b2; color: white; font-size: 13px; font-family: monospace; font-weight: bold; }
        button { margin-top: 20px; padding: 10px; background: #06b6d4; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #22d3ee; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>ព័ត៌មាននិស្សិត (Associative Array)</h2>
    
    <div class="info-row">
        <span>អត្តលេខ (ID)៖</span>
        <span class="badge"><?php echo $student['id']; ?></span>
    </div>
    
    <div class="info-row">
        <span>ឈ្មោះ (Name)៖</span>
        <span class="badge"><?php echo $student['name']; ?></span>
    </div>
    
    <div class="info-row">
        <span>ពិន្ទុមធ្យមភាគ (GPA)៖</span>
        <span class="badge"><?php echo $student['gpa']; ?></span>
    </div>
    
    <!-- Interactive Button -->
    <button onclick="showStudentInfo()">ពិនិត្យប្រវត្តិរូបសង្ខេប (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showStudentInfo() {
        let summary = "<?php echo $summaryInfo; ?>";
        alert("ព័ត៌មានសង្ខេប៖\n" + summary);
        console.log("Associative array demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>