/* 
 Author: Carlos Diaz
 Description: The magic happens here :)
 */

function Update() {

	updateReport();
}

function updateReport() {

	$.ajax({
		type: "POST",
		url: "load_post.php",
		dataType: "json",
		cache: false,		
		success: function(data) {
			//alert('Aqui');
			$("#table1 tbody").empty();
			if (data.text != null) {
				for (var i = 0; i < data.text.length; i++) {

					$("#table1 tbody").append('<tr><td>' + data.text[i].field1 + '</td> <td>' + data.text[i].field2 + '</td> <td>' + data.text[i].field3 + '</td> <td>' + data.text[i].field4 + '</td> <td>' + data.text[i].field5 + '</td> <td>' + data.text[i].field6 + '</td> </tr>');					
				}
				setTimeout(function() {
					updateReport();
				}, 50000);			

			}
		}

	});

}



