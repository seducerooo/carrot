

<div class="third-section">
    <div class="container">
        <h4>Seamless Integration with…</h4>
        <div class="integrates-list">
            @foreach($brands as $brand)
                <div class="item">
                    <img src="{{ $brand->brand_images }}" alt="{{ $brand->name }}">
                </div>
            @endforeach
            <a class="navigation" href="#">
                <img src="{{ asset('/assets/img/arrow-right.png') }}" alt="arrow" />
                <span>Integrations</span>
            </a>
        </div>
    </div>
</div>

