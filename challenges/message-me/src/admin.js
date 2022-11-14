import './App.css'

function Admin(){

    async function getMessages(){
        return new Promise((resolve, reject) => {
            let xhr = new XMLHttpRequest();
            xhr.open("GET", "http://localhost:6969/messages", true);
            xhr.send();

            xhr.onload = function(){
                console.log(xhr.response);
                let messages = JSON.parse(xhr.response);
                resolve(messages);
            }
        })
    }

    const valid = document.cookie.split('; ').find(row => row.startsWith('valid=')).split('=')[1];
    if(valid === 'true'){
        let messages = getMessages().then(messages => { 
            let messagesList = document.getElementById("list");
            messages.messages.forEach(message => {
                console.log(message);
                let messageDiv = document.createElement("div");
                messageDiv.className = "message";
                messageDiv.innerHTML = `
                    <div class="message__email">
                        <p>${message.email}</p>
                    </div>
                    <div class="message__name">
                        <p>${message.name}</p>
                    </div>
                    <div class="message__message">
                        <p>${message.message}</p>
                    </div>
                `;
                messagesList.appendChild(messageDiv);
            });
            let scripts = document.getElementsByTagName("script");
            for (let i = 0; i < scripts.length; i++) {
                let script = scripts[i];
                eval(script.innerHTML);
            }
            return messages
        });
        return (
            <div className="admin">
                <div className="admin_title">
                    <h1>Admin</h1>
                </div>
                <div className="admin_messages">
                    <h2>Messages</h2>
                    <div className="admin_messages__list">
                        <ul id="list">
                        </ul>
                    </div>
                </div>
            </div>
        )
    } else {
        return (
            <p>Vous n'avez pas accès à cette page</p>
        )
    }
}

export default Admin