<!DOCTYPE html>
<html>
<head>
    <title>Importar Vehículos desde Excel</title>
</head>
<body>

    @if(session('mensaje'))
        <p>{{ session('mensaje') }}</p>
    @endif

    <form action="{{ route('importar-vehiculos') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="archivo" required>
        <button type="submit">Importar</button>
    </form>

</body>
</html>
