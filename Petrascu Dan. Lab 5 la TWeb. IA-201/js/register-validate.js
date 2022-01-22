$.validator.addMethod('strong', function(value, el){
    return this.optional(el) || /\d/.test(value) && /[a-z]/i.test(value);
}, 'Parola trebuie sa conțină măcar o cifră și un caracter!');

$.validator.addMethod("noSpace", function(value, el) { 
    return value == ' ' || value.trim().length != 0;  
}, "Spațiile nu se permit!");

$.validator.addMethod("alphanumeric", function(value, el) {
return this.optional(el) || /^\w+$/i.test(value);
}, "Doar litere și numere se permit!");

$('#register-form').validate({
    rules:{
        login:{
            required: true,
            minlength: 3,
            noSpace: true,
            alphanumeric: true
        },
        Email:{
            required: true,
            email: true
        },
        password:{
            required: true,
            minlength: 8,
            strong: true
        }, 
        passrepeat:{
            equalTo: "#password",
            required: true,
            minlength: 8
        }  
    },
    messages:{
        login:{
            required: 'Câmpul cu login trebuie completat!',
            minlength: 'Loginul trebuie să fie mai lung de 3 caractere!'
        },
        Email:{
            required: 'Câmpul cu email trebuie completat!',
            email: 'Introduceti corect emailul!'
        },
        password:{
            required: 'Câmpul cu parola trebuie completat!',
            minlength: 'Parola nu poate fi mai mică decât 8!'
        },
        passrepeat:{
            required: 'Repetați parola!',
            minlength: 'Parola nu poate fi mai mică decât 8!',
            equalTo: "Parolele nu se aseamănă!"
        }  
    }
})

$('input').on('input', function(){
    $('.msg').css('display', 'none');
    $('input').removeClass('error-1');
})

$('.register-btn').click(function(e){
    e.preventDefault();
    if($('#register-form').valid()){
       sent(e);
    }
})

var sent = function(e){
    let login = $('input[name="login"]').val();
    let password = $('input[name="password"]').val();
    let passrepeat = $('input[name="passrepeat"]').val();
    let email = $('input[name="Email"]').val();
    
    let formData = new FormData();
    
    formData.append('login', login);
    formData.append('password', password);
    formData.append('passrepeat', passrepeat);
    formData.append('email', email);
    
    $.ajax({
        url: 'handlers/signup.php',
        type: 'POST',
        dataType: 'json',
        cache: false,
        processData: false,
        contentType: false,
        data: formData,
        success(data){
            if(data.status === true){
                document.location.href = 'login.php';
            }else{
                if(data.type === 1){
                    data.fields.forEach(function(f){
                        $('input[name='+f.field).addClass('error-1');
                        $('.msg-'+f.field).css("display", "block").text(f.message);
                    });
                }
            }
        }
    });
};



