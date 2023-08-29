<html>
    <head>
        <title>Age Verifier</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
<body>
    <center><br><br><br><br><br><br><br>
        <form method="POST" action="/age">
            @csrf
            <h3>Election Age Verifier</h3><br>
            <label for="inputName">Enter your Age: </label>
            <input type="number" id="inputName" name="inputAge" min="1" max="100" required /><br>
            <br><br><button type="submit"> Check Age</button>
        </form>

        <br>
        @if($age >= 18)
            <h1>Age: {{$age}}</h3>
            <h3>You are eligible to vote!</h3>
        @elseif($age >=15 && $age<=17)
        <h1>Age: {{$age}}</h3>
            <h3>Eligible to vote in SK Election!</h3>
        @elseif($age >=1 && $age <=14)
        <h1>Age: {{$age}}</h3>
            <h3>You are not eligible to vote</h3>
        @else
            <h3>Put a Number First</h3>
        @endif

    </center>
</body>


</html>
