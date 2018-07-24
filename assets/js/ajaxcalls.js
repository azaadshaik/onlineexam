/*$("form#regForm").submit(function(e) {
    var thisform = document.getElementById('regForm');
    e.preventDefault();    
    var formData = new FormData(thisform);
    console.log(formData);
    $.ajax({
        url: 'user/register',
        type: 'POST',
        data: formData,
        enctype: 'multipart/form-data',
        success: function (data) {
            alert(data)
        },
        cache: false,
        contentType: false,
        processData: false
    });
});*/

function submitForm(formId,ele){
    //event.preventDefault();
    var thisform = document.getElementById(formId);
    var action = thisform.getAttribute('action');
    var formData = new FormData(thisform);
    $.ajax({
        url: action,
        type: 'POST',
        data: formData,
        enctype: 'multipart/form-data',
        success: function (data) {
            alert(data)
        },
        cache: false,
        contentType: false,
        processData: false
    });
    return false;   
}