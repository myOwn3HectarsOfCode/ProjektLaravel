var tablica = []; //a table of all inputs from document
var tablica2 =[]; // realy table of inputs (further we must delete hidden inputs and these with null value from tablica[]):
var tablica3 =[];
var wtrink='';
var tab_tytulow=[];//table of clicket titles(headers)
var tab_tytulow2=[];
var a='', r='',na,p='';
var parent;
var count=0;
tablica = document.getElementsByTagName("input");

//ZBIERANIE INPUTÓW Z CAŁEGO DOKUMENTU 
     for(var i=0,j=0;i<tablica.length;i++,j++){
         tablica2[j]=tablica[i]; 

         if(tablica2[j].getAttribute("value")==null || tablica2[j].getAttribute("name")=='_token'){
             tablica2.pop();
            j=j-1;
            }
                }
                    for(var i=0;i<tablica2.length;i++){  
                       wtrink += tablica2[i].getAttribute("value") + ' ' + '\n';
                    }
                
 function c() {
        parent = document.querySelector(".classs");
        tablica3 = parent.getElementsByTagName("button");
     parent.addEventListener("click", ev =>
      { 
   if(ev.target.id=='zbiornik'){}
   else
{ 
    p=ev.target.id;
    tab_tytulow[count]=p;
    count++;
    ev.target.style.background='red';}
      });
 }


 function d() {
// from table tab_tytulow,for where has clicks clicked button, we must delete repeated writes (I dont know why clicks repeates) 
     for(var i=0,j=1,k=0; i<tab_tytulow.length;i++,j++){ 
       var a =tab_tytulow[i];
         if(a!==tab_tytulow[j]&& a!==null){
            tab_tytulow2[k] = a;
            k++;
         }
        }
 var fa=document.getElementById("zbiornik");
 var ra= document.getElementById("karta");
 //we delete all buttons (child) with header of column from parent )"karta"
    ra.removeChild(fa);
    //create element div
na= document.createElement('div');
//adding this div as child-element
ra.appendChild(na);
//setting atribute id
    na.setAttribute("id","zbiornik");
    
    //here we create inputs with atributes, to passing on choosed by user names of columns of csv to database
 for(var c=0;c<tab_tytulow2.length;c++){
   var la = document.createElement('input');
    na.appendChild(la);
    la.setAttribute("id",tab_tytulow2[c]);
    la.setAttribute("type","hidden");
    la.setAttribute("name",tab_tytulow2[c]);
    la.setAttribute("value",tab_tytulow2[c]);  
    
 }
 
}
 

 