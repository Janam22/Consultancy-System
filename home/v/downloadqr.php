
<?php

include('./v/libs/phpqrcode/qrlib.php'); 

$text = "https://appointment.sen.edu.np/"; 
QRcode::png($text, './v/qr/counsellingformqr.png');

    $image='counsellingformqr.png';
    $file='./v/qr/'.$image;

        ob_end_clean();
        header("Content-Type: application/image");
        header("Content-Disposition: attachment; filename=\"".basename($file)."\"");
        readfile($file);
        exit;  