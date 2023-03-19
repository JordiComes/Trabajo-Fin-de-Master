function cargarproductos(){
  let productos;
  if(localStorage.getItem('catalogos') === null){
    productos = [];
  }else {
    productos = JSON.parse(localStorage.getItem('catalogos'));
  }

  let total = 0;
  let inputProductos="";
  for (let producto of productos) {
    inputProductos += producto.id + ",";
    let precioProducto = producto.precio.replace("€", "");
    let trProductos = `
           <tr>
                <td><img width="100" src="${producto.imagen}" alt=""></td>
                <td>${producto.titulo}</td>
                <td>${precioProducto}€</td>
            </tr>
           `;
    total += parseInt(precioProducto);
    document.getElementById("contenedor-productos").innerHTML += trProductos;
  }
  let trTotales = `
            <tr>
                <td colspan="2">Total </td>
                <td>${total}€</td>
            </tr>
        `;
  document.getElementById("total-productos").innerHTML = trTotales;
  document.getElementById("input-productos").value = inputProductos;
}

cargarproductos();
