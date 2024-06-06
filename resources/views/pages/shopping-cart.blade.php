@extends('layouts.app')
@section('content')
<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Keranjang - 2 barang</h5>
          </div>
          <div class="card-body">
            <!-- Item tunggal -->
            <div class="row">
              <!-- Gambar -->
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
                    class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
              </div>
              <!-- Data -->
              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <p><strong>Kemeja Denim Biru</strong></p>
                <p>Warna: biru</p>
                <p>Ukuran: M</p>
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm me-1 mb-2" data-mdb-tooltip-init
                  title="Hapus barang">
                  <i class="fas fa-trash"></i>
                </button>
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-sm mb-2" data-mdb-tooltip-init
                  title="Pindahkan ke daftar keinginan">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
              <!-- Kuantitas -->
              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-3 me-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div data-mdb-input-init class="form-outline">
                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control active" />
                    <label class="form-label" for="form1">Kuantitas</label>
                  </div>
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-3 ms-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- Harga -->
                <p class="text-start text-md-center">
                  <strong>Rp 250.000</strong>
                </p>
              </div>
            </div>
            <!-- Item tunggal -->

            <hr class="my-4" />

            <!-- Item tunggal -->
            <div class="row">
              <!-- Gambar -->
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
                    class="w-100" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
              </div>
              <!-- Data -->
              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <p><strong>Hoodie Merah</strong></p>
                <p>Warna: merah</p>
                <p>Ukuran: M</p>
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm me-1 mb-2" data-mdb-tooltip-init
                  title="Hapus barang">
                  <i class="fas fa-trash"></i>
                </button>
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-sm mb-2" data-mdb-tooltip-init
                  title="Pindahkan ke daftar keinginan">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
              <!-- Kuantitas -->
              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-3 me-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div data-mdb-input-init class="form-outline">
                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control active" />
                    <label class="form-label" for="form1">Kuantitas</label>
                  </div>
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-3 ms-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- Harga -->
                <p class="text-start text-md-center">
                  <strong>Rp 250.000</strong>
                </p>
              </div>
            </div>
            <!-- Item tunggal -->
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>Pengiriman yang diharapkan</strong></p>
            <p class="mb-0">12.10.2020 - 14.10.2020</p>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>Kami menerima</strong></p>
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" alt="Visa" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp"
              alt="Tanda penerimaan PayPal" />
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Ringkasan</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Produk
                <span>Rp 500.000</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Pengiriman
                <span>Rp 24.000</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total pembayaran</strong>
                  <strong>
                    <p class="mb-0">(termasuk PPN)</p>
                  </strong>
                </div>
                <span><strong>Rp 500.000</strong></span>
              </li>
            </ul>

            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">
              Lanjutkan ke pembayaran
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

