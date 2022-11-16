// var search = document.getElementById("search");

// search.addEventListener("keyup", function () {
$("#search").on("keyup", function () {
  $.ajax({
    url: "data2.php",
    data: { search: $("#search").val() },
    method: "get",
    dataType: "json",
    success: function (response) {
      $("#data").html("");
      if (response.length == 0) {
        $("#data").html("<tr style='text-align:center'><td colspan='5'>data not found</td></tr>");
      } else {
        var inc = 1;
        for (var i = 0; i < response.length; ++i) {
          $("#data").append("<tr><td>" + inc++ + "</td>" + "<td>" + response[i]["nama"] + "</td>" + "<td>" + response[i]["nim"] + "</td>" + "<td>" + response[i]["email"] + "</td>" + "<td>" + response[i]["jurusan"] + "</td></tr>");
        }
      }
    },
  });
});
