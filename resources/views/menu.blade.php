{{-- 
<a href="https://google.com">Google</a>
<a href="https://instagram.com">Instagram</a>
<a href="<? echo route("skincare", $nama)?>">MY SKIN CARE</a>
<a href="/skincaredian">skintipe</a>|<a href="/myskincare">myskincare</a>|<a href="/skincare-routine">yourproblem</a>
<a href="/wajah">wajah</a>
<a href="/kulit">kulit</a> --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?php echo route("ut")?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo route("sc")?>">skincare</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo route("ch")?>">Chat</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>