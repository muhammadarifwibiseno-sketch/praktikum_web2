sintaks.blade.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaks dasar blade </title>
</head>
<body>
    <p>Selamat datang {{ $nama }}</p>
    <p>Alamat: {{ $alamat }}</p>
    <p>ID User: {{ $idUser }}</p>

    <a href="{{ url('/home') }}">Home</a>
    <a href="{{ url('/home') }}">Beranda</a>

    <br>

    -- isset digunakan untuk mengecek apakah sebuah variabel sudah di set atau belum, jika sudah maka akan menampilkan isi dari variabel tersebut, jika belum maka tidak akan menampilkan apa-apa --
    @isset($nilai)
    <b>nilai tersedia</b>
    @endisset

    -- if --
    @if ($nilai >= 80)
        <b>Nilai A</b>  
    @elseif ($nilai >= 70)  
        <b>Nilai B </b>
    @else 
    <b>Nilai anda tidak terdeteksi</b>
    @endif


    {{-- --switch case--
    @switch($type)
        @case(1)
            <p>ooooo</p>
            @break
        @case(2)
            <p>ppppp</p>
            @break
        @default
            
    @endswitch --}}

    -- looping --
    <p><b>Looping</b></p>
    @for ($i = 0; $i < 5; $i++)
        <p>Perulangan ke {{ $i }}</p>
    @endfor

    menampilkan data
    -- @foreach ($buah as $b)
        <li>{{$b}}</li>
    @endforeach

    


</body>
</html>