$('.openBtn').on('click',function(){
    $('.modal-body').load('content.html',function(){
        $('#myModal').modal({show:true});
    });
});


$('.btn-lg').on('click',function(){
    $('.modal-body').load('content.html',function(){
        $('#pruebaV').modal({show:true});
    });
});