<div>
    <h1>Picfac</h1>
    <p>This is the Picfac page.</p>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; padding: 20px;">
        <a href="{{ route('pic.1') }}" style="text-decoration: none; cursor: pointer;">
            <div style="border: 2px solid #ddd; border-radius: 8px; overflow: hidden; transition: transform 0.3s;">
                <img src="{{ asset('images/pic1.jpg') }}" alt="Pic 1" style="width: 100%; height: 200px; object-fit: cover;">
            </div>
        </a>
        <a href="{{ route('pic.2') }}" style="text-decoration: none; cursor: pointer;">
            <div style="border: 2px solid #ddd; border-radius: 8px; overflow: hidden; transition: transform 0.3s;">
                <img src="{{ asset('images/pic2.jpg') }}" alt="Pic 2" style="width: 100%; height: 200px; object-fit: cover;">
            </div>
        </a>
        <a href="{{ route('pic.3') }}" style="text-decoration: none; cursor: pointer;">
            <div style="border: 2px solid #ddd; border-radius: 8px; overflow: hidden; transition: transform 0.3s;">
                <img src="{{ asset('images/pic3.jpg') }}" alt="Pic 3" style="width: 100%; height: 200px; object-fit: cover;">
            </div>
        </a>
        <a href="{{ route('pic.4') }}" style="text-decoration: none; cursor: pointer;">
            <div style="border: 2px solid #ddd; border-radius: 8px; overflow: hidden; transition: transform 0.3s;">
                <img src="{{ asset('images/pic4.jpg') }}" alt="Pic 4" style="width: 100%; height: 200px; object-fit: cover;">
            </div>
        </a>
        <a href="{{ route('pic.5') }}" style="text-decoration: none; cursor: pointer;">
            <div style="border: 2px solid #ddd; border-radius: 8px; overflow: hidden; transition: transform 0.3s;">
                <img src="{{ asset('images/pic5.jpg') }}" alt="Pic 5" style="width: 100%; height: 200px; object-fit: cover;">
            </div>
        </a>
    </div>
</div>
