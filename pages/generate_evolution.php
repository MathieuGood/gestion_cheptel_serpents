<h3>Generate population evolution</h3>

<?php
if (isset($_SESSION['open']) && $_SESSION['open'] > 0) {
?>
<input class="button" type="button" onclick="window.location.href='index.php?page=edit_user&id=new_entry'" value="Generate population evolution">

<?php
} else {
    header("Location: index.php?page=admin");
}
?>