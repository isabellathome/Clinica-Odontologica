
// ============= MÁSCARA DE TELEFONE
const inputCel = document.querySelector('#OpTelefone')

inputCel.addEventListener('keypress', () => {
    let inputCelLength = inputCel.value.length

    if (inputCelLength == 0) {
         inputCel.value += '('
    } else if (inputCelLength == 3) {
        inputCel.value += ')'
    } else if (inputCelLength == 5) {
        inputCel.value += ' '
    } else if (inputCelLength == 10) {
        inputCel.value += '-'
    }
})

// MÁSCARA E VALIDAÇÃO DE CEP
function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
    //Atualiza os campos com os valores.
    document.getElementById('rua').value=(conteudo.logradouro);
    document.getElementById('bairro').value=(conteudo.bairro);
    document.getElementById('cidade').value=(conteudo.localidade);
    document.getElementById('uf').value=(conteudo.uf);
} //end if.
else {
    //CEP não Encontrado.
    limpa_formulário_cep();
    alert("CEP não encontrado.");
}
}

function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        document.getElementById('cep').value = cep.substring(0,5)
        +"-"
        +cep.substring(5);

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua').value="...";
        document.getElementById('bairro').value="...";
        document.getElementById('cidade').value="...";
        document.getElementById('uf').value="...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

    } //end if.
    else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
    }
} //end if.
else {
    //cep sem valor, limpa formulário.
    limpa_formulário_cep();
}
};

// ============= MÁSCARA DE CPF
const input = document.querySelector('#cpf')

input.addEventListener('keypress', () => {
    let inputLength = input.value.length

    if (inputLength == 3 || inputLength == 7) {
        input.value += '.'
    }else if (inputLength == 11) {
        input.value += '-'
    }
})

// ============= CPF VÁLIDO
function CPF(){
    "user_strict";
    
    function r(r){
        for(var t=null,n=0;9>n;++n)t+=r.toString().charAt(n)*(10-n);
        var i=t%11;
        return i=2>i?0:11-i
    }

    function t(r){
        for(var t=null,n=0;10>n;++n)t+=r.toString().charAt(n)*(11-n);
        var i=t%11;
        return i=2>i?0:11-i
    }
    
    var n="CPF Inválido",
    i="CPF Válido";

    this.gera=function(){
                    for(var n="",i=0;9>i;++i)n+=Math.floor(9*Math.random())+"";
                    var o=r(n),a=n+"-"+o+t(n+""+o);
                    return a
                },this.valida=function(o){
                                for(var a=o.replace(/\D/g,""),u=a.substring(0,9),f=a.substring(9,11),v=0;10>v;v++)
                                if(""+u+f==""+v+v+v+v+v+v+v+v+v+v+v)
                                return i;
                                
                                var c=r(u),e=t(u+""+c);
                                return f.toString()===c.toString()+e.toString()?i:n
                            }
}

var CPF = new CPF();

$("#cpf").keypress(function(){
    $("#resposta").html(CPF.valida($(this).val()));
});

$("#cpf").blur(function(){
     $("#resposta").html(CPF.valida($(this).val()));
});


