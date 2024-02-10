<?php include ('controller/cmen.php'); ?>

<nav class="nav">
  <a href="" class="nav_link"> <?php //crear boton para cerrar sesion ?>
  </a>
  <?php if($dat){ foreach ($dat as $dt) { ?>
    <a href="index.php?pg=<?=$dt['idpag'];?>" class="nav_link dropdown-trigger" title="<?=$dt['nompag'];?>">
      <i class='<?=$dt['icono'];?>'></i>
      <span class="nav_name"><?=$dt['nompag'];?></span>
    </a>
  <?php }} ?>
  <a href="" class="nav_link"> <?php //crear boton para cerrar sesion ?>
  </a>
</nav>