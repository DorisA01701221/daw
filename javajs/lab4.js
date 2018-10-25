//las comillas simples en php y jvs se procesa más rápido
//case1 
function hacer_tabla(){
    let num= prompt('dame un numero');
    console.log(num);
    let res=1;
    document.write('<ul>');
    for(let i=1;i<=num;i++){
        res *=i;
        document.write('<li> res: '+res +' cuadrado: ' + (i*i) +' cubo: ' +(i*i*i) +'</li>' );
    }
    document.write('</ul>')
}
//case2
function adivina_suma(){
    let tiempo=Date.now();
    let num1, num2;
    num1= Math.random()*10;
    num2= Math.random()*10;
    let res=prompt('cuanto crees que es la suma?: ');
    if(res != (num1+num2)){
        alert('incorrecto :(  ' + 'tardaste: '+ ((Date.now()-tiempo)/1000)+'s');
    }else{
        alert('correcto :D  '+ 'tardaste: '+ ((Date.now()-tiempo)/1000)+'s');
    }
}   
//case3
function contador(){
    let arreglo=[0,-4,1,8,-4,0,1,1];
    let bigger=0;
    let smaller=0;
    let ceros=0;
    arreglo.forEach(function(element){
       if(element<0){
           smaller++;
       }else if(element>0){
           bigger++;
       }else{
           ceros++;
       }
    });
    alert('total negativos: '+smaller+' total positivos: '+bigger+' total ceros: '+ceros);
}
//case4
function promedios(){
   let arreglo=[[6.7,8.9,5.6],[9.0,10.0,8.9],[7.5,6.7,8.9]]; 
   arreglo.forEach(function(element) {
       let sum=0;
       let elements=element.length;
       element.forEach(function(el){
           sum +=el;
       });
       alert('el promedio es= '+(sum/elements));
   });
}
//case5
function inverso(){
   let num= prompt('dame un numero de más de 2 dígitos: '); 
   let len=num.length;
   let numIn="";
   while(len>= 0){
       numIn=numIn+num.charAt(len);
       len--;
   }
   alert('el invero es: '+numIn);
}
//case6
class calculator{
    suma(num1,num2){
        return num1+num2;
    }
    resta(num1,num2){
        return num1-num2;
    }
    multi(num1,num2){
        return num1*num2;
    }
    divi(num1, num2){
        return num1/num2;
    }
} 
var n=new calculator();
function suma(){
    let num1=document.getElementById("num1").value;
    let num2=document.getElementById("num2").value;
    document.getElementById("res").value=n.suma(parseInt(num1),parseInt(num2));
}
function resta(){
    let num1=document.getElementById("num1").value;
    let num2=document.getElementById("num2").value;
    document.getElementById("res").value=n.resta(parseInt(num1),parseInt(num2));
}
function multi(){
    let num1=document.getElementById("num1").value;
    let num2=document.getElementById("num2").value;
    document.getElementById("res").value=n.multi(parseInt(num1),parseInt(num2));
}
function divi(){
    let num1=document.getElementById("num1").value;
    let num2=document.getElementById("num2").value;
    document.getElementById("res").value=n.divi(parseInt(num1),parseInt(num2));
}