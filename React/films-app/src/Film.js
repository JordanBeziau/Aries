import React, {Component} from 'react'

class Film extends Component {
  render() {
    return (
      <div className='full-container' style={{background: `url(${this.props.content.img}) no-repeat center center`}}>
        <div>
          <h1>{this.props.content.name}</h1>
          <h2>{this.props.content.description}</h2>
        </div>
      </div>
    )
  }
}

export default Film