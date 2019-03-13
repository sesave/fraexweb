function startCalc(){
  interval = setInterval("calc()",1);
}

function calc(){
  one = document.autoSumForm.firstBox.value;
  one.split('$ ').join('');

  equal = one / getprice;
  document.autoSumForm.secondBox.value = (equal-equal*0.05).toFixed(8);
}

setInterval(function(){
  $("#secondBox").load( "getprices.php?symbol=" + x);
}, 5000);

function stopCalc(){
  clearInterval(interval);
}

$(function(){
  $("#firstBox").maskMoney({thousands:'', decimal:'.', allowZero:true});
});
