<?php
// PHP Backend: Control Structure - match Expression Demo
$statusCode = 404;

$statusMessage = match($statusCode) {
    200, 201 => "ដំណើរការជោគជ័យ (OK / Success)",
    400, 422 => "សំណើមិនត្រឹមត្រូវ (Bad Request)",
    404      => "រកមិនឃើញទំព័រ ឬទិន្នន័យ (Not Found)",
    500      => "បញ្ហាប្រព័ន្ធសឺវើរ (Server Error)",
    default  => "កូដស្ថានភាពមិនស្គាល់ (Unknown Status)",
};
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>ctrl_match_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #10b981; }
        h2 { margin-top: 0; color: #34d399; font-size: 20px; }
        .badge { display: inline-block; padding: 6px 12px; border-radius: 12px; background: #059669; color: white; font-size: 13px; font-weight: bold; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #10b981; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #34d399; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>ការពិនិត្យស្ថានភាព (Match Expression Demo)</h2>
    <p><strong>កូដស្ថានភាព (Status Code)៖</strong> <span class="badge"><?php echo $statusCode; ?></span></p>
    <p><strong>លទ្ធផលសារ៖</strong><br><?php echo $statusMessage; ?></p>
    
    <!-- Interactive Button -->
    <button onclick="showMatchInfo()">ពិនិត្យកូដស្ថានភាព (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showMatchInfo() {
        let msg = "<?php echo $statusMessage; ?>";
        alert("សារស្ថានភាពសឺវើរគឺ៖ " + msg);
        console.log("Match expression control structure demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>