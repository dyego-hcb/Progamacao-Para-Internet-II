<?php
require 'config.php';
$nome = filter_input(INPUT_POST, 'fieldNome');
$cpf = filter_input(INPUT_POST, 'fieldCpf');
$dataNas = filter_input(INPUT_POST, 'fieldNascimento');
$email = filter_input(INPUT_POST, 'fieldEmail', FILTER_VALIDADE_EMAIL);
$telefone = filter_input(INPUT_POST, 'fieldTell');
$senha = filter_input(INPUT_POST, 'fieldSenha');

$sql = $conn->prepare("INSERT INTO Usuario
(`email`,
`senha`,
`nomeUsuario`,
`cpfUsuario`,
`dataNascimento`,
`telefoneContato`)
VALUES
(:email,
 :senha,
 :nome,
 :cpf,
 :dataNas,
 :telefone
);");

$sql = $conn->prepare('SELECT * FROM Usuario WHERE email = :email');
$sql->bindValue(':email', $email);
$sql->execute();

if($email && $senha && $telefone && $cpf && $nome && $dataNas)
{
  if($sql->rowCount() === 0)
{
  $sql = $conn->prepare("INSERT INTO Usuario
  (`email`,
  `senha`,
  `nomeUsuario`,
  `cpfUsuario`,
  `dataNascimento`,
  `telefoneContato`)
  VALUES
  (:email,
   :senha,
   :nome,
   :cpf,
   :dataNas,
   :telefone
  );");
  header("Location: ../src/login/html");
  exit;
}
else
{
  header("Location: ../src/cadastrarUsuario.html");
}
}
else
{
  header("Location: ../src/cadastrarUsuario.html");
  exit;
}
?>
