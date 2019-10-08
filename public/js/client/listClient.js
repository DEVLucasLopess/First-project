$(document).ready(function(){
   watchModal();
});

var watchModal = function() {
    $(".modal-delete").each(function(){
        var $this = $(this);
        $this.on('click', function(){
            var id = $(this).data("id");           
           onDeleteClient(id)
        })
    })
};

var onDeleteClient = function(id){
    var btn = $('#pergunta .delete');
    btn.on('click', function(){
        location.href = 'usuario/deletar/'+id; 
    })
}