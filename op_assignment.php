<?php
// PHP Backend: Assignment Operators Demo
$points = 120;
$points += 30; // $points = 150 (Addition assignment)

$greeting = "សូមស្វាគមន៍";
$greeting .= " មកកាន់ប្រព័ន្ធបណ្តុះបណ្តាល!"; // Concatenation assignment
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>op_assignment_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 420px; border-left: 6px solid #ec4899; }
        h2 { margin-top: 0; color: #f472b6; font-size: 20px; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #db2777; color: white; font-size: 13px; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #ec4899; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #f472b6; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>ប្រតិបត្តិករផ្ដល់តម្លៃ (Assignment Operators)</h2>
    <p><strong>ពិន្ទុសរុប (+=)៖</strong> <span class="badge"><?php echo $points; ?></span></p>
    <p><strong>សារស្វាគមន៍ (.=)៖</strong><br><?php echo $greeting; ?></p>
    
    <!-- Interactive Button -->
    <button onclick="showAssignmentInfo()">ពិនិត្យទិន្នន័យ (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showAssignmentInfo() {
        let totalPoints = "<?php echo $points; ?>";
        alert("ពិន្ទុបច្ចុប្បន្នបន្ទាប់ពីបន្ថែមគឺ: " + totalPoints);
        console.log("Assignment operators demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>