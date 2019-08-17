<?php
route::set('index.php', function () {
    index::CreateView('index');
});
route::set('about-us', function () {
    aboutus::CreateView('aboutus');
});
route::set('contact-us', function () {
    contactus::CreateView('contactus');
});
