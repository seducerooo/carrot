<div class="third-section">
    <div class="container">
        <div class="row align-items-center justify-content-around">
            <div class="col-12 col-md-10">
                <div class="mobile-select mobile d-block d-lg-none d-md-block">
                    <select class="form-select pointer" onchange="onchangeFilterClick()" id="integration-select">
                        <option class=" active pointer" value="pills-all" selected >All Integrations</option>
                        <option class="pointer" value="pills-accounting" >Accounting</option>
                        <option class="pointer" value="pills-fulfillment">Fulfillment</option>
                        <option class="pointer" value="pills-e-commerce">E-Commerce</option>
                        <option class="pointer" value="pills-shipping">Shipping</option>
                        <option class="pointer" value="pills-payment">Payment</option>
                    </select>
                </div>
                <ul class="nav nav-pills align-items-center  nav-justified " id="pills-tab" role="tablist">
                    <li class="nav-item pointer" role="presentation">
                        <a class="nav-link active" aria-current="page" data-bs-target="#pills-all" role="tab" data-bs-toggle="pill" id="pills-all-tab" >All Integrations</a>
                    </li>
                    <li class="nav-item pointer" role="presentation">
                        <a class="nav-link " data-bs-target="#pills-accounting" role="tab" data-bs-toggle="pill" id="pills-accounting-tab" aria-controls="pills-accounting">Accounting</a>
                    </li>
                    <li class="nav-item pointer" role="presentation">
                        <a class="nav-link" data-bs-target="#pills-fulfillment" role="tab" data-bs-toggle="pill" id="pills-fulfillment-tab" aria-controls="pills-fulfillment">Fulfillment</a>
                    </li>
                    <li class="nav-item pointer" role="presentation">
                        <a class="nav-link" data-bs-target="#pills-e-commerce" role="tab" data-bs-toggle="pill" id="pills-e-commerce-tab" aria-controls="pills-e-commerce">E-Commerce</a>
                    </li>
                    <li class="nav-item pointer" role="presentation">
                        <a class="nav-link" data-bs-target="#pills-shipping" role="tab" data-bs-toggle="pill" id="pills-shipping-tab" aria-controls="pills-shipping">Shipping</a>
                    </li>
                    <li class="nav-item pointer" role="presentation">
                        <a class="nav-link" data-bs-target="#pills-payment" role="tab" data-bs-toggle="pill" id="pills-payment-tab" aria-controls="pills-payment">Payment</a>
                    </li>
                </ul>
                <div class="tab-content " id="pills-tabContent">
                    <div class="tab-pane  active" role="tabpanel" aria-labelledby="pills-all-tab pills-all-tab-mobile" id="pills-all">

                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/b2b.png') }}" alt="my-b2b-portal">
                            <h6>My B2B Portal</h6>
                            <p>Multi-channel platform for product businesses</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/stripe.png') }}" alt="stripe">
                            <h6>Stripe</h6>
                            <p>Online payment processing for internet businesses</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/paypal.png') }}" alt="paypal">
                            <h6>PayPal</h6>
                            <p>Transfer money online in seconds with PayPal </p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/vend-2.png') }}" alt="vend">
                            <h6>Vend</h6>
                            <p>Point of Sale for clever Stores</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/canada-post.png') }}" alt="canada post">
                            <h6>Canada Post</h6>
                            <p>From anywhere… to anyone</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/ebay-2.png') }}" alt="ebay">
                            <h6>Ebay</h6>
                            <p>Get the best deals when you shop the largest.</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/shopify-2.png') }}" alt="Shopify">
                            <h6>Shopify</h6>
                            <p>Capture more customers with a great brand recall.</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/magento-2.png') }}" alt="Magento">
                            <h6>Magento</h6>
                            <p>empowers thousands of retailers with ...</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/amazon-fba.png') }}" alt="Amazon fba">
                            <h6>Amazon fba</h6>
                            <p>Work hard. Have fun. Make history.</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/amazon-2.png') }}" alt="Amazon">
                            <h6>Amazon</h6>
                            <p>Work hard. Have fun. Make history.</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/xero.png') }}" alt="Xero">
                            <h6>Xero</h6>
                            <p>Xero connects you to all things business</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/qbook.png') }}" alt="Qbook">
                            <h6>Qbook</h6>
                            <p>Multi-channel platform for product businesses</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/myob.png') }}" alt="Myob">
                            <h6>Myob</h6>
                            <p>Business software and solutions</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/etsy-2.png') }}" alt="Etsy">
                            <h6>Etsy</h6>
                            <p>Focused on handmade or vintage items ...</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/avalara.png') }}" alt="Avalara">
                            <h6>Avalara</h6>
                            <p>Tax compliance done right</p>
                        </div>

                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/canpar.png') }}" alt="Canpar">
                            <h6>Canpar</h6>
                            <p>The E-Commerce Shipping Solution That Delivers! </p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/dhl.png') }}" alt="DHL">
                            <h6>DHL</h6>
                            <p>Excellence. Simply Delivered.</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/purolator.png') }}" alt="Purolator">
                            <h6>Purolator</h6>
                            <p>Delivering a better tomorrow for Canada.</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/fedex.png') }}" alt="FedEx">
                            <h6>FedEx</h6>
                            <p>The World on Time</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/fedex-fulfillment.png') }}" alt="FedEx Fulfillment">
                            <h6>FedEx Fulfillment</h6>
                            <p>What we deliver by delivering</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/shipwire.png') }}" alt="Shipwire">
                            <h6>Shipwire</h6>
                            <p>Enterprise Logistics For Everyone</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/loomis.png') }}" alt="Loomis">
                            <h6>Loomis</h6>
                            <p>Close to home or around the globe</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/ups.png') }}" alt="UPS">
                            <h6>UPS</h6>
                            <p>Customer First, People Led, Innovation Driven.</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/crossfire.png') }}" alt="Crossfire">
                            <h6>Crossfire</h6>
                            <p>Warehousing and 3PL Integration</p>
                        </div>

                    </div>
                    <div class="tab-pane  " role="tabpanel" aria-labelledby="pills-accounting-tab pills-accounting-tab-mobile" id="pills-accounting">
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/xero.png') }}" alt="Xero">
                            <h6>Xero</h6>
                            <p>Xero connects you to all things business</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/qbook.png') }}" alt="Qbook">
                            <h6>Qbook</h6>
                            <p>Multi-channel platform for product businesses</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/myob.png') }}" alt="Myob">
                            <h6>Myob</h6>
                            <p>Business software and solutions</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/avalara.png') }}" alt="Avalara">
                            <h6>Avalara</h6>
                            <p>Tax compliance done right</p>
                        </div>
                    </div>
                    <div class="tab-pane " role="tabpanel" aria-labelledby="pills-fulfillment-tab" id="pills-fulfillment">
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/shipwire.png') }}" alt="Shipwire">
                            <h6>Shipwire</h6>
                            <p>Enterprise Logistics For Everyone</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/crossfire.png') }}" alt="Crossfire">
                            <h6>Crossfire</h6>
                            <p>Warehousing and 3PL Integration</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/amazon-fba.png') }}" alt="Amazon fba">
                            <h6>Amazon fba</h6>
                            <p>Work hard. Have fun. Make history.</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/fedex-fulfillment.png') }}" alt="FedEx Fulfillment">
                            <h6>FedEx Fulfillment</h6>
                            <p>What we deliver by delivering</p>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" aria-labelledby="pills-e-commerce-tab" id="pills-e-commerce">
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/ebay-2.png') }}" alt="Ebay">
                            <h6>Ebay</h6>
                            <p>Get the best deals when you shop the largest.</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/shopify-2.png') }}" alt="Shopify">
                            <h6>Shopify</h6>
                            <p>Capture more customers with a great brand recall.</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/magento-2.png') }}" alt="Magento">
                            <h6>Magento</h6>
                            <p>empowers thousands of retailers with ...</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/etsy-2.png') }}" alt="Etsy">
                            <h6>Etsy</h6>
                            <p>Focused on handmade or vintage items ...</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/amazon-2.png') }}" alt="Amazon">
                            <h6>Amazon</h6>
                            <p>Work hard. Have fun. Make history.</p>
                        </div>
                    </div>
                    <div class="tab-pane " role="tabpanel" aria-labelledby="pills-shipping-tab" id="pills-shipping">
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/canpar.png') }}" alt="Canpar">
                            <h6>Canpar</h6>
                            <p>The E-Commerce Shipping Solution That Delivers! </p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/loomis.png') }}" alt="Loomis">
                            <h6>Loomis</h6>
                            <p>Close to home or around the globe</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/dhl.png') }}" alt="DHL">
                            <h6>DHL</h6>
                            <p>Excellence. Simply Delivered.</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/purolator.png') }}" alt="Purolator">
                            <h6>Purolator</h6>
                            <p>Delivering a better tomorrow for Canada.</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/ups.png') }}" alt="UPS">
                            <h6>UPS</h6>
                            <p>Customer First, People Led, Innovation Driven.</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{asset('/assets/img/canada-post.png')}}" alt="Canada Post">
                            <h6>Canada Post</h6>
                            <p>From anywhere… to anyone</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/fedex.png') }}" alt="FedEx">
                            <h6>FedEx</h6>
                            <p>The World on Time</p>
                        </div>
                    </div>
                    <div class="tab-pane " role="tabpanel" aria-labelledby="pills-payment-tab" id="pills-payment">
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/stripe.png') }}" alt="Stripe">
                            <h6>Stripe</h6>
                            <p>Online payment processing for internet businesses</p>
                        </div>
                        <div class="item">
                            <img class="img" src="{{ asset('/assets/img/paypal.png') }}" alt="PayPal">
                            <h6>PayPal</h6>
                            <p>Transfer money online in seconds with PayPal </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
