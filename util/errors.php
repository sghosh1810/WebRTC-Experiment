<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
<?php  if (count($errors) > 0) : ?>
  <div class="error">
    <?php foreach ($errors as $error) : ?>
      <?php phpAlert($error);?>
      <?php break; ?>
  	<?php endforeach ?>
  </div>
<?php  endif ?>