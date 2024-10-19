const mysql2 = require("mysql2");
 const conexion = mysql2.createConnection({
    host:'localhost',
    user:'root',
    password:'yairbch96',
    database:'mydb'
 });

 conexion.connect((error) => {
   if(error){
    console.log(error)
   }else{
    console.log("Coneccion exitosa")
   }
 })