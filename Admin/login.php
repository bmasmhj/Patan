<?php 
    session_start();
    if(isset($_SESSION['admin_id'])){
        header('location:Dashboard');
    }else{
        if(isset($_GET['username']) && isset($_GET['password'])){
            if($_GET['username'] == 'admin' && $_GET['password'] == 'admin'){
                $_SESSION['admin_id'] = 'admin';
                header('location:Dashboard');
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="shortcut icon" href="https://api.bimash.com.np/patan/docs/logo.png">

</head>
<body>
    if you need good login ui make it yourself
    <br>
    and you can't logout too if you want to logout clear cache from setting
    <br>
    <input type="text" id='username'>
    <br>
    <input type="password" id='pw'>
    <br>
    <button onclick='login()' id='login'>Login</button>

</body>


<script>
    function login(){
    alert()
    const user = document.getElementById('username').value;
    const pw = document.getElementById('pw').value;
    if( user == 'admin' && pw == 'admin'){
        window.location.href = 'login.php?username=admin&password=admin';
    }else{
        alert('wrong username or password')
    }
    }
</script>



</html>