import React from 'react';
import { Link } from 'react-router-dom';
const NavBar = () => {
    return (
        <nav className="NavBar">
            <Link to="/">Home</Link>
            <Link to="/About">About</Link>

        </nav> 


     );
}
 
export default NavBar;