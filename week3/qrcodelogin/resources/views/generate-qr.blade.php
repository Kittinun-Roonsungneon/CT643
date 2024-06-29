<!-- resources/views/generate-qr.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate QR Code</title>
</head>
<body>
    <div>
        <h1>Generate QR Code</h1>
        <form action="{{ route('generate-qr.post') }}" method="POST">
            @csrf
            <button type="submit">Generate QR Code</button>
        </form>
        @isset($qrCode)
            <div>
                <h2>QR Code</h2>
                {!! $qrCode !!}
                <p>{{ $code }}</p>
            </div>
        @endisset
    </div>
</body>
</html>
