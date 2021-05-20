function removerTarefa(id, tarefa, pg) {
    bootbox.confirm({
        message: "Quer remover a terfa \"" + tarefa + "\"",
        centerVertical: true,
        closeButton: false,
        buttons: {
            confirm: {
                label: "Sim",
                className: "btn-danger"
            },
            cancel: {
                label: 'Não',
                className: "btn-info"
            }
        },
        callback: function (result) {
            if(result == true) {
                location.href = 'index.php?pg=' + pg + '&acao=remover&id=' + id;
                //console.log("vai excluir");
            }
        }
    });
}

function editarTarefa(id, tarefa, pg) {
    //formulário de edição:
    let form = document.createElement('form');
    form.action = 'index.php?pg=' + pg + '&acao=atualizar';
    form.method = 'post';
    form.className = 'row';

    //componente de entreda de texto (input):
    let inputTarefa = document.createElement('input');
    inputTarefa.type = 'text';
    inputTarefa.name = 'tarefa';
    inputTarefa.className = 'col form-control';
    inputTarefa.value = tarefa;

    //input hidden para guardar o id da tarefa
    let inputId = document.createElement('input');
    inputId.type = 'hidden';
    inputId.name = 'id';
    inputId.value = id;

    //botão do formulário:
    let button = document.createElement('button');
    button.type = 'submit';
    button.className = 'col-sm-2 btn btn-info';
    button.innerHTML = 'Atualiar';

    //inclui os componentes dentro do formulário
    form.appendChild(inputTarefa);
    form.appendChild(inputId);
    form.appendChild(button);
    
    //console.log(form);

    let linhaTarefa = document.getElementById('tarefa_' + id);
    linhaTarefa.innerHTML = '';
    linhaTarefa.insertBefore(form, linhaTarefa[0]);
}

function realizarTarefa(id, pg) {
    location.href = 'index.php?pg=' + pg + '&acao=marcarRealizada&id=' + id;
}