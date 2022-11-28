function redirect(){
 var a1=document.getElementById("username");
 var p1=document.getElementById("password");

 if(a1.value=="admin" && p1.value=="123" )
 location.href ="gradecalc.html";  

 else if(a1.value=="admin" && p1.value!="123" )
 alert ("Please enter the correct password");

else 
location.href="http://facebook.com";
}
//https://forums.caspio.com/topic/9629-use-windowlocation-to-open-2-urls-on-submission/
