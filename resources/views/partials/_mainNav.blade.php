<div class="container">
    <div class="logo"> 
        <a href="/"> Lara<span>gigs</span> </a>
    </div>
    <nav class="main-nav">
        <ul>
            <li>
                <div class="search">
                    <form action="/">
                        <input type="text" placeholder="search here..." id="sText" name="search">
                        <input type="submit" value="Search" id="sButton" >
                    </form>
                </div>
            </li>
            @auth
                <li>
                    <a href="/listings/create">List a gig</a>
                </li>
                <li>
                    <a href="/listings/manage">Manage Listings</a>
                </li>
                <li>
                    <a href="">{{auth()->user()->name}}</a>
                </li>
                <li>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            Logout
                        </button>
                    </form>
                </li>
                
                @else
                <li>
                    <a href="/create">Register</a>
                </li>
                <li>
                    <a href="/login">Login</a>
                </li>
            @endauth
        </ul>
    </nav>                                                                              
</div>