$('a').on('click', event => {
  $.ajax({
    cache : false,
    url : "json/data.json",
    dataType : "json"
  }).done(r => {
    $('section')
      .html('')
      .append(`<h3>${ r.titre }</h3>`)
      .append(`<p>${ r.description }</p>`)
  })

  event.preventDefault()
})
