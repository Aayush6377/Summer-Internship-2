import React, { useEffect } from 'react';
import './App.css';
import 'react-toastify/dist/ReactToastify.css';

import { BrowserRouter, Route, Routes } from "react-router-dom";
import { ToastContainer } from "react-toastify";

import NavBar from './components/NavBar';
import About from './components/About';
import Home from './components/Home';
import Login from './components/Login';
import Community from './components/Community';
import LeaderBoard from './components/LeaderBoard';
import News from './components/News';
import PersonalHealthManagement from './components/PersonalHealthManagement';
import WellnessPrograms from './components/WellnessPrograms';
import Resources from './components/Resources';
import InteractiveTools from './components/InteractiveTools';

function App() {
  useEffect(() => {
    const cursor = document.createElement('div');
    cursor.classList.add('cursor');
    document.body.appendChild(cursor);

    const moveCursor = (e) => {
      cursor.style.left = `${e.clientX}px`;
      cursor.style.top = `${e.clientY}px`;
    };

    window.addEventListener('mousemove', moveCursor);

    return () => {
      window.removeEventListener('mousemove', moveCursor);
      document.body.removeChild(cursor);
    };
  }, []);

  return (
    <div className="App">
      <BrowserRouter>
        <ToastContainer />
        <NavBar />
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/About" element={<About />} />
          <Route path="/login" element={<Login />} />
          <Route path="/Community" element={<Community />} />
          <Route path="/LeaderBoard" element={<LeaderBoard />} />
          <Route path="/News" element={<News />} />
          <Route path="/PersonalHealthManagement" element={<PersonalHealthManagement />} />
          <Route path="/WellnessPrograms" element={<WellnessPrograms />} />
          <Route path="/Resources" element={<Resources />} />
          <Route path="/InteractiveTools" element={<InteractiveTools />} />
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
