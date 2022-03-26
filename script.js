var search = document.getElementById("search");
var data = document.getElementById("data");

// instansiasi objek ajax
var objAjax = new XMLHttpRequest();

search.addEventListener("keyup", function () {
  // cek kesiapa ajax
  objAjax.onreadystatechange = function () {
    if (objAjax.readyState == 4 && objAjax.status == 200) {
      data.innerHTML = objAjax.responseText;
    }
  };

  objAjax.open("get", "./data.php?search=" + search.value, true);
  objAjax.send();
});
