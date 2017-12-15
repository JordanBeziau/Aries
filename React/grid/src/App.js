import React, { Component } from 'react';
import {Grid, Input, Form, Label} from 'semantic-ui-react'

class App extends Component {
  state = {
    nav: 'auto',
    col1: 8,
    col2: 8,
    footer: 'auto'
  }

  handleChangeSize = (attr, event) => {
    const new_size = {}
    new_size[attr] = event.target.value
    this.setState(new_size)
  }

  render() {
    return (
      <div>
        <Grid>
          <Grid.Column width={16}>
          <Form>
          <Label>NavBar 
            <Input
              type='text'
              onChange={(event) => this.handleChangeSize('nav', event)}
              value={this.state.nav}
            />
          </Label>
          <Label>Column 
            <Input
              type='number'
              onChange={(event) => this.handleChangeSize('col1', event)}
              value={this.state.col1}
            />
          </Label>
          <Label>Column 
            <Input
              type='number'
              onChange={(event) => this.handleChangeSize('col2', event)}
              value={this.state.col2}
            />
          </Label>
          <Label>Footer 
            <Input
              type='text'
              onChange={(event) => this.handleChangeSize('footer', event)}
              value={this.state.footer}
            />
          </Label>
          </Form>
          </Grid.Column>
        </Grid>
        <Grid>
          <Grid.Column width={16} textAlign="center" style={{background:"lightblue", height: this.state.nav}}>
            NavBar
          </Grid.Column>
          <Grid.Column width={this.state.col1} textAlign="center" style={{background:"lightseagreen"}}>
            Column
          </Grid.Column>
          <Grid.Column width={this.state.col2} textAlign="center" style={{background:"#819FF7"}}>
            Column
          </Grid.Column>
          <Grid.Column width={16} textAlign="center" style={{background: '#FA5858', height: this.state.footer}} >
            Footer
          </Grid.Column>
        </Grid>
      </div>
    );
  }
}

export default App;
