<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <a  href="{{route('pymes.index')}}" type="submit" name="btnPymes" id="btnPymes" class="btn btn-outline-primary">Ayuda T Pymes</a>
        <br><br>
        <a  href="{{route('ayudat.index')}}" type="submit" name="btnAyudaT" id="btnAyudaT" class="btn btn-outline-primary">Ayuda T</a>
        <br><br>
        <a href="{{route('edase.index')}}" type="submit" name="btnEdase" id="btnEdase" class="btn btn-outline-primary">Edase</a>
    </form>
</body>
</html>
