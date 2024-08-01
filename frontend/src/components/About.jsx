import React from 'react';
import './About.css'; // Import the CSS file

const About = () => {
  return (
    <div className='hello4'>
      
      <div className="container">
        <img className="image2" src="https://images.unsplash.com/photo-1596806031937-0fde01c2047a?q=80&w=1886&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="About Us Image" />
        <div className="text-content">
          <h1>About Us</h1>
          <p>Welcome to our health resource website. Our mission is to provide reliable and comprehensive health information for people of all age groups. Whether you are looking for resources for children, adolescents, adults, or senior citizens, we have you covered. Our interactive tools, including a BMI calculator, fitness tracker, and symptom checker, are designed to help you maintain and improve your health.</p>
          <p>We believe that everyone deserves access to quality health information and resources. Our team is dedicated to curating and creating content that is accurate, up-to-date, and easy to understand. We are here to support you on your journey to better health and wellness.</p>
          <p>Thank you for visiting our website. If you have any questions or feedback, please don't hesitate to contact us.</p>
        </div>
      </div>

      <footer className="footer">
        <img className="image1" src="" alt="" />
        <div>
          <a href="about.html">About</a>
          <a href="contact.html">Contact</a>
          <a href="faqs.html">FAQs</a>
          <a href="index.html">Home</a>
        </div>
      </footer>
    </div>
  );
}

export default About;
