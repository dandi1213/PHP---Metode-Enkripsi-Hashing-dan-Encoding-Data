<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing and Encoding Demo</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 70%;
            margin: 174px auto;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }
        h1 {
            text-align: center;
            color: #f1c40f;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .output-box {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 15px;
            margin: 15px 0;
            border-left: 6px solid #f1c40f;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }
        .output-box:hover {
            transform: scale(1.05);
            background-color: rgba(255, 255, 255, 0.3);
        }
        .label {
            font-weight: bold;
            color: #f39c12;
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 1.2em;
            color: #f1c40f;
        }
        .footer span {
            display: block;
            margin: 5px 0;
        }
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 20px;
            }
            h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Hashing and Encoding Demo</h1>

    <?php
    // Fungsi MD5
    function generateMD5($string) {
        return md5($string);
    }

    // Fungsi Base64 encode
    function base64Encode($string) {
        return base64_encode($string);
    }

    // Fungsi Base64 decode
    function base64Decode($encodedString) {
        return base64_decode($encodedString);
    }

    // Fungsi Bcrypt menggunakan password_hash
    function generateBcrypt($string) {
        return password_hash($string, PASSWORD_BCRYPT);
    }

    $plainText = "Dandi";

    echo '<div class="output-box">';
    echo '<span class="label">Plain text:</span> ' . $plainText;
    echo '</div>';

    // MD5 Hashing
    $md5Hash = generateMD5($plainText);
    echo '<div class="output-box">';
    echo '<span class="label">MD5 Hash:</span> ' . $md5Hash;
    echo '</div>';

    // Bcrypt Hashing
    $bcryptHash = generateBcrypt($plainText);
    echo '<div class="output-box">';
    echo '<span class="label">Bcrypt Hash:</span> ' . $bcryptHash;
    echo '</div>';

    // Base64 Encoding
    $base64Encoded = base64Encode($plainText);
    echo '<div class="output-box">';
    echo '<span class="label">Base64 Encoded:</span> ' . $base64Encoded;
    echo '</div>';

    // Base64 Decoding
    $base64Decoded = base64Decode($base64Encoded);
    echo '<div class="output-box">';
    echo '<span class="label">Base64 Decoded:</span> ' . $base64Decoded;
    echo '</div>';
    ?>

    <div class="footer">
        <span><strong>Nama:</strong> M Dandi Al Idrus</span>
        <span><strong>NIM:</strong> 222443015</span>
        <span><strong>Kelas:</strong> 3AEC-1 (2022)</span>
    </div>
</div>

</body>
</html>
