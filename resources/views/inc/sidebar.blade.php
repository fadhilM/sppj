        <div class="sidebar" data-color="black" data-image="{{ asset('asset/lightBootstrap/assets/img/sidebar-3.jpg')}}">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
                
                Tip 2: you can also add an image using data-image tag
            -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="" class="simple-text">
                        Selamat Datang
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}">
                            <i class="nc-icon nc-bank"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    
                    @if (Auth::user()->level==0)
                    <li>
                        <a class="nav-link" href="{{route('pakar.index')}}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Data Pakar</p>
                        </a>
                    </li>    
                    @endif
                    
                    @if (Auth::user()->level==1)
                    <li>
                        <a class="nav-link" href="{{route('penyakit.index')}}">
                            <i class="nc-icon nc-bullet-list-67"></i>
                            <p>Data Penyakit</p>
                        </a>
                    </li>   
                    @endif
                    
                    @if (Auth::user()->level!=1)
                    <li>
                        <a class="nav-link" href="{{route('penyakit.index')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Katalog Penyakit</p>
                        </a>
                    </li>    
                    @endif
                    
                    @if (Auth::user()->level!=0)
                    <li>
                        <a class="nav-link" href="{{route('gejala.index')}}">
                            <i class="nc-icon nc-fav-remove"></i>
                            <p>Data Gejala</p>
                        </a>
                    </li>     
                    @endif
                    @if (Auth::user()->level!=0)
                    <li>
                        <a class="nav-link" href="{{ route('diagnosa') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Diagnosa Penyakit</p>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>