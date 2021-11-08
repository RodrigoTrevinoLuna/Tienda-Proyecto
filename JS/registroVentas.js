import React, { useState } from 'react';
import ReactDOM from 'react-dom';

function registroVenta(){
    const [count, setCount] = useState(0);
    return(
        <div>
            <p>hola {count} times</p>
            <button onClick={() =>setCount(count+1)}>
                Click me
            </button>
        </div>
    );
}

const App = () =>{
    return (
        <registroVenta></registroVenta>

    );
}
 ReactDOM.render(<App/>, document.getElementById('root'));
