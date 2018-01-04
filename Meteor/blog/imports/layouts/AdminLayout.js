import React, { Component } from "react";
import { Switch, Route } from "react-router-dom";

import AdminPages from "/imports/pages/admin/AdminPages";

export default class extends Component {
  render() {
    return (
      <Switch>
        <Route path="/admin/pages" component={AdminPages} />
        <Route path="*" component={NotFoundAdmin} />
      </Switch>
    );
  }
}

export const NotFoundAdmin = () => {
  return <h1>ADMIN PAGE NOT FOUND</h1>;
};
