import './App.css';
import 'react-toastify/dist/ReactToastify.css';



import{ BrowserRouter , Route , Routes , Redirect}from "react-router-dom"
import {ToastContainer } from "react-toastify";

import NavBar from './components/NavBar';
import About from './components/About';
import Home from './components/Home';



function App() {
  return (
    <div className="App">
    <BrowserRouter>
      <ToastContainer/>
        <NavBar/>
        <Routes>
          <Route path="/" element={<Home/>} />
          <Route path="/About" element={<About/>} />
        </Routes>
      </BrowserRouter>
      
    </div>
  );
}

export default App;
