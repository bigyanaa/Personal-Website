 "<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bigyan Adhikari - Electrical Engineering Student & Developer</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 fill=%22black%22/><text x=%2250%22 y=%2270%22 font-size=%2280%22 text-anchor=%22middle%22 fill=%22lime%22 font-family=%22Arial,%20sans-serif%22>B</text></svg>">
  
    <style>
           * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, sans-serif;
        }

        body {
            background: #0a0a0a;
            color: #ffffff;
            line-height: 1.6;
            width: 100%;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            padding: 0 2rem;
            max-width: 100%;
        }

        nav {
            position: fixed;
            width: 100%;
            padding: 1.5rem 0;
            background: rgba(10, 10, 10, 0.9);
            backdrop-filter: blur(10px);
            z-index: 100;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(45deg, #00ff87, #60efff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #00ff87;
        }

     .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 6rem 2rem;
            background: linear-gradient(180deg, rgba(0,255,135,0.1) 0%, rgba(10,10,10,1) 100%);
            width: 100%;
        }

        .hero-content {
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.25rem;
            color: #a0a0a0;
            margin-bottom: 2rem;
        }

        .highlight {
            color: #00ff87;
        }

   .section {
            padding: 6rem 0;
            width: 100%;
        }

        .section-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            width: 100%;
        }

        .project-card {
            background: #1a1a1a;
            border-radius: 1rem;
            padding: 2rem;
            transition: transform 0.3s;
            width: 100%;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .project-card p {
            color: #a0a0a0;
            margin-bottom: 1.5rem;
        }

        .tech-stack {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .tech-tag {
            background: #2a2a2a;
            color: #00ff87;
            padding: 0.5rem 1rem;
            border-radius: 2rem;
            font-size: 0.875rem;
        }

          .experience {
            background: #1a1a1a;
            border-radius: 1rem;
            padding: 2rem;
            margin-bottom: 2rem;
            width: 100%;
        }

        .experience h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .experience p {
            color: #a0a0a0;
        }
  .contact {
            text-align: center;
            width: 100%;
            background: linear-gradient(0deg, rgba(0,255,135,0.1) 0%, rgba(10,10,10,1) 100%);
            padding: 6rem 2rem;
        }
        .social-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
        }

        .social-links a {
            color: #ffffff;
            text-decoration: none;
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #00ff87;
        }
   @media (max-width: 768px) {
            .hero h1 {
                font-size: 3rem;
            }

            .nav-links {
                display: none;
            }

            .container {
                padding: 0 1rem;
            }

            .section-content {
                padding: 0 1rem;
            }
        }
    </style>
</head>
<body>
     <nav>
        <div class="nav-content">
            <div class="logo">BA</div>
            <div class="nav-links">
                <a href="#hero">About</a>
                <a href="#projects">Projects</a>
                <a href="#experience">Experience</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </nav>

    <section id="hero" class="hero">
        <div class="hero-content">
            <h1>
                Hi, I'm <span class="highlight">Bigyan Adhikari</span><br>
                Electrical Engineer & Developer
            </h1>
            <p>
                Passionate about web development, low-level programming, and Linux systems.
                Currently studying Electrical Engineering at Pulchowk Engineering Campus.
            </p>
        </div>
    </section>

    <section id="projects" class="section">
        <div class="section-content">
            <h2 class="section-title">Featured Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <h3>SimuLearn</h3>
                    <p>A modern, responsive personalized learning platform with simulations.</p>
                    <div class="tech-stack">
                        <span class="tech-tag">HTML</span>
                        <span class="tech-tag">CSS</span>
                        <span class="tech-tag">Flask</span>
                        <span class="tech-tag">MYSQL</span>
                    </div>
                </div>
                <div class="project-card">
                    <h3>FSU App</h3>
                    <p>A social media platform developed for FSU with features for connecting students and sharing resources.</p>
                    <div class="tech-stack">
                        <span class="tech-tag">Django</span>
                        <span class="tech-tag">React Native</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">JavaScript</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <section id="experience" class="section">
    <div class="section-content">
        <h2 class="section-title">Experience</h2>

        <div class="experience">
            <h3>Mathematics & Science Instructor</h3>
            <p>Taught students from grades 7-10 for 6 months, developing comprehensive lesson plans and providing individualized support.</p>
        </div>

        <div class="experience">
            <h3>CSIT Coordinator at Clamphook</h3>
            <p>Co-ordinated entrance preparation classes for Computer Science and Information Technology Entrance Examination Classes.</p>
        </div>

    </div>
</section>

    <section id="contact" class="section contact">
        <div class="section-content">
            <h2 class="section-title">Get In Touch</h2>
            <p>Interested in collaborating or just want to say hi? Feel free to reach out!</p>
            <div class="social-links">
                <a href="https://github.com/bigyanaa" title="GitHub">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/bigyan-adhikari-1a24771a2/" title="LinkedIn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                        <rect x="2" y="9" width="4" height="12"></rect>
                        <circle cx="4" cy="4" r="2"></circle>
                    </svg>
                </a>
                <a href="mailto:080bel021.bigyan@pcampus.edu.np" title="Email Me" target="_blank" rel="noopener noreferrer">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <script>
        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // GSAP Animations
        gsap.from('.hero h1', {
            duration: 1,
            y: 50,
            opacity: 0,
            ease: 'power3.out',
            delay: 0.2
        });

        gsap.from('.hero p', {
            duration: 1,
            y: 30,
            opacity: 0,
            ease: 'power3.out',
            delay: 0.4
        });

        gsap.from('.project-card', {
            duration: 0.8,
            y: 50,
            opacity: 0,
            stagger: 0.2,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '.projects-grid',
                start: 'top center+=100'
            }
        });
    </script>
</body>
</html>
