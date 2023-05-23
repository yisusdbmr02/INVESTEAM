function confirmar(){
    Swal.fire({
        title: '¿Estas seguro?',
        text: "Los cambios serán irreversibles",
        icon: 'error',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Si, Eliminalos!'
    }).then((result) => {
        
    })
}
