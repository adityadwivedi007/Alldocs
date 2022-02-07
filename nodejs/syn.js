var fs = require("fs");
fs.readFile('index.txt',function(err,data){
    if(err){
        return console.error(err);
    }
    console.log("Asynchronous read:"+data.toString());

});

//synchronous read
var data = fs.readFileSync('index.txt');
console.log("synchronous read:" +data.toString());

console.log("Program Ended");