<div class="container" style="text-align: center">
    <br>
      <?php
      if($get_kniha)
      {
          foreach ($get_kniha as $row) {
      ?>

        <h2>Název: <?php echo $row->nazev_knihy; ?></h2>
        <h2>Autor: <?php echo $row->autor_knihy; ?></h2>
        <h2>Přebal: <?php echo $row->prebal; ?></h2>
        <br>
        <h3>Anotace: <?php echo $row->anotace; ?></h3>
          <?php
              }
          }
          else
          {
          ?>
              <tr>
                   <td colspan="5">Nebyly nalezeny žádné data</td>
              </tr>
          <?php
          }
          ?>

        <?php foreach ($get_kniha as $row)
          {
        ?>

        <?php
          }
        ?>
    </div>
</body>