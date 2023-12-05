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
    path: '/organic/',
    url: '/productbycat',
    on: {
      pageInit: function (e, page) {
        
          $('#judulnya').html('Kategori : Organic');
          $.ajax({
            type: 'GET',
            url: '/ajax/resellr/category?id=12&page=1',
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
                                    '<div style="position: relative !important;" id="image-wrapper">'+
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
    path: '/green/',
    url: '/productbycat',
    on: {
      pageInit: function (e, page) {
        
          $('#judulnya').html('Kategori : Green');
          $.ajax({
            type: 'GET',
            url: '/ajax/resellr/category?id=11&page=1',
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
                                    '<div style="position: relative !important;" id="image-wrapper">'+
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
    path: '/healty/',
    url: '/productbycat',
    on: {
      pageInit: function (e, page) {
        
          $('#judulnya').html('Kategori : Healty');
          $.ajax({
            type: 'GET',
            url: '/ajax/resellr/category?id=13&page=1',
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
                                    '<div style="position: relative !important;" id="image-wrapper">'+
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
    path: '/elektronik/',
    url: '/productbycat',
    on: {
      pageInit: function (e, page) {
        
          $('#judulnya').html('Kategori : Elektronik');
          $.ajax({
            type: 'GET',
            url: '/ajax/resellr/category?id=4&page=1',
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
    url: '/productbycat',
    on: {
      pageInit: function (e, page) {
        
          $('#judulnya').html('Kategori : Kerajinan');
          $.ajax({
            type: 'GET',
            url: '/ajax/resellr/category?id=2&page=1',
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
    url: '/productbycat',
    on: {
      pageInit: function (e, page) {
        
          $('#judulnya').html('Semua Produk');

          $.ajax({
            type: 'GET',
            url: '/ajax/resellr/allproduct?page=1',
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
                                    '<div style="position: relative !important;" id="image-wrapper">'+
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
    path: '/lainnya/',
    url: '/productbycat',
    on: {
      pageInit: function (e, page) {
        
          $('#judulnya').html('Kategori : Lainnya');
          $.ajax({
            type: 'GET',
            url: '/ajax/resellr/category?id=5&page=1',
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