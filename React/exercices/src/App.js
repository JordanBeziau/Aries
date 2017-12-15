import React, { Component } from 'react'
import {Button, Grid} from 'semantic-ui-react'

class App extends Component {
  state = {
    compteur: 0
  }
  addOne = () => {
    this.setState(state => ({
      compteur : state.compteur + 1
    }))
  }
  render() {
    return (
      <Grid centered>
        <Grid.Column textAlign="center" width={16}>{this.state.compteur}</Grid.Column>
        <Grid.Column textAlign="center" width={16}>
          <Button onClick={this.addOne}>+1</Button>
        </Grid.Column>
      </Grid>
    );
  }
}

export default App;
