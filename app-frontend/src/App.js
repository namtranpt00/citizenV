import React from 'react';
import logo from './logo.svg';
import './App.css';
import axios from 'axios';

function App() {

    var res = fetch('http://127.0.0.1/api/home', {
        method: "get",
        headers: {
            "Content-Type": "application/json"
        }
    })
    console.log(res)



    return (
        <div className="App">
            <header className="App-header">
                <img src={logo} className="App-logo" alt="logo"/>
                <p>
                    Edit <code>src/App.js</code> and save to reload. helu
                </p>
                <a
                    className="App-link"
                    href="https://reactjs.org"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Learn React
                </a>
            </header>
        </div>

    );

}

export default App;
