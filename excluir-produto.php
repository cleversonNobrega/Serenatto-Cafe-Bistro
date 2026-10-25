<?php

require "src/conexao-db.php";
require "src/Modelo/produto.php";
require "src/Repositorio/produtoRepositorio.php";

$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtoRepositorio->deletar($_GET['id']);
