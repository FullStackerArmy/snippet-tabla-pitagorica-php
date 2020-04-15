<table>
  <thead>
    <tr>
    <?php for ($column = 0; $column <= 7 ; $column++) { ?>
	<th><?php echo $column; ?></th>
    <?php } ?>
    </tr>
  </thead>
  <tbody>
  <?php for ($row = 1; $row <= 7 ; $row++) { ?>
    <tr>
    <?php
    for ($column = 0; $column <= 7 ; $column++) {
      $result = $column;

      if ($column === 0) {
        $result = $row;
      }

      if ($column > 0) {
        $result = $column * $row;
      }
    ?>
    <td><?php echo $result; ?></td>
    <?php } ?>
    </tr>
  <?php } ?>
  </tbody>
</table>
