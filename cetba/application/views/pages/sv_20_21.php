<div class="container"> 
<h1>Světová Literatura 20. století a 21. století</h1>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Č.</th>
            <th scope="col">Autor</th>
            <th scope="col">Dílo</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($strana3): ?>
                 <?php foreach($strana3 as $knihy): ?>
				    <tr class="table-active">
				      <td><?php echo $knihy->id_knihy;?></td>
				      <td><a href="<?php echo base_url("kniha/".$knihy->id_knihy);?>"><?php echo $knihy->nazev_knihy;?></td>
				      <td><?php echo $knihy->autor_knihy;?></td>
				    </tr>
			     <?php endforeach ?>
			    <?php endif ?>
            </tr>
        </tbody>
    </table>
     </div>
</body>