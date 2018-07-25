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

$('.admin_container .nav-tabs li > a').click(function(e){

   
    var url= this.getAttribute('data-url');
    var contentDiv = this.getAttribute('href');
    if ( $(contentDiv).children().length > 0 ) {
        
        return;
   }
   
    $.ajax({
        url: url,
        type: 'GET',
        success: function (data) {
            $(contentDiv).html(data);
        }
        
    });

});

function submitForm(formId,ele){
    
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

