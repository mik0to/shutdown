$(document).ready(function(){
    $("#modalShowBtn").click(function(){
        $("#infoModal").modal();
    });
	$('#send').click(function(){
		var command = document.getElementById('command').value
		$.get("ajax.php?module=shutdown&command=runcommand&data="+ command)
	});
});
