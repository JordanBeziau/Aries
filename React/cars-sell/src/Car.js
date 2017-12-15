import React, {Component} from 'react'
import {Card, Image, Button} from 'semantic-ui-react'

class Car extends Component {
  handleSold = (index) => {
    this.props.onEvent(index)
  }

  render() {
    return (
      <Card>
        <Image src={this.props.content.img} />
        <Card.Content>
          <Card.Header>
            {this.props.content.brand} - {this.props.content.model}
          </Card.Header>
          <Card.Description>
            {this.props.content.description}
          </Card.Description>
        </Card.Content>
        <Card.Content textAlign='right'>
          <Button 
            onClick={() => this.handleSold(this.props.index)} 
            color={this.props.content.sold ? 'red' : 'teal'}
            disabled={this.props.content.sold ? true : false}
          >Acheter !</Button>
        </Card.Content>
      </Card>
    )
  }
}

export default Car