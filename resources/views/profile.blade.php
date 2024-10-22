<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-purple-200 via-pink-200 to-blue-200 flex items-center justify-center min-h-screen">

    <!-- Kontainer Profil -->
    <div class="bg-white p-8 rounded-xl shadow-2xl w-full max-w-lg">
        <!-- Judul -->
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Profil User</h1>

        <!-- Informasi Nama -->
        <div class="bg-purple-100 text-purple-900 font-semibold px-4 py-3 rounded-lg mb-4 shadow-sm border border-purple-200">
            <strong>Nama:</strong> {{ $nama }}
        </div>

        <!-- Informasi NPM -->
        <div class="bg-blue-100 text-blue-900 font-semibold px-4 py-3 rounded-lg mb-4 shadow-sm border border-blue-200">
            <strong>NPM:</strong> {{ $npm }}
        </div>

        <!-- Informasi Kelas -->
        <div class="bg-green-100 text-green-900 font-semibold px-4 py-3 rounded-lg mb-4 shadow-sm border border-green-200">
            <strong>Kelas:</strong> {{ $nama_kelas ?? 'Kelas tidak ditemukan' }}
        </div>

    </div>

</body>

</html>
