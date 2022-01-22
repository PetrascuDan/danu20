$.validator.addMethod("alphanumeric", function(value, el) {
return this.optional(el) || /^\w+$/i.test(value);
}, "Doar litere și numere se permit!");

$('#cont-form').validate({
    rules:{
        name:{
            required: true,
            alphanumeric: true
        },
        email:{
            required: true,
            email: true
        },
        tema:{
            required: true
        }       
    },
    messages:{
        name:{
            required: 'Câmpul cu Nume trebuie completat!'
        },
        email:{
            required: 'Câmpul cu email trebuie completat!',
            email: 'Introduceti corect emailul!'
        },
        tema:{
            required: 'Tema scrisorii este obligatorie!'
        }
    }
})
  
$('input').on('input', function(){
    $('.msg').css('display', 'none');
    $('input').removeClass('error-1');
})

$('.sent-btn').click(function(e){
    e.preventDefault();
    if($('#cont-form').valid()){
        sent(e);
    }
})

var sent = function(e){
    let name = $('input[name="name"]').val();
    let email = $('input[name="email"]').val();
    let topic = $('input[name="tema"]').val();
    let message = $('textarea[name="message"]').val();
    
    alert(message);
    
    let formData = new FormData();
    
    formData.append('name', name);
    formData.append('email', email);
    formData.append('topic', topic);
    formData.append('message', message);
    
    $.ajax({
        url: 'handlers/contact.php',
        type: 'POST',
        dataType: 'json',
        cache: false,
        processData: false,
        contentType: false,
        data: formData,
        success(data){
            if(data.status === true){
                $('.msg_success').css('display', 'block').text(data.message);
            }else{
                if(data.type === 1){
                    data.fields.forEach(function(f){
                        $('input[name='+f.field).addClass('error-1');
                        $('.msg-'+f.field).css("display", "block").text(f.message);
                    });
                }else if(data.type === 2){
                    $('.msg_fail').css('display', 'block').text(data.message);
                }
            }
        }
    });
};