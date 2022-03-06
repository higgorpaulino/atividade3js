<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formulário de Contato</title>
        <meta charset="utf-8">
        <meta name="author" content="Higgor S Paulino">
        <meta name="description" content="Formulário para contato da empresa XPTO.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script type="text/javascript" src="script.js"></script>
    </head>

    <body>
        <div class="container mx-auto bg-light mt-1 w-90">
            <header class="row">
                <!-- OK - oculte a barra de acessibilidade -->
                <div id="barra_acessibilidade" class="d-none">
                    <ul id="atalhos">
                        <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
                        <li><a href="#formulario" accesskey="2">Ir para formulário [2]</a></li>
                    </ul>   
                </div>  

                <!-- OK - faça com que as duas divs a seguir sejam exibidas lado a lado quando o viewport for maior ou igual a 576px sendo que a primeira deve ocupar 3/12 e a segunda 9/12 consulte: https://getbootstrap.com.br/docs/4.1/layout/grid/ -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">   
                            <img src="logo.jpg" alt="Logotipo da empresa com oito retângulos sobrepostos.">
                        </div>
                        <div class="col-sm-9">
                            <h1>Empresa XPTO</h1>
                        </div>
                    </div>
                </div>
            </header>

            <section class="row">
                <div class="col-12">
                    <!-- OK - oculte o header abaixo 
                    consulte https://getbootstrap.com.br/docs/4.1/utilities/display/ -->
                    <h2 id="menu" class="d-none">Menu</h2>
                </div>
                <nav class="navbar navbar-expand-sm col-12 navbar-light bg-light">
                    <!-- OK - torne o menu responsivo, conforme o exemplo
                    consulte https://getbootstrap.com.br/docs/4.1/components/navbar/ -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                        <img src="botao.png" width="30" height="30" alt="Ícone de menu">
                    </button>
                    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contato</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <article class="col-12">  
                    <h2 id="formulario">Formulário de Contato</h2>
                    <!-- Ok - torne o formulário responsivo, conforme o exemplo consulte https://getbootstrap.com.br/docs/4.1/components/forms/ -->  
                    <form action="#" method="post" id="formulario" name="formulario">
                        <fieldset><legend class="d-none">Dados Pessoais</legend>
                            <div class="form-group row">
                                <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="nome" placeholder="Digite seu nome">
                                </div>
                            </div>
                            <div class="row d-none" id="erro-nome">
                                <div class="col-sm-2"></div>
                                <p class="text-danger col">Campo nome obrigatório</p>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label col-form-label-sm">E-mail</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="email" placeholder="Digite seu email">
                                </div>
                            </div>
                            <div class="row d-none" id="erro-email">
                                <div class="col-sm-2"></div>
                                <p class="text-danger col">Campo e-mail obrigatório</p>
                            </div>
                        </fieldset>
                        <fieldset><legend class="d-none">Mensagem a Enviar</legend>
                            <div class="form-group row">
                                <label for="mensagem" class="col-sm-2 col-form-label col-form-label-sm">Mensagem</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control form-control-sm" id="mensagem" placeholder="Digite sua mensagem"></textarea>
                                </div>
                            </div>
                            <div class="row d-none" id="erro-mensagem">
                                <div class="col-sm-2"></div>
                                <p class="text-danger col">Campo mensagem obrigatório</p>
                            </div>
                            <div class="form-group row">
                                <label for="mensagem" class="col-sm-2 col-form-label col-form-label-sm"></label>
                                <div class="col-sm-10">
                                    <button type="button" onclick="validar()" class="btn btn-primary my-1" class="botao">Enviar</button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mensagem" class="col-sm-2 col-form-label col-form-label-sm"></label>
                                <div class="col-sm-10 text-muted">
                                    <label>* Campos obrigatórios.</label>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </article>
            </section>

            <footer class="row">
                <div class="col-12">
                    <p>Copyright © 2022</p>
                </div>
            </footer>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <noscript>Atualize seu navegador</noscript>

    </body>

</html>