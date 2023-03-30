var username = prompt("Enter username:");
var password = prompt("Enter password:");
var adminpassword = "admin123";
if (password == adminpassword){
    console.log("Welcome," + username + "! You have administrative privileges.");
} else{
    console.log("Welcome," + "!");
}