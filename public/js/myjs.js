function confirmar(id,url,controller,controller2){
    Swal.fire({
        title: '¿Estas seguro?',
        text: "Los cambios serán irreversibles",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Si, Eliminalos!'
    }).then(async function(result){
        if(result.isConfirmed){
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Cambios Guardados',
                    showConfirmButton: false,
                    timer: 1000
            })
            await new Promise(resolve => setTimeout(resolve,1000));
            window.location.href=url+controller+id
        }
        else{
            window.location.href=url+controller2
        }
    })
}
