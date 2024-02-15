<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 1em 0;
}

nav {
  background-color: #444;
  color: #fff;
  padding: 0.5em;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline;
  margin-right: 10px;
}

main {
  padding: 20px;
}

footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 1em 0;
  position: fixed;
  bottom: 0;
  width: 100%;
}

</style>
  <title>Красивий сайт на PHP</title>
</head>
<body>
  <header>
    <h1>Ласкаво просимо на наш сайт!</h1>
  </header>

  <nav>
    <ul>
      <li><a href="index.php">Головна</a></li>
      <li><a href="about.php">Про нас</a></li>
      <li><a href="contact.php">Контакти</a></li>
    </ul>
  </nav>

  <main>
    <section>
      <h2>Останні новини</h2>
      <?php
      function getLatestNews() {
          return [
              ['title' => 'Новина 1', 'content' => 'Зміст новини 1'],
              ['title' => 'Новина 2', 'content' => 'Зміст новини 2'],
              ['title' => 'Новина 3', 'content' => 'Зміст новини 3'],
          ];
      }

      $latestNews = getLatestNews();

      foreach ($latestNews as $news) {
          echo "<article>";
          echo "<h3>{$news['title']}</h3>";
          echo "<p>{$news['content']}</p>";
          echo "</article>";
      }
      ?>
    </section>

    <section>
      <h2>Популярні статті</h2>
      <?php
      function getPopularArticles() {
          return [
              ['title' => 'Стаття 1', 'content' => 'Зміст статті 1'],
              ['title' => 'Стаття 2', 'content' => 'Зміст статті 2'],
              ['title' => 'Стаття 3', 'content' => 'Зміст статті 3'],
          ];
      }

      $popularArticles = getPopularArticles();

      foreach ($popularArticles as $article) {
          echo "<article>";
          echo "<h3>{$article['title']}</h3>";
          echo "<p>{$article['content']}</p>";
          echo "</article>";
      }
      ?>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 Красивий сайт на PHP</p>
  </footer>
</body>
</html>
