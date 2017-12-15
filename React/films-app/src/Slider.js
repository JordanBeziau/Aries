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
    const {slides} = this.props
    const {activeSlide} = this.state
    return (
      <div 
        className='full-container'
        style={{background: `url(${slides[activeSlide].img}) no-repeat center center`}}
      >
        <div>
          <h1>{slides[activeSlide].name}</h1>
          <h2>{slides[activeSlide].description}</h2>
        </div>
      </div>
    )
  }
}

export default Slider