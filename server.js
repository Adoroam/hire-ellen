var express = require('express');
var app = express();
var port = 80; 

app.use(express.static("dist"));

//LISTEN
app.listen(port, function() {
    console.log("listening on port "+ port);
});
