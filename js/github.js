const apiUrl = 'https://api.github.com/users/BlasPiris/repos';
fetch(apiUrl)
  .then(response => response.json())
  .then(data => {
    //const reposList = document.getElementById('repos-list'); // Cambia esto al ID de tu elemento HTML donde deseas mostrar la lista
    data.forEach(repo => {
        //console.log(repo);
        console.log(repo.html_url);
        console.log(repo.name);
        console.log(repo.language);
      //const repoLink = document.createElement('a');
    //   repoLink.href = repo.html_url;
    //   repoLink.textContent = repo.name;
      //reposList.appendChild(repoLink);
    });
  });