
<div class="page">
	<div class="navbar navbar-transparent">
		<div class="navbar-bg"></div>
		<div class="navbar-inner sliding">
			<div class="left">
				<a class="link back">
					<i class="icon icon-back"></i>
				</a>
			</div>
			<div class="titles" id="judulnya">Kategori : Makanan</div>
			{{-- <div class="right">
				<a href="#" class="panel-open link" data-panel=".sidebar-right">
					<ion-icon name="filter-outline"></ion-icon><span></span>
				</a>
			</div> --}}
		</div>
	</div>
	<div class="page-content">

		<!-- sidebar / panel for filter -->
		<div class="panel-backdrop"></div>
		<div class="panel panel-right sidebar-right panel-cover panel-init">
			<div class="block-title title-small">
				<h3>Sort by</h3>
			</div>
			<form class="list">
				<ul>
					<li class="item-content item-input">
						<div class="item-inner">
							<div class="item-input-wrap input-dropdown-wrap">
								<select>
									<option value="Relevance">Relevance</option>
									<option value="Date">Date</option>
									<option value="Price">Price: Low to high</option>
									<option value="Price">Price: High to low</option>
								</select>
							</div>
						</div>
					</li>
				</ul>
			</form>

			<div class="block-title title-small">
				<h3>Ratings</h3>
			</div>
			<div class="rating-filter">
				<div class="container">
					<ul>
						<li class="rating-active"><a href=""><ion-icon name="star-sharp"></ion-icon>5</a></li>
						<li><a href=""><ion-icon name="star-sharp"></ion-icon>4</a></li>
						<li><a href=""><ion-icon name="star-sharp"></ion-icon>3</a></li>
						<li><a href=""><ion-icon name="star-sharp"></ion-icon>2</a></li>
						<li><a href=""><ion-icon name="star-sharp"></ion-icon>1</a></li>
					</ul>
				</div>
			</div>

			<div class="block-title title-small">
				<h3>Location</h3>
			</div>
			<form class="list">
				<ul>
					<li class="item-content item-input">
						<div class="item-inner">
							<div class="item-input-wrap">
								<input type="text" placeholder="Current location">
								<span class="input-clear-button"></span>
							</div>
						</div>
					</li>
				</ul>
			</form>

			<div class="block-title title-small">
				<h3>Price Range</h3>
			</div>
			<div class="container">
				<form class="list">
					<ul>
						<li>
							<div class="row">
								<div class="col-50">
									<div class="item-content item-input">
										<div class="item-inner">
											<div class="item-input-wrap">
												<input type="text" placeholder="Minimum">
												<span class="input-clear-button"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-50">
									<div class="item-content item-input">
										<div class="item-inner">
											<div class="item-input-wrap">
												<input type="text" placeholder="Maximum">
												<span class="input-clear-button"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</form>
			</div>

			<!-- separator -->
			<div class="separator-large"></div>
			<!-- end separator -->

			<div class="fitler-execution">
				<div class="container">
					<button class="button secondary-button panel-close">Cancel</button>
					<!-- separator -->
					<div class="separator-medium"></div>
					<!-- end separator -->
					<button class="button">Apply Filters</button>
				</div>
			</div>

			<!-- separator -->
			<div class="separator-large"></div>
			<!-- end separator -->

		</div>
		<!-- end sidebar / panel for filter -->

		<!-- separator -->
		<div class="separator-extra-small"></div>
		<!-- end separator -->

		<!-- header searchbar -->
		{{-- <div class="header-searchbar">
			<form class="searchbar">
				<div class="searchbar-inner">
					<div class="searchbar-input-wrap">
						<input type="search" placeholder="Find Laptop, Handphone, and other">
						<i class="searchbar-icon"></i>
						<span class="input-clear-button"></span>
					</div>
					<span class="searchbar-disable-button">Cancel</span>
				</div>
			</form>
		</div> --}}
		<!-- end header searchbar -->

		<!-- separator -->
		<div class="separator-small"></div>
		<!-- end separator -->

		<!-- all categories -->
		<div class="categories">
			<div class="container">
				<div class="row" id="divfood">
					<div class="col-50" style="margin-bottom: 15px">
						<div class="content-item radius-default bg-white">
							<div class="favorite-symbol active-symbol"><ion-icon name="heart-outline"></ion-icon></div>
							<div style="width: 100%;height: 150px;border-radius: 10% 10% 0% 0%" class="animate">
							</div>
							<div class="text-desc">
								<div style="width: 100%;height: 10px;border-radius: 10% 10% 0% 0%" class="animate">
								</div>
								<div style="width: 100%;height: 20px;border-radius: 10% 10% 0% 0%;margin-top:10px" class="animate">
								</div>
							</div>
						</div>
					</div> 
					<div class="col-50" style="margin-bottom: 15px">
						<div class="content-item radius-default bg-white">
							<div class="favorite-symbol active-symbol"><ion-icon name="heart-outline"></ion-icon></div>
							<div style="width: 100%;height: 150px;border-radius: 10% 10% 0% 0%" class="animate">
							</div>
							<div class="text-desc">
								<div style="width: 100%;height: 10px;border-radius: 10% 10% 0% 0%" class="animate">
								</div>
								<div style="width: 100%;height: 20px;border-radius: 10% 10% 0% 0%;margin-top:10px" class="animate">
								</div>
							</div>
						</div>
					</div> 
				</div>
				
			</div>
		</div>
		<!-- end all categories -->

		<!-- separator -->
		<div class="separator-large"></div>
		<input type="hidden" id="category-page" value="1">
		<!-- end separator -->
		<button class="button" onclick="categoryNext()" style="width: 50%;margin: auto !important">Lihat lainnya..</button>


	</div>
</div>

{{-- <script>
	function test() {
		alert('OK');
	}
</script> --}}
