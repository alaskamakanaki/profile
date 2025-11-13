<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATECHWORLD | Portfolio</title>
    <script src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        neon: {
                            blue: '#00F5FF',
                            purple: '#9D4EDD',
                            pink: '#FF2E93',
                            cyan: '#00FFFF',
                            green: '#00FF87'
                        },
                        dark: {
                            light: '#1E293B',
                            DEFAULT: '#0F172A',
                            dark: '#020617'
                        }
                    },
                    fontFamily: {
                        orbitron: ['Orbitron', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-glow': 'pulse-glow 2s ease-in-out infinite alternate',
                        'typewriter': 'typewriter 4s steps(40) 1s 1 normal both',
                        'blink': 'blink 0.75s step-end infinite',
                        'gradient': 'gradient 3s ease infinite',
                        'hologram': 'hologram 3s ease-in-out infinite alternate',
                        'bounce': 'bounce 1s infinite',
                        'toast-in': 'toast-in 0.3s ease-out forwards',
                        'toast-out': 'toast-out 0.3s ease-in forwards',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        'pulse-glow': {
                            '0%': { 
                                'boxShadow': '0 0 5px rgba(0, 245, 255, 0.5), 0 0 10px rgba(0, 245, 255, 0.3)'
                            },
                            '100%': { 
                                'boxShadow': '0 0 20px rgba(0, 245, 255, 0.8), 0 0 30px rgba(0, 245, 255, 0.6), 0 0 40px rgba(0, 245, 255, 0.4)'
                            }
                        },
                        typewriter: {
                            'from': { width: '0' },
                            'to': { width: '100%' }
                        },
                        blink: {
                            'from, to': { 'borderColor': 'transparent' },
                            '50%': { 'borderColor': '#00F5FF' }
                        },
                        gradient: {
                            '0%, 100%': {
                                'backgroundPosition': '0% 50%'
                            },
                            '50%': {
                                'backgroundPosition': '100% 50%'
                            }
                        },
                        hologram: {
                            '0%': { 
                                'opacity': '0.3',
                                'transform': 'translateY(10px) scale(0.95)'
                            },
                            '100%': { 
                                'opacity': '0.7',
                                'transform': 'translateY(0) scale(1)'
                            }
                        },
                        bounce: {
                            '0%, 100%': {
                                transform: 'translateY(-25%)',
                                animationTimingFunction: 'cubic-bezier(0.8, 0, 1, 1)'
                            },
                            '50%': {
                                transform: 'translateY(0)',
                                animationTimingFunction: 'cubic-bezier(0, 0, 0.2, 1)'
                            }
                        },
                        'toast-in': {
                            '0%': { 
                                transform: 'translateX(400px)',
                                opacity: '0'
                            },
                            '100%': { 
                                transform: 'translateX(0)',
                                opacity: '1'
                            }
                        },
                        'toast-out': {
                            '0%': { 
                                transform: 'translateX(0)',
                                opacity: '1'
                            },
                            '100%': { 
                                transform: 'translateX(400px)',
                                opacity: '0'
                            }
                        }
                    },
                    backdropBlur: {
                        xs: '2px',
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-text {
            background: linear-gradient(90deg, #00F5FF, #9D4EDD, #00FFFF);
            background-size: 200% auto;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient 3s ease infinite;
        }

        .matrix-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -10;
            opacity: 0.03;
            pointer-events: none;
        }

        .matrix-column {
            position: absolute;
            top: -100%;
            color: #00F5FF;
            font-size: 14px;
            font-family: monospace;
            text-shadow: 0 0 5px currentColor;
        }

        .floating-shapes {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -5;
            pointer-events: none;
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(0, 245, 255, 0.1), rgba(157, 78, 221, 0.1));
            animation: float 15s infinite ease-in-out;
        }

        .hologram-effect {
            position: relative;
            overflow: hidden;
        }

        .hologram-effect::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, 
                rgba(0, 245, 255, 0.1) 0%, 
                rgba(157, 78, 221, 0.2) 25%, 
                rgba(255, 46, 147, 0.1) 50%, 
                rgba(0, 245, 255, 0.2) 75%, 
                rgba(157, 78, 221, 0.1) 100%);
            z-index: -1;
            animation: hologram 3s ease-in-out infinite alternate;
        }

        .cyber-border {
            position: relative;
            border: 1px solid transparent;
            background: linear-gradient(90deg, #00F5FF, #9D4EDD, #00F5FF);
            background-size: 200% 100%;
            background-clip: padding-box;
            animation: gradient 3s ease infinite;
        }

        .cyber-border::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(90deg, #00F5FF, #9D4EDD, #00F5FF);
            background-size: 200% 100%;
            z-index: -1;
            border-radius: inherit;
            animation: gradient 3s ease infinite;
        }

        .grid-pattern {
            background-image: 
                linear-gradient(rgba(0, 245, 255, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 245, 255, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        .toast {
            position: fixed;
            top: 100px;
            right: 20px;
            padding: 16px 24px;
            border-radius: 8px;
            color: white;
            font-weight: 500;
            z-index: 1000;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            transform: translateX(400px);
            opacity: 0;
        }

        .toast.show {
            animation: toast-in 0.3s ease-out forwards;
        }

        .toast.hiding {
            animation: toast-out 0.3s ease-in forwards;
        }

        .toast.success {
            background: linear-gradient(90deg, #10B981, #059669);
        }

        .toast.error {
            background: linear-gradient(90deg, #EF4444, #DC2626);
        }

        .cursor {
            animation: blink 1s infinite;
        }

        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        .skill-progress::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: shimmer 2s infinite;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-300 font-sans">
    <div id="root"></div>

    <!-- WhatsApp Widget Script -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+2347044792334",
                call_to_action: "Message us",
                position: "right",
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>

    <script type="text/babel">
        const { useState, useEffect, useRef } = React;

        // Toast Component
        const Toast = ({ message, type, show, onClose }) => {
            const [isVisible, setIsVisible] = useState(false);
            const [isHiding, setIsHiding] = useState(false);

            useEffect(() => {
                if (show) {
                    setIsVisible(true);
                    setIsHiding(false);
                    
                    const timer = setTimeout(() => {
                        setIsHiding(true);
                        setTimeout(() => {
                            setIsVisible(false);
                            onClose();
                        }, 300); // Match animation duration
                    }, 4000);
                    
                    return () => clearTimeout(timer);
                }
            }, [show, onClose]);

            if (!isVisible) return null;

            return (
                <div className={`toast ${type} ${isHiding ? 'hiding' : 'show'}`}>
                    <div className="flex items-center">
                        <i className={`fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'} mr-2`}></i>
                        {message}
                    </div>
                </div>
            );
        };

        const App = () => {
            const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
            const [typedText, setTypedText] = useState('');
            const [isDeleting, setIsDeleting] = useState(false);
            const [loopNum, setLoopNum] = useState(0);
            const [toast, setToast] = useState({ show: false, message: '', type: '' });

            const typingSpeed = 150;
            const deletingSpeed = 100;
            const pauseTime = 2000;

            const texts = [
                "Hi, I'm Okojie O. Allwell",
                "I Am Full Stack Developer",
                "I Am Web Designer",
                "I Am Problem Solver",
                "I Am Also a Document Editor"
            ];

            useEffect(() => {
                const handleType = () => {
                    const i = loopNum % texts.length;
                    const fullText = texts[i];
                    
                    setTypedText(isDeleting 
                        ? fullText.substring(0, typedText.length - 1)
                        : fullText.substring(0, typedText.length + 1)
                    );

                    if (!isDeleting && typedText === fullText) {
                        setTimeout(() => setIsDeleting(true), pauseTime);
                    } else if (isDeleting && typedText === '') {
                        setIsDeleting(false);
                        setLoopNum(loopNum + 1);
                    }
                };

                const timer = setTimeout(handleType, isDeleting ? deletingSpeed : typingSpeed);
                return () => clearTimeout(timer);
            }, [typedText, isDeleting, loopNum, texts]);

            // Create Matrix Background
            useEffect(() => {
                const matrixBg = document.createElement('div');
                matrixBg.className = 'matrix-bg';
                matrixBg.id = 'matrix-bg';
                
                const columns = Math.floor(window.innerWidth / 20);
                
                for (let i = 0; i < columns; i++) {
                    const column = document.createElement('div');
                    column.className = 'matrix-column';
                    column.style.left = `${i * 20}px`;
                    column.style.animationDelay = `${Math.random() * 5}s`;
                    column.style.animationDuration = `${10 + Math.random() * 10}s`;
                    
                    let content = '';
                    const chars = '01010101010101010101ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    const length = 20 + Math.floor(Math.random() * 20);
                    
                    for (let j = 0; j < length; j++) {
                        content += chars.charAt(Math.floor(Math.random() * chars.length));
                    }
                    
                    column.textContent = content;
                    matrixBg.appendChild(column);
                }
                
                document.body.appendChild(matrixBg);
                
                return () => {
                    if (document.getElementById('matrix-bg')) {
                        document.getElementById('matrix-bg').remove();
                    }
                };
            }, []);

            const toggleMobileMenu = () => {
                setMobileMenuOpen(!mobileMenuOpen);
            };

            const closeMobileMenu = () => {
                setMobileMenuOpen(false);
            };

            const scrollToSection = (sectionId) => {
                const element = document.getElementById(sectionId);
                if (element) {
                    element.scrollIntoView({ behavior: "smooth" });
                }
                closeMobileMenu();
            };

            const showToast = (message, type = 'success') => {
                setToast({ show: true, message, type });
            };

            const hideToast = () => {
                setToast({ ...toast, show: false });
            };

            return (
                <div className="min-h-screen bg-gradient-to-br from-gray-900 to-dark-dark">
                    {/* Floating Shapes */}
                    <div className="floating-shapes">
                        <div className="floating-shape w-64 h-64 -top-32 -left-32"></div>
                        <div className="floating-shape w-48 h-48 top-1/2 -right-24"></div>
                        <div className="floating-shape w-32 h-32 bottom-32 left-1/4"></div>
                    </div>

                    {/* Toast Notification */}
                    <Toast 
                        message={toast.message} 
                        type={toast.type} 
                        show={toast.show} 
                        onClose={hideToast}
                    />

                    {/* Header */}
                    <header className="fixed top-0 left-0 w-full z-50 bg-dark-dark/80 backdrop-blur-md border-b border-gray-800">
                        <div className="container mx-auto px-6 py-4 flex justify-between items-center">
                            <h1 className="text-2xl font-bold font-orbitron">
                                <span className="gradient-text">OKOJIE O. ALLWELL</span>
                            </h1>
                            
                            {/* Desktop Nav */}
                            <nav className="hidden md:block">
                                <ul className="flex space-x-8">
                                    {['about', 'technologies', 'projects', 'education', 'certificates', 'contact'].map((item) => (
                                        <li key={item}>
                                            <a 
                                                href={`#${item}`} 
                                                className="text-gray-300 hover:text-neon-blue transition-all duration-300 relative py-2"
                                                onClick={(e) => {
                                                    e.preventDefault();
                                                    scrollToSection(item);
                                                }}
                                            >
                                                <i className={`fas fa-${getIconName(item)} mr-2`}></i>
                                                {capitalizeFirstLetter(item)}
                                            </a>
                                        </li>
                                    ))}
                                </ul>
                            </nav>
                            
                            {/* Mobile Menu Button */}
                            <button 
                                className="md:hidden text-neon-blue text-xl"
                                onClick={toggleMobileMenu}
                            >
                                <i className="fas fa-bars"></i>
                            </button>
                        </div>
                        
                        {/* Mobile Menu */}
                        <div className={`md:hidden absolute top-full left-0 w-full bg-dark-dark/95 backdrop-blur-md border-b border-gray-800 transition-all duration-300 ${mobileMenuOpen ? 'block' : 'hidden'}`}>
                            <div className="container mx-auto px-6 py-4">
                                <ul className="flex flex-col space-y-4">
                                    {['about', 'technologies', 'projects', 'education', 'certificates', 'contact'].map((item) => (
                                        <li key={item}>
                                            <a 
                                                href={`#${item}`}
                                                className="block py-2 text-gray-300 hover:text-neon-blue transition-all duration-300"
                                                onClick={(e) => {
                                                    e.preventDefault();
                                                    scrollToSection(item);
                                                }}
                                            >
                                                <i className={`fas fa-${getIconName(item)} mr-2`}></i>
                                                {capitalizeFirstLetter(item)}
                                            </a>
                                        </li>
                                    ))}
                                </ul>
                            </div>
                        </div>
                    </header>

                    {/* Hero Section */}
                    <section id="about" className="min-h-screen flex items-center justify-center pt-20 pb-10">
                        <div className="container mx-auto px-6">
                            <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                                {/* Left Content */}
                                <div className="text-center lg:text-left">
                                    <div className="inline-block mb-6 cyber-border rounded-lg px-4 py-2">
                                        <span className="text-neon-green font-orbitron text-sm">SOFTWARE DEVELOPER & DESIGNER</span>
                                    </div>
                                    
                                    <h1 className="text-4xl md:text-6xl font-bold font-orbitron mb-6">
                                        <span className="gradient-text">OKOJIE O.</span>
                                        <span className="block text-white mt-2">ALLWELL</span>
                                    </h1>
                                    
                                    <div className="mb-8">
                                        <div className="typewriter-text inline-block text-xl text-gray-300 border-r-2 border-neon-blue whitespace-nowrap overflow-hidden">
                                            {typedText}
                                            <span className="cursor">|</span>
                                        </div>
                                    </div>
                                    
                                    <p className="text-lg text-gray-400 mb-8 max-w-2xl">
                                        Hi, I'm Okojie O. Allwell, a web developer with 3+ years of experience building clean, fast, and user-friendly websites. 
                                        I specialize in modern web technologies and creating digital experiences that push boundaries.
                                    </p>
                                    
                                    <div className="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                                        <button 
                                            className="px-6 py-3 bg-gradient-to-r from-neon-blue to-neon-purple rounded-lg font-semibold text-white hover:shadow-lg hover:shadow-neon-blue/30 transition-all duration-300 transform hover:-translate-y-1 flex items-center"
                                            onClick={() => scrollToSection('projects')}
                                        >
                                            <i className="fas fa-rocket mr-2"></i> View My Work
                                        </button>
                                        <button 
                                            className="px-6 py-3 border border-neon-blue rounded-lg font-semibold text-neon-blue hover:bg-neon-blue hover:bg-opacity-10 transition-all duration-300 flex items-center"
                                            onClick={() => scrollToSection('contact')}
                                        >
                                            <i className="fas fa-paper-plane mr-2"></i> Get In Touch
                                        </button>
                                    </div>
                                </div>
                                
                                {/* Right Content - 3D Card Effect */}
                                <div className="flex justify-center">
                                    <div className="relative w-80 h-96">
                                        <div className="absolute inset-0 bg-gradient-to-br from-neon-blue/20 to-neon-purple/20 rounded-2xl transform rotate-6"></div>
                                        <div className="absolute inset-0 bg-gradient-to-br from-neon-purple/20 to-neon-pink/20 rounded-2xl transform -rotate-6"></div>
                                        <div className="relative w-full h-full bg-dark-light/50 backdrop-blur-md rounded-2xl border border-gray-700/50 p-8 transform transition-transform duration-500 hover:rotate-0">
                                            <div className="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-2 border-neon-blue">
                                                <img 
                                                    src="Okojie O. Allwell.jpg" 
                                                    alt="Profile" 
                                                    className="w-full h-full object-cover"
                                                />
                                            </div>
                                            
                                            <h3 className="text-xl font-bold text-white text-center mb-2 font-orbitron">OKOJIE O. ALLWELL</h3>
                                            <p className="text-neon-blue text-center mb-6">Full Stack Developer</p>
                                            
                                            <div className="grid grid-cols-2 gap-4 text-center mb-6">
                                                <div className="p-3 bg-dark-dark/50 rounded-lg border border-gray-700/50">
                                                    <p className="text-neon-green text-lg font-bold">3+</p>
                                                    <p className="text-xs text-gray-400">Years Experience</p>
                                                </div>
                                                <div className="p-3 bg-dark-dark/50 rounded-lg border border-gray-700/50">
                                                    <p className="text-neon-cyan text-lg font-bold">50+</p>
                                                    <p className="text-xs text-gray-400">Projects</p>
                                                </div>
                                            </div>
                                            
                                            <div className="flex justify-center space-x-4">
                                                {['github', 'linkedin-in', 'twitter'].map((platform) => (
                                                    <a key={platform} href="#" className="w-10 h-10 rounded-full bg-dark-dark flex items-center justify-center border border-gray-700 hover:border-neon-blue transition-all duration-300">
                                                        <i className={`fab fa-${platform} text-neon-blue`}></i>
                                                    </a>
                                                ))}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    {/* Technologies/Skills Section */}
                    <section id="technologies" className="py-20">
                        <div className="container mx-auto px-6">
                            <div className="text-center mb-16">
                                <h2 className="text-3xl md:text-4xl font-bold font-orbitron mb-4">
                                    <span className="gradient-text">Technical Skills</span>
                                </h2>
                                <p className="text-gray-400 max-w-2xl mx-auto">Mastering the tools and technologies that power modern web experiences</p>
                            </div>
                            
                            <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                                {/* Skills Progress */}
                                <div className="bg-dark-light/50 backdrop-blur-md rounded-2xl border border-gray-700/50 p-8 hologram-effect">
                                    <h3 className="text-xl font-bold text-white mb-6 font-orbitron">Development Skills</h3>
                                    
                                    <div className="space-y-6">
                                        {[
                                            { name: 'HTML/CSS', level: 95 },
                                            { name: 'JavaScript', level: 90 },
                                            { name: 'Vue.js', level: 85 },
                                            { name: 'PHP & MySQL', level: 88 },
                                            { name: 'Tailwind CSS', level: 92 }
                                        ].map((skill) => (
                                            <div key={skill.name} className="skill-item">
                                                <div className="flex justify-between mb-2">
                                                    <span className="text-gray-300">{skill.name}</span>
                                                    <span className="text-neon-blue font-bold">{skill.level}%</span>
                                                </div>
                                                <div className="h-2 bg-dark-dark rounded-full overflow-hidden">
                                                    <div 
                                                        className="h-full bg-gradient-to-r from-neon-blue to-neon-purple rounded-full relative skill-progress" 
                                                        style={{ width: `${skill.level}%` }}
                                                    ></div>
                                                </div>
                                            </div>
                                        ))}
                                    </div>
                                </div>
                                
                                {/* Technology Icons */}
                                <div className="bg-dark-light/50 backdrop-blur-md rounded-2xl border border-gray-700/50 p-8 grid-pattern">
                                    <h3 className="text-xl font-bold text-white mb-6 font-orbitron">Technologies & Tools</h3>
                                    
                                    <div className="grid grid-cols-2 sm:grid-cols-3 gap-6">
                                        {[
                                            { name: 'HTML5', icon: 'fab fa-html5' },
                                            { name: 'CSS3', icon: 'fab fa-css3-alt' },
                                            { name: 'JavaScript', icon: 'fab fa-js' },
                                            { name: 'Vue.js', icon: 'fab fa-vuejs' },
                                            { name: 'PHP', icon: 'fab fa-php' },
                                            { name: 'MySQL', icon: 'fas fa-database' },
                                            { name: 'Tailwind', icon: 'fas fa-wind' },
                                            { name: 'Photoshop', icon: 'fab fa-adobe' },
                                            { name: 'Canva', icon: 'fas fa-palette' },
                                            { name: 'CorelDRAW', icon: 'fas fa-vector-square' }
                                        ].map((tech) => (
                                            <div key={tech.name} className="flex flex-col items-center p-4 bg-dark-dark/50 rounded-xl border border-gray-700/50 hover:border-neon-blue transition-all duration-300 transform hover:-translate-y-2">
                                                <div className="w-16 h-16 mb-3 flex items-center justify-center bg-gradient-to-br from-neon-blue/20 to-neon-purple/20 rounded-lg">
                                                    <i className={`${tech.icon} text-3xl text-neon-blue`}></i>
                                                </div>
                                                <span className="text-gray-300 font-medium">{tech.name}</span>
                                            </div>
                                        ))}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    {/* Projects Section */}
                    <ProjectsSection scrollToSection={scrollToSection} />

                    {/* Education Section */}
                    <EducationSection />

                    {/* Contact Section */}
                    <ContactSection showToast={showToast} />

                    {/* Footer */}
                    <footer className="py-8 border-t border-gray-800">
                        <div className="container mx-auto px-6">
                            <div className="flex flex-col md:flex-row justify-between items-center">
                                <div className="mb-4 md:mb-0">
                                    <p className="text-gray-400">© 2025 DATECHWORLD. All rights reserved.</p>
                                </div>
                                <div>
                                    <p className="text-gray-400">
                                        Designed and developed with <i className="fas fa-heart text-red-500"></i> by DATECHWORLD
                                    </p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            );
        };

        // Projects Section Component
        const ProjectsSection = ({ scrollToSection }) => {
            const projects = [
                {
                    title: "TranzitPay Home",
                    description: "Modern payment gateway landing page with responsive design.",
                    link: "https://tranzitpay.com/landing/index",
                    tags: ["HTML", "CSS", "JS"],
                    icon: "fas fa-code"
                },
                {
                    title: "TranzitPay Dashboard",
                    description: "User dashboard for managing transactions and account settings.",
                    link: "https://tranzitpay.com/dashboard/home/",
                    tags: ["Vue.js", "PHP"],
                    icon: "fas fa-tachometer-alt"
                },
                {
                    title: "Trinity Vineyard",
                    description: "Church website with event management and donation system.",
                    link: "https://trinityvineyard.org/",
                    tags: ["HTML", "CSS", "JS"],
                    icon: "fas fa-church"
                }
            ];

            return (
                <section id="projects" className="py-20 bg-dark-dark/50">
                    <div className="container mx-auto px-6">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl md:text-4xl font-bold font-orbitron mb-4">
                                <span className="gradient-text">Featured Projects</span>
                            </h2>
                            <p className="text-gray-400 max-w-2xl mx-auto">A showcase of my latest work and innovative solutions</p>
                        </div>
                        
                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                            {projects.map((project, index) => (
                                <div key={project.title} className="bg-dark-light/50 backdrop-blur-md rounded-2xl border border-gray-700/50 overflow-hidden transition-all duration-500 transform hover:-translate-y-2 hover:shadow-xl hover:shadow-neon-blue/20">
                                    <div className="h-48 bg-gradient-to-br from-neon-blue/20 to-neon-purple/20 relative overflow-hidden">
                                        <div className="absolute inset-0 bg-dark-dark/70 flex items-center justify-center">
                                            <i className={`${project.icon} text-5xl text-neon-blue`}></i>
                                        </div>
                                    </div>
                                    <div className="p-6">
                                        <h3 className="text-xl font-bold text-white mb-2 font-orbitron">{project.title}</h3>
                                        <p className="text-gray-400 mb-4">{project.description}</p>
                                        <div className="flex justify-between items-center">
                                            <a 
                                                href={project.link} 
                                                target="_blank" 
                                                rel="noopener noreferrer"
                                                className="text-neon-blue hover:text-neon-cyan transition-colors duration-300"
                                            >
                                                View Project <i className="fas fa-arrow-right ml-1"></i>
                                            </a>
                                            <div className="flex space-x-2">
                                                {project.tags.map((tag, tagIndex) => (
                                                    <span 
                                                        key={tag} 
                                                        className={`text-xs px-2 py-1 rounded ${
                                                            tagIndex === 0 ? 'bg-neon-blue/20 text-neon-blue' :
                                                            tagIndex === 1 ? 'bg-neon-purple/20 text-neon-purple' :
                                                            'bg-neon-green/20 text-neon-green'
                                                        }`}
                                                    >
                                                        {tag}
                                                    </span>
                                                ))}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ))}
                        </div>
                        
                        <div className="text-center">
                            <button 
                                className="px-6 py-3 border border-neon-blue rounded-lg font-semibold text-neon-blue hover:bg-neon-blue hover:bg-opacity-10 transition-all duration-300 flex items-center mx-auto"
                                onClick={() => scrollToSection('contact')}
                            >
                                <i className="fas fa-eye mr-2"></i> View All Projects
                            </button>
                        </div>
                    </div>
                </section>
            );
        };

        // Education Section Component
        const EducationSection = () => {
            const education = [
                {
                    period: "2020 - 2024",
                    title: "B.Sc. Computer Science",
                    institution: "Ambrose Alli University Ekpoma (AAUE)",
                    description: "Graduated with a focus on software engineering and web technologies."
                },
                {
                    period: "2023 - 2024",
                    title: "Diploma in Web Development",
                    institution: "Tranzit Tech Academy",
                    description: "Completed intensive training in modern web development technologies and best practices."
                }
            ];

            const certifications = [
                {
                    title: "Web Development Certification",
                    institution: "Tranzit Tech Academy",
                    icon: "fas fa-certificate"
                },
                {
                    title: "Vue.js Framework Certification",
                    institution: "Online Course",
                    icon: "fab fa-vuejs"
                }
            ];

            return (
                <section id="education" className="py-20">
                    <div className="container mx-auto px-6">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl md:text-4xl font-bold font-orbitron mb-4">
                                <span className="gradient-text">Education & Certifications</span>
                            </h2>
                            <p className="text-gray-400 max-w-2xl mx-auto">My academic background and professional certifications</p>
                        </div>
                        
                        <div className="max-w-4xl mx-auto">
                            {/* Education Timeline */}
                            <div className="mb-16">
                                <h3 className="text-2xl font-bold text-white mb-8 font-orbitron text-center">Education</h3>
                                
                                <div className="space-y-8">
                                    {education.map((edu, index) => (
                                        <div key={index} className="flex flex-col md:flex-row items-start">
                                            <div className="md:w-1/3 mb-4 md:mb-0">
                                                <div className="inline-block px-4 py-2 bg-neon-blue/20 text-neon-blue rounded-lg font-semibold">
                                                    {edu.period}
                                                </div>
                                            </div>
                                            <div className="md:w-2/3 bg-dark-light/50 backdrop-blur-md rounded-2xl border border-gray-700/50 p-6">
                                                <h4 className="text-xl font-bold text-white mb-2">{edu.title}</h4>
                                                <p className="text-neon-blue mb-2">{edu.institution}</p>
                                                <p className="text-gray-400">{edu.description}</p>
                                            </div>
                                        </div>
                                    ))}
                                </div>
                            </div>
                            
                            {/* Certifications */}
                            <div>
                                <h3 className="text-2xl font-bold text-white mb-8 font-orbitron text-center">Certifications</h3>
                                
                                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    {certifications.map((cert, index) => (
                                        <div key={index} className="bg-dark-light/50 backdrop-blur-md rounded-2xl border border-gray-700/50 p-6 text-center transition-all duration-300 transform hover:-translate-y-1">
                                            <div className="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-neon-blue/20 to-neon-purple/20 rounded-full flex items-center justify-center">
                                                <i className={`${cert.icon} text-2xl text-neon-blue`}></i>
                                            </div>
                                            <h4 className="text-lg font-bold text-white mb-2">{cert.title}</h4>
                                            <p className="text-gray-400 text-sm">{cert.institution}</p>
                                        </div>
                                    ))}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            );
        };

        // Contact Section Component
        const ContactSection = ({ showToast }) => {
            const [formData, setFormData] = useState({
                name: '',
                email: '',
                message: ''
            });
            const [isSubmitting, setIsSubmitting] = useState(false);

            const handleChange = (e) => {
                setFormData({
                    ...formData,
                    [e.target.name]: e.target.value
                });
            };

            const handleSubmit = async (e) => {
                e.preventDefault();
                setIsSubmitting(true);

                try {
                    // Simulate API call
                    await new Promise(resolve => setTimeout(resolve, 2000));
                    
                    // In a real application, you would send the data to your backend here
                    console.log('Form submitted:', formData);
                    
                    showToast('Message sent successfully! We will get back to you soon.', 'success');
                    setFormData({ name: '', email: '', message: '' });
                } catch (error) {
                    showToast('Failed to send message. Please try again.', 'error');
                } finally {
                    setIsSubmitting(false);
                }
            };

            const contactInfo = [
                {
                    icon: "fas fa-envelope",
                    title: "Email",
                    content: "okojieallwell@gmail.com",
                    link: "mailto:okojieallwell@gmail.com"
                },
                {
                    icon: "fas fa-phone",
                    title: "Phone",
                    content: "+234 704 479 2334",
                    link: "tel:+2347044792334"
                },
                {
                    icon: "fas fa-map-marker-alt",
                    title: "Location",
                    content: "Nigeria",
                    link: null
                }
            ];

            const socialLinks = [
                { platform: "github", icon: "fab fa-github" },
                { platform: "linkedin-in", icon: "fab fa-linkedin-in" },
                { platform: "twitter", icon: "fab fa-twitter" },
                { platform: "instagram", icon: "fab fa-instagram" }
            ];

            return (
                <section id="contact" className="py-20 bg-dark-dark/50">
                    <div className="container mx-auto px-6">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl md:text-4xl font-bold font-orbitron mb-4">
                                <span className="gradient-text">Get In Touch</span>
                            </h2>
                            <p className="text-gray-400 max-w-2xl mx-auto">Ready to bring your ideas to life? Let's create something amazing together.</p>
                        </div>
                        
                        <div className="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12">
                            {/* Contact Info */}
                            <div className="bg-dark-light/50 backdrop-blur-md rounded-2xl border border-gray-700/50 p-8">
                                <h3 className="text-2xl font-bold text-white mb-6 font-orbitron">Let's Connect</h3>
                                
                                <div className="space-y-6">
                                    {contactInfo.map((info, index) => (
                                        <div key={index} className="flex items-start">
                                            <div className="w-12 h-12 bg-gradient-to-br from-neon-blue/20 to-neon-purple/20 rounded-lg flex items-center justify-center mr-4">
                                                <i className={`${info.icon} text-neon-blue`}></i>
                                            </div>
                                            <div>
                                                <h4 className="text-white font-semibold">{info.title}</h4>
                                                {info.link ? (
                                                    <a href={info.link} className="text-gray-400 hover:text-neon-blue transition-colors duration-300">{info.content}</a>
                                                ) : (
                                                    <p className="text-gray-400">{info.content}</p>
                                                )}
                                            </div>
                                        </div>
                                    ))}
                                </div>
                                
                                <div className="mt-8 pt-6 border-t border-gray-700/50">
                                    <h4 className="text-white font-semibold mb-4">Follow Me</h4>
                                    <div className="flex space-x-4">
                                        {socialLinks.map((social, index) => (
                                            <a key={index} href="#" className="w-10 h-10 rounded-full bg-dark-dark flex items-center justify-center border border-gray-700 hover:border-neon-blue hover:bg-neon-blue/10 transition-all duration-300">
                                                <i className={`${social.icon} text-neon-blue`}></i>
                                            </a>
                                        ))}
                                    </div>
                                </div>
                            </div>
                            
                            {/* Contact Form */}
                            <div className="bg-dark-light/50 backdrop-blur-md rounded-2xl border border-gray-700/50 p-8">
                                <h3 className="text-2xl font-bold text-white mb-6 font-orbitron">Send Message</h3>
                                
                                <form className="space-y-6" onSubmit={handleSubmit}>
                                    <div>
                                        <label htmlFor="name" className="block text-gray-300 mb-2">Your Name</label>
                                        <input
                                            type="text"
                                            id="name"
                                            name="name"
                                            value={formData.name}
                                            onChange={handleChange}
                                            className="w-full bg-dark-dark border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-neon-blue transition-colors duration-300"
                                            placeholder="Enter your name"
                                            required
                                            disabled={isSubmitting}
                                        />
                                    </div>
                                    
                                    <div>
                                        <label htmlFor="email" className="block text-gray-300 mb-2">Your Email</label>
                                        <input
                                            type="email"
                                            id="email"
                                            name="email"
                                            value={formData.email}
                                            onChange={handleChange}
                                            className="w-full bg-dark-dark border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-neon-blue transition-colors duration-300"
                                            placeholder="Enter your email"
                                            required
                                            disabled={isSubmitting}
                                        />
                                    </div>
                                    
                                    <div>
                                        <label htmlFor="message" className="block text-gray-300 mb-2">Your Message</label>
                                        <textarea
                                            id="message"
                                            name="message"
                                            value={formData.message}
                                            onChange={handleChange}
                                            className="w-full bg-dark-dark border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-neon-blue transition-colors duration-300"
                                            rows="4"
                                            placeholder="Enter your message"
                                            required
                                            disabled={isSubmitting}
                                        ></textarea>
                                    </div>
                                    
                                    <button 
                                        type="submit" 
                                        className="w-full bg-gradient-to-r from-neon-blue to-neon-purple rounded-lg py-3 font-semibold text-white hover:shadow-lg hover:shadow-neon-blue/30 transition-all duration-300 flex items-center justify-center disabled:opacity-50 disabled:cursor-not-allowed"
                                        disabled={isSubmitting}
                                    >
                                        {isSubmitting ? (
                                            <>
                                                <i className="fas fa-spinner fa-spin mr-2"></i>
                                                Sending...
                                            </>
                                        ) : (
                                            <>
                                                <i className="fas fa-paper-plane mr-2"></i> Send Message
                                            </>
                                        )}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            );
        };

        // Helper functions
        const getIconName = (section) => {
            const icons = {
                about: 'user',
                technologies: 'laptop-code',
                projects: 'folder-open',
                education: 'graduation-cap',
                certificates: 'certificate',
                contact: 'envelope'
            };
            return icons[section] || 'circle';
        };

        const capitalizeFirstLetter = (string) => {
            return string.charAt(0).toUpperCase() + string.slice(1);
        };

        // Render the App
        const root = ReactDOM.createRoot(document.getElementById('root'));
        root.render(<App />);
    </script>
</body>
</html>