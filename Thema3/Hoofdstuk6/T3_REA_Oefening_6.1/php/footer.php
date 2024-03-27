<?php
/**
 * User: D.Dessé
 * Date: 27-3-2024
 * File: footer.php
 */
?>
<footer>
    <?php
    if (isset($_COOKIE['username']) && isset($_COOKIE['country']))
    {
        $username = $_COOKIE['username'];
        $country = $_COOKIE['country'];
        $time = date('d/m/Y');
        echo '    
    <div class="footer-content">
        <img src="flags/' . $country. '.png" alt="Footer Image">
        <div class="text-info">
            <span class="name">©'. $username .'</span>||
            <span class="klas">IO1S1B</span>||
            <span class="time">' . $time . '</span> <!-- Display the time -->
        </div>
    </div>
    ';
    }
    ?>
</footer>
