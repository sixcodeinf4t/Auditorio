//Slider para página de melhoresDestinos.php

//Slider superior
$('#btn-next').show(function(){
});

function moverDireita(){
    $('#segura').animate({marginLeft:"-"+70+'%'},500, function(){
    });
}

function moverEsquerda(){
    $('#segura').animate({marginLeft:0},500, function(){
    });
}

$('#btn-next').click(function(){
     $('#btn-prev').show(100,function(){
    });
    $('#btn-next').hide(100,function(){
    });

   moverDireita();
});

$('#btn-prev').click(function(){
    $('#btn-next').show(100,function(){
    });
    $('#btn-prev').hide(100,function(){
    });
   moverEsquerda();
});

//Slider inferior
$('#btn-prox').show(function(){
});

function moverDireita2(){
    $('#segura2').animate({marginLeft:"-"+70+'%'},500, function(){
    });
}

function moverEsquerda2(){
    $('#segura2').animate({marginLeft:0},500, function(){
    });
}

$('#btn-prox').click(function(){
     $('#btn-ant').show(100,function(){
    });
    $('#btn-prox').hide(100,function(){
    });
   moverDireita2();
});

$('#btn-ant').click(function(){
    $('#btn-prox').show(100,function(){
    });
    $('#btn-ant').hide(100,function(){
    });
   moverEsquerda2();
});
