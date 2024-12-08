<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hos Geldiniz</h1>

    <form method="POST" action="{{route('iletisim.post')}}">
        @csrf /* #bi form ile ugrasiyorsan bunu kullanman lazim */
        <label for="">Ad-Soyad</label>
        <br>
        <input type="text" name="name" >
        <br>
        <label for="">E-mail</label>
        <br>
        <input type="mail" name="mail">
        <br>
        <label for="">İletisim Nedeni</label>
        <br>
        <select name="secenek1" id="">
            
            <option value=""></option>
            <br>
            <option value="">is</option>
            <br>
            <option value=""> destek</option>
            <br>
            <option value="">ozel</option>
        </select>
        <br>
        <label for="">Mesajiniz</label>
        <br>
        <textarea name="mesaj1" id="" cols="30" rows="3" name="message"></textarea>
        <br>
        <button type="submit">Gonder</button>

    </form>
</body>
</html>