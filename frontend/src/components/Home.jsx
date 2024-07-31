const Home = () => {
    return (
        <div>
           
            <main> 
            <section id="home" class="hero">
            
            <div class="hero-content">
                <h1>Health and Wellbeing</h1>
                <p></p>
                <a href="/login" class="cta-button">Get Started</a>
            </div>
           </section>



                <div className="content-wrapper">
                    <section className="resources">
                        <h2>Resources for Different Age Groups</h2>
                        <ul>
                            <li>Child</li>
                            <li>Adolescent</li>
                            <li>Adult</li>
                            <li>Senior Citizen</li>
                        </ul>
                        <button>View More</button>
                    </section>
                    <div className="images">
                        <div className="image">
                            <img src="https://static.wixstatic.com/media/2a1a02_c5091563ffaa42f2ae602690c579f5c6~mv2.jpg/v1/crop/x_384,y_727,w_3703,h_2460/fill/w_563,h_374,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/GettyImages-1209155577.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <section className="interactive-tools">
                    <h2>Interactive Tools</h2>
                    <ul>
                        <li>BMI Calculator</li>
                        <li>Fitness Tracker</li>
                        <li>Symptom Checker</li>
                    </ul>
                    <a href="/InteractiveTools" class="cta-button">View More</a>
                </section>
                <div className="additional-cards">2 MORE CARDS...</div>
            </main>
            <footer>
                <nav>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Home</a></li>
                    </ul>
                </nav>
            </footer>
            <script src="script.js"></script>
        </div>
    );
}

export default Home;
