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
function selectt($id,$url){
	var select=document.getElementById('input').value;
	$size_id = select;
	// $sanpham->id,$sanpham->sanpham_url
	// $("#aa-add-to-cart-btn").context.URL.appendTo = "http://www.google.com.vn";
	$(".aa-add-to-cart-btn").attr("href", "http://testvhost/mua-hang/"+$id.trim()+"/"+$url.trim()+"/"+select);
	console.log($(".aa-add-to-cart-btn").attr("href"));
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