import React, { Component } from "react";
import { withTracker } from "meteor/react-meteor-data";
import { DynamicPages } from "/imports/api/dynamic_pages/dynamic_pages";
import SignUpForm from "/imports/components/accounts/SignUpForm";
import SignInForm from "/imports/components/accounts/SignInForm";

import {
  Grid,
  Header,
  Loader,
  Label,
  Form,
  Input,
  Button,
  Dimmer,
  Segment,
  Card,
  Icon
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

  on_user_connected = () => {
    console.log("Vous êtes maintenant connecté !");
  };

  render() {
    const { title, description } = this.state;
    const { loading, dynamic_pages, user } = this.props;
    if (loading) {
      return (
        <Dimmer active inverted>
          <Loader>Loading</Loader>
        </Dimmer>
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
            <Grid>
              {dynamic_pages.map(page => {
                return (
                  <Grid.Column width={8}>
                    <Card key={page._id} floated="right">
                      <Button onClick={() => this.remove_page(page._id)}>
                        X
                      </Button>
                      <Card.Content>
                        <Card.Header>{page.title}</Card.Header>
                        <Card.Description>{page.description}</Card.Description>
                      </Card.Content>
                    </Card>
                  </Grid.Column>
                );
              })}
            </Grid>
          </Grid.Column>
          {!user && (
            <Grid.Column width={8}>
              <SignUpForm />
            </Grid.Column>
          )}
          {!user && (
            <Grid.Column width={8}>
              <SignInForm onSignedIn={this.on_user_connected} />
            </Grid.Column>
          )}
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
  const user = Meteor.user();
  return {
    loading,
    dynamic_pages,
    user
  };
}))(Landing);
