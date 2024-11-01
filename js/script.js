$(document).ready(function() {
    $("#keyword").on("keyup", function() {
        $("#container").load("./../search/Category.php?cari=" + $("#keyword").val());
    })
}) 
