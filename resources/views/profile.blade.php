<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="card">
        <div class="img-bx">
            <img src="{{ asset('assets/img/gambar1.png') }}" alt="img" />
        </div>
        <div class="content">
            <div class="detail">
                <h2><?= $nama ?><br /><span><?= $npm ?></span><br /><span><?= $nama_kelas ?? 'Kelas tidak ditemukan' ?></span>
                </h2>
            </div>
        </div>
    </div>

</body>

</html>