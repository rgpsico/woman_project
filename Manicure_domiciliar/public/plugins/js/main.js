/*admin*/


//trocar Nome da Pagina ao clicar 
$('.admin').click(function(){
    $('.page-title').text('Admin');
}); 


//Abrir formulario para cadasta Admin  
$(document).on('click', '.admin-create', function(event) {  
    $('#modal-create-admin').modal({
      'backdrop':true
    });
    $(".modal-backdrop").css("display","none"); 
 }); 

 //Quando clicar Salva , salvar Admin no banco
$(document).on('click', '.save-create-admin', function(event) {  
    alert('e isso '); 
     }); 
    

$('.ver_admin').click(function(){
   
    SelectUsers('http://127.0.0.1:8000/api/list/');
});

/*fim admin*/



/*#################---MANICURES--####################*/ 
//form-manicure-create
//function create-manicure
//function edit-manicure
//


$(document).on('click', '.manicure', function(event) {
$('.page-title').text('Mánicure');
});

$('.ver_manicure').click(function(){
setTimeout(() => {
    SelectUsers('https://jsonplaceholder.typicode.com/users');
}, 2000);
});  

$(document).on('click', '.manicure-create', function(event) {  
    $('#modal-create-manicure').modal({
      'backdrop':true
    });
    $(".modal-backdrop").css("display","none"); 
 }); 

 //Quando clicar Salva , salvar Admin no banco
  $(document).on('click', '.save-create-manicure', function() {  
  var  data =  $('#form-manicure-create').serialize();
  createUser();
    }); 

    $(document).on('click', '.deletar', function(event) {
      var id  =  $(this).attr('data-key');    
      deleteUser(id);
     
  }); 
  


/*Fim Manicure*/



