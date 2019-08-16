<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gestão Escolar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .jumbotron {
    padding-top: 1%;
    padding-bottom: 0%;
    background-color: #ffffff;
  }
  .display-3 {
    font-size: 2.5rem;
    font-weight: 300;
    line-height: 1.2;
  }

  </style>
</head>
<body>

<div class="jumbotron jumbotron-fluid text-center mb-0" style="margin-bottom:0">
    <div class="container padding-top: 60px">
      <h1 class="display-3 ">Gestão Escolar</h1>
      <p>São Leopoldo<p>
    </div>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="/">Página Inicial</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('site.alunos') }}">Alunos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('site.turmas') }}">Turmas</a>
      </li>    
    </ul>
  </div>  
</nav>