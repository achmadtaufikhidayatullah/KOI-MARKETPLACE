<!-- script -->
<script src="{{asset('dmarket-asset/js/framework7.bundle.min.js')}}"></script>
<script src="https://unpkg.com/ionicons%405.0.0/dist/ionicons.js"></script>
<script src="{{asset('dmarket-asset/js/routes.js')}}"></script>
<script src="{{asset('dmarket-asset/js/app.js')}}"></script>
<!-- end script -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        terlaris()
        terbaru()
        // setTest()
        if ($('#keyword').val() !== '') {
            $('#blockcari').show();
        } else {
            $('#blockcari').hide();

        }

    });

    function categoty() {
        alert('test');
        // var page =   parseInt($('#pagenya').val())+1;
        // $('#pagenya').val(page);
    }

    function cariProduk(data) {


        if (data.keyCode == 13) {

            if ($('#keyword').val() !== '') {
                $('#blockcari').show();
            } else {
                $('#blockcari').hide();
                return false;
            }

            if (data.target.value != undefined) {
                $('#divloading').show();

                $.ajax({
                    type: 'GET',
                    url: '/ajax/denfest/cariproduk?keyword=' + data.target.value,
                    dataType: 'json',
                    success: function (result) {

                        $('#divcari').html('')

                        $('#divloading').hide();

                        $.each(result.data, function (i, item) {

                            $('#divcari').append(
                                '<div class="col-50" style="margin-bottom:15px">' +
                                '<div class="content-item radius-default bg-white">' +
                                '<a href="#" data-transition="f7-dive" onclick="openLink(\'' +
                                item.link + '\')">' +
                                '<div class="favorite-symbol"><ion-icon name="heart-outline"></ion-icon></div>' +
                                '</a>' +
                                '<a href="#" onclick="openLink(\'' + item.link + '\')">' +
                                '<img class="full-width radius-top-only" src="' + item
                                .image[0].link + '" alt="">' +
                                '<div class="text-desc">' +
                                '<p class="title-item">' + item.name + '</p>' +
                                '<p class="price-item">Rp ' + rupiah(item.price) + '</p>' +
                                '<p class="location-item"><ion-icon name="map-outline"></ion-icon>' +
                                item.store.address + '</p>' +
                                '</div>' +
                                '</a>' +
                                '</div>' +
                                '</div>'
                            );
                        });


                    },
                    error: function () {
                        // alert('Terjadi kesalahan, Hubungi Krisna :)');
                        console.log('Error');
                    }
                });
            }

            data.preventDefault();
        }

        var keyword = $('#keyword').val();

        if (keyword.length > 3) {
            $('#blockcari').show();
        } else {
            $('#blockcari').hide();
            return false;
        }

        if (data.target.value != undefined) {
            $('#divloading').show();

            $.ajax({
                type: 'GET',
                url: '/ajax/denfest/cariproduk?keyword=' + data.target.value,
                dataType: 'json',
                success: function (result) {

                    $('#divcari').html('')
                    $('#divloading').hide();



                    $.each(result.data, function (i, item) {
                        $('#divcari').append(
                            '<div class="col-50" style="margin-bottom:15px">' +
                            '<div class="content-item radius-default bg-white">' +
                            '<a href="#" data-transition="f7-dive" onclick="openLink(\'' +
                            item.link + '\')">' +
                            '<div class="favorite-symbol"><ion-icon name="heart-outline"></ion-icon></div>' +
                            '</a>' +
                            '<a href="#" onclick="openLink(\'' + item.link + '\')">' +
                            '<img class="full-width radius-top-only" src="' + item.image[0]
                            .link + '" alt="">' +
                            '<div class="text-desc">' +
                            '<p class="title-item">' + item.name + '</p>' +
                            '<p class="price-item">Rp ' + rupiah(item.price) + '</p>' +
                            '<p class="location-item"><ion-icon name="map-outline"></ion-icon>' +
                            item.store.address + '</p>' +
                            '</div>' +
                            '</a>' +
                            '</div>' +
                            '</div>'
                        );
                    });


                },
                error: function () {
                    // alert('Terjadi kesalahan, Hubungi Krisna :)');
                    console.log('Error');
                }
            });
        }



        // if($('#keyword').val())



    }

    function setTest() {
        $('#test123').val('121212');
    }

    function categoryNext() {
        //  alert('ok');
        var page = parseInt($('#category-page').val()) + 1;
        $('#category-page').val(page);

        $.ajax({
            type: 'GET',
            url: '/ajax/denfest/category?id=6&page=' + page,
            dataType: 'json',
            success: function (result) {
                console.log(result);
                // $('#divfood').html('')
                $.each(result.data, function (i, item) {
                    $('#divfood').append(
                        '<div class="col-50" style="margin-bottom:15px">' +
                        '<div class="content-item radius-default bg-white">' +
                        '<a href="#" data-transition="f7-dive" onclick="openLink(\'' + item
                        .link + '\')">' +
                        '<div class="favorite-symbol"><ion-icon name="heart-outline"></ion-icon></div>' +
                        '</a>' +
                        '<a href="#" onclick="openLink(\'' + item.link + '\')">' +
                        // '<img class="full-width radius-top-only" src="'+item.image[0].link+'" alt="">'+
                        '<div style="position: relative !important;">' +
                        '<img src="' + item.image[0].link +
                        '" class="full-width radius-top-only" alt="" style="position: absolute !important;height:100% !important">' +
                        '<img src="/images/400px.jpg" style="width: 100%;" >' +
                        '</div>' +
                        '<div class="text-desc">' +
                        '<p class="title-item">' + item.name + '</p>' +
                        '<p class="price-item">Rp ' + rupiah(item.price) + '</p>' +
                        '<p class="location-item"><ion-icon name="map-outline"></ion-icon>' +
                        item.store.address + '</p>' +
                        '</div>' +
                        '</a>' +
                        '</div>' +
                        '</div>'
                    );
                });


            },
            error: function () {
                // alert('Terjadi kesalahan, Hubungi Krisna :)');
                console.log('Error');
            }
        });
    }

    function openLink(url) {
        window.open('https://' + url)
    }

    function openLink2(url) {
        window.open(url)
    }

    function terlaris() {
        $.ajax({
            type: 'GET', //THIS NEEDS TOBE GET
            // url: '/ajax/denfest/terlaris',
            url: "{{ route('resellr.terlaris') }}",
            dataType: 'json',
            success: function (result) {
                console.log(result);
                $('#divterlaris').html('')

                $.each(result.data, function (i, item) {
                    $('#divterlaris').append(
                        '<div class="swiper-slide" style="margin-right:15px">' +
                        '<a href="#" data-transition="f7-dive" onclick="openLink(\'' + item
                        .link + '\')">' +
                        '<div class="content-item radius-default bg-white">' +
                        '<div class="featured-symbol"><ion-icon name="flash-outline"></ion-icon></div>' +
                        // '<img class="full-width radius-top-only" src="'+item.image[0].link+'" alt="">'+
                        '<div style="position: relative !important;min-height: 145px !important">' +
                        '<img src="' + item.image[0].link +
                        '" class="full-width radius-top-only" alt="" style="position: absolute !important;height:100% !important">' +
                        '<img src="{{asset("images/400px.jpg")}}" style="width: 100%;" >' +
                        '</div>' +
                        '<div class="text-desc">' +
                        '<p class="title-item">' + item.name + '</p>' +
                        '<p class="price-item">Rp ' + rupiah(item.price) + '</p>' +
                        '<p class="location-item"><ion-icon name="map-outline"></ion-icon>' +
                        item.store.address + '</p>' +
                        '</div>' +
                        '</div>' +
                        '</a>' +
                        '</div>'
                    );
                });


            },
            error: function () {
                // alert('Terjadi kesalahan, Hubungi Krisna :)');
                console.log('Error');
            }
        });
    }

    function terbaru() {
        var page = parseInt($('#pagenya').val()) + 1;
        $('#pagenya').val(page);

        $.ajax({
            type: 'GET',
            // url: '/ajax/denfest/terbaru?page=' + page,
            url: "{{ route('resellr.terbaru') }}",
            dataType: 'json',
            success: function (result) {
                console.log(result);
                // if(page == 1) {
                $('#divterbaru').html('')

                // }

                $.each(result.data, function (i, item) {
                    $('#divterbaru').append(
                        '<div class="col-50" style="margin-bottom:15px">' +
                        '<div class="content-item radius-default bg-white">' +
                        '<a href="#" data-transition="f7-dive" onclick="openLink(\'' + item
                        .link + '\')">' +
                        '<div class="favorite-symbol"><ion-icon name="heart-outline"></ion-icon></div>' +
                        '</a>' +
                        '<a href="#" onclick="openLink(\'' + item.link + '\')">' +
                        // '<img class="full-width radius-top-only" src="'+item.image[0].link+'" alt="">'+
                        '<div style="position: relative !important;min-height: 145px !important;">' +
                        '<img src="' + item.image[0].link +
                        '" class="full-width radius-top-only" alt="" style="position: absolute !important;height:100% !important">' +
                        '<img src="{{asset("images/400px.jpg")}}" style="width: 100%;" >' +
                        '</div>' +
                        '<div class="text-desc">' +
                        '<p class="title-item">' + item.name + '</p>' +
                        '<p class="price-item">Rp ' + rupiah(item.price) + '</p>' +
                        '<p class="location-item"><ion-icon name="map-outline"></ion-icon>' +
                        item.store.address + '</p>' +
                        '</div>' +
                        '</a>' +
                        '</div>' +
                        '</div>'
                    );
                });


            },
            error: function () {
                // alert('Terjadi kesalahan, Hubungi Krisna :)');
                console.log('Error');
            }
        });
    }

    function rupiah(bilangan) {
        var number_string = bilangan.toString(),
            sisa = number_string.length % 3,
            rupiah = number_string.substr(0, sisa),
            ribuan = number_string.substr(sisa).match(/\d{3}/g);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        return rupiah;
    }

</script>
