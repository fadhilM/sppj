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
                    <a class="text-dark" href="/pakar">Data Pakar</a>
                </li>    
                @endif

                @if (Auth::User()->level==1)
                <li>
                    <a class="text-dark" href="/penyakit">Data Penyakit</a>
                </li>    
                @endif
                @if (Auth::User()->level!=1)
                <li>
                    <a class="text-dark" href="/penyakit">Katalog Penyakit</a>
                </li>    
                @endif
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->