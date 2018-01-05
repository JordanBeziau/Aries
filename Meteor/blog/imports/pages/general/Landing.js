import React, { Component } from "react";
import { withTracker } from "meteor/react-meteor-data";
import { DynamicPages } from "/imports/api/dynamic_pages/dynamic_pages";

import {
  Grid,
  Header,
  Loader,
  Label,
  Form,
  Input,
  Button,
  Dimmer,
  Segment
} from "semantic-ui-react";
import GridColumn from "semantic-ui-react/dist/commonjs/collections/Grid/GridColumn";

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
      return (
        <Segment>
          <Dimmer active inverted>
            <Loader>Loading</Loader>
          </Dimmer>
        </Segment>
      );
    } else {
      return (
        <Grid stackable>
          <Grid.Column width={8}>
            <Header>Mon Blog</Header>
            <Form onSubmit={this.create_page}>
              <Input
                type="text"
                value={title}
                onChange={e => this.handleChange("title", e)}
                placeholder="Title"
              />
              <Input
                type="text"
                value={description}
                onChange={e => this.handleChange("description", e)}
                placeholder="Description"
              />
              <Button>Créer une page</Button>
            </Form>
          </Grid.Column>
          <Grid.Column width={8}>
            {dynamic_pages.map(page => {
              return (
                <p key={page._id}>
                  {page.title} - {page.description}
                  <Button onClick={() => this.remove_page(page._id)}>
                    Remove
                  </Button>
                </p>
              );
            })}
          </Grid.Column>
        </Grid>
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
