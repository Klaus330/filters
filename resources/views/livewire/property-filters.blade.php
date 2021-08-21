<form method="get" action="https://stage.home.ca/listing" id="filter-top-search" class="wrapper">
    <input type="hidden" name="from_search" value="1">
    <input type="hidden" name="area" value="" id="area">
    <input type="hidden" name="search_order" value="1" id="search_order">
    <input type="hidden" name="sale_rent" value="" id="sale_rent">
    <input type="hidden" name="bedrooms" value="" id="bedrooms">

    <div class="filter">
        <div class="filter__inner">
            <div class="filter__holder">
                <ul>
                    <li class="filter__select">
                        <h3 class="filter__title hidden-md hidden-lg">Status</h3>
                        <a href="#" class="js-dropdown-toggle hidden-sm hidden-xs">
                            <span id="js-sale-rent">{{ $this->filters['purpose'] ? 'For Rent' : 'For Sale' }}</span>
                        </a>
                        <div class="filter__dropdown js-dropdown">
                            <div class="dropdown">
                                <div class="dropdown__list">
                                    <ul class="list-radios js-sale-rent-list">
                                        <li>
                                            <div class="radio radio--red js-search-filter">
                                                <input data-value="1" value="0" type="radio" name="status" id="js-sale" checked=&quot;checked&quot;  wire:model="filters.purpose">
                                                <label for="js-sale">For Sale</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio radio--red js-search-filter">
                                                <input data-value="64" value="1" type="radio" name="status" id="js-rent"  wire:model="filters.purpose">
                                                <label for="js-rent">For Rent</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="filter__select">
                        <h3 class="filter__title hidden-md hidden-lg">Price</h3>
                        <a href="#" class="js-dropdown-toggle hidden-sm hidden-xs" id="filter-prices">
                            <span>Any Price</span>
                        </a>
                        <div class="filter__dropdown js-dropdown">
                            <div class="dropdown">
                                <div class="prices">
                                    <div class="price">
                                        <input type="tel" class="price__field js-price js-search-min-price" maxlength="12" size="10" placeholder="Min" name="price_from" id="price-min" pattern="[0-9]*" autocomplete="off" wire:model="filters.price">
                                        <ul class="price__list js-price-list filter-price-min">
                                            <li><span class="js-search-filter" data-price="">0</span></li>
                                            <li><span class="js-search-filter" data-price="200000"   wire:click="updatePrice(200000)">$200,000+</span></li>
                                            <li><span class="js-search-filter" data-price="300000" wire:click="updatePrice(300000)">$300,000+</span></li>
                                            <li><span class="js-search-filter" data-price="400000" wire:click="updatePrice(400000)">$400,000+</span></li>
                                            <li><span class="js-search-filter" data-price="600000" wire:click="updatePrice(600000)">$600,000+</span></li>
                                            <li><span class="js-search-filter" data-price="800000" wire:click="updatePrice(800000)">$800,000+</span></li>
                                            <li><span class="js-search-filter" data-price="1000000" wire:click="updatePrice(1000000)">$1,000,000+</span></li>
                                            <li><span class="js-search-filter" data-price="1500000" wire:click="updatePrice(1500000)">$1,500,000+</span></li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <input type="tel" class="price__field js-price js-search-max-price" maxlength="12" size="10" placeholder="Max" name="price_to" id="price-max" pattern="[0-9]*" autocomplete="off" value="">
                                        <ul class="price__list js-price-list filter-price-max">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="filter__select">
                        <h3 class="filter__title hidden-md hidden-lg">Bedrooms</h3>
                        <a href="#" class="js-dropdown-toggle hidden-sm hidden-xs js-bedrooms">
                            <span> {{ $this->filters['beds'] ?? 0 }}+ Bed</span>
                        </a>
                        <div class="filter__dropdown js-dropdown">
                            <div class="dropdown dropdown--small">
                                <div class="dropdown__list">
                                    <ul class="list-radios filter-bed-values js-filter-bed-values">
                                        <li wire:click="updateBeds(0)">
                                            <div class="radio radio--red">
                                                <a href="#" data-value="0" class="btn js-search-filter active">
                                                    0+
                                                </a>
                                            </div>
                                        </li>
                                        <li wire:click="updateBeds(1)"> 
                                            <div class="radio radio--red">
                                                <a href="#" data-value="1" class="btn js-search-filter ">
                                                    1+
                                                </a>
                                            </div>
                                        </li>
                                        <li wire:click="updateBeds(2)">
                                            <div class="radio radio--red">
                                                <a href="#" data-value="2" class="btn js-search-filter ">
                                                    2+
                                                </a>
                                            </div>
                                        </li>
                                        <li wire:click="updateBeds(3)">
                                            <div class="radio radio--red">
                                                <a href="#" data-value="3" class="btn js-search-filter ">
                                                    3+
                                                </a>
                                            </div>
                                        </li>
                                        <li wire:click="updateBeds(4)">
                                            <div class="radio radio--red">
                                                <a href="#" data-value="4" class="btn js-search-filter ">
                                                    4+
                                                </a>
                                            </div>
                                        </li>
                                        <li wire:click="updateBeds(5)">
                                            <div class="radio radio--red">
                                                <a href="#" data-value="5" class="btn js-search-filter ">
                                                    5+
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="filter__select">
                        <h3 class="filter__title hidden-md hidden-lg">Home type</h3>
                        <a href="#" class="js-dropdown-toggle hidden-sm hidden-xs">
                            <span class="js-filter-type js-search-filter">Home Type </span>
                        </a>
                        <div class="filter__dropdown js-dropdown">
                            <div class="dropdown">
                                <div class="dropdown__list">
                                    <ul class="list-radios">
                                        <li>
                                            <div class="radio radio--dot">
                                                <input type="checkbox" data-type="House" class="js-search-filter js-property-type" name="house_type[]" value="1" id="js-property-type-House" wire:change="updateType(1)">
                                                <label for="js-property-type-House">House</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio radio--dot">
                                                <input type="checkbox" data-type="Townhouse" class="js-search-filter js-property-type" name="house_type[]" value="2" id="js-property-type-Townhouse" wire:change="updateType(2)">
                                                <label for="js-property-type-Townhouse">Townhouse</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio radio--dot">
                                                <input type="checkbox" data-type="Condo" class="js-search-filter js-property-type" name="house_type[]" value="8" id="js-property-type-Condo" wire:change="updateType(8)">
                                                <label for="js-property-type-Condo">Condo</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="filter__select">
                        <a href="#" class="js-dropdown-toggle hidden-sm hidden-xs">
                            <span>More</span>
                        </a>
                        <div class="filter__dropdown js-dropdown">
                            <div class="dropdown dropdown--alt">
                                <div class="dropdown__groups">
                                    <div class="dropdown__group">
                                        <h3 class="filter__title hidden-md hidden-lg">Bathrooms</h3>
                                        <label class="dropdown__title hidden-sm hidden-xs">Bathrooms</label>
                                        <div class="dropdown__controls">
                                            <ul class="list-radios">
                                                <li>
                                                    <div class="radio">
                                                        <input type="radio" class="js-search-filter js-filter-bathroom" name="bathrooms" value="0" id="bathroom-0" wire:change="updateBaths(0)">
                                                        <label for="bathroom-0">0+</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio">
                                                        <input type="radio" class="js-search-filter js-filter-bathroom" name="bathrooms" value="1" id="bathroom-1" wire:change="updateBaths(1)">
                                                        <label for="bathroom-1">1+</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio">
                                                        <input type="radio" class="js-search-filter js-filter-bathroom" name="bathrooms" value="2" id="bathroom-2" wire:change="updateBaths(2)">
                                                        <label for="bathroom-2">2+</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio">
                                                        <input type="radio" class="js-search-filter js-filter-bathroom" name="bathrooms" value="3" id="bathroom-3" wire:change="updateBaths(3)">
                                                        <label for="bathroom-3">3+</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio">
                                                        <input type="radio" class="js-search-filter js-filter-bathroom" name="bathrooms" value="4" id="bathroom-4" wire:change="updateBaths(4)">
                                                        <label for="bathroom-4">4+</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dropdown__group">
                                        <h3 class="filter__title hidden-md hidden-lg">Square Feet</h3>
                                        <label class="dropdown__title hidden-sm hidden-xs" for="field-feet">Square Feet</label>
                                        <div class="dropdown__controls">
                                            <select name="size_from" id="field-feet" class="select js-search-filter">
                                                <option value="" selected>Any</option>
                                                <option value="750">
                                                    750 sq ft
                                                </option>
                                                <option value="1000">
                                                    1000 sq ft
                                                </option>
                                                <option value="1250">
                                                    1250 sq ft
                                                </option>
                                                <option value="1500">
                                                    1500 sq ft
                                                </option>
                                                <option value="1750">
                                                    1750 sq ft
                                                </option>
                                                <option value="2000">
                                                    2000 sq ft
                                                </option>
                                                <option value="2250">
                                                    2250 sq ft
                                                </option>
                                                <option value="2500">
                                                    2500 sq ft
                                                </option>
                                                <option value="2750">
                                                    2750 sq ft
                                                </option>
                                                <option value="3000">
                                                    3000 sq ft
                                                </option>
                                                <option value="3250">
                                                    3250 sq ft
                                                </option>
                                                <option value="3500">
                                                    3500 sq ft
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="dropdown__group">
                                        <h3 class="filter__title hidden-md hidden-lg">Days Listed</h3>
                                        <label class="dropdown__title hidden-sm hidden-xs" for="field-days">Days Listed</label>
                                        <div class="dropdown__controls">
                                            <select name="days" id="field-days" class="select js-search-filter">
                                                <option value="" selected>Any</option>
                                                <option value="1">
                                                    1 days
                                                </option>
                                                <option value="7">
                                                    7 days
                                                </option>
                                                <option value="14">
                                                    14 days
                                                </option>
                                                <option value="30">
                                                    30 days
                                                </option>
                                                <option value="90">
                                                    90 days
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="dropdown__group">
                                        <h3 class="filter__title hidden-md hidden-lg">Keywords</h3>
                                        <label class="dropdown__title hidden-sm hidden-xs" for="field-keywords">Keywords</label>
                                        <div class="dropdown__controls">
                                            <textarea class="textarea js-search-filter" name="keywords" id="field-keywords" cols="30" rows="10" placeholder="Ex: pool, land"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="drawer__actions hidden-sm hidden-xs">
                                    <button class="btn btn--red btn--medium btn--block js-filter-results-btn">View Results</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <button class="btn btn--red btn--small js-modal-open hidden-sm hidden-xs" data-popup-trigger="save-search">Save Search</button>
        </div>
        <div class="filter__aside hidden-xs hidden-sm">
            <button class="btn-sort js-modal-open" data-popup-trigger="sort">
                <i class="ico-sort">
                    <svg>
                        <use xlink:href="#ico-sort" />
                    </svg>
                </i>
                <span>Sort: Recommended</span>
            </button>
            <a href="https://stage.home.ca/map-search" class="btn-border btn-border--filter">
                <i class="ico-pin-large">
                    <svg>
                        <use xlink:href="#ico-pin-filled" />
                    </svg>
                </i>
                <span>Map Search</span>
            </a>
        </div>
    </div>
</form>