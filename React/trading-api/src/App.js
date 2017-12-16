import React, { Component } from "react";
import "./App.css";
import { Statistic, Grid } from "semantic-ui-react";

class App extends Component {
  state = {
    ask: null,
    bid: null,
    last: null,
    gain: 0
  };

  _fetch = () => {
    const url = "/bittrex/api/v1.1/public/getticker?market=BTC-LTC";
    return fetch(url);
  };

  getData = () => {
    setInterval(() => {
      this._fetch()
        .then(response => response.json())
        .then(json => {
          this.setState({
            ask: json.result.Ask,
            bid: json.result.Bid,
            last: json.result.Last,
            gain: this.gainSetState(
              this.state.gain,
              this.state.bid,
              json.result.Bid
            )
          });
        });
    }, 1000);
  };

  gainSetState = (gain, bid, new_bid) => {
    const new_gain = (new_bid - bid) / bid * 100;
    return gain !== new_gain && new_gain !== 0 ? new_gain : gain;
  };

  componentDidMount = () => {
    this.getData();
  };

  render() {
    console.log(this.state);
    return (
      <div className="App">
        <h1>Bittrex</h1>
        <Grid centered>
          <Statistic.Group>
            <Statistic>
              <Statistic.Value>{this.state.bid}</Statistic.Value>
              <Statistic.Label>Bid</Statistic.Label>
            </Statistic>
            <Statistic>
              <Statistic.Value>{this.state.ask}</Statistic.Value>
              <Statistic.Label>Ask</Statistic.Label>
            </Statistic>
            <Statistic>
              <Statistic.Value
                style={{ color: this.state.gain > 0 ? "green" : "red" }}
              >
                {Math.floor(this.state.gain * 10000000) / 10000000} %
              </Statistic.Value>
              <Statistic.Label>Gain</Statistic.Label>
            </Statistic>
            <Statistic>
              <Statistic.Value>{this.state.last}</Statistic.Value>
              <Statistic.Label>Last</Statistic.Label>
            </Statistic>
          </Statistic.Group>
        </Grid>
      </div>
    );
  }
}

export default App;
