//Arquivo com a rotina de validação dos dados do formulário

function validarDados(){
    var nomeM = document.getElementById("nomeM").value;
    var cantor = document.querySelector("#cantor").value;
    var compositor = document.querySelector("#compositor").value;
    var genero = document.querySelector("#genero").value;
      
    var divMsg = document.querySelector("#divMsg");

    if(nomeM.trim() == ""){
        divMsg.innerHTML = "Informe o nome da música!";
        return false;
    }
    if(cantor.trim() == ""){
        divMsg.innerHTML = "Informe o cantor!";
        return false;
    }
    if(compositor.trim() == ""){
        divMsg.innerHTML = "Informe o compositor!";
        return false;
    }
    if(genero == ""){
        divMsg.innerHTML = "Informe o gênero musical!";
        return false;
    }

    return true;
}