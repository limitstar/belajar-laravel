<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile | Interactive Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            color: #333;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 1200px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-card {
            width: 100%;
            max-width: 800px;
            height: 600px;
            perspective: 1500px;
        }

        .card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.8s;
            transform-style: preserve-3d;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            border-radius: 20px;
        }

        .profile-card.flipped .card-inner {
            transform: rotateY(180deg);
        }

        .card-front, .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 20px;
            padding: 30px;
            overflow: hidden;
        }

        .card-front {
            background: rgba(255, 255, 255, 0.9);
            display: flex;
            flex-direction: column;
        }

        .card-back {
            background: rgba(255, 255, 255, 0.95);
            transform: rotateY(180deg);
            display: flex;
            flex-direction: column;
        }

        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            animation: fadeInDown 1s ease;
        }

        .profile-img-container {
            position: relative;
            margin-right: 20px;
        }

        .profile-img-border {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            padding: 5px;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            animation: rotate 10s linear infinite;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid white;
        }

        .name-badge {
            flex: 1;
        }

        .student-name {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 5px;
            background: linear-gradient(to right, #ff6b6b, #4ecdc4);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .student-id {
            display: inline-block;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        .quick-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease;
        }

        .info-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: rgba(0, 0, 0, 0.05);
            padding: 15px;
            border-radius: 10px;
            width: 30%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .info-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .info-item i {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #4ecdc4;
        }

        .about-section, .skills-section {
            margin-bottom: 25px;
            animation: fadeIn 1.5s ease;
        }

        h2 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        h2:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 3px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(to right, #ff6b6b, #4ecdc4);
            border-radius: 10px;
        }

        .skill {
            margin-bottom: 15px;
        }

        .skill-bar {
            height: 10px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        .skill-level {
            height: 100%;
            background: linear-gradient(to right, #ff6b6b, #4ecdc4);
            border-radius: 5px;
            animation: skillFill 2s ease;
        }

        @keyframes skillFill {
            from {
                width: 0;
            }
        }

        .flip-btn {
            margin-top: auto;
            padding: 12px 25px;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            border: none;
            border-radius: 30px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            align-self: center;
            animation: pulse 2s infinite;
        }

        .flip-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            animation: none;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 107, 107, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(255, 107, 107, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 107, 107, 0);
            }
        }

        .details-section {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .detail-item {
            background: rgba(0, 0, 0, 0.03);
            padding: 15px;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .detail-item:hover {
            transform: translateY(-5px);
        }

        .detail-item h3 {
            margin-bottom: 10px;
            color: #ff6b6b;
        }

        .detail-item ul {
            padding-left: 20px;
        }

        .detail-item li {
            margin-bottom: 5px;
        }

        .social-links {
            margin-top: 15px;
            display: flex;
            gap: 15px;
        }

        .social-links a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            border-radius: 50%;
            color: white;
            font-size: 1.2rem;
            transition: transform 0.3s ease;
            text-decoration: none;
        }

        .social-links a:hover {
            transform: rotate(360deg) scale(1.1);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .profile-card {
                height: auto;
                min-height: 650px;
            }
            
            .profile-header {
                flex-direction: column;
                text-align: center;
            }
            
            .profile-img-container {
                margin-right: 0;
                margin-bottom: 20px;
            }
            
            .quick-info {
                flex-direction: column;
                gap: 15px;
            }
            
            .info-item {
                width: 100%;
            }
            
            .details-section {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div id="particles-js"></div>
    
    <div class="container">
        <div class="profile-card">
            <div class="card-inner">
                <div class="card-front">
                    <div class="profile-header">
                        <div class="profile-img-container">
                            <div class="profile-img-border">
                                <img src="foto.jpeg" alt="Student Photo" class="profile-img">
                            </div>
                        </div>
                        <div class="name-badge">
                            <h1 class="student-name">Muhammad Rizky Putra Wijoyo</h1>
                            <span class="student-id">NIM : 17220987</span>
                        </div>
                    </div>
                    
                    <div class="quick-info">
                        <div class="info-item">
                            <i class="fas fa-graduation-cap"></i>
                            <span>Informatic Engineering</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Year 3</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-award"></i>
                            <span>GPA: 3.71</span>
                        </div>
                    </div>
                    
                    <div class="about-section">
                        <h2>About Me</h2>
                        <p>
                        Hello! My name is Muhamad Rizky Putra Wijoyo, and I am a sixth-semester Information Technology student. I have an average coding skill, but I am passionate about learning and improving my abilities. Additionally, I am a beginner vaporista, exploring the world of vaping as a hobby. I'm excited to continue growing both academically and personally!</p>
                    </div>
                    
                    <div class="skills-section">
                        <h2>Skills</h2>
                        <div class="skill-bars">
                            <div class="skill">
                                <span>Python</span>
                                <div class="skill-bar">
                                    <div class="skill-level" style="width: 90%"></div>
                                </div>
                            </div>
                            <div class="skill">
                                <span>JavaScript</span>
                                <div class="skill-bar">
                                    <div class="skill-level" style="width: 75%"></div>
                                </div>
                            </div>
                            <div class="skill">
                                <span>Machine Learning</span>
                                <div class="skill-bar">
                                    <div class="skill-level" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <button class="flip-btn">See More Details</button>
                </div>
                
                <div class="card-back">
                    <h2>Academic Details</h2>
                    
                    <div class="details-section">
                        <div class="detail-item">
                            <h3>Education</h3>
                            <p>BSc in Computer Science</p>
                            <p>University of Technology</p>
                            <p>2021 - Present</p>
                        </div>
                        
                        <div class="detail-item">
                            <h3>Projects</h3>
                            <ul>
                                <li>AI-Powered Health Monitoring System</li>
                                <li>Smart Campus Navigation App</li>
                                <li>Blockchain-based Student Records</li>
                            </ul>
                        </div>
                        
                        <div class="detail-item">
                            <h3>Achievements</h3>
                            <ul>
                                <li>Dean's List 2022, 2023</li>
                                <li>1st Place, National Coding Challenge</li>
                                <li>Research Grant Recipient</li>
                            </ul>
                        </div>
                        
                        <div class="detail-item">
                            <h3>Contact</h3>
                            <p><i class="fas fa-envelope"></i> amelia.r@university.edu</p>
                            <p><i class="fas fa-phone"></i> (123) 456-7890</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-github"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <button class="flip-btn">Back to Profile</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        // Initialize particles.js
        particlesJS("particles-js", {
            particles: {
                number: {
                    value: 80,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: "#ffffff"
                },
                shape: {
                    type: "circle",
                    stroke: {
                        width: 0,
                        color: "#000000"
                    },
                },
                opacity: {
                    value: 0.5,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 3,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 2,
                        size_min: 0.1,
                        sync: false
                    }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#ffffff",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: "none",
                    random: true,
                    straight: false,
                    out_mode: "out",
                    bounce: false,
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: true,
                        mode: "grab"
                    },
                    onclick: {
                        enable: true,
                        mode: "push"
                    },
                    resize: true
                },
                modes: {
                    grab: {
                        distance: 140,
                        line_linked: {
                            opacity: 1
                        }
                    },
                    push: {
                        particles_nb: 4
                    }
                }
            },
            retina_detect: true
        });

        // Card flip functionality
        document.addEventListener('DOMContentLoaded', function() {
            const flipBtns = document.querySelectorAll('.flip-btn');
            const profileCard = document.querySelector('.profile-card');
            
            flipBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    profileCard.classList.toggle('flipped');
                });
            });
            
            // Animate skill bars on load
            const skillLevels = document.querySelectorAll('.skill-level');
            
            // Store the original widths
            skillLevels.forEach(skill => {
                const width = skill.style.width;
                skill.style.width = '0';
                
                setTimeout(() => {
                    skill.style.width = width;
                }, 300);
            });
            
            // Add hover effects for detail items
            const detailItems = document.querySelectorAll('.detail-item');
            
            detailItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.backgroundColor = 'rgba(78, 205, 196, 0.1)';
                });
                
                item.addEventListener('mouseleave', function() {
                    this.style.backgroundColor = 'rgba(0, 0, 0, 0.03)';
                });
            });
            
            // Add typing effect to About Me section
            const aboutText = document.querySelector('.about-section p');
            const originalText = aboutText.textContent;
            aboutText.textContent = '';
            
            let i = 0;
            const typeWriter = () => {
                if (i < originalText.length) {
                    aboutText.textContent += originalText.charAt(i);
                    i++;
                    setTimeout(typeWriter, 30);
                }
            };
            
            // Start typing effect after a delay
            setTimeout(typeWriter, 1000);
        });

        // Add 3D tilt effect
        document.addEventListener('mousemove', function(e) {
            const card = document.querySelector('.card-inner');
            const cardRect = card.getBoundingClientRect();
            const cardCenterX = cardRect.left + cardRect.width / 2;
            const cardCenterY = cardRect.top + cardRect.height / 2;
            
            const angleX = (e.clientY - cardCenterY) / 30;
            const angleY = (cardCenterX - e.clientX) / 30;
            
            card.style.transform = `rotateX(${angleX}deg) rotateY(${angleY}deg)`;
            
            // Reset when card is flipped
            if (document.querySelector('.profile-card').classList.contains('flipped')) {
                card.style.transform = 'rotateY(180deg)';
            }
        });

        // Reset card position when mouse leaves
        document.addEventListener('mouseleave', function() {
            const card = document.querySelector('.card-inner');
            if (!document.querySelector('.profile-card').classList.contains('flipped')) {
                card.style.transform = 'rotateX(0) rotateY(0)';
            } else {
                card.style.transform = 'rotateY(180deg)';
            }
        });
    </script>
</body>
</html>
