//Server port set to 3000.
const io = require('socket.io')(3000);

const users = {} //To hold usernames of all users currently in the chat.

//On connection to our server io, calls this function automatically.
io.on('connection', socket =>{

    //Broadcasts notification when a new user joins with his/her name outputted on their screen only.
    socket.on('newUser', data =>{
        users[socket.id] = data.name; //Assigns name of user as id to distinguish socket.
        userKeys[socket.id] = data.keypair; 
        socket.broadcast.emit('userConnected', data.name);
    });

    //Broadcasts Message to all other users except for you.
    socket.on("sendchatMsg", message => {
        socket.broadcast.emit('chatMsg', {message: message, name: users[socket.id]});
    });

    //Upon discconection, broadcast name of user who disconnected to all other users.
    //Then delete the user from the users list as he disconnected.
    //'disconnect' is a built in function in socket.io!
    socket.on('disconnect', () =>{
        socket.broadcast.emit('userDisconnected', users[socket.id]);
        delete users[socket.id];
    });

});

