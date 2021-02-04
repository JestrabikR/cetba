<div class="container d-flex justify-content-center">
  <div class="card rounded-50" style="width: 32rem; margin-top: 4rem; padding: 2rem; text-align: left">
    <div class="testbox">
        <form method="post" action="<?php echo base_url()?>Cetba_controller/form_validation" >
        <div class="banner">
            <h1>Přidání nové knihy</h1>
        </div>
        <div class="columns">
            <div class="row">
                <div class="col col-2 col-md-2">
                        <label for="autor">Autor<span>*</span></label>
                </div>
                <div class="col align-content-start">   
                    <div class="item d-flex flex-column">
                        <input id="autor" type="text" name="autor" required/>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 20px">
                <div class="col col-2 col-md-2">
                    <label for="nazev">Název<span>*</span></label>
                </div>
                <div class="col align-content-start">
                    <div class="item d-flex flex-column">
                        <input id="nazev" type="text" name="nazev" required/>
                    </div>
                </div>
            </div>
            
            <div class="row" style="margin-top: 20px">
                <div class="col col-2 col-md-2">        
                    <label for="pocet_stranek">Počet Stránek<span>*</span></label>
                </div>
                <div class="col align-content-start">
                    <div class="item d-flex flex-column">
                        <input id="pocet_stranek" type="number" name="pocet_stranek" required/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-2 col-md-2">
                    <label for="prebal_knihy">Přebal Knihy<span>*</span></label>
                </div>
                <div class="col align-content-start">
                    <div class="item d-flex flex-column">
                        <input id="nazev" type="text" name="prebal" required/>
                    </div>
                </div>
            </div>

            
                <div class="item d-flex flex-column" style="margin-top: 20px">
                    <label for="anotace">Anotace<span>*</span></label>
                    <textarea id="anotace" name="anotace" cols="40" rows="5"></textarea>
                </div>
            <div style="margin-top: 20px">
                <label for="obdobi">Období:</label>
                <select name="obdobi" id="odobi">
                    <option value="1">Světová a česká literatura do konce 18. století</option>
                    <option value="2">Světová a česká literatura do konce 19. století</option>
                    <option value="3">Světová literatura 20. a 21. století</option>
                    <option value="4">Česká literatura 20. a 21. století</option>
                </select>
            </div>
        </div>
        <div class="btn-block" style="margin-top: 20px;">
            <input class="btn btn-primary btn-block" type="submit" name="insert" value="Uložit">
        </div>
        </form>
    </div>
  </div>  
</div>