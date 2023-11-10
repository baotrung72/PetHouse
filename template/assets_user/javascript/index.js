document.getElementById('subtractquantity').addEventListener('click', function() {
    var quantityElement = document.getElementById('quantity');
    var quantity = parseInt(quantityElement.innerText);
    if (quantity > 0) {
      quantityElement.innerText = quantity - 1;
    }
  });

  document.getElementById('add').addEventListener('click', function() {
    var quantityElement = document.getElementById('quantity');
    var quantity = parseInt(quantityElement.innerText);
    quantityElement.innerText = quantity + 1;
  });

