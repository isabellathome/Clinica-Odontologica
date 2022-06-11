// VALIDAÇÃO - CELULAR

$(document).ready(function () {
  $("body").on("focus", ".phone", function () {
    var maskBehavior = function (val) {
        return val.replace(/\D/g, "").length === 11
          ? "(00) 00000-0000"
          : "(00) 0000-00009";
      },
      options = {
        onKeyPress: function (val, e, field, options) {
          field.mask(maskBehavior.apply({}, arguments), options);

          if (field[0].value.length >= 14) {
            var val = field[0].value.replace(/\D/g, "");
            if (/\d\d(\d)\1{7,8}/.test(val)) {
              field[0].value = "";
              alert("Telefone Invalido");
            }
          }
        },
      };
    $(this).mask(maskBehavior, options);
  });
});

// MÁSCARA - CPF

function mascara(i){
   
    var v = i.value;
    
    if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
       i.value = v.substring(0, v.length-1);
       return;
    }
    
    i.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7) i.value += ".";
    if (v.length == 11) i.value += "-";
 
 }

// VALIDAÇÃO - CPF

function CPF() {
  "user_strict";
  function r(r) {
    for (var t = null, n = 0; 9 > n; ++n)
      t += r.toString().charAt(n) * (10 - n);
    var i = t % 11;
    return (i = 2 > i ? 0 : 11 - i);
  }
  function t(r) {
    for (var t = null, n = 0; 10 > n; ++n)
      t += r.toString().charAt(n) * (11 - n);
    var i = t % 11;
    return (i = 2 > i ? 0 : 11 - i);
  }
  var n = "CPF Inválido",
    i = "CPF Válido";
  (this.gera = function () {
    for (var n = "", i = 0; 9 > i; ++i) n += Math.floor(9 * Math.random()) + "";
    var o = r(n),
      a = n + "-" + o + t(n + "" + o);
    return a;
  }),
    (this.valida = function (o) {
      for (
        var a = o.replace(/\D/g, ""),
          u = a.substring(0, 9),
          f = a.substring(9, 11),
          v = 0;
        10 > v;
        v++
      )
        if ("" + u + f == "" + v + v + v + v + v + v + v + v + v + v + v)
          return n;
      var c = r(u),
        e = t(u + "" + c);
      return f.toString() === c.toString() + e.toString() ? i : n;
    });
}

var CPF = new CPF();

$("#input").keypress(function () {
  $("#resposta").html(CPF.valida($(this).val()));
});

$("#input").blur(function () {
  $("#resposta").html(CPF.valida($(this).val()));
});

// VALIDAÇÃO E MÁSCARA - CEP

function limpa_formulário_cep() {
  document.getElementById("rua").value = "";
  document.getElementById("bairro").value = "";
  document.getElementById("cidade").value = "";
  document.getElementById("uf").value = "";
}

function meu_callback(conteudo) {
  if (!("erro" in conteudo)) {
    document.getElementById("rua").value = conteudo.logradouro;
    document.getElementById("bairro").value = conteudo.bairro;
    document.getElementById("cidade").value = conteudo.localidade;
    document.getElementById("uf").value = conteudo.uf;
  } 
  else {
    limpa_formulário_cep();
    alert("CEP não encontrado.");
  }
}

function pesquisacep(valor) {
  var cep = valor.replace(/\D/g, "");

  if (cep != "") {
    var validacep = /^[0-9]{8}$/;

    if (validacep.test(cep)) {
      document.getElementById("cep").value =
        cep.substring(0, 5) + "-" + cep.substring(5);

      document.getElementById("rua").value = "...";
      document.getElementById("bairro").value = "...";
      document.getElementById("cidade").value = "...";
      document.getElementById("uf").value = "...";

      var script = document.createElement("script");

      script.src =
        "https://viacep.com.br/ws/" + cep + "/json/?callback=meu_callback";

      document.body.appendChild(script);
    } 
    else {
      limpa_formulário_cep();
      alert("Formato de CEP inválido.");
    }
  } 
  else {
    limpa_formulário_cep();
  }
}

// MÁSCARA - SÁLARIO

function moeda(a, e, r, t) {

    if(a.value.replace(/[^\d]/g, '').length > a.getAttribute("maxlength")-1)
     return
 
    let n = ""
      , h = j = 0
      , u = tamanho2 = 0
      , l = ajd2 = ""
      , o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o),
    -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
    h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
    for (l = ""; h < u; h++)
        -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n,
    0 == (u = l.length) && (a.value = ""),
    1 == u && (a.value = "0" + r + "0" + l),
    2 == u && (a.value = "0" + r + l),
    u > 2) {
        for (ajd2 = "",
        j = 0,
        h = u - 3; h >= 0; h--)
            3 == j && (ajd2 += e,
            j = 0),
            ajd2 += l.charAt(h),
            j++;
        for (a.value = "",
        tamanho2 = ajd2.length,
        h = tamanho2 - 1; h >= 0; h--)
            a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
        
    }
    return !1
 }