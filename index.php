<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Formulário de Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="box">
        <form action="cadastrar.php" method="post" class="formulario">
          <div class="usNome">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required />
          </div>
          <div class="usEmail">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required />
          </div>
          <div class="usSenha">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required />
            <div class="button">
              <input type="submit" name="submit" id="submit" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
