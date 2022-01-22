$('#login-form').validate({
    rules:{
        login:{
            required: true,
            minlength: 3
        },
        pass:{
            required: true,
            minlength: 8
        } 
    },
    messages:{
        login:{
            required: 'Introduceți loginul!',
            minlength: 'Loginul nu poate fi mai mic decât 3'
        },
        pass:{
            required: 'Introduceți parola!',
            minlength: 'Parola nu poate fi mai mică decât 8'
        }
    }
})

$('input').on('input', function(){
    $('.msg').css('display', 'none');
    $('input').removeClass('error-1');
})

$('.login-btn').click(function(e){
    e.preventDefault();
      
    if($('#login-form').valid()){
        sent(e);
    }
    
})

var sent = function(e){
    let login = $('input[name="login"]').val();
    let password = $('input[name="pass"]').val();
    
    $.ajax({
        url: 'handlers/signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password
        },
        success(data){
            if(data.status === true){
                document.location.href = 'index.php';
            }else{
                if(data.type === 1){
                    data.fields.forEach(function(f){
                        $('input[name='+f.field).addClass('error-1');
                        $('.msg-'+f.field).css("display", "block").text(f.message);
                    });
                }else if(data.type === 2){
                    $('.login-msg').css('display', 'block').text(data.message);
                }
            }
        }
    });
};
