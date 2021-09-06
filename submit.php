    <?php
    if (isset($_POST['submit'])) {
        $email    = $_POST['email'];
        $name    = $_POST['name'];
        $text    = $_POST['text'];
        $no_Wa    = $_POST['noWa'];
        header("location:https://api.whatsapp.com/send?phone=$no_Wa&text=Name:%20$name%20%0DEmail:%20$email%20%0DText:%20$text");
    } else {
        echo "<script>
            window.location=history.go(-1);
        </script>
        ";
    }


    ?>