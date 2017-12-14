$.get('server/getMarques.php',  r => {
  $.each(r, (i, item) => {
    $('select').append(`<option value="${ item.marque }">${ item.marque }</option>`)
  })
  $('select').on('change', e => {
    $.post('server/getMobiles.php', { marque : $(e.target).val() }, r => {
      let result = ''
      $.each(r, (i, item) => {
        result += `<li>${ item.produit }</li>`
      })
      $('ul').html(result)
    }, 'json')
  })
  $('select').trigger('change')
}, 'json')
