import React, {Component} from 'react'

class Student extends Component {
  remove = () => {
    this.props.onRemove(this.props.index)
  }
  render() {
    return (
      <div>
        <p key={this.props.id}>
          {this.props.student.name} - {this.props.student.age} ans
          <button 
          onClick={this.remove}
          className="close"
          >X</button>
        </p>
      </div>
    )
  }
}

export default Student