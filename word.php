<?php
  $input = $_POST["input"];
print("<p>Subject: $input</p>");

?>

<html>
  <body>
    <script>
    const data = null;

    const xhr = new XMLHttpRequest();
    xhr.withCredentials = true;

    xhr.addEventListener('readystatechange', function () {
      if (this.readyState === this.DONE) {
        console.log(this.responseText);
      }
    });

    xhr.open('GET', 'https://linguatools-sentence-generating.p.rapidapi.com/realise?object=thief&subject=police&verb=arrest');
    xhr.setRequestHeader('X-RapidAPI-Key', '7d84757a59msh7153d9aa370df54p1e8607jsnad4958dc694d');
    xhr.setRequestHeader('X-RapidAPI-Host', 'linguatools-sentence-generating.p.rapidapi.com');

    xhr.send(data);
  </script>
  </body>
</html>