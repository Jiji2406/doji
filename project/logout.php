<?php
    session_start();
    session_destroy();
?>

<script>
    alert("Thank you for using this application!nYou have been logout");
    window.location.href="index.php";
</script>
