<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="form.css">
</head>
<body>
    
    <div class="pricing-table-container">

        <div class="pricing-header">
            <h2 style="color: white!important;">Please choose a plan below</h2>
            <div class="plans-switch-container">
                <input type="checkbox" class="plans-switch">
                <span class="monthly">Monthly</span>
                <span class="yearly">Yearly</span>
            </div>
        </div>


        <div class="pricing-table">
            <div class="table">
                <div class="content">
                    <h3>Basic</h3>

                    <div class="price-container">
                        <span class="price basic-price">Free</span>
                        <span class="plan-duration">/ month</span>
                    </div>

                    <div class="description">
                        This plan is the best for individuals who are getting started
                    </div>

                    <ul class="features">
                        <li>SD Streaming</li>
                        <li>No downloads</li>
                        <li>Restricted access</li>
                    </ul>

                    <a href="#" class="btn">Choose Plan</a>
                </div>

                <img class="table-bg" src="images/bg-shape1.svg" alt="">
            </div>

            <!-- End of basic plan -->


            <div class="table best-value">

                <span class="value">Best Value</span>

                <div class="content">
                    <h3>Standard </h3>

                    <div class="price-container">
                        <span class="price professional-price">$99</span>
                        <span class="plan-duration">/ month</span>
                    </div>

                    <div class="description">
                        This plan is for businesses that are getting started
                    </div>

                    <ul class="features">
                        <li>Unlimited Files</li>
                        <li>25 GB Storage</li>
                        <li>Phone Support</li>
                    </ul>

                    <a href="#" class="btn">Choose Plan</a>
                </div>

                <img class="table-bg" src="images/bg-shape2.svg" alt="">
            </div>

            <!-- End of Professional Plan -->


            <div class="table">
                <div class="content">
                    <h3>Business</h3>

                    <div class="price-container">
                        <span class="price business-price">$149</span>
                        <span class="plan-duration">/ month</span>
                    </div>

                    <div class="description">
                        This plan is the best for large businesses
                    </div>

                    <ul class="features">
                        <li>Unlimited Files</li>
                        <li>Unlimited Storage</li>
                        <li>Phone Support</li>
                    </ul>

                    <a href="#" class="btn">Choose Plan</a>
                </div>

                <img class="table-bg" src="images/bg-shape1.svg" alt="">
            </div>
        </div>
    </div>


    <script src="form.js"></script>
</body>
</html>