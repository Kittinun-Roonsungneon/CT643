<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container text-center">
        <div class="row">
          <div class="col">

          </div>
          <div class="col">
            จตุพร ศักดิ์ชัยกุล รหัสนักศึกษา 65130598
          </div>
          <div class="col">

          </div>
        </div>
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                นาย จิรวัฒน์ นพชัยอำนวยโชค <br>รหัสนักศึกษา 65130029
            </div>
            <div class="col">

            </div>
          </div>
          <div class="row">
            <div class="col">

            </div>
            <div class="col">
                นางสาวนัชชณิกา ขาวอ่อน 65130167
            </div>
            <div class="col">

            </div>
          </div>
          <div class="row">
            <div class="col">

            </div>
            <div class="col">
                นาย ทรงภพ ศรีฮู๋  รหัสนักศึกษา 65130127
            </div>
            <div class="col">

            </div>
          </div>
          <div class="row">
            <div class="col">

            </div>
            <div class="col">
                กิตตินันท์ หรุ่นสูงเนิน 65130695
            </div>
            <div class="col">

            </div>
          </div>
          <div class="row">
            <div class="col">

            </div>
            <div class="col">
                พิเชษฐ์ แก้วเจริญ 65130126
            </div>
            <div class="col">

            </div>
          </div>
          <div class="row">
            <div class="col">

            </div>
            <div class="col">
                @if ($tokens)
                <table border="1">
                    <thead>
                        <tr>

                            <th>Rac1</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{!! QrCode::size(400)->generate($tokens->rac1) !!}</td>
                        </tr>
                    </tbody>
                </table>
            @else
                <p>No tokens found.</p>
            @endif
            </div>
            <div class="col">

            </div>
          </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


