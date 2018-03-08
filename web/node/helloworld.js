var http = require('http');
http.createServer(onRequest).listen(8080);

function onRequest(req, res) {    
    
    if (req.url === "/home"){
        res.writeHead(200, {'Content-Type': 'text/html'});
        res.write('<h1>Welcome to the Home page</h1>');
    }
    else if(req.url === "/getData"){
        res.writeHead(200, {'Content-Type': 'application/json'});
        var person = { "name":"Aleseea Pennington", "class":"cs313"};
        res.write(person['name'] + " - " + person['class']);
        /*res.write(" - ");
        res.write(person['class']);*/
    }
    else if(req.url === "/add"){
        res.writeHead(200, {'Content-Type': 'text/html'});
        var stuff = "Cheese!";
        res.write(stuff, '<button type="button" onclick="stuff">Say Cheese</button>');
                
        
    }
    else{
        res.writeHead(404, {'Content-Type': 'text/html'});
        res.write('<h1>Error 404 Page not found</h1><p>The requested URL was not found on the server</p>');
    }
    res.end();
}