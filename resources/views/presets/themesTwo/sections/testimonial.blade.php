@php
    $testimonial = getContent('testimonial.content',true);
    $testimonialElements = getContent('testimonial.element',false);
@endphp

<!--========================== Testimonials Section Start ==========================-->
<section class="testimonials section-bg py-80 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 position-relative">
                <div class="star-shape-1 animate-zoom-fade"></div>
                <div class="star-shape-2 testimonial-item-star animate-zoom-fade"></div>
                <div class="section-heading  text-center">
                    <span class="subtitle">{{__(@$testimonial->data_values->top_heading)}}</span>
                    <h2 class="section-heading__title ">
                        {{__(@$testimonial->data_values->heading)}}
                        <span class="animate-shape center">
                            <img src="{{asset($activeTemplateTrue.'images/animate-shape.png')}}" alt="Animate-shape">
                        </span>
                    </h2>
                    <p class="section-heading__desc mb-30">{{__(@$testimonial->data_values->subheading)}}</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="testimonial-slider">
                @foreach ($testimonialElements as $item)
                <div class="testimonails-card">
                    <div class="testimonial-item">
                        <div class="testimonial-item__quate"><i class="fas fa-quote-right"></i></div>
                        <div class="testimonial-item__thumb">
                            <img src="{{getImage(getFilePath('testimonial').'/'.@$item->data_values->testimonial_image)}}" alt="testimonial img">
                        </div>

                        <div class="testimonial-item__content">
                            <div class="testimonial-item__info">

                                <div class="testimonial-item__details">
                                    <h5 class="testimonial-item__name">
                                        @if(strlen(__(@$item->data_values->title)) >20)
                                        {{substr(__(@$item->data_values->title), 0,20).'...' }}
                                        @else
                                        {{__(@$item->data_values->title)}}
                                        @endif
                                    </h5>
                                    <span class="testimonial-item__designation">
                                        @if(strlen(__(@$item->data_values->designation)) >30)
                                        {{substr(__(@$item->data_values->designation), 0,30).'...' }}
                                        @else
                                        {{__(@$item->data_values->designation)}}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <p class="testimonial-item__desc"> @if(strlen(__(@$item->data_values->description)) >180)
                                {{substr(__(@$item->data_values->description), 0,180).'...' }}
                                @else
                                {{__(@$item->data_values->description)}}
                                @endif</p>


                            <div class="testimonial-item__rating">
                                <ul class="rating-list">

                                    <li class="rating-list__item">
                                        @php echo showRatings($item->data_values->star_count) @endphp
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--========================== Testimonials Section End ==========================-->
