const app = require("express");
const fs = require("fs");

let messages = fs.readFileSync("messages.json");

const server = app();

server.use((req, res, next) => {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "*");
    next();
});

server.use(app.json());

server.listen(6969, () => {
    console.log("Server is listening on port 6969");
});

server.post("/send", (req, res) => {
    console.log(req.body);
    let json = {
        email: req.body.email,
        name: req.body.name,
        message: req.body.message
    }
    if (json.email && json.name && json.message) {
        // add to messages.json in messages list
        messages = JSON.parse(messages);
        messages.messages.push(json);
        messages = JSON.stringify(messages);
        fs.writeFileSync("messages.json", messages);
        res.send({status: "Message bien envoyé, go avertir le prof ;)"});
    } else {
        res.send({status: "error"});
    }
});

server.get("/messages", (req, res) => {
    res.send(messages);
});