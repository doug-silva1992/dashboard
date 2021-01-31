function validaFormulario(){
    let ret;

    if(frm.banner.value == "" || frm.banner.value == " "){
        ret = "\nBanner";
    }
    
    if(frm.titulo.value == "" || frm.titulo.value == " "){
        ret = ret + "\nTitulo";
    }
    
    if(frm.tipo_postagem.value == "" || frm.tipo_postagem.value == " "){
        ret = ret + "\nTipo de Postagem";
    }
    
    if(frm.resumo.value == "" || frm.resumo.value == " "){
        ret = ret + "\nResumo";
    }
    
    if(frm.texto.value == "" || frm.texto.value == " "){
        ret = ret + "\nTexto";
    }

    if(!ret){
        ret = false;
    }

    console.log(ret);

    return ret;
}

function formulario(){
    let erro = validaFormulario();
    
    if(erro != false){
        alert("Preencha os seguintes Campos: " + erro);
        return false;
    }else{
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200) {
                console.log("Teste");
                alert(this.responseText);
            }
        };
        xmlhttp.open("POST", "../src/ajax.php", true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send("funcao=" + frm.funcao.value + "&titulo=" + frm.titulo.value + "&banner=" + frm.banner.value  + "&tipo_postagem=" + frm.tipo_postagem.value + "&resumo=" + frm.resumo.value + "&texto=" + frm.texto.value);
    }
}