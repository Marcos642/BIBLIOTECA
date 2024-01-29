<!DOCTYPE html>
<html>
<head>
  <title>Livros Online - Contato</title>
  <link rel="stylesheet" type="text/css" href="styleContato.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="livros.php">Livros</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
    </nav>
  </header>

  <section class="contact-form">
    <h2>Entre em contato conosco</h2>
    <form>
      <label for="name">Nome:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Mensagem:</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit" class="btn">Enviar</button>
    </form>

    <div class="contact-buttons">
      <a href="https://api.whatsapp.com/send?phone=SEU_NUMERO_DO_WHATSAPP" target="_blank" class="whatsapp-btn">
        <img src="whatsapp-icon.png" alt="WhatsApp">
        WhatsApp
      </a>
      <a href="mailto:SEU_EMAIL@gmail.com" class="gmail-btn">
        <img src="gmail-icon.png" alt="Gmail">
        Gmail
      </a>
    </div>
  </section>

  <footer>
    <p>&copy; 2023 Livros Online. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
