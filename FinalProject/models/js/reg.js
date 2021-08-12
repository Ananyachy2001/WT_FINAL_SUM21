function get(id){
	return document.getElementById(id);
}
function checknid(e){
	var xhr = new XMLHttpRequest();
	xhr.open("GET","check_nid.php?nid="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			if(this.responseText.trim() == "invalid"){
				get("err_nid").innerHTML = "Nid exists";
			}
			else{
				get("err_nid").innerHTML ="";
			}
		}
	};
	xhr.send();
}