/**
 * Created by jordanbeziau on 09/08/2017.
 */
document.addEventListener("DOMContentLoaded", function() {

  const target = document.getElementById("alert");
  setTimeout(function() {
    target.parentElement.removeChild(target);
  }, 8000);

});

