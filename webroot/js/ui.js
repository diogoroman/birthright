var url = '';
//identifico o domínio da aplicação
var fullUrl = new String(document.location);
var domain = fullUrl.match('^((http)|(https)):\/\/((www)\.)?[a-zA-Z0-9\.\-]+\/');
domain = domain[0];

var parameters = fullUrl.slice(domain.length).split("/");
var plugin = '';
var controller = '';

if(parameters.length > 2)
{
	plugin = parameters[0];
	controller = parameters[1];
	url = domain + plugin + "/" + controller;
}
else
{
	controller = parameters[0];
	url = domain + controller;
}

$(document).ready(function () {
	$('a.jbutton[title]').tooltip({'effect' : 'fade'});
	
	$("#ProcessCustomerName").autocomplete({
		source: "/customers/ajaxGetCustomers/",
		minLength: 2,
		select: function(event, ui) {
		$('#ProcessCustomerId').attr('value', ui.item.id);
	}
	});
	
	$("#buttonSearch").click(function (e) {
		$('#search').toggle('fade', function() { $('input[name=q]').focus(); }, 400);
		e.preventDefault();
	});
	
	$("#ProcessLawyerName").autocomplete({
		source: "/lawyers/ajaxGetLawyers/",
		minLength: 2,
		select: function(event, ui) {
			$('#ProcessLawyerId').attr('value', ui.item.id);
		}
	});
	
	$("#ProcessPresentLawyerName").autocomplete({
		source: "/lawyers/ajaxGetLawyers/",
		minLength: 2,
		select: function(event, ui) {
			$('#Audience0LawyerId').attr('value', ui.item.id);
		}
	});
	
	$("#CustomerLawyerIndication").autocomplete({
		source: "/lawyers/ajaxGetLawyers/",
		minLength: 2,
		select: function(event, ui) {
			$('#CustomerIndication').attr('value', ui.item.id);
		}
	});
	
	$("#ChalkEmployeeName").autocomplete({
		source: "/employees/ajaxGetEmployees/",
		minLength: 2,
		select: function(event, ui) {
			$('#ChalkEmployeeId').attr('value', ui.item.id);
		}
	});
	
	$('a.new-witness').click(function(e) {
		e.preventDefault();
		var input = $('form input[type=text]:last').clone();
		index = $('form input[type=text]:last').attr('rel');
				index++;
		
		input.attr('rel',index);
		input.attr('name',"data[Witness][" + index + "][name]");
		input.attr('id','#Witness' + index + 'Name');
		input.attr('style', 'margin-top: 10px');
		input.attr('value', null);
		
		$('form input[type=text]:last').after(input);
		
	})
	
	$("img[alt=Voltar]").click(function (e){
		e.preventDefault();
		history.back();			
	});
	
	// ===== Associa um evento click a um elemento com a classe jsToggleNext ======//
	$('.jsToggleNext').click(toggleNext);
	
	//envia o formulario de geração de relatorio para visualização no navegador
	$('a.view-report').click(function(e) {
		e.preventDefault();
		
		$('#ReportReportType').val($(this).attr('rel'));
		$('#ReportReportForm').submit();
	
	});
	
	//envia o formulario para gerar relatório
	$('a.generate-report').click(function(e) {
		e.preventDefault();
		
		$('#ReportReportType').val($(this).attr('rel'));
		
		action = null;
		
		if($(this).hasClass('print')) {
			action = $('#ReportReportForm').attr('action') + '/1';
		}
		
		submitForm('#ReportReportForm', action);
	});
});

//Exibe/esconde o conteúdo do elemento seguinte
function toggleNext(e)
{
	e.preventDefault();

	$(this).next().slideToggle('fast');

	return false;
}

function submitForm(formId, action)
{
	if(action != null) {
		$(formId).attr('action', action);
	}
	
	$(formId).submit();
}