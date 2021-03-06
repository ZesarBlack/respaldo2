<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> En linea...</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="buscar"/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Opciones de usuario</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="{{url( 'home' )}}"><i class='fa fa-home'></i> <span>Página principal</span> </a>
            </li>

          <li class="treeview">
                <a href="#"><i class='fa fa-users'></i> <span>Usuarios</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('lista_usuarios') }}">Ver usuarios</a></li>
                    <li><a href="{{ url('crear_usuario')}}">Crear usuario</a></li>
                </ul>
          </li>

          <li class="treeview">
                <a href="#"><i class='fa fa-wrench'></i> <span>Issues</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('lista_issues') }}">Ver Issue</a></li>
                    <li><a href="{{ url('crear_issue')}}">Nuevo Issue</a></li>
                </ul>
            </li>
            <li class="treeview">
                  <a href="#"><i class='fa fa-file'></i> <span>Proyectos</span> <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                      <li><a href="{{ url('lista_proyectos') }}">Ver proyectos</a></li>
                      <li><a href="{{ url('crear_proyecto')}}">Nuevo proyecto</a></li>
                  </ul>
              </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
