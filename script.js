
$(document).ready(function(){
alert("g");
  $("#item_code").click(function(){
  
    $.get("item_name.php",function(data,status){
      alert("Data: " + data + "\nStatus: " + status);
    });
   
   function name()
   {
   
   }
   
  });
});

var globalVar;

//for Item Name
function get_item(strG)
{
if(strG=='')
{
 document.getElementById('i_name').innerHTML='';
 return;
}
  if(window.XMLHttpRequest)
 {
  xmlhttp = new XMLHttpRequest();
 }
  else
 {
  xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
 }

xmlhttp.onreadystatechange = function()
{
  if(xmlhttp.readyState==4 && xmlhttp.status==200)
 {
  document.getElementById('i_name').innerHTML=xmlhttp.responseText;
 }
}
globalVar = strG;
xmlhttp.open('GET','item_name.php?item_id='+strG, true);
xmlhttp.send();
return globalVar;
}

