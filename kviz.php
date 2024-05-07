<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="CSS/skladatalj.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
</head>
<body>
    <?php
      include("Includes/navigacija.php");
    ?>
          <div class="modra_crta"></div>

    <div class="container mt-5">
      <h1 class="text-center mb-4">Kvizi - Osnove</h1>
    
      <div class="card">
        <div class="card-header">
          1. Vprašanje
        </div>
        <div class="card-body">
          <p class="card-text crna">Ali računalnik obdeluje podatke?</p>
          <div class="form-group">
            <div class="custom-control custom-radio">
              <input type="radio" id="v11" name="v11" class="custom-control-input">
              <label class="custom-control-label crna" for="v11">DA</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="v12" name="v12" class="custom-control-input">
              <label class="custom-control-label crna" for="v12">NE</label>
            </div>

          </div>
        </div>
      </div>
      <div class="modra_crta" style="margin-top: 10px;"></div>
      <br />
      <div class="card">
        <div class="card-header">
          2. Vprašanje
        </div>
        <div class="card-body">
          <p class="card-text crna">Katera komponenta računalnika skrbi za obdelavo grafike?</p>
          <div class="form-group">
            <div class="custom-control custom-radio">
              <input type="checkbox" id="v21" name="v21" class="custom-control-input">
              <label class="custom-control-label crna" for="v21">CPU</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="checkbox" id="v22" name="v22" class="custom-control-input">
              <label class="custom-control-label crna" for="v22">GPU</label>
              </div>
              <input type="checkbox" id="v23" name="v23" class="custom-control-input">
              <label class="custom-control-label crna" for="v23">RAM</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="checkbox" id="v24" name="v24" class="custom-control-input">
              <label class="custom-control-label crna" for="v24">SSD</label>
            </div>

          </div>
        </div>
      
      <div class="modra_crta" style="margin-top: 10px;"></div>
      <br />
      <div class="card">
        <div class="card-header">
          3. Vprašanje
        </div>
        <div class="card-body">
          <p class="card-text crna">Kaj omogoča uporabniku, da vnese podatke v računalnik?</p>
          <div class="form-group">
            <div class="custom-control custom-radio">
              <input type="checkbox" id="v31" name="v31" class="custom-control-input">
              <label class="custom-control-label crna" for="v31">Monitor</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="checkbox" id="v32" name="v32" class="custom-control-input">
              <label class="custom-control-label crna" for="v32">Miška</label>
              </div>
              <input type="checkbox" id="v33" name="v33" class="custom-control-input">
              <label class="custom-control-label crna" for="v33">Tipkovnica</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="checkbox" id="v34" name="v34" class="custom-control-input">
              <label class="custom-control-label crna" for="v34">Zvočnik</label>
            </div>

          </div>
        </div>
      
      <div class="modra_crta" style="margin-top: 10px;"></div>
      <br />


      <div class="card">
        <div class="card-header">
          4. Vprašanje
        </div>
        <div class="card-body">
          <p class="card-text crna">Katera naprava omogoča, da računalnik prikaže rezultate svojega delovanja?</p>
          <div class="form-group">
            <div class="custom-control custom-radio">
              <input type="checkbox" id="v41" name="v41" class="custom-control-input">
              <label class="custom-control-label crna" for="v41">Miška</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="checkbox" id="v42" name="v42" class="custom-control-input">
              <label class="custom-control-label crna" for="v42">Tiskalnik</label>
              </div>
              <input type="checkbox" id="v43" name="v43" class="custom-control-input">
              <label class="custom-control-label crna" for="v43">Zaslon (monitor)</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="checkbox" id="v44" name="v44" class="custom-control-input">
              <label class="custom-control-label crna" for="v44">Projektor</label>
            </div>

          </div>
        </div>
     
      <div class="modra_crta" style="margin-top: 10px;"></div>
      <br />

      <div class="card">
        <div class="card-header">
          4. Vprašanje
      </div>
      <div class="card-body">
          <p class="card-text crna">Kakšno vlogo ima operacijski sistem pri delovanju računalnika?</p>
          <div class="form-group">
              <select class="custom-select crna" id="vprašanje" name="vprašanje">
                  <option value="nadzor" class="crna">Nadzoruje delovanje računalniških iger</option>
                  <option value="omogoca" class="crna">Omogoča komunikacijo med uporabnikom in strojno opremo</option>
                  <option value="izvaja" class="crna">Izvaja računske operacije</option>
                  <option value="hladi" class="crna">Hladi komponente računalnika</option>
              </select>
          </div>
      </div>
      
        </div>
      
      <div class="modra_crta" style="margin-top: 10px;"></div>
      <br />
 </div>
    </div>  
      
    </div>
      <div class="text-center mt-4">
        <button class="btn btn-primary" onclick="osvezi()">Oddaj</button>
      </div>
   </div>
 </div>
 <br />
    <footer class="Nogica" align="center">
      Vse pravice pridržane našim velikim penzijam.
    </footer>
   <script>
      function osvezi(){
        window.location.reload();
      }

</script>
    

</body>
</html>