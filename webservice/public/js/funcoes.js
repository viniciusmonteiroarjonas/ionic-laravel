function removerOferta($id) {
    swal({
        title: 'Deseja deletar este registro?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim',
        cancelButtonText: 'Não'
    }).then((result) => {
        if (result.value) {
            swal({
                type: "success",
                title: "Registro removido com sucesso !",
                confirmButtonText: "Fechar",
                timer: 1000,
                onOpen: () => {
                    swal.showLoading()
                }
            });
            $.ajax({
                url: "/ofertas/remover/" + $id,
                type: "GET",
            });
            setTimeout(function() {
                document.location.reload(true);
            }, 750);
        }
    })
}