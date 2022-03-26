var search = document.getElementById("search");

search.addEventListener("keyup", function () {
  $.get("./data2.php?search=" + search.value, function (response) {
    $("#data").html("");
    if (response.length == 0) {
      $("#data").html("<tr><td>" + "data tidak ditemukan" + "</td>" + "<td>" + "data tidak ditemukan" + "</td>" + "<td>" + "data tidak ditemukan" + "</td>" + "<td>" + "data tidak ditemukan" + "</td></tr>");
    } else {
      for (var i = 0; i < response.length; i++) {
        $("#data").append("<tr><td>" + response[i]["nama"] + "</td>" + "<td>" + response[i]["nim"] + "</td>" + "<td>" + response[i]["email"] + "</td>" + "<td>" + response[i]["jurusan"] + "</td></tr>");
      }
    }
  });
});
