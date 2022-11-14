import logo from './logo.svg';
import './App.css';

function App() {

    let email = '';
    let name = '';
    let message = '';

    function submit(event){
        event.preventDefault();
        let json = {
            email: email,
            name: name,
            message: message
        }
        console.log(json);
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "http://localhost:6969/send", true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.send(JSON.stringify(json));

        xhr.onload = function(){
            let validation = document.getElementById("validation");
            validation.innerHTML = xhr.response;
        }

    }

  return (
    <div className="send-message">
        <div className="send-message_title">
            <h1>Send Message</h1>
        </div>
        <div className="send-message_form">
            <form>
                <div className="send-message_form__input">
                    <label htmlFor="name">Name</label>
                    <input type="text" id="name" name="name" onChange={event => name = event.target.value} />
                </div>
                <div className="send-message_form__input">
                    <label htmlFor="email">Email</label>
                    <input type="email" id="email" name="email" onChange={event => email = event.target.value} />
                </div>
                <div className="send-message_form__input">
                    <label htmlFor="message">Message</label>
                    <textarea id="message" name="message" rows="5" onChange={event => message = event.target.value}></textarea>
                </div>
                <div className="send-message_form__input">
                    <button onClick={submit} type="submit">Send</button>
                </div>
                <div id='validation'></div>
            </form>
        </div>
    </div>
  );
}

export default App;
