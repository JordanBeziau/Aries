import React, { Component } from "react";
import { BrowserRouter as Router, Route, Link, Switch } from "react-router-dom";
import LandingPage from "./LandingPage";
import AboutPage from "./AboutPage";
import NotFoundPage from "./NotFoundPage";
import logo from "./logo.svg";
import "./App.css";
import { Menu, Grid } from "semantic-ui-react";

class App extends Component {
  state = {
    activeItem: "home"
  };

  handleItemClick = (e, { name }) => this.setState({ activeItem: name });

  render() {
    const { activeItem } = this.state;
    return (
      <Router>
        <div>
          <div className="App">
            <header className="App-header">
              <img src={logo} className="App-logo" alt="logo" />
              <h1 className="App-title">Welcome to react-router-dom</h1>
              <Grid centered>
                <Grid.Row>
                  <Menu>
                    <Link to="/">
                      <Menu.Item
                        as="span"
                        name="home"
                        active={activeItem === "home"}
                        onClick={this.handleItemClick}
                      >
                        Home
                      </Menu.Item>
                    </Link>
                    <Link to="/about">
                      <Menu.Item
                        as="span"
                        name="about"
                        active={activeItem === "about"}
                        onClick={this.handleItemClick}
                      >
                        About
                      </Menu.Item>
                    </Link>
                    <Link to="/lost">
                      <Menu.Item
                        as="span"
                        name="lost"
                        active={activeItem === "lost"}
                        onClick={this.handleItemClick}
                      >
                        Lost
                      </Menu.Item>
                    </Link>
                  </Menu>
                </Grid.Row>
              </Grid>
            </header>
          </div>
          <div>
            <Switch>
              <Route exact path="/" component={LandingPage} />
              <Route path="/about" component={AboutPage} />
              <Route path="/*" component={NotFoundPage} />
            </Switch>
          </div>
        </div>
      </Router>
    );
  }
}

export default App;
