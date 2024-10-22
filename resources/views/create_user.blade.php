<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-purple-200 via-pink-200 to-blue-200 flex items-center justify-center min-h-screen">

    <!-- Container utama dengan shadow yang lebih tegas dan elemen visual yang diperbarui -->
    <div class="bg-white p-8 rounded-xl shadow-2xl w-full max-w-lg">
        <!-- Heading form -->
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Profile Form</h1>

        <!-- Form dimodifikasi dengan elemen visual lebih modern -->
        <form action="{{ route('user.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Nama -->
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama:</label>
                <input type="text" name="nama" id="nama" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-md focus:ring-purple-500 focus:border-purple-500 transition ease-in-out duration-150" placeholder="Masukkan nama Anda">
            </div>

            <!-- NPM -->
            <div>
                <label for="npm" class="block text-sm font-medium text-gray-700 mb-1">NPM:</label>
                <input type="text" name="npm" id="npm" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-md focus:ring-purple-500 focus:border-purple-500 transition ease-in-out duration-150" placeholder="Masukkan NPM Anda">
            </div>

            <!-- Kelas -->
            <div>
                <label for="kelas_id" class="block text-sm font-medium text-gray-700 mb-1">Kelas:</label>
                <select name="kelas_id" id="kelas_id" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-md focus:ring-purple-500 focus:border-purple-500 transition ease-in-out duration-150">
                    @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="w-full bg-gradient-to-r from-indigo-500 to-purple-600 text-white p-3 rounded-lg font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-200">
                    Submit
                </button>
            </div>
        </form>
    </div>

</body>

</html>
