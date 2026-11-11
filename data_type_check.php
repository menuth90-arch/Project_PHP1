<?php
// PHP Backend: Data Type & Validation Demo
$studentId = 10245;
$gpa = 3.85;
$isEnrolled = true;

$typeId = gettype($studentId);
$typeGpa = gettype($gpa);
$enrollStatus = $isEnrolled ? "Yes" : "No";
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>student_verification_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 420px; border-left: 6px solid #8b5cf6; }
        h2 { margin-top: 0; color: #a78bfa; font-size: 20px; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #7c3aed; color: white; font-size: 13px; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #8b5cf6; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #a78bfa; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>ការពិនិត្យប្រភេទិនន័យ (Data Type Check)</h2>
    <p><strong>អត្តលេខ (ID):</strong> <?php echo $studentId; ?> <span class="badge">(<?php echo $typeId; ?>)</span></p>
    <p><strong>ពិន្ទុសរុប (GPA):</strong> <?php echo $gpa; ?> <span class="badge">(<?php echo $typeGpa; ?>)</span></p>
    <p><strong>ស្ថានភាពចុះឈ្មោះ៖</strong> <?php echo $enrollStatus; ?></p>
    
    <!-- Interactive Button -->
    <button onclick="verifyData()">ផ្ទៀងផ្ទាត់ទិន្នន័យ (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function verifyData() {
        let gpaType = "<?php echo $typeGpa; ?>";
        alert("ប្រភេទិនន័យ GPA គឺប្រភេទ៖ " + gpaType);
        console.log("Data type verification checked successfully via JavaScript.");
    }
</script>

</body>
</html>