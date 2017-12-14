import React, { Component } from 'react';
import './App.css';
import Student from './Student'
import {Button, Grid, Form} from 'semantic-ui-react'

class App extends Component {
  state = {
    current_student: {
      name: '',
      age: 0,
    },
    students: [],
    color: 'red',
  }
  
  handleChangeStudent = (attr, event) => {
    const new_student = {...this.state.current_student}
    new_student[attr] = event.target.value
    this.setState({current_student: new_student})
  }

  addStudent = (event) => {
    event.preventDefault()
    const {students, current_student} = this.state
    students.push(current_student)
    this.setState({
      students,
      current_student: {name: '', age: 0}
    })
  }

  removeStudent = (index) => {
    this.setState({students: this.state.students.filter((student, stindex) => stindex !== index)})
  }

  render() {
    const {current_student, students} = this.state
    const {color} = this.props

    return (
      <Grid container columns={1} centered stackable>
        <h1>SYSTÈME DE GESTION D'ÉTUDIANTS</h1>
        <Form>
        <Grid.Row>
        <Grid.Column width={8}>
          <input 
            placeholder="Nom étudiant"
            onChange={(event) => this.handleChangeStudent('name', event)}
            type="text"
            value={current_student.name}
          />
          <input
            placeholder="Âge de l'étudiant"
            onChange={(event) => this.handleChangeStudent('age', event)}
            type="number"
            value={current_student.age}
          />
          </Grid.Column>
          </Grid.Row>
          {
            current_student.name && current_student.age && <Button color="green" onClick={this.addStudent}>Ajouter l'étudiant</Button>
          }
        </Form>
        {
          students
            .sort((a, b) => {
              if (a.name < b.name) return -1
              if (a.name > b.name) return 1
              return 0
            })
            .map((student, index) => {
              return(
                <Grid.Row>
                  <Student 
                    index={index}
                    onRemove={this.removeStudent} 
                    student={student} 
                    id={index + student.name} 
                  />
                </Grid.Row>
              )
            }
            )
        }
      </Grid>
    );
  }
}

export default App;
