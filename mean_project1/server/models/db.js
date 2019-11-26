const mongoose = require('mongoose');

mongoose.connect(process.env.MONGODB_URI, (err) => {
    if(!err) { console.log('Mongodb Connection succeeded!!')}
    else {console.log('Error in Mongodb Connection ' + JSON.stringify(err, undefined, 2))}
});

require('./user.model');