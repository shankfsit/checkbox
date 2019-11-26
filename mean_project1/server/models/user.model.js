const mongoose = require('mongoose');
const bcrypt = require('bcryptjs');

var userSchema = new mongoose.Schema({
    fullName : {
        type: String,
        required: 'Full name can\'t be empty'
    },
    email : {
        type: String,
        required: 'Email can\'t be empty',
        unique:true
    },
    password : {
        type: String,
        required: 'Password can\'t be empty',
        minlength:[4, 'Password must be atleast 4 character long']
    },
    saltSecret: String
});

//custom validation for email
// userSchema.path('email').validate((val)=>{
//     emailRegex = /;
//     return emailRegex.test(val);

// }, 'Invalid Email');

userSchema.pre('save', function(next){
    bcrypt.genSalt(10, (err, salt) => {
        bcrypt.hash(this.password, salt, (err, hash) => {
            this.password = hash;
            this.saltSecret = salt;
            next();
        });
    });
});

mongoose.model('User', userSchema);