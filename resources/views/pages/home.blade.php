@extends('layouts.app')
@section('content')
    {{-- <div class="header-top navBarDetailPage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="d-flex justify-content-between flex-wrap align-items-center">
                        <div class="header-info-left">

                        </div>
                        <div class="header-info-right d-none d-sm-block">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <main>
        <div class="slider-area hero-bg1   hero-overly">




            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/slider/slider1.jpg') }}" class="d-block w-100"
                            alt="https://picsum.photos/1903/595?dark">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/1903/595?dark" class="d-block w-100"
                            alt="https://picsum.photos/1903/595?dark">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/1903/595?dark" class="d-block w-100"
                            alt="https://picsum.photos/1903/595?dark">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



    </main>

    <style>
        .next {
            display: none;
        }
    </style>

    @if (count($hotels) > 2)
        <script>
            $(document).ready(function() {

                // alert("test");
                pageSize = 8;
                incremSlide = 5;
                startPage = 0;
                numberPage = 0;

                var pageCount = $(".line-content").length / pageSize;
                var totalSlidepPage = Math.floor(pageCount / incremSlide);

                for (var i = 0; i < pageCount; i++) {
                    $("#pagin").append('<li><a href="#topScroll">' + (i + 1) + '</a></li> ');
                    if (i > pageSize) {
                        $("#pagin li").eq(i).hide();
                    }
                }

                var prev = $("<li/>").addClass("prev").html("Prev").click(function() {
                    startPage -= 5;
                    incremSlide -= 5;
                    numberPage--;
                    slide();
                });

                prev.hide();

                var next = $("<li/>").addClass("next").html("Next").click(function() {
                    startPage += 5;
                    incremSlide += 5;
                    numberPage++;
                    slide();
                });

                $("#pagin").prepend(prev).append(next);

                $("#pagin li").first().find("a").addClass("current");

                slide = function(sens) {
                    $("#pagin li").hide();

                    for (t = startPage; t < incremSlide; t++) {
                        $("#pagin li").eq(t + 1).show();
                    }
                    if (startPage == 0) {
                        next.show();
                        prev.hide();
                    } else if (numberPage == totalSlidepPage) {
                        next.hide();
                        prev.show();
                    } else {
                        next.show();
                        prev.show();
                    }


                }

                showPage = function(page) {
                    $(".line-content").hide();
                    $(".line-content").each(function(n) {
                        if (n >= pageSize * (page - 1) && n < pageSize * page)
                            $(this).show();
                    });
                }

                showPage(1);
                $("#pagin li a").eq(0).addClass("current");

                $("#pagin li a").click(function() {
                    $("#pagin li a").removeClass("current");
                    $(this).addClass("current");
                    showPage(parseInt($(this).text()));
                });


            });
        </script>
    @endif

    <script>
        // function initMap() {



        //     // console.log(locationArr.length);

        //     var mainCoords = locationArr[0];
        //     // console.log(mainCoords);

        //     var mapOptions = {
        //         center: {
        //             lat: mainCoords.lat,
        //             lng: mainCoords.lng
        //         },
        //         zoom: 13,
        //     };

        //     const map = new google.maps.Map(document.getElementById('map'), mapOptions);
        //     const icon = {
        //         url: @json(asset('/storage/map_pointer.png')), // url
        //         // url: "https://hostdev2.justboardrooms.com/Images/LocationPointer.png", // url
        //         scaledSize: new google.maps.Size(45, 65), // scaled size

        //     };
        //     var allMarkers = [];
        //     for (var i = 0; i < locationArr.length; i++) {


        //         var myCoords = locationArr[i];

        //         // console.log(myCoords);

        //         r = new google.maps.Marker({
        //             position: myCoords,
        //             map: map,
        //             icon: icon,
        //             title: myCoords.hotel_name,
        //             optimized: true,
        //             // label: `${i + 1}`,
        //             animation: google.maps.Animation.DROP,
        //             url: @json(url('/hotel-details')) + '/' + myCoords.listing_id,
        //         });




        //         allMarkers.push(r);




        //     }

        //     allMarkers.map((marker) => {
        //         marker.addListener("click", () => {
        //             // marker.addListener("click", toggleBounce);
        //             window.open(marker.url, '_blank')
        //         })
        //     });
        // }



        //         function toggleBounce() {
        //   if (r.getAnimation() !== null) {
        //     r.setAnimation(null);
        //   } else {
        //     r.setAnimation(google.maps.Animation.BOUNCE);
        //   }
        // }
    </script>

    {{-- <script

        GOlocalBaskst
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1GLowllQeWOX52ML3wtC-qYcoZ6ygOwg&libraries=places&callback=initMap">
    </script> --}}

    {{-- <script

        JB
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSuy4U3KFAhhK1gtshBsDJIiKDnK16upg&libraries=places&callback=initMap">
    </script> --}}
@endsection
