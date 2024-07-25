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
            <Link to="/News">News</Link>

        </nav> 


     );
}
 
export default NavBar;