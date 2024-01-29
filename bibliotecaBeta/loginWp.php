<!DOCTYPE html>
<html>
<head>
  <title>Livros Online - Login</title>
  <link rel="stylesheet" type="text/css" href="styleLogin.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="livros.php">Livros</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
    </nav>
  </header>

  <section class="login-form">
    <h2>Login - Painel de Controle</h2>
    <form>
      <label for="nome">Nome de usuário:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>

      <button type="submit" class="btn">Entrar</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2023 Livros Online. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
