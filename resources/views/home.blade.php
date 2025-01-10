<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimarket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Header -->
    <header class="d-flex justify-content-between align-items-center p-3 bg-light">
    <div class="d-flex align-items-center">
        <img src="{{ asset('images/SupermarketLogo.png') }}" alt="Supermarket Logo" style="width: 70px; height: 70px;">
        <h1 class="ms-2">Jayusman Minimarket</h1>
    </div>
    <div>
        <a href="/login" class="btn btn-outline-primary me-2">Login</a>
        <a href="/register" class="btn btn-primary">Register</a>
    </div>
</header>



    <!-- Image Cards Section -->
    <div class="container my-5">
    <h2 class="text-center mb-4">Our Products</h2>
    <div class="row justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card shadow" style="width: 18rem;">
                <img src="{{ asset('images/MakananKemasan.png') }}" class="card-img-top" alt="Makanan Kemasan" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Makanan Kemasan</h5>
                    <p class="card-text">Produk makanan kemasan yang praktis dan siap saji, cocok untuk kebutuhan sehari-hari atau sebagai cadangan makanan di rumah</p>
                    <div class="detail-description d-none"></div> <!-- Placeholder for detailed description -->
                    <button class="btn btn-primary" onclick="toggleDescription(this, 'Makanan kemasan ini diproduksi dengan bahan-bahan berkualitas tinggi dan melalui proses pengemasan yang higienis. Tersedia dalam berbagai varian rasa dan ukuran, makanan ini dapat memenuhi kebutuhan nutrisi dengan cara yang mudah dan cepat. Cocok untuk semua kalangan, mulai dari anak-anak hingga dewasa, dan dapat disimpan dalam waktu yang lama tanpa mengurangi kualitas rasa.')">View Details</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card shadow" style="width: 18rem;">
                <img src="{{ asset('images/MinumanKemasan.png') }}" class="card-img-top" alt="Minuman Kemasan" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Minuman Kemasan</h5>
                    <p class="card-text">Minuman kemasan segar yang hadir dalam berbagai rasa untuk menemani aktivitas sehari-hari Anda.</p>
                    <div class="detail-description d-none"></div> <!-- Placeholder for detailed description -->
                    <button class="btn btn-primary" onclick="toggleDescription(this, 'Minuman kemasan ini dirancang untuk memberikan kesegaran kapan saja dan di mana saja. Dengan pilihan rasa buah, teh, dan kopi, minuman ini menawarkan kesegaran alami yang dapat dinikmati dengan mudah. Proses pengemasan modern memastikan kebersihan dan kualitas rasa tetap terjaga hingga sampai ke tangan Anda. Ideal untuk dinikmati saat bekerja, bersantai, atau berolahraga.')">View Details</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card shadow" style="width: 18rem;">
                <img src="{{ asset('images/BuahProduk.png') }}" class="card-img-top" alt="Buah Produk" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Buah Produk</h5>
                    <p class="card-text">Buah segar yang dipilih langsung dari kebun, memastikan Anda mendapatkan produk terbaik setiap saat..</p>
                    <div class="detail-description d-none"></div> <!-- Placeholder for detailed description -->
                    <button class="btn btn-primary" onclick="toggleDescription(this, 'Buah produk kami dipilih dengan hati-hati untuk memastikan kesegaran dan kualitas terbaik. Setiap buah dipanen pada puncak kematangannya dan dikemas dengan cermat untuk menjaga kesegarannya hingga sampai di meja Anda. Cocok untuk dimakan langsung atau dijadikan bahan dalam berbagai hidangan sehat, buah produk ini adalah pilihan tepat untuk gaya hidup sehat Anda')">View Details</button>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>Address: Jalan Raya Minimarket No. 123, Kota Anda</p>
        <p>Instagram: <a href="https://instagram.com/minimarket" target="_blank" class="text-white">@minimarket</a></p>
    </footer>

    <script>
        function toggleDescription(button, description) {
            let cardBody = button.parentElement;
            let detailDiv = cardBody.querySelector('.detail-description');
            if (detailDiv.classList.contains('d-none')) {
                detailDiv.innerText = description;
                detailDiv.classList.remove('d-none');
                detailDiv.classList.add('mt-2');
            } else {
                detailDiv.classList.add('d-none');
                detailDiv.innerText = '';
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>