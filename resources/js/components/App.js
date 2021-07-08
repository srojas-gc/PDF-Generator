import Axios from 'axios';
import React, {useState, useEffect} from 'react';
import {Link} from 'react-router-dom';

import { Button, Modal } from 'react-bootstrap';

function App() {

    const [show, setShow] = useState(false);

    const handleClose = () => setShow(false);
    const handleShow = () => setShow(true);

    const [newTask, setNewTask] = useState({
        name:''
    });

    const [tasks, setTasks] = useState([]);

    const handleChange = e => {
        // console.log(e.target.value);
        setNewTask({
            name: e.target.value
            // ...values, [e.target.name] : e.target.value
        });    
    }

    const handleSubmit = e =>{
        e.preventDefault();        
        
        axios.post('/tasks', {
            name:newTask.name
            // data: {name:newTask.name, contentCant:newTask.contentCant}
        })
        .then(response => {
            // console.log('from handle submit', response)
            setTasks([response.data, ...tasks]),
            setNewTask({name:''})
        });
    }  
    
    const renderTasks = () => {
        return tasks.map(task => (
            <div key={task.id} className="media">
                <div className="media-body">
                    <div>
                        <p>
                            Documento creado para: <span style={{'fontWeight':'bold'}}>{task.name}{' '}</span>
                        </p>
                        <span className="text-muted">
                            <br />
                            por {task.user.name} | {task.updated_at.split(' ').slice(1).join(' ')}
                        </span>
                        <button 
                            onClick={() => handleDelete(task.id)} 
                            className="btn btn-sm btn-danger float-right"
                            style={{'marginLeft':'5px'}}
                        >
                            Borrar
                        </button>
                         
                        
                        {/* <Button className="btn btn-sm btn-warning float-right" style={{'marginLeft':'2px'}} onClick={handleShow}>
                            Cargar contenido
                        </Button>
                        <Modal
                            show={show}
                            onHide={handleClose}
                            backdrop="static"
                            keyboard={false}
                        >
                            <Modal.Header closeButton>
                                <Modal.Title>Cantidad de contenidos dinámicos a cargar para {task.name}</Modal.Title>
                            </Modal.Header>
                            <Modal.Body>
                            <input                                
                                type="number"
                                min="2" 
                                max="20"
                                name="contentCant"
                                className="form-control"
                                required
                            />
                            </Modal.Body>
                            <Modal.Footer>
                                <Button variant="secondary" onClick={handleClose}>
                                    Cerrar
                                </Button>
                                <Link to={`/content-updateCant//${task.id}`} className="btn btn-sm btn-warning float-right" style={{'marginLeft':'2px'}}>
                                    Cargar contenido
                                </Link>
                            </Modal.Footer>
                        </Modal> */}
                        {
                            task.hasContent 
                            ? 
                            <Link to={`/presupuesto-pdf/${task.id}`} target="_blank" className="btn btn-sm btn-success float-right" style={{'marginLeft':'4px'}}>
                                Generar PDF
                            </Link>  
                            : 
                            <span></span>
                        }

                        {
                            task.hasContent 
                            ? 
                            <Link to={`/content-edit/${task.id}`} target="_blank" className="btn btn-sm btn-info float-right" style={{'marginLeft':'2px'}}>
                                Editar contenidos
                            </Link>  
                            : 
                            <Link to={`/content-edit/${task.id}`} target="_blank" className="btn btn-sm btn-warning float-right" style={{'marginLeft':'2px'}}>
                                Cargar contenidos
                            </Link> 
                        }                                                
                        
                    </div> 
                    <hr/>
                </div>
            </div>
        ));
    }

    const getTasks = () => {
        axios.get('/tasks').then(response => {
            setTasks([...response.data.tasks])
        });
    }

    //lifecycle method
    useEffect(() =>{
        getTasks();
      },[])

    const handleDelete = (id) => {
        //remove from local state
        const isNotId = task => task.id !== id;
        const updatedTasks = tasks.filter(isNotId);
        setTasks(updatedTasks);
        //make delete request to the backend
        axios.delete(`/tasks/${id}`);        
      }

    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card"  style={{'marginTop':'70px'}}>
                        <div className="card-header"> Generador de Documentos PDF</div>

                        <div className="card-body" align="center">

                            {/* <form onSubmit={handleSubmit}>
                                <div className="form-group">
                                    <input 
                                        onChange={handleChange}                                        
                                        name="name"
                                        className="form-control"                                        
                                        maxLength="255"
                                        placeholder="Nombre del cliente"
                                        required
                                        value={newTask.name}
                                    />
                                </div>

                                <button type="submit" className="btn btn-primary">
                                    Crear documento
                                </button>
                            </form> */}

                            <Link to={'/content-create/'} target="_blank" className="btn btn-primary">
                                Crear nuevo documento
                            </Link> 

                            <hr />
                            
                            {/* {renderTasks()}   */}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default App;

