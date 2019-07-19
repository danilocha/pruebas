// JavaScript Document
$(document).on("ready", inicio());





function inicio()
{
	
	$("#id_nombre_dos").keyup(valida_nombre);
	$("#id_email_dos").keyup(valida_email);
	$("#id_msj_dos").keyup(valida_msj);
		
	$("#id_enviar_dos").click(valida_nombre);
	$("#id_enviar_dos").click(valida_email);
	$("#id_enviar_dos").click(valida_msj);
	
}




/* ============================================================ */
function valida_nombre()
{
	var nombre = document.getElementById("id_nombre_dos").value;

	if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) )
	{
		$("#id_nombre_dos").attr("class","form-control is-invalid");
		$("#id_nombre_dos").parent().children("div").text("Campo obligatorio").show();
  		return false;
	}
	else
	{
		$("#id_nombre_dos").attr("class","form-control is-valid");
		$("#id_nombre_dos").parent().children("div").text("Correcto").hide();
  		return true;
	}
}


/* ============================================================ */
function valida_email()
{
	var email = document.getElementById("id_email_dos").value;

	if( email == null || email.length == 0 || /^\s+$/.test(email) )
	{
		$("#id_email_dos").attr("class","form-control is-invalid");
		$("#id_email_dos").parent().children("div").text("Campo obligatorio").show();
  		return false;
	}
	else if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w/.test(email)) )
	{
		$("#id_email_dos").attr("class","form-control is-invalid");
		$("#id_email_dos").parent().children("div").text("Email incorrecto").show();
		return false;
	}
	else
	{
		$("#id_email_dos").attr("class","form-control is-valid");
		$("#id_email_dos").parent().children("div").text("Correcto").hide();
  		return true;
	}
}


/* ============================================================ */
function valida_msj()
{
	var msj = document.getElementById("id_msj_dos").value;

	if( msj == null || msj.length == 0 || /^\s+$/.test(msj) )
	{
		$("#id_msj_dos").attr("class","form-control is-invalid");
		$("#id_msj_dos").parent().children("div").text("Campo obligatorio").show();
  		return false;
	}
	else
	{
		$("#id_msj_dos").attr("class","form-control is-valid");
		$("#id_msj_dos").parent().children("div").text("Correcto").hide();
  		return true;
	}
}