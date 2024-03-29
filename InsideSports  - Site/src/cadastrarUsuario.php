<?php
    include('config.php');
    Mysql::connectar();
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="shortcut icon" href="../icone/favicon.ico">
        <title>Inside Sports</title>
    </head>
    <body>
        <div class="d-flex flex-column wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom shadow-sm mb-3">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img
                            src="../img/INSIDE_SPORTS_LOGO_VETORIZADO.png"
                            width="40"
                            height="40"
                            class="d-inline-block align-items-center"
                            alt=""
                        >
                        <b>Inside Sports</b>
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target=".navbar-collapse"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav flex-grow-1">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="contact.html">Contato</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="navbarDropdownMenuLink"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    Produtos
                                </a>
                                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-white" href="vestuarioMasculino.html">Roupas Masculinas</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-white" href="vestuarioFeminino.html">Roupas Femininas</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-white" href="tenisMasculinos.html">Tenis Masculino</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-white" href="tenisFeminino.html">Tenis Feminino</a>
                                </div>
                            </li>
                        </ul>
                        <div class="align-self-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="cadastrarUsuario.html" class="nav-link text-white">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.html" class="nav-link text-white">Login</a>
                                </li>
                                <li class="nav-item">
                                    <span class="badge rounded-pill bg-light text-dark position-absolute ms-4 mt-0" titel="0 Produtos no Carrinho">
                                        <small>0</small>
                                    </span>
                                    <a href="cart.html" class="nav-link text-white">
                                        <i class="bi-cart" style="font-size:24px; line-height: 24px;"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <main class="flex-fill">
                    <div class="container">
                        <h1>Informe seus dados, por favor</h1>
                        <hr>
                        <form method="POST" action="../php/cadastroUsuario.php" class="mt-3">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <fieldset class="row gx-3">
                                        <legend>Dados Pessoais</legend>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" id="txtNome" name="fieldNome" placeholder=" " autofocus />
                                            <label for="txtNome">Nome</label>
                                        </div>
                                        <div class="form-floating mb-3 col-md-6 col-xl-4">
                                            <input class="form-control" type="text" id="txtCPF" name="fieldCpf" placeholder=" " />
                                            <label for="txtCPF">CPF</label>
                                        </div>
                                        <div class="form-floating mb-3 col-md-6 col-xl-4">
                                            <input class="form-control" type="date" id="txtDataNascimento" name="fieldNascimento" placeholder=" " />
                                            <label for="txtDataNascimento" class="d-inline d-sm-none d-md-inline d-lg-none">Data
                                                Nascimento</label>
                                            <label for="txtDataNascimento" class="d-none d-sm-inline d-md-none d-lg-inline">Data
                                                de Nascimento</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Contatos</legend>
                                        <div class="form-floating mb-3 col-md-8">
                                            <input class="form-control" type="email" id="txtEmail" name="fieldEmail" placeholder=" " />
                                            <label for="txtEmail">E-mail</label>
                                        </div>
                                        <div class="form-floating mb-3 col-md-6">
                                            <input class="form-control" placeholder=" " type="text" name="fieldTell" id="txtTelefone" />
                                            <label for="txtTelefone">Telefone</label>
                                        </div>
                                    </fieldset>
                                    <fieldset class="row gx-3">
                                        <legend>Senha de Acesso</legend>
                                        <div class="form-floating mb-3 col-lg-6">
                                            <input class="form-control" type="password" id="txtSenha" name="fieldSenha" placeholder=" " />
                                            <label for="txtSenha">Senha</label>
                                        </div>
                                        <div class="form-floating mb-3 col-lg-6">
                                            <input class="form-control" type="password" id="txtConfirmacaoSenha" placeholder=" " />
                                            <label class="form-label" for="txtConfirmacaoSenha">Confirmação da Senha</label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <fieldset class="row gx-3">
                                        <legend>Endereço</legend>
                                        <div class="form-floating mb-3 col-md-6 col-lg-4">
                                            <input class="form-control" type="text" id="txtCEP" placeholder=" " />
                                            <label for="txtCEP">CEP</label>
                                        </div>
                                        <div class="mb-3 col-md-6 col-lg-8 align-self-end">
                                            <textarea class="form-control text-muted bg-light"
                                                style="height: 58px; font-size: 14px;"
                                                disabled>Digite o CEP para buscarmos o endereço.</textarea>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" id="txtRua" placeholder=" " />
                                            <label for="txtReferencia">Rua</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" id="txtBairro" placeholder=" " />
                                            <label for="txtReferencia">Bairo</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" id="txtCidade" placeholder=" " />
                                            <label for="txtReferencia">Cidade</label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-floating mb-3 col-md-4">
                                            <input class="form-control" type="text" id="txtNumero" placeholder=" " />
                                            <label for="txtNumero">Número</label>
                                        </div>
                                        <div class="form-floating mb-3 col-md-8">
                                            <input class="form-control" type="text" id="txtComplemento" placeholder=" " />
                                            <label for="txtComplemento">Complemento</label>
                                        </div>
                                        <div class="form-floating mb-3 mt-3">
                                            <input class="form-control" type="text" id="txtObsevacao" placeholder=" " />
                                            <label for="txtReferencia">Observacao Ex: Deixar com a vizinha ao lado</label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <hr />
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Desejo receber informações sobre promoções.
                                </label>
                            </div>
                            <div class="mb-3 text-left">
                                <a class="btn btn-lg btn-light btn-outline-danger" href="/">Cancelar</a>
                                <input type="button" class="btn btn-lg btn-Amarelo" value="Cadastrar"
                                    onclick="window.location.href='confirmaCadastro.html'"/>
                            </div>
                        </form>
                    </div>
                </main>
                <footer class="border-top text-muted">
                    <div class="bg-dark">
                        <div class="container">
                            <h6 class="text-Amarelo text-center pt-2">Formas de Pagamento</h6>
                            <div class="row py-4 d-flex aling-items-center">
                                <div class="col-md-12 text-center">
                                    <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-american-express.svg" class="mr-4" width="50px">
                                    <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-amex.svg" class="mr-4" width="50px">
                                    <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-aura.svg" class="mr-4" width="50px">
                                    <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-banco-brasil.svg" class="mr-4" width="50px">
                                    <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-banco-do-brasil.svg" class="mr-4" width="50px">
                                    <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-bndes-1.svg" class="mr-4" width="50px">
                                    <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-bndes.svg" class="mr-4" width="50px">
                                    <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-boleto.svg" class="mr-4" width="50px">
                                    <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-bradesco.svg" class="mr-4" width="50px">
                                    <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-caixa-economica-federal.svg" class="mr-4" width="50px">
                                    <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-caixa-economica.svg" class="mr-4" width="50px">
                                    <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-cielo.svg" class="mr-4" width="50px">
                                    <hr class="text-Amarelo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row py-3">
                            <div class="col-12 col-md-4 text-center">
                                &copy; 2022 - Inside Sports Ltda ME
                                <br>
                                Rua Olegario Maciel, 221, Patos de Minas - MG
                                <br>
                                CNPJ 12.345.678/0001-21
                            </div>
                            <div class="col-12 col-md-4 text-center">
                                <a href="politicasPrivacidade.html" class="text-decoration-none text-dark">Politicas de Privacidade</a>
                                <br>
                                <a href="termosUso.html" class="text-decoration-none text-dark">Termos de Uso</a>
                                <br>
                                <a href="aboutInsideSports.html" class="text-decoration-none text-dark">Quem Somos</a>
                                <br>
                                <a href="trocasDevloucoes.html" class="text-decoration-none text-dark">Trocas e Devolucoes</a>
                            </div>
                            <div class="col-12 col-md-4 text-center">
                                <a href="contact.html" class="text-decoration-none text-dark">Contato pelo Site</a>
                                <br>
                                Email:
                                <a href="mailto:insideSports@gmail.com" class="text-decoration-none text-dark">insidesportsoficial@gmail.com</a>
                                <br>
                                Telefone:
                                <a href="phone:34999208912" class="text-decoration-none text-dark">(34) 9 9920-8912</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <script src="../javascript/index.js" charset="utf-8"></script>
            <script src="../javascript/jqueryIndex.js" charset="utf-8"></script>
        </body>
    </html>
