<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index.php">BIRTHDAY WISH</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
    <?php
if( isset( $_SESSION['name'] ) ){
    echo '
        <li class="nav-item p-2">
            Hello, '.$_SESSION['name'].'!
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">logout</a>
        </li>
    ';
}
?>
<li class="nav-item">
    <a class="nav-link" href="result.php">result</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="login.php">login</a>
</li>

</ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Name Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
</div>
</nav>