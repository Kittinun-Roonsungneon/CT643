<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .student {
            margin: 10px 0;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .student:last-child {
            border-bottom: none;
        }
        .name {
            font-size: 18px;
            color: #555;
        }
        .id {
            font-size: 16px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student List</h1>
        <div class="student">
            <div class="name">นาย จตุพร ศักดิ์ชัยกุล</div>
            <div class="id">65130598</div>
        </div>
        <div class="student">
            <div class="name">นาย จิรวัฒน์ นพชัยอำนวยโชค</div>
            <div class="id">65130029</div>
        </div>
        <div class="student">
            <div class="name">นางสาว นัชชณิกา ขาวอ่อน</div>
            <div class="id">65130167</div>
        </div>
        <div class="student">
            <div class="name">นาย ทรงภพ ศรีฮู๋</div>
            <div class="id">65130127</div>
        </div>
        <div class="student">
            <div class="name">นาย กิตตินันท์ หรุ่นสูงเนิน</div>
            <div class="id">65130695</div>
        </div>
        <div class="student">
            <div class="name">นาย พิเชษฐ์ แก้วเจริญ</div>
            <div class="id">65130126</div>
        </div>
    </div>
</body>
</html>
