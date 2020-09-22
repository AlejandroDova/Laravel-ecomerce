<div class="sidebar shadow">
    <div class="section-top">
        <div class="logo">
            <img src="{{ url('static/imagenes/Meraki.png') }}" class="img-fluid" alt="logo">
        </div>
        <div class="user">
            <span class="subtitle">Hola</span>
            <div class="name">
                {{ Auth::user()->name }} {{ Auth::user()->lastname }}
                <a href="{{ url('logout')}}"><i class="fas fa-sign-out-alt"></i></a>
            </div>
            <div class="email">{{ Auth::user()->email }}</div>
        </div>
    </div>

    <div class="main">
        <ul>
            <li>
                <a href="{{url('/admin')}}" id="a-admin"><i class="fas fa-clipboard-list"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{url('/admin/products')}}" id="a-admin"><i class="fas fa-boxes"></i>Products</a>
            </li>
            <li>
                <a href="{{url('/admin/user')}}" id="a-admin"><i class="fas fa-users" ></i>User</a>
            </li>
            <li>
                <a href="{{url('/admin/categories')}}" id="a-admin"><i class="fas fa-hashtag"></i>Categories</a>
            </li>
        </ul>
    </div>

</div>