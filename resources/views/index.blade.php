@extends('layout.layout')

@section('content')
    <div class="st-content">
        <!-- START: Hero-Slider Section -->
        <section class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="st-height-b80 st-height-lg-b80"></div>
            <div class="st-slider st-style1">
                <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="800" data-autoplay-timeout="1000"
                    data-center="0" data-slides-per-view="1" data-fade-slide="1">
                    <div class="slick-wrapper">
                        <div class="slick-slide-in">
                            <div class="st-single-slider d-flex align-items-center slider-bg-1 slider-bg-style st-bg"
                                data-src="assets/img/hero-bg6.jpg">
                                <div class="st-hero-overlay" data-src="assets/img/hero-shape.png"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="st-hero-text st-white">
                                                <h1>We providing new <br>solutions for your <br>business goal.</h1>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed <br>diam
                                                    nonumy eirmod tempor invidunt ut labore et dolore <br>magna aliquyam
                                                    voluptua.</p>
                                                <div class="st-hero-btn"><a class='btn st-btn-custom st-solid-white'
                                                        href='about.html'>Read More<i class="fas fa-plus-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-single-slider d-flex align-items-center slider-bg-2 slider-bg-style st-bg"
                                data-src="assets/img/hero-bg7.jpg">
                                <div class="st-hero-overlay" data-src="assets/img/hero-shape.png"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="st-hero-text st-white">
                                                <h1>You must be change <br>to see the world.</h1>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed <br>diam
                                                    nonumy eirmod tempor invidunt ut labore et dolore <br>magna aliquyam
                                                    voluptua.</p>
                                                <div class="st-hero-btn"><a class='btn st-btn-custom st-solid-white'
                                                        href='about.html'>Read More<i class="fas fa-plus-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-single-slider d-flex align-items-center slider-bg-3 slider-bg-style st-bg"
                                data-src="assets/img/hero-bg1.jpg">
                                <div class="st-hero-overlay" data-src="assets/img/hero-shape.png"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="st-hero-text st-white">
                                                <h1>Grab best creative <br>business agency.</h1>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed <br>diam
                                                    nonumy eirmod tempor invidunt ut labore et dolore <br>magna aliquyam
                                                    voluptua.</p>
                                                <div class="st-hero-btn"><a class='btn st-btn-custom st-solid-white'
                                                        href='about.html'>Read More<i class="fas fa-plus-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .slick-container -->
                <div class="pagination st-style1 st-type3"></div> <!-- If dont need Pagination then add class .st-hidden -->
                <div class="swipe-arrow st-style1 st-hidden"> <!-- If dont need navigation then add class .st-hidden -->
                    <div class="slick-arrow-left"><i class="fa fa-angle-left"></i></div>
                    <div class="slick-arrow-right"><i class="fa fa-angle-right"></i></div>
                </div>
            </div><!-- .st-slider -->
        </section>
        <!-- END: Hero-Slider Section -->

        <!-- START: Feature Section -->
        <section class="feature-section st-parallax">
            <div class="st-parallax-shape st-position1 st-to-left st-to-rotate-up"><img src="assets/img/shape/1.png"
                    alt=""></div>
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="st-iconbox st-style4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="st-iconbox-icon st-pink">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 432.4 432.4" xml:space="preserve">
                                    <path fill="inherit"
                                        d="M216.529,93.2c-61.2,0-111.2,50-111.2,111.2c0,32,14,62.8,37.6,83.6c17.6,17.6,16,55.2,15.6,55.6
                        c0,2,0.4,3.6,2,5.2c1.2,1.2,3.2,2,4.8,2h102c2,0,3.6-0.8,4.8-2c1.2-1.2,2-3.2,2-5.2c0-0.4-2-38,15.6-55.6
                        c0.4-0.4,0.8-0.8,1.2-1.2c23.2-21.2,36.8-51.2,36.8-82.4C327.729,143.2,277.729,93.2,216.529,93.2z M280.529,277.6
                        c-0.4,0.4-1.2,1.2-1.2,1.6c-15.6,16.8-18.4,44.4-18.8,57.6h-88.4c-0.4-13.2-3.2-42-20-59.2c-21.2-18.4-33.6-45.2-33.6-73.6
                        c0-54,43.6-97.6,97.6-97.6s97.6,43.6,97.6,97.6C313.729,232.4,301.729,259.2,280.529,277.6z">
                                    </path>
                                    <path fill="inherit"
                                        d="M216.129,121.6c-3.6,0-6.8,3.2-6.8,6.8c0,3.6,3.2,6.8,6.8,6.8c40.4,0,72.8,32.8,72.8,72.8
                        c0,3.6,3.2,6.8,6.8,6.8c3.6,0,6.8-3.2,6.8-6.8C302.929,160.4,264.129,121.6,216.129,121.6z">
                                    </path>
                                    <path fill="inherit"
                                        d="M260.529,358.4h-88.8c-9.2,0-16.8,7.6-16.8,16.8s7.6,16.8,16.8,16.8h88.4
                        c9.6-0.4,17.2-7.6,17.2-16.8C277.329,366,269.729,358.4,260.529,358.4z M260.529,378h-88.8c-1.6,0-3.2-1.2-3.2-3.2
                        s1.2-3.2,3.2-3.2h88.4c1.6,0,3.2,1.2,3.2,3.2S262.129,378,260.529,378z">
                                    </path>
                                    <path fill="inherit"
                                        d="M247.329,398.8h-62.4c-9.2,0-16.8,7.6-16.8,16.8s7.6,16.8,16.8,16.8h62.4
                        c9.2,0,16.8-7.6,16.8-16.8C264.129,406,256.529,398.8,247.329,398.8z M247.329,418.4h-62.4c-1.6,0-3.2-1.2-3.2-3.2
                        s1.2-3.2,3.2-3.2h62.4c1.6,0,3.2,1.2,3.2,3.2S248.929,418.4,247.329,418.4z">
                                    </path>
                                    <path fill="inherit"
                                        d="M216.129,60c4,0,6.8-3.2,6.8-6.8V6.8c0-3.6-3.2-6.8-6.8-6.8c-3.6,0-6.8,3.2-6.8,6.8v46.4
                        C209.329,56.8,212.529,60,216.129,60z">
                                    </path>
                                    <path fill="inherit"
                                        d="M329.329,34.4c-3.2-2.4-7.2-1.2-9.2,1.6l-25.6,38.4c-2.4,3.2-1.6,7.6,1.6,9.6
                        c1.2,0.8,2.4,1.2,3.6,1.2c2.4,0,4.4-1.2,5.6-3.2l25.6-38.4C333.329,40.8,332.529,36.4,329.329,34.4z">
                                    </path>
                                    <path fill="inherit"
                                        d="M134.929,83.6c1.2,0,2.4-0.4,3.6-1.2c3.2-2,4-6.4,2-9.6l-24.8-38.8c-2-3.2-6.4-4-9.6-2
                        s-4,6.4-2,9.6l24.8,38.8C130.529,82.8,132.529,83.6,134.929,83.6z">
                                    </path>
                                    <path fill="inherit"
                                        d="M86.529,126l-40.4-22c-3.2-1.6-7.6-0.4-9.2,2.8c-2,3.2-0.8,7.6,2.8,9.2l40.4,22
                        c1.2,0.4,2,0.8,3.2,0.8c2.4,0,4.8-1.2,6-3.6C90.929,132,89.729,127.6,86.529,126z">
                                    </path>
                                    <path fill="inherit"
                                        d="M395.729,106.8c-1.6-3.2-6-4.4-9.2-2.8l-40.8,22c-3.2,1.6-4.4,6-2.8,9.2c1.2,2.4,3.6,3.6,6,3.6
                        c1.2,0,2.4-0.4,3.2-0.8l40.8-22C396.129,114.4,397.329,110,395.729,106.8z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="st-iconbox-title">Financial Planning</h3>
                            <p class="st-iconbox-text">Strategy foster collaborative thinking to further the overall value
                                proposition. Organically grow the holistic world view.</p>
                        </div>
                        <div class="st-height-b0 st-height-lg-b30"></div>
                    </div><!-- .col -->
                    <div class="col-md-4">
                        <div class="st-iconbox st-style4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="st-iconbox-icon st-green">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 512 512" xml:space="preserve">
                                    <path
                                        d="M504.485,496.971H455.89v-297.08c0-4.15-3.364-7.515-7.515-7.515h-80.156c-4.151,0-7.515,3.365-7.515,7.515v297.08
                    h-57.111V288.063c0-4.15-3.364-7.515-7.515-7.515h-80.156c-4.151,0-7.515,3.365-7.515,7.515v208.908h-57.111V328.141
                    c0-4.15-3.364-7.515-7.515-7.515H63.625c-4.151,0-7.515,3.365-7.515,7.515v168.829H7.515c-4.151,0-7.515,3.365-7.515,7.515
                    C0,508.635,3.364,512,7.515,512h496.97c4.151,0,7.515-3.365,7.515-7.515C511.999,500.335,508.636,496.971,504.485,496.971z
                     M136.266,496.971H71.139V335.656h65.127V496.971z M288.564,496.971h-65.127V295.578h65.127V496.971z M440.861,496.971h-65.127
                    V207.406h65.127V496.971z">
                                    </path>
                                    <path
                                        d="M488.008,5.895c-5.065-4.471-11.806-6.554-18.506-5.712l-64.125,8.016c-12.73,1.591-22.036,13.54-20.443,26.283
                    c1.609,12.877,13.39,22.054,26.284,20.444l5.232-0.653c-78.705,91.256-172.272,138.418-238.39,162.12
                    c-82.441,29.555-146.608,32.083-147.233,32.104c-12.963,0.405-23.191,11.282-22.799,24.247
                    c0.388,12.804,10.721,22.833,23.526,22.833c0.238,0,0.477-0.003,0.722-0.011c2.853-0.086,70.874-2.488,160.489-34.42
                    c50.378-17.952,97.782-41.783,140.893-70.83c3.442-2.318,4.352-6.99,2.032-10.431c-2.318-3.443-6.988-4.352-10.431-2.033
                    c-42.068,28.346-88.343,51.607-137.539,69.137c-87.413,31.147-153.145,33.471-155.894,33.554l-0.272,0.004
                    c-4.628,0-8.364-3.627-8.504-8.258c-0.142-4.69,3.558-8.624,8.25-8.771c0.656-0.021,66.654-2.443,151.832-32.978
                    c71.359-25.581,173.893-77.814,257.126-181.378c4.144-5.156-0.237-12.985-6.788-12.164l-24.112,3.014
                    c-4.18,0.517-8.24-2.222-9.301-6.304c-1.276-4.912,2.156-9.968,7.186-10.598l64.127-8.016c5.007-0.633,9.571,3.414,9.571,8.451
                    v64.125c0,4.696-3.82,8.517-8.517,8.517s-8.517-3.82-8.517-8.517V68.23c0-3.071-1.986-5.943-4.858-7.028
                    c-2.967-1.121-6.473-0.18-8.479,2.276c-28.067,34.391-60.025,65.511-94.988,92.495c-3.285,2.536-3.894,7.255-1.358,10.541
                    c2.536,3.286,7.257,3.893,10.541,1.358c30.455-23.505,58.685-50.066,84.137-79.141c0.556,12.493,10.894,22.487,23.523,22.487
                    c12.983,0,23.546-10.563,23.546-23.546V23.547C495.97,16.797,493.068,10.362,488.008,5.895z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="st-iconbox-title">Business Growth</h3>
                            <p class="st-iconbox-text">Disruptive innovation via workplace diversity and empowerment. User
                                generated content in real-time will have multiple.</p>
                        </div>
                        <div class="st-height-b0 st-height-lg-b30"></div>
                    </div><!-- .col -->
                    <div class="col-md-4">
                        <div class="st-iconbox st-style4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="st-iconbox-icon st-purple">
                                <svg viewBox="0 0 64 64">
                                    <g data-name="Layer 5">
                                        <path
                                            d="M62,30H56a5,5,0,0,0-5,5v5.18A3,3,0,0,0,49,43v1h-.15a4,4,0,0,0-3.57,2.21s0,.07-.05.1L41.3,57H41a3,3,0,0,0-3,3v1H35V43H46a1,1,0,0,0,1-1V38a1,1,0,0,0-1-1H18a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H29V61H26V60a3,3,0,0,0-3-3h-.3L18.77,46.31l-.05-.1A4,4,0,0,0,15.15,44H15V43a3,3,0,0,0-2-2.82V35a5,5,0,0,0-5-5H2a1,1,0,0,0-1,1V53a1,1,0,0,0,1,1H4v7H1v2H63V61H60V54h2a1,1,0,0,0,1-1V31A1,1,0,0,0,62,30ZM51,43a1,1,0,0,1,1-1h3a1,1,0,0,0,1-1V37a1,1,0,0,1,2,0v7H51ZM40,60a1,1,0,0,1,1-1h5v2H40Zm8-1.84L50.72,50H51v3a1,1,0,0,0,1,1h2v7H48ZM19,39H45v2H19Zm12,4h2V61H31ZM24,60v1H18V59h5A1,1,0,0,1,24,60ZM12,54a1,1,0,0,0,1-1V50h.28L16,58.16V61H10V54Zm0-10H6V37a1,1,0,0,1,2,0v4a1,1,0,0,0,1,1h3a1,1,0,0,1,1,1v1ZM3,32H8a3,3,0,0,1,3,3v5H10V37a3,3,0,0,0-6,0v8a1,1,0,0,0,1,1H15.15a2,2,0,0,1,1.76,1.06L20.57,57H17.72L15,48.68A1,1,0,0,0,14,48H4a1,1,0,0,1-1-1V32ZM3,49.82A3,3,0,0,0,4,50h7v2H3ZM6,54H8v7H6Zm52,7H56V54h2Zm-5-9V50h7a3,3,0,0,0,1-.18V52Zm8-5a1,1,0,0,1-1,1H50a1,1,0,0,0-1,.68L46.28,57H43.43l3.66-9.94A2,2,0,0,1,48.85,46H59a1,1,0,0,0,1-1V37a3,3,0,0,0-6,0v3H53V35a3,3,0,0,1,3-3h5V47Z">
                                        </path>
                                        <path
                                            d="M63,25a5,5,0,1,0-5,5A5,5,0,0,0,63,25Zm-5,3a3,3,0,1,1,3-3A3,3,0,0,1,58,28Z">
                                        </path>
                                        <path d="M11,25a5,5,0,1,0-5,5A5,5,0,0,0,11,25ZM6,28a3,3,0,1,1,3-3A3,3,0,0,1,6,28Z">
                                        </path>
                                        <path
                                            d="M16,23h4v3a1,1,0,0,0,.62.92A.84.84,0,0,0,21,27a1,1,0,0,0,.71-.29L25.41,23H36a3,3,0,0,0,3-3V19h1.59l3.7,3.71A1,1,0,0,0,45,23a.84.84,0,0,0,.38-.08A1,1,0,0,0,46,22V19h4a3,3,0,0,0,3-3V4a3,3,0,0,0-3-3H30a3,3,0,0,0-3,3V5H16a3,3,0,0,0-3,3V20A3,3,0,0,0,16,23ZM29,4a1,1,0,0,1,1-1H50a1,1,0,0,1,1,1V16a1,1,0,0,1-1,1H45a1,1,0,0,0-1,1v1.59l-2.29-2.3A1,1,0,0,0,41,17H39V8a3,3,0,0,0-3-3H29ZM15,8a1,1,0,0,1,1-1H36a1,1,0,0,1,1,1V20a1,1,0,0,1-1,1H25a1,1,0,0,0-.71.29L22,23.59V22a1,1,0,0,0-1-1H16a1,1,0,0,1-1-1Z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <h3 class="st-iconbox-title">Business Strategy</h3>
                            <p class="st-iconbox-text">Leverage agile frameworks to provide a robust synopsis for high
                                level overviews. Iterative approaches to corporate.</p>
                        </div>
                        <div class="st-height-b0 st-height-lg-b30"></div>
                    </div><!-- .col -->
                </div>
            </div>
        </section>
        <!-- END: Feature Section -->

        <!-- START: About Section -->
        <section class="st-parallax">
            <div class="st-parallax-shape st-position2 st-to-left-up"><img src="assets/img/shape/2.png" alt="">
            </div>
            <div class="st-height-b120 st-height-lg-b50"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="st-hobble">
                            <div class="st-video-box st-style1 text-center">
                                <div class="st-video-thumb st-hover-layer">
                                    <img src="assets/img/video1.jpg" alt="About demo video"
                                        class="st-video-thumb-non-hover">
                                </div>
                                <a href="https://www.youtube.com/embed/iHLOS7thkJs?autoplay=1"
                                    class="st-play-btn st-video-open">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="23px" height="27px">
                                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                            d="M22.998,13.499 L0.002,0.002 L0.002,26.996 L22.998,13.499 " />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="st-height-lg-b50"></div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="st-vertical-middle">
                            <div class="st-vertical-middle-in">
                                <div class="st-about-text">
                                    <h4 class="st-about-title">About Abid</h4>
                                    <h2 class="st-about-head">Stand out brands are built on 3 principles</h2>
                                    <p class="st-about-details">Business is the activity of making one's living or making
                                        money. One business makes a commercial transaction with another. A business entity
                                        is an entity that is formed and administered as corporate.</p>
                                    <ul class="st-about-list">
                                        <li><i class="fas fa-arrow-right"></i>Insight</li>
                                        <li><i class="fas fa-arrow-right"></i>Intelligence</li>
                                        <li><i class="fas fa-arrow-right"></i>Design</li>
                                    </ul>
                                    <div class="st-height-b35 st-height-lg-b35"></div>
                                    <a class='btn st-btn-custom st-accent btn-md' href='about.html'>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: About Section -->

        <!-- START: Project-Counter Section -->
        <section>
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="st-counter-head st-style1 wow fadeInLeft" data-wow-duration="1s"
                            data-wow-delay="0.2s">
                            <h2 class="st-counter-title">We have more then 30 years of experience</h2>
                            <p class="st-counter-subtitle">Activity of buying or selling. Business is the activity of
                                making one's living or making money. One business makes a commercial transaction with
                                another.</p>
                        </div>
                        <div class="st-height-b0 st-height-lg-b30"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="st-vertical-middle">
                            <div class="st-vertical-middle-in">
                                <div class="st-counter-wrap st-style1">
                                    <div class="st-counter wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="st-counter-in">
                                            <h3 class="st-counter-number"><span class="st-counter-animation">500</span>+
                                            </h3>
                                            <p class="st-counter-text">Projects Done</p>
                                        </div>
                                    </div>
                                    <div class="st-counter wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                        <div class="st-counter-in">
                                            <h3 class="st-counter-number"><span class="st-counter-animation">1000</span>+
                                            </h3>
                                            <p class="st-counter-text">Happy Clients</p>
                                        </div>
                                    </div>
                                    <div class="st-counter wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <div class="st-counter-in">
                                            <h3 class="st-counter-number"><span class="st-counter-animation">50</span>+
                                            </h3>
                                            <p class="st-counter-text">Awards Win</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
        <!-- END: Project-Counter Section -->
        <hr>
        <!-- START: Service Section -->
        <section class="st-parallax">
            <div class="st-parallax-shape st-position3 st-to-up"><img src="assets/img/shape/3.png" alt=""></div>
            <div class="st-parallax-shape st-position4 st-to-left"><img src="assets/img/shape/4.png" alt="">
            </div>
            <div class="st-parallax-shape st-position5 st-to-rotate-up"><img src="assets/img/shape/5.png" alt="">
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="st-heading-section text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.2s">
                            <h3 class="st-heading-title">Featured service that we provide</h3>
                            <p class="st-heading-text">Business services are activities that combine consolidate</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="st-iconbox-list wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="st-iconbox st-style1 text-center">
                                <a class='st-iconbox-icon blue-icon' href='service-details.html'>
                                    <svg viewBox="0 0 486.9 486.9">
                                        <g>
                                            <path
                                                d="M374.288,93.2c25.6,0,46.4-20.9,46.4-46.6S399.888,0,374.288,0s-46.4,21-46.4,46.6S348.688,93.2,374.288,93.2z
                       M374.288,24.1c12.3,0,22.4,10.1,22.4,22.6s-10,22.6-22.4,22.6s-22.4-10.2-22.4-22.7S361.888,24.1,374.288,24.1z" />
                                            <path
                                                d="M100.688,393.7c-25.6,0-46.4,20.9-46.4,46.6s20.8,46.6,46.4,46.6s46.4-20.9,46.4-46.6S126.188,393.7,100.688,393.7z
                       M100.688,462.9c-12.3,0-22.4-10.1-22.4-22.6c0-12.4,10-22.6,22.4-22.6s22.4,10.1,22.4,22.6
                      C122.988,452.7,112.988,462.9,100.688,462.9z" />
                                            <path
                                                d="M215.388,206.5c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5c4.7-4.7,4.7-12.3,0-17l-25-25l25-25c4.7-4.7,4.7-12.3,0-17
                      c-4.7-4.7-12.3-4.7-17,0l-25,25l-25-25c-4.7-4.7-12.3-4.7-17,0c-4.7,4.7-4.7,12.3,0,17l25,25l-25,25c-4.7,4.7-4.7,12.3,0,17
                      c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5l25-25L215.388,206.5z" />
                                            <path
                                                d="M416.288,315c-4.7-4.7-12.3-4.7-17,0l-25,25l-25-25c-4.7-4.7-12.3-4.7-17,0s-4.7,12.3,0,17l25,25l-25,25
                      c-4.7,4.7-4.7,12.3,0,17c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5l25-25l25,25c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5
                      c4.7-4.7,4.7-12.3,0-17l-25-25l25-25C420.988,327.2,420.988,319.7,416.288,315z" />
                                            <path
                                                d="M274.088,376.9c-4.7-4.7-12.3-4.7-17,0l-25,25l-25-25c-4.7-4.7-12.3-4.7-17,0c-4.7,4.7-4.7,12.3,0,17l25,25l-25,25
                      c-4.7,4.7-4.7,12.3,0,17c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5l25-25l25,25c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5
                      c4.7-4.7,4.7-12.3,0-17l-25-25l25-25C278.688,389.2,278.688,381.6,274.088,376.9z" />
                                            <path
                                                d="M196.388,286.7c6.6,0,12-5.4,12-12c0-6.6-5.4-12-12-12s-12,5.4-12,12C184.388,281.3,189.688,286.7,196.388,286.7z" />
                                            <path
                                                d="M107.488,322.1c2,1.3,4.3,2,6.6,2c3.9,0,7.7-1.9,10-5.4c3.6-5.5,2.1-13-3.4-16.6c-5.5-3.6-13-2.1-16.6,3.4
                      C100.388,311,101.888,318.5,107.488,322.1z" />
                                            <path
                                                d="M144.988,270.8c-6.1,2.7-8.8,9.8-6.1,15.8c2,4.5,6.4,7.1,11,7.1c1.6,0,3.3-0.3,4.9-1c6.1-2.7,8.8-9.8,6.1-15.8
                      C158.087,270.8,150.988,268.1,144.988,270.8z" />
                                            <circle cx="243.888" cy="274.7" r="12" />
                                            <path
                                                d="M100.688,369c3.2,0,6.3-1.3,8.5-3.5s3.5-5.3,3.5-8.5s-1.3-6.3-3.5-8.5s-5.3-3.5-8.5-3.5s-6.3,1.3-8.5,3.5
                      s-3.5,5.3-3.5,8.5s1.3,6.3,3.5,8.5S97.488,369,100.688,369z" />
                                            <path
                                                d="M429.088,170.2l-46.4-46.4c-4.7-4.7-12.3-4.7-17,0l-46.4,46.4c-4.7,4.7-4.7,12.3,0,17s12.3,4.7,17,0l25.9-25.9v31
                      c0,38.8-31.8,70.3-70.9,70.3c-6.6,0-12,5.4-12,12c0,6.6,5.4,12,12,12c52.3,0,94.9-42.3,94.9-94.3v-31.1l25.9,25.9
                      c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5C433.788,182.5,433.788,174.9,429.088,170.2z" />
                                        </g>
                                    </svg>
                                </a>
                                <h3 class="st-iconbox-title"><a href='service-details.html'>Strategy</a></h3>
                                <p class="st-iconbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing sed do
                                    eiusmod tempor
                                    incididu labore etdolore magna aliqua.</p>
                            </div>
                            <!-- Service - Icon Box Two -->
                            <div class="st-iconbox st-style1 text-center">
                                <a class='st-iconbox-icon green-icon' href='service-details.html'>
                                    <svg viewBox="0 0 64 64">
                                        <path
                                            d="M40,52.132l-1.445-0.964c-0.336-0.225-0.773-0.225-1.109,0L35,52.798l-2.445-1.63c-0.336-0.225-0.773-0.225-1.109,0
                    L29,52.798l-2.445-1.63c-0.336-0.225-0.773-0.225-1.109,0L24,52.132V30h-2v24c0,0.269,0.11,0.521,0.295,0.705l-0.002,0.002l9,9
                    C31.488,63.902,31.744,64,32,64s0.512-0.098,0.707-0.293l9-9l-0.002-0.002C41.89,54.521,42,54.269,42,54V35h-2V52.132z M26,53.202
                    l2.445,1.63c0.336,0.225,0.773,0.225,1.109,0L32,53.202l2.445,1.63c0.336,0.225,0.773,0.225,1.109,0L38,53.202l1.43,0.953
                    L35.586,58h-7.172l-3.844-3.844L26,53.202z M32,61.586L30.414,60h3.172L32,61.586z" />
                                        <path
                                            d="M19.093,21.287c-0.118-0.362-0.431-0.626-0.808-0.681l-2.898-0.422l-1.297-2.627c-0.336-0.684-1.457-0.684-1.793,0
                    L11,20.185l-2.898,0.422c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024l2.098,2.045L9.15,27.245
                    c-0.064,0.375,0.09,0.754,0.397,0.978c0.31,0.226,0.718,0.254,1.054,0.076l2.593-1.363l2.593,1.363
                    c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-0.495-2.888
                    l2.098-2.045C19.112,22.046,19.21,21.648,19.093,21.287z M14.97,23.291c-0.235,0.229-0.343,0.561-0.287,0.885l0.241,1.409
                    l-1.265-0.665c-0.146-0.077-0.306-0.115-0.466-0.115s-0.319,0.038-0.466,0.115l-1.265,0.665l0.241-1.409
                    c0.056-0.324-0.052-0.655-0.287-0.885l-1.023-0.997l1.414-0.206c0.326-0.047,0.607-0.252,0.753-0.547l0.633-1.281l0.633,1.281
                    c0.146,0.295,0.427,0.5,0.753,0.547l1.414,0.206L14.97,23.291z" />
                                        <path
                                            d="M18.067,8.633l-0.619,3.611c-0.064,0.375,0.09,0.754,0.397,0.979c0.31,0.224,0.717,0.253,1.054,0.075l3.242-1.705
                    l3.242,1.705c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.19c0.308-0.225,0.462-0.604,0.397-0.979
                    l-0.619-3.611l2.624-2.558c0.272-0.266,0.37-0.663,0.253-1.024c-0.118-0.362-0.431-0.626-0.808-0.681L24.66,3.843l-1.622-3.285
                    c-0.336-0.684-1.457-0.684-1.793,0l-1.621,3.285L15.998,4.37c-0.377,0.055-0.689,0.318-0.808,0.681
                    c-0.117,0.361-0.02,0.759,0.253,1.024L18.067,8.633z M20.432,5.746c0.326-0.047,0.607-0.252,0.753-0.547l0.957-1.939L23.1,5.199
                    c0.146,0.295,0.427,0.5,0.753,0.547l2.14,0.312l-1.549,1.51c-0.235,0.229-0.343,0.561-0.287,0.885l0.365,2.133l-1.914-1.007
                    c-0.146-0.077-0.306-0.115-0.466-0.115s-0.319,0.038-0.466,0.115l-1.914,1.007l0.365-2.133c0.056-0.324-0.052-0.655-0.287-0.885
                    l-1.549-1.51L20.432,5.746z" />
                                        <path
                                            d="M45.716,15.063l4.124-4.02c0.272-0.266,0.37-0.663,0.253-1.024c-0.118-0.362-0.431-0.626-0.808-0.681L43.587,8.51
                    l-2.549-5.163c-0.336-0.684-1.457-0.684-1.793,0L36.696,8.51l-5.698,0.829c-0.377,0.055-0.689,0.318-0.808,0.681
                    c-0.117,0.361-0.02,0.759,0.253,1.024l4.124,4.02l-0.974,5.676c-0.064,0.375,0.09,0.754,0.397,0.978
                    c0.31,0.225,0.718,0.254,1.054,0.076l5.097-2.68l5.097,2.68c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191
                    c0.308-0.224,0.462-0.603,0.397-0.978L45.716,15.063z M43.943,13.998c-0.235,0.229-0.343,0.561-0.287,0.885l0.72,4.197
                    l-3.769-1.981c-0.146-0.077-0.306-0.115-0.466-0.115s-0.319,0.038-0.466,0.115l-3.769,1.981l0.72-4.197
                    c0.056-0.324-0.052-0.655-0.287-0.885l-3.049-2.972l4.213-0.613c0.326-0.047,0.607-0.252,0.753-0.547l1.885-3.817l1.885,3.817
                    c0.146,0.295,0.427,0.5,0.753,0.547l4.213,0.613L43.943,13.998z" />
                                        <path
                                            d="M57.131,26.224l-2.535-0.368l-1.135-2.298c-0.336-0.684-1.457-0.684-1.793,0l-1.134,2.298l-2.536,0.368
                    c-0.377,0.055-0.689,0.318-0.808,0.68c-0.117,0.362-0.02,0.76,0.253,1.025l1.836,1.789l-0.434,2.526
                    c-0.064,0.375,0.09,0.754,0.397,0.978c0.175,0.127,0.381,0.191,0.588,0.191c0.159,0,0.319-0.038,0.466-0.115l2.268-1.192
                    l2.268,1.192c0.337,0.178,0.745,0.148,1.054-0.075c0.308-0.225,0.462-0.604,0.397-0.979l-0.433-2.526l1.835-1.789
                    c0.272-0.266,0.37-0.663,0.253-1.025C57.82,26.542,57.508,26.278,57.131,26.224z M54.078,28.653
                    c-0.235,0.229-0.343,0.561-0.287,0.885l0.179,1.047l-0.939-0.494c-0.146-0.077-0.306-0.115-0.466-0.115s-0.319,0.038-0.466,0.115
                    l-0.939,0.494l0.18-1.047c0.056-0.324-0.052-0.655-0.287-0.885l-0.761-0.742l1.051-0.152c0.326-0.047,0.607-0.252,0.753-0.547
                    l0.47-0.952l0.471,0.952c0.146,0.296,0.427,0.5,0.753,0.547l1.051,0.152L54.078,28.653z" />
                                        <path d="M29,37h2c0-7.168-5.383-13-12-13v2C24.514,26,29,30.935,29,37z" />
                                        <path d="M35,42h2c0-7.047,3.206-13,7-13v-2C38.953,27,35,33.589,35,42z" />
                                        <path d="M27,25h2c0-2.206,1.346-4,3-4v-2C29.243,19,27,21.691,27,25z" />
                                        <path d="M20,16c1.654,0,3,1.794,3,4h2c0-3.309-2.243-6-5-6V16z" />
                                        <path d="M41,24v-2c-4.963,0-9,4.486-9,10h2C34,27.589,37.141,24,41,24z" />
                                        <rect x="35" y="44" width="2" height="2" />
                                        <rect x="32" y="34" width="2" height="2" />
                                        <rect x="29" y="39" width="2" height="2" />
                                        <rect x="29" y="43" width="2" height="2" />
                                        <rect x="29" y="47" width="2" height="2" />
                                        <rect x="12" y="30" width="2" height="2" />
                                        <rect y="16" width="2" height="2" />
                                        <rect x="8" y="12" width="2" height="2" />
                                        <rect x="49" y="17" width="2" height="2" />
                                        <rect x="60" y="10" width="2" height="2" />
                                        <rect x="4" y="5" width="2" height="2" />
                                        <rect x="11" y="4" width="2" height="2" />
                                        <rect x="48" y="3" width="2" height="2" />
                                        <rect x="54" y="11" width="2" height="2" />
                                        <polygon
                                            points="4,24 2,24 2,26 0,26 0,28 2,28 2,30 4,30 4,28 6,28 6,26 4,26    " />
                                        <polygon
                                            points="61,16 59,16 59,18 57,18 57,20 59,20 59,22 61,22 61,20 63,20 63,18 61,18    " />
                                        <path
                                            d="M61,0c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3S62.654,0,61,0z M61,4c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1
                    S61.552,4,61,4z" />
                                    </svg>
                                </a>
                                <h3 class="st-iconbox-title"><a href='service-details.html'>Creative Production</a></h3>
                                <p class="st-iconbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing sed do
                                    eiusmod tempor incididu labore etdolore magna aliqua.</p>
                            </div>
                            <!-- Service - Icon Box Three -->
                            <div class="st-iconbox st-style1 text-center">
                                <a class='st-iconbox-icon red-icon' href='service-details.html'>
                                    <svg viewBox="0 0 488 488">
                                        <path
                                            d="M414.61,211.775c-3.406-9.558-12.463-15.933-22.61-15.915c-10.137,0.031-19.158,6.438-22.526,16H320v-32h32
                    c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-33.474c12.497-4.418,19.047-18.13,14.629-30.628
                    c-4.418-12.497-18.13-19.047-30.628-14.629s-19.047,18.13-14.629,30.628c2.416,6.835,7.793,12.212,14.628,14.629v25.475h-24v-16
                    c0.001-4.417-3.579-7.999-7.996-8c-0.001,0-0.003,0-0.004,0h-16V98.385c12.497-4.418,19.047-18.13,14.629-30.628
                    c-4.418-12.497-18.13-19.047-30.628-14.629c-12.497,4.418-19.047,18.13-14.629,30.628c2.416,6.835,7.793,12.212,14.628,14.629
                    v41.475h-32V12.141c0.001-4.417-3.579-7.999-7.996-8c-0.001,0-0.003,0-0.004,0c-98.691,0-176,71.453-176,162.664
                    c0,43.328,17.199,100.695,44.891,149.703c4.973,8.797,11.461,18.047,18.328,27.844c14.521,20.699,30.681,43.976,32.438,64.238
                    c-6.15,4.347-9.749,11.458-9.61,18.988c0.023,5.409,1.891,10.649,5.295,14.853c-4.735,4.672-7.383,11.058-7.342,17.71
                    c0.014,13.249,10.751,23.986,24,24h136c13.339-0.083,24.086-10.963,24.003-24.302c-0.001-0.087-0.002-0.174-0.003-0.261
                    c-0.005-6.507-2.664-12.73-7.363-17.232c3.448-4.366,5.321-9.768,5.316-15.331c-0.024-12.671-10.315-22.923-22.986-22.899
                    c-0.338,0.001-0.676,0.009-1.014,0.024H248V251.859h16v24c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h24v9.474
                    c-12.497,4.418-19.046,18.131-14.627,30.627s18.131,19.046,30.627,14.627c12.497-4.418,19.046-18.131,14.627-30.627
                    c-2.416-6.835-7.793-12.211-14.627-14.627v-17.474c0.001-4.417-3.579-7.999-7.996-8c-0.001,0-0.003,0-0.004,0h-24v-16h32
                    c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-16h49.475c4.442,12.464,18.146,18.967,30.61,14.525
                    C412.548,237.943,419.051,224.239,414.61,211.775z M352,107.859c4.418,0,8,3.582,8,8s-3.582,8-8,8s-8-3.582-8-8
                    C344.004,111.443,347.584,107.864,352,107.859z M140.32,335.164c-6.641-9.469-12.91-18.406-17.5-26.531
                    C96.809,262.594,80,206.922,80,166.805c0-79.781,66.137-142.797,152-146.492v55.888c-2.124,0.159-4.291,0.352-6.609,0.636
                    c-3.396,0.413-6.153,2.941-6.859,6.289l-2.438,11.594c-2.008,0.477-4.01,1.016-6.008,1.617l-7.973-8.891
                    c-2.284-2.555-5.942-3.369-9.094-2.023c-8.954,3.861-17.405,8.796-25.168,14.695c-2.733,2.06-3.852,5.631-2.785,8.883
                    l3.672,11.188c-1.512,1.422-2.984,2.898-4.41,4.406l-11.176-3.672c-3.251-1.053-6.813,0.062-8.883,2.781
                    c-5.907,7.765-10.846,16.22-14.707,25.18c-1.344,3.152-0.53,6.809,2.023,9.094l8.895,7.969c-0.598,1.977-1.133,3.958-1.605,5.945
                    l-12.441,2.484c-3.74,0.746-6.433,4.03-6.433,7.844V209.5c0,3.814,2.693,7.098,6.434,7.844l12.441,2.484
                    c0.473,1.984,1.008,3.966,1.605,5.945l-8.898,7.969c-2.55,2.287-3.363,5.942-2.023,9.094c3.862,8.959,8.8,17.415,14.707,25.18
                    c2.068,2.722,5.632,3.837,8.883,2.781l11.176-3.672c1.43,1.508,2.898,2.984,4.41,4.406l-3.672,11.172
                    c-1.066,3.251,0.051,6.82,2.781,8.883c7.763,5.908,16.218,10.848,25.176,14.711c3.152,1.338,6.806,0.525,9.094-2.023l7.973-8.891
                    c1.996,0.602,3.999,1.141,6.008,1.617l2.434,11.586c0.703,3.351,3.461,5.883,6.859,6.297c2.321,0.284,4.489,0.477,6.613,0.636
                    v88.622h-56.69C172.041,380.564,155.341,356.581,140.32,335.164z M168,195.859c0.051,36.644,27.587,67.419,64,71.528v27.511
                    l-1.324-6.297c-0.668-3.189-3.203-5.655-6.41-6.234c-4.742-0.863-9.404-2.12-13.937-3.758c-0.869-0.309-1.785-0.467-2.707-0.469
                    c-2.274,0-4.441,0.969-5.957,2.664l-7.523,8.391c-4.169-2.083-8.192-4.446-12.043-7.07l3.473-10.57
                    c1.017-3.098,0.054-6.502-2.434-8.609c-3.689-3.123-7.114-6.546-10.238-10.234c-2.113-2.471-5.506-3.427-8.598-2.422
                    l-10.566,3.477c-2.626-3.852-4.989-7.877-7.074-12.047l8.398-7.523c2.422-2.175,3.288-5.599,2.191-8.664
                    c-1.636-4.534-2.893-9.196-3.758-13.937c-0.584-3.233-3.086-5.78-6.309-6.422L136,202.938v-14.156l11.184-2.234
                    c3.222-0.641,5.725-3.189,6.309-6.422c0.865-4.744,2.122-9.409,3.757-13.946c1.099-3.066,0.231-6.491-2.195-8.664L146.664,150
                    c2.087-4.168,4.449-8.193,7.07-12.047l10.57,3.477c3.092,1.004,6.484,0.049,8.598-2.422c3.132-3.691,6.559-7.121,10.246-10.258
                    c2.478-2.103,3.436-5.498,2.422-8.586l-3.469-10.57c3.851-2.623,7.873-4.985,12.039-7.07l7.523,8.391
                    c2.176,2.42,5.598,3.287,8.664,2.195c4.533-1.639,9.195-2.896,13.937-3.758c3.206-0.576,5.741-3.039,6.41-6.227L232,96.828v27.503
                    C195.587,128.441,168.051,159.215,168,195.859z M232,140.498V251.22c-30.575-4.377-51.813-32.712-47.436-63.287
                    C188.085,163.341,207.407,144.019,232,140.498z M316,460.141c-0.004,4.416-3.584,7.996-8,8H172
                    c-4.499-0.076-8.085-3.785-8.009-8.284c0.002-0.093,0.005-0.186,0.009-0.279c0.004-4.416,3.584-7.996,8-8h136
                    c4.499,0.076,8.085,3.785,8.009,8.284C316.008,459.955,316.005,460.048,316,460.141z M305.953,420.141
                    c4.03-0.372,7.599,2.595,7.97,6.625c0.025,0.27,0.035,0.541,0.03,0.812c-0.004,4.416-3.584,7.996-8,8H174.047
                    c-4.499-0.076-8.085-3.784-8.009-8.284c0.002-0.093,0.005-0.186,0.009-0.279c0.171-3.988,3.543-7.082,7.531-6.91
                    c0.157,0.007,0.313,0.019,0.469,0.035H305.953z M304,307.859c4.418,0,8,3.582,8,8s-3.582,8-8,8s-8-3.582-8-8
                    C296.004,311.443,299.584,307.864,304,307.859z M288,67.859c4.418,0,8,3.582,8,8s-3.582,8-8,8s-8-3.582-8-8
                    C280.004,71.443,283.584,67.864,288,67.859z M304,235.859h-56v-80h56V235.859z M392,227.859c-4.418,0-8-3.582-8-8s3.582-8,8-8
                    s8,3.582,8,8C399.996,224.276,396.416,227.855,392,227.859z" />
                                        <path
                                            d="M317.152,369.828c-2.821,5.044-5.317,10.263-7.472,15.625l14.875,5.891c1.906-4.73,4.112-9.333,6.605-13.781
                    L317.152,369.828z" />
                                        <path
                                            d="M335.148,341.648c-3.144,4.516-6.281,9.109-9.281,13.75l13.43,8.688c2.906-4.484,5.941-8.922,8.984-13.297
                    L335.148,341.648z" />
                                        <path
                                            d="M353.348,315.031c-2.699,4.281-5.707,8.711-8.859,13.258l13.141,9.125c3.301-4.75,6.441-9.383,9.258-13.867
                    L353.348,315.031z" />
                                        <path
                                            d="M368.359,287.148c-2.293,4.797-4.69,9.539-7.191,14.227l14.109,7.547c2.617-4.898,5.124-9.859,7.52-14.883
                    L368.359,287.148z" />
                                        <path
                                            d="M380.855,257.789c-1.859,4.945-3.84,9.898-5.934,14.812l14.727,6.266c2.18-5.133,4.241-10.284,6.184-15.453
                    L380.855,257.789z" />
                                        <path
                                            d="M415.992,165.211l-16,0.125l0.008,1.469c0,4.461-0.207,9.203-0.621,14.078l15.945,1.344
                    c0.449-5.32,0.676-10.508,0.676-15.422L415.992,165.211z" />
                                        <path
                                            d="M411.918,131.156l-15.578,3.641c1.169,5.001,2.058,10.064,2.664,15.164l15.891-1.891
                    C414.216,142.382,413.222,136.735,411.918,131.156z" />
                                        <path
                                            d="M400.418,98.828l-14.383,7c2.249,4.621,4.242,9.363,5.969,14.203l15.07-5.359
                    C405.152,109.271,402.93,103.981,400.418,98.828z" />
                                        <path
                                            d="M382.117,69.859l-12.531,9.953c3.202,4.032,6.188,8.23,8.945,12.578l13.523-8.547
                    C388.992,79.009,385.675,74.341,382.117,69.859z" />
                                        <path
                                            d="M358.141,45.445l-10.195,12.328c3.977,3.29,7.783,6.782,11.402,10.461l11.406-11.219
                    C366.749,52.946,362.539,49.085,358.141,45.445z" />
                                        <path
                                            d="M329.836,26.375l-7.609,14.078c4.57,2.469,9.043,5.172,13.293,8.031l8.93-13.281
                    C339.773,32.063,334.859,29.094,329.836,26.375z" />
                                        <path
                                            d="M298.477,13.102l-4.844,15.25c4.984,1.578,9.887,3.391,14.578,5.383l6.258-14.719
                    C309.317,16.82,303.934,14.836,298.477,13.102z" />
                                        <path
                                            d="M265.285,5.758l-2.047,15.875c5.16,0.664,10.324,1.563,15.348,2.68l3.461-15.625
                    C276.559,7.477,270.918,6.492,265.285,5.758z" />
                                        <rect x="16" y="435.859" width="16" height="16" />
                                        <rect x="16" y="467.859" width="16" height="16" />
                                        <rect x="32" y="451.859" width="16" height="16" />
                                        <rect y="451.859" width="16" height="16" />
                                        <rect x="456" y="3.859" width="16" height="16" />
                                        <rect x="456" y="35.859" width="16" height="16" />
                                        <rect x="472" y="19.859" width="16" height="16" />
                                        <rect x="440" y="19.859" width="16" height="16" />
                                    </svg>
                                </a>
                                <h3 class="st-iconbox-title"><a href='service-details.html'>Technology</a></h3>
                                <p class="st-iconbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing sed do
                                    eiusmod tempor
                                    incididu labore etdolore magna aliqua.</p>
                            </div>
                            <!-- Service - Icon Box Four -->
                            <div class="st-iconbox st-style1 text-center">
                                <a class='st-iconbox-icon purple-icon' href='service-details.html'>
                                    <svg viewBox="0 0 480 480">
                                        <rect x="160" y="40" width="160" height="16" />
                                        <path
                                            d="M396,300c0-15.438-12.563-28-28-28h-16V160h-16v112h-20c-15.438,0-28,12.563-28,28c0,7.838,3.258,14.912,8.466,20
                    c-5.208,5.088-8.466,12.162-8.466,20c0,5.393,1.605,10.39,4.259,14.668C282.689,359.125,276,368.768,276,380
                    c0,4.311,1.061,8.349,2.809,12H216c0-24.461-12.258-46.109-30.953-59.125C203.125,325.984,216,308.469,216,288
                    c0-4.418-3.578-8-8-8h-64v-80h-16v80c-13.234,0-24,10.766-24,24v176h16V304c0-4.41,3.586-8,8-8h70.984
                    c-3.555,13.785-16.102,24-30.984,24h-24c-4.422,0-8,3.582-8,8s3.578,8,8,8c30.875,0,56,25.121,56,56v8c0,4.418,3.578,8,8,8h46.809
                    c-1.748,3.651-2.809,7.689-2.809,12c0,15.438,12.563,28,28,28v32h16v-32h32h4c15.438,0,28-12.563,28-28
                    c0-4.357-1.087-8.433-2.871-12.114C372.034,407.278,384,395.051,384,380c0-5.393-1.605-10.39-4.259-14.668
                    C389.311,360.875,396,351.232,396,340c0-7.838-3.258-14.912-8.466-20C392.742,314.912,396,307.838,396,300z M332,432h-4h-40h-8
                    c-6.617,0-12-5.383-12-12s5.383-12,12-12h24h28c6.617,0,12,5.383,12,12S338.617,432,332,432z M356,392h-24h-28
                    c-6.617,0-12-5.383-12-12s5.383-12,12-12h12h40c6.617,0,12,5.383,12,12S362.617,392,356,392z M368,352h-12h-40
                    c-6.617,0-12-5.383-12-12s5.383-12,12-12h52c6.617,0,12,5.383,12,12S374.617,352,368,352z M368,312h-52c-6.617,0-12-5.383-12-12
                    s5.383-12,12-12h52c6.617,0,12,5.383,12,12S374.617,312,368,312z" />
                                        <path
                                            d="M119.977,101.828c-0.164-2.297-1.305-4.414-3.141-5.805l-8.328-6.313C106.516,79.625,97.664,72,87.078,72
                    c-11.945,0-21.688,9.711-21.844,21.707c-6.391-1.117-12.5-3.57-17.969-7.254l-2.789-1.883c-2.445-1.652-5.617-1.832-8.234-0.434
                    C33.633,85.523,32,88.242,32,91.199v6.563c0,9.641,2.906,18.836,8.297,26.559l-5.984,6.055c-2.273,2.293-2.938,5.727-1.695,8.707
                    C33.859,142.059,36.773,144,40,144h38.766c15.461,0,28.242-11.785,29.961-26.91l8.961-9.066
                    C119.305,106.387,120.141,104.129,119.977,101.828z M95.234,107.977c-1.484,1.496-2.313,3.52-2.313,5.625
                    c0,7.938-6.352,14.398-14.156,14.398H58.414c1.266-2.914,0.719-6.43-1.648-8.824c-3.734-3.781-6.406-8.539-7.758-13.668
                    c7.633,3.219,15.836,4.891,24.227,4.891c4.422,0,8-3.582,8-8V94c0-3.309,2.625-6,5.844-6s5.844,2.691,5.844,6
                    c0,2.504,1.172,4.863,3.164,6.375l3.813,2.887L95.234,107.977z" />
                                        <path
                                            d="M264,136v-16h-24c-4.422,0-8,3.582-8,8v24h-16v16h16v32h16v-32h16v-16h-16v-16H264z" />
                                        <path
                                            d="M288,88h-96c-13.234,0-24,10.766-24,24v96c0,13.234,10.766,24,24,24h96c13.234,0,24-10.766,24-24v-96
                    C312,98.766,301.234,88,288,88z M296,208c0,4.41-3.586,8-8,8h-96c-4.414,0-8-3.59-8-8v-96c0-4.41,3.586-8,8-8h96
                    c4.414,0,8,3.59,8,8V208z" />
                                        <path
                                            d="M120,40H24C10.766,40,0,50.766,0,64v96c0,13.234,10.766,24,24,24h96c13.234,0,24-10.766,24-24V64
                    C144,50.766,133.234,40,120,40z M128,160c0,4.41-3.586,8-8,8H24c-4.414,0-8-3.59-8-8V64c0-4.41,3.586-8,8-8h96c4.414,0,8,3.59,8,8
                    V160z" />
                                        <path
                                            d="M456,0h-96c-13.234,0-24,10.766-24,24v96c0,13.234,10.766,24,24,24h96c13.234,0,24-10.766,24-24V24
                    C480,10.766,469.234,0,456,0z M464,120c0,4.41-3.586,8-8,8h-96c-4.414,0-8-3.59-8-8V80h16.809c3.717,18.234,19.876,32,39.191,32
                    s35.474-13.766,39.191-32H464V120z M384,72c0-13.234,10.766-24,24-24s24,10.766,24,24s-10.766,24-24,24S384,85.234,384,72z
                    M464,64h-16.809C443.474,45.766,427.315,32,408,32s-35.474,13.766-39.191,32H352V24c0-4.41,3.586-8,8-8h96c4.414,0,8,3.59,8,8V64
                    z" />
                                        <rect x="232" y="328" width="16" height="16" />
                                    </svg>
                                </a>
                                <h3 class="st-iconbox-title"><a href='service-details.html'>Social Media</a></h3>
                                <p class="st-iconbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing sed do
                                    eiusmod tempor incididu labore etdolore magna aliqua.</p>
                            </div>
                            <!-- Service - Icon Box Five -->
                            <div class="st-iconbox st-style1 text-center">
                                <a class='st-iconbox-icon brown-icon' href='service-details.html'>
                                    <svg viewBox="0 0 512 512">
                                        <path
                                            d="M469.984,0.008c-1.826,0-7.094,0-8,0H159.981c-5.523,0-10,4.478-10,10s4.477,10,10,10h274.247
                    c-3.954,6.403-6.242,13.937-6.242,21.999v130.982c0,5.522,4.477,10,10,10s10-4.478,10-10v-30.985h53.998c5.523,0,10-4.478,10-10
                    V42.007C511.983,18.849,493.143,0.008,469.984,0.008z M491.984,122.004h-43.999V42.007c0-12.131,9.869-21.999,21.999-21.999
                    s21.999,9.869,21.999,21.999V122.004z" />
                                        <path
                                            d="M501.072,407.524l-65.32-65.32c7.538-15.374,11.778-32.645,11.778-50.89c0-63.961-52.036-115.996-115.996-115.996
                    s-115.996,52.035-115.996,115.996c0,14.623,2.727,28.62,7.688,41.518l-11.705,11.705l-48.143-48.144
                    c-1.875-1.875-4.419-2.929-7.071-2.929c-2.652,0-5.196,1.054-7.071,2.929l-11.255,11.255v-91.312c0-5.522-4.477-10-10-10
                    c-5.523,0-10,4.478-10,10v111.312l-90.415,90.416c-3.905,3.905-3.905,10.237,0,14.143c1.953,1.952,4.512,2.929,7.071,2.929
                    s5.119-0.977,7.071-2.929l76.273-76.273v72.064H73.989c-5.523,0-10,4.478-10,10v31.999c0,23.158,18.84,41.999,41.999,41.999
                    h299.998c23.159,0,42-18.841,42-42.001v-8.585c6.996,6.791,16.218,10.525,26.067,10.525c0.062,0,0.125-0.001,0.188-0.001
                    c10.072-0.049,19.533-3.991,26.643-11.101C515.632,446.082,515.717,422.169,501.072,407.524z M331.533,195.317
                    c52.933,0,95.997,43.064,95.997,95.997s-43.064,95.997-95.997,95.997c-36.348,0-68.041-20.306-84.333-50.169l57.79-57.79v22.687
                    c0,5.522,4.477,10,10,10s10-4.478,10-10v-47.992c0-5.522-4.477-10-10-10h-47.993c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10
                    h25.015l-52.974,52.974c-2.278-8.185-3.501-16.805-3.501-25.706C235.536,238.38,278.6,195.317,331.533,195.317z M105.987,491.993
                    c-12.131-0.001-21.999-9.87-21.999-22v-21.999h279.997v12c0,0.327,0.018,0.65,0.049,0.969c-0.031,0.319-0.049,0.642-0.049,0.969
                    v8.061c0,8.063,2.288,15.598,6.243,22.001H105.987z M427.986,469.99c0,12.133-9.87,22.002-22,22.002
                    c-12.132,0-22.001-9.87-22.001-22.001v-8.061c0-0.327-0.018-0.65-0.049-0.969c0.031-0.319,0.049-0.642,0.049-0.969v-21.999
                    c0-5.522-4.477-10-10-10H137.981V335.93l18.325-18.325l48.143,48.144c1.875,1.875,4.419,2.929,7.071,2.929
                    c2.652,0,5.196-1.054,7.071-2.929l13.982-13.982c20.41,33.288,57.134,55.542,98.96,55.542c18.157,0,35.352-4.198,50.669-11.668
                    l45.784,45.784V469.99z M486.742,446.687c-3.358,3.358-7.833,5.221-12.599,5.243c-0.029,0.001-0.059,0.001-0.089,0.001
                    c-4.696,0-9.074-1.794-12.335-5.056l-61.876-61.876c9.646-7.052,18.165-15.555,25.237-25.185l61.85,61.85
                    C493.777,428.512,493.693,439.738,486.742,446.687z" />
                                        <path
                                            d="M394.846,281.315c-5.523,0-10,4.478-10,10c0,29.396-23.916,53.312-53.313,53.312c-5.523,0-10,4.477-10,10
                    c0,5.522,4.477,10,10,10c40.425,0,73.313-32.888,73.313-73.312C404.846,285.793,400.369,281.315,394.846,281.315z" />
                                        <path
                                            d="M256.118,172.003h-9.127v-66.998c0-5.522-4.477-10-10-10h-45.922c-5.523,0-10,4.478-10,10v66.998h-16.076V64.006
                    c0-5.522-4.477-10-10-10h-43.999c-5.523,0-10,4.478-10,10v107.996H84.997v-43.999c0-5.522-4.477-10-10-10H30.999
                    c-5.523,0-10,4.478-10,10v43.999H10c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10h246.119c5.523,0,10-4.478,10-10
                    C266.118,176.48,261.641,172.003,256.118,172.003z M64.998,172.003H40.999v-33.999h23.999V172.003z M144.995,172.003h-23.999
                    V74.006h23.999V172.003z M226.992,172.003H201.07v-56.998h25.922V172.003z" />
                                        <path
                                            d="M337.451,54.006h-77.459c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10h77.459c5.523,0,10-4.478,10-10
                    C347.45,58.484,342.974,54.006,337.451,54.006z" />
                                        <path
                                            d="M393.987,56.935c-1.86-1.86-4.44-2.93-7.07-2.93c-2.63,0-5.21,1.069-7.07,2.93c-1.86,1.861-2.93,4.44-2.93,7.07
                    c0,2.63,1.07,5.21,2.93,7.069c1.86,1.86,4.44,2.931,7.07,2.931c2.63,0,5.21-1.07,7.07-2.931c1.86-1.859,2.93-4.439,2.93-7.069
                    C396.917,61.376,395.847,58.796,393.987,56.935z" />
                                        <path
                                            d="M298.721,98.005h-16.397c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10h16.397c5.523,0,10-4.478,10-10
                    C308.721,102.483,304.244,98.005,298.721,98.005z" />
                                        <path
                                            d="M386.915,98.005h-49.464c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10h49.464c5.523,0,10-4.478,10-10
                    C396.915,102.483,392.438,98.005,386.915,98.005z" />
                                        <path
                                            d="M17.079,442.694c-1.86-1.86-4.44-2.931-7.07-2.931c-2.64,0-5.21,1.07-7.07,2.931c-1.87,1.859-2.93,4.439-2.93,7.069
                    c0,2.63,1.06,5.21,2.93,7.07c1.86,1.86,4.43,2.93,7.07,2.93c2.63,0,5.2-1.069,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07
                    C20.009,447.132,18.939,444.552,17.079,442.694z" />
                                    </svg>
                                </a>
                                <h3 class="st-iconbox-title"><a href='service-details.html'>Analytical Reporting</a></h3>
                                <p class="st-iconbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing sed do
                                    eiusmod tempor incididu labore etdolore magna aliqua.</p>
                            </div>
                            <!-- Service - Icon Box Six -->
                            <div class="st-iconbox st-style1 text-center">
                                <a class='st-iconbox-icon magenta-icon' href='service-details.html'>
                                    <svg viewBox="0 0 512 512">
                                        <g id="Outline">
                                            <path
                                                d="M488,64H360V80h56V384H236.3a21.8,21.8,0,0,0,3.7-12.1v-.552a21.682,21.682,0,0,0-5.638-14.707,21.919,21.919,0,0,0,5.638-14.7v-2.6a21.682,21.682,0,0,0-5.638-14.707,21.919,21.919,0,0,0,5.638-14.7v-2.6a21.682,21.682,0,0,0-5.638-14.707A21.955,21.955,0,0,0,218.053,256H208a8,8,0,0,0-1.72.2l-4.086-21.452,4.69-1.2,3.55.064a514.1,514.1,0,0,1,163.849,29.924,8,8,0,0,0,10.449-9.481l-19.819-78.982,30.565-14.752a8,8,0,0,0,4.281-9.152l-11.676-46.528a8,8,0,0,0-8.17-6.042l-33.755,1.737-19.8-78.921a8,8,0,0,0-13.724-3.385A519.861,519.861,0,0,1,182.66,123.221l-3.1,1.768L88.5,148.313a8,8,0,0,0-5.774,9.7l1.954,7.788-30.666,7.854a8,8,0,0,0-5.774,9.7l15.567,62.037a8,8,0,0,0,9.744,5.8l30.591-7.835,1.936,7.712a8,8,0,0,0,9.744,5.8l16.166-4.14,7.863,39.33-7.006,3.822A39.978,39.978,0,0,0,112,331v53H32V80H224V64H24a8,8,0,0,0-8,8V392a8,8,0,0,0,8,8H184v88a8,8,0,0,0,8,8h96a8,8,0,0,0,8-8V400H488a8,8,0,0,0,8-8V72A8,8,0,0,0,488,64ZM443.314,336H480v36.686ZM432,155.314,468.686,192H432Zm0,64L468.686,256H432ZM480,272v36.686L443.314,272Zm-36.686-64H480v36.686ZM480,180.686,443.314,144H480ZM432,128V91.314L468.686,128Zm0,155.314L468.686,320H432Zm48-166.627L443.313,80H480ZM216,448H200V432h16ZM350.127,116.15l24.039-1.236,8.489,33.828-21.719,10.482-9.249-36.86ZM314.446,39.7l51.185,203.978a529.78,529.78,0,0,0-153.413-26.02L191.827,136.4A535.462,535.462,0,0,0,314.446,39.7ZM77.37,233.7,65.7,187.177l22.879-5.86,11.673,46.518Zm22.814-71.858,76.608-19.621,19.457,77.537-76.608,19.622Zm47.327,86.916,39.152-10.028,4.8,25.184-36.9,20.125ZM128,384V331a23.985,23.985,0,0,1,12.508-21.069L210.04,272h8.013a5.947,5.947,0,0,1,1.881,11.589l-8.76,2.92-.062.021-5.642,1.881a8,8,0,1,0,5.06,15.178L216.2,301.7a5.947,5.947,0,0,1,7.8,5.653v2.6a5.94,5.94,0,0,1-4.066,5.642l-8.76,2.92-.062.021-5.642,1.881a8,8,0,1,0,5.06,15.178L216.2,333.7a5.947,5.947,0,0,1,7.8,5.653v2.6a5.94,5.94,0,0,1-4.066,5.642l-8.76,2.92-.062.021-5.642,1.881a8,8,0,1,0,5.06,15.178L216.2,365.7a5.947,5.947,0,0,1,7.8,5.653v.552a5.978,5.978,0,0,1-5.106,5.889L175.432,384Zm88,16v16H200V400Zm-16,64h16v16H200Zm80,16H232V400h48ZM432,347.313,468.687,384H432Z" />
                                            <path
                                                d="M306.961,91.652,296.184,79.827c-4.311,3.929-8.747,7.844-13.185,11.638l10.4,12.162C297.961,99.724,302.526,95.7,306.961,91.652Z" />
                                            <path
                                                d="M223.365,154.754a568.754,568.754,0,0,0,56.308-39.767L269.665,102.5a552.9,552.9,0,0,1-54.719,38.645Z" />
                                            <rect x="121.946" y="171.103" width="16" height="23.985"
                                                transform="translate(-40.657 37.135) rotate(-14.087)" />
                                            <rect x="152.649" y="163.238" width="16" height="23.985"
                                                transform="translate(-37.819 44.37) rotate(-14.087)" />
                                            <path
                                                d="M264.845,348.422l14.31,7.156a106.068,106.068,0,0,0,7.347-19L271.086,332.3A90.15,90.15,0,0,1,264.845,348.422Z" />
                                            <path
                                                d="M276.449,259.612l-13.393,8.754c.13.2,12.943,20.384,10.819,48.088l15.953,1.223C292.384,284.331,277.1,260.605,276.449,259.612Z" />
                                        </g>
                                    </svg>
                                </a>
                                <h3 class="st-iconbox-title"><a href='service-details.html'>Digital Advertising</a></h3>
                                <p class="st-iconbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing sed do
                                    eiusmod tempor incididu labore etdolore magna aliqua.</p>
                            </div>
                        </div><!-- .st-iconbox-list -->
                    </div>
                </div>
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
        <!-- END: Service Section -->
        <hr>
        <!-- START: Product Section -->
        <section class="st-parallax">
            <div class="st-parallax-shape st-position6 st-to-left"><img src="assets/img/shape/6.png" alt="">
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="st-heading-section text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.2s">
                            <h3 class="st-heading-title">Quick look of out polular product</h3>
                            <p class="st-heading-text">Business services are activities that combine consolida.</p>
                        </div>
                    </div>
                </div>
                <div class="st-slider st-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
                        data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3"
                        data-lg-slides="3" data-add-slides="3">
                        <div class="slick-wrapper">
                            <div class="slick-slide-in">
                                <div class="st-product st-style1">
                                    <div class="st-product-in">
                                        <!-- Product Image -->
                                        <div class="st-product-thumb">
                                            <a href='product-details.html'><img src="assets/img/product1.png"
                                                    alt="Product"></a>
                                            <div class="st-product-tools">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Product Name and Price -->
                                        <div class="st-product-details">
                                            <div class="st-product-label">
                                                <p class="st-product-price">$109</p>
                                                <div class="st-star" data-star="5">
                                                    <div class="st-star-in"></div>
                                                </div>
                                            </div>
                                            <h4 class="st-product-title"><a href='product-details.html'>Men's Comfort
                                                    Rubber Shoes</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .slick-slide-in -->
                            <div class="slick-slide-in">
                                <div class="st-product st-style1">
                                    <div class="st-product-in">
                                        <!-- Product Image -->
                                        <div class="st-product-thumb">
                                            <a href='product-details.html'><img src="assets/img/product3.png"
                                                    alt="Product"></a>
                                            <div class="st-product-tools">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="st-product-badge st-blue">New</span>
                                        </div>
                                        <!-- Product Name and Price -->
                                        <div class="st-product-details">
                                            <div class="st-product-label">
                                                <p class="st-product-price">$199</p>
                                                <div class="st-star" data-star="5">
                                                    <div class="st-star-in"></div>
                                                </div>
                                            </div>
                                            <h4 class="st-product-title"><a href='product-details.html'>Men's Comfort
                                                    Walking Shoes</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .slick-slide-in -->
                            <div class="slick-slide-in">
                                <div class="st-product st-style1">
                                    <div class="st-product-in">
                                        <!-- Product Image -->
                                        <div class="st-product-thumb">
                                            <a href='product-details.html'><img src="assets/img/product2.png"
                                                    alt="Product"></a>
                                            <div class="st-product-tools">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Product Name and Price -->
                                        <div class="st-product-details">
                                            <div class="st-product-label">
                                                <p class="st-product-price st-offer">$99 <span
                                                        class="st-previous-price">$110</span></p>
                                                <div class="st-star" data-star="4">
                                                    <div class="st-star-in"></div>
                                                </div>
                                            </div>
                                            <h4 class="st-product-title"><a href='product-details.html'>Men's Comfort
                                                    Winter Sneakers</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .slick-slide-in -->
                            <div class="slick-slide-in">
                                <div class="st-product st-style1">
                                    <div class="st-product-in">
                                        <!-- Product Image -->
                                        <div class="st-product-thumb">
                                            <a href='product-details.html'><img src="assets/img/product1.png"
                                                    alt="Product"></a>
                                            <div class="st-product-tools">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="st-product-badge st-blue">New</span>
                                        </div>
                                        <!-- Product Name and Price -->
                                        <div class="st-product-details">
                                            <div class="st-product-label">
                                                <p class="st-product-price">$109</p>
                                                <div class="st-star" data-star="5">
                                                    <div class="st-star-in"></div>
                                                </div>
                                            </div>
                                            <h4 class="st-product-title"><a href='product-details.html'>Men's Comfort
                                                    Rubber Shoes</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .slick-slide-in -->
                            <div class="slick-slide-in">
                                <div class="st-product st-style1">
                                    <div class="st-product-in">
                                        <!-- Product Image -->
                                        <div class="st-product-thumb">
                                            <a href='product-details.html'><img src="assets/img/product3.png"
                                                    alt="Product"></a>
                                            <div class="st-product-tools">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Product Name and Price -->
                                        <div class="st-product-details">
                                            <div class="st-product-label">
                                                <p class="st-product-price">$199</p>
                                                <div class="st-star" data-star="5">
                                                    <div class="st-star-in"></div>
                                                </div>
                                            </div>
                                            <h4 class="st-product-title"><a href='product-details.html'>Men's Comfort
                                                    Walking Shoes</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .slick-slide-in -->
                        </div>
                    </div><!-- .slick-container -->
                    <div class="pagination st-style1 st-flex st-type1 st-hidden"></div>
                    <!-- If dont need Pagination then add class .st-hidden -->
                    <div class="swipe-arrow st-style1"> <!-- If dont need navigation then add class .st-hidden -->
                        <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
                        <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
                    </div>
                </div><!-- .st-slider -->
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
        <!-- END: Product Section -->

        <!-- START: Countdown Section -->
        <section class="st-gradient-bg st-parallax">
            <div class="st-parallax-shape st-position7 st-to-rotate-up"><img src="assets/img/shape/7.png" alt="">
            </div>
            <div class="st-parallax-shape st-position8 st-to-right-up"><img src="assets/img/shape/8.png" alt="">
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="st-offer-img wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                            <img src="assets/img/product/offer1.png" alt="offer">
                        </div>
                        <div class="st-height-b0 st-height-lg-b30"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="st-vertical-middle wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="st-vertical-middle-in">
                                <div class="st-offer">
                                    <div class="st-offer-info">
                                        <h2 class="st-offer-title">End of season clearnce flat <span>50%</span> Discount
                                        </h2>
                                        <p class="st-offer-desc">There is very little time to buy the product as soon as
                                            possible <br>you buy the
                                            discount product</p>
                                    </div>
                                    <div class="st-countdown-wrap">
                                        <div class="st-countdown">
                                            <div class="st-countdown-inner">
                                                <h4 class="st-countdown-number" id="day">07</h4>
                                                <p class="st-countdown-text">Days</p>
                                            </div>
                                        </div>
                                        <div class="st-countdown">
                                            <div class="st-countdown-inner">
                                                <h4 class="st-countdown-number" id="hour">12</h4>
                                                <p class="st-countdown-text">Hours</p>
                                            </div>
                                        </div>
                                        <div class="st-countdown">
                                            <div class="st-countdown-inner">
                                                <h4 class="st-countdown-number" id="minute">59</h4>
                                                <p class="st-countdown-text">Minutes</p>
                                            </div>
                                        </div>
                                        <div class="st-countdown">
                                            <div class="st-countdown-inner">
                                                <h4 class="st-countdown-number" id="second">07</h4>
                                                <p class="st-countdown-text">Seconds</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class='btn st-btn-custom st-solid-white' href='shop.html'>Shop Now</a>
                                </div><!-- .st-offer -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
        <!-- END: Countdown Section -->
        <!-- START: Testomonial Section -->
        <section class="st-parallax">
            <div class="st-parallax-shape st-position9 st-to-up"><img src="assets/img/shape/9.png" alt=""></div>
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="st-heading-section text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.2s">
                            <h3 class="st-heading-title">Review from our lovely clients</h3>
                            <p class="st-heading-text">Business services are activities that combine.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="st-slider st-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="800"
                                data-autoplay-timeout="1000" data-center="0" data-slides-per-view="1"
                                data-fade-slide="0">
                                <div class="slick-wrapper">
                                    <div class="slick-slide-in">
                                        <div class="st-testimonial st-style2">
                                            <div class="st-testimonial-left">
                                                <p class="st-testimonial-text">"Leverage agile frameworks to provide a
                                                    robust synopsis for high level overviews. Iterative approaches to
                                                    corporate stra foster collaborative thinking to further the overall
                                                    value proposition. Organically grow the holistic world."</p>
                                                <div class="st-testimonial-info">
                                                    <img src="assets/img/testimonial-sm1.jpg" class="st-avatar-img"
                                                        alt="Client Avatar">
                                                    <div class="st-testimonial-meta text-left">
                                                        <h4 class="st-testimonial-avatar">Myrtle Dietz</h4>
                                                        <p class="st-testimonial-avatar-designation">Director</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="st-testimonial-right">
                                                <div class="st-testimonial-img" data-src="assets/img/testimonial-lg1.jpg">
                                                    <a href="https://www.youtube.com/embed/iHLOS7thkJs?autoplay=1"
                                                        class="st-play-btn st-video-open">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="23px"
                                                            height="27px">
                                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                                d="M22.998,13.499 L0.002,0.002 L0.002,26.996 L22.998,13.499 " />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- .st-testimonial -->
                                    </div>
                                    <div class="slick-slide-in">
                                        <div class="st-testimonial st-style2">
                                            <div class="st-testimonial-left">
                                                <p class="st-testimonial-text">"Bring to the table win-win survival
                                                    strategies to ensure proactive domination. At the end of the day, going
                                                    forward, a new normal that has evolved from generation X is on the
                                                    runway heading towards a streamlined cloud solution."</p>
                                                <div class="st-testimonial-info">
                                                    <img src="assets/img/testimonial-sm2.jpg" class="st-avatar-img"
                                                        alt="Client Avatar">
                                                    <div class="st-testimonial-meta text-left">
                                                        <h4 class="st-testimonial-avatar">Mark Koala</h4>
                                                        <p class="st-testimonial-avatar-designation">Chairman</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="st-testimonial-right">
                                                <div class="st-testimonial-img" data-src="assets/img/testimonial-lg2.jpg">
                                                    <a href="https://www.youtube.com/embed/iHLOS7thkJs?autoplay=1"
                                                        class="st-play-btn st-video-open">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="23px"
                                                            height="27px">
                                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                                d="M22.998,13.499 L0.002,0.002 L0.002,26.996 L22.998,13.499 " />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- .st-testimonial -->
                                    </div>
                                    <div class="slick-slide-in">
                                        <div class="st-testimonial st-style2">
                                            <div class="st-testimonial-left">
                                                <p class="st-testimonial-text">"Capitalize on low hanging fruit to identify
                                                    a ballpark value added activity to beta test. Override the digital
                                                    divide with additional clickthroughs from DevOps. Nanotechnology
                                                    immersion along the information highway."</p>
                                                <div class="st-testimonial-info">
                                                    <img src="assets/img/testimonial-sm3.jpg" class="st-avatar-img"
                                                        alt="Client Avatar">
                                                    <div class="st-testimonial-meta text-left">
                                                        <h4 class="st-testimonial-avatar">Jhone Doe</h4>
                                                        <p class="st-testimonial-avatar-designation">Maneger</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="st-testimonial-right">
                                                <div class="st-testimonial-img" data-src="assets/img/testimonial-lg3.jpg">
                                                    <a href="https://www.youtube.com/embed/iHLOS7thkJs?autoplay=1"
                                                        class="st-play-btn st-video-open">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="23px"
                                                            height="27px">
                                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                                d="M22.998,13.499 L0.002,0.002 L0.002,26.996 L22.998,13.499 " />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- .st-testimonial -->
                                    </div>
                                </div>
                            </div>
                            <div class="pagination st-style1 st-type1 st-hidden"></div>
                            <div class="swipe-arrow st-style1">
                                <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
                                <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
        <!-- END: Testomonial Section -->
        <hr>
        <!-- START: Blog Section -->
        <section class="st-parallax">
            <div class="st-parallax-shape st-position10 st-to-up"><img src="assets/img/shape/10.png" alt="">
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="st-heading-section text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.2s">
                            <h3 class="st-heading-title">Latest News from our side</h3>
                            <p class="st-heading-text">Business services are activities that combine</p>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <!-- First Blog Post -->
                    <div class="col-lg-4">
                        <div class="st-post st-style1 text-center">
                            <a class='st-post-thumb' href='blog-details-right-sidebar.html'>
                                <img src="assets/img/blog1.jpg" alt="Blog">
                            </a>
                            <div class="st-post-info">
                                <div class="st-post-head">
                                    <div class="st-post-label">
                                        <span class="st-posted-by"><a href="#">Raul Dev</a></span>
                                        <span class="st-post-date">March 01, 2020</span>
                                    </div>
                                    <h4 class="st-post-title"><a href='blog-details-right-sidebar.html'>Think accurately
                                            for new business</a></h4>
                                </div>
                                <div class="st-post-btn-wrap">
                                    <a class='st-post-btn' href='blog-details-right-sidebar.html'>Read More <i
                                            class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="st-height-b0 st-height-lg-b30"></div>
                    </div>
                    <!-- Second Blog Post -->
                    <div class="col-lg-4">
                        <div class="st-post st-style1 text-center">
                            <a class='st-post-thumb' href='blog-details-right-sidebar.html'>
                                <img src="assets/img/blog2.jpg" alt="Blog">
                            </a>
                            <div class="st-post-info">
                                <div class="st-post-head">
                                    <div class="st-post-label">
                                        <span class="st-posted-by"><a href="#">Raul Dev</a></span>
                                        <span class="st-post-date">March 01, 2020</span>
                                    </div>
                                    <h4 class="st-post-title"><a href='blog-details-right-sidebar.html'>Write a business
                                            plan for any situa</a></h4>
                                </div>
                                <div class="st-post-btn-wrap">
                                    <a class='st-post-btn' href='blog-details-right-sidebar.html'>Read More <i
                                            class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="st-height-b0 st-height-lg-b30"></div>
                    </div>
                    <!-- Third Blog Post -->
                    <div class="col-lg-4">
                        <div class="st-post st-style1 text-center">
                            <a class='st-post-thumb' href='blog-details-right-sidebar.html'>
                                <img src="assets/img/blog3.jpg" alt="Blog">
                            </a>
                            <div class="st-post-info">
                                <div class="st-post-head">
                                    <div class="st-post-label">
                                        <span class="st-posted-by"><a href="#">Raul Dev</a></span>
                                        <span class="st-post-date">March 01, 2020</span>
                                    </div>
                                    <h4 class="st-post-title"><a href='blog-details-right-sidebar.html'>Successful
                                            business goals & plans</a></h4>
                                </div>
                                <div class="st-post-btn-wrap">
                                    <a class='st-post-btn' href='blog-details-right-sidebar.html'>Read More <i
                                            class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="st-height-b0 st-height-lg-b30"></div>
                    </div>
                </div>
            </div>
            <div class="st-height-b120 st-height-lg-b50"></div>
        </section>
        <!-- END: Blog Section -->
        <hr>
        <!-- START: Brand Section -->
        <section>
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="st-slider st-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600"
                                data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2"
                                data-md-slides="3" data-lg-slides="4" data-add-slides="5">
                                <div class="slick-wrapper">
                                    <div class="slick-slide-in">
                                        <div class="single-brand-thumb style1">
                                            <img src="assets/img/award1.png" alt="Envato Brand">
                                            <div class="brand-hover">
                                                <h3>ACQ Global <br>Awards</h3>
                                                <p>Wineer 2020</p>
                                            </div>
                                        </div>
                                    </div><!-- .slick-slide-in -->
                                    <div class="slick-slide-in">
                                        <div class="single-brand-thumb style1">
                                            <img src="assets/img/award2.png" alt="Envato Brand">
                                            <div class="brand-hover">
                                                <h3>The BCI Global <br>Awards</h3>
                                                <p>Wineer 2020</p>
                                            </div>
                                        </div>
                                    </div><!-- .slick-slide-in -->
                                    <div class="slick-slide-in">
                                        <div class="single-brand-thumb style1">
                                            <img src="assets/img/award3.png" alt="Envato Brand">
                                            <div class="brand-hover">
                                                <h3>Best in Biz <br>Awards</h3>
                                                <p>Wineer 2020</p>
                                            </div>
                                        </div>
                                    </div><!-- .slick-slide-in -->
                                    <div class="slick-slide-in">
                                        <div class="single-brand-thumb style1">
                                            <img src="assets/img/award4.png" alt="Envato Brand">
                                            <div class="brand-hover">
                                                <h3>Forbes Global <br>Awards</h3>
                                                <p>Wineer 2020</p>
                                            </div>
                                        </div>
                                    </div><!-- .slick-slide-in -->
                                    <div class="slick-slide-in">
                                        <div class="single-brand-thumb style1">
                                            <img src="assets/img/award5.png" alt="Envato Brand">
                                            <div class="brand-hover">
                                                <h3>The BCI Global <br>Awards</h3>
                                                <p>Wineer 2020</p>
                                            </div>
                                        </div>
                                    </div><!-- .slick-slide-in -->
                                    <div class="slick-slide-in">
                                        <div class="single-brand-thumb style1">
                                            <img src="assets/img/award1.png" alt="Envato Brand">
                                            <div class="brand-hover">
                                                <h3>ACQ Global <br>Awards</h3>
                                                <p>Wineer 2020</p>
                                            </div>
                                        </div>
                                    </div><!-- .slick-slide-in -->
                                    <div class="slick-slide-in">
                                        <div class="single-brand-thumb style1">
                                            <img src="assets/img/award2.png" alt="Envato Brand">
                                            <div class="brand-hover">
                                                <h3>The BCI Global <br>Awards</h3>
                                                <p>Wineer 2020</p>
                                            </div>
                                        </div>
                                    </div><!-- .slick-slide-in -->
                                    <div class="slick-slide-in">
                                        <div class="single-brand-thumb style1">
                                            <img src="assets/img/award3.png" alt="Envato Brand">
                                            <div class="brand-hover">
                                                <h3>Best in Biz <br>Awards</h3>
                                                <p>Wineer 2020</p>
                                            </div>
                                        </div>
                                    </div><!-- .slick-slide-in -->
                                    <div class="slick-slide-in">
                                        <div class="single-brand-thumb style1">
                                            <img src="assets/img/award4.png" alt="Envato Brand">
                                            <div class="brand-hover">
                                                <h3>Forbes Global <br>Awards</h3>
                                                <p>Wineer 2020</p>
                                            </div>
                                        </div>
                                    </div><!-- .slick-slide-in -->
                                    <div class="slick-slide-in">
                                        <div class="single-brand-thumb style1">
                                            <img src="assets/img/award5.png" alt="Envato Brand">
                                            <div class="brand-hover">
                                                <h3>The BCI Global <br>Awards</h3>
                                                <p>Wineer 2020</p>
                                            </div>
                                        </div>
                                    </div><!-- .slick-slide-in -->
                                </div>
                            </div><!-- .slick-container -->
                            <div class="pagination st-style1 st-type1 st-flex st-hidden"></div>
                            <!-- If dont need Pagination then add class .st-hidden -->
                            <div class="swipe-arrow st-style1"> <!-- If dont need navigation then add class .st-hidden -->
                                <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
                                <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
                            </div>
                        </div><!-- .st-slider -->
                    </div>
                </div>
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
        <!-- END: Brand Section -->
    </div>
@endsection
