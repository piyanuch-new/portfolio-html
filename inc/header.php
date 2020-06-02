<header>
	<a href="index.php" class="logo">P</a>
    <a class="btn-mobile">
    	<span></span>
    	<span></span>
    	<span></span>        	
    </a>
    <nav>
        <ul class="menu">
        	<li>
        		<a href="index.php"<?php if ($activePage =="home") {?> class="active" <?php } ?>>About</a>
        	</li>
        	<li>
        		<a href="experience.php"<?php if ($activePage =="experience") {?> class="active" <?php } ?>>Experience</a>
        	</li>
        	<li>
        		<a href="skill.php"<?php if ($activePage =="skill") {?> class="active" <?php } ?>>Skill</a>
        	</li>
        	<li>
        		<a href="portfolio.php"<?php if ($activePage =="portfolio") {?> class="active" <?php } ?>>Porfolio</a>
        	</li>            
        </ul>
    </nav>
</header>