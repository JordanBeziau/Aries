import React, { Component } from "react";
import { Switch, Route } from "react-router-dom";

import Landing from "/imports/pages/general/Landing";
import NotFound from "/imports/pages/general/NotFound";

export default class extends Component {
  render() {
    return (
      <Switch>
        <Route exact path="/" component={Landing} />
        <Route path="*" component={NotFound} />
      </Switch>
    );
  }
}
