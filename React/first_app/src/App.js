import React, { Component } from 'react';
import './App.css';

class App extends Component {
  state = {
    current_student: {},
    students: [],
    color: 'red'
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
      current_student: {name: '', age: ''}
    })
  }

  removeStudent = (index) => {
    this.setState({students: this.state.students.filter((student, stindex) => stindex !== index)})
  }

  render() {
    const {current_student, students} = this.state
    const {color} = this.props

    return (
      <div className="App">
        <h1>SYSTÈME DE GESTION D'ÉTUDIANTS</h1>
        <form>
          <input 
            placeholder="Nom étudiant"
            onChange={(event) => this.handleChangeStudent('name', event)}
            type="text"
            value={current_student.name}
          />
          <input
            placeholder="Âge de l'étudiant"
            onChange={(event) => this.handleChangeStudent('age', event)}
            type="text"
            value={current_student.age}
          />
          {
            current_student.name && current_student.age && <button onClick={this.addStudent}>Ajouter l'étudiant</button>
          }
        </form>
        {
          students
            .sort((a, b) => {
              if (a.name < b.name) return -1
              if (a.name > b.name) return 1
              return 0
            })
            .map((student, index) => {
              return (
                <p key={index} style={{color: color ? color : this.state.color}}>
                  {student.name} - {student.age} ans
                  <button 
                  onClick={() => this.removeStudent(index)}
                  className="close"
                  >
                  X</button>
                </p>
              )
            })
        }
      </div>
    );
  }
}

export default App;
