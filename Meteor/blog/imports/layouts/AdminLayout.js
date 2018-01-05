import React, { Component } from "react";
import { Switch, Route } from "react-router-dom";
import { Grid } from "semantic-ui-react";

import AdminPages from "/imports/pages/admin/AdminPages";

import Navbar from "/imports/components/navigation/Navbar";

export default class extends Component {
  render() {
    return (
      <Grid stackable>
        <Grid.Column width={16}>
          <Navbar admin={true} />
        </Grid.Column>
        <Grid.Column width={16}>
          <Switch>
            <Route path="/admin/pages" component={AdminPages} />
            <Route path="*" component={NotFoundAdmin} />
          </Switch>
        </Grid.Column>
      </Grid>
    );
  }
}

export const NotFoundAdmin = () => {
  return <h1>ADMIN PAGE NOT FOUND</h1>;
};
