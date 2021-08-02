var base_url = window.location.origin;
document.getElementById("submit").addEventListener('click',(ev)=>{
    ev.preventDefault();
})
$.ajax({
    type: "POST",
    url: base_url + '/inventory/public/DeliveryOrder/getProdukKonverssi/',
    data: {
        namaSuplier: namaSuplier,
        namabarang: namabarang
    },
    dataType: "json",
}).done(function(data) {
    console.log(data)
})