<!-- Tugas 1 IF3110 Pengembangan Aplikasi Berbasis Web
Membuat website seperti Stack Exchange
Author: Irene Wiliudarsan (13513002) -->
<!-- File: index.html -->

<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <meta charset="utf-8"/>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
  </head>
  <body>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "simple_stackexchange";
      $connection = new mysqli($servername, $username, $password, $dbname); // Create connection
      if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
      }
    ?>
    <!-- Title -->
    <div class="title">
      Simple StackExchange
    </div>

    <div class="content">
      <!-- Search Bar -->
      <div class="stacked" id="search-section">
        <input id="search-box" name="search-box" type="text">
        <button class="button" type="button">
          Search
        </button>
        <br>
        Cannot find what you are looking for? 
        <a class="yellow" href="ask-question.html">
          Ask here
        </a>
      </div>

      <!-- Recently Asked Questions -->
      <div class="stacked">
        <div class="subtitle">
          Recently Asked Questions
        </div>
        <div class="questions-list">
          <div class="same-height-row border-bottom">
            <div class="vote-number">
              0
              <br>
              Votes
            </div>
            <div class="answer-number">
              0
              <br>
              Answers
            </div>
            <div class="right-position">
              <div class="answer-question-detail">
                <div class="question-topic">
                  The question topic goes here
                </div>
                <div class="question-content">
                  The question content goes here
                  The question topic goes hereThe question topic goes hereThe question topic goes hereThe question topic goes hereThe question topic goes hereThe question topic goes hereThe question topic goes hereThe question topic goes hereThe question topic goes hereThe question topic goes here
                </div>
              </div>
              asked by
              <span class="blue">
                name
              </span>
              |
              <a class="yellow" href="">
                edit
              </a>
              |
              <a class="red" href="index.html" onclick="deleteConfirmation()">
                delete
              </a>
            </div>
          </div>
          <div class="same-height-row border-bottom">
            <div class="vote-number">
              0
              <br>
              Votes
            </div>
            <div class="answer-number">
              0
              <br>
              Answers
            </div>
            <div class="right-position">
              <div class="answer-question-detail">
                <div class="question-topic">
                  The question topic goes here
                </div>
                <div class="question-content">
                  The question content goes hereThe question topic goes hereThe question topic goes hereThe question topic goes hereThe question topic goes hereThe question topic goes hereThe question topic goes hereThe question topic goes hereThe question topic goes hereThe question topic goes hereThe question topic goes here
                </div>
              </div>
              asked by
              <span class="blue">
                name
              </span>
              |
              <a class="yellow" href="">
                edit
              </a>
              |
              <a class="red" href="index.html" onclick="deleteConfirmation()">
                delete
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript -->
    <script src="../js/script.js"></script>
  </body>
</html>