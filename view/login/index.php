<?php
    include(_ROOT_PATH_."/view/componentes/header.php");
?>
    <link href="<?= _HTTP_LIB_PATH_ ?>css/custom/signin.css" rel="stylesheet">
    </head>
    <body>
        <main class="form-signin">
            <form>
                <img class="mb-4" src="<?= _HTTP_LIB_PATH_ ?>/img/metflix.jpg" alt="" >
                <h1 class="h3 mb-3 fw-normal text-light">Entrar</h1>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="Email ou número de telefone">
                    <label for="floatingInput">Email ou número de telefone</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
                    <label for="floatingPassword">senha</label>
                </div>

                <div class="checkbox mb-3">
                    <label class="text-light">
                        <input type="checkbox" value="remember-me"> Lembrar-se de mim
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-danger" type="submit">Entrar</button>
                <p class="mt-5 mb-3 text-muted text-light">Novo por aqui? <a href="#" class="text-light text-decoration-none">Assine Agora</a></p>
            </form>
        </main>

    <?php
        include(_ROOT_PATH_."/view/componentes/scripts.php");
    ?>
    </body>
</html>