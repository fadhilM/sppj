        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color: rgb(222, 222, 224);">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a class="text-dark" href="#">
                        {{ Auth::user()->nama }}
                    </a>
                </li>

                @if (Auth::User()->level==0)
                <li>
                <a class="text-dark" href="{{route('pakar.index')}}">Data Pakar</a>
                </li>    
                @endif

                @if (Auth::User()->level==1)
                <li>
                    <a class="text-dark" href="{{route('penyakit.index')}}">Data Penyakit</a>
                </li>    
                @endif
                @if (Auth::User()->level!=1)
                <li>
                    <a class="text-dark" href="{{route('penyakit.index')}}">Katalog Penyakit</a>
                </li>    
                @endif
                @if (Auth::User()->level!=0)
                <li>
                    <a class="text-dark" href="{{route('gejala.index')}}">Data Gejala</a>
                </li>    
                @endif
                <li>
                    <a class="text-dark" href="{{ route('diagnosa') }}">Diagnosa Penyakit</a>
                </li> 
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->