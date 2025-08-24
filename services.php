<?php
$pageTitle = "Pricing";
include 'includes/header.php';
?>

<section class="py-5 mt-4">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h1>Simple, Transparent Pricing</h1>
                <p class="lead">Get started with our AI-powered trading signals</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card pricing-card">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <h3>Professional Trader Plan</h3>
                        <div class="display-4">$99<span class="h5">/month</span></div>
                        <p class="mb-0">Billed annually or $119 month-to-month</p>
                    </div>
                    <div class="card-body p-5">
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><span class="text-primary me-2">✓</span> Unlimited trading signals</li>
                            <li class="mb-3"><span class="text-primary me-2">✓</span> Real-time alerts via email & SMS</li>
                            <li class="mb-3"><span class="text-primary me-2">✓</span> Sentiment analysis reports</li>
                            <li class="mb-3"><span class="text-primary me-2">✓</span> Daily market summary</li>
                            <li class="mb-3"><span class="text-primary me-2">✓</span> Weekly portfolio recommendations</li>
                            <li class="mb-3"><span class="text-primary me-2">✓</span> 24/7 customer support</li>
                            <li><span class="text-primary me-2">✓</span> Mobile app access</li>
                        </ul>
                        
                        <div class="text-center mt-4">
                            <a href="signup.php" class="btn btn-primary btn-lg">Subscribe Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-md-6">
                        <h4>Frequently Asked Questions</h4>
                        
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        How accurate are the signals?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Our AI algorithms have demonstrated 76.4% accuracy in backtesting across major indices. Actual results may vary based on market conditions.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        Can I cancel anytime?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, monthly subscriptions can be canceled at any time. Annual subscriptions can be canceled with a prorated refund.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5>Not sure yet?</h5>
                                <p>Sign up for our newsletter to receive market insights and learn more about how our AI signals work.</p>
                                
                                <form>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Your email address">
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary w-100">Subscribe to Newsletter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>