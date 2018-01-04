import React, { Component } from "react";
import { withTracker } from "meteor/react-meteor-data";
import { DynamicPages } from "/imports/api/dynamic_pages/dynamic_pages";

export class Landing extends Component {
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
        this.setState({ title: "", description: "" });
      }
    });
  };

  remove_page = page_id => {
    Meteor.call("dynamic_pages.remove", page_id, (err, res) => {
      if (err) {
        alert("Erreur de suppression : " + error);
      } else {
        console.log("Page supprimée");
      }
    });
  };

  render() {
    const { title, description } = this.state;
    const { loading, dynamic_pages } = this.props;
    if (loading) {
      return <div>LOADING</div>;
    } else {
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
          {dynamic_pages.map(page => {
            return (
              <p key={page._id}>
                {page.title} - {page.description}
                <button onClick={() => this.remove_page(page._id)}>
                  Remove
                </button>
              </p>
            );
          })}
        </div>
      );
    }
  }
}

// Renvoi dans le composant Landing en Props
export default (LandingContainer = withTracker(() => {
  const dynamicPagesPublication = Meteor.subscribe("dynamic_pages.all");
  const loading = !dynamicPagesPublication.ready();
  const dynamic_pages = DynamicPages.find({}).fetch();
  return {
    loading,
    dynamic_pages
  };
}))(Landing);
