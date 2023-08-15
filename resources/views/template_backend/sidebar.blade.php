<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ url('/') }}"><i class="fas fa-key"></i> Halaman Admin</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ url('/') }}"><i class="fas fa-key"></i></a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Home</li>
      <li class=active><a class="nav-link" href="{{ url('/') }}"><i class="fas fa-fire"></i><span>Tampilan Website</span></a></li>
      <li class="menu-header">Konten</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i><span>Posting</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('post.index') }}">List Post</a></li>
          <li><a class="nav-link" href="{{ route('post.tampil_hapus') }}">List Post Dihapus</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-clipboard"></i><span>Kategori</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('category.index') }}">List Kategori</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-bookmark"></i><span>Tag</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('tag.index') }}">List Tag</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i><span>User | Admin</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('user.index') }}">List Admin</a></li>
        </ul>
      </li>
  </aside>
</div>