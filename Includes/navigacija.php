<nav class="navbar navbar-expand-lg" >
    <div class="container-fluid">
        <a href="index.php"><img src="Images/logobeli.png"  height="35px" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav"> 
        <ul class="navbar-nav"> 
          <li class="nav-item">
            <a class="nav-link" href="teme.php" style="color: white;">Izobraževanje</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kvizi.php" style="color: white;">Kvizi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;">Rezultati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil.php" style="color: white;">Profil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script>
function bigImg(x) {
  x.style.height = "50px";
  x.style.width = "120px";
}
function normalImg(x) {
  x.style.height = "35px";
  x.style.width = "120px";
}

</script>