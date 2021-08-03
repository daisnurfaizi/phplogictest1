var base_url = window.location.origin+window.location.pathname;
var input = document.getElementById("Name").value;
var table =  $('#ShowData').DataTable();

$(document).on('submit','#userForm',function(e){
    e.preventDefault();
    $.ajax({
    method:"POST",
    url: base_url + 'src/FormView.php',
    data:$(this).serialize(),
    dataType: "json",
    success: function(data){
    console.log(data.nama)
    $('#userForm').find('input').val('')
    table.row.add([
        data.nama,
        data.umur,
        data.kota,
    ]).draw(false)
    // $('#listdatainput').append(`<tr>
    //                 <td>${data.nama}</td>
    //                 <td>${data.umur}</td>
    //                 <td>${data.kota}</td>
    //                 </tr>`)
}});
});
// document.getElementById("submit").addEventListener('click',(ev)=>{
//     ev.preventDefault();
//     console.log(base_url+'src/FormView/')
//     console.log(input)
//     $.ajax({
//         type: "POST",
//         url: base_url + 'src/FormView/',
//         data: {
//             name: input,
//         },
//         dataType: "json",
//     }).done(function(data) {
//         console.log(data)
//     })
// })
