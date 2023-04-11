<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return "view is cleared";
});

Route::get('/route-clear', function() {
    Artisan::call('route:clear');
    return "route is cleared";
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return "config is cached";
});

Route::get('/optimize-clear', function() {
    Artisan::call('optimize:clear');
    return "optimize is cached";
});

Route::get('/','\App\Http\Controllers\HomePageController@index')->name('homepage');

Route::get('/privacy-policy','PrivacyPageController@index')->name('privacy');

Route::get('/hire-developer','\App\Http\Controllers\HomePageController@developer')->name('developer');
Route::get('/hire-marketer','\App\Http\Controllers\HomePageController@marketer')->name('marketer');

Route::post('/add-contact','HomePageController@addContact')->name('addContact');

// Route::get('/home1','HomePageController@home')->name('home');
Route::get('awais',function(){
    echo 'awais';
});






//Route::resource('review','ReviewController');


//portfolio
//Route::get('admin/portfolio/create','PortfolioController@create')->name('portfolio.create');
//Route::resource('portfolio','PortfolioController');
Route::get('/portfolio','\App\Http\Controllers\PortfolioController@index')->name('portfolio.index');
Route::get('/portfolio/{title}/{id}','\App\Http\Controllers\PortfolioController@detail')->name('portfolio.detail');

Route::get('/our-talent-showcase','\App\Http\Controllers\PortfolioController@talentsIndex')->name('talents.index');

//about
Route::resource('about-us','\App\Http\Controllers\AboutPageController');


//contact us
Route::resource('contact-us','\App\Http\Controllers\ContactPageController');
// Route::get('privacy-policy','ContactPageController@privacy_policy');
//services
Route::get('/services','\App\Http\Controllers\ServicesPageController@index')->name('services.index');
Route::get('/services/website-designing-and-development','\App\Http\Controllers\ServicesPageController@webDesignAndDevelopment')->name('services.webdesignanddevelopment');
Route::get('/services/wordpress-development','\App\Http\Controllers\ServicesPageController@wordpressDevelopment')->name('services.wordpressdevelopment');
Route::get('/services/mobile-app-development','\App\Http\Controllers\ServicesPageController@mobileAppDevelopment')->name('services.appdevelopment');
Route::get('/services/laravel-development-company-usa','\App\Http\Controllers\ServicesPageController@laravelDevelopment')->name('services.laraveldevelopment');
Route::get('/services/software-development','\App\Http\Controllers\ServicesPageController@softwareDevelopment')->name('services.softwaredevelopment');
Route::get('/services/seo-company-in-usa','\App\Http\Controllers\ServicesPageController@seo')->name('services.seo');
Route::get('/services/social-media-marketing','\App\Http\Controllers\ServicesPageController@socialMediaMarketing')->name('services.socialmediamarketing');
Route::get('/services/machine-learning','\App\Http\Controllers\ServicesPageController@machineLearning')->name('services.machinelearning');
Route::get('/services/artificial-intelligence','\App\Http\Controllers\ServicesPageController@artificialIntelligence')->name('services.artificialintelligence');

//new routes for new pages
Route::get('/services/php-development','\App\Http\Controllers\ServicesPageController@phpDevelopment')->name('services.phpdevelopment');
Route::get('/services/coldfusion-development','\App\Http\Controllers\ServicesPageController@coldfusionDevelopment')->name('services.coldfusiondevelopment');
Route::get('/services/android-development','\App\Http\Controllers\ServicesPageController@androidDevelopment')->name('services.androiddevelopment');
Route::get('/services/ios-development','\App\Http\Controllers\ServicesPageController@iosDevelopment')->name('services.iosdevelopment');
Route::get('/services/python-development','\App\Http\Controllers\ServicesPageController@pythonDevelopment')->name('services.pythondevelopment');
Route::get('/services/digital-marketing','\App\Http\Controllers\ServicesPageController@digitalMarketing')->name('services.digitalmarketing');
//Blog
Route::resource('blogs','BlogPageController');





Route::post('/message','\App\Http\Controllers\MessageController@store')->name('message.store');


Route::get('/admin', function (){
    return redirect(route('home'));
});

Route::get('admin/dashboard', '\App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');


Route::group(['prefix' => 'admin',  'middleware' => ['adminAuth','auth']],function () {

    Route::resource('/hire-developer','\App\Http\Controllers\HireDeveloperController');
    Route::post('/hire-developer/delete','\App\Http\Controllers\HireDeveloperController@hireDeveloperDelete')->name('hireDeveloperDelete');

    //home

    //Route::get('dashboard', 'HomeController@index')->name('home');



    Route::get('review-list','\App\Http\Controllers\ReviewController@index')->name('review.index');
    Route::get('create-review','\App\Http\Controllers\ReviewController@create')->name('review.create');
    Route::get('edit-review/{id}','\App\Http\Controllers\ReviewController@edit')->name('review.edit');
    Route::delete('delete-review/{id}','\App\Http\Controllers\ReviewController@destroy')->name('review.destroy');
    Route::post('save-review','\App\Http\Controllers\ReviewController@store')->name('review.store');
    Route::patch('update-review/{id}','\App\Http\Controllers\ReviewController@update')->name('review.update');

    Route::get('portfolio-list','\App\Http\Controllers\PortfolioController@portfolioList')->name('portfolio.list');
    Route::get('create-portfolio','\App\Http\Controllers\PortfolioController@create')->name('portfolio.create');
    Route::post('save-portfolio','\App\Http\Controllers\PortfolioController@store')->name('portfolio.store');
    Route::get('edit-portfolio/{id}','\App\Http\Controllers\PortfolioController@edit')->name('portfolio.edit');
    Route::patch('update-portfolio/{id}','\App\Http\Controllers\PortfolioController@update')->name('portfolio.update');
    Route::delete('destroy-portfolio/{id}','\App\Http\Controllers\PortfolioController@destroy')->name('portfolio.destroy');


    //message
//Route::get('/message/response','MessageController@responsedMessages')->name('message.responsemessages');
//Route::resource('admin/messages','MessageController');
    Route::get('messages-list','\App\Http\Controllers\MessageController@index')->name('message.index');
    Route::get('create-message','\App\Http\Controllers\MessageController@create')->name('message.create');

    Route::get('messages/{id}','\App\Http\Controllers\MessageController@show')->name('message.show');
    Route::get('reply-message/{id}','\App\Http\Controllers\MessageController@edit')->name('message.edit');
    Route::patch('update-message/{id}','\App\Http\Controllers\MessageController@update')->name('message.update');
    Route::delete('destroy-message/{id}','\App\Http\Controllers\MessageController@destroy')->name('message.destroy');



    //member
//Route::resource('team-member','TeamMemberController');
    Route::get('team-member-list','\App\Http\Controllers\TeamMemberController@index')->name('team-member.index');
    Route::get('create-team-member','\App\Http\Controllers\TeamMemberController@create')->name('team-member.create');
    Route::get('edit-team-member/{id}','\App\Http\Controllers\TeamMemberController@edit')->name('team-member.edit');
    Route::delete('delete-team-member/{id}','\App\Http\Controllers\TeamMemberController@destroy')->name('team-member.destroy');
    Route::patch('update-team-member/{id}','\App\Http\Controllers\TeamMemberController@update')->name('team-member.update');
    Route::post('save-team-member','\App\Http\Controllers\TeamMemberController@store')->name('team-member.store');


    //tag
//Route::resource('tag','TagController');
    Route::get('tags-list','\App\Http\Controllers\TagController@index')->name('tag.index');
    Route::delete('delete-tag/{id}','\App\Http\Controllers\TagController@destroy')->name('tag.destroy');
    Route::get('edit-tag/{id}','\App\Http\Controllers\TagController@edit')->name('tag.edit');
    Route::post('save-tag','\App\Http\Controllers\TagController@store')->name('tag.store');
    Route::patch('update-tag/{id}','\App\Http\Controllers\TagController@update')->name('tag.update');

    //Category
//Route::resource('category','CategoryController');
    Route::get('category-list','\App\Http\Controllers\CategoryController@index')->name('category.index');
    Route::get('edit-category/{id}','\App\Http\Controllers\CategoryController@edit')->name('category.edit');
    Route::delete('delete-category/{id}','\App\Http\Controllers\CategoryController@destroy')->name('category.destroy');
    Route::post('save-category','\App\Http\Controllers\CategoryController@store')->name('category.store');
    Route::patch('update-category/{id}','\App\Http\Controllers\CategoryController@update')->name('category.update');

});
Route::get('sitemap.xml','\App\Http\Controllers\GeneralController@siteMap')->name('siteMap');








Route::redirect('/best-mobile-application-development-platform/', '/blogs/best-mobile-application-development-platform/', 301);
Route::redirect('/top-10-benefits-social-media-marketing/', '/blogs/top-10-benefits-social-media-marketing/', 301);
Route::redirect('/get-start-going-digital-marketing/', '/blogs/get-start-going-digital-marketing/', 301);
Route::redirect('/many-ways-updating-wordpress-sites/', '/blogs/many-ways-updating-wordpress-sites/', 301);
Route::redirect('/factors-contributing-towards-android-app-development-cost/', '/blogs/factors-contributing-towards-android-app-development-cost/', 301);
Route::redirect('/seo-depends-much-content/', '/blogs/seo-depends-much-content/', 301);
Route::redirect('/importance-mobile-application-development-digital-marketing/', '/blogs/importance-mobile-application-development-digital-marketing/', 301);

Route::redirect('/advantages-disadvantages-creating-website-fixed-price/', '/blogs/advantages-disadvantages-creating-website-fixed-price/', 301);
Route::redirect('/best-time-post-instagram-facebook-twitter-linked/', '/blogs/best-time-post-instagram-facebook-twitter-linked/', 301);
Route::redirect('/how-to-monetize-your-website/', '/blogs/how-to-monetize-your-website/', 301);
Route::redirect('/choose-excellent-android-application-developers/', '/blogs/choose-excellent-android-application-developers/', 301);
Route::redirect('/plan-blog-post-6-easy-steps/', '/blogs/plan-blog-post-6-easy-steps/', 301);
Route::redirect('/building-strong-social-media-presence-customers-love/', '/blogs/building-strong-social-media-presence-customers-love/', 301);
Route::redirect('/seo-check-list-launching-website/', '/blogs/seo-check-list-launching-website/', 301);
Route::redirect('/effective-seo-tactics-promote-cryptocurrency-websites-web/', '/blogs/effective-seo-tactics-promote-cryptocurrency-websites-web/', 301);

Route::redirect('/how-to-deal-with-404-error-for-search-engine-optimization/', '/blogs/how-to-deal-with-404-error-for-search-engine-optimization/', 301);
Route::redirect('/move-wordpress-site-http/', '/blogs/move-wordpress-site-http/', 301);
Route::redirect('/results-proven-methods-creating-great-web-design/', '/blogs/results-proven-methods-creating-great-web-design/', 301);
Route::redirect('/improve-search-engine-position-ranking-keep/', '/blogs/improve-search-engine-position-ranking-keep/', 301);
Route::redirect('/seo-trends-will-put-ahead-competition/', '/blogs/seo-trends-will-put-ahead-competition/', 301);
Route::redirect('/10-ways-social-media-marketing-help-marketing-efforts/', '/blogs/10-ways-social-media-marketing-help-marketing-efforts/', 301);
Route::redirect('/features-all-successful-websites-for-restaurants-should-have/', '/blogs/features-all-successful-websites-for-restaurants-should-have/', 301);
Route::redirect('/tips-using-hashtags-across-social-media-platforms/', '/blogs/tips-using-hashtags-across-social-media-platforms/', 301);
Route::redirect('/mobile-friendly-sites-can-increase-conversions-50-use-keywords/', '/blogs/mobile-friendly-sites-can-increase-conversions-50-use-keywords/', 301);
Route::redirect('/tips-mobile-app-development-ui-design-trends/', '/blogs/tips-mobile-app-development-ui-design-trends/', 301);
Route::redirect('/things-consider-going-web-development/', '/blogs/things-consider-going-web-development/', 301);

Route::redirect('/technical-cofounder-recipe-startup/', '/blogs/technical-cofounder-recipe-startup/', 301);
Route::redirect('/authority-link-building-services-can-boost-website-traffic/', '/blogs/authority-link-building-services-can-boost-website-traffic/', 301);
Route::redirect('/update-wordpress-regularly/', '/blogs/update-wordpress-regularly/', 301);
Route::redirect('/10-cheap-marketing-ideas-can-work-low-budget/', '/blogs/10-cheap-marketing-ideas-can-work-low-budget/', 301);

Route::redirect('/5-important-tasks-need-automate-e-commerce-store/', '/blogs/5-important-tasks-need-automate-e-commerce-store/', 301);
Route::redirect('/wordpress-works-behind-scenes/', '/blogs/wordpress-works-behind-scenes/', 301);
Route::redirect('/entrepreneurs-guide-app-development/', '/blogs/entrepreneurs-guide-app-development/', 301);
Route::redirect('/whats-next-mobile-app-development/', '/blogs/whats-next-mobile-app-development/', 301);
Route::redirect('/10-ideas-increase-sales-online/', '/blogs/10-ideas-increase-sales-online/', 301);
Route::redirect('/5-tips-increase-website-conversions/', '/blogs/5-tips-increase-website-conversions/', 301);
Route::redirect('/8-key-misconceptions-wordpress-development/', '/blogs/8-key-misconceptions-wordpress-development/', 301);
Route::redirect('/evaluate-quality-website-design/', '/blogs/evaluate-quality-website-design/', 301);
Route::redirect('/react-js-web-technology-year-2019/', '/blogs/react-js-web-technology-year-2019/', 301);
Route::redirect('/tips-exceed-competitors-social-media-marketing/', '/blogs/tips-exceed-competitors-social-media-marketing/', 301);
Route::redirect('/develop-profitable-digital-marketing-funnel/', '/blogs/develop-profitable-digital-marketing-funnel/', 301);
Route::redirect('/user-experience-focus-ux-design-ergonomics/', '/blogs/user-experience-focus-ux-design-ergonomics/', 301);
Route::redirect('/mobile-first-indexing/', '/blogs/mobile-first-indexing/', 301);
Route::redirect('/influencer-marketing-changing-social-media-agencies/', '/blogs/influencer-marketing-changing-social-media-agencies/', 301);
Route::redirect('/extensive-considerations-designing-mobile-application/', '/blogs/extensive-considerations-designing-mobile-application/', 301);
Route::redirect('/video-marketing-powerful-brand/', '/blogs/video-marketing-powerful-brand/', 301);
Route::redirect('/hiring-remote-resource-company/', '/blogs/hiring-remote-resource-company/', 301);
Route::redirect('/plagiarized-content-makes-website/', '/blogs/plagiarized-content-makes-website/', 301);
Route::redirect('/7-crucial-skills-social-media-manager-must/', '/blogs/7-crucial-skills-social-media-manager-must/', 301);
Route::redirect('/user-friendly-websites-matters/', '/blogs/user-friendly-websites-matters/', 301);
Route::redirect('/mobile-applications-revolutionized-construction-industry/', '/blogs/mobile-applications-revolutionized-construction-industry/', 301);

Route::redirect('/wordpress-vs-customize-websites-better/', '/blogs/wordpress-vs-customize-websites-better/', 301);
Route::redirect('/write-seo-friendly-blog-organic-traffic/', '/blogs/write-seo-friendly-blog-organic-traffic/', 301);
Route::redirect('/top-social-media-marketing-trends-2019/', '/blogs/top-social-media-marketing-trends-2019/', 301);
Route::redirect('/affordable-website-help-grow-business/', '/blogs/affordable-website-help-grow-business/', 301);
Route::redirect('/why-you-were-unable-to-find-a-right-fit-tech-person-for-your-startup/', '/blogs/why-you-were-unable-to-find-a-right-fit-tech-person-for-your-startup/', 301);
Route::redirect('/top-ten-wordpress-plugins-install-site/', '/blogs/top-ten-wordpress-plugins-install-site/', 301);
Route::redirect('/drive-business-business-lead-seo/', '/blogs/drive-business-business-lead-seo/', 301);
Route::redirect('/5-mistakes-avoid-can-wreck-website/', '/blogs/5-mistakes-avoid-can-wreck-website/', 301);
Route::redirect('/create-pop-wordpress/', '/blogs/create-pop-wordpress/', 301);
Route::redirect('/todays-tip-how-to-write-an-email/', '/blogs/todays-tip-how-to-write-an-email/', 301);
Route::redirect('/laravel-preferable-organizations-php-frameworks/', '/blogs/laravel-preferable-organizations-php-frameworks/', 301);
Route::redirect('/five-techniques-to-improve-your-sites-ranking/', '/blogs/five-techniques-to-improve-your-sites-ranking/', 301);
Route::redirect('/need-to-know-about-software-quality-assurance/', '/blogs/need-to-know-about-software-quality-assurance/', 301);
Route::redirect('/optimize-title-tag-meta-description/', '/blogs/optimize-title-tag-meta-description/', 301);
Route::redirect('/off-page-seo-techniques-which-mostly-used-2018/', '/blogs/off-page-seo-techniques-which-mostly-used-2018/', 301);
Route::redirect('/impact-artificial-intelligence-voice-search-seo/', '/blogs/impact-artificial-intelligence-voice-search-seo/', 301);
Route::redirect('/ionic-a-professional-guide/', '/blogs/ionic-a-professional-guide/', 301);
Route::redirect('/impression-mobile-applications-education-industry/', '/blogs/impression-mobile-applications-education-industry/', 301);
Route::redirect('/difference-mobile-web-application/', '/blogs/difference-mobile-web-application/', 301);
Route::redirect('/trust-factor-while-hiring-a-remote-resource-from-other-countries-for-us-citizen/', '/blogs/trust-factor-while-hiring-a-remote-resource-from-other-countries-for-us-citizen/', 301);
Route::redirect('/5-reasons-need-review-social-media-marketing-strategies/', '/blogs/5-reasons-need-review-social-media-marketing-strategies/', 301);
Route::redirect('/small-big-bugs-roles-website-project/', '/blogs/small-big-bugs-roles-website-project/', 301);
Route::redirect('/budget-maintenance-mobile-application/', '/blogs/budget-maintenance-mobile-application/', 301);
Route::redirect('/advanced-seo-techniques-to-double-your-website-traffic/', '/blogs/advanced-seo-techniques-to-double-your-website-traffic/', 301);
Route::redirect('/bug-error-and-defects/', '/blogs/bug-error-and-defects/', 301);
Route::redirect('/difference-between-quality-control-and-quality-assurance/', '/blogs/difference-between-quality-control-and-quality-assurance/', 301);
Route::redirect('/10-best-wordpress-security-scanners-detect-malicious-codes-hackers/', '/blogs/10-best-wordpress-security-scanners-detect-malicious-codes-hackers/', 301);
Route::redirect('/5-strategies-generating-web-traffic-without-natural-search/', '/blogs/5-strategies-generating-web-traffic-without-natural-search/', 301);
Route::redirect('/launch-mobile-app-successfully/', '/blogs/launch-mobile-app-successfully/', 301);
Route::redirect('/best-free-top-seo-tools-mostly-used-2019/', '/blogs/best-free-top-seo-tools-mostly-used-2019/', 301);

Route::redirect('/best-technologies-follow-website-development-2019/', '/blogs/best-technologies-follow-website-development-2019/', 301);
Route::redirect('/succeed-content-seo/', '/blogs/succeed-content-seo/', 301);
Route::redirect('/future-wordpress-development-companies-usa/', '/blogs/future-wordpress-development-companies-usa/', 301);
Route::redirect('/laravel-broadcasting/', '/blogs/laravel-broadcasting/', 301);
Route::redirect('/wordpress-site-seo-best-techniques-2019/', '/blogs/wordpress-site-seo-best-techniques-2019/', 301);
Route::redirect('/optimize-visual-strategy-instagram/', '/blogs/optimize-visual-strategy-instagram/', 301);
Route::redirect('/5-factors-impact-cost-website/', '/blogs/5-factors-impact-cost-website/', 301);
Route::redirect('/8-reasons-choose-ionic-mobile-application-development-2019/', '/blogs/8-reasons-choose-ionic-mobile-application-development-2019/', 301);
Route::redirect('/comparison-5-best-content-management-systems/', '/blogs/comparison-5-best-content-management-systems/', 301);
Route::redirect('/changing-website-design-effect-seo/', '/blogs/changing-website-design-effect-seo/', 301);
Route::redirect('/8-tips-set-social-media-marketing-goals/', '/blogs/8-tips-set-social-media-marketing-goals/', 301);
Route::redirect('/biometric-authentication-improved-banking-experience/', '/blogs/biometric-authentication-improved-banking-experience/', 301);
Route::redirect('/future-wordpress-e-commerce-websites/', '/blogs/future-wordpress-e-commerce-websites/', 301);
Route::redirect('/major-changes-google-seo-algorithms/', '/blogs/major-changes-google-seo-algorithms/', 301);
Route::redirect('/generate-sales-social-networks/', '/blogs/generate-sales-social-networks/', 301);
Route::redirect('/develop-dynamic-website/', '/blogs/develop-dynamic-website/', 301);
Route::redirect('/real-estate-business-need-mobile-application/', '/blogs/real-estate-business-need-mobile-application/', 301);
Route::redirect('/analyze-loading-time-website/', '/blogs/analyze-loading-time-website/', 301);
Route::redirect('/configure-wordpress-site-basic-guide/', '/blogs/configure-wordpress-site-basic-guide/', 301);
Route::redirect('/5-social-media-marketing-factors-matter/', '/blogs/5-social-media-marketing-factors-matter/', 301);
Route::redirect('/5-factors-social-media-marketing-important-business/', '/blogs/5-factors-social-media-marketing-important-business/', 301);
Route::redirect('/al-burraq-technologies-helping-entrepreneurs-developing-technology/', '/blogs/al-burraq-technologies-helping-entrepreneurs-developing-technology/', 301);
Route::redirect('/need-convert-psd-website-html/', '/blogs/need-convert-psd-website-html/', 301);
Route::redirect('/5-essential-mobile-application-developments-trends-follow-2019/', '/blogs/5-essential-mobile-application-developments-trends-follow-2019/', 301);
Route::redirect('/use-wordpress-develop-custom-web-apps/', '/blogs/use-wordpress-develop-custom-web-apps/', 301);
Route::redirect('/build-natural-links-website/', '/blogs/build-natural-links-website/', 301);
Route::redirect('/8-social-media-marketing-ideas-will-bring-roi-want/', '/blogs/8-social-media-marketing-ideas-will-bring-roi-want/', 301);
Route::redirect('/everything-need-know-dynamic-web-apps/', '/blogs/everything-need-know-dynamic-web-apps/', 301);
Route::redirect('/develop-apps-improves-revenues/', '/blogs/develop-apps-improves-revenues/', 301);
Route::redirect('/6-ways-learn-wordpress/', '/blogs/6-ways-learn-wordpress/', 301);
Route::redirect('/set-reach-seo-goals-business/', '/blogs/set-reach-seo-goals-business/', 301);
Route::redirect('/tips-build-social-media-campaigns-niche-audience/', '/blogs/tips-build-social-media-campaigns-niche-audience/', 301);
Route::redirect('/10-interview-question-android-developer-get-hired/', '/blogs/10-interview-question-android-developer-get-hired/', 301);
Route::redirect('/7-effective-tips-reduce-wordpress-site-load-time/', '/blogs/7-effective-tips-reduce-wordpress-site-load-time/', 301);
Route::redirect('/get-customers-using-social-media/', '/blogs/get-customers-using-social-media/', 301);
Route::redirect('/top-8-technologies-develop-mobile-apps-2019/', '/blogs/top-8-technologies-develop-mobile-apps-2019/', 301);
Route::redirect('/comparison-wordpress-content-management-systems/', '/blogs/comparison-wordpress-content-management-systems/', 301);

Route::redirect('/top-10-social-media-marketing-blogs-need-follow-2019/', '/blogs/top-10-social-media-marketing-blogs-need-follow-2019/', 301);
Route::redirect('/use-website-attract-customers/', '/blogs/use-website-attract-customers/', 301);
Route::redirect('/deal-broken-links/', '/blogs/deal-broken-links/', 301);
Route::redirect('/increase-instagram-following/', '/blogs/increase-instagram-following/', 301);
Route::redirect('/7-top-mobile-application-development-blogs/', '/blogs/7-top-mobile-application-development-blogs/', 301);
Route::redirect('/best-payment-methods-integrate-e-commerce-websites/', '/blogs/best-payment-methods-integrate-e-commerce-websites/', 301);
Route::redirect('/seo-important-website/', '/blogs/seo-important-website/', 301);
Route::redirect('/best-ways-improve-linkedin-profile/', '/blogs/best-ways-improve-linkedin-profile/', 301);
Route::redirect('/uiux-matters-lot-mobile-application/', '/blogs/uiux-matters-lot-mobile-application/', 301);
Route::redirect('/things-spoil-first-seconds-site/', '/blogs/things-spoil-first-seconds-site/', 301);
Route::redirect('/optimize-seo-wordpress-site/', '/blogs/optimize-seo-wordpress-site/', 301);
Route::redirect('/7-simple-ways-improve-seo-results/', '/blogs/7-simple-ways-improve-seo-results/', 301);
Route::redirect('/promote-product-using-smm-methods/', '/blogs/promote-product-using-smm-methods/', 301);
Route::redirect('/app-developments-mistakes-disappoint-users/', '/blogs/app-developments-mistakes-disappoint-users/', 301);
Route::redirect('/beginners-guide-react-js/', '/blogs/beginners-guide-react-js/', 301);
Route::redirect('/need-shift-business-site-wordpress/', '/blogs/need-shift-business-site-wordpress/', 301);
Route::redirect('/artificial-intelligence-affecting-seo/', '/blogs/artificial-intelligence-affecting-seo/', 301);
Route::redirect('/index-new-content-faster/', '/blogs/index-new-content-faster/', 301);
Route::redirect('/5-wordpress-development-predictions-will-happen-end-year/', '/blogs/5-wordpress-development-predictions-will-happen-end-year/', 301);
Route::redirect('/experience-unstoppable-growth-dynamics-365s-ai-features/', '/blogs/experience-unstoppable-growth-dynamics-365s-ai-features/', 301);
Route::redirect('/quickbooks-best-business/', '/blogs/quickbooks-best-business/', 301);
Route::redirect('/experience-unstoppable-growth-dynamics-365s-ai-features/', '/blogs/experience-unstoppable-growth-dynamics-365s-ai-features/', 301);
Route::redirect('/digital-businesses-can-secure-revenues-2019/', '/blogs/digital-businesses-can-secure-revenues-2019/', 301);
Route::redirect('/innovative-ways-use-technology-education/', '/blogs/innovative-ways-use-technology-education/', 301);
Route::redirect('/generate-leads-business/', '/blogs/generate-leads-business/', 301);
Route::redirect('/best-practices-onsite-strengthen-seo/', '/blogs/best-practices-onsite-strengthen-seo/', 301);
Route::redirect('/heres-how-to-use-marco-polo-the-video-messaging-app-that-could-replace-snapchat-one-day/', '/blogs/heres-how-to-use-marco-polo-the-video-messaging-app-that-could-replace-snapchat-one-day/', 301);
Route::redirect('/how-web-applications-are-transforming-travel-industry/', '/blogs/how-web-applications-are-transforming-travel-industry/', 301);
Route::redirect('/uiux-matters-alot-mobile-application/', '/blogs/uiux-matters-alot-mobile-application/', 301);
Route::redirect('/how-secure-is-your-favourite-messaging-app/', '/blogs/how-secure-is-your-favourite-messaging-app/', 301);
Route::redirect('/social-media-marketing', '/services/social-media-marketing', 301);
Route::redirect('/email-security-5-techniques-protect-account/', '/blogs/email-security-5-techniques-protect-account/', 301);
Route::redirect('/5-social-media-marketing-trends-watch-2018/', '/blogs/5-social-media-marketing-trends-watch-2018/', 301);
Route::redirect('/startup-success-story/', '/blogs/startup-success-story/', 301);
Route::redirect('/strategies-adopt-mobile-application-development-process/', '/blogs/strategies-adopt-mobile-application-development-process/', 301);
Route::redirect('/website-designing-and-development/', '/services/website-designing-and-development/', 301);
Route::redirect('/hacks-to-find-the-right-freelancers/', '/blogs/hacks-to-find-the-right-freelancers/', 301);
Route::redirect('/contact/', '/contact-us/', 301);
Route::redirect('/click-button-download-measures-shift-business-online/', '/blogs/click-button-download-measures-shift-business-online/', 301);
Route::redirect('/rip-microsoft-paint-1985-2017/', '/blogs/rip-microsoft-paint-1985-2017/', 301);
Route::redirect('/mobile-apps-changing-landscape-healthcare-industry/', '/blogs/mobile-apps-changing-landscape-healthcare-industry/', 301);
Route::redirect('/mobile-app-development/', '/services/mobile-app-development/', 301);
Route::redirect('/google-drive-api-integration-in-android-app/', '/blogs/google-drive-api-integration-in-android-app/', 301);
Route::redirect('/react-native-google-api-integration-android-example-using-react-native-google-signing/', '/blogs/react-native-google-api-integration-android-example-using-react-native-google-signing/', 301);
Route::redirect('/retrofit-android-get-and-post-api-request-tutorial/', '/blogs/retrofit-android-get-and-post-api-request-tutorial/', 301);
Route::redirect('/how-to-improve-the-quality-of-software-developments-process/', '/blogs/how-to-improve-the-quality-of-software-developments-process/', 301);
Route::redirect('/why-wordpress-is-perfect/', '/blogs/why-wordpress-is-perfect/', 301);
Route::redirect('/google-releases-android-n-developer-preview-heres-how-to-install-it-on-your-nexus-devices/', '/blogs/google-releases-android-n-developer-preview-heres-how-to-install-it-on-your-nexus-devices/', 301);
Route::redirect('/grow-food-business-lighting-speed/', '/blogs/grow-food-business-lighting-speed/', 301);
Route::redirect('/home', '/', 301);
Route::redirect('/opinion-you-should-be-tech-agnostic-in-every-development-project/', '/blogs/opinion-you-should-be-tech-agnostic-in-every-development-project/', 301);
Route::redirect('generate-leads-business', '/blogs/generate-leads-business/', 301);
Route::redirect('/1928-2016-google-pays-homage-to-edhi/', '/blogs/1928-2016-google-pays-homage-to-edhi/', 301);
Route::redirect('/the-7-pieces-of-a-successful-seo-starter-kit/', '/blogs/the-7-pieces-of-a-successful-seo-starter-kit/', 301);
Route::redirect('/our-portfolio/', '/portfolio', 301);
Route::redirect('/how-to-succeed-with-your-mobile-app/', '/blogs/how-to-succeed-with-your-mobile-app/', 301);
Route::redirect('/wordpress-development/', '/services/wordpress-development/', 301);
Route::redirect('/5g-vs-machine-learning/', '/blogs/5g-vs-machine-learning/', 301);
Route::redirect('/10-tips-developing-high-quality-applications/', '/blogs/10-tips-developing-high-quality-applications/', 301);
Route::redirect('/blogs/set-social-media-workflow/', '/blogs/set-social-media-workflow/', 301);
Route::redirect('/attractive-images-helpful-smm/', '/blogs/attractive-images-helpful-smm/', 301);
Route::redirect('/10-myths-seo-demystified-al-burraq/', '/blogs/10-myths-seo-demystified-al-burraq/', 301);
Route::redirect('/here-are-7-password-tips-to-help-improve-your-online-security/', '/blogs/here-are-7-password-tips-to-help-improve-your-online-security/', 301);
Route::get('mawaisnow',function(){
    echo 'yeah';
});

