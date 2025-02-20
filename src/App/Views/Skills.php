<?= loadComponent("Head");
loadComponent("Navbar");
?>
<div class="bg">
    <?= loadComponent("Links") ?>
    <div class="skills-container">
        <div class="skills-title">SKILLS</div>
        <div class="skill">
            <div class="skill-name">JavaScript</div>
            <div class="progress-bar">
                <div class="progress-fill" style="width: 80%;"></div>
            </div>
        </div>

        <div class="skill">
            <div class="skill-name">PHP</div>
            <div class="progress-bar">
                <div class="progress-fill" style="width: 85%;"></div>
            </div>
        </div>

        <div class="skill">
            <div class="skill-name">React.js</div>
            <div class="progress-bar">
                <div class="progress-fill" style="width: 75%;"></div>
            </div>
        </div>

        <div class="skill">
            <div class="skill-name">Node.js</div>
            <div class="progress-bar">
                <div class="progress-fill" style="width: 75%;"></div>
            </div>
        </div>

        <div class="skill">
            <div class="skill-name">MongoDB</div>
            <div class="progress-bar">
                <div class="progress-fill" style="width: 70%;"></div>
            </div>
        </div>

        <div class="skill">
            <div class="skill-name">HTML & CSS</div>
            <div class="progress-bar">
                <div class="progress-fill" style="width: 95%;"></div>
            </div>
        </div>
    </div>
</div>

<?= loadComponent("Tail");?>