<!-- header searchbar -->
<div class="header-searchbar">
    <form class="searchbar">
        <div class="searchbar-inner">
            <div class="searchbar-input-wrap">
                <input type="search" id="keyword" name="keyword" onkeydown="cariProduk(event)"
                    placeholder="Cari makanan, kriya, fashion">
                <i class="searchbar-icon"></i>
                <span class="input-clear-button"></span>
            </div>
            <span class="searchbar-disable-button">Cancel</span>
        </div>
    </form>
</div>
<!-- end header searchbar -->

<div class="latest-ads" class="hilang" id="blockcari">
    <div class="block-title">
        <h3>Hasil Pencarian Anda
        </h3>
    </div>
    <div class="container">
        <div class="row" id="divloading">
            <div class="col-50" style="margin-bottom: 15px">
                <div class="content-item radius-default bg-white">
                    <div class="favorite-symbol active-symbol">
                        <ion-icon name="heart-outline"></ion-icon>
                    </div>
                    <div style="width: 100%;height: 150px;border-radius: 10% 10% 0% 0%" class="animate">
                    </div>
                    <div class="text-desc">
                        <div style="width: 100%;height: 10px;border-radius: 10% 10% 0% 0%" class="animate">
                        </div>
                        <div style="width: 100%;height: 20px;border-radius: 10% 10% 0% 0%;margin-top:10px"
                            class="animate">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-50" style="margin-bottom: 15px">
                <div class="content-item radius-default bg-white">
                    <div class="favorite-symbol active-symbol">
                        <ion-icon name="heart-outline"></ion-icon>
                    </div>
                    <div style="width: 100%;height: 150px;border-radius: 10% 10% 0% 0%" class="animate">
                    </div>
                    <div class="text-desc">
                        <div style="width: 100%;height: 10px;border-radius: 10% 10% 0% 0%" class="animate">
                        </div>
                        <div style="width: 100%;height: 20px;border-radius: 10% 10% 0% 0%;margin-top:10px"
                            class="animate">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row" id="divcari">


        </div>

    </div>
</div>
