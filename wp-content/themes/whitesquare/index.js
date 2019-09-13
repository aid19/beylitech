// импорт библиотек
import React from 'react';
import ReactDOM from 'react-dom';
import { Router, Route, IndexRoute, Link } from 'react-router';
import { createBrowserHistory } from 'history';
import axios from 'axios';
import Swal from 'sweetalert2'

const history = createBrowserHistory();


// страница сприска статей
class HomePage extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
        selectedProject : null
    };
        
  }

  projectClass(item) {
    if(this.state.selectedProject == item) {
        return "project-item project-active animated bounceIn";
    } else {
        return "project-item animated";
    }
  }

  orderProject() {
    let email = document.getElementById('email').value;
    let message = document.getElementById('message').value;

    if(email != "") {

        Swal.fire({
            type: 'success',
            title: 'Əla !',
            text: 'Məlumat göndərildi',
        });


        axios.get('/api/index.php', {
            params: {
                email: email,
                message: message,
                action: 'orderProject'
            }
        }).then(function (response) {

        }).catch(function (error) {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Daxili səxv baş verdi !',
            })
        })

    } else {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Zəhmət olmasa e-mail işarəsini doldurun !',
        })
    }  

  }

  render() {

    const selectProject = (id) => {
    
        this.setState({
            selectedProject: id
        });


    }


    return <div className="container">
                <div className="row">
                    <div className="col-sm-12">
                        <div className="orderproject">
                            <h1>Layihə sifariş etmək</h1>
                        </div>
                    </div>
                </div>
                <div className="row">
                    <div className="col-sm-4">
                        <div id="landing" className={this.projectClass('landing')} onClick={() => selectProject('landing')}>
                            <h3 className="landing">Landing </h3>
                            <p className="project-details">*inexpensive website for business</p> 
                        </div>
                    </div>
                    <div className="col-sm-4">
                        <div id="onlinestore" className={this.projectClass('onlinestore')} onClick={() => selectProject('onlinestore')}>
                            <h3 className="landing">Online Store</h3>
                            <p className="project-details">*for the sale of goods and services</p> 
                        </div>
                    </div>
                    <div className="col-sm-4">
                        <div id="blog" className={this.projectClass('blog')} onClick={() => selectProject('blog')}>
                            <h3 className="landing">Blog </h3>
                            <p className="project-details">*large amount of content</p> 
                        </div>
                    </div>
                </div>

                <div className="row">
                    <div className="col-sm-6">
                        <div className="form-group">
                            <label htmlFor="input"></label>
                            <input type="text" className="form-control" id="email" placeholder="Elektron poçt"></input>
                        </div>
                    </div>
                
                    <div className="col-sm-6">
                        <div className="form-group">
                            <label htmlFor="inputAddress2"></label>
                            <input type="text" className="form-control" id="message" placeholder="Mesaj"></input>
                        </div>
                    </div>

                    <div className="col-sm-12">
                        <button onClick={() => this.orderProject()} id="form-submit" type="button" className="btn btn-lg btn-gold btn-order-project">Sifariş et</button>
                    </div>
                </div>
            </div>
  }
}


// настраиваем url схему нашего приложения
const routes =
    <Route exact path="/" component={HomePage}/>
;

// запускаем приложение в элементе #root
ReactDOM.render(
  <Router history={history}>
      <div>
          {routes}
      </div>
  </Router>,

  document.getElementById('order-project')
);