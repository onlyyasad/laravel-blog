<x-layout>
    <x-slot name="title">
        Home
    </x-slot>
    <x-slot name="main">
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/358691/pexels-photo-358691.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block h-50 w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.pexels.com/photos/1403653/pexels-photo-1403653.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block h-50 w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.pexels.com/photos/1404885/pexels-photo-1404885.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block h-50 w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <h1>Home</h1>
        <p>Welcome to our website!</p>
        <p>Here you can find all the information you need about our products and services.</p>
        <p>Feel free to contact us if you have any questions.</p>
        <p>Thank you for visiting our website!</p>
    </x-slot>
</x-layout>