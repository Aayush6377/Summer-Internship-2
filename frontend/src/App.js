import './App.css';
import 'react-toastify/dist/ReactToastify.css';



import{ BrowserRouter , Route , Routes , Redirect}from "react-router-dom"
import {ToastContainer } from "react-toastify";

import NavBar from './components/NavBar';
import About from './components/About';
import Home from './components/Home';
import Login from './components/Login';
import Community from './components/Community';
import LeaderBoard from './components/LeaderBoard';
import News from './components/News';



function App() {
  return (
    <div className="App">
    <BrowserRouter>
      <ToastContainer/>
        <NavBar/>
        <Routes>
          <Route path="/" element={<Home/>} />
          <Route path="/About" element={<About/>} />
          <Route path="/login" element={<Login/>} />
          <Route path="/Community" element={<Community/>} />
          <Route path="/LeaderBoard" element={<LeaderBoard/>} />
          <Route path="/News" element={<News/>} />
        </Routes>
      </BrowserRouter>
      
    </div>
  );
}

export default App;
