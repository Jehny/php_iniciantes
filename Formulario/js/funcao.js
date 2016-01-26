
function valida_cadastro(){
	//vai verificar o formulario com o id=cadastro e o campo nome se ele está vazio
	//se tiver vou mandar imprimir no console a informação VAZIO
	//VOU CONTIUNUAR COM A VALIDAÇÃO
	//LEMBRANDO Q ELE SO MANDARÁ O ALERTA CASO ESTEJA VAZIO
	
	if(cadastro.nome.value == ""){
		console.log('Vazio');

		alert('O Campo Nome deve ser preenchido');

	}else if(cadastro.birthday.value == ""){

		alert('O Campo Data de Nascimento deve ser preenchido');

	}else if(cadastro.cpf.value == ""){

		alert('O Campo CPF deve ser preenchido');

	}else if(cadastro.email.value == ""){

		alert('O Campo E-Mail deve ser preenchido');

	}else if(cadastro.endereco.value == ""){

		alert('O Campo endereco deve ser preenchido');

	}else if(cadastro.numero.value == ""){

		alert('O Campo numero deve ser preenchido');

	}else if(cadastro.tel.value == ""){

		alert('O Campo telefone deve ser preenchido');

	}

}


$(document).ready( function() {
	$("#cadastro").validate({
		/* REGRAS DE VALIDAÇÃO*/
		rules:{
			nome:{
				required: true, 
                minlength: 3    
			},
			email:{
				required: true, 
                email: true     
			},
            birthday:{
                required: true, 
                min: 18         
            },
            cpf:{
                required:true,
                	 se é válido
	        }
            endereco:{
				required: true, 
                minlength: 3   
			},
			numero:{
				required: true, /* Campo obrigatório */
				 só número
			/},
            tel:{
				required: true, 
                   máscara e nono dígito
			},    	


		/* DEFINIÃ‡ÃƒO DAS MENSAGENS DE ERRO */
		messages:{
			nome:{
				required: "Preencha o campo <u>Nome</u>",
				minlength: "O campo <u>Nome</u> deve conter no mínimo 3 caracteres"
			},
			email:{
				required: "Preencha o campo <u>Email</u>",
				email: "O campo <u>Email</u> Por favor insira um email válido"
			},
            birthday:{
                required: "Preencha o campo <u>Idade</u>",
                min: "Menor de 18 anos, data inválida"
            },
           
		}
	});
});