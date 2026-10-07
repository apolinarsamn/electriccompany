<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<section class="hero-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4 fw-bold mb-4">Our Electrical Services</h1>
                <p class="lead">
                    Comprehensive electrical solutions for residential, commercial, and industrial needs.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container text-center">
        <h2 class="display-5 fw-bold text-primary-custom mb-3">Complete Electrical Solutions</h2>
        <p class="lead text-muted">
            From simple repairs to complex installations, we provide safe, reliable,
            and efficient electrical services tailored to your specific needs.
        </p>
    </div>
</section>

<?php
$residentialServices = [
    ['fas fa-plug', 'Electrical Wiring', 'Complete home wiring services including new construction, rewiring, and electrical system upgrades to meet modern safety standards.', ['New home wiring', 'Rewiring old homes', 'Code compliance updates', 'Safety inspections']],
    ['fas fa-th-large', 'Panel Upgrades', 'Electrical panel upgrades and replacements to handle increased power demands and improve home safety and efficiency.', ['Panel replacements', 'Circuit breaker upgrades', 'Service capacity increases', 'GFCI installations']],
    ['fas fa-lightbulb', 'Lighting Solutions', 'Indoor and outdoor lighting installations, including LED upgrades, landscape lighting, and smart lighting systems.', ['LED lighting upgrades', 'Landscape lighting', 'Smart lighting systems', 'Security lighting']],
    ['fas fa-mobile-alt', 'Smart Home Automation', 'Transform your home with smart electrical systems, automated controls, and IoT device integration for modern living.', ['Smart switches & outlets', 'Home automation systems', 'Voice control integration', 'Energy monitoring']],
    ['fas fa-car', 'EV Charging Stations', 'Electric vehicle charging station installation for convenient and efficient home charging of your electric vehicle.', ['Level 2 charger installation', 'Electrical capacity assessment', 'Permit handling', 'Smart charging features']],
    ['fas fa-tools', 'Electrical Repairs', 'Quick and reliable electrical repair services for outlets, switches, fixtures, and other electrical components in your home.', ['Outlet & switch repairs', 'Fixture installations', 'Troubleshooting', 'Emergency repairs']]
];

$commercialServices = [
    ['fas fa-industry', 'Commercial Wiring', 'Complete electrical installations for new commercial buildings, tenant improvements, and electrical system expansions.', ['New construction wiring', 'Tenant improvements', 'Office electrical systems', 'Retail installations']],
    ['fas fa-bolt', 'Power Distribution', 'High-voltage power distribution systems, transformers, and electrical infrastructure for commercial and industrial facilities.', ['Power distribution panels', 'Transformer installations', 'Motor control centers', 'Emergency power systems']],
    ['fas fa-video', 'Security & Data Systems', 'Installation of security systems, surveillance cameras, access control, and structured cabling for data networks.', ['Security camera systems', 'Access control systems', 'Network cabling', 'Fire alarm systems']],
    ['fas fa-warehouse', 'Industrial Electrical', 'Specialized electrical services for manufacturing facilities, warehouses, and industrial operations.', ['Machine wiring', 'Control systems', 'High-bay lighting', 'Power factor correction']],
    ['fas fa-wrench', 'Maintenance Services', 'Preventive maintenance programs and ongoing electrical system support to ensure reliable operation and minimize downtime.', ['Preventive maintenance', 'System inspections', 'Thermal imaging', 'Equipment testing']],
    ['fas fa-chart-line', 'Energy Efficiency', 'Energy audits, efficiency upgrades, and power quality improvements to reduce operating costs and improve performance.', ['Energy audits', 'LED retrofits', 'Power quality analysis', 'Demand management']]
];
?>

<!-- Residential Services -->
<section class="section-padding bg-light-custom">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-primary-custom mb-3">
                    <i class="fas fa-home text-secondary-custom me-3"></i>Residential Services
                </h2>
                <p class="lead text-muted">
                    Professional electrical services for your home, ensuring safety,
                    efficiency, and comfort for your family.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <?php foreach ($residentialServices as $service): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 p-4 feature-item">
                        <div class="feature-icon">
                            <i class="<?= esc($service[0]) ?>"></i>
                        </div>

                        <h4 class="text-primary-custom mb-3"><?= esc($service[1]) ?></h4>
                        <p class="text-muted mb-3"><?= esc($service[2]) ?></p>

                        <ul class="list-unstyled text-muted small">
                            <?php foreach ($service[3] as $item): ?>
                                <li><i class="fas fa-check text-success me-2"></i><?= esc($item) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Commercial Services -->
<section class="section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-primary-custom mb-3">
                    <i class="fas fa-building text-secondary-custom me-3"></i>Commercial Services
                </h2>
                <p class="lead text-muted">
                    Reliable electrical solutions for businesses, offices, retail spaces,
                    and industrial facilities.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <?php foreach ($commercialServices as $service): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 p-4 feature-item">
                        <div class="feature-icon">
                            <i class="<?= esc($service[0]) ?>"></i>
                        </div>

                        <h4 class="text-primary-custom mb-3"><?= esc($service[1]) ?></h4>
                        <p class="text-muted mb-3"><?= esc($service[2]) ?></p>

                        <ul class="list-unstyled text-muted small">
                            <?php foreach ($service[3] as $item): ?>
                                <li><i class="fas fa-check text-success me-2"></i><?= esc($item) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
$solarServices = [
    ['fas fa-sun', 'Solar Panel Installation', 'Complete solar photovoltaic system design and installation for residential and commercial properties.', ['System design & engineering', 'Permit acquisition', 'Professional installation', 'Grid interconnection']],
    ['fas fa-battery-full', 'Energy Storage Systems', 'Battery storage solutions to store solar energy and provide backup power during outages.', ['Battery system design', 'Backup power solutions', 'Grid-tie with battery backup', 'Energy management systems']],
    ['fas fa-calculator', 'Energy Consultation', 'Comprehensive energy assessments and consultation to determine the best renewable energy solutions.', ['Site assessments', 'Energy usage analysis', 'ROI calculations', 'Financing options']],
    ['fas fa-cog', 'System Maintenance', 'Ongoing maintenance and monitoring services to ensure optimal performance of your solar energy system.', ['Performance monitoring', 'Preventive maintenance', 'System cleaning', 'Warranty support']]
];
?>

<!-- Solar Services -->
<section class="section-padding bg-light-custom">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-primary-custom mb-3">
                    <i class="fas fa-solar-panel text-secondary-custom me-3"></i>Solar & Renewable Energy
                </h2>
                <p class="lead text-muted">
                    Sustainable energy solutions to reduce your carbon footprint and energy costs
                    with cutting-edge solar technology.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <?php foreach ($solarServices as $service): ?>
                <div class="col-lg-6">
                    <div class="card h-100 p-4 feature-item">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-3 text-center">
                                <div class="feature-icon mx-0">
                                    <i class="<?= esc($service[0]) ?>"></i>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <h4 class="text-primary-custom mb-2"><?= esc($service[1]) ?></h4>
                                <p class="text-muted mb-3"><?= esc($service[2]) ?></p>

                                <ul class="list-unstyled text-muted small">
                                    <?php foreach ($service[3] as $item): ?>
                                        <li><i class="fas fa-check text-success me-2"></i><?= esc($item) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Emergency Services -->
<section class="section-padding bg-danger text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-bold mb-4">
                    <i class="fas fa-exclamation-triangle text-warning me-3"></i>24/7 Emergency Services
                </h2>

                <p class="lead mb-4">
                    Electrical emergencies do not wait for business hours. Our emergency response
                    team is available 24/7 to handle urgent electrical issues and ensure your safety.
                </p>

                <div class="row g-4 mt-4">
                    <div class="col-md-4">
                        <div class="emergency-item">
                            <i class="fas fa-fire text-warning mb-3" style="font-size: 3rem;"></i>
                            <h4>Electrical Fires</h4>
                            <p>Immediate response to electrical fires and safety hazards.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="emergency-item">
                            <i class="fas fa-power-off text-warning mb-3" style="font-size: 3rem;"></i>
                            <h4>Power Outages</h4>
                            <p>Quick diagnosis and restoration of electrical power.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="emergency-item">
                            <i class="fas fa-zap text-warning mb-3" style="font-size: 3rem;"></i>
                            <h4>Electrical Faults</h4>
                            <p>Emergency repairs for dangerous electrical conditions.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <a href="tel:5551234567" class="btn btn-warning btn-lg me-3">
                        <i class="fas fa-phone me-2"></i>Emergency: (555) 123-4567
                    </a>

                    <a href="<?= base_url('contact') ?>" class="btn btn-outline-light btn-lg">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="section-padding">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-bold text-primary-custom mb-3">Our Service Process</h2>
                <p class="lead text-muted">
                    A streamlined approach from consultation to completion.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <?php
            $steps = [
                ['1', 'Consultation', 'Free consultation to understand your needs and provide expert recommendations.'],
                ['2', 'Assessment', 'Thorough site assessment and detailed project planning with transparent pricing.'],
                ['3', 'Installation', 'Professional installation by licensed electricians using quality materials and equipment.'],
                ['4', 'Follow-up', 'Quality inspection, testing, and ongoing support with comprehensive warranties.']
            ];
            ?>

            <?php foreach ($steps as $step): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="text-center feature-item">
                        <div class="process-step bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"
                             style="width: 80px; height: 80px;">
                            <span class="h3 mb-0"><?= esc($step[0]) ?></span>
                        </div>

                        <h4 class="text-primary-custom mb-3"><?= esc($step[1]) ?></h4>
                        <p class="text-muted"><?= esc($step[2]) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding bg-light-custom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold text-primary-custom mb-3">Ready to Get Started?</h2>

                <p class="lead text-muted mb-4">
                    Contact us today for a free consultation and quote. Our expert team is ready
                    to help you with all your electrical needs, from simple repairs to complex installations.
                </p>
            </div>

            <div class="col-lg-4 text-lg-end">
                <a href="<?= base_url('contact') ?>" class="btn btn-primary btn-lg me-3">
                    Get Free Quote
                </a>

                <a href="tel:5551234567" class="btn btn-outline-primary btn-lg">
                    <i class="fas fa-phone me-2"></i>Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>