import React, { Component } from "react";
import { Menu } from "semantic-ui-react";
import { Link } from "react-router-dom";

export default class extends Component {
  render() {
    const { admin } = this.props;
    return (
      <Menu borderless color={admin && "orange"} inverted attached>
        {admin && <Menu.Item>ADMIN</Menu.Item>}
        <Link to="/">
          <Menu.Item>Accueil</Menu.Item>
        </Link>
        <Link to="/admin/pages">
          <Menu.Item>Admin pages</Menu.Item>
        </Link>
      </Menu>
    );
  }
}
