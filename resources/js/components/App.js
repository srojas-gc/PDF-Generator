import Axios from 'axios';
import React, {useState, useEffect} from 'react';
import {Link} from 'react-router-dom';

function App() {

    const [newTask, setNewTask] = useState({
        name:''
    });

    const [tasks, setTasks] = useState([]);

    const handleChange = e => {
        // console.log(e.target.value);
        setNewTask({
            name: e.target.value
        });        
    }

    const handleSubmit = e =>{
        e.preventDefault();        
        
        axios.post('/tasks', {
            name:newTask.name
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
                         
                        <Link to={`/presupuesto-pdf/${task.id}`} target="_blank" className="btn btn-sm btn-success float-right" style={{'marginLeft':'4px'}}>
                            Generar PDF
                        </Link>
                        <Link to={`/content-edit/${task.id}`} target="_blank" className="btn btn-sm btn-warning float-right" style={{'marginLeft':'2px'}}>
                            Cargar contenido
                        </Link> 
                        {/* <Link to={`/${task.id}/edit`} className="btn btn-sm btn-warning float-right" style={{'marginLeft':'2px'}}>
                            Cargar contenido
                        </Link>  */}
                        {/* <a href="/show-pdf" target="_blank" className="btn btn-sm btn-primary float-right" style={{'marginLeft':'4px'}}>
                            See PDF
                        </a> */}
                        
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
                    <div className="card">
                        <div className="card-header"> Generate PDF</div>

                        <div className="card-body">
                            <form onSubmit={handleSubmit}>
                                <div className="form-group">
                                    <input 
                                        onChange={handleChange}
                                        value={newTask.name}
                                        name="name"
                                        className="form-control"                                        
                                        maxLength="255"
                                        placeholder="Nombre del cliente"
                                        required
                                    />
                                </div>                             
                                <button type="submit" className="btn btn-primary">
                                    Create Presupuesto
                                </button>
                            </form>

                            <hr />
                            
                            {renderTasks()}  

                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default App;

