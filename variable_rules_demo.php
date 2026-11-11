<?php
// PHP Backend: ព័ត៌មានសៀវភៅ និងតម្លៃ (Book Information & Variables)
$bookTitle = "សៀវភៅជំនាញសរសេរកូដ PHP & MySQL";
$_price = 18.50;
$stockQuantity = 45;
$status = ($stockQuantity > 0) ? "មានក្នុងស្តុក (In Stock)" : "អស់ស្តុក (Out of Stock)";
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>book_info_demo.php</title>
    <!-- CSS Styling: រចនាប័ទ្មស្អាតបែប Modern UI -->
    <style>
        body { font-family: 'Khmer OS Siemreap', Arial, sans-serif; background: #0f172a; color: #f8fafc; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #1e293b; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); width: 380px; border-top: 5px solid #38bdf8; }
        h2 { margin-top: 0; color: #38bdf8; font-size: 20px; }
        .price { font-size: 22px; color: #4ade80; font-weight: bold; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 12px; background: #0284c7; color: white; font-size: 13px; }
        button { margin-top: 20px; padding: 10px; background: #38bdf8; color: #0f172a; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: bold; font-size: 14px; transition: 0.2s; }
        button:hover { background: #7dd3fc; }
    </style>
</head>
<body>

<!-- HTML Structure -->
<div class="card">
    <h2><?php echo $bookTitle; ?></h2>
    <p>តម្លៃ៖ <span class="price"><?php echo $_price; ?> $</span></p>
    <p>ស្ថានភាព៖ <span class="badge"><?php echo $status; ?></span></p>
    <p>ចំនួននៅសល់៖ <?php echo $stockQuantity; ?> ក្បាល</p>
    
    <!-- Interactive Button -->
    <button onclick="orderBook()">បញ្ជាទិញឥឡូវនេះ</button>
</div>

<!-- JavaScript Interaction -->
<script>
    function orderBook() {
        let title = "<?php echo $bookTitle; ?>";
        let price = "<?php echo $_price; ?>";
        alert("អរគុណសម្រាប់ការបញ្ជាទិញសៀវភៅ៖ " + title + " (តម្លៃ " + price + " $)!");
        console.log("Book ordered successfully via JS.");
    }
</script>

</body>
</html>