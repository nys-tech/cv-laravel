
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nayes Portofolio</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    <!-- HEADER -->
    <header>
        <h1>Nayes Portofolio</h1>
        <nav>
            <a href="#tentang">Tentang</a>
            <a href="#pendidikan">Pendidikan</a>
            <a href="#pengalaman">Pengalaman</a>
            <a href="#keahlian">Keahlian</a>
            <a href="#projects">Projects</a>
            <a href="#kontak">Kontak</a>
        </nav>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-text">
            <p>HELLO, I'M</p>
            <h2>{{ $nama }}</h2>
            <p>{{ $deskripsi }}</p>
            <p><strong>NIM:</strong> {{ $nim }}</p>
            <p><strong>Program Studi:</strong> {{ $prodi }}</p>
            <p><strong>Status:</strong> {{ $status }}</p>
            <a href="#kontak" class="btn">Call me yhh</a>
        </div>

        <div class="hero-image">
        <img src="{{ asset('assets/img/foto.jpg') }}" alt="Foto Neysha">
        </div>
    </section>

    <!-- TENTANG -->
    <section id="tentang">
        <h2 class="section-title">About Me</h2>
        <div class="about-content">
            <p>{{ $deskripsi }}</p>
        </div>
    </section>

    <!-- PENDIDIKAN -->
    <section id="pendidikan">
        <h2 class="section-title">Education</h2>
        <div class="card-container">
            @forelse ($education as $edu)
                <div class="card">
                    <h3>{{ $edu['school'] }}</h3>
                    <p>{{ $edu['major'] }}</p>
                    <span>{{ $edu['year'] }}</span>
                </div>
            @empty
                <p>Belum ada data pendidikan.</p>
            @endforelse
        </div>
    </section>

    <!-- PENGALAMAN -->
    <section id="pengalaman">
        <h2 class="section-title">Experience</h2>
        <div class="card-container">
            @forelse ($experiences as $experience)
                <div class="card">
                    <h3>{{ $experience->nama_kegiatan }}</h3>
                    <h4>{{ $experience->posisi }}</h4>
                    <p>{{ $experience->deskripsi }}</p>
                    <span>{{ $experience->tahun }}</span>
                </div>
            @empty
                <p>Belum ada data pengalaman.</p>
            @endforelse
        </div>
    </section>

    <!-- KEAHLIAN -->
    <section id="keahlian">
        <h2 class="section-title">My Skills</h2>
        <div class="skill-container">
            @forelse ($skills as $skill)
                <div class="skill-box">
                    <h3>{{ $skill->nama_skill }}</h3>
                </div>
            @empty
                <p>Belum ada data keahlian.</p>
            @endforelse
        </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects">
        <h2 class="section-title">My Projects</h2>
        <div class="card-container">
            @forelse ($projects as $project)
                <div class="card">
                    <h3>{{ $project['title'] }}</h3>
                    <span>{{ $project['category'] }}</span>
                    <p>{{ $project['description'] }}</p>
                    <p>{{ $project['year'] }}</p>
                </div>
            @empty
                <p>Belum ada project yang ditampilkan.</p>
            @endforelse
        </div>
    </section>

    <!-- KONTAK -->
    <section id="kontak" class="contact-section">
        <h2 class="section-title">My Kontak</h2>
        <div class="contact-container">
            <div class="contact-text">
                <p>Email: {{ $email }}</p>
                <p>Phone: 081336156949</p>
                <p>Instagram: @naysnice_</p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>© 2026 Neysha Permata Putri. All Rights Reserved.</p>
    </footer>

</body>
</html>
