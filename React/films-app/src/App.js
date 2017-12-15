import React, { Component } from 'react';
import {Grid} from 'semantic-ui-react'
import './App.css'
import Film from './Film'


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
    ],
    activeFrame: 0
  }

  changeFrame = () => {
    setInterval(() => {
      this.setState(
        {
          activeFrame : 
            this.state.activeFrame === this.state.films.length - 1
              ? 0
              : this.state.activeFrame + 1
        }
      )
    }, 4000)
  }

  componentDidMount = () => {
    this.changeFrame()
  }

  render() {
    return (
      <div className='App'>
        {
          <Film 
            content={this.state.films[this.state.activeFrame]} 
            index={this.state.activeFrame} 
          />
        }
      </div>
    );
  }
}

export default App;
