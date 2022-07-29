
$("#buttonRemove").click(function() {
  let numberItens = getCurrentNumber();
  if(numberItens>0)
  {
    numberItens = numberItens - 1;
    setNewNumberItens(numberItens);
  }
});
$("#buttonAdd").click(function() {
  let numberItens = getCurrentNumber();
  numberItens = numberItens + 1;
  setNewNumberItens(numberItens);
});
function getCurrentNumber() {
    let numberItens_srt = $('#qntdCarrinho').val();
    numberItens_num = Number(numberItens_srt);
    return numberItens_num;
  }
  
  function setNewNumberItens(numberIntesAtt) {
    $("#qntdCarrinho").val(numberIntesAtt);
  }