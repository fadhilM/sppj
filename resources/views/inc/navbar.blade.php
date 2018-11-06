<!-- Navbar -->
            <nav class="navbar navbar-expand-lg" color-on-scroll="500" style="padding-top: 11px;padding-bottom:10px;">
                <div class=" container-fluid ">
                    
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nc-icon nc-badge"></i>
                                    &nbsp
                                    {{ Auth::user()->nama }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{route('profil')}}">Profile</a>
                                    <a class="dropdown-item"  data-toggle="modal" data-target="#exampleModal">
                                        <span class="no-icon">Log out</span>
                                    </a>
                                </div>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            Apakah Anda Yakin Ingin Keluar ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            <button type="button" class="btn btn-primary" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Ya</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Modal -->