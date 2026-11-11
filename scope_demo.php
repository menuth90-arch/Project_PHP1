<?php
// PHP Backend: Global & Static Variable Scope Demo
$platformName = "Angkor Learning Hub";

function registerStudent() {
    global $platformName; // ប្រើប្រាស់អថេរពីក្រៅមុខងារ (Global Variable)
    static $enrollmentId = 101; // រក្សាតម្លៃទុកពេលហៅម្ដងទៀត (Static Variable)
    
    $output = "[" . $platformName . "] Student ID: " . $enrollmentId;
    $enrollmentId++;
    return $output;
}

// ហៅមុខងារពីរដងដើម្បីមើលការប្រែប្រួលតម្លៃ static
$firstStudent = registerStudent();
$secondStudent = registerStudent();
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>scope_demo.php</title>
    <!-- CSS Styling: រចនាប័ទ្ម Modern UI -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 420px; border-left: 6px solid #10b981; }
        h2 { margin-top: 0; color: #34d399; font-size: 20px; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #059669; color: white; font-size: 13px; font-weight: bold; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #10b981; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #34d399; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>ប្រព័ន្ធគ្រប់គ្រងការចុះឈ្មោះ (Scope Demo)</h2>
    <p><strong>ការចុះឈ្មោះទី ១៖</strong><br><span class="badge"><?php echo $firstStudent; ?></span></p>
    <p><strong>ការចុះឈ្មោះទី ២៖</strong><br><span class="badge"><?php echo $secondStudent; ?></span></p>
    
    <!-- Interactive Button -->
    <button onclick="showPlatformInfo()">ពិនិត្យប្រព័ន្ធ (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showPlatformInfo() {
        let platform = "<?php echo $platformName; ?>";
        alert("ប្រព័ន្ធកំពុងដំណើរការលើកោសិកា៖ " + platform);
        console.log("Scope demo executed successfully with JavaScript.");
    }
</script>

</body>
</html>