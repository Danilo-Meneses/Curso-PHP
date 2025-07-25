<label for="nome">Digite seu nome: </label>
</br>
<input type="text" id="nome" name="nome" />
<button onClick="funcao_teste();">Clique aqui</button>
</br></br>
<label for="nome">Lista de nomes: </label>
</br>
<textarea id="lista" name="lista" rows="1" disabled></textarea>
<input type="hidden" id="linhas" name="linhas" value="1" readonly />

<script>
    
    function funcao_teste(){
        var texto = document.getElementById("nome").value;
        alert("Seu nome é " + texto);

        document.getElementById("nome").value = "";
        
        var lista = document.getElementById("lista").value;
        var linhas = document.getElementById("linhas").value;

        if(lista == ""){
            var lista = texto;
        }
        else{
            var lista = lista + "\n" + texto;
        }
        
        var linhas = parseInt(linhas) + 1;

        document.getElementById("lista").value = lista;
        document.getElementById("lista").rows = linhas;
        document.getElementById("linhas").value = linhas;
    }
</script>