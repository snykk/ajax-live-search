var search = document.getElementById("search");

search.addEventListener("keyup", function () {
  $.get("./data2.php?search=" + search.value, function (response) {
    $("#data").html("");
    if (response.length == 0) {
      $("#data").html("<tr style='text-align:center'><td colspan='5'>data not found</td></tr>");
    } else {
      var inc = 1;
      for (var i = 0; i < response.length; ++i) {
        $("#data").append("<tr><td>" + inc++ + "</td>" + "<td>" + response[i]["nama"] + "</td>" + "<td>" + response[i]["nim"] + "</td>" + "<td>" + response[i]["email"] + "</td>" + "<td>" + response[i]["jurusan"] + "</td></tr>");
      }
    }
  });
});
