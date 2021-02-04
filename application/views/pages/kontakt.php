<?php
?>
        <div class="container">
            <div  class="container-fluid  text-center fa-2x">
                <div id="jumbotron2" style="color: orange" class="jumbotron jumbotron-fluid">
                    <h1 class="display-1">KONTAKT</h1>
                </div>
            
                <i class="fas fa-user-alt"></i>
                <h1 id="h2" style="color: grey">Tvůrce stránky:</h1> <br>
                <h3 style="color: grey">Radek Jestřabík</h3>
                
                <br>
                
                <i class="fas fa-envelope-open-text fa-1x"></i> 
                <h1 style="color: grey">E-mail:</h1>
                <h4 style="color: grey">jestrabik_radek@oauh.cz</h4>
                
                <br>
                
                <i class="fas fa-phone fa-1x"></i>
                <h1 style="color: grey">Telefon:</h1>
                <h4 style="color: grey">+420 777 425 181</h4>
                <br><br>
                <h4 style="color: grey">Chcete mne kontaktovat ihned?</h4>
                <br>
                
                <div class="accordion" style="text-align: center" id="FormularAccordion">
                  <div class="card">
                      <div class="card-header" style="background-color: #006666" id="Nadpis1">
                      <h2 class="mb-0">
                        <button class="btn btn-link" style="color: black" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          ANO
                        </button>
                      </h2>
                    </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="Nadpis1" data-parent="#FormularAccordion">
                      <div class="card-body" >
                          <form id="formular">
                            <div class="form-group">
                              <label for="exampleFormControlInput1" style="font-size: 25px">Vaše e-mailová adresa</label>
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="jannovak@gmail.com">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1" style="font-size: 25px; color: grey">Vaše zpráva</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pěkný web, máš 1."></textarea>
                            </div>
                          </form>
                      </div>
                <div class="text-center">
                  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" style="color: black">
                   Odeslat
                 </button>
                    <div style="font-size: 15px; color: #black" class="checkbox">
                            <label><input type="checkbox" value=""> Zapamatovat adresu?</label>
                          </div>
                </div>    
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" style="background-color: #006666" id="Nadpis2">
                      <h2 class="mb-0">
                        <button id="sendBTN" class="btn btn-link collapsed" style="color: black;" type="button" data-toggle="collapse" data-target="#collapseTwo"  aria-controls="collapseTwo">
                          NE
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="Nadpis2" data-parent="#FormularAccordion">
                      <div class="card-body">
                          <i class="fas fa-sad-tear fa-2x"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <p style="color: black; font-size: 20px">Chcete se přihlásit k odběru novinek?</p>
               <div style="font-size: 20px; color: #cccccc" class="radio">
                <label><input type="radio" name="radioButton" checked> Ano</label>
               </div>
               <div style="font-size: 20px; color: #cccccc" class="radio">
                <label><input type="radio" name="radioButton"> Ne</label>
               </div> 
        </div>
