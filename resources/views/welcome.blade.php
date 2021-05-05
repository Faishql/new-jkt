<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  

    <title>Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
      <input type="hidden" name="url" id="baseurl" value="{{ baseUrl() }}">
      <input type="hidden" name="token" id="token" value="{{ csrf_token() }}">
    <section >
      
      <div class="container">
        <div class="container-nav">
          <nav>
            <div class="logo">
              <img src="{{ asset('assets/logo.svg') }}" alt="">
            </div>
          </nav>
        </div>
        <div class="hero-content">
          <div class="text">
            <div class="title">
              <h3>ZAKAT</h3>
            </div>
            <div class="paragraph">
              <p>“Ambillah zakat dari sebagian harta mereka, dengan zakat itu kamu membersihkan dan menyucikan mereka dan berdoalah untuk mereka. Sesungguhnya doa kamu itu (menjadi) ketenteraman jiwa bagi mereka. Dan Allah Maha Mendengar lagi Maha Mengetahui.” Al Quran Surat At Taubah Ayat 103</p>
            </div>
            <div class="buttons">
                <button type="button" class="btn btn-secondary" id="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Get Started</button>
            </div>
          </div>
          <div class="svg">
            <img src="{{ asset('assets/undraw_gifts_btw0 1.svg') }}" alt="">
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title fs-2" id="exampleModalLabel">LOGIN</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-4">
                <input type="email" class="form-control " id="email" placeholder="email">
              </div>
              <div class="mb-4">
                <input type="password" class="form-control " id="password" placeholder="password">
              </div>
            </form>
          </div>
          <div class="modal-footer border-top-0">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-secondary" id="send">Send</button>
          </div>
        </div>
      </div>
    </div>
    
    <script src="{{ asset('js/Auth.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>