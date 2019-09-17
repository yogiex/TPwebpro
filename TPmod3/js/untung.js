calculate = function() {
    var resources = document.getElementById('a1_0030').value;
    var minutes = document.getElementById('a2_0030').value;
    var keuntungan = document.getElementById('a3_0030').value;
    $("button.btn_0030").click(function() {
        document.getElementById('a3_0030').value = parseInt(minutes) - parseInt(resources);
        document.getElementById('a4_0030').value = document.getElementById('a3_0030').value / parseInt(resources) * 100;
    });
}