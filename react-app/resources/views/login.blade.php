<html>
    <head>
        <title>Login Page</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
<body>
    <center><br><br><br><br><br><br><br>
        <form method="POST" action="/dashboard">
            @csrf
            <h3>Login Form</h3><br>
            <label for="Login">Username: </label>
            <input type="text" id="username" name="admin" required /><br><br>
            <label for="Login">Password: </label>
            <input type="password" id="password" name="admin" required />
            <br><br><button type="submit" name="submit_button" value="LOGIN">LOGIN </button>
        </form>



    </center>
</body>


</html>
