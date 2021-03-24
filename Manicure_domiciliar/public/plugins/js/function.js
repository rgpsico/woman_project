

function SelectUsers(route) {
    var row = "";
    $('.row_table').html(" ");
    var spinner = '<div>' +
        '<div class="spinner-border" role="status"  style="margin-left:35em;">' +
        '<span class="sr-only">Loading...</span>' +
        '</div>';
    '</div>';
    $('.row_table').append(spinner);
    setTimeout(() => {
        $.getJSON(route, function (data) {





            for (x = 0; x <= data.length; x++) {
                row +=
                    "<tr>" +
                    "<td>#</td>" +
                    "<td>" + data[x].nome + "</td>" +
                    "<td>" + data[x].nome + "</td>" +
                    "<td>" + data[x].nome + "</td>" +
                    "<td>" + data[x].nome + "</td>" +
                    "<td class='project-actions text-right'>" +
                    "<a class='btn btn-primary btn-sm ver' href='#'>" +
                    "<i class='fas fa-folder'>" +
                    "</i>" +
                    "View" +
                    "</a>" +
                    "<a class='btn btn-info btn-sm editar' href='#'>" +
                    "<i class='fas fa-pencil-alt'>" +
                    "</i>" +
                    "Editar" +
                    "</a>" +
                    "<a class='btn btn-danger btn-sm deletar' data-key='"+data[x].id+"' href='#'>" +
                    "<i class='fas fa-trash'>" +
                    "</i>"
                "Delete"
                "</a>"
                "</td>" +
                    "</tr>";
                $('.row_table').html(row);

            }

        });
    }, 1000);

}
function pagination(){
 $.ajax('http://127.0.0.1:8000/api/paginate/1',function(data){
     console.log(data);

 }) ;  

}

function createUser() {
    url = 'http://127.0.0.1:8000/api/posts';
    $.post(url,
        data = {
            nome: 'Data Array'
        }, function (data) {
            console.log(data);
        }
    );
}

function updateUser(){

}

function deleteUser(id){
    url  = 'http://127.0.0.1:8000/api/delete/'+id;
    $.post(url,
        data = {
            id:id,
            nome: 'Foi deletado pelo javascript'
        }, function (data) {
            console.log(data);
        }
    );
}

 function Form(){
     
   return form;

}

