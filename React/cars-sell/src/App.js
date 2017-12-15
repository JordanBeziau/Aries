import React, { Component } from 'react';
import Car from './Car'
import {Grid} from 'semantic-ui-react'

class App extends Component {
  state = {
    cars: [
      {
        brand: 'Renault',
        model: 'Twingo',
        img: 'twingo.png',
        description: 'Notre gamme Affaire est idéale pour les déplacements réguliers, sur autoroutes et en agglomération.',
        sold: false
      },
      {
        brand: 'Volkswagen',
        model: 'Golf',
        img: 'golf.png',
        description: 'Les véhicules Monospace en location sont proposés au sein du réseau',
        sold: false
      },
      {
        brand: 'Mercedes',
        model: 'XZR8',
        img: 'mercedes.png',
        description: 'Les véhicules de prestige vous attendent dans les agences de location',
        sold: false
      }
    ]
  }

  isSold = (index) => {
    const sold_car = {...this.state.cars}
    sold_car[index].sold = true
    this.setState(sold_car)
  }

  render() {
    return (
      <div>
        <Grid stackable>
          <Grid.Row>
            {
              this.state.cars.map((elem, index) => {
                return (
                  <Grid.Column width={4} key={index}>
                    <Car content={elem} index={index} 
                      onEvent={this.isSold} />
                  </Grid.Column>
                )
              })
            }
          </Grid.Row>
        </Grid>
      </div>
    )
  }
}

export default App;
