function startCalc(){
  interval = setInterval("calc()",1);
}

function calc(){
  one = document.autoSumForm.firstBox.value;
  equal = one / getprice;
  document.autoSumForm.secondBox.value = ((equal-equal*0.05) / getbase).toFixed(8);
}

setInterval(function(){
  $("#secondBox").load( "getprices.php?symbol=" + x);
  pricef = $('#secondBox').val();
}, 5000);

function stopCalc(){
  clearInterval(interval);
}

$(function(){
  $("#firstBox").maskMoney({thousands:'', decimal:'.', allowZero:false});
});

function submitBase(){
  document.write(pricef);
}
