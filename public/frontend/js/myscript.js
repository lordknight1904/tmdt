$(document).ready(function() {
	$(".updatecart").click(function() {
		var rowid = $(this).attr('id');
		var qty = $(this).parent().parent().find(".qty").val();
		var token = $("input[name='_token']").val();
		$.ajax({
			url:'cap-nhat-san-pham/'+rowid+'/'+qty,
			type:'GET',
			cache:false,
			data:{"_token":token,"id":rowid,"qty":qty},
			success:function (data) {
				if(data == "oke") {
					window.location = "gio-hang";
				}
				else {
					alert("Error!");
				}
			}
		});
	});
});
function selectt(){
	var select=document.getElementById('input').value;
	console.log(select);	
	if(select){
		var style = document.getElementById('fake-view-button').style.display = 'none';
		var style = document.getElementById('aa-prod-view-bottom').style.display = 'block';
	}else{
		var style = document.getElementById('fake-view-button').style.display = 'block';
		var style = document.getElementById('aa-prod-view-bottom').style.display = 'none';
	}
}
function kiemTraKichThuoc(content){
	var select=document.getElementsByName ('txtLHSize');
	var sizeArr = new Array(select.length);
	var unselect = false;
	for(var i =0;i<select.length;i++){
		sizeArr[i] = select[i].value;
		if(select[i].value==='') unselect = true;
	}
	if(!unselect){
		console.log(sizeArr);
		window.location = "/thanh-toan/" + sizeArr;
	}else{
		alert("Please choose size!!!");
	}

}