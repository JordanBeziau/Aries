import React, { Component } from "react";

export default class extends Component {
  create_page = () => {
    const new_page = {
      title: "Ma première page",
      description: "Ma première page enregistrée dans la BDD",
      active: true,
      created_at: new Date()
    };
    Meteor.call("dynamic_pages.insert", new_page);
  };

  render() {
    return (
      <div>
        <h1>Landing</h1>
        <button onClick={this.create_page}>Créer une page</button>
      </div>
    );
  }
}
