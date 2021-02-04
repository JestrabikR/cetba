
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="<?php echo base_url();?>">Maturitní četba</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarColor02">
		    <ul class="navbar-nav mr-auto">
				<?php foreach($menu as $p): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url($p->nazev)?>"><?= $p->displej_nazev ?><span class="sr-only">(current)</span></a>
                        </li>
                <?php endforeach; ?>
		    </ul>
		  </div>
		</nav>