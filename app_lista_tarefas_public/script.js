
$(".close").click(()=>{
    $(".alert").alert('close')
});


$(function () { 
    var duration = 2000; // 4 seconds
    setTimeout(function () { $(".alert").alert('close') }, duration);
});


$("#editar").click(()=>{
    $("#editar-text").submit();
});