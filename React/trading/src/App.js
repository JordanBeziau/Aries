import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

class App extends Component {

  componentDidMount = () => {
    setInterval(async () => {
      const response = await fetch('https://bittrex.com/api/v1.1/public/getticker?market=BTC-LTC')
      console.log('Response Bittrex', response)
    }, 2000)
  }

  render() {
    return (
      <div className="App">
      </div>
    );
  }
}

export default App;
