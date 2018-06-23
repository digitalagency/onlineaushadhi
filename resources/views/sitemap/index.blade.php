<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>http://onlineaushadhi.com</loc>
        <lastmod>2017-12-29T05:19:25+00:00</lastmod>
        <priority>1</priority>
    </url>
    <url>
        <loc>http://onlineaushadhi.com/about</loc>
        <lastmod>2017-12-29T05:19:25+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://onlineaushadhi.com/products</loc>
        <lastmod>2017-12-29T05:19:25+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://onlineaushadhi.com/register</loc>
        <lastmod>2017-12-29T05:19:25+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://onlineaushadhi.com/faq</loc>
        <lastmod>2017-12-29T05:19:25+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://onlineaushadhi.com/return</loc>
        <lastmod>2017-12-29T05:19:25+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://onlineaushadhi.com/terms</loc>
        <lastmod>2017-12-29T05:19:25+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    @foreach($sitemaps as $sitemap)
        <url>
            <loc>http://onlineaushadhi.com/products/{{ $sitemap->slug }}</loc>
            <lastmod>{{ \Carbon\Carbon::parse($sitemap->publishes_at)->format('c') }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>