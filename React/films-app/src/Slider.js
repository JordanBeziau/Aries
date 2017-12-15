import React, {Component} from 'react'

class Slider extends Component {
  state = {
    activeSlide: 0
  }

  changeFrame = () => {
    setInterval(() => {
      this.setState(
        {
          activeSlide : 
            this.state.activeSlide === this.props.slides.length - 1
              ? 0
              : this.state.activeSlide + 1
        }
      )
    }, this.props.timer)
  }

  componentDidMount = () => {
    this.changeFrame()
  }

  render() {
    return (
      <div className='full-container' style={{background: `url(${this.props.slides[this.state.activeSlide].img}) no-repeat center center`}}>
        <div>
          <h1>{this.props.slides[this.state.activeSlide].name}</h1>
          <h2>{this.props.slides[[this.state.activeSlide]].description}</h2>
        </div>
      </div>
    )
  }
}

export default Slider