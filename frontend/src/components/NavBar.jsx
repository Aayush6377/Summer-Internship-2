import React from 'react';
import { Link } from 'react-router-dom';
const NavBar = () => {
    return (
        <nav className="NavBar">
            <div className='nav'>
            <Link to="/">Home</Link>
            <div className='abt'><Link to="/About">About</Link></div>
            
            <Link to="/login">login</Link>
            <Link to="/Community">Community</Link>
            <Link to="/LeaderBoard">LeaderBoard</Link>
            <Link to="/Resources">Resources</Link>
            <Link to="/InteractiveTools">Tools</Link>
            <Link to="/News">News</Link>
            <Link to="/PersonalHealthManagement">Health Management</Link>
            <Link to="/WellnessPrograms">Wellness Programs</Link></div>
            

        </nav> 


     );
}
 
export default NavBar;