"use strict";
var routes = [
  // {
  //   path: '/',
  //   Url: 'https://viralmu.id',
  // },

  {
    path: '/ads/',
    url: './ads.html',
  },

  {
    path: '/ads-details/',
    url: './ads-details.html',
  },

  {
    path: '/add-ads/',
    url: './add-ads.html',
  },

  {
    path: '/add-ads-product-details/',
    url: './add-ads-product-details.html',
  },

  {
    path: '/my-ads/',
    url: './my-ads.html',
  },

  {
    path: '/favorites/',
    url: './favorites.html',
  },

  {
    path: '/search/',
    url: './search.html',
  },

  {
    path: '/profile/',
    url: './profile.html',
  },

  {
    path: '/categories/',
    url: './categories.html',
  },

  {
    path: '/share/:id/',
    url: '/denfest/share/{{id}}',
    on: {
      pageInit: function (e, page) {
          $('#judulnya').html('Kategori : Restoran');
          $.ajax({
            type: 'GET',
            url: '/ajax/backtobali/category?id=restoran&page=1',
            dataType: 'json',
            success: function (result) {
                console.log(result);
                $('#divfood').html('')
                $.each(result.data, function(i, item) {
                    $('#divfood').append(
                        '<div class="col-50" style="margin-bottom:15px">'+
                            '<div class="content-item radius-default bg-white">'+
                                '<a href="#" data-transition="f7-dive" onclick="openLink(\''+'backtobali.id/id/backtobali/business/'+item.url_key+'\')">'+
                                    '<div class="favorite-symbol"><ion-icon name="heart-outline"></ion-icon></div>'+
                                '</a>'+
                                '<a href="#" onclick="openLink(\''+'backtobali.id/id/backtobali/business/'+item.url_key+'\')">'+
                                    // '<img class="full-width radius-top-only" src="'+item.image[0].link+'" alt="">'+
                                    '<div style="position: relative !important;">'+
                                      '<img src="'+item.image+'" class="full-width radius-top-only" alt="" style="position: absolute !important;height:100% !important">'+
                                      '<img src="/images/400px.jpg" style="width: 100%;" >'+
                                    '</div>'+
                                    '<div class="text-desc">'+
                                        '<p class="title-item">'+item.name+'</p>'+
                                        '<p class="price-item">Rp '+rupiah(item.price)+'</p>'+
                                        '<button onclick="openLink(\''+'backtobali.id/id/backtobali/business/'+item.url_key+'\')" style="background:transparent linear-gradient(121deg, #5BAEA0 0%, #369383 100%);color:#fff;border:none;padding:5px;border-radius:5px;margin-bottom:10px">Miliki e-Voucher</button>'+
                                        '<a href="/share/'+item.id+'/" data-transition="f7-dive"><button style="background:transparent linear-gradient(121deg, #F6818F 0%, #DF5263 100%);color:#fff;border:none;padding:5px;border-radius:5px">Viralkan</button></a>'+
                                        // '<p class="location-item"><ion-icon name="map-outline"></ion-icon>'+item.address+'</p>'+
                                    '</div>'+
                                '</a>'+
                            '</div>'+
                        '</div>'
                        );
                });


            }, error: function () {
                // alert('Terjadi kesalahan, Hubungi Krisna :)');
                console.log('Error');
            }
        });
      }
    }
  },

  {
    path: '/food/',
    url: '/denfest/productbycat',
    on: {
      pageInit: function (e, page) {

          $('#judulnya').html('Kategori : Restoran');
          $.ajax({
            type: 'GET',
            url: '/ajax/backtobali/category?id=restoran&page=1',
            dataType: 'json',
            success: function (result) {
                console.log(result);
                $('#divfood').html('')
                $.each(result.data, function(i, item) {
                    $('#divfood').append(
                        '<div class="col-50" style="margin-bottom:15px">'+
                            '<div class="content-item radius-default bg-white">'+
                                '<a href="#" data-transition="f7-dive" onclick="openLink(\''+'backtobali.id/id/backtobali/business/'+item.url_key+'\')">'+
                                    '<div class="favorite-symbol"><ion-icon name="heart-outline"></ion-icon></div>'+
                                '</a>'+
                                '<a href="#" onclick="openLink(\''+'backtobali.id/id/backtobali/business/'+item.url_key+'\')">'+
                                    // '<img class="full-width radius-top-only" src="'+item.image[0].link+'" alt="">'+
                                    '<div style="position: relative !important;">'+
                                      '<img src="'+item.image+'" class="full-width radius-top-only" alt="" style="position: absolute !important;height:100% !important">'+
                                      '<img src="/images/400px.jpg" style="width: 100%;" >'+
                                    '</div>'+
                                    '<div class="text-desc">'+
                                        '<p class="title-item">'+item.name+'</p>'+
                                        '<p class="price-item">Rp '+rupiah(item.price)+'</p>'+
                                        '<button onclick="openLink(\''+'backtobali.id/id/backtobali/business/'+item.url_key+'\')" style="background:transparent linear-gradient(121deg, #5BAEA0 0%, #369383 100%);color:#fff;border:none;padding:5px;border-radius:5px;margin-bottom:10px">Miliki e-Voucher</button>'+
                                        '<a href="/share/'+item.id+'/" data-transition="f7-dive"><button style="background:transparent linear-gradient(121deg, #F6818F 0%, #DF5263 100%);color:#fff;border:none;padding:5px;border-radius:5px">Viralkan</button></a>'+
                                        // '<p class="location-item"><ion-icon name="map-outline"></ion-icon>'+item.address+'</p>'+
                                    '</div>'+
                                '</a>'+
                            '</div>'+
                        '</div>'
                        );
                });


            }, error: function () {
                // alert('Terjadi kesalahan, Hubungi Krisna :)');
                console.log('Error');
            }
        });
      }
    }
  },

  {
    path: '/hotel/',
    url: '/denfest/productbycat',
    on: {
      pageInit: function (e, page) {

          $('#judulnya').html('Kategori : Hotel');
          $.ajax({
            type: 'GET',
            url: '/ajax/backtobali/category?id=hotel&page=1',
            dataType: 'json',
            success: function (result) {
                console.log(result);
                $('#divfood').html('<div style="width:100%;text-align:center !important">Belum ada data</div>')
                $.each(result.data, function(i, item) {
                    $('#divfood').append(
                        '<div class="col-50" style="margin-bottom:15px">'+
                            '<div class="content-item radius-default bg-white">'+
                                '<a href="#" data-transition="f7-dive" onclick="openLink(\''+'backtobali.id/id/backtobali/business/'+item.url_key+'\')">'+
                                    '<div class="favorite-symbol"><ion-icon name="heart-outline"></ion-icon></div>'+
                                '</a>'+
                                '<a href="#" onclick="openLink(\''+'backtobali.id/id/backtobali/business/'+item.url_key+'\')">'+
                                    // '<img class="full-width radius-top-only" src="'+item.image[0].link+'" alt="">'+
                                    '<div style="position: relative !important;">'+
                                      '<img src="'+item.image+'" class="full-width radius-top-only" alt="" style="position: absolute !important;height:100% !important">'+
                                      '<img src="/images/400px.jpg" style="width: 100%;" >'+
                                    '</div>'+
                                    '<div class="text-desc">'+
                                        '<p class="title-item">'+item.name+'</p>'+
                                        '<p class="price-item">Rp '+rupiah(item.price)+'</p>'+
                                        '<button onclick="openLink(\''+'backtobali.id/id/backtobali/business/'+item.url_key+'\')" style="background:transparent linear-gradient(121deg, #5BAEA0 0%, #369383 100%);color:#fff;border:none;padding:5px;border-radius:5px;margin-bottom:10px">Miliki e-Voucher</button>'+
                                        '<a href="/share/'+item.id+'/" data-transition="f7-dive"><button style="background:transparent linear-gradient(121deg, #F6818F 0%, #DF5263 100%);color:#fff;border:none;padding:5px;border-radius:5px">Viralkan</button></a>'+
                                        // '<p class="location-item"><ion-icon name="map-outline"></ion-icon>'+item.address+'</p>'+
                                    '</div>'+
                                '</a>'+
                            '</div>'+
                        '</div>'
                        );
                });


            }, error: function () {
                // alert('Terjadi kesalahan, Hubungi Krisna :)');
                console.log('Error');
            }
        });
      }
    }
  },

  {
    path: '/travel/',
    url: '/denfest/productbycat',
    on: {
      pageInit: function (e, page) {

          $('#judulnya').html('Kategori : Travel');
          $.ajax({
            type: 'GET',
            url: '/ajax/backtobali/category?id=travel&page=1',
            dataType: 'json',
            success: function (result) {
                console.log(result);
                $('#divfood').html('<div style="width:100%;text-align:center !important">Belum ada data</div>')
                $.each(result.data, function(i, item) {
                    $('#divfood').append(
                        '<div class="col-50" style="margin-bottom:15px">'+
                            '<div class="content-item radius-default bg-white">'+
                                '<a href="#" data-transition="f7-dive" onclick="openLink(\''+'backtobali.id/id/backtobali/business/'+item.url_key+'\')">'+
                                    '<div class="favorite-symbol"><ion-icon name="heart-outline"></ion-icon></div>'+
                                '</a>'+
                                '<a href="#" onclick="openLink(\''+'backtobali.id/id/backtobali/business/'+item.url_key+'\')">'+
                                    // '<img class="full-width radius-top-only" src="'+item.image[0].link+'" alt="">'+
                                    '<div style="position: relative !important;">'+
                                      '<img src="'+item.image+'" class="full-width radius-top-only" alt="" style="position: absolute !important;height:100% !important">'+
                                      '<img src="/images/400px.jpg" style="width: 100%;" >'+
                                    '</div>'+
                                    '<div class="text-desc">'+
                                        '<p class="title-item">'+item.name+'</p>'+
                                        '<p class="price-item">Rp '+rupiah(item.price)+'</p>'+
                                        '<button onclick="openLink(\''+'backtobali.id/id/backtobali/business/'+item.url_key+'\')" style="background:transparent linear-gradient(121deg, #5BAEA0 0%, #369383 100%);color:#fff;border:none;padding:5px;border-radius:5px;margin-bottom:10px">Miliki e-Voucher</button>'+
                                        '<a href="/share/'+item.id+'/" data-transition="f7-dive"><button style="background:transparent linear-gradient(121deg, #F6818F 0%, #DF5263 100%);color:#fff;border:none;padding:5px;border-radius:5px">Viralkan</button></a>'+
                                        // '<p class="location-item"><ion-icon name="map-outline"></ion-icon>'+item.address+'</p>'+
                                    '</div>'+
                                '</a>'+
                            '</div>'+
                        '</div>'
                        );
                });


            }, error: function () {
                // alert('Terjadi kesalahan, Hubungi Krisna :)');
                console.log('Error');
            }
        });
      }
    }
  },

  {
    path: '/elektronik/',
    url: '/denfest/productbycat',
    on: {
      pageInit: function (e, page) {

          $('#judulnya').html('Kategori : Elektronik');
          $.ajax({
            type: 'GET',
            url: '/ajax/backtobali/category?id=4&page=1',
            dataType: 'json',
            success: function (result) {
                console.log(result);
                $('#divfood').html('')
                $.each(result.data, function(i, item) {
                    $('#divfood').append(
                        '<div class="col-50" style="margin-bottom:15px">'+
                            '<div class="content-item radius-default bg-white">'+
                                '<a href="#" data-transition="f7-dive" onclick="openLink(\''+item.link+'\')">'+
                                    '<div class="favorite-symbol"><ion-icon name="heart-outline"></ion-icon></div>'+
                                '</a>'+
                                '<a href="#" onclick="openLink(\''+item.link+'\')">'+
                                    // '<img class="full-width radius-top-only" src="'+item.image[0].link+'" alt="">'+
                                    '<div style="position: relative !important;">'+
                                      '<img src="'+item.image[0].link+'" class="full-width radius-top-only" alt="" style="position: absolute !important;height:100% !important">'+
                                      '<img src="/images/400px.jpg" style="width: 100%;" >'+
                                    '</div>'+
                                    '<div class="text-desc">'+
                                        '<p class="title-item">'+item.name+'</p>'+
                                        '<p class="price-item">Rp '+rupiah(item.price)+'</p>'+
                                        '<p class="location-item"><ion-icon name="map-outline"></ion-icon>'+item.store.address+'</p>'+
                                    '</div>'+
                                '</a>'+
                            '</div>'+
                        '</div>'
                        );
                });


            }, error: function () {
                // alert('Terjadi kesalahan, Hubungi Krisna :)');
                console.log('Error');
            }
        });
      }
    }
  },

  {
    path: '/kerajinan/',
    url: '/denfest/productbycat',
    on: {
      pageInit: function (e, page) {

          $('#judulnya').html('Kategori : Kerajinan');
          $.ajax({
            type: 'GET',
            url: '/ajax/backtobali/category?id=2&page=1',
            dataType: 'json',
            success: function (result) {
                console.log(result);
                $('#divfood').html('')
                $.each(result.data, function(i, item) {
                    $('#divfood').append(
                        '<div class="col-50" style="margin-bottom:15px">'+
                            '<div class="content-item radius-default bg-white">'+
                                '<a href="#" data-transition="f7-dive" onclick="openLink(\''+item.link+'\')">'+
                                    '<div class="favorite-symbol"><ion-icon name="heart-outline"></ion-icon></div>'+
                                '</a>'+
                                '<a href="#" onclick="openLink(\''+item.link+'\')">'+
                                    // '<img class="full-width radius-top-only" src="'+item.image[0].link+'" alt="">'+
                                    '<div style="position: relative !important;">'+
                                      '<img src="'+item.image[0].link+'" class="full-width radius-top-only" alt="" style="position: absolute !important;height:100% !important">'+
                                      '<img src="/images/400px.jpg" style="width: 100%;" >'+
                                    '</div>'+
                                    '<div class="text-desc">'+
                                        '<p class="title-item">'+item.name+'</p>'+
                                        '<p class="price-item">Rp '+rupiah(item.price)+'</p>'+
                                        '<p class="location-item"><ion-icon name="map-outline"></ion-icon>'+item.store.address+'</p>'+
                                    '</div>'+
                                '</a>'+
                            '</div>'+
                        '</div>'
                        );
                });


            }, error: function () {
                // alert('Terjadi kesalahan, Hubungi Krisna :)');
                console.log('Error');
            }
        });
      }
    }
  },

  {
    path: '/product/',
    url: '/denfest/productbycat',
    on: {
      pageInit: function (e, page) {

          $('#judulnya').html('Semua Produk');

          $.ajax({
            type: 'GET',
            url: '/ajax/backtobali/allproduct?page=1',
            dataType: 'json',
            success: function (result) {
                console.log(result);
                $('#divfood').html('')
                $.each(result.data, function(i, item) {
                    $('#divfood').append(
                        '<div class="col-50" style="margin-bottom:15px">'+
                            '<div class="content-item radius-default bg-white">'+
                                '<a href="#" data-transition="f7-dive" onclick="openLink(\''+'backtobali.id/id/backtobali/business/'+item.url_key+'\')">'+
                                    '<div class="favorite-symbol"><ion-icon name="heart-outline"></ion-icon></div>'+
                                '</a>'+
                                '<a href="#" onclick="openLink(\''+'backtobali.id/id/backtobali/business/'+item.url_key+'\')">'+
                                    // '<img class="full-width radius-top-only" src="'+item.image[0].link+'" alt="">'+
                                    '<div style="position: relative !important;">'+
                                      '<img src="'+item.image+'" class="full-width radius-top-only" alt="" style="position: absolute !important;height:100% !important">'+
                                      '<img src="/images/400px.jpg" style="width: 100%;" >'+
                                    '</div>'+
                                    '<div class="text-desc">'+
                                        '<p class="title-item">'+item.name+'</p>'+
                                        '<p class="price-item">Rp '+rupiah(item.price)+'</p>'+
                                        '<button onclick="openLink(\''+'backtobali.id/id/backtobali/business/'+item.url_key+'\')" style="background:transparent linear-gradient(121deg, #5BAEA0 0%, #369383 100%);color:#fff;border:none;padding:5px;border-radius:5px;margin-bottom:10px">Miliki e-Voucher</button>'+
                                        '<a href="/share/'+item.id+'/" data-transition="f7-dive"><button style="background:transparent linear-gradient(121deg, #F6818F 0%, #DF5263 100%);color:#fff;border:none;padding:5px;border-radius:5px">Viralkan</button></a>'+
                                        // '<p class="location-item"><ion-icon name="map-outline"></ion-icon>'+item.address+'</p>'+
                                    '</div>'+
                                '</a>'+
                            '</div>'+
                        '</div>'
                        );
                });


            }, error: function () {
                // alert('Terjadi kesalahan, Hubungi Krisna :)');
                console.log('Error');
            }
        });
      }
    }
  },

  {
    path: '/lainnya/',
    url: '/denfest/productbycat',
    on: {
      pageInit: function (e, page) {

          $('#judulnya').html('Kategori : Lainnya');
          $.ajax({
            type: 'GET',
            url: '/ajax/backtobali/category?id=5&page=1',
            dataType: 'json',
            success: function (result) {
                console.log(result);
                $('#divfood').html('')
                $.each(result.data, function(i, item) {
                    $('#divfood').append(
                        '<div class="col-50" style="margin-bottom:15px">'+
                            '<div class="content-item radius-default bg-white">'+
                                '<a href="#" data-transition="f7-dive" onclick="openLink(\''+item.link+'\')">'+
                                    '<div class="favorite-symbol"><ion-icon name="heart-outline"></ion-icon></div>'+
                                '</a>'+
                                '<a href="#" onclick="openLink(\''+item.link+'\')">'+
                                    // '<img class="full-width radius-top-only" src="'+item.image[0].link+'" alt="">'+
                                    '<div style="position: relative !important;">'+
                                      '<img src="'+item.image[0].link+'" class="full-width radius-top-only" alt="" style="position: absolute !important;height:100% !important">'+
                                      '<img src="/images/400px.jpg" style="width: 100%;" >'+
                                    '</div>'+
                                    '<div class="text-desc">'+
                                        '<p class="title-item">'+item.name+'</p>'+
                                        '<p class="price-item">Rp '+rupiah(item.price)+'</p>'+
                                        '<p class="location-item"><ion-icon name="map-outline"></ion-icon>'+item.store.address+'</p>'+
                                    '</div>'+
                                '</a>'+
                            '</div>'+
                        '</div>'
                        );
                });


            }, error: function () {
                // alert('Terjadi kesalahan, Hubungi Krisna :)');
                console.log('Error');
            }
        });
      }
    }
  },

  {
    path: '/chat/',
    url: './chat.html',
  },

  {
    path: '/notifications/',
    url: './notifications.html',
  },

  {
    path: '/settings/',
    url: './settings.html',
  },

  {
    path: '/blog/',
    url: './blog.html',
  },

  {
    path: '/blog-details/',
    url: './blog-details.html',
  },

  {
    path: '/sign-in/',
    url: './sign-in.html',
  },

  {
    path: '/sign-up/',
    url: './sign-up.html',
  },

  {
    path: '/contact/',
    url: './contact.html',
  },

  {
    path: '/pages/',
    url: './pages.html',
  },

  {
    path: '/blank-page/',
    url: './blank-page.html',
  },

];
