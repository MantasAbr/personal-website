<?php
    echo "
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">

        <div class=\"header\">


            <a href=\"index.php\" class=\"home-button\">
                <i class=\"material-icons\" style=\"font-size: 32px;\">home</i>
            </a>

            <div class=\"navigation-container\">

                <div class=\"dropdown\">
                    <button class=\"dropbtn\">Activity</button>
                    <div class=\"dropdown-content\">
                        <a href=\"\">Link 1</a>
                    </div>
                </div>

                <div class=\"dropdown\">
                    <button class=\"dropbtn\">Skills</button>
                    <div class=\"dropdown-content\">
                        <a href=\"\">Link 1</a>
                    </div>
                </div>

                <button class=\"dropbtn\" onclick=\"location.href='education.php'\">Education</button>

                <button class=\"dropbtn\">Contacts</button>

            </div>

        </div>
    ";
?>