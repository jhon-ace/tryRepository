<html>
    <head>
        <title>Name</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
<body>
    <center><br><br><br><br><br><br><br>
        <form method="POST" action="/inputName">
            @csrf
            <label for="inputName">Enter Name: </label>
            <input type="text" id="inputName" name="inputName" required /><br>
            <br><br><input type="submit" name="submit" />
        </form>

        <br>
            <p style="color:red;">{{$name}}</p>
    </center>
</body>


</html>
