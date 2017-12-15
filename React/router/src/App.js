import React, { Component } from 'react';
import {
  BrowserRouter as Router,
  Route,
  Link,
  Switch
} from 'react-router-dom'
import LandingPage from './LandingPage'
import AboutPage from './AboutPage'
import NotFoundPage from './NotFoundPage'
import logo from './logo.svg'
import './App.css';

class App extends Component {
  render() {
    return (
      <div>
        <div className="App">
          <header className="App-header">
            <img src={logo} className="App-logo" alt="logo" />
            <h1 className="App-title">Welcome to React-Router</h1>
          </header>
        </div>
        <Router>
          <div>
            <Switch>
              <Route exact path="/" component={LandingPage} />
              <Route path="/about" component={AboutPage} />
              <Route path="/*" component={NotFoundPage} />
            </Switch>
          </div>
        </Router>
      </div>
    );
  }
}

export default App;
