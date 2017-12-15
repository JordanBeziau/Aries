import React, { Component } from 'react';
import {Grid} from 'semantic-ui-react'
import './App.css'
import Slider from './Slider'


class App extends Component {
  state = {
    films: [
      {
        name: 'STAR WARS',
        description: 'May the force be with you',
        img: 'starwars.jpg'
      },
      {
        name: 'INTERSTELLAR',
        description: 'Par dela les étoiles',
        img: 'interstellar.png'
      },
      {
        name: 'JUNGLE',
        description: 'Welcome to the jungle !',
        img: 'jungle.jpg'
      }
    ]
  }

  render() {
    return (
      <div className='App'>
        {
          <Slider
            slides={this.state.films} 
            timer="4000"
          />
        }
      </div>
    );
  }
}

export default App;
