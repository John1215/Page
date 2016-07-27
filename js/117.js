function check(){
	$.ajax({
		url: "http://localhost:9091/userhaha",
		xhrFields:{
			withCredentials:true
		},
		async: true,
		type: "get",
		dataType:"text",
		error: function() {
				alert("failed");
		},
		success: function(data){
				if(data!="success")
						window.location="/subway/signin.php";
		}
});
}
