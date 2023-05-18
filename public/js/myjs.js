function showModal(op){
    $("#modalAddEditInvest").modal('show');
    if(op="add"){
        $("#modalTitleInvest").text('Añadir');
        $("#dniInvest").val('');
        $("#nombreInvest").val('');
        $("#apellidosInvest").val('');
        $("#facuInvest").val('0');
    }
}