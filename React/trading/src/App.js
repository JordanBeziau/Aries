import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

class App extends Component {
  state = {
    start_amount: null,
    wallet: 100,
    current_btc_value: null
  }

  componentDidMount = () => {
    setInterval(() => {
      const new_state = {...this.state}
      const random_coin_value = Math.random() * (15000 - 9000) + 9000
      new_state.current_btc_value = random_coin_value
      if (this.state.start_amount === null) {
        new_state.start_amount = random_coin_value
        new_state.wallet -= .6 * this.state.wallet
      } else if (this.state.start_amount < random_coin_value) {
        new_state.wallet += .6 * this.state.wallet
      }
      this.setState(new_state)
    }, 1000)
  }

  render() {
    return (
      <div className="App">
        <p></p>
        <p>WALLET : {this.state.wallet}</p>
        <p>CURRENT VALUE : {this.state.current_btc_value}</p>
      </div>
    );
  }
}

export default App;
