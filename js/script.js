var num = 1;
function snackbar(text) {
	var div = document.createElement("div");
	var t = document.createTextNode(text);
	div.appendChild(t);
	// div.id = "divSnackbar";
	div.id = "div"+num+"Snackbar";
	document.body.appendChild(div);
	div.className = "show";
	setTimeout(function() {
		div.className = div.className.replace("show", "");
		// div.className = div.className.replace("show", "");
		$("#div"+num+"Snackbar").remove();
		num++
	}, 3000);
}
$(document).ready(function () {
	$("#getInfo").submit(function (e) {
		var pid = $("#getInfo #pid").val();
		e.preventDefault();
		$.ajax({
			url: "actions/staff/get-info.php",
			type: "POST",
			async: true,
			data: {
				pid: pid
			},
			success: getInfoSuccess,
			error: errorHandler
		});
	});
});
function getInfoSuccess(data, status) {
	var obj = JSON.parse(data);
	// alert(obj.fname);
	$("#getData").html(
		"<table class='table table-responsive table-hover table-bordered'>"+
		"<tr>"+
		"<td>First Name</td><td>"
	);
}
function errorHandler(data, status) {
	alert(data);
}