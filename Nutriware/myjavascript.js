function showDbutton(){
    document.getElementById("Dbutton").style.display= "block";
}


function checkPass(pass){
    {  
 
   var userInput = pass;    
   if(userInput.length >= 6 && userInput.length <= 100)  
      {       
        return true;      
      }  
   else  
      {       
    alert("Το Password πρέπει να είναι απο 6 εώς 100 χαρακτήρες!");         
        return false;     
      }    
} 
}

function calcBmi(height){
    var weight=document.getElementById("weight").value;
    var height1=height/100;
    
    var height2=height1*height1;
 if( height==0 || weight==0){
     document.getElementById("bmi").value=0;
    }else if(!(weight==null && weight==" " &&  height==null && height==" ")){
         document.getElementById("bmi").value=weight/height2;
     }
   
    
}

function showFood(str) {
    
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("info").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","tables2.php",true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("q="+str);
    }
}

function showBlood(str){
     if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("info").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","bloodwork1.php",true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("q="+str);
    }
}

function showChem(str){
     if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("info").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","chemwork1.php",true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("q="+str);
    }
}

function showDiet(str){
     if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("info").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","history1.php",true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("q="+str);
    }
}

function openTab(url) {
  
  var win = window.open(url, '_blank');
  win.focus();
  win.close();
}

function openNav() {
    
    var width=mywindow();
    if(width<768){
        document.getElementById("mySidenav1").style.width = "250px";
    }else{
        document.getElementById("mySidenav").style.width = "250px";
    }
 
}

function closeNav() {
     var width=mywindow();
    if(width<768){
        document.getElementById("mySidenav1").style.width = "0";
    }else{
        document.getElementById("mySidenav").style.width = "0";
    }
   
}

function mywindow(){
     var viewportwidth;
 var viewportheight;
  
 // the more standards compliant browsers (mozilla/netscape/opera/IE7) use window.innerWidth and window.innerHeight
  
 if (typeof window.innerWidth != 'undefined')
 {
      viewportwidth = window.innerWidth,
      viewportheight = window.innerHeight
 }
  
// IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
 
 else if (typeof document.documentElement != 'undefined'
     && typeof document.documentElement.clientWidth !=
     'undefined' && document.documentElement.clientWidth != 0)
 {
       viewportwidth = document.documentElement.clientWidth,
       viewportheight = document.documentElement.clientHeight
 }
  
 // older versions of IE
  
 else
 {
       viewportwidth = document.getElementsByTagName('body')[0].clientWidth,
       viewportheight = document.getElementsByTagName('body')[0].clientHeight
 }

return viewportwidth;
//-->
}
/* Set the width of the side navigation to 0 */


function dairy(val){
            document.getElementById("td1").innerHTML=12*val;
            document.getElementById("td2").innerHTML=8*val;
            document.getElementById("td4").innerHTML=90*val;
            
        }
        function veg(val){
            document.getElementById("td5").innerHTML=5*val;
            document.getElementById("td6").innerHTML=2*val;
            document.getElementById("td8").innerHTML=25*val;
        }
        function cereal(val){
            document.getElementById("td9").innerHTML=15*val;
            document.getElementById("td10").innerHTML=3*val;
            document.getElementById("td12").innerHTML=80*val;
        }
        function fruits(val){
            document.getElementById("td13").innerHTML=15*val;
            document.getElementById("td16").innerHTML=60*val;
            
        }
        function meat1(val){
            document.getElementById("td18").innerHTML=7*val;
            document.getElementById("td19").innerHTML=0 +'-'+ val;
            document.getElementById("td20").innerHTML=35*val;
        }
        function meat2(val){
            document.getElementById("td22").innerHTML=7*val;
            document.getElementById("td23").innerHTML=3*val;
            document.getElementById("td24").innerHTML=55*val;
        }
        function meat3(val){
            document.getElementById("td26").innerHTML=7*val;
            document.getElementById("td27").innerHTML=5*val;
            document.getElementById("td28").innerHTML=75*val;
        }
        function meat4(val){
            document.getElementById("td30").innerHTML=7*val;
            document.getElementById("td31").innerHTML=8*val;
            document.getElementById("td32").innerHTML=100*val;
        }
        function fats(val){
            document.getElementById("td35").innerHTML=5*val;
            document.getElementById("td36").innerHTML=45*val;
        }
        function total(){
            var dairy=document.getElementById("dairy").value;
            var veg=document.getElementById("veg").value;
            var cereal=document.getElementById("cereal").value;
            var fruits=document.getElementById("fruits").value;
            var meat1=document.getElementById("meat1").value;
            var meat2=document.getElementById("meat2").value;
            var meat3=document.getElementById("meat3").value;
            var meat4=document.getElementById("meat4").value;
            var fats=document.getElementById("fats").value;
            var trans=12*dairy+5*veg+15*cereal+15*fruits;
            document.getElementById("td38").innerHTML=trans;
            
            var proteins=8*dairy+2*veg+3*cereal+7*meat1+7*meat2+7*meat3+7*meat4;
            document.getElementById("td39").innerHTML=proteins;
            
            var fatties0=3*meat2+5*meat3+8*meat4+5*fats;
            var fatties1=3*meat2+5*meat3+8*meat4+5*fats+1*meat1;
            document.getElementById("td40").innerHTML=fatties0 +'-'+fatties1;
            
            var kcal=90*dairy+25*veg+80*cereal+60*fruits+35*meat1+55*meat2+75*meat3+100*meat4+45*fats;
            document.getElementById("td41").innerHTML=kcal;
            
            
        }
        
        
        
        
     