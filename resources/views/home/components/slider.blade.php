{{--Lấy dữ liệu từ folder storage của back-end, backend phải chạy cổng 8081--}}
@php
$baseUrl = config('app.base_url');
@endphp

<div class="slider-container">
    <div class="left-slide">
        @foreach($sliders as $slider)
            <div style="background-color: {{ $slider->bg_color }} ;">
                <h1>{{ $slider->name }}</h1>
                <p>{{ $slider->description }}</p>
            </div>
        @endforeach
    </div>
    <div class="right-slide" >
{{--        Reverse lại chiều của mảng sliders--}}
        @foreach($sliders->reverse()  as $slider)
            <div style="background-image: url({{ $baseUrl.$slider->image_path }});"></div>
        @endforeach
{{--        <div style="background-image: url(Fruits_store/img/photo-1.jpg);"></div>--}}
{{--        <div style="background-image: url(Fruits_store/img/photo-2.jpg);"></div>--}}
{{--        <div style="background-image: url(Fruits_store/img/photo-3.jpg);"></div>--}}
{{--        <div style="background-image: url(Fruits_store/img/photo-4.jpg);"></div>--}}
    </div>
    <div class="action-buttons">
        <button class="down-button">
            <i class="fas fa-arrow-down"></i>
        </button>
        <button class="up-button">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>
</div>
