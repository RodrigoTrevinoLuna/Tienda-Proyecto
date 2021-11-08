import React,{ useState } from "react";
import ReactDOM from 'react-dom';
import registroVenta from './registroVentas'

const App = () =>{
    return (
        <registroVenta></registroVenta>

    );
}
 ReactDOM.render(<App/>, document.getElementById('root'));