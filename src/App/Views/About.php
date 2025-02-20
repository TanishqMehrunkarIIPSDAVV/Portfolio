<?php

loadComponent("Head");
loadComponent("Navbar");

?>

<div class="bg">
    <?=loadComponent("Links")?>
    <div class="container about-container">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="../../../images/me.jpg" alt="Tanishq Mehrunkar" class="about-image img-fluid">
            </div>
            <div class="col-md-8">
                <div class="about-content">
                    <h2 class="about-title">ABOUT ME</h2>
                    <p>
                        Passionate and driven Web Developer with over two years of experience in full-stack development, specializing in building dynamic and responsive web applications. Skilled in JavaScript and PHP with frameworks like React.js, Node.js, and Express.js. Currently pursuing an integrated Bachelor and Master of Technology in Information Technology at IIPS, DAVV.
                    </p>
                    <p>
                        Beyond academics, I have hands-on experience in developing and deploying real-world projects, including a Digital Coding Examination System and a Library Management System. My ability to adapt, collaborate, and innovate has enabled me to work effectively in both team-based and freelance environments. A strong problem-solver with a keen interest in technology, gaming, and music, always eager to learn and take on new challenges.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= loadComponent("Tail");?>