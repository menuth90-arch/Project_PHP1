<?php
// PHP Backend: Function Return Value with Parameters (Discount Calculator)
function calculateFinalPrice(float $originalPrice, float $discountRate): float {
    $discountAmount = $originalPrice * ($discountRate / 100);
    $finalPrice = $originalPrice - $discountAmount;
    return $finalPrice;
}

$itemPrice = calculateFinalPrice(120.0, 15.0); // តម្លៃដើម 120$ បញ្ចុះតម្លៃ 15%
$displayResult = "តម្លៃសរុបក្រោយបញ្ចុះតម្លៃ៖ " . $itemPrice . " $";
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>func_return_withparam_discount.php</title>
    <!-- CSS Styling: Modern UI Card -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 440px; border-left: 6px solid #3b82f6; }
        h2 { margin-top: 0; color: #60a5fa; font-size: 20px; }
        .badge { display: inline-block; padding: 6px 12px; margin-top: 10px; border-radius: 12px; background: #2563eb; color: white; font-size: 14px; font-weight: bold; font-family: monospace; }
        button { margin-top: 20px; padding: 10px; background: #3b82f6; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #60a5fa; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2>គណនាបញ្ចុះតម្លៃ (Return With Parameters)</h2>
    <p><strong>លទ្ធផលគណនាតម្លៃទំនិញ៖</strong></p>
    <div class="badge"><?php echo $displayResult; ?></div>
    
    <!-- Interactive Button -->
    <button onclick="showDiscountInfo()">ពិនិត្យតម្លៃសរុប (JS)</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function showDiscountInfo() {
        let text = "<?php echo $displayResult; ?>";
        alert("ព័ត៌មានតម្លៃ៖ " + text);
        console.log("Return function with parameters (discount) demo executed successfully via JavaScript.");
    }
</script>

</body>
</html>