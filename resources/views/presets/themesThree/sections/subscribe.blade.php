
@php
$subscribe = getContent('subscribe.content',true);
@endphp

<!-- ==================== Subscribe Here ==================== -->
<section class="subscribe-section py-80 bg-img" style="background-image: url({{asset($activeTemplateTrue.'images/subscribe-bg.jpg')}});">
    <div class="container">
        <div class="row  gy-4 justify-content-center align-items-center">
            <div class="col-lg-7">
                <div class="subscribe-wrap position-relative">
                    <div class="square-shape-1 animate-y-axis">
                        <div class="item">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="item">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="item">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="item">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="item">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="item">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="item">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <span class="banner-effect shape-2 animate-zoom-fade"></span>
                        <div class="section-heading">
                            <span class="subtitle">{{__(@$subscribe->data_values->top_heading)}}</span>
                            <h2 class="section-heading__title text-white">
                                {{__(@$subscribe->data_values->heading)}}
                            </h2>
                            <p class="section-heading__desc text-white">{{__(@$subscribe->data_values->sub_heading)}}</p>
                        </div>
                    <div class="subscribe-wrap__input">
                        <form action="{{route('subscribe')}}" method="POST">
                            @csrf
                            <input type="email" class="form--control" name="email" placeholder="@lang('Enter your mail')">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Subscribe Here ==================== -->
