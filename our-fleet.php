<?php $title = "Affordable Car Rental Dubai, UAE | Best Deals on Rental Cars";
include 'include/header.php' ?>
<section class="page_banner our_fleet">
    <div class="container">
        <h1>Our Fleet</h1>
    </div>
</section>

<section class="our_fleet_sec">
    <div class="container">
        <h2 class="secHeading">
            Rent a Car Range On Drift Car Rental
        </h2>
        <div class="flex_filter">
            <select name="price_filter" id="price_filter" class="form-select">
                <option value="">--Sort By Price--</option>
                <option value="high to low daily">Daily (high to low)</option>
                <option value="low to high daily">Daily (low to high)</option>
                <option value="high to low weekly">Weekly (high to low)</option>
                <option value="low to high weekly">Weekly (low to high)</option>
                <option value="high to low monthly">Monthly (high to low)</option>
                <option value="low to high monthly">Monthly (low to high)</option>
            </select>
            <button class="btn themeBtn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Filters</button>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Filters</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="car_type filter_body">
                    <h4>
                        Vehicle Type
                    </h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="suv" id="suv">
                        <label class="form-check-label" for="suv">
                            Suv
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="sedan" id="sedan">
                        <label class="form-check-label" for="sedan">
                            Sedan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="compact" id="compact">
                        <label class="form-check-label" for="compact">
                            Compact
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="crossover" id="crossover">
                        <label class="form-check-label" for="crossover">
                            Crossover
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="luxury-car" id="luxury-car">
                        <label class="form-check-label" for="luxury-car">
                            Luxury Car
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="sports" id="sports">
                        <label class="form-check-label" for="sports">
                            Sports
                        </label>
                    </div>
                    
                </div>
                <div class="filter_body">
                    <h4>
                        Seating Capacity
                    </h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="two-seater" id="two-seater">
                        <label class="form-check-label" for="two-seater">
                            2 Seater
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="four-seater" id="four-seater">
                        <label class="form-check-label" for="four-seater">
                            4 Seater
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="seven-seater" id="seven-seater">
                        <label class="form-check-label" for="seven-seater">
                            7 Seater
                        </label>
                    </div>
                </div>
                <div class="filter_body">
                    <h4>
                        Seating Capacity
                    </h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="in-stock" id="in-stock">
                        <label class="form-check-label" for="in-stock">
                            In Stock
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="out-of-stock" id="out-of-stock">
                        <label class="form-check-label" for="out-of-stock">
                            Out of Stock
                        </label>
                    </div>
                </div>
                <!-- <div class="filter_body">
                    <h4>
                        Select a Date
                    </h4>
                </div> -->
                <div class="filter_body">
                    <h4>
                        Price Range
                    </h4>
                    <div class="price_range-flex">
                        <div class="price_range">
                            <label for="max_day_budget">Max Day Budget</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" aria-label="Max Day Budget" name="max_day_budget" aria-describedby="max_day_budget">
                                <span class="input-group-text" id="max_day_budget">AED</span>
                            </div>
                        </div>
                        <div class="price_range">
                            <label for="max_monthly_budget">Max Monthly Budget</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" aria-label="Max Monthly Budget" name="max_monthly_budget" aria-describedby="max_monthly_budget">
                                <span class="input-group-text" id="max_monthly_budget">AED</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="filter_footer">
                    <button type="submit" class="btn themeBtn">Show Results</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php' ?>