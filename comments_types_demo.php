<?php
// 1. Single-line comment: ពិន្ទុមុខវិជ្ជា (Subject scores)
$scorePHP = 85; 
$scoreJS = 90; # ពិន្ទុ JavaScript

/* 2. Multi-line comment
 * គណនាមធ្យមភាគពិន្ទុ (Calculate average score)
 */
$average = ($scorePHP + $scoreJS) / 2;

/**
 * 3. DocBlock Comment
 * @param float $scorePHP PHP Score
 * @param float $scoreJS JS Score
 * @return string Final Grade
 */
$grade = ($average >= 80) ? "A" : "B";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Score Demo</title>
    <!-- CSS Styling -->
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f3; padding: 40px; }
        .card { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); max-width: 400px; }
        h2 { color: #2c3e50; margin-top: 0; }
        .grade { font-weight: bold; color: #27ae60; font-size: 1.2em; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>លទ្ធផលសិក្សា (Study Result)</h2>
    <p>មធ្យមភាគពិន្ទុ៖ <strong><?php echo $average; ?></strong></p>
    <p>និទ្ទេស (Grade): <span class="grade"><?php echo $grade; ?></span></p>
</div>

<!-- JavaScript Interaction -->
<script>
    console.log("Student evaluation script loaded successfully!");
    alert("មធ្យមភាគពិន្ទុគឺ៖ <?php echo $average; ?>");
</script>

</body>
</html>