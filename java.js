<script>
function myFunction() {
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


<script>
function abc(){
	
var pro = document.form.pro;
var cas = document.form.cas;
var cou = document.form.cou;
var bra = document.form.bra;
var qua = document.form.qua;
var pri = document.form.pri;

if(pro.value == ""){
	document.getElementById("message").innerHTML = "Please Enter Product..";
	return false;
}

if(cas.value == ""){
	document.getElementById("message").innerHTML = "Please Enter Cas No..";
	return false;
}

if(cou.value == ""){
	document.getElementById("message").innerHTML = "Please Enter Country..";
	return false;
}

if(bra.value == ""){
	document.getElementById("message").innerHTML = "Please Enter Brand..";
	return false;
}

if(qua.value == ""){
	document.getElementById("message").innerHTML = "Please Enter Quantitiy..";
	return false;
}

if(pri.value == ""){
	document.getElementById("message").innerHTML = "Please Enter Price..";
	return false;
}
}
</script>
