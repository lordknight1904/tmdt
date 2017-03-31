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
	if(content.length == 0){
		alert("Giỏ hàng rổng");
		return;
	}
	var select=document.getElementsByName ('txtLHSize');
	var sizeArr = new Array(select.length);
	var unselect = false;
	for(var i =0;i<select.length;i++){
		sizeArr[i] = select[i].value;
		if(select[i].value==='') unselect = true;
		if(select[i].value == -1) {
			alert("Kích cỡ sản phẩm bạn chọn đã hết hàng!!!");
			return
		}
	}
	if(!unselect){
		window.location = "/thanh-toan/" + sizeArr;
	}else{
		alert("Xin hãy chọn kích cỡ!!!");
	}
}
function animation(){
	if(document.getElementById("chatShow").className === "chatShow transform"){
		console.log('abc');
		document.getElementById("chatShow").className = "chatHide transform";
	}else{
		document.getElementById("chatShow").className = "chatShow transform";
	}
}