var miFuncion=(num)=> num*365
var miFuncion2=(num)=> num.toString()
function miFuncion3(num){
	var array2=[]
	array2.push(num)
	array2.push(miFuncion(num))
	return array2
}
function main(){
	var dato=prompt("Ingrese su edad")
	if(dato%2==0){
		var aux=miFuncion(dato)
		console.log(miFuncion2(aux))
	}
	else{
		console.log(miFuncion3(dato))
	}
}
main()



