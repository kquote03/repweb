function calculateGrade(){
    
    var f1 = parseFloat(document.getElementById("q1").value);
    var f2 = parseFloat(document.getElementById("q2").value);
    var f3 = parseFloat(document.getElementById("a1").value);
    var f4 = parseFloat(document.getElementById("a2").value);
    var f5 = parseFloat(document.getElementById("mid").value);
    var f6 = parseFloat(document.getElementById("fin").value);
    var result=f1+f2+f3+f4+f5+f6;
    if(result>=90 && result <=100 )
    document.getElementById("submitbutton").innerHTML= "The Grade is: A";
    else if (result>=85 && result<=89)
    document.getElementById("submitbutton").innerHTML= "The Grade is: B+";
    else if (result>=80 && result<=84)
    document.getElementById("submitbutton").innerHTML= "The Grade is: B";
    else if (result>=75 && result<=79)
    document.getElementById("submitbutton").innerHTML= "The Grade is: C+";
    else if (result>=70 && result<=74)
    document.getElementById("submitbutton").innerHTML= "The Grade is: C";
    else if (result>=65 && result<=69)
    document.getElementById("submitbutton").innerHTML= "The Grade is: D+";
    else if (result>=60 && result<=64)
    document.getElementById("submitbutton").innerHTML= "The Grade is: D";
    else if (result<60)
    document.getElementById("submitbutton").innerHTML= "The Grade is: F";
    else
    document.getElementById("submitbutton").innerHTML= "Wrong values, please re-enter";
    
    document.getElementById("submitbutton").style.font= "30px Georgia,serif";
    document.getElementById("submitbutton").style.color= "#dcb7f4";
    div.style.display = 'none';
}