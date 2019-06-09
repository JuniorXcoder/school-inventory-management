<?php

$id = $_GET['id'];
$koneksi->query("delete from alat where id = '$id'");
    
    ?>

<script type="text/javascript">
window.location.href="?page=alat"</script>