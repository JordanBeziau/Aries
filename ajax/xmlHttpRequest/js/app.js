const lien = document.querySelector('a'),
  section = document.querySelector('section')

let data, xhr

  lien.addEventListener('click', (event) => {
    // Adresse du programme à traiter
    const url = `json/data.json?t=${new Date().getTime()}`
    // Objet Ajax
    xhr = new XMLHttpRequest()
    console.log(xhr);
    // Connexion avec le programme
    xhr.open('get', url, true)
    xhr.setRequestHeader('Access-Control-Allow-Credentials', true)
    // Type de réponse renvoyer par le serveur
    xhr.responseType = 'json'
    // On déclare une fonction callback
    xhr.onreadystatechange = callback
    // On envoie la requête
    xhr.send(null)

    event.preventDefault()
  })

  function callback() {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        const rep = xhr.response
        section.innerHTML = `<p>${ rep.titre }</p><p>${ rep.description }</p>`
      } else {
        section.innerHTML = 'Problème'
      }
    }
  }
