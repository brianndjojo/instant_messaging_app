const socket = io('http://localhost:3000');
const messageContainer = document.getElementById('sender');
const messageText = document.getElementById('msgInput');
const sentMessages = document.getElementById('messages');

//This will be replaced. Placeholder for indicating a user has joined.
const name = prompt('Enter your name?');
appendMsg('You connected.');
socket.emit('newUser', name); //Used to send the name of the person who just joined to the server, which is then sent to the other user.

//Outputs name of user who just connected.
socket.on('userConnected', name =>{
   appendMsg(`${name} connected.`);
});

//for recieving message.
socket.on('chatMsg', data => {
    console.log(data);
    appendMsg(`${data.name}:    ${data.message}`);
});

//Outputs name of user who just disconnected.
socket.on('userDisconnected', name =>{
    appendMsg(`${name} disconnected.`);
});

//for sending message.
messageContainer.addEventListener('submit', e => {
    e.preventDefault() //stop our page from refreshing when clicking send.
    const message = messageText.value;
    socket.emit('sendchatMsg', message); //sends message from client to server.
    
    appendMsg(`You: ${message}`); //appends message to chat sent by you!
    
    messageText.value = ''; //clears messageText for new messages.
});


//Appends message to chat.
function appendMsg(message){
    const msgElement = document.createElement('div');
    msgElement.innerText = message;
    sentMessages.append(msgElement);
}