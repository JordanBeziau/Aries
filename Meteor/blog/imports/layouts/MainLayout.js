import React, { Component } from "react";
import { Switch, Route } from "react-router-dom";
import { Grid } from "semantic-ui-react";

import Landing from "/imports/pages/general/Landing";
import NotFound from "/imports/pages/general/NotFound";

import Navbar from "/imports/components/navigation/Navbar";

export default class extends Component {
  render() {
    return (
      <Grid stackable>
        <Grid.Column width={16}>
          <Navbar />
        </Grid.Column>
        <Grid.Column width={16} padded="horizontaly">
          <Switch>
            <Route exact path="/" component={Landing} />
            <Route path="*" component={NotFound} />
          </Switch>
        </Grid.Column>
      </Grid>
    );
  }
}
