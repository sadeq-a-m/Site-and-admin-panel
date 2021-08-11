<header>
    <nav>
        <ul>
            <li class="cogs"><a href="#"><i class="fas fa-cogs"></i></a></li>
            <li><a href="#"><span>{{auth()->user()->name}}</span><img src="/storage/users/{{auth()->user()->image}}" class="user-image" alt="user image" style=""></a></li>
            <li><a href="#"><i class="fas fa-bell"></i><sup class="label bg-danger">3</sup></a></li>
            <a href="#" class="bars"><i class="fas fa-bars"></i></a>
        </ul>
    </nav>
</header>