<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In 'n Out</title>
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>

    <form class="form-login"  method="post">
        <div class='login-card card'>
            <div class="card-header">
                <i class="icofont-travelling mr-2"></i>
                <span class="font-weight-light">in</span>
                <span class="font-weight-bold m-1">N'</span>
                <span class="font-weight-light">Out</span>
                
            </div>
            <div class="card-body">
                <?php 
                  include(TEMPLATE_PATH . '/messages.php')  
                ?>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id='email' value='<?= $email?>' name='email' type="email" class="form-control" placeholder="Digite o email" autofocus='true'>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input id='password' name='password' type="password" class="form-control" placeholder="Digite sua senha">
                </div>
            </div>
            <div class="card-footer">
            <button type="submit" class='btn btn-lg btn-primary'>entrar</button>
        </div>
        </div>

    </form>

</body>

</html>