var express = require('express');
var app = express();


var router = express.Router();
console.log("I'm at least in here . . .");
var pg = require('pg');
/*It says that the password authentication fails for user orange.
If I change the user to postgres then it authenticates but gives me the error 'relation "pattern" does not exist at Connection.parseE' basically it seems to be talking about the table name.*/
var conString = "postgres://postgres:19Faye96@localhost:5432/postgres";
  
 app.set('port', (process.env.PORT || 5000))
    .use(express.json())
    .use(express.urlencoded({extended:true}))
    .get('/allPatterns', handleAllPatterns)
    .get('/onePattern:id', handleSinglePattern)
/*For database connection test purposes only*/
    .get('/test', testing123)
    .post('/newPattern', newPattern)
    .use('/updatePattern:id', updatePattern)
    .listen(app.get('port'), function(){
        console.log('Listening on port: ' + app.get('port'));
});


function newPattern(req, res){
    console.log('Creating new pattern...');
    
    
    /*Collects the data from the form and places it into variables*/
    var pattern_name = req.body.pattern_name;
    var author_name = req.body.author_name;
    var img_url = req.body.img_url;
    var instructions = req.body.instructions;
    
    console.log('The Pattern Name is: ' + pattern_name);
    console.log('The Author Name is: ' + author_name);
    console.log('The Image URL is: ' + img_url);
    console.log('The Instructions are: ' + instructions);
    
    res.json({success:true});
}

function updatePattern(req, res){
    console.log('Updating a pattern...');
    
    
    /*Collects the data from the form and places it into variables*/
    var pattern_name = req.body.pattern_name;
    var author_name = req.body.author_name;
    var img_url = req.body.img_url;
    var instructions = req.body.instructions;
    
    console.log('The Pattern Name is: ' + pattern_name);
    console.log('The Author Name is: ' + author_name);
    console.log('The Image URL is: ' + img_url);
    console.log('The Instructions are: ' + instructions);
    
    res.json({success:true});
}

function handleAllPatterns(req, res){
    console.log('Pulling up all patterns....');
    
    var resultList = [{id:1, pattern_name:'Itty Bitty Giraffe', author_name:'Aleseea Pennington', img_url:'ittyBittyGiraffe.jpg', instructions:'REPLACE THIS LATER'}];
    res.json(resultList);
}

function handleSinglePattern(req, res){
    console.log('Pulling up one pattern....');
}


/*Attempting to connect to my database
The password authentification keeps failing*/
function testing123(req, res) {
  console.log("I'm doing something in here . . .");
  var pattern_id = req.query.id;
  var client = new pg.Client(conString);
  client.connect(function(err) {
    if (err) {
      return console.error('ERROR: ', err);
    }
      var statement = 'SELECT pattern_name FROM pattern WHERE pattern_id = $1::int';
      var params = [pattern_id];
      var query = client.query(statement, params, function(err, result) {
        console.log("Queried something");
        client.end(function(err) {
          if (err) {
            return console.error('ERROR: ', err);
          }
        });

        if (err) {
          return console.error('ERROR: ', err);
        }
        console.log("Results: " + JSON.stringify(result.rows));
        res.send(result);
      });
    })
}