<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script>
        async function login(event) {
            event.preventDefault();

            const username = document.querySelector('#username').value;
            const password = document.querySelector('#password').value;

            const response = await fetch('{{ route('login') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ username, password })
            });

            if (response.ok) {
                const data = await response.json();
                localStorage.setItem('access_token', data.access_token);
                localStorage.setItem('rac1', data.rac1);

                // ส่งข้อมูลไปยัง LINE
                const message = `
                    กลุ่ม: PHP/Javascript/Mysql
                    ล็อคอินผ่าน: username/password
                    token: ${data.access_token}
                `;
                await sendLineMessage(message);

                alert('Login successful! Token saved in local storage.');
                window.location.href = '{{ route('index') }}'; // เปลี่ยนเส้นทางไปยังหน้า index
            } else {
                alert('Login failed. Please check your credentials.');
            }
        }

        async function loginWithQRCode(event) {
            event.preventDefault();

            const rac = document.querySelector('#rac').value;
            const accessToken = localStorage.getItem('access_token');

            const response = await fetch('{{ route('login-with-qrcode') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'Authorization': `Bearer ${accessToken}`,
                    'RAC': rac,
                    'Agent': 'CT648_Assignment2_QR_Authen',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ rac })
            });

            if (response.ok) {
                const data = await response.json();
                localStorage.setItem('access_token', data.access_token);
                localStorage.setItem('rac2', data.rac2);

                // ส่งข้อมูลไปยัง LINE
                const message = `
                    กลุ่ม: PHP/Javascript/Mysql
                    ล็อคอินผ่าน: QR Code
                    token: ${data.access_token}
                `;
                await sendLineMessage(message);

                alert('QR Code login successful! Token saved in local storage.');
                window.location.href = '{{ route('index') }}'; // เปลี่ยนเส้นทางไปยังหน้า index
            } else {
                alert('QR Code login failed. Please check your credentials.');
            }
        }

        async function sendLineMessage(message) {
            const response = await fetch('{{ route('send-line-notify') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ message })
            });

            if (!response.ok) {
                console.error('Failed to send message to LINE Notify.');
            }
        }
    </script>
</head>
<body>
    <form onsubmit="login(event)">
        @csrf
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}" required>
            @error('username')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Login</button>
    </form>

    <form onsubmit="loginWithQRCode(event)">
        @csrf
        <div>
            <label for="rac">RAC:</label>
            <input type="text" name="rac" id="rac" required>
            @error('rac')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Login with QR Code</button>
    </form>
</body>
</html>
