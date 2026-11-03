
<!-- -------------------1---------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./same.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,thead,tr{
            border: 2px solid black;
        }
        
    </style>
</head>
<header class="ch-head p-1">
    <img src="redragon.png" width="130px" height="90px" alt="redragon">
    </header>
    <hr  style="color:#8b8989;">
    <main>
    <h1>ADMIN LOGIN</h1>
    <div>
        <form  action="AdminLoginProcess.php" method="post">
            <label for="user1">Username</label>
            <br>
            <br>
            <input type="text"  class="form-control" id="user1" name="user1" placeholder="Enter Username here.">
            <br>
            <br>
            <label for="password1">Password</label>
            <br>
            <br>
            <input type="password"  class="form-control" id="password1" name="password1" placeholder="Enter Password here.">
            <br>
            <br>
            <button type="submit" class="btn btn-danger con4">Submit</button>
        </form>
    </div>
    </main>
    <footer class='f'>
        <p>ALL RIGHTS RESERVED.</p>
    </footer>


</html>