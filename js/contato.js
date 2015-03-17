$("form").submit(function(e){
    var error = false;
    $(".required").each(function(i){
        if(this.value.trim() === '' || this.value.trim() === 0){
            $(this).parents('.form-group').addClass('has-error');
            error = true;
        } else {
            $(this).parents('.form-group').removeClass('has-error');
        }
    });
    
    if(error){
        e.preventDefault();
        alert('Favor preencha todos os campos em vermelho e tente novamente.');
    }
});
    