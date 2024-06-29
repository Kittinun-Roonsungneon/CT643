<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
</head>
<body>
    <h1>Welcome, {{ $user->name }}</h1>
    <p>รหัสนักศึกษา: {{ $user->student_id }}</p>
    <p>ชื่อ: {{ $user->thai_name }} ({{ $user->english_name }})</p>
    <h1>Welcome, กิตตินันท์ หรุ่นสูงเนิน</h1>
    <p>รหัสนักศึกษา: 65130695</p>
    <p>ชื่อ: กิตตินันท์ หรุ่นสูงเนิน</p>
</body>
</html>
