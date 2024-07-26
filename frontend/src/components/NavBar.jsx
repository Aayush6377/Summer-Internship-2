import React from 'react';
import { Link } from 'react-router-dom';
const NavBar = () => {
    return (
        <nav className="NavBar">
            <Link to="/">Home</Link>
            <Link to="/About">About</Link>
            <Link to="/login">login</Link>
            <Link to="/Community">Community</Link>
            <Link to="/LeaderBoard">LeaderBoard</Link>
            <Link to="/Resouces">Resources</Link>
            <Link to="/InteractiveTools">Tools</Link>
            <Link to="/News">News</Link>
            <Link to="/PersonalHealthManagement">Health Management</Link>
            <Link to="/WellnessPrograms">Wellness Programs</Link>

        </nav> 


     );
}
 
export default NavBar;