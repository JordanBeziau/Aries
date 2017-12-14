import React from 'react'
import ReactDOM from 'react-dom'
import 'semantic-ui-css/semantic.min.css';
import App from './App.js'
import registerServiceWorker from './registerServiceWorker'

ReactDOM.render(<App color="lightblue" />, document.getElementById('root'))
registerServiceWorker()
