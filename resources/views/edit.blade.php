<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>

    <h1>Edit</h1>
    <a href="{{route('mahasiswa')}}">Kembali</a>

    <div style="padding-top: 50px;">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('mahasiswa.update', $mhs->id) }}" method="post">
            @method('put')
            @csrf
            <div>
                <input type="text" name="nama" value="{{$mhs->nama}}" placeholder="Nama" required>
            </div>
            <br>
            <div>
                <input type="text" name="nim" value="{{$mhs->nim}}" placeholder="Nim" required>
            </div>
            <br>
            <div>
                <input type="text" name="no_hp" value="{{$mhs->no_hp}}" placeholder="No Hp" required>
            </div>
            <br>
            <div>
                <input type="text" name="alamat" value="{{$mhs->alamat}}" placeholder="Alamat" required>
            </div>
            <br>
            <div>
                <button type="submit">Save</button>
            </div>
        </form>
    </div>

</body>
</html>
