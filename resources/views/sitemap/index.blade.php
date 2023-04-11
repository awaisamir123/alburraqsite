<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

  <url>
        <loc>https://www.al-burraq.com</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/services</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/services/website-designing-and-development</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/services/php-development</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/services/laravel-development-company-usa</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/services/coldfusion-development</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/services/wordpress-development</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/services/mobile-app-development</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/services/android-development</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/services/ios-development</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/services/artificial-intelligence</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/services/python-development</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/services/machine-learning</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/services/digital-marketing</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/services/seo-company-in-usa</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/services/social-media-marketing</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/contact-us</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

     <url>
        <loc>https://al-burraq.com/about-us</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>

    @foreach ($portfolios as $portfolio)
     <url>
        <loc>{{ route('portfolio.detail',[strtolower(str_replace(' ','-' ,$portfolio->title)),$portfolio->id]) }}</loc>
        <lastmod> {{ date('Y-m-d') }} </lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>
   @endforeach

</urlset>
