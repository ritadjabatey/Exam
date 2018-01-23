/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function check_code(str) {
  if (str=="") {
    document.getElementById("code_hint").innerHTML="no code entered";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      
      document.getElementById("code_hint").innerHTML=xmlhttp.responseText;
   
         
    }
  }
  xmlhttp.open("GET","validate_code.php?q="+str,true);
  xmlhttp.send();
 
}
    


