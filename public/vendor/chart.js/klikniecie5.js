var tablica = []; //a table of all inputs from document
var tablica2 =[]; // realy table of inputs (further we must delete hidden inputs and these with null value from tablica[]):
var tablica3 =[];
var wtrink='';
var tab_tytulow=[];//table of clicket titles(headers)
var a='', r='',na,p='';
var parent;
var count=0;
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
   
   if(ev.target.id=='zbiornik'){}
   else
{ 
    p=ev.target.id;
    console.log(p);
    tab_tytulow[count]=p;
    count++;
    ev.target.style.background='red';}
      });
 }


 function d() {
     
    /*for(var i=0;i<=tab_tytulow.length;i++){ 
           a= tab_tytulow[tab_tytulow.length];
    
    if(a==tab_tytulow[i]){
        tab_tytulow[i] = tab_tytulow[j];
    }
    else { r+=tab_tytulow[j]+'\n';
}*/
    

     for(var i=tab_tytulow.length;i=0;i--){ 
        console.log(tab_tytulow[i]);
         if(tab_tytulow[i]==tab_tytulow[i+1]){
            tab_tytulow.splice(tab_tytulow[i]);
            //alert(tab_tytulow[i]);  
         }
         console.log(i);
        }
/*there are 2 right way to print of conntent:
alert(r);
var fa=document.getElementById("zbiornik");
fa.textContent=r;*/
 //maybe  hidden inputs?
 /*
 yes - now (in onclick d()- click on "Import do bazy") js makes hidden inputs for choosed by user column-names in the div: "zbiornik".
 This is form passed on by routing to base (but in php e.g. echo"<input type="hidden..... - hmmm...how will do deal the blade-templates with this...?
 */ 
 var fa=document.getElementById("zbiornik");
 //seting text in div zbiornik:
 //fa.textContent=r;
 var ra= document.getElementById("karta");
    ra.removeChild(fa);
na= document.createElement('div');
ra.appendChild(na);
    na.setAttribute("id","zbiornik");
    
 for(var c=0;c<tab_tytulow.length;c++){
   var la = document.createElement('input');
    na.appendChild(la);
    la.setAttribute("id",tab_tytulow[c]);
    la.setAttribute("type","hidden");
    la.setAttribute("name",tab_tytulow[c]);
    la.setAttribute("value",tab_tytulow[c]);
  //console.log(tab_tytulow[c]);
   
 }

    for(var i=0;i<tab_tytulow.length;i++){
    // document.writeln(tab_tytulow[i]);
    }

}
 