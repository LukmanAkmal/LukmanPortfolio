<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>About Me</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a> |
            <a href="{{ route('about') }}">About</a> |
            <a href="{{ route('projects') }}">Projects</a> |
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <section class="about">
        <div class="container">
            <h2>Introduction</h2>
            <p>Hi, I'm Ahmad Lukman, a passionate web developer with experience in building dynamic and responsive websites. My expertise lies in both front-end and back-end technologies, making me a versatile developer capable of tackling various challenges in the development process.</p>
        </div>
    </section>

    <section class="skills">
        <div class="container">
            <h2>Skills</h2>
            <ul>
                <li><strong>Front-end:</strong> HTML, CSS, JavaScript, Bootstrap, Vue.js, React</li>
                <li><strong>Back-end:</strong> PHP, Laravel, Node.js</li>
                <li><strong>Database:</strong> MySQL, PostgreSQL, Firebase</li>
                <li><strong>Version Control:</strong> Git, GitHub</li>
                <li><strong>Other:</strong> API Development, RESTful services</li>
            </ul>
        </div>
    </section>

    <section class="experience">
        <div class="container">
            <h2>Experience</h2>
            <p>I have worked on several web development projects, including:</p>
            <ul>
                <li><strong>Portfolio Website:</strong> Created a personal portfolio using Laravel and Vue.js</li>
                <li><strong>E-commerce Store:</strong> Developed an online store using Laravel and Stripe for payment integration</li>
                <li><strong>Content Management System:</strong> Built a custom CMS for a blogging platform using Laravel</li>
            </ul>
        </div>
    </section>

    <section class="hobbies">
        <div class="container">
            <h2>Hobbies & Interests</h2>
            <p>When I'm not coding, I enjoy:</p>
            <ul>
                <li>Reading tech blogs and staying updated on the latest web development trends</li>
                <li>Exploring new frameworks and tools in the development space</li>
                <li>Playing video games and solving puzzles to sharpen my problem-solving skills</li>
            </ul>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Ahmad Lukman - All Rights Reserved</p>
    </footer>
</body>
</html>
