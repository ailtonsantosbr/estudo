function ValidaCPF(){   

    var ao_cpf=document.forms.form1.ao_cpf.value; 
    var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}))$/;     
    if (cpfValido.test(ao_cpf) == false)    {  
       //alert("invalido");
       var valorValido = document.getElementById("ao_cpf").value = "???????";
    }
}