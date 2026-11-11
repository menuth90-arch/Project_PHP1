<?php
// PHP Backend: ព័ត៌មាននិស្សិត និងពិន្ទុ
$studentName = "អាដូង (Adong)";
$department = "វិទ្យាសាស្ត្រកុំព្យូទ័រ (Computer Science)";
$score = 92;
$status = ($score >= 50) ? "ជាប់ (Passed)" : "ធ្លាក់ (Failed)";
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>student_card_demo.php</title>
    <!-- CSS Styling: រចនាប័ទ្មស៊ីសាច់ហូតគ្នា -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #1e1e2f; color: #fff; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #2a2a40; padding: 30px; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.3); width: 350px; border-left: 6px solid #4e73df; }
        h2 { margin-top: 0; color: #4e73df; }
        .badge { display: inline-block; padding: 5px 12px; border-radius: 20px; background: #1cc88a; color: white; font-weight: bold; font-size: 14px; }
        button { margin-top: 15px; padding: 10px 15px; background: #4e73df; color: white; border: none; border-radius: 6px; cursor: pointer; width: 100%; font-weight: bold; }
        button:hover { background: #2e59d9; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>កាតនិស្សិត (Student Card)</h2>
    <p><strong>ឈ្មោះ៖</strong> <?php echo $studentName; ?></p>
    <p><strong>ជំនាញ៖</strong> <?php echo $department; ?></p>
    <p><strong>លទ្ធផល៖</strong> <span class="badge"><?php echo $status; ?> (<?php echo $score; ?>ពិន្ទុ)</span></p>
    
    <!-- Interactive Button -->
    <button onclick="showWelcomeMessage()">បង្ហាញសារស្វាគមន៍</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showWelcomeMessage() {
        let student = "<?php echo $studentName; ?>";
        alert("សូមស្វាគមន៍មកកាន់ប្រព័ន្ធគ្រប់គ្រងនិស្សិត, " + student + "!");
        console.log("JavaScript executed successfully for " + student);
    }
</script>

</body>
</html>