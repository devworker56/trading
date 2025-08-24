<?php
$pageTitle = "How It Works";
include 'includes/header.php';
?>

<section class="py-5 mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="text-center mb-5">How Our AI Trading Signals Work</h1>
                
                <div class="mb-5">
                    <h3>Data Collection</h3>
                    <p>Our system continuously gathers data from multiple sources including:</p>
                    <ul>
                        <li>Real-time stock market prices and volumes</li>
                        <li>Financial news articles and press releases</li>
                        <li>Social media sentiment indicators</li>
                        <li>Economic indicators and reports</li>
                        <li>Historical price patterns</li>
                    </ul>
                </div>
                
                <div class="mb-5">
                    <h3>AI Analysis</h3>
                    <p>Our proprietary AI algorithms process this data through multiple analytical layers:</p>
                    
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Natural Language Processing</h5>
                            <p class="card-text">Analyzes news content and social media to gauge market sentiment and identify potentially market-moving information.</p>
                        </div>
                    </div>
                    
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Time Series Analysis</h5>
                            <p class="card-text">Examines historical patterns and identifies recurring trends that may indicate future price movements.</p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Correlation Engine</h5>
                            <p class="card-text">Identifies relationships between news events, market sentiment, and actual price movements in real-time.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h3>Signal Generation</h3>
                    <p>Based on the analysis, our system generates trading signals with confidence indicators:</p>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <span class="bg-success rounded-circle p-2 me-3"></span>
                                <div>
                                    <h6 class="mb-0">Buy Signals</h6>
                                    <small>When analysis suggests strong upward potential</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <span class="bg-danger rounded-circle p-2 me-3"></span>
                                <div>
                                    <h6 class="mb-0">Sell Signals</h6>
                                    <small>When analysis suggests downward price pressure</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <a href="signup.php" class="btn btn-primary btn-lg">Subscribe to Our Signals</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>