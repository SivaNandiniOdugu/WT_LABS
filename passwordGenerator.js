function Generatepassword(length,includesLowercase,includesUppercase,includesNumbers,includesSplSymbols){
   
    const lowecaseChars="abcdefghijklmnopqrstuvwxyz";
    const uppercaseChars="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const Numbers="0123456789";
    const SplChars="!@#$%^&*()_-+=?";
    
    let allowedChars=""
    let password=""

 
    allowedChars+=includesLowercase?lowecaseChars:"";
    allowedChars+=includesUppercase?uppercaseChars:"";
    allowedChars+=includesNumbers?Numbers:"";
    allowedChars+=includesSplSymbols?SplChars:"";


    if(length<=0){
        console.log("password not to be empty!")
    }

    if(allowedChars.length==0){
        console.log("Atleast one charset should inculde!! ")
    }
     
   for(i=0;i<=length;i++){
    randomIndex= Math.floor(Math.random() * allowedChars.length)
    password+=allowedChars[randomIndex]
   }

 

    return password;

    
}

const passwordlength=12;
const includesLowercase=true;
const includesUppercase=false;
const includesNumbers=false;
const includesSplSymbols=true;



const password=Generatepassword(passwordlength,includesLowercase,includesUppercase,includesNumbers,includesSplSymbols);
console.log(`The password is : ${password}`);