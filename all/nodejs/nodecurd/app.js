const path = require('path');
const express= require('express');
const ejs = require('body-parser');
const mysql = require('mysql');
const bodyParser = require('body-parser');
const { connect } = require('http2');
const app = express();

// const mysql = require('mysql');
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database:'curd'
});

connection.connect(function(error){
    if(!!error) console.log(error);
    else console.log('Database Connected!');
});
//set view file
app.set('views',path.join(__dirname,'views'));

//set view engine

app.set('view engine','ejs');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended:false}));
 

app.get('/',(req,res)=>{
// res.send('CRUD opertion using nodejs / Expressjs /Mysql')

let sql = "SELECT * from user";
let query = connection.query(sql,(err,rows)=>{
    if(err) throw err;
    res.render('user_index',{
        title : 'CRUD opertion using nodejs/ Express /mysql',
        user : rows
        

    });
  });
});
 
app.get('/add',(req,res)=>{
    res.send('new user for');

});


//server Listing
app.listen(3000,()=>{
    console.log('server is running at port 3000');
})