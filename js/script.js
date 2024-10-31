$(document).ready(function() {
    $("#keyword").on("keyup", function() {
        console.log($("#keyword"))
        $("#container").load("./../search/Category.php?cari=" + $("#keyword").val());
    })
}) 