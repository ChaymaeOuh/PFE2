<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
  <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
  <div class="logo"><a href="{{ url('/') }}" class="simple-text logo-normal">
      iostore
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{ Request::is('dashboard') ? 'active':'' }} ">
        <a class="nav-link" href="{{ url('dashboard')}}">
          <i class="material-icons">dashboard</i>
          <p>Tableau de bord</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('produits') ? 'active':'' }}">
        <a class="nav-link" href="{{ url('produits') }}">
          <i class="material-icons">store</i>
          <p>Produits</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('add-produits') ? 'active':'' }}">
        <a class="nav-link" href="{{ url('add-produits') }}">
          <i class="material-icons">add</i>
          <p>Ajouter des produits</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('orders') ? 'active':'' }} ">
        <a class="nav-link" href="{{ url('orders') }}">
          <i class="material-icons">content_paste</i>
          <p>Commandes</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('users') ? 'active':'' }} ">
        <a class="nav-link" href="{{ url('users') }}">
          <i class="material-icons">person</i>
          <p>clients</p>
        </a>
      </li>



    </ul>
  </div>
</div>