var tablica = []; //a table of all inputs from document
var tablica2 =[]; // realy table of inputs (further we must delete hidden inputs and these with null value from tablica[]):
var tablica3 =[];
var wtrink='';
var tab_tytulow=[];//table of clicket titles(headers)
var p='',a='', r='';
tablica = document.getElementsByTagName("input");

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
     var f;
        parent = document.querySelector(".classs");
        tablica3 = parent.getElementsByTagName("button");
     parent.addEventListener("click", ev =>
      { 
   p+=ev.target.id+',';
ev.target.style.background='red';
      });
 }
 

 function d() {
    tab_tytulow=p.split(',');
    for(var i=1,j=0;i<=tab_tytulow.length;i++,j++){ 
           a= tab_tytulow[j];
    
    if(a==tab_tytulow[i]){
    }
    else { r+=tab_tytulow[j]+'\n';}
}
    alert(r);
 }