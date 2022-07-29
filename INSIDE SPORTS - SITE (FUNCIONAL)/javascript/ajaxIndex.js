function buscarProdutoPagHome(nome)
{
    $.ajax
    (
        {
            url: "buscarProduto.php",
            method: "POST",
            data: {nome:nome},
            success: function(data)
            {
                $('#resultado').html(data);
            }
        }
    );
};

$(document).ready(function()
{
    buscarProdutoPagHome();
    $('#buttonBuscarHome').click(function()
        {
            var nome = $('#buscaProduto').val();

            if(nome != ' ')
            {
                buscarProdutoPagHome(nome);
            }
            else
            {
                buscarProdutoPagHome();
            }
        }
    )
}
);