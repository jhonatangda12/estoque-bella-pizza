// Lista de produtos por categoria
  const produtosPorCategoria = {
    Carnes: ["Filé Mignon"],
    Laticínio: ["Mussarela"],
    Chocolates: ["Meio Amargo", "Ao Leite", "Cobertura"]
  };

  const selectCategoria = document.getElementById("categoria");
  const selectProduto = document.getElementById("produto");

  // Quando mudar a categoria
  selectCategoria.addEventListener("change", () => {
    const categoriaSelecionada = selectCategoria.value;

    // Limpa opções anteriores
    selectProduto.innerHTML = "<option value=''>Selecione</option>";

    // Se houver produtos para a categoria, adiciona
    if (produtosPorCategoria[categoriaSelecionada]) {
      produtosPorCategoria[categoriaSelecionada].forEach(produto => {
        const opt = document.createElement("option");
        opt.value = produto;
        opt.textContent = produto;
        selectProduto.appendChild(opt);
      });
    }
  });
    function home(){
         window.location.href = "index.html";
    };

function mostrarSenha() {
  var campo = document.getElementById("senha");
  if (campo.type === "password") {
    campo.type = "text";
  } else {
    campo.type = "password";
  }
}
//ver senha
function toggle() {
  var desligado = document.getElementById('toggle');//seleciona o elemento com o id toggle
  desligado.className = desligado.className === "toggleD" ? "toggleL" : "toggleD";
  //desligado.className → pega a classe atual do elemento com id "toggle".
//=== "toggleD" → verifica se a classe atual é "toggleD".
//? "toggleL" : "toggleD" → se for "toggleD", troca para "toggleL". Caso contrário, volta para "toggleD".
}
