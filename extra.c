<script>
  const data = null;

  const xhr = new XMLHttpRequest();
  xhr.withCredentials = true;

  xhr.addEventListener('readystatechange', function () {
    if (this.readyState === this.DONE) {
      document.getElementById("Affirm").innerHTML 
= this.responseText;
    }
  });

  xhr.open('GET', 'https://positivity-tips.p.rapidapi.com/api/positivity/affirmation');
  xhr.setRequestHeader('X-RapidAPI-Key', '6658814679msh10d39f30de28b22p18a787jsn8934f5e9e73f');
  xhr.setRequestHeader('X-RapidAPI-Host', 'positivity-tips.p.rapidapi.com');

  xhr.send(data);

</script>