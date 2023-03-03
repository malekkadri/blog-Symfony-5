<?php

namespace App\Rss;

class Rss
{
    /**
     * @param $articles
     * @return string
     */
    public static function generate($articles): string
    {
        $xml = <<<xml
        <?xml version='1.0' encoding='UTF-8'?>
        <rss version='2.0'>
        <channel>
        <title>citizenz.info : blog Geek et Libre</title>
        <link>https://www.citizenz.info</link>
        <description>Blog Geek et Libre</description>
        <language>fr</language>
        xml;
        foreach ($articles as $article) {

            $title = self::xmlEscape($article->getTitle());
            $slug = self::xmlEscape($article->getSlug());
            $pubDate = $article->getCreatedAt()->format('D, d M Y H:i:s T');
            $xml .= <<<xml
            <item>
            <title>{$title}</title>
            <link>https://www.citizenz.info/article/{$slug}</link>
            <description>{$slug}</description>
            <pubDate>$pubDate</pubDate>
            </item>
            xml;
        }
        $xml .= "</channel></rss>";

        return $xml;
    }

    private static function xmlEscape($string)
    {
        return str_replace(array('&', '<', '>', '\'', '"'), array('&amp;', '&lt;', '&gt;', '&apos;', '&quot;'), $string);
    }
}
