import React, { Component } from "react";
import "./App.css";
import { Statistic, Grid } from "semantic-ui-react";

class App extends Component {
  state = {
    ask: null,
    bid: null,
    last: null,
    gain_bid: 0,
    gain_ask: 0,
    gain_last: 0
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
            gain_bid: this.gainSetState(
              this.state.gain_bid,
              this.state.bid,
              json.result.Bid
            ),
            gain_ask: this.gainSetState(
              this.state.gain_ask,
              this.state.ask,
              json.result.Ask
            ),
            gain_last: this.gainSetState(
              this.state.gain_last,
              this.state.last,
              json.result.Last
            )
          });
        });
    }, 1000);
  };

  gainSetState = (gain, value, new_value) => {
    const new_gain = (new_value - value) / value * 100;
    return gain !== new_gain && new_gain !== 0 ? new_gain : gain;
  };

  componentDidMount = () => {
    this.getData();
  };

  render() {
    return (
      <div className="App">
        <h1>Bittrex</h1>
        <Grid divided="vertically" stackable>
          <Grid.Row columns={2}>
            <Grid.Column>
              <Statistic size="small">
                <Statistic.Value>{this.state.bid}</Statistic.Value>
                <Statistic.Label>Bid</Statistic.Label>
              </Statistic>
            </Grid.Column>
            <Grid.Column>
              <Statistic size="small">
                <Statistic.Value
                  style={{ color: this.state.gain_bid > 0 ? "green" : "red" }}
                >
                  {Math.floor(this.state.gain_bid * 10000000) / 10000000} %
                </Statistic.Value>
                <Statistic.Label>Gain</Statistic.Label>
              </Statistic>
            </Grid.Column>
          </Grid.Row>
        </Grid>
        <Grid divided="vertically" stackable>
          <Grid.Row columns={2}>
            <Grid.Column>
              <Statistic size="small">
                <Statistic.Value>{this.state.ask}</Statistic.Value>
                <Statistic.Label>Ask</Statistic.Label>
              </Statistic>
            </Grid.Column>
            <Grid.Column>
              <Statistic size="small">
                <Statistic.Value
                  style={{ color: this.state.gain_ask > 0 ? "green" : "red" }}
                >
                  {Math.floor(this.state.gain_ask * 10000000) / 10000000} %
                </Statistic.Value>
                <Statistic.Label>Gain</Statistic.Label>
              </Statistic>
            </Grid.Column>
          </Grid.Row>
        </Grid>
        <Grid divided="vertically" stackable>
          <Grid.Row columns={2}>
            <Grid.Column>
              <Statistic size="small">
                <Statistic.Value>{this.state.last}</Statistic.Value>
                <Statistic.Label>Last</Statistic.Label>
              </Statistic>
            </Grid.Column>
            <Grid.Column>
              <Statistic size="small">
                <Statistic.Value
                  style={{ color: this.state.gain_last > 0 ? "green" : "red" }}
                >
                  {Math.floor(this.state.gain_last * 10000000) / 10000000} %
                </Statistic.Value>
                <Statistic.Label>Gain</Statistic.Label>
              </Statistic>
            </Grid.Column>
          </Grid.Row>
        </Grid>
      </div>
    );
  }
}

export default App;
