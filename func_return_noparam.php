<?php
// PHP Backend: Function with Return Value & Without Parameters
function getSystemVersion(): string {
    $major = "v2";
    $minor = "5.0";
    return "ប្រព័ន្ធបច្ចុប្បន្ន {$major}.{$minor}";
}

$systemInfo = getSystemVersion();
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>func_return_noparam_demo.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #8b5cf6; }
        h2 { margin-top: 0; color: #a78bfa; font-size: 20px; }
        .badge { display: inline-block; padding: 6px 12px; margin-top: 10px; border-radius: 12px; background: #7c3aed; color: white; font-size: 13px; font-weight: bold; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #8b5cf6; color: #ffffff; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #a78bfa; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>អនុគមន៍មានតម្លៃត្រឡប់ (Return Without Parameter)</h2>
    <p><strong>ព័ត៌មានកំណែប្រព័ន្ធ៖</strong></p>
    <div class="badge"><?php echo $systemInfo; ?></div>
    
    <!-- Interactive Button -->
    <button onclick="showReturnFuncInfo()">ពិនិត្យតម្លៃ Return (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showReturnFuncInfo() {
        let info = "<?php echo $systemInfo; ?>";
        alert("តម្លៃត្រឡប់ពីអនុគមន៍គឺ៖ " + info);
        console.log("Return function without parameters demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>