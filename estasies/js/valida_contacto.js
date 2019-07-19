// JavaScript Document
$(document).on("ready", inicio());





function inicio()
{
	
	$("#id_nombre").keyup(valida_nombre);
	$("#id_email").keyup(valida_email);
	$("#id_msj").keyup(valida_msj);
		
	$("#id_enviar").click(valida_nombre);
	$("#id_enviar").click(valida_email);
	$("#id_enviar").click(valida_msj);
	
}




/* ============================================================ */
function valida_nombre()
{
	var nombre = document.getElementById("id_nombre").value;

	if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) )
	{
		$("#id_nombre").attr("class","form-control is-invalid");
		$("#id_nombre").parent().children("div").text("Campo obligatorio").show();
  		return false;
	}
	else
	{
		$("#id_nombre").attr("class","form-control is-valid");
		$("#id_nombre").parent().children("div").text("Correcto").hide();
  		return true;
	}
}


/* ============================================================ */
function valida_email()
{
	var email = document.getElementById("id_email").value;

	if( email == null || email.length == 0 || /^\s+$/.test(email) )
	{
		$("#id_email").attr("class","form-control is-invalid");
		$("#id_email").parent().children("div").text("Campo obligatorio").show();
  		return false;
	}
	else if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w/.test(email)) )
	{
		$("#id_email").attr("class","form-control is-invalid");
		$("#id_email").parent().children("div").text("Email incorrecto").show();
		return false;
	}
	else
	{
		$("#id_email").attr("class","form-control is-valid");
		$("#id_email").parent().children("div").text("Correcto").hide();
  		return true;
	}
}


/* ============================================================ */
function valida_msj()
{
	var msj = document.getElementById("id_msj").value;

	if( msj == null || msj.length == 0 || /^\s+$/.test(msj) )
	{
		$("#id_msj").attr("class","form-control is-invalid");
		$("#id_msj").parent().children("div").text("Campo obligatorio").show();
  		return false;
	}
	else
	{
		$("#id_msj").attr("class","form-control is-valid");
		$("#id_msj").parent().children("div").text("Correcto").hide();
  		return true;
	}
}