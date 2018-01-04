import React, { Component } from "react";

export default class extends Component {
  state = {
    title: "",
    description: ""
  };

  handleChange = (attr, event) => {
    const new_state = { ...this.state };
    new_state[attr] = event.target.value;
    this.setState(new_state);
  };

  create_page = event => {
    event.preventDefault();
    Meteor.call("dynamic_pages.insert", this.state, (error, result) => {
      if (error) {
        alert("Erreur de création de page : " + error);
      } else {
        console.log("Nouvelle page ajoutée");
      }
    });
  };

  render() {
    const { title, description } = this.state;
    return (
      <div>
        <h1>Landing</h1>
        <form onSubmit={this.create_page}>
          <input
            type="text"
            value={title}
            onChange={e => this.handleChange("title", e)}
            placeholder="Title"
          />
          <input
            type="text"
            value={description}
            onChange={e => this.handleChange("description", e)}
            placeholder="Description"
          />
          <button>Créer une page</button>
        </form>
        <pre>{this.state.title}</pre>
        <pre>{this.state.description}</pre>
      </div>
    );
  }
}
