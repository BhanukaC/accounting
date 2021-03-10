function calvalue() {
    var qty = document.getElementById("qty").value;
    var unit_price = document.getElementById("unit_price").value;
    var v = document.getElementById("value");
    v.value = eval(qty * unit_price);
}

function caltot() {
    var v = document.getElementById("value").value;
    var discount = document.getElementById("t_discount").value;
    var tot = document.getElementById("final");

    tot.value = eval(((100 - discount) / 100) * v);
}