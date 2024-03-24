<footer>
    <div>
        <?php
        // Check if the country code cookie is set
        if(isset($_COOKIE["userCountryCode"]))
        {
            $countryCode = $_COOKIE["userCountryCode"];
            $imageSrc = "flags/"+ $countryCode +".png";
        } else {}

        // Display the image
        echo "<img src='$imageSrc' alt='Footer Image'>";
        ?>
    </div>
    <div>
        <?php
        // Display the username
        $username = $_COOKIE["userUsernameCookie"];
        echo "Username: $username";
        ?>
    </div>
    <div>
        <?php
        // Get current date
        $currentDate = date("Y-m-d");
        echo "Date: $currentDate";
        ?>
    </div>
</footer>
