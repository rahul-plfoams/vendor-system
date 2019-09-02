<?php
route::set('index.php', function () {
    index::CreateView('index');
});
route::set('log-in', function () {
    login::CreateView('login');
});
route::set('admin', function () {
    admin::CreateView('admin');
});
route::set('checklogin', function () {
    checklogin::CreateView('checklogin');
});
route::set('vendor', function () {
    vendor::CreateView('vendor');
});
route::set('test', function () {
    test::CreateView('test');
});
route::set('about-us', function () {
    aboutus::CreateView('aboutus');
});
route::set('contact-us', function () {
    contactus::CreateView('contactus');
});
