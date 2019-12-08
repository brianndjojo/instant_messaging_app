const socket = io('http://localhost:3000');

/*socket.on("connect", function(){
    const sessionID = socket.socket.sessionid;
    $.post('getusername.php', {id: sessionID});
});*/

const messageContainer = document.getElementById('sender');
const messageText = document.getElementById('msgInput');
const sentMessages = document.getElementById('messages');

const name = getUsername();
//Gets your username from your login session.
//const name = userData.username;
//const keyPair = userData.key;
console.log(name);
//console.log(keyPair);

//Upon connection, you tell teh server that you connected.
appendConnMsg('You connected.');
socket.emit('newUser', name); //Used to send the name of the person who just joined to the server, which is then sent to the other user.

//Outputs name of user who just connected.
socket.on('userConnected', name =>{
    appendConnMsg(`${name} connected.`);
});

//for recieving message.
socket.on('chatMsg', data => {
    /*Decrypt message here.*/
    //var decryptedData = getdecryptMsg();
    console.log(data);
    appendMsg(`${data.name}:    ${data.message}`);
});

//Outputs name of user who just disconnected.
socket.on('userDisconnected', name =>{
    appendDisMsg(`${name} disconnected.`);
});

//for sending message.
messageContainer.addEventListener('submit', e => {
    e.preventDefault() //stop our page from refreshing when clicking send.
    const message = messageText.value;

    /*Encrypt message here.*/
    /*
    var encryptData = getencryptMsg();
    var encryptedMsg = encryptData.encrypMsg;
    
    console.log(encryptedMsg);
    socket.emit('sendchatMsg', encryptedMsg); //sends message from client to server.
    */
    socket.emit('sendchatMsg', message);
    appendMsg(`You: ${message}`); //appends message to chat sent by you!

    
    //messageText.value = ''; //clears messageText for new messages.
});

////////////////////////////////////////////////////////////////////////////////////////

//Appends message to chat.
function appendMsg(message){
    const msgElement = document.createElement('div');
    msgElement.innerText = message;
    sentMessages.append(msgElement);
}

//Appends connected message to chat.
function appendConnMsg(message){
    const msgElement = document.createElement('div');
    msgElement.classList.add("connected");
    msgElement.innerText = message;
    sentMessages.append(msgElement);
}

//Appends disconnected message to chat.
function appendDisMsg(message){
    const msgElement = document.createElement('div');
    msgElement.classList.add("disconnected");
    msgElement.innerText = message;
    sentMessages.append(msgElement);
}

////////////////////////////////////////////////////////////////////////////////////////

function getUsername(){
    var request = new XMLHttpRequest();
    var data;
    request.onload = function(){
        alert(this.responseText); //this.responseText in built in AJAX.
        data = JSON.parse(this.responseText);
    }
    request.open("get", "getusername.php",false);
    request.send();

    if(request.readyState == 4 && request.status == 200){
        return data;
    }
}

/*function getencryptMsg(){
    var request2 = new XMLHttpRequest();
    var data;
    request2.onload = function(){
        alert(this.responseText); //this.responseText in built in AJAX.
        data = JSON.parse(this.responseText);
    }
    request2.open("get", "encrypt.php", false);

    request2.send();

    if(request2.readyState == 4 && request2.status == 200){
        return data;
    }
}*/






         



