

$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});



$('#savep').submit(function() {
    var content = document.getElementById("htmlarea").value;
    var csscontent = document.getElementById("cssarea").value;
    var label = document.getElementById("nameproject").value;

    document.cookie = "content="+encodeURIComponent(content);
    document.cookie = "nameproject="+encodeURIComponent(label);
    document.cookie = "csscontent="+encodeURIComponent(csscontent);
    //alert( document.cookie );
    return true;
})

$('#generateb').on('click',function() {
    //alert('ssss');
    var content = document.getElementById("htmlarea").value;
    var csscontent = document.getElementById("cssarea").value;
    var label = document.getElementById("nameproject").value;

    document.cookie = "content="+encodeURIComponent(content);
    document.cookie = "nameproject="+encodeURIComponent(label);
    document.cookie = "csscontent="+encodeURIComponent(csscontent);
    document.getElementById("htmlform").submit();
});

