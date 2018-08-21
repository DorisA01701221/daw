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