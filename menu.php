<div id="menu" class="top-menu">
    <div class="menu-icon"><img src="images/snake.svg" alt="Animal Logo"></div>
    <div class="menu-item"><a href="index.php?page=login">Login</a></div>
    <?php
    if (isset($_SESSION['open']) && $_SESSION['open'] > 0) {
        ?>
        <div class="menu-item admin-menu-item"><a href="index.php?page=animal_list">List of animals</a></div>
        <div class="menu-item admin-menu-item"><a href="index.php?page=breed_animals">Breed animals</a></div>
        <?php
    }
    ?>
   
</div>
