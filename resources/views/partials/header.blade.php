<header>
  <img id="Logo" src="https://cdn.shortpixel.ai/client/q_lossy,ret_img,w_250,h_145/https://www.lamolisana.it/wp-content/uploads/2020/05/marchio-sito-test.png" alt="">
  <nav>
    <ul class="menu">
      <li><a href="{{route('home')}}" class="link{{ (url()->current() == route('home')) ? 'rosso' : ''}}">Home</a></li>
      <li><a href="{{route('prodotti')}}" class="link {{ (url()->current() == route('prodotti')) ? 'rosso' : ''  }}">Prodotti</a></li>
      <li><a href="{{route('contatti')}}" class="link {{ (url()->current() == route('contatti')) ? 'rosso' : ''  }}">Contatti</a></li>
    </ul>
  </nav>
</header>
