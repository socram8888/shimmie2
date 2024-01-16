<?php

declare(strict_types=1);

namespace Shimmie2;

class LinkScanInfo extends ExtensionInfo
{
    public const KEY = "link_scan";

    public string $key = self::KEY;
    public string $name = "Link Scan";
    public string $url = self::SHIMMIE_URL;
    public array $authors = self::SHISH_AUTHOR;
    public string $license = self::LICENSE_GPLV2;
    public string $description = "Find posts that are referenced in a block of text";
    public ?string $documentation = "With this extension enabled, you can paste a block of text into the search field, and the code will scan the text for URLs referencing the site, and show them as search results";
}