<?php
// PHP Backend: Control Structure - switch Statement Demo
$userRole = "manager";

switch ($userRole) {
    case "admin":
        $accessLevel = "សិទ្ធិគ្រប់គ្រងពេញលេញ (Full System Access)";
        break;
    case "manager":
        $accessLevel = "សិទ្ធិគ្រប់គ្រងផ្នែក (Department Management Access)";
        break;
    default:
        $accessLevel = "សិទ្ធិមានកំណត់ (Limited Staff Access)";
        break;
}
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>ctrl_switch_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #0ea5e9; }
        h2 { margin-top: 0; color: #38bdf8; font-size: 20px; }
        .badge { display: inline-block; padding: 6px 12px; border-radius: 12px; background: #0284c7; color: white; font-size: 13px; font-weight: bold; }
        button { margin-top: 20px; padding: 10px; background: #0ea5e9; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #38bdf8; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>ការពិនិត្យសិទ្ធិ (Switch Statement Demo)</h2>
    <p><strong>តួនាទី៖</strong> <?php echo $userRole; ?></p>
    <p><strong>កម្រិតសិទ្ធិ៖</strong><br><span class="badge"><?php echo $accessLevel; ?></span></p>
    
    <!-- Interactive Button -->
    <button onclick="showSwitchInfo()">ពិនិត្យសិទ្ធិប្រព័ន្ធ (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showSwitchInfo() {
        let roleAccess = "<?php echo $accessLevel; ?>";
        alert("កម្រិតសិទ្ធិរបស់អ្នកគឺ៖ " + roleAccess);
        console.log("Switch control structure demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>